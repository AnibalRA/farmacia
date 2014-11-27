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
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @include("index/menu")
                </div>
            </div>
            <br/><br/><br/>
            <div class="row">
                <div class="col-md-2">
                    @include("index/sidebar")
                </div>
                <div class="col-md-10">
                    {{--CONTENIDO--}}
                    @yield("content")
                </div>
            </div>
        </div>
        @include("index/librerias_js")
    </body>
</html>