import numpy as np
import joblib 
from sklearn.tree import DecisionTreeClassifier
from sklearn.ensemble import AdaBoostClassifier
from sklearn.metrics import confusion_matrix
import pandas as pd
# Script to create prediction model and save locally as a joblib file for external use 
# Not required for final website

# Loading training data set and expected output into an array.
s = np.array(pd.read_excel('ML/OSA_Dataset301_2YrGp.xls',usecols='A:J', nrows=300, skiprows=1))
VarNames = np.array(['Outcome''A''B''C''D''E''F''G''H''I'])

# Separating data into training data, X, and expected output value, Y.
X = np.array(s[:,1:], dtype=np.float64)
Y = np.array(s[:,0], dtype=np.int64)

# Setting misclassification cost
sample_weights = np.ones(len(Y))
sample_weights[Y==0] = 0.25
sample_weights[Y==1] = 1.5

# Creating prediction model
Model = AdaBoostClassifier(base_estimator=DecisionTreeClassifier(), n_estimators=100, learning_rate=0.1)
Model.fit(X,Y, sample_weight=sample_weights)

# Plotting Confusion Matrix
y_pred = Model.predict(X)
cm = confusion_matrix(Y, y_pred)
print(cm)

# Saving Prediction Model locally for external use.
filename = "CompleteModel.joblib"
joblib.dump(Model, filename )

# Test code for current prediction model to check accuracy
# Testing Model Values [0,1,30,0,6,0,0,0,0] [3,2,41,1,10,1,1,0,0] [1,1,0,0,4,0,0,0,0]
# Input array X in Model.Predict(X) is in 2D array format as the training model 
# was trained in 2D array format ([Set1, Set2,...]) where Set1 = [a,b,c,d,e,f,g,h,i].
predictOSA = Model.predict([[3,2,41,1,10,1,1,0,0]])
print(predictOSA)