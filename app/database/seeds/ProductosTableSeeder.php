<?php
    // file: app/database/seeds/PollsTableSeeder.php
     
    use Faker\Factory as Faker;
     
    class ProductosTableSeeder extends Seeder {
     
    public function run()
    {
    // going 'Faker' :) on the polls table.
        $faker = Faker::create();
        for($i = 6; $i <= 505 ; $i++)
        {
            $producto = new Producto;

            $producto->nombre        = $faker->company;
            $producto->descripcion   = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae officiis, consequatur earum tenetur reprehenderit pariatur esse placeat voluptatum cumque optio.";
            $producto->subcategoria_id  = $faker->numberBetween(1,35); 
            $producto->save();
           	
        }
    }
     
    }