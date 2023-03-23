import joblib 
import sys
# Script to test saved model
# the TestPrediction.spec and TestPrediction files are my attempt in converting pythong files to executable .exe files
# it didn't work when i tried to execute it so i'll delete it later.
# if you want to know how i did it you can search up pyinstaller and see how hey convert .py to .exe from your cmd prompt/terminal
# when the python script is called from php it somehow gets stuck and does not reach the print result line.

load_model = joblib.load('CompleteModel.joblib')
values = [[int(x) for x in sys.argv[1].split()]]
result = load_model.predict(values)
print(result)
