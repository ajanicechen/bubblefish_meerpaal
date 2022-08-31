let menuBtn = document.getElementById("menuBtn");
let menuItems = document.getElementById("menuItems");

menuBtn.addEventListener("click", ()=>{
    menuItems.classList.toggle("showMenu");
})