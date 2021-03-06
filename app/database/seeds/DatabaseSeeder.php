<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        	Eloquent::unguard();
                $this->call('PaisTableSeeder');
                $this->call('DepartamentosTableSeeder');
                $this->call('MunicipiosTableSeeder');
                $this->call('farmaciaTableSeeder');
                $this->call('ClientesTableSeeder');
                $this->call('ProveedoresTableSeeder');
                $this->call('CategoriasTableSeeder');
                $this->call('SubcategoriaTableSeeder');
                $this->call('ProductosTableSeeder');
                $this->call('SucursalesTableSeeder');
                $this->call('ProductosFarmaciaTableSeeder');
                $this->call('ProductoSucursalTableSeeder');
                
	}

}
