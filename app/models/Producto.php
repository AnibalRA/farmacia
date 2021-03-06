<?php
class Producto extends Eloquent {
    use SoftDeletingTrait;
    
    protected $table = 'productos';
	public $errores;
    protected $softDelete = true;
	protected $fillable = array(
        'nombre',
        'descripcion',
        'minimo',
        'subcategoria_id',
        'ubicacion'
    ); 


	/* Guardar */

        public function guardar($datos) 
        {
            if($this->validar($datos)) 
            {
                $this->fill($datos);
                $this->save();
                return true;
            }

            return false;
        }


    /* Validaciones */

        public function validar($datos) 
        {        
            $reglas = array(
                'nombre' => 'required|max:100',
                'subcategoria_id' => 'required',
                'minimo' => 'required|integer'
            );

            $validador = Validator::make($datos,$reglas);
            
            if($validador->passes()) 
                return true;

            $this->errores = $validador->errors();
            return false;
        }


    /* Relaciones */

        //
        public function detallesCompra() 
        {
            return $this->hasMany('DetallesCompra', 'productos_id');
        }
        public function sustituto() 
        {
            return $this->hasMany('Sustituto', 'productos_id');
        }
        public function farmacia() 
        {
            return $this->belongsTo('Farmacia');
        }
        public function detalleVenta() 
        {
            return $this->belongsTo('DetallesVenta');
        }
}