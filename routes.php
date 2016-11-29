<?php


// register routes
$router->map('GET', '/register', 'Cursus\controllers\RegisterController@getShowRegisterPage', 'register');
$router->map('POST', '/register', 'Cursus\controllers\RegisterController@postShowRegisterPage', 'register_post');
$router->map('GET', '/verify-account', 'Cursus\controllers\RegisterController@getVerifyAccount', 'verify_account');

// testimonial routes
$router->map('GET', '/testimonials', 'Cursus\controllers\TestimonialController@getShowTestimonials', 'testimonials');

// logged in user routes
if(Cursus\auth\LoggedIn::user()){
  $router->map('GET', '/add-testimonial', 'Cursus\controllers\TestimonialController@getShowAdd', 'add_testimonial');
  $router->map('POST', '/add-testimonial', 'Cursus\controllers\TestimonialController@postShowAdd', 'add_testimonial_post');
}

// login/logout routes
$router->map('GET', '/login', 'Cursus\controllers\AuthenticationController@getShowLoginPage', 'login');
$router->map('POST', '/login', 'Cursus\controllers\AuthenticationController@postShowLoginPage', 'login_post');
$router->map('GET', '/logout', 'Cursus\controllers\AuthenticationController@getLogoutPage', 'logout');

// admin routes
if((Cursus\auth\LoggedIn::user()) && (Cursus\auth\LoggedIn::user()->access_level == 2)){
  $router->map('POST', '/admin/page/edit', 'Cursus\controllers\AdminController@postSavePage', 'save_page');
  $router->map('GET', '/admin/page/add', 'Cursus\controllers\AdminController@getAddPage', 'add_page');
}

// page routes
$router->map('GET', '/', 'Cursus\controllers\PageController@getShowHomePage', 'home');
$router->map('GET', '/[*]', 'Cursus\controllers\PageController@getShowPage', 'generic_page');
$router->map('GET', '/page-not-found', 'Cursus\controllers\PageController@getShow404', '404');


?>
