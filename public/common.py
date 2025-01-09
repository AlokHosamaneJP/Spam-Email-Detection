import nltk
import string
from nltk.stem.porter import PorterStemmer
ps = PorterStemmer()

def getImportantFeatures(message):
    message = message.lower()
    
    listData = []
    message = nltk.word_tokenize(message)
    for i in message:
        if i.isalnum():
            listData.append(i)
    return listData


def stopWordRemoval(message):
    listData = []
    for i in message:
        if i not in nltk.corpus.stopwords.words('english') and i not in string.punctuation:
            listData.append(i)
    return listData


def stem(message):
    listData = []
    for i in message:
        listData.append(ps.stem(i))
    return " ".join(listData)