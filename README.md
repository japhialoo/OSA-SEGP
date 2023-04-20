# OSA-SEGP
Group V's SEGP program for early diagnosis of Obstructive Sleep Apnea

This Web Application was developed under the guidance of Dr. Doreen Sim Ying Ying.

# Source File Breakdown
1. The "ML" folder contains the machine learning implementations for the prediction model used in the final version of the web application
2. The "TS", "MP", "backgrounds", and "Media" folders contain images used in the web application user interface. TS and MP represent Tonsil Size and Mallampati Score respectively
3. The "createEXE" folder contains the implementations for creating a python script to execute the prediction model.
4. The MainPage.php is the main page that should be launched by the user to interact with the web application. 

# Creating EXE 
<Pyinstaller command line to create the exe file>
pyinstaller -F --hidden-import="sklearn.utils._cython_blas" --hidden-import="sklearn.neighbors.typedefs" --hidden-import="sklearn.neighbors.quad_tree" --hidden-import="sklearn.tree._utils" --hidden-import="joblib" --hidden-import="sklearn.ensemble._weight_boosting" TestPrediction.py

# Running the Program
1. install XAMPP 
2. Launch Visual Studio Code and install the following plug ins  
    - PHP Server
3. Open MainPage.php
4. Right-click and select "PHP Server: Serve project"