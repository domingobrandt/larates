<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(ClientesTableSeeder::class);
        $this->call(EmpresasTableSeeder::class);
        $this->call(RelationTableSeeder::class);

      //  $this->call(ClientesEmpresasTableSeeder::class);

    }
}
