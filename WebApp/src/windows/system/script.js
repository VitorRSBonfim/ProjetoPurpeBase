/*
//ITENS
const menuBtn = document.getElementById("menuBtn");
const sidebar = document.getElementById("sidebar");
const overlay = document.getElementById("overlay");

//CLICOU NO MENU
menuBtn.onclick = function () {
  sidebar.classList.toggle("active");
  overlay.classList.toggle("hidden");
};

//CLICOU NO OVERLAY
overlay.onclick = function () {
  overlay.classList.toggle("hidden");
  sidebar.classList.toggle("active");
};

*/

const menuSideBar = document.getElementById('menu-side');
const btnAbrir = document.getElementById('btnAbrir');


btnAbrir.onclick = function () {
  menuSideBar.classList.toggle("oppen");
  console.log("s")
};
