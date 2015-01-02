<?php
class M_ProductosFarmacia extends Eloquent {

    protected $table = 'productofarmacia';
    protected $appends = ['disponible'];


        public function getDisponibleAttribute()
        {
            return $this->farmacia->nombre;
        }

    /* Relaciones */

        //
        public function sucursal()
        {
            return $this->hasMany('ProductoSucursal', 'productos_farmacia_id');
        }
        public function farmacia()
        {
            return $this->belongsTo('M_Farmacia');
        }
        public function producto()
        {
            return $this->belongsTo('Producto');
        }
}
