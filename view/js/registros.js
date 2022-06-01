function editarVehiculo(pagina, idVehiculo, marcaVehiculo, tipoVehiculo, modeloVehiculo, anioVehiculo, colorVehiculo, placaVehiculo, serial_motorVehiculo){
    let url = pagina;
    let id = idVehiculo;
    let marca = marcaVehiculo;
    let tipo = tipoVehiculo;
    let modelo = modeloVehiculo;
    let anio = anioVehiculo;
    let color = colorVehiculo;
    let placa = placaVehiculo;
    let serial_motor = serial_motorVehiculo;
    
    // console.log(`url: ${url} id: ${id} marca: ${marca} tipo: ${tipo} modelo: ${modelo} año: ${anio} color: ${color} placa: ${placa} serial motor ${serial_motor}`);

    window.location.assign(url + "?id=" + id + "&marca=" + marca + "&tipo=" + tipo + "&modelo=" + modelo + "&anio=" + anio + 
                            "&color=" + color + "&placa=" + placa + "&serial_motor=" + serial_motor);
  }

  function eliminarVehiculo(pagina, idVehiculo, placaVehiculo){
    let url = pagina;
    let id = idVehiculo;
    let placa = placaVehiculo;
    let confirmar = confirm("¿Confirma eliminar el vehículo de placas " + placa + "?")

    if (confirmar == true) {
        window.location.assign(url + "?id=" + id);
    }
}