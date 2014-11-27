<?php
class Proveedor extends Eloquent {
    use SoftDeletingTrait;
    
    protected $table = 'proveedores';
	public $errores;
    protected $softDelete = true;
	protected $fillable = array(
		'contacto',
		'direccion',
		'email',
		'emailContacto',
		'empresa',
		'farmacia_id',
		'telefono',
		'telefonoContacto'
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
                'contacto' => 'required',
                'direccion' => 'required',
                'email' => 'email|required|max:75|unique:proveedores',
                'emailContacto' => 'email|required|max:75|unique:proveedores',
                'empresa' => 'required',
                'farmacia_id' => 'required'
            );

            $validador = Validator::make($datos,$reglas);
            
            if($validador->passes()) 
                return true;

            $this->errores = $validador->errors();
            return false;
        }


    /* Relaciones */

        //
        public function compras() 
        {
            return $this->hasMany('Compras', 'proveedores_id');
        }
         public function farmacia() 
        {
            return $this->belongsTo('Farmacia');
        }
}