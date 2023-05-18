const buttonClickChange = document.querySelector(".button-submit-overlay");

const overlayChange = document.querySelector(".overlay-form");
const formWrapper = document.querySelector(".form-wrapper");
let changeText = true;

function changeOverlay() {
    changeText = !changeText;
    overlayChange.classList.toggle("change-side");
    formWrapper.classList.toggle("right-panel-active");
    changeText ? buttonClickChange.innerHTML = "Sign In" : buttonClickChange.innerHTML = "Sign Up"
}

const signInBtn = document.getElementById("signIn");
const signUpBtn = document.getElementById("signUp");
const fistForm = document.getElementById("form1");
const secondForm = document.getElementById("form2");
const container = document.querySelector(".container");

signInBtn.addEventListener("click", () => {
    container.classList.remove("right-panel-active");
});

signUpBtn.addEventListener("click", () => {
    container.classList.add("right-panel-active");
});

fistForm.addEventListener("submit", (e) => e.preventDefault());
secondForm.addEventListener("submit", (e) => e.preventDefault());
