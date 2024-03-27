window.addEventListener("load", () => {
    const bgContainer = document.querySelector("#bg-container");
  
    bgContainer.children[0].classList.add("active");
  
    let active = 0;
  
    setInterval(() => {
      bgContainer.querySelector(".active").classList.remove("active");
      bgContainer.children[active].classList.add("active");
  
      active = active < bgContainer.children.length - 1 ? active + 1 : 0;
    }, 3000);
  });
  