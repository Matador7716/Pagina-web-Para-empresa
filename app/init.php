<?php

// Load Config
require_once '../config/database.php';

// Load Core Classes
require_once '../core/Database.php';
require_once '../core/Controller.php';
require_once '../core/Router.php';
require_once '../core/CSRF.php';

// Alias for Router class
class App extends Router {}
