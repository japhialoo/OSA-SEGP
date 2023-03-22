import joblib 
# Script to test saved model
load_model = joblib.load('CompleteModel.joblib')
a = input()
b = input()
c = input()
d = input()
e = input()
f = input()
g = input()
h = input()
i = input()
values = [[a,b,c,d,e,f,g,h,i]]
result = load_model.predict(values)
print(result)