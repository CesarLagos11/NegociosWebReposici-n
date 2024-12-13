<?php
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/src/Controllers/IController.php';
require_once __DIR__ . '/src/Controllers/PublicController.php';
require_once __DIR__ . '/src/Controllers/PrivateController.php';
require_once __DIR__ . '/src/Dao/Dao.php';
require_once __DIR__ . '/src/Dao/EcoEventsTable.php';
require_once __DIR__ . '/src/Utilities/Renderer.php';

use App\Controllers\EcoEventsController;

$controller = new EcoEventsController();
$controller->handleRequest();
?>