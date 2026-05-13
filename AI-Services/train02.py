import os
import pandas as pd
import pickle
import numpy as np
from sklearn.tree import DecisionTreeClassifier
from AI_model import TRAITS
import mysql
import mysql.connector as mysql_connector

def retrain_with_real_data():
    conn = mysql_connector.connect(
        host='viaduct.proxy.rlwy.net',
        port=17159,
        database='railway',
        user='root',
        password='XuSdoqJesaHDFBuAkluAmKOBdGaOYIwZ'
    )
    
    query = """
        SELECT math, creativity, problem_solving, communication_skills,
               technology_interest, leadership, analytical_thinking,
               attention_to_details, biology_interest, fitness_interest,
               teamwork, stress_tolerance, ethics, patience, empathy,
               spatial_thinking, research_drive, persuasion, social_interest,
               risk_taking, aesthetic_sensitivity, chosen_major, disagreement_majors
        FROM student_responses
        WHERE chosen_major IS NOT NULL AND chosen_major != 'none'
    """
    
    real_data = pd.read_sql(query, conn)
    name_map = {t.lower(): t for t in TRAITS}
    real_data = real_data.rename(columns=name_map)
    conn.close()
    
    synthetic = pd.read_csv('majors.csv')

    X_real = [] #will save traits
    y_real =[] #will save major

    for _, row in real_data.iterrows():
        traits = row[TRAITS].values.astype(float)

        #majors that the user agreed about: 
        chosen = [m.strip() for m in str(row['chosen_major']).split(',')
                  if m.strip() and m.strip() not in ['none', '']]
        for major in chosen:
            X_real.append(traits)
            y_real.append(major)

        #now for majors the user disagreed on 
        if chosen and pd.notna(row['disagreement_majors']) and str(row['disagreement_majors']) !='nan': 
            disagreed = [m.strip() for m in str(row['disagreement_majors']).split(',')
                         if m.strip() and m.strip() !='nan']
            for _ in disagreed: 
                # This teaches the tree: these traits → chosen, NOT disagreed
                noise = np.random.uniform(-0.03, 0.03, size=traits.shape)
                sample = np.clip(traits + noise, 0.0, 1.0)
                X_real.append(sample)
                y_real.append(chosen[0])


    X_real = np.array(X_real) if X_real else np.empty((0, len(TRAITS)))
    y_real = np.array(y_real) if y_real else np.array([])
    
    #now for the artifitial data
    X_synthetic = []
    y_synthetic = []
    
    for i in range(len(synthetic)):
        for _ in range(50):  
            noise = np.random.uniform(-0.05, 0.05, size=synthetic[TRAITS].iloc[i].shape)
            sample = np.clip(synthetic[TRAITS].iloc[i].values + noise, 0.0, 1.0)
            X_synthetic.append(sample)
            y_synthetic.append(synthetic['Major'].iloc[i])
    
    if len(X_real) >0: 
        X_combined = np.vstack([X_real, X_synthetic])
        y_combined = np.concatenate([y_real, y_synthetic])
    else: 
        X_combined = np.array(X_synthetic)
        y_combined =  np.array(y_synthetic)
    
    model = DecisionTreeClassifier(max_depth=10, random_state=42)
    model.fit(X_combined, y_combined)
    
    base_dir = os.path.dirname(os.path.abspath(__file__))
    model_path = os.path.join(base_dir, 'model.pkl')

    with open(model_path, 'wb') as f:
        pickle.dump(model, f)
    
    print(f"The AI Model retrained on {len(X_real)} real responses and {len(X_synthetic)} synthetic samples")

if __name__ == '__main__':
    retrain_with_real_data()