'use strict'

fetch('personas.json')
.then(respuesta => {
    if(respuesta.ok){
        return respuesta.json();
    }
})
.then(datos=>{
    if(datos != undefined){
        console.log(datos);
    }
})
.catch(e=>console.error(e));

