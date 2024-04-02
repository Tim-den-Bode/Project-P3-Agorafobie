// Adds a click event listener to the submit input element, which will prevent the form from submitting and proceed to validate the username and password
document.querySelector('input[type="submit"]').addEventListener('click', function (event) {
  event.preventDefault(); // Prevents the form from submitting

  // Retrieves the values of the username and password input fields
  var username = document.getElementById('username').value;
  var password = document.getElementById('password').value;

  // Validates the username and password
  if (username === 'testuser' && password === 'testpassword') {
    window.location.href = "index.html"; // Redirects to the index page if the credentials are correct
  } else {
    alert('Verkeerde gebruikersnaam of wachtwoord'); // Displays an error message if the credentials are incorrect
  }
});

// Function that redirects the user to the test page
function takeTest() {
  window.location.href = 'vragen.php';
}