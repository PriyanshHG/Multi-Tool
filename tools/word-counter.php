<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Word Counter - Dubey Dynamics</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Word Counter</h1>
    </header>

    <div class="container">
        <textarea id="textInput" rows="4" cols="50" placeholder="Enter text here..."></textarea><br>
        <button onclick="countWords()">Count Words</button>
        <p id="wordCountResult"></p>
    </div>

    <footer>
        <p>&copy; 2025 Dubey Dynamics. All rights reserved.</p>
    </footer>

    <script>
        function countWords() {
            let text = document.getElementById('textInput').value.trim();
            let wordCount = text.split(/\s+/).filter(function(word) {
                return word.length > 0;
            }).length;

            document.getElementById('wordCountResult').innerHTML = `Word Count: ${wordCount}`;
        }
    </script>
</body>
</html>
