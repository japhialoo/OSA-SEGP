import joblib 
import sys

load_model = joblib.load('PredictionModel.joblib')
values = [[int(x) for x in sys.argv[1].split()]]
result = load_model.predict(values)
print(result)
