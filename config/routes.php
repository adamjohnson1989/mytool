<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

use Cake\Core\Plugin;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

/**
 * The default class to use for all routes
 *
 * The following route classes are supplied with CakePHP and are appropriate
 * to set as the default:
 *
 * - Route
 * - InflectedRoute
 * - DashedRoute
 *
 * If no call is made to `Router::defaultRouteClass()`, the class used is
 * `Route` (`Cake\Routing\Route\Route`)
 *
 * Note that `Route` does not do any inflections on URLs which will result in
 * inconsistently cased URLs when used with `:plugin`, `:controller` and
 * `:action` markers.
 *
 */
Router::defaultRouteClass(DashedRoute::class);

Router::scope('/', function (RouteBuilder $routes) {
    /**
     * Here, we are connecting '/' (base path) to a controller called 'Pages',
     * its action called 'display', and we pass a param to select the view file
     * to use (in this case, src/Template/Pages/home.ctp)...
     */
    $routes->connect('/', ['controller' => 'Pages', 'action' => 'display', 'home']);
    $routes->connect('/gioi-thieu/gioi-thieu-cong-ty', ['controller' => 'Pages', 'action' => 'display', 'gioi-thieu-cong-ty']);
    $routes->connect('/gioi-thieu/phuong-cham-kinh-doanh', ['controller' => 'Pages', 'action' => 'display', 'phuong-cham-kinh-doanh']);
    $routes->connect('/gioi-thieu/co-cau-to-chuc', ['controller' => 'Pages', 'action' => 'display', 'co-cau-to-chuc']);
    $routes->connect('/tin-tuc', ['controller' => 'News', 'action' => 'display']);
    $routes->connect('/tuyen-dung/thuc-tap-sinh', ['controller' => 'Recruitments', 'action' => 'display','thuc-tap-sinh']);
    $routes->connect('/tuyen-dung/ky-thuat-vien', ['controller' => 'Recruitments', 'action' => 'display','ky-thuat-vien']);

    $routes->connect(
        '/tuyen-dung/:id-:slug', // E.g. /blog/3-CakePHP_Rocks
        ['controller' => 'Recruitments', 'action' => 'view']
    )
        ->setPass(['id', 'slug'])
        // Define a pattern that `id` must match.
        ->setPatterns([
            'id' => '[0-9]+',
        ]);

    /*Begin Route for new*/
    $routes->connect('/tin-tuc/tin-tuc-su-kien', ['controller' => 'News', 'action' => 'display','tin-tuc-su-kien']);
    $routes->connect('/tin-tuc/van-hoa-nhat-ban', ['controller' => 'News', 'action' => 'display','van-hoa-nhat-ban']);
    $routes->connect('/tin-tuc/tieng-nhat', ['controller' => 'News', 'action' => 'display','tieng-nhat']);
    $routes->connect('/tin-tuc/kinh-nghiem', ['controller' => 'News', 'action' => 'display','kinh-nghiem']);
    $routes->connect('/lien-he', ['controller' => 'Contacts', 'action' => 'display']);
    $routes->connect(
        '/tin-tuc/tin-tuc-su-kien/:id-:slug', // E.g. /blog/3-CakePHP_Rocks
        ['controller' => 'News', 'action' => 'view']
    )
        ->setPass(['id', 'slug'])
        // Define a pattern that `id` must match.
        ->setPatterns([
            'id' => '[0-9]+',
        ]);
    $routes->connect(
        '/tin-tuc/van-hoa-nhat-ban/:id-:slug', // E.g. /blog/3-CakePHP_Rocks
        ['controller' => 'News', 'action' => 'view']
    )
        ->setPass(['id', 'slug'])
        // Define a pattern that `id` must match.
        ->setPatterns([
            'id' => '[0-9]+',
        ]);
    $routes->connect(
        '/tin-tuc/van-hoa-nhat-ban/:id-:slug', // E.g. /blog/3-CakePHP_Rocks
        ['controller' => 'News', 'action' => 'view']
    )
        ->setPass(['id', 'slug'])
        // Define a pattern that `id` must match.
        ->setPatterns([
            'id' => '[0-9]+',
        ]);
    $routes->connect(
        '/tin-tuc/tieng-nhat/:id-:slug', // E.g. /blog/3-CakePHP_Rocks
        ['controller' => 'News', 'action' => 'view']
    )
        ->setPass(['id', 'slug'])
        // Define a pattern that `id` must match.
        ->setPatterns([
            'id' => '[0-9]+',
        ]);
    $routes->connect(
        '/tin-tuc/kinh-nghiem/:id-:slug', // E.g. /blog/3-CakePHP_Rocks
        ['controller' => 'News', 'action' => 'view']
    )
        ->setPass(['id', 'slug'])
        // Define a pattern that `id` must match.
        ->setPatterns([
            'id' => '[0-9]+',
        ]);
    /*End Route for new*/

    $routes->connect(
        '/tuyen-dung/slug',
        ['controller' => 'Recruitments', 'action' => 'view']
    )->setPass(['slug']);
    /**
     * ...and connect the rest of 'Pages' controller's URLs.
     */
    $routes->connect('/pages/*', ['controller' => 'Pages', 'action' => 'display']);
    $routes->connect('/admin', ['controller' => 'Users', 'action' => 'login', 'prefix' => 'admin']);

    /**
     * Connect catchall routes for all controllers.
     *
     * Using the argument `DashedRoute`, the `fallbacks` method is a shortcut for
     *    `$routes->connect('/:controller', ['action' => 'index'], ['routeClass' => 'DashedRoute']);`
     *    `$routes->connect('/:controller/:action/*', [], ['routeClass' => 'DashedRoute']);`
     *
     * Any route class can be used with this method, such as:
     * - DashedRoute
     * - InflectedRoute
     * - Route
     * - Or your own route class
     *
     * You can remove these routes once you've connected the
     * routes you want in your application.
     */
    Router::prefix('admin', function ($routes) {
        $routes->fallbacks('DashedRoute');
    });
    $routes->fallbacks(DashedRoute::class);
});

/**
 * Load all plugin routes.  See the Plugin documentation on
 * how to customize the loading of plugin routes.
 */
Plugin::routes();
