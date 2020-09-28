<?php 

if(file_exists('personas.json')){
    echo json_encode('Existe');
}else{
    echo json_encode('No Existe');

}