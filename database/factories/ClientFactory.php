<?php

use Faker\Generator as Faker;

require_once __DIR__.'/../faker_data/document_number.php';

$factory->define(App\Client::class, function (Faker $faker) {
    
    $cpfs = cpfs();

    return [
        'name' => $faker->name,
        'document_number' => $cpfs[array_rand(cpfs(),1)],
        'email' => $faker->email,
        'phone' => $faker->phonenumber,
        'defaulter' => rand(0,1),
        'date_birth' => $faker->date(),
        'sex' => rand(1,10)%2==0?'m':'f',
        'marital_status' => rand(1,3),
        'phisical_disability' => rand(1,10) % 2 == 0 ? $faker->word : null,
    ];
});
/*

            $table->string('name');
            $table->string('document_number');//modificar o tamanho de cpf/cnpj
            $table->string('email');
            $table->string('phone');
            $table->boolean('defaulter');//inadiplente
            $table->date('date_birth');
            $table->char('sex',10);
            $table->enum('marital_status',array_keys(\App\Client::MARITAL_STATUS));
            $table->string('phisical_disability')->nulllable();*/