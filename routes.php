<?php


$router->get('', 'controllers/index.php');
$router->get('about', 'controllers/about.php');
$router->get('about/culture', 'controllers/about-cultures.php');
$router->get('contacts', 'controllers/contacts.php');
$router->post('names', 'controllers/add-name.php');

