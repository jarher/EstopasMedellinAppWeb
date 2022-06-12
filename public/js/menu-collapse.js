
document.querySelector("#button-menu-nav").addEventListener('click', () => {
  console.log('first');
  collapse_nav();
});

const collapse_nav = () => {
  const nav = document.querySelector("#main-nav");
  if (nav.classList.contains("nav-collapse")) {
    setTimeout(() => {
      nav.classList.remove("nav-opacity");
    }, 200);

    nav.classList.remove("nav-collapse");
  } else {
    nav.classList.add("nav-opacity");
    setTimeout(() => {
      nav.classList.add("nav-collapse");
    }, 500);
  }
};
