import PyPDF2
import cv2
from deepface import DeepFace
import os.path
from flask import Flask, render_template, request

app = Flask(__name__)

@app.route('/')

def index():
    return render_template('index.html')

@app.route('/after', methods = ['GET', 'POST'])



def determine_video(file):
    time_interval = 0.5
    result_output = []
    time_output = []

    
def determine_image(file):
    return DeepFace.analyze(file, actions = "emotion")


def determine_file(file):
    error_message = 'Unrecognized file type'
    extension = os.path.splitext(file)[1]
    if extension in ['jpg', 'jpeg', 'png']:
        return 'image'
    elif extension in ['mp4', 'avi', 'mov', 'wmv']:
        return 'video'
    else:
        raise ValueError(error_message)


def main():
    file = cv2.imread("test.png")
    file_type = determine_file(file)
    if file_type == 'image':
        determine_image(file)
    elif file_type == 'video':
        determine_video(file)

main()