<?php
// app/controllers/TSNotebookController.php

class TSNotebookController {
    public function __construct() {
        // Aquí podrías inicializar modelos o realizar cualquier configuración inicial necesaria para este controlador
    }

    public function index() {
        // Este método cargará la vista principal (homepage) de tu aplicación
        renderView(
            'tsnotebook/index', 
            'sample',
            [
                'title' => 'TSNotebook', 
                'subtitle'=>'La libreta del mamado',
                'category'=>'products'
            ], 
        );
    }
}
