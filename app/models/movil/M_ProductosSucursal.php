<?php
class M_ProductosSucursal extends Eloquent {
    use SoftDeletingTrait;

    protected $table = 'productossucursal';
    public $errores;
    protected $softDelete = true;
    protected $hidden = ['productos_farmacia_id', 'sucursales_id'];


    /* Relaciones */

        public function productoFarmacia()
        {
            return $this->belongsTo('M_ProductosFarmacia');
        }
        public function sucursal()
        {
            return $this->belongsTo('M_Sucursal');
        }
}
