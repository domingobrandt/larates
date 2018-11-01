<?php

use Illuminate\Database\Seeder;
use Uxcamp\Empresa;
use Uxcamp\Cliente;


class RelationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $empresa = Uxcamp\Empresa::findOrFail(8);
        $empresa->clientes()->attach(1);
        $empresa = Uxcamp\Empresa::findOrFail(1);
        $empresa->clientes()->attach(2);
        $empresa = Uxcamp\Empresa::findOrFail(2);
        $empresa->clientes()->attach(3);    }
}
