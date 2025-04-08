// Example Function for Common Tool Usage
function calculateAge() {
    const dob = new Date(document.getElementById('dob').value);
    const today = new Date();
    const age = today.getFullYear() - dob.getFullYear();
    const month = today.getMonth() - dob.getMonth();
    
    if (month < 0 || (month === 0 && today.getDate() < dob.getDate())) {
        age--;
    }
    
    document.getElementById('result').innerText = `Your Age is: ${age} years`;
}

// Word Counter
function countWords() {
    const text = document.getElementById('text').value;
    const wordCount = text.split(/\s+/).filter(Boolean).length;
    document.getElementById('result').innerText = `Word Count: ${wordCount}`;
}

// More JavaScript functions for other tools can be added here
