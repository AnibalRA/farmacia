    <?php
    // file: app/database/seeds/PollsTableSeeder.php
     
    use Faker\Factory as Faker;
     
    class ClientesTableSeeder extends Seeder {
     
    public function run()
    {
    // going 'Faker' :) on the polls table.
        $faker = Faker::create();
        for($i = 1; $i <= 100 ; $i++)
        {
            $cliente = new Cliente;

            $cliente->direccion     = $faker->address;
            $cliente->nombre        = $faker->name;
            $cliente->email         = $faker->email;
            $cliente->telefono      = $faker->phoneNumber;
            $cliente->farmacia_id   = $faker->numberBetween(1,5); 
            $cliente->save();
           
        }
    }
     
    }