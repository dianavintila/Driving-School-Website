const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");

sign_up_btn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
});

function showToast(text){
  var x=document.getElementById("toast");
  x.classList.add("show");
  x.innerHTML=text;
  setTimeout(function(){
    x.classList.remove("show");
  },3000);
}
