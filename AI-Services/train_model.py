import pandas as pd
import pickle 
import os
import numpy as np
from sklearn.tree import DecisionTreeClassifier
from AI_model import load_data, TRAITS

def train_model():
    data = load_data()
    X = data[TRAITS].values
    y = data['Major'].values

    X_expanded = []
    Y_expanded = []

    for i in range(len(X)):
        for _ in range(50): #here we're generating 50 verity of possible trait profile for each major to feed to the AI
            noise = np.random.uniform(-0.05,0.05, size=X[i].shape)
            sample = np.clip(X[i] + noise, 0.0, 1.0)
            X_expanded.append(sample)
            Y_expanded.append(y[i])

    model = DecisionTreeClassifier(max_depth=10, random_state=42)
    model.fit(X_expanded, Y_expanded)

    base_dir = os.path.dirname(os.path.abspath(__file__))
    model_path = os.path.join(base_dir, 'model.pkl')

    with open(model_path, 'wb') as f:
        pickle.dump(model, f)
    
    print(f"Model trained on {len(X_expanded)} samples and saved to model.pkl")

if __name__ == "__main__":
    train_model()