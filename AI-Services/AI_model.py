import pandas as pd
import numpy as np
import pickle
import os
from sklearn.metrics.pairwise import cosine_similarity

TRAITS = [
    'Math', 'Creativity', 'Problem_Solving', 'Communication_Skills',
    'Technology_Interest', 'Leadership', 'Analytical_Thinking',
    'Attention_to_Details', 'Biology_Interest', 'Fitness_Interest',
    'Teamwork', 'Stress_Tolerance', 'Ethics', 'Patience',
    'Empathy', 'Spatial_Thinking', 'Research_Drive', 'Persuasion', 'Social_Interest', 
    'Risk_Taking', 'Aesthetic_Sensitivity'
]

def load_data():
    base_dir = os.path.dirname(os.path.abspath(__file__))
    data_path = os.path.join(base_dir, 'majors.csv')
    return pd.read_csv(data_path)

def cosine_recommendation(user_traits, data):
    features = data[TRAITS].values
    similarities_scores = cosine_similarity([user_traits], features)[0]

    top3_majors = similarities_scores.argsort()[-3:][::-1]

    recommendations = []
    for idx in top3_majors:
        recommendations.append({
            'Major': data.iloc[idx]['Major'],
            'Score': round(float(similarities_scores[idx]), 3),
            'Percentage' : round(float(similarities_scores[idx]) * 100, 1)
        })
    return recommendations

def tree_predict(user_traits):
    base_dir = os.path.dirname(os.path.abspath(__file__))
    model_path = os.path.join(base_dir, 'model.pkl')

    if not os.path.exists(model_path):
        return None 
    
    with open(model_path, 'rb') as f: 
        model = pickle.load(f)
    return model.predict([user_traits])[0]
    