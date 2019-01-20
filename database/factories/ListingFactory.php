<?php

use Faker\Generator as Faker;


$types = ['apartment', 'house', 'condo', 'studio', 'room'];


$factory->define(App\Listing::class, function (Faker $faker) use ($types) {
    return [
        'landlord_id' => '1', 
        'address' => $faker->address, 
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, quos quaerat eaque ratione quod pariatur vitae, doloribus similique nemo, cupiditate at! Labore rem aperiam a esse? Debitis eveniet dicta pariatur.', 
        'price' => random_int(750, 2000),
        'type' => $types[random_int(0, 4)],
        'banner_image' => '',
        'listing_images' => NULL,
        'available' => 1,
        'descriptors' => NULL,
    ];
});
