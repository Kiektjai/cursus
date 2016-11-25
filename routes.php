<?php

$router->map('GET', '/', 'Cursus\Controllers\PageController@getShowHomePage', 'home');
$router->map('GET', '/register', 'Cursus\Controllers\RegisterController@getShowRegisterPage', 'register');
$router->map('POST', '/register', 'Cursus\Controllers\RegisterController@postShowRegisterPage', 'register_post');
$router->map('GET', '/login', 'Cursus\Controllers\RegisterController@getShowLoginPage', 'login');
$router->map('GET', '/about', 'Cursus\Controllers\PageController@getShowPage', 'generic_page');

?>
