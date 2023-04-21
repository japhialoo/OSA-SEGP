# OSA-SEGP

## About the Project
Group V's SEGP program for early diagnosis of Obstructive Sleep Apnea to assist the Ministry of Transportation in regulating road safety. 

The primary objective of this project is to provide a user-friendly platform that allows individuals to assess their risk for OSA and take appropriate steps to seek medical attention if necessary. By leveraging the power of predictive modelling, the aim is to help individuals identify potential health issues early on and take proactive measures to address them.



## Running the Program
1. Install [XAMPP](https://www.apachefriends.org/download.html) 
2. Install and set up [PHP](https://learn.microsoft.com/en-us/iis/application-frameworks/install-and-configure-php-on-iis/install-and-configure-php)
3. Install [Visual Studio Code](https://code.visualstudio.com/download)
4.  Launch Visual Studio Code and install the following plug ins  
    - [PHP Server](https://marketplace.visualstudio.com/items?itemName=brapifra.phpserver)
5. Open MainPage.php
6. Right-click and select "PHP Server: Serve project"

## Source File Breakdown
1. The "ML" folder contains the machine learning implementations for the prediction model used in the final version of the web application
2. The "FrontEnd" folder contains all the files and elements required to generate the user interface of the web application.
3. The "TS", "MP", "backgrounds", and "Media" folders contained in the "FrontEnd" folder contains the images used in the web application user interface. TS and MP represent Tonsil Size and Mallampati Score respectively
4. The "createEXE" folder contains the implementations for creating a python script to execute the prediction model.
5. The MainPage.php is the main page that should be launched by the user to interact with the web application. 

## Creating EXE 
To generate the executable file, [pyinstaller](https://pypi.org/project/pyinstaller/) was used. 

```sh 
pyinstaller -F --hidden-import="sklearn.utils._cython_blas" --hidden-import="sklearn.neighbors.typedefs" --hidden-import="sklearn.neighbors.quad_tree" --hidden-import="sklearn.tree._utils" --hidden-import="joblib" --hidden-import="sklearn.ensemble._weight_boosting" TestPrediction.py
```


## GitHub Repository

_Below is the code to clone the github repository_
 
Clone the repo:
   ```sh
   git clone https://github.com/japhialoo/OSA-SEGP.git
   ```

<p align="right">(<a href="#readme-top">back to top</a>)</p>

