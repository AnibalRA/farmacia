<?php
class Sucursal extends Eloquent {
    use SoftDeletingTrait;
    
    protected $table = 'sucursales';
	public $errores;
    protected $softDelete = true;
	protected $fillable = array(
		'nombre',
		'direccion',
		'telefono',
		'email',
		'farmacia_id',
		'municipios_id'
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
                'email' => 'email|max:75',
                'nombre' => 'required',
                'farmacia_id' => 'required',
                'municipios_id' => 'required'
            );

            $validador = Validator::make($datos,$reglas);
            
            if($validador->passes()) 
                return true;

            $this->errores = $validador->errors();
            return false;
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
         public function municipio() 
        {
            return $this->belongsTo('Municipios', 'municipios_id');
        }

}