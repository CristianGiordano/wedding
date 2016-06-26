<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Home
// RSVP
//


/** @var \Illuminate\Routing\Router $router */
$router = app('router');

$router->get('/{page?}', 'PageController@showPage');
//$router->get('/on-the-day', 'PageController@onTheDay');
//$router->get('/travel-and-accommodation', 'PageController@travelAndAccommodation');
//$router->get('/gifts', 'PageController@gifts');
//$router->get('/rsvp', 'PageController@rsvp');
$router->get('/rsvp/{search}', 'PageController@searchForInvite');
$router->post('/rsvp/{rsvp}', 'PageController@handleRsvp');
