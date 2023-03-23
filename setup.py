from cx_Freeze import setup, Executable

setup(
    name='TestPrediction',
    version='0.1',
    description='Script to test saved model',
    executables=[Executable('TestPrediction.py')],
    options={
        'build_exe': {
            'packages': ['joblib', 'sys', 'sklearn'],
            'include_files': ['CompleteModel.joblib']
        }
    }
)
