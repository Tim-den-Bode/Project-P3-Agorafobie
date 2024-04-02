window.addEventListener("load", () => {
  const bgContainer = document.querySelector("#bg-container");
  const backgrounds = bgContainer.children;

  // Add the "active" class to the first child element
  backgrounds[0].classList.add("active");

  let active = 0;

  // Set an interval to change the background every 3 seconds
  setInterval(() => {
    // Remove the "active" class from the current active background
    backgrounds[active].classList.remove("active");

    // Add the "active" class to the next background
    active = active < backgrounds.length - 1 ? active + 1 : 0;
    backgrounds[active].classList.add("active");
  }, 3000);
});