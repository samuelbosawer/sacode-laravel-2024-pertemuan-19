<?php
require_once '../app/controllers/PostController.php';

$controller = new PostController();

$action = $_GET['action'] ?? 'index';
$id = $_GET['id'] ?? null;

switch ($action) {
    case 'create':
        $controller->create();
        break;
    case 'store':
        break;
    case 'edit':
        $controller->edit($id);
        break;
    case 'update':
        break;
    case 'delete':
        break;
    default:
        $controller->index();
        break;
    }
