<!DOCTYPE html>
<html lang="es" ng-app="farmacia">
    <head>
	   <meta charset="utf-8">
	   <meta name="description" content="Sistema de farmacia">
	   <meta name="viewport" content="width=device-width, initial-scale=1.0">
	   <title>Farmacia</title>
        @include("index/librerias_css")
    </head>
    <body  id="skin-blur-lights">
        <section id="main" class="p-relative" role="main">
                        @include("index/menu")                 
                        @include("index/sidebar")        
            <!-- Content -->
            <section id="content" class="container">
               <ng-view>  
               

                        </ng-view> 
            </section>
            <div ng-controller="guardarController"></div>
            @include("index/librerias_js")
        </section>


        <script type="text/ng-template" id="addClienteModal.html">
        <!-- aqui hay que agregar todos los modales para poderlos usar desde el inicio -->
            <form ng-submit= "guardar()">
                <div class="modal-header text-center">
                    <h3 class="modal-title">Nuevo Cliente</h3>
                </div>
                <div class="modal-body">    
                    <alerts> </alerts>
                   <add-cliente> </add-cliente>
                </div>
                <div class="modal-footer text-center">
                    <input type='submit'  class="btn btn-primary" value="Guardar" />
                </div>
            </form>
        </script>


        <script type="text/ng-template" id="addProveedorModal.html">
            <add-proveedor> </add-proveedor>
        </script>

        <script type="text/ng-template" id="addProductoModal.html">
            <add-producto> </add-producto>
        </script>
        <script type="text/ng-template" id="addSucursalModal.html">
            <add-sucursal> </add-sucursal>
        </script>
    </body>
</html>