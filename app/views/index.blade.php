<!DOCTYPE html>
<html lang="es">
    <head>
	   <meta charset="utf-8">
	   <meta name="description" content="Sistema de farmacia">
	   <meta name="viewport" content="width=device-width, initial-scale=1.0">
	   <title>Farmacia</title>
        @include("index/librerias_css")
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @include("index/menu")
                    <br/>
                    <br/>
                    <br/>
                    {{--CONTENIDO--}}
                    @yield("content")
                    <?php
            $equipo = ["portero"=>'Cech', "defensa"=>'Terry', "medio"=>'Lampard', "delantero"=>'Torres'];
 
foreach($equipo as $posicion=>$jugador)
	{
	echo "El " . $posicion . " es " . $jugador;
	}
?>
                </div>
            </div>
        </div>
        @include("index/librerias_js")
    </body>
</html>