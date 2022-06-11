window.addEventListener("load", () => {
  document.querySelector("#main-nav").classList.add("opacity");
});

document.addEventListener("click", (e) => {
  if ((e.target.id = "button-menu-nav")) {
    collapse_nav();
  }
});

const collapse_nav = () => {
  const nav = document.querySelector("#main-nav");
  if (nav.classList.contains("nav-collapse")) {
    setTimeout(() => {
      nav.classList.remove("opacity");
    }, 200);

    nav.classList.remove("nav-collapse");
  } else {
    nav.classList.add("opacity");
    setTimeout(() => {
      nav.classList.add("nav-collapse");
    }, 500);
  }
};
