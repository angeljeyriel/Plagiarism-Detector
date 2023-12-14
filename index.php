<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Plagiarism Detector</title>
</head>

<body>
    <div class="container">
        <div class="head">
            <h2>Plagiarism Detector</h2>
            <p>Enter your texts for Analysis & Results</p>
        </div>
        <div class="text-container">
            <div id="ltext-container">
                <p>Text 1</p>
                <textarea id="ltext" cols="30" rows="10" placeholder="Enter Your Text Here..."></textarea>
            </div>
            <div id="rtext-container">
                <p>Text 2</p>
                <textarea id="rtext" cols="30" rows="10" placeholder="Enter Your Text Here..."></textarea>
            </div>
        </div>
        <a href="#result" title="">
            <button class="btn">
                Begin Analysis
            </button>
        </a>
    </div>
    <div class="result-display" id="result-display">
    </div>
    <a id="result" style="margin-top: 5rem;"></a>

    <script src="script.js"></script>
</body>

</html>

