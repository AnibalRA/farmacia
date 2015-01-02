<?php
class M_Producto extends Eloquent {
    
    protected $table = 'productos';

    /* Relaciones */

        //
        public function productosFarmacia() 
        {
            return $this->hasMany('M_ProductosFarmacia', 'productos_id');
        }
}