<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define( App\Question::class, function ( Faker $faker ) {

    return [
	
		'title'   => $faker->sentence( rand( 5, 10 ) ),
		'body'    => $faker->paragraph( rand( 3, 7 ), true ), // true converts paragraph into string (originally is array of sentences)
		'views'   => rand( 0, 10 ),
		'answers' => rand( 0, 10 ),
		'votes'   => rand( -10, 10 )
	
	];
	
});
