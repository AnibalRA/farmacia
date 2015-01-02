<?php
     
    use Faker\Factory as Faker;
     
    class ProductosFarmaciaTableSeeder extends Seeder {
     
    public function run()
    {
        $faker = Faker::create();
        for($i = 1; $i <= 50 ; $i++)
        {
            $productoFarmacia = new ProductoFarmacia;

            $productoFarmacia->cantidad         = $faker->numberBetween(10,35); 
            $productoFarmacia->minimo           = $faker->numberBetween(1,5);
            $productoFarmacia->productos_id     = $faker->numberBetween(1,400);
            $productoFarmacia->farmacia_id      = $faker->numberBetween(1,4); 
            $productoFarmacia->save();
           	
        }
    }
     
    }