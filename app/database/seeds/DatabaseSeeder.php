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
        /*$this->call('PaisTableSeeder');
        $this->call('DepartamentosTableSeeder');
        $this->call('MunicipiosTableSeeder');*/
        $this->call('TipousuarioTableSeeder');
	}

}
