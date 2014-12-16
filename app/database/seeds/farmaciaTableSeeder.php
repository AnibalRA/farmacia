<?php
    // file: app/database/seeds/PollsTableSeeder.php
     
    use Faker\Factory as Faker;
     
    class farmaciaTableSeeder extends Seeder {
     
    public function run()
    {
    // going 'Faker' :) on the polls table.
        $faker = Faker::create();
        for($i = 1; $i <= 5 ; $i++)
        {
            $Farmacia = new Farmacia;

            $Farmacia->direccion     = $faker->address;
            $Farmacia->nombre        = $faker->company;
            $Farmacia->email         = $faker->email;
            $Farmacia->telefono      = $faker->phoneNumber;
            $Farmacia->web      	 = $faker->domainName;
            $Farmacia->municipios_id  = $faker->numberBetween(1,5); 
            $Farmacia->save();
           	
        }
    }
     
    }