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
    
    X_real = real_data[TRAITS].values
    y_real = real_data['chosen_major'].values
    
    X_synthetic = []
    y_synthetic = []
    
    for i in range(len(synthetic)):
        for _ in range(50):  
            noise = np.random.uniform(-0.05, 0.05, size=synthetic[TRAITS].iloc[i].shape)
            sample = np.clip(synthetic[TRAITS].iloc[i].values + noise, 0.0, 1.0)
            X_synthetic.append(sample)
            y_synthetic.append(synthetic['Major'].iloc[i])
    
    X_combined = np.vstack([X_real, X_synthetic])
    y_combined = np.concatenate([y_real, y_synthetic])
    
    model = DecisionTreeClassifier(max_depth=10, random_state=42)
    model.fit(X_combined, y_combined)
    
    base_dir = os.path.dirname(os.path.abspath(__file__))
    model_path = os.path.join(base_dir, 'model.pkl')

    with open(model_path, 'wb') as f:
        pickle.dump(model, f)
    
    print(f"Model retrained on {len(X_real)} real responses + {len(X_synthetic)} synthetic samples")

if __name__ == '__main__':
    retrain_with_real_data()