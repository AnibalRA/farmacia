    <?php
    // file: app/database/seeds/PollsTableSeeder.php
     
    use Faker\Factory as Faker;
     
    class ProveedoresTableSeeder extends Seeder {
     
    public function run()
    {
    // going 'Faker' :) on the polls table.
        $faker = Faker::create();
        for($i = 1; $i <= 100 ; $i++)
        {
            $proveedor = new Proveedor;

            $proveedor->empresa     = $faker->company;
            $proveedor->telefono     = $faker->phoneNumber;
            $proveedor->direccion     = $faker->address;
            $proveedor->email         = $faker->email;
            $proveedor->contacto        = $faker->name;
            $proveedor->telefonoContacto     = $faker->phoneNumber;
            $proveedor->emailContacto         = $faker->email;
            $proveedor->farmacia_id   = $faker->numberBetween(1,5); 
            $proveedor->save();
           
        }
    }
     
    }