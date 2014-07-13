<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/lorem-ipsum/{numberOfParagraphs?}', function($numberOfParagraphs=5){
	echo "<h2>Lorem Ipsum paragraphs</h2>";
	$generator = new Badcow\LoremIpsum\Generator();
	$paragraphs = $generator->getParagraphs($numberOfParagraphs);
	echo implode('<p>', $paragraphs);
});

Route::get('/user-generator/{numberOfUsers?}', function($numberOfUsers=2){
	echo "<h2>Users</h2>";
	$faker = Faker\Factory::create();

	for ($i=0; $i < $numberOfUsers; $i++) {
		echo "<h3>".$faker->name."</h3>";
 		echo "<p>".$faker->address."</p>";
	}	
});

Route::get('/test', function() {
	echo "<h2>Lorem Ipsum paragraphs</h2>";
	$generator = new Badcow\LoremIpsum\Generator();
	$paragraphs = $generator->getParagraphs(5);
	echo implode('<p>', $paragraphs);
	echo "<h2>Users</h2>";
	$faker = Faker\Factory::create();

	for ($i=0; $i < 10; $i++) {

 		echo "<h3>".$faker->name."</h3>";
 		echo "<p>".$faker->address."</p>";
	}

});