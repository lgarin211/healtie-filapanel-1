import joblib
import pickle
import numpy as np
import pandas as pd
from flask import Flask, request, jsonify
import cv2
from pyzbar.pyzbar import decode
import os
import requests

app = Flask(__name__)

with open('rfc_model.pkl', 'rb') as file:
    R1 = pickle.load(file)

def download_image(image_url):
    try:
        response = requests.get(image_url)
        print(image_url)
        if response.status_code == 200:
            file_extension = image_url.split('.')[-1]
            unique_filename = f"{os.urandom(8).hex()}.{file_extension}"
            with open(unique_filename, 'wb') as f:
                f.write(response.content)
            return unique_filename
        else:
            return None
    except Exception as e:
        print("error")
        print(e)
        print(image_url)
        return None


def BarcodeReader(image):
    try:
        datatext=""
        img = cv2.imread(image)
        detectedBarcodes = decode(img)
        if not detectedBarcodes:
            datatext="Barcode Not Detected or your barcode is blank/corrupted!"
        else:
            for barcode in detectedBarcodes:
                # (x, y, w, h) = barcode.rect
                # cv2.rectangle(img, (x-10, y-10),
                #             (x + w+10, y + h+10),
                #             (255, 0, 0), 2)
                if barcode.data!="":
                    datatext=str(barcode.data)

        # cv2.imshow("Image", img)
        return datatext
    except Exception as e:
        return [{"error": str(e)}]

@app.route('/fokuspoin', methods=['GET'])
def Detecran():
    image = download_image(request.args.get('imgpat'))
    dataread = BarcodeReader(image)
    os.remove(image)
    return jsonify(dataread)

@app.route('/predict', methods=['GET'])
def pasepat():
    try:
        sex = float(request.args.get('sex'))
        age = float(request.args.get('age'))
        height = float(request.args.get('height'))
        weight = float(request.args.get('weight'))
        hypertension = float(request.args.get('hypertension'))
        diabetes = float(request.args.get('diabetes'))
        goal = float(request.args.get('goal'))
        data = np.array([[sex, age, height, weight, hypertension, diabetes, goal]])
        prediction = R1.predict(pd.DataFrame(data))
        prediction_df = pd.DataFrame(prediction, columns=['Desk1', 'Rekomendasi_Makanan', 'Rekomendasi_Jenis_Olahraga', 'Peralatan', 'Rekomendasi_Kegiatan_2'])
        prediction_df = prediction_df.head(1)
        return prediction_df.to_json(orient='records')

    except Exception as e:
        return jsonify({"error": str(e)})

if __name__ == '__main__':
    app.run(host='0.0.0.0', port=80, debug=True)
