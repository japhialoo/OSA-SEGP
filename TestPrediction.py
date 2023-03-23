import joblib 
# Script to test saved model
# when the python script is called from php it somehow gets stuck and does not reach the print result line.
load_model = joblib.load('CompleteModel.joblib')
values = [[int(x) for x in input().split()]]
result = load_model.predict(values)
print(result)
