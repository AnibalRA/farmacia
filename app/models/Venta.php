<?php
class Venta extends Eloquent {
    use SoftDeletingTrait;
    
    protected $table = 'ventas';
	public $errores;
    protected $softDelete = true;
	protected $fillable = array(
		'clientes_id',
		'factura',
		'fecha',
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
                'clientes_id' => 'required',
                'factura' => 'required'
                'fecha' => 'required',
                'sucursales_id' => 'required'
            );

            $validador = Validator::make($datos,$reglas);
            
            if($validador->passes()) 
                return true;

            $this->errores = $validador->errors();
            return false;
        }


    /* Relaciones */

        //
         public function sucursal() 
        {
            return $this->belongsTo('Sucursal');
        }
        public function cliente() 
        {
            return $this->belongsTo('Cliente');
        }
        public function detallesVenta() 
        {
            return $this->belongsTo('DetallesVenta');
        }
}