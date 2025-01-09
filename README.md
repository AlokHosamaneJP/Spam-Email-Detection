# Spam Email Detection Application
This repository contains the Spam Email Detection Application, developed as part of a Master's degree project in Big Data Management & Analytics at Griffith College Dublin. The application employs advanced machine learning and natural language processing (NLP) techniques to reliably classify emails as either spam or ham (not spam). By leveraging a robust backend powered by Python and a user-friendly web interface, this application provides a comprehensive solution to combat email spam effectively.

# Features
Advanced Machine Learning: Utilizes a Support Vector Machine (SVM) classifier for high-accuracy spam detection.
Natural Language Processing: Implements techniques like TF-IDF vectorization, stemming, and sentiment analysis.
Real-Time Predictions: Provides immediate classification of emails entered by users.
User Authentication: Secure login and registration system integrated with MariaDB for user data storage.
Data Visualization: Includes insightful visualizations like bar plots, word clouds, and histograms for understanding email data distributions.
System Architecture
The system is divided into two primary tiers:

# Data Processing and Analysis Tier (Python):

Data cleaning, feature extraction, and machine learning model training.
Real-time predictions for email classification.
Web Application Tier (PHP):

## User interface for email classification.
Secure backend for user authentication and interaction.
The two tiers are seamlessly integrated, enabling users to interact with the machine learning model in real-time.

## Key Technologies
  - Programming Languages: Python (v3.x) for backend processing and PHP (v7.x) for the web application.
  - Libraries and Tools:
      * Python: Scikit-learn, Pandas, NLTK, Matplotlib, WordCloud.
      * PHP: Materialize CSS for the user interface, MariaDB for data storage.
  - Big Data Technologies: Apache Hadoop and Apache Spark for scalable data processing.
## Setup and Installation
1) Clone the repository:
    ``` bash
    git clone https://github.com/AlokHosamaneJP/spam-email-detection.git 
    ```
2) Set up the Python backend:
    - Install required Python libraries:
      ```bash
      pip install -r requirements.txt
      ```
    - Load the trained SVM model and vectorizer using joblib.
3) Configure the PHP frontend:

    - Ensure a PHP server (e.g., Apache) is running.
    - Set up MariaDB and update the database connection details in the PHP files.
4) Start the application:
    - Access the web application via your local server.
## Usage
  - **Login/Registration**: New users can register, and existing users can log in.
  - **Email Classification**: Enter email content to classify as spam or ham. Results are displayed instantly with visual indicators.
  - **Data Visualization**: View insights like spam/ham distributions and frequent word usage.
## Evaluation
  - Achieved an accuracy of 99.07% on a test dataset.
  - Rigorous testing conducted for model performance, user authentication, and frontend functionality.
