document.querySelector('input[type="submit"]').addEventListener('click', function(event) {
  event.preventDefault();

  var username = document.getElementById('username').value;
  var password = document.getElementById('password').value;

  if (username === 'testuser' && password === 'testpassword') {
    window.location.href = "index.html";
  } else {
    alert('Verkeerde gebruikersnaam of wachtwoord');
  }
});