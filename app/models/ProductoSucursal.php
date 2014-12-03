<?php
class ProductoSucursal extends Eloquent {
    use SoftDeletingTrait;

    protected $table = 'productossucursal';
    public $errores;
    protected $softDelete = true;
    protected $fillable = array(
        'ubicacion',
        'cantidad',
        'productos_farmacia_id',
        'sucursales_id'
    );


   /* Guardar */

        public function guardar($datos)
        {
            if($this->validar($datos))
            {
                $this->fill($datos);
                $this->save();
            }

            return false;
        }


    /* Validaciones */

        public function validar($datos)
        {
            $reglas = array(
                'ubicacion' => 'required',
                'cantidad' => 'required',
                'sucursales_id' => 'required',
                'productos_farmacia_id' => 'required'
            );

            $validador = Validator::make($datos,$reglas);

            if($validador->passes())
                return true;

            $this->errores = $validador->errors();
            return false;
        }


    /* Relaciones */

        public function productoFarmacia()
        {
            return $this->belongsTo('ProductoFarmacia');
        }
        public function sucursal()
        {
            return $this->belongsTo('Sucursal');
        }
}
