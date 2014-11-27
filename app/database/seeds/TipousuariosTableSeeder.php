<?php
class TipousuariosTableSeeder extends Seeder 
{
    public function run() 
    {
        $tipos = ["Vendedor",
                  "Administrador Farmacia",
                  "Administrador Sucursal",
                  "Administrador General"
                 ];
        
        for($f=0; $f<count($tipos); $f++) {
            Tipousuarios::create(array(
                "definicion" => $tipos[$f]
            ));    
        }
    }
}