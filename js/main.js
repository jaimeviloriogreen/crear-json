'use strict'

fetch('validar.php')
.then(res => res.json())
.then(data => {
    if(data == 'Existe'){
        fetch('personas.json')
        .then(respuesta => respuesta.json())
        .then(datos=>{
            console.log(datos)
        })
        .catch(e=>console.error(e));
    }else{
        console.warn('No existe el archivo JSON');
    }
})
.catch(e=>console.error(e));

