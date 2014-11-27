<?php
class TipousuarioTableSeeder extends Seeder 
{
    public function run() 
    {
        $tipos = ["Vendedor",
                  "Administrador Farmacia",
                  "Administrador Sucursal",
                  "Administrador General"
                 ];
        
        for($f=0; $f<count($tipos); $f++) {
<<<<<<< HEAD:app/database/seeds/TipousuariosTableSeeder.php
            TipoUsuarios::create(array(
=======
            Tipousuario::create(array(
>>>>>>> origin/master:app/database/seeds/TipousuarioTableSeeder.php
                "definicion" => $tipos[$f]
            ));    
        }
    }
}