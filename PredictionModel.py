import numpy as np
import joblib 
from sklearn.tree import DecisionTreeClassifier
from sklearn.ensemble import AdaBoostClassifier
import pandas as pd
# Script to create prediction model and save locally as a joblib file for external use 
# Not required for final website

# Loading training data set and expected output into an array.
s = np.array(pd.read_excel('OSA_Dataset301_2YrGp.xls',usecols='A:J', nrows=300, skiprows=1))
VarNames = np.array(['Outcome''A''B''C''D''E''F''G''H''I'])

# Separating data into training data, X, and expected output value, Y.
X = np.array(s[:,1:], dtype=np.float64)
Y = np.array(s[:,0], dtype=np.int64)

# Creating prediction model
Model = AdaBoostClassifier(base_estimator=DecisionTreeClassifier(), n_estimators=100, learning_rate=0.1)
Model.fit(X,Y)

# Saving Prediction Model locally for external use.
filename = "CompleteModel.joblib"
joblib.dump(Model, filename )

# Test code for current prediction model to check accuracy
# Testing Model Values [0,1,30,0,6,0,0,0,0] [3,2,41,1,10,1,1,0,0] [1,1,0,0,4,0,0,0,0]
# Input array X in Model.Predict(X) is in 2D array format as the training model was trained in 2D array format ([Set1, Set2,...]) where Set1 = [a,b,c,d,e,f,g,h,i].
predictOSA = Model.predict([[3,2,41,1,10,1,1,0,0]])
print(predictOSA)