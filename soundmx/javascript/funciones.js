function confirmacion() {
    if(confirm("Ventana de confirmación.\rLa forma se enviara ¿estas seguro?"))
    {
        alert("Forma enviada!");
    }
    else
    {
        alert("Su envio ha sido cancelada");
    }
}

function avisoreset() {
    if(confirm("¡Cuidado! Todos los datos se borraran."))
    {
        document.datos.reset();
    }
    else
    {
        alert("Su forma sigue intacta");
    }
}

function validateform() {
    var user=document.datos.user.value;
    var dir=document.datos.dir.value;
    var cp=document.datos.cp.value;
    var cel=document.datos.cel.value;
    var email=document.datos.email.value;
    
    if (user==null || user==""){
        alert ("Nombre de usuario no puede estar vacio");
        return false;
    }
    if (dir==null || dir==""){
        alert ("Direccion no puede estar vacia");
        return false;
    }
    if (cp==null || cp==""){
        alert ("Ingresa tu C.P.");
        return false;
    }
    if (cel==null || cel==""){
        alert ("Ingresa tu numero de celular");
        return false;
    }
    if (email==null || email==""){
        alert ("Ingresa tu e-mail");
        return false;
    }
}