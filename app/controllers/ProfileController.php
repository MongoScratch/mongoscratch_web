<?php
// app/controllers/ProfileController.php

class ProfileController {
    public function __construct() {
        // Aquí podrías inicializar modelos o realizar cualquier configuración inicial necesaria para este controlador
    }

    public function index() {
        // Este método cargará la vista principal (Profile Section) de tu aplicación
        renderView(
            'profile/index', 
            'sample',
            ['title' => 'Mi Perfil'], 
        );
    }
}
