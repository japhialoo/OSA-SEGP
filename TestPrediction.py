import joblib 
# Script to test saved model
load_model = joblib.load('CompleteModel.joblib')
values = [[int(x) for x in input().split()]]
result = load_model.predict(values)
print(result)