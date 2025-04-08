<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age Calculator - Dubey Dynamics</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Age Calculator</h1>
    </header>

    <div class="container">
        <label for="dob">Enter your Date of Birth:</label>
        <input type="date" id="dob">
        <button onclick="calculateAge()">Calculate Age</button>
        <p id="ageResult"></p>
    </div>

    <footer>
        <p>&copy; 2025 Dubey Dynamics. All rights reserved.</p>
    </footer>

    <script>
        function calculateAge() {
            let dob = document.getElementById('dob').value;
            if(dob === '') {
                alert("Please enter a valid date.");
                return;
            }

            let birthDate = new Date(dob);
            let currentDate = new Date();
            let age = currentDate.getFullYear() - birthDate.getFullYear();
            let m = currentDate.getMonth() - birthDate.getMonth();

            if (m < 0 || (m === 0 && currentDate.getDate() < birthDate.getDate())) {
                age--;
            }

            document.getElementById('ageResult').innerHTML = `Your Age: ${age} years`;
        }
    </script>
</body>
</html>
