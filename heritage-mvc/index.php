<?php

// Start a session //

session_start();

// Requires //

require "services/Router.php";


$newRouter = new Router();
$newRouter->checkRoute("index");

$user = new User("test@test.fr", "test", "test");
$um = new UserManager("davidsim_phpj11", "3306", "db.3wa.io", "davidsim", "83c8b946aee433563583381d62aa9c15");
$user = $um->insertUser($user);
$user->setEmail("modif@test.fr");
$um->editUser($user);

?>