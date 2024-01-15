<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'MainController::index');
$routes->get('remover/(:segment)', 'MainController::remover/$1');
$routes->get('removerIngrediente/(:segment)', 'MainController::removerIngredientes/$1');
$routes->get('ingredientes', 'MainController::ingredientes');
$routes->get('editarHamburguer/(:segment)', 'MainController::editarHamburguer/$1');
$routes->post('salvarEdicaoHamburguer/(:segment)', 'MainController::salvarEdicaoHamburguer/$1');
$routes->get('editarIngrediente/(:segment)', 'MainController::editarIngrediente/$1');
$routes->post('salvarEdicaoIngrediente/(:segment)', 'MainController::salvarEdicaoIngrediente/$1');
$routes->get('desativarHamburguer/(:segment)', 'MainController::desativarHamburguer/$1');
$routes->get('reativarHamburguer/(:segment)', 'MainController::reativarHamburguer/$1');
$routes->get('criarHamburguer', 'MainController::criarHamburguer');
$routes->post('salvarHamburguer', 'MainController::salvarHamburguer');
$routes->get('criarIngrediente', 'MainController::criarIngrediente');
$routes->post('salvarIngrediente', 'MainController::salvarIngrediente');
