// Get references to the form and input fields
const form = document.getElementById('registration-form');
const username = document.getElementById('username');
const email = document.getElementById('email');
const password = document.getElementById('password');

// Add event listener to the form's submit event
form.addEventListener('submit', (event) => {
    event.preventDefault();

    // Get the values of the input fields
    const usernameValue = username.value;
    const emailValue = email.value;
    const passwordValue = password.value;

    // Validate the input values
    if (usernameValue === '' || emailValue === '' || passwordValue === '') {
        alert('Please fill out all fields');
        return;
    }

    // Hash the password using bcrypt
    const salt = bcrypt.gensalt();
    const hashedPassword = bcrypt.hashpw(passwordValue, salt);

    // Send the data to the server to be saved to the database
    fetch('/register', {
        method: 'POST',
        body: JSON.stringify({
            username: usernameValue,
            email: emailValue,
            password: hashedPassword
        }),
        headers: {
            'Content-Type': 'application/json'
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert('Registration successful!');
        } else {
            alert('Error: ' + data.message);
        }
    });
});