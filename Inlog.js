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

const body = document.body;
const backgroundImages = [
  'https://source.unsplash.com/random/1600x900/?mountains,landscape',
  'https://source.unsplash.com/random/1600x900/?nature,forest',
  'https://source.unsplash.com/random/1600x900/?ocean,beach',
  'https://source.unsplash.com/random/1600x900/?city,urban',
  'https://source.unsplash.com/random/1600x900/?space,stars',
  'https://source.unsplash.com/random/1600x900/?desert,sand'
];

let currentImageIndex = 0;

function changeBackground() {
  body.style.backgroundImage = `url('${backgroundImages[currentImageIndex]}')`;
  currentImageIndex = (currentImageIndex + 1) % backgroundImages.length;
}

setInterval(changeBackground, 5000);