<?php

function renderView($viewPath, $layout = 'sample', $data = []) {
    extract($data);
    
    // Inicia el buffer de salida
    ob_start();
    require __DIR__ . "/../app/views/$viewPath.php";
    $content = ob_get_clean(); // Captura el contenido de la vista y lo limpia del buffer
    
    // Carga el layout principal pasando el contenido de la vista
    require __DIR__ . "/../app/views/layouts/$layout.php";
}

?>