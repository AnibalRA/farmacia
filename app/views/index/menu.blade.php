<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Logo</a>
        <p class="navbar-text">Nombre Farmacia -- Nombre Usuario</p>
    </div>
    <div class="collapse navbar-collapse">
        
        <ul class="nav navbar-nav navbar-right" ng-controller='menuLeftController'>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="glyphicon glyphicon-cog"> </span> Configuración
                    <strong class="caret"></strong>
                </a>
                <ul class="dropdown-menu">
                    <li>{{ HTML::link('farmacia', 'Mi Farmacia'); }} </li>
                    <li>{{ HTML::link('sucursal', 'Sucursales'); }}</li>
                    <li> <a href="!#clientes">asdfsd</a></li>
                    <li class="divider"></li>
                    <li>{{ HTML::link('/logout', 'Salir'); }}</li>
                </ul>
            </li>
        </ul>
    </div>
</nav>

