<?php

/*
  Following project is built on self-made MVC platform. Lots of things like class or function names are inspired from Yii2 Framework.
  We know that some things in this code are unnecessary or can be refactored, but we just don't have enough time to do that.

  Architect, Lead Developer & Project manager: Caupo Helvik
  Backend: Priit Laupa, Lauri Raus
  Frontend: Kristjan Põldmets
  Documentation: Rasmus Aron
  
  If you have any questions about the project then feel free to ask by sending me an email to helvikcaupo@gmail.com.
*/

require(__DIR__ . '/autoloader.php');
use app\components\Router;

$router = new Router();
echo $router->parseUrl();

?>
