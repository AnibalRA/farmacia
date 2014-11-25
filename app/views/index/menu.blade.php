<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse navbar-inverse-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li>{{ HTML::link('/', 'inicio'); }}</li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Nombre<strong class="caret"></strong></a>
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