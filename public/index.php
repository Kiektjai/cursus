<?php
include(__DIR__ . "/../bootstrap/start.php");
include(__DIR__ . "/../bootstrap/db.php");
include(__DIR__ . "/../routes.php");

$match = $router->match();

// make 2 variables to store the information in an array
// explode the string at @
list($controller, $method) = explode("@", $match['target']);

if(is_callable(array($controller, $method))){
  $object = new $controller();
  call_user_func_array(array($object, $method), array($match['params']));
}else{
  echo "Cannot find $controller -> $method";
  exit();
}


// $router->map('GET', '/', function(){
//   include(__DIR__ . "/../views/home.php");
// });
//
// $router->map('GET', '/register', function(){
//   include(__DIR__ . "/../views/register.php");
// });
//
// $router->map('POST', '/register', function(){
//   include(__DIR__ . "/../views/doRegister.php");
// });
//
// $router->map('GET', '/login', function(){
//   include(__DIR__ . "/../views/index.html");
// });
//
// $match = $router->match();
//
// if($match && is_callable($match['target'])){
//   call_user_func_array($match['target'], $match['params']);
// }else{
//   // no matching route found!
//   header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
// }
//
// $url = explode('/', $_SERVER['REQUEST_URI']);
//
// if($url[1] == ""){
//   // display home page
//   include(__DIR__ . "/../views/home.php");
//   exit();
// } else if($url[1] == "register"){
//   include(__DIR__ . "/../views/register.php");
//   exit();
// } else if($url[1] == "login"){
//   include(__DIR__ . "/../views/index.html");
//   exit();
// }
?>
