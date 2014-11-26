<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
            <li><a href="javascript:void(0)"><span class="glyphicon glyphicon-home"></span> Nombre Farmacia</a></li>
            <li><a href="javascript:void(0)">-</a></li>
            <li><a href="javascript:void(0)"><span class="glyphicon glyphicon-user"></span> Nombre Usuario</a></li>
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="glyphicon glyphicon-cog"> </span>
                    <strong class="caret"></strong>
                </a>
                <ul class="dropdown-menu">
                    <li>{{ HTML::link('usuario', 'Usuarios'); }}</li>
                    <li>{{ HTML::link('tipo_usuario', 'Tipos de Usuarios'); }}</li>
                    <li>{{ HTML::link('farmacia', 'Farmacia'); }}</li>
                    <li class="divider"></li>
                    <li>{{ HTML::link('/logout', 'Cerrar Sesión'); }}</li>
                </ul>
            </li>
        </ul>
    </div>
</nav>