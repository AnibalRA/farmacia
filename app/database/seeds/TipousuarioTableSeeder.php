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
            TipoUsuarios::create(array(
                "definicion" => $tipos[$f]
            ));    
        }
    }
}