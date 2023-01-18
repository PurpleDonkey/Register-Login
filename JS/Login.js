// Get the login form and button
const loginForm = document.getElementById("login-form");
const loginButton = document.getElementById("login-button");

// Add an event listener to the login button
loginButton.addEventListener("click", (event) => {
  event.preventDefault();
  
  // Get the email and password from the form
  const email = loginForm.email.value;
  const password = loginForm.password.value;
  
  // Send a request to the server to check the email and password against the database
  fetch("/login", {
    method: "POST",
    body: JSON.stringify({ email: email, password: password }),
    headers: { "Content-Type": "application/json" },
  })
    .then((response) => {
      if (response.ok) {
        // If the login is successful, redirect the user to the homepage
        window.location.href = "/home";
      } else {
        // If the login is not successful, show an error message
        alert("Invalid email or password");
      }
    })
    .catch((error) => {
      console.error("Error:", error);
    });
});