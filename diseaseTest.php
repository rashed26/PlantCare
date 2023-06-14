<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        h1 {
            margin: 0 auto;
            margin-top: 5rem;
            margin-bottom: 2rem;
            text-align: center;
        }

        .image-preview-container {
            width: 50%;
            margin: 0 auto;
            border: 1px solid rgba(0, 0, 0, 0.1);
            padding: 3rem;
            border-radius: 20px;
            text-shadow: 0 .05rem .1rem rgba(228, 220, 220, 0.5);
            box-shadow: inset 0 0 5rem rgba(247, 238, 238, 0.5);
        }

        .image-preview-container .preview {
            display: flex;
            justify-content: center;
        }

        .image-preview-container img {
            width: 200px;
            height: 200px;
            display: none;
            margin-bottom: 30px;
        }

        .image-preview-container input {
            display: none;
        }

        .image-preview-container label {
            display: block;
            width: 25%;
            height: 45px;
            margin-left: 38%;
            text-align: center;
            background: #5e5a1f;
            color: #fff;
            font-size: 15px;
            text-transform: Uppercase;
            font-weight: 400;
            border-radius: 5px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #webcam {
            display: inline;
            margin-left: 50%;
        }

        #webcam a {
            margin-left: 47%;
            font-size: 16px;
            /* size: a4; */
            color: #746060;
        }


        #label-container {
            margin: 6px;
        }

        #label-container div {
            display: flex;
            justify-content: center;
            margin-bottom: 3px;
        }

        #result {
            margin-top: 10px;
            margin-bottom: 0px;
            color: brown;

        }
    </style>
</head>

<body>


    <h1 style="color: #5e5a1f;">Potato Leaf Disease Prediction</h1>
    <div class="image-preview-container">
        <div class="preview">
            <img id="preview-selected-image" />
        </div>
        <label for="file-upload" onclick="init()">Upload Image</label>
        <input type="file" id="file-upload" accept="image/*" onchange="previewImage(event);" />
        <div id="webcam">or <br>
            <a href="webcam_Detection.html">webcam</a>
        </div>
        <h1 id="result"></h1>

        <div id="label-container"></div>

    </div>



    <!-- <div>Teachable Machine Image Model</div>
    <button type="button" id="webcamButton" onclick="init()">Webcam</button> -->
    <!-- <div id="webcam-container"></div> -->
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@latest/dist/tf.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@teachablemachine/image@latest/dist/teachablemachine-image.min.js"></script>
    <script type="text/javascript">
        let imageSrc; //extra added
        image = new Image(); //extra added
        // More API functions here:
        // https://github.com/googlecreativelab/teachablemachine-community/tree/master/libraries/image

        // the link to your model provided by Teachable Machine export panel
        const UL = "https://teachablemachine.withgoogle.com/models/u7X9xnP_b/"; //here change UL from URL

        let model, webcam, labelContainer, maxPredictions;

        // Load the image model and setup the webcam
        async function init() {

            // document.getElementById("webcamButton").disabled = true;
            // document.getElementById("preview-selected-image").remove();

            const modelURL = UL + "model.json"; //here change UL from URL
            const metadataURL = UL + "metadata.json"; //here change UL from URL

            // load the model and metadata
            // Refer to tmImage.loadFromFiles() in the API to support files from a file picker
            // or files from your local hard drive
            // Note: the pose library adds "tmImage" object to your window (window.tmImage)
            model = await tmImage.load(modelURL, metadataURL);
            maxPredictions = model.getTotalClasses();

            // Convenience function to setup a webcam
            // const flip = true; // whether to flip the webcam
            // webcam = new tmImage.Webcam(200, 200, flip); // width, height, flip
            // await webcam.setup(); // request access to the webcam
            // await webcam.play();
            window.requestAnimationFrame(loop);

            // append elements to the DOM

            // document.getElementById("webcam-container").appendChild(webcam.canvas);
            labelContainer = document.getElementById("label-container");
            Result = document.getElementById("result");
            for (let i = 0; i < maxPredictions; i++) { // and class labels
                labelContainer.appendChild(document.createElement("div"));
            }
        }





        async function loop() {
            // webcam.update(); // update the webcam frame
            await predict();
            window.requestAnimationFrame(loop);
        }


        // run the webcam image through the image model
        async function predict() {
            // predict can take in an image, video or canvas html element
            // const prediction = await model.predict(webcam.canvas);
            const prediction = await model.predict(image);
            result.innerHTML = "Result:";
            for (let i = 0; i < maxPredictions; i++) {
                const classPrediction =
                    prediction[i].className + ": " + 100 * prediction[i].probability.toFixed(2) + "%";
                labelContainer.childNodes[i].innerHTML = classPrediction;
            }
        }
    </script>

    i
    <!-- //Preview an Image Before Uploading Using JavaScript, it was added from here -->
    <script>
        /**
         * Create an arrow function that will be called when an image is selected.
         */
        const previewImage = (event) => {
            /**
             * Get the selected files.
             */
            const imageFiles = event.target.files;
            /**
             * Count the number of files selected.
             */
            const imageFilesLength = imageFiles.length;
            /**
             * If at least one image is selected, then proceed to display the preview.
             */
            if (imageFilesLength > 0) {
                /**
                 * Get the image path.
                 */
                imageSrc = URL.createObjectURL(imageFiles[0]);
                image.src = imageSrc; //it has been added by me

                /**
                 * Select the image preview element.
                 */
                const imagePreviewElement = document.querySelector("#preview-selected-image");
                /**
                 * Assign the path to the image preview element.
                 */
                imagePreviewElement.src = imageSrc;
                /**
                 * Show the element by changing the display value to "block".
                 */
                imagePreviewElement.style.display = "block";
            }

            //    imageUpload();
        };
    </script>




</body>

</html>