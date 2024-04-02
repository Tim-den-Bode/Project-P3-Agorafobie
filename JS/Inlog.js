// Adds an event listener for the window 'load' event, which is fired when the page has finished loading
window.addEventListener("load", () => {
  // Selects the 'bg-container' element and assigns it to the 'bgContainer' variable
  const bgContainer = document.querySelector("#bg-container");

  // Adds the 'active' class to the first child of the 'bgContainer' element
  bgContainer.children[0].classList.add("active");

  // Initializes the 'active' variable to 0
  let active = 0;

  // Sets an interval of 3000 milliseconds (3 seconds) to cycle through the background images
  setInterval(() => {
    // Removes the 'active' class from the current active child element of the 'bgContainer'
    bgContainer.querySelector(".active").classList.remove("active");

    // Adds the 'active' class to the next child element of the 'bgContainer'
    bgContainer.children[active].classList.add("active");

    // Updates the 'active' variable to the next child element of the 'bgContainer'
    active = active < bgContainer.children.length - 1 ? active + 1 : 0;
  }, 3000);
});