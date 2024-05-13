# import joblib
# import pickle
# import numpy as np
# import pandas as pd
# from flask import Flask, request, jsonify
# import cv2
# from pyzbar.pyzbar import decode

# app = Flask(__name__)

# # Load the model from file
# with open('rfc_model.pkl', 'rb') as file:
#     R1 = pickle.load(file)

# # Make one method to decode the barcode
# def BarcodeReader(image):

#     # read the image in numpy array using cv2
#     img = cv2.imread(image)

#     # Decode the barcode image
#     detectedBarcodes = decode(img)

#     # If not detected then print the message
#     if not detectedBarcodes:
#         print("Barcode Not Detected or your barcode is blank/corrupted!")
#     else:

#           # Traverse through all the detected barcodes in image
#         for barcode in detectedBarcodes:

#             # Locate the barcode position in image
#             (x, y, w, h) = barcode.rect

#             # Put the rectangle in image using
#             # cv2 to highlight the barcode
#             cv2.rectangle(img, (x-10, y-10),
#                           (x + w+10, y + h+10),
#                           (255, 0, 0), 2)

#             if barcode.data!="":

#             # Print the barcode data
#                 print(barcode.data)
#                 print(barcode.type)

#     #Display the image
#     cv2.imshow("Image", img)
#     cv2.waitKey(0)
#     cv2.destroyAllWindows()

#     return detectedBarcodes

# @app.route('/fokuspoin', methods=['GET'])
# def Detecran():
#     image=request.args.get('imgpat')
#     dataread=BarcodeReader(image)
#     return dataread.to_json(orient='records')

# @app.route('/predict', methods=['GET'])
# def pasepat():
#     # Get data from the URL parameters
#     sex = float(request.args.get('sex'))
#     age = float(request.args.get('age'))
#     height = float(request.args.get('height'))
#     weight = float(request.args.get('weight'))
#     hypertension = float(request.args.get('hypertension'))
#     diabetes = float(request.args.get('diabetes'))
#     goal = float(request.args.get('goal'))

#     # Prepare data for prediction
#     data = np.array([[sex, age, height, weight, hypertension, diabetes, goal]])

#     # Perform prediction using the model
#     prediction = R1.predict(pd.DataFrame(data))

#     # Convert the prediction result into a DataFrame
#     prediction_df = pd.DataFrame(prediction, columns=['Desk1', 'Rekomendasi_Makanan', 'Rekomendasi_Jenis_Olahraga', 'Peralatan', 'Rekomendasi_Kegiatan_2'])
#     prediction_df = prediction_df.head(1)
#     print(prediction_df)

#     # Return the prediction result in JSON format
#     return prediction_df.to_json(orient='records')

# if __name__ == '__main__':
#     app.run(debug=True)


import joblib
import pickle
import numpy as np
import pandas as pd
from flask import Flask, request, jsonify
import cv2
from pyzbar.pyzbar import decode

app = Flask(__name__)

# Load the model from file
with open('rfc_model.pkl', 'rb') as file:
    R1 = pickle.load(file)

# Make one method to decode the barcode
def BarcodeReader(image):

    try:
        datatext=""
        img = cv2.imread(image)
        detectedBarcodes = decode(img)
        if not detectedBarcodes:
            datatext="Barcode Not Detected or your barcode is blank/corrupted!"
        else:
            for barcode in detectedBarcodes:
                (x, y, w, h) = barcode.rect
                cv2.rectangle(img, (x-10, y-10),
                            (x + w+10, y + h+10),
                            (255, 0, 0), 2)
                if barcode.data!="":
                    datatext=str(barcode.data)

        cv2.imshow("Image", img)
        return datatext
    except Exception as e:
        return [{"error": str(e)}]

@app.route('/fokuspoin', methods=['GET'])
def Detecran():
    image = request.args.get('imgpat')
    dataread = BarcodeReader(image)
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
    app.run(host='0.0.0.0', port=5000, debug=True)
