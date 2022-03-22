

<?php
$controllers = array(
  'pages' => ['home', 'error'],
  'posts' => ['show', 'read', 'create', 'delete'],
);

if (!array_key_exists($controller, $controllers) || !in_array($action, $controllers[$controller])) {
  $controller = 'pages';
  $action = 'home';
}

include_once('controllers/' . $controller . '_controller.php');
$class = str_replace('_', '', ucwords($controller, '_')) . 'Controller';
$controller = new $class;
$controller->$action();
