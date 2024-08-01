<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->get('/', 'Auth::index');

$routes->group('/', function ($routes) {
    // Admin Controller
    $routes->add('dashboard.html', 'Admin::index');
    $routes->add('data-staff.html', 'Admin::staff');
    $routes->add('data-dosen.html', 'Admin::dosen');
    $routes->add('data-mahasiswa.html', 'Admin::mahasiswa');
    $routes->add('account.html', 'Admin::akun');
    $routes->add('activity.html', 'Admin::log');

    // Action Controller
    $routes->add('data-staff/add', 'Action::addStaff');
    //
    $routes->add('data-staff/update', 'Action::updateStaff');
    //
    $routes->add('data-staff/del/id?(:any)', 'Action::delStaff/$1');
});
