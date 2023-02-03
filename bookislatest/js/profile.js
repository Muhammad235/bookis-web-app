const logoutBtn = document.querySelector("#log-out");
const closeBtn = document.querySelector(".close-btn");
const modal = document.querySelector(".modal");

function openodal() {
  document.querySelector(".modal").classList.remove("hide");
}
function hideModal() {
  document.querySelector(".modal").classList.add("hide");
}

logoutBtn.addEventListener("click", openodal);
closeBtn.addEventListener("click", hideModal);
modal.addEventListener("click", hideModal);
