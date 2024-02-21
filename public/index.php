<?php

// Autoload de clases
spl_autoload_register(function ($className) {
    $path = str_replace("\\", "/", $className);
    require_once __DIR__ . '/../app/' . $path . '.php';
});

// Incluir archivos de configuración
// require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../utils/helperFunctions.php';

// Un simple enrutador básico
$request = $_SERVER['REQUEST_URI'];
switch ($request) {
    case '/' :
        require __DIR__ . '/../app/controllers/HomeController.php';
        $controller = new HomeController();
        $controller->index();
    break;
    
    case '' :
        // Redirige a la raíz
        header('Location: /');
    break;

    case '/products' :
        require __DIR__ . '/../app/controllers/HomeController.php';
        $controller = new HomeController();
        $controller->products();
    break;
    
    case '/products/tsnotebook' :
        require __DIR__ . '/../app/controllers/TSNotebookController.php';
        $controller = new TSNotebookController();
        $controller->index();
    break;

    case '/profile' :
        require __DIR__ . '/../app/controllers/ProfileController.php';
        $controller = new ProfileController();
        $controller->index();
    break;

    // Puedes añadir más casos aquí para diferentes rutas
    default:
        // Manejo de errores 404 (Página no encontrada)
        header('HTTP/1.0 404 Not Found');
        require __DIR__ . '/../app/views/errors/404.php';
    break;
}

