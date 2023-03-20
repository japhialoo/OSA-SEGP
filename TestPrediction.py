import joblib 
# Script to test saved model
load_model = joblib.load('CompleteModel.joblib')
result = load_model.predict([[1,1,0,0,4,0,0,0,0]])
print(result)