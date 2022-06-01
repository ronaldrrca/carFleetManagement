
function editarUsuario(pagina, idUsuario, cedulaUsuario, nombreUsuario, perfilUsuario){
    let url = pagina;
    let id = idUsuario;
    let cedula = cedulaUsuario;
    let nombre = nombreUsuario;
    let perfil = perfilUsuario;
    
    window.location.assign(url + "?id=" + id + "&cedula=" + cedula + "&nombre=" + nombre + "&perfil=" + perfil);
  }

  function eliminarUsuario(pagina, idUsuario, nombreUsuario){
    let url = pagina;
    let id = idUsuario;
    let nombre = nombreUsuario;
    
    let confirmar=confirm("¿Confirma eliminar el usuario " + nombre + "?");

    if (confirmar==true) {
        window.location.assign(url + "?id=" + id);
    }
}

function resetPass(pagina, idUsuario, cedulaUsuario,  nombreUsuario){
  let url = pagina;
  let id = idUsuario;
  let cedula = cedulaUsuario;
  let nombre = nombreUsuario;
  
  let confirmar=confirm("¿Confirma resetear la contraseña del usuario " + nombre + "?")

  if (confirmar==true) {
    window.location.assign(url + "?id=" + id + "&cedula=" + cedula);
}
}