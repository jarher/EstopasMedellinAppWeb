const subscribe_btn = document.querySelector("#btn-subscribe");

document.querySelector("#close-modal").addEventListener("click", () => {
  const modal = document.querySelector(".modal-container");
  modal.classList.add("opacity-0");
  setTimeout(() => {
    modal.classList.add("hide");
  }, 500);
});

subscribe_btn.addEventListener("click", () => {
  const modal = document.querySelector(".modal-container");
  const news_panel = document.querySelector('.news');
  modal.classList.remove("hide");
  setTimeout(() => {
    modal.classList.remove("opacity-0");
  }, 500);
});
