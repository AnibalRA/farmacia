<?php
class DetallesVenta extends Eloquent {
    use SoftDeletingTrait;
    
    protected $table = 'detallesventa';
	public $errores;
    protected $softDelete = true;
	protected $fillable = array(
        'cantidad',
        'precio',
        'productos_id',
        'ventas_id'
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
                'cantidad' => 'required',
                'precio' => 'required',
                'productos_id' => 'required',
                'ventas_id' => 'required'
            );
            
            $validador = Validator::make($datos,$reglas);
            
            if($validador->passes()) 
                return true;

            $this->errores = $validador->errors();
            return false;
        }


    /* Relaciones */

        public function venta() 
        {
            return $this->belongsTo('Venta');
        }
        public function productos() 
        {
            return $this->belongsTo('Productos');
        }
}