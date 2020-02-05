<?php
use Illuminate\Database\Seeder;
class ClientesTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Cliente::class,5)->states('pessoa_fisica')->create();
        factory(\App\Cliente::class,1)->states('pessoa_juridica')->create();
    }
}