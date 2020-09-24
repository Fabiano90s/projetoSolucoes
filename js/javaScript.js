function abrirMenu() {
  document.getElementById("mySidenav").style.width = "250px";
}

function fecharMenu() {
  document.getElementById("mySidenav").style.width = "0";
}

function trocaClasse() {
  var idMenu = document.getElementById("menuId");
  var idMenuLogin = document.getElementById("loginMenu");
  if (idMenu.className === "menu" && idMenuLogin.className === "menu") {
    idMenu.className += " responsive";
    idMenuLogin.className += " responsive";
  } else {
    idMenu.className = "menu";
    idMenuLogin.className = "menu";
  }
}


function abrirModal(modalId){
  var modal = document.getElementById(modalId);
  modal.className += " mostrarModal";
  }

function fecharModal(modalId){
  var modal = document.getElementById(modalId);
  modal.className = "bgModal";
}

  //document.querySelector('.bgModal').style.display = 'flex';
  //document.querySelector('.modal').classList.toggle('toggleModal');
