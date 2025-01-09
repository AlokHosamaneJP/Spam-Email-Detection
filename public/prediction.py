import os
import joblib
import sys
import argparse
import os, sys, shutil, time
import warnings
import common
import pandas as pd
from sklearn.feature_extraction.text import TfidfVectorizer

warnings.filterwarnings("ignore")
clf = joblib.load(os.path.join(os.path.dirname(os.path.realpath(__file__)),'classifier.pkl'))
vectorizer = joblib.load(os.path.join(os.path.dirname(os.path.realpath(__file__)),'vectorizer.pkl'))
arg1 = pd.DataFrame([sys.argv[1]])

message = arg1[0].apply(common.getImportantFeatures)
message = message.apply(common.stopWordRemoval)
message = message.apply(common.stem)
res = vectorizer.transform(message)


res = clf.predict(res)[0]
print(res)