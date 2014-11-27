<?php
class Sustituto extends Eloquent {
    use SoftDeletingTrait;
    
    protected $table = 'sustitutos';
	public $errores;
    protected $softDelete = true;
	protected $fillable = array(
		'productos_2_id',
		'productos_id'
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
                'productos_id' => 'required',
                'productos_2_id' => 'required'
            );

            $validador = Validator::make($datos,$reglas);
            
            if($validador->passes()) 
                return true;

            $this->errores = $validador->errors();
            return false;
        }


    /* Relaciones */

        //
         public function producto() 
        {
            return $this->belongsTo('Producto');
        }
}