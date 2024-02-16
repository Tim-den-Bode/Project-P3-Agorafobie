// Preload images
var images = [
  'https://source.unsplash.com/random/1600x900/?mountains,landscape',
  'https://source.unsplash.com/random/1600x900/?nature,forest',
  'https://source.unsplash.com/random/1600x900/?ocean,beach'
];
var imageObjects = [];
for (var i = 0; i < images.length; i++) {
  var img = new Image();
  img.src = images[i];
  imageObjects.push(img);
}

function changeBackground() {
  var randomImage = images[Math.floor(Math.random() * images.length)];

  var backgroundImage = document.getElementById('background-image');

  // Set the initial opacity to 1
  backgroundImage.style.opacity = 1;

  // Fade out effect
  var opacity = 1;
  var fadeOutInterval = setInterval(function() {
    if (opacity <= 0) {
      clearInterval(fadeOutInterval);
      backgroundImage.style.backgroundImage = "url(" + randomImage + ")";
      // Fade in effect
      var fadeInInterval = setInterval(function() {
        if (opacity >= 1) {
          clearInterval(fadeInInterval);
        }
        backgroundImage.style.opacity = opacity;
        opacity += 0.05;
      }, 25);
    }
    backgroundImage.style.opacity = opacity;
    opacity -= 0.05;
  }, 25);
}

// Change background every few seconds
setInterval(changeBackground, 5000)

// Exclude the .login-container from the background image change
document.querySelector('.login-container').style.backgroundImage = 'none'

changeBackground()
setInterval(changeBackground, 5000);