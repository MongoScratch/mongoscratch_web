<?php
// app/controllers/HomeController.php

class HomeController {
    public function __construct() {
        // Aquí podrías inicializar modelos o realizar cualquier configuración inicial necesaria para este controlador
    }

    public function index() {
        // Este método cargará la vista principal (homepage) de tu aplicación
        renderView(
            'home/index', 
            'sample',
            ['title' => 'Inicio']
        );
    }

    public function about() {
        // Este método cargará la vista principal (homepage) de tu aplicación
        renderView(
            'products/about', 
            'sample',
            ['title' => 'Más', 'subtitle'=> 'Más Sobre Mis Productos']
        );
    }

    public function contact() {
        // Este método cargará la vista principal (homepage) de tu aplicación
        renderView(
            'products/contact', 
            'sample',
            ['title' => 'Contacto', 'subtitle'=>'Contactame para mas información']
        );
    }

    public function products() {
        // Este método cargará la vista principal (homepage) de tu aplicación
        renderView(
            'home/products', 
            'sample',
            ['title' => 'Productos', 'subtitle'=>'Productos Disponibles']
        );
    }
    
}

