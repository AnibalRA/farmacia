<?php
    // file: app/database/seeds/PollsTableSeeder.php
     
    use Faker\Factory as Faker;
     
    class ProductosTableSeeder extends Seeder {
     
    public function run()
    {
    // going 'Faker' :) on the polls table.
        $faker = Faker::create();
        for($i = 1; $i <= 500 ; $i++)
        {
            $producto = Producto::find($i);

            $producto->nombre        = $faker->company;
            $producto->descripcion   = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae officiis, consequatur earum tenetur reprehenderit pariatur esse placeat voluptatum cumque optio.";
            $producto->subcategoria_id  = $faker->numberBetween(1,35); 
            $producto->tipo = $faker->randomElement(['Caja','Frasco','Sobre', 'Tubo'], $count = 1);
            $producto->unidades = $faker->numberBetween(5,45);
            $producto->unidad= $faker->randomElement(['ML','Tabletas','Capsulas', 'Inyección'], $count = 1);

            $producto->save();
           	
        }
    }
     
    }