<?php
use Cake\Core\Plugin;
use Cake\Routing\Router;
use App\Routing\Router\SlugRoute;


/**
 * Routes configuration
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
Router::defaultRouteClass('Route');

Router::scope('/', function ($routes) {
    $routes->connect('/', ['controller' => 'Pages', 'action' => 'index']);
    $routes->connect('/training', ['controller' => 'Pages', 'action' => 'training']);
    $routes->connect('/:slug', ['controller' => 'Pages', 'action' => 'view'], ['routeClass' => 'SlugRoute']);

    $routes->fallbacks('InflectedRoute');
});

Plugin::routes();