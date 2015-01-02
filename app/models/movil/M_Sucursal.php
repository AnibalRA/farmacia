<?php

class M_Sucursal extends Eloquent {

    protected $table = 'sucursales';
    protected $appends = ['municipio'];

        public function getMunicipioAttribute()
        {
            return $this->municipios->nombre;
        }

    /* Relaciones */

        //
        public function requisiciones() 
        {
            return $this->hasMany('Requisicion', 'sucursales_id');
        }
        public function ventas() 
        {
            return $this->hasMany('Venta', 'sucursales_id');
        }
         public function farmacia() 
        {
            return $this->belongsTo('Farmacia');
        }
         public function municipios() 
        {
            return $this->belongsTo('Municipios', 'municipios_id');
        }

}