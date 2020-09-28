<?php 
require ('vista.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
        extract($_POST);
       if(!empty($nombre) && !empty($apellido) && !empty($edad)){
        $personas = array();
        
            if(file_exists('personas.json')){
                echo json_encode('Existe');

                $datosPersonas = file_get_contents("personas.json");
                if(!empty($datosPersonas)){
                    $jsonPersonas = json_decode($datosPersonas, true);
                    foreach($jsonPersonas as $person){
                        array_push($personas, $person);
                        };
                }
            }else{
                echo json_encode('No Existe');
            }
    
            $arreglo = [
            'nombre'=>$nombre, 
            'apellido'=>$apellido, 
            'edad'=>$edad
            ];
        
            array_push($personas, $arreglo);
        
            $fp = fopen('personas.json', 'w');
            fwrite($fp, json_encode($personas));
            fclose($fp);
       }else{
           header('location:/');
       }
}




// $ruta = $_SERVER['DOCUMENT_ROOT'];





