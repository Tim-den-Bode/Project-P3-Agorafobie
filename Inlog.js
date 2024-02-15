function changeBackground() {
  var images = [
    'https://source.unsplash.com/random/1600x900/?mountains,landscape',
    'https://source.unsplash.com/random/1600x900/?nature,forest',
    'https://source.unsplash.com/random/1600x900/?ocean,beach',
    'https://source.unsplash.com/random/1600x900/?city,night',
    'https://source.unsplash.com/random/1600x900/?desert,sunset',
    'https://source.unsplash.com/random/1600x900/?space,stars',
    'https://source.unsplash.com/random/1600x900/?animals,wildlife',
    'https://source.unsplash.com/random/1600x900/?food,restaurant',
    'https://source.unsplash.com/random/1600x900/?people,portrait',
    'https://source.unsplash.com/random/1600x900/?technology,gadgets',
    'https://source.unsplash.com/random/1600x900/?water,droplets',
    'https://source.unsplash.com/random/1600x900/?art,painting'
  ]
  var randomImage = images[Math.floor(Math.random() * images.length)]

  
  $('body').fadeOut(1000, function() {
    
    $(this).css('background-image', 'url(' + randomImage + ')').fadeIn(1000)
  })
}

changeBackground()
setInterval(changeBackground, 5000);