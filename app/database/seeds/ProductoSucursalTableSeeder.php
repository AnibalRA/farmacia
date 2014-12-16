<?php
     
    use Faker\Factory as Faker;
     
    class ProductoSucursalTableSeeder extends Seeder {
     
    public function run()
    {
        $faker = Faker::create();
        for($i = 1; $i <= 35 ; $i++)
        {
            $productoSucursal = new ProductoSucursal;

            $productoSucursal->productosfarmacia_id = $faker->numberBetween(1,25);
            $productoSucursal->precio        = $faker->numberBetween(1,15);
            $productoSucursal->sucursales_id = $faker->numberBetween(1,5);
            $productoSucursal->ubicacion     = $faker->address; 
            $productoSucursal->cantidad      = $faker->numberBetween(10,35); 
            $productoSucursal->save();
           	
        }
    }
     
    }