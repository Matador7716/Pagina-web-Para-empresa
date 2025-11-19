<?php
// app/controllers/DashboardController.php

class DashboardController {
    public function index() {
        // Por ahora, solo carga la vista del dashboard.
        // En el futuro, aquí se podría cargar información como estadísticas de ventas, etc.
        require_once '../app/views/dashboard/index.php';
    }
}
