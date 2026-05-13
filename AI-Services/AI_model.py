import pandas as pd
import numpy as np
import pickle
import os
from sklearn.metrics.pairwise import cosine_similarity

# Hard requirements to help results logics, so for example a student 
# should have a high intrest in bio in order for a medicine major to me choosen for them
REQUIREMENTS = {
    #for medicine feilds: 
    "Medicine (General)": {
        "Biology_Interest": 0.8,
        "Patience": 0.8,
        "Stress_Tolerance": 0.8,
        "Empathy": 0.7,
    },
    "Medicine (Dermatology Path)": {
        "Biology_Interest": 0.75,
        "Aesthetic_Sensitivity": 0.75,
    },
    "Medicine (Neurology Path)": {
        "Biology_Interest": 0.85,
        "Analytical_Thinking": 0.7,
        "Patience": 0.7,
    },
    "Nursing": {
        "Patience": 0.75,
        "Stress_Tolerance": 0.75,
        "Biology_Interest" : 0.75
    },
    "Psychology": {
        "Empathy": 0.8,
        "Research_Drive": 0.65,
        "Patience": 0.7,
    },
    #for other majors that needs it: 
    "Police Studies": {
        "Ethics": 0.8,
        "Stress_Tolerance": 0.75,
        "Risk_Taking": 0.6,
    },
    "Sports Science": {
        "Fitness_Interest": 0.85,
    },
}

def Hard_requirements(user_ans, major_name):
    if major_name not in REQUIREMENTS:
        return True
    for trait, min_val in REQUIREMENTS[major_name].items():
        if user_ans[trait] < min_val:
            return False
    return True

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
    user_ans = dict(zip(TRAITS, user_traits))
    results =[]
    for idx, row in data.iterrows():
        major_name = row['Major']
        if Hard_requirements(user_ans, major_name):
            results.append(idx)
    filtered = data.loc[results]

    features = filtered[TRAITS].values
    similarities_scores = cosine_similarity([user_traits], features)[0]

    top3_majors = similarities_scores.argsort()[-3:][::-1]

    recommendations = []
    for idx in top3_majors:
        recommendations.append({
            'Major': filtered.iloc[idx]['Major'],
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