<?php

use Caffeinated\Shinobi\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Vistas para todos
        Permission::create([
            'name'=>'Navegar en departamentos',
            'slug'=>'departamentos.index',
            'description'=>'Vista principal de departamentos acceso de todos',
        ]);
        //Users
        Permission::create([
            'name'=>'Navegar en sucursales',
            'slug'=>'sucursales.index',
            'description'=>'Vista principal de sucursales acceso de todos',
        ]);
    }
}
