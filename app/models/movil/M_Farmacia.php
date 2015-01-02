<?php
class M_Farmacia extends Eloquent {
    
    protected $table = 'farmacias';
    protected $appends = ['municipio'];
    

        public function getMunicipioAttribute()
        {
            return $this->municipios->nombre;
        }

    /* Relaciones */

        public function municipios() 
        {
            return $this->belongsTo('Municipios', 'municipios_id');
        }
        public function sucursal() 
        {
            return $this->belongsTo('Sucursal');
        }
        public function productos() 
        {
            return $this->hasMany('Producto', 'farmacia_id');
        }
}