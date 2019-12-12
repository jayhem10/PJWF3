<?php

// Create Router instance
$router = new Router();

// example.com
$router->get('', 'PagesController@home');

// example.com/a-propos
$router->get('about', 'PagesController@about');
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

// page admin 
$router->get('user', 'AdminController@addSport');

// reception des données 
$router->post('contact', 'PagesController@contact');

// pages avec parametre 
$router->get('plateforme/update/{id}', 'PlateformesController@update');

// page 404
$router->set404('PagesController@page404');

// Run the routes
$router->run();