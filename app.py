import os
from flask import Flask, render_template, request
from deepface import DeepFace

app = Flask(__name__)

@app.route('/', methods=['GET', 'POST'])
def home():
    if request.method == 'POST':
        image = request.files['image']
        
        temp_image_path = 'static/images/' + image.filename

        image.save(temp_image_path)
        
        detected_emotions = DeepFace.analyze(img_path=temp_image_path, actions=['emotion'])
        
        
        emotions = detected_emotions[0]['emotion'] if isinstance(detected_emotions, list) else detected_emotions['emotion']
        
        if emotions:
            if isinstance(emotions, list):
                result_emotion = max(emotions, key=emotions.get)  
            else:
                result_emotion = max(emotions, key=lambda key: emotions[key])
            
            if 'image' in request.files:
                image_path = temp_image_path if os.path.isfile(temp_image_path) else None
            
            return render_template('result.html', emotions=result_emotion, image_filename=image.filename, path = image_path)

        else:
            message = 'Emotions could not be detected from the uploaded image.'
            return render_template('result.html', message=message)

    return render_template('index.html')

if __name__ == '__main__':
    app.run(debug=True)
