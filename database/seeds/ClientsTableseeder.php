<?php

use Illuminate\Database\Seeder;

class ClientsTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Client::class,5)->create();
    }
}
