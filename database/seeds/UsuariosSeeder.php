<?php

use Illuminate\Database\Seeder;
use App\Usuario;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     	$role = new Role();
		$roleAdmin = $role->create([
		    'name' => 'Administrador',
		    'slug' => 'admin',
		    'description' => 'manage administration privileges'
		]);

		$usuario = Usuario::create(array(
			'nome' => 'Lucas Firmino',
			'email' => 'admin@admin.com',
			'senha' => bcrypt('admin')
		));

		$usuario->assignRole($roleAdmin);
    }
}
