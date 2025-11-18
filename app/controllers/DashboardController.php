<?php

class DashboardController extends Controller {
    public function __construct() {
        if (!isset($_SESSION['user_id'])) {
            header('Location: ' . BASE_URL . '/auth/login');
            exit;
        }
    }

    public function index() {
        $data = [
            'title' => 'Dashboard'
        ];
        $this->view('dashboard/index', $data);
    }
}
