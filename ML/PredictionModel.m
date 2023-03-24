s = xlsread('OSA_Dataset301_2YrGp.xlsx',1,'A1:J302');
VarNames = {'Outcome''A''B''C''D''E''F''G''H''I'};
X = double(s(:,2:end));
Y = s(:,1);
rng(0,'twister');
t = ClassificationTree.template();
Model = fitensemble(X,Y,'AdaBoostM1',100,t,'PredictorNames', VarNames(2:end),'LearnRate',0.1);
newData = [0,1,30,0,6,0,0,0,0];
predictOSA = predict(Model, newData)


