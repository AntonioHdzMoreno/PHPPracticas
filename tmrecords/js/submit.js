function habilitar(){
    txtnombre = document.getElementById("Nombre").value;
    txtapellido = document.getElementById("Apellido").value;
    txtdireccion = document.getElementById("Direccion").value;
    txtciudad = document.getElementById("Ciudad").value;
    txtestado = document.getElementById("Estado").value;
    txtcodpostal = document.getElementById("CodPostal").value;
    txtcorreo = document.getElementById("Correo").value;
    txttelefono = document.getElementById("Telefono").value;
    txtedad = document.getElementById("Edad").value;
    val = 0;

    if(txtnombre || txtapellido || txtdireccion || txtciudad || txtestado || txtcodpostal || txtcorreo || txttelefono || txtedad == ""){
        val++
    }
    if(val == 0){
        document.getElementById("Mostrar").disabled = false;
    } else{
        document.getElementById("Mostrar").disabled = true;

    }
}

document.getElementById("Nombre").addEventListener("keyup",habilitar);
document.getElementById("Apellido").addEventListener("keyup",habilitar);
document.getElementById("Direccion").addEventListener("keyup",habilitar);
document.getElementById("Ciudad").addEventListener("keyup",habilitar);
document.getElementById("Estado").addEventListener("keyup",habilitar);
document.getElementById("CodPostal").addEventListener("keyup",habilitar);
document.getElementById("Correo").addEventListener("keyup",habilitar);
document.getElementById("Telefono").addEventListener("keyup",habilitar);
document.getElementById("Edad").addEventListener("keyup",habilitar);
document.getElementById("Mostrar").addEventListener("click", () =>{
    alert("Se ha realizado tu compra");
});
