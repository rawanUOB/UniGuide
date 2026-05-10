from fastapi import FastAPI, HTTPException
from fastapi.middleware.cors import CORSMiddleware
from pydantic import BaseModel, Field
from AI_model import load_data, cosine_recommendation, tree_predict, TRAITS
import requests 

app = FastAPI(title="UniGuide AI Major Reccommendation Service")

app.add_middleware(
    CORSMiddleware,
    allow_origins=["*"],
    allow_methods=["*"],
    allow_headers=["*"],
)

data = load_data()

class UserInput(BaseModel):
    math: float = Field(..., ge=0.0, le=1.0)
    creativity: float = Field(..., ge=0.0, le=1.0)
    problem_solving: float = Field(..., ge=0.0, le=1.0)
    communication_skills: float = Field(..., ge=0.0, le=1.0)
    technology_interest: float = Field(..., ge=0.0, le=1.0)
    leadership: float = Field(..., ge=0.0, le=1.0)
    analytical_thinking: float = Field(..., ge=0.0, le=1.0)
    attention_to_details: float = Field(..., ge=0.0, le=1.0)
    biology_interest: float = Field(..., ge=0.0, le=1.0)
    fitness_interest: float = Field(..., ge=0.0, le=1.0)
    teamwork: float = Field(..., ge=0.0, le=1.0)
    stress_tolerance: float = Field(..., ge=0.0, le=1.0)
    ethics: float = Field(..., ge=0.0, le=1.0)
    patience: float = Field(..., ge=0.0, le=1.0)
    empathy: float = Field(..., ge=0.0, le=1.0)
    spatial_thinking: float = Field(..., ge=0.0, le=1.0)
    research_drive: float = Field(..., ge=0.0, le=1.0)  
    persuasion: float = Field(..., ge=0.0, le=1.0) 
    social_interest: float = Field(..., ge=0.0, le=1.0) 
    risk_taking: float = Field(..., ge=0.0, le=1.0)
    aesthetic_sensitivity: float = Field(..., ge=0.0, le=1.0)

@app.get("/")
def health_check():
    return {"status" : "UniGuide AI is working perfectly"}

@app.post("/predict")
def predict(user: UserInput):
    try: 
        trait = [
            user.math, user.creativity, user.problem_solving,
            user.communication_skills, user.technology_interest,
            user.leadership, user.analytical_thinking,
            user.attention_to_details, user.biology_interest,
            user.fitness_interest, user.teamwork, user.stress_tolerance,
            user.ethics, user.patience, user.empathy,
            user.spatial_thinking, user.research_drive, user.persuasion,
            user.social_interest, user.risk_taking, user.aesthetic_sensitivity        
        ]

        cosine_score = cosine_recommendation(trait, data)

        tree_score = tree_predict(trait)

        top_results = cosine_score[0]['Score']
        if top_results >=0.75:
            final = cosine_score[0]['Major']
            method = 'cosine'
        else: 
            final = tree_score if tree_score else cosine_score[0]['Major']
            method = 'decision_tree'

        return{
            'final_recommendation' : final,
            'method_used' : method, 
            'top_3' : cosine_score, 
            'decision_tree_suggestion' : tree_score
        }
    
    except Exception as e:
        raise HTTPException(status_code=500, detail=str(e))
    

class chatInput(BaseModel):
    message: str 

@app.post("/chatbot")
def chatbot(chat: chatInput):
    try: 
        chatResponse = requests.post("http://localhost:11434/api/generate", json={
            "model" : "claude-haiku-4-5-20251001",
            "prompt" : f"""You are UniGuide a helpful university assistant for students in Bahrain.
            You will be helping students understand university majors, career paths and academic choices.
            Keep ALL answers under 4 sentences maximum concise, frindly, simple and relevant to universities in Bahrain.
            if asked about a major explain it to someone with no background to it, don't mention universities.
            Only answer questions relevent to university, university majors, edecuation and career paths.
            If asked anything unrelated, politely refuse and redirect them to education topics.

            Student question: {chat.message}""", "stream" : False
        })

        data = chatResponse.json()
        return {"answer": data["response"]}
    
    except Exception as e:
        return{"answer" :  "Sorry, I'm having trouble thinking right now. Please try again later."}
