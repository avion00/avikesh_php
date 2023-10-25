const navSlide = () => {
  const menu = document.querySelector(".menu");
  const nav = document.querySelector(".nav_list");
  const navLinks = document.querySelectorAll(".nav_list li");

  menu.addEventListener("click", () => {
    // togggle nav
    nav.classList.toggle("nav-active");

    // animate links
    navLinks.forEach((link, index) => {
      if (link.style.animation) {
        link.style.animation = "";
      } else {
        link.style.animation = `navLinkFade 0.5s ease forwards ${
          index / 7 + 0.5
        }s`;
      }
    });
    // menu animation
    menu.classList.toggle("toggle");
  });
};
navSlide();
