<?php

// Create Router instance
$router = new Router();

// example.com
$router->get('', 'PagesController@home');

// example.com/a-propos
$router->get('aboutus', 'PagesController@about');

// example.com/contact
$router->get('contact', 'PagesController@contact');

// Inscription utilisateur
$router->get('signin', 'PagesController@signin');
$router->post('signin', 'PagesController@signin');

// connexion utilisateur 
$router->get('login', 'PagesController@login');
$router->post('login', 'PagesController@login');

// déconnexion utilisateur 
$router->get('logout', 'PagesController@logout');

// page utilisateur connecté : recupere ses infos pour les afficher
<<<<<<< HEAD
$router->get('user', 'PagesController@user');
=======
$router->get('user/{id}/{slug}', 'PagesController@about');
>>>>>>> ac53cb2cc09c4bc4ae0c4206eb7b0c31f9adc4d8

// reception des données 
$router->post('contact', 'PagesController@contact');

// pages avec parametre 
$router->get('plateforme/update/{id}', 'PlateformesController@update');

// page 404
$router->set404('PagesController@page404');

// Run the routes
$router->run();