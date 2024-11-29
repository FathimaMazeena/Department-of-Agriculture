

// Function to fetch questions from the server
function fetchQuestions() {
    fetch('fetch_questions.php')
        .then(response => response.json())
        .then(data => {
            // Get the table body element
            const tableBody = document.querySelector('#question-table tbody');

            // Clear any existing rows in the table
            tableBody.innerHTML = '';

            // Loop through the fetched data and populate the table
            data.forEach(question => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${question.name}</td>
                    <td>${question.email}</td>
                    <td>${question.contact_number}</td>
                    <td>${question.question}</td>
                `;
                tableBody.appendChild(row);
            });
        })
        .catch(error => console.error('Error fetching questions:', error));
}


fetchQuestions();
