const registerBtn = document.getElementById("register-btn");
const registerPopup = document.getElementById("register-popup");
const closeBtn = document.getElementById("close-btn");

registerBtn.addEventListener("click", () => {
	registerPopup.style.display = "block";
});

closeBtn.addEventListener("click", () => {
	registerPopup.style.display = "none";
});