<?php include DIR . 'view/partial/head.php' ?>

<div class="container-fluid">
    <header class="container-fluid">
        <div class="jumbotron">
            <div class="container-fluid">

            </div>
        </div>
        <nav class="navbar navbar-inverse">
            <div class="container barra">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header ">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand button hvr-float-shadow" href="<?php echo URL ?>index.php/home/indexRegistrado">Inicio</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo URL ?>index.php/home/categoriasRegistrado" class="button hvr-float-shadow">Categorías<span class="sr-only"></span></a></li>
                        <li><a href="<?php echo URL ?>index.php/home/eventosRegistrado" class="button hvr-float-shadow">Eventos</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle button hvr-wobble-top glyphicon glyphicon-user" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cuenta <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <img src="<?php echo URL ?>image/perfil.jpg" class="perfil"/>
                                <li><a href="#" class="button hvr-shutter-out-horizontal" data-toggle="modal" data-target="#myModalModificar">Modificar Perfil</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#" class="button hvr-shutter-out-horizontal" data-toggle="modal" data-target="#myModalItinerario">Ver mi Itinerario</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="<?php echo URL ?>index.php/home/index" class="button hvr-shutter-out-horizontal">Cerrar sesión</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="navbar-form navbar-right" role="search" action="<?php echo URL ?>index.php/home/busquedaRegistrado">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Realiza tu busqueda">
                        </div>
                        <button type="submit" class="btn btn-danger glyphicon glyphicon-search button hvr-pop"></button>
                    </form>

                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

    </header>
    <!-- Modal -->
    <div class="modal fade" id="myModalItinerario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Mi Itinerario</h4>
                </div>
                <div class="modal-body">
                    <table class="table table-striped table-bordered table-condensed transparent">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Sitio</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Basílica</td>
                                <td>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-eye-open"> Ver sitio</i></a> 
                                    <select class="btn btn-info btn-sm">
                                        <option>Asistió?</option>
                                        <option>SI</option>
                                        <option>NO</option>
                                    </select> 
                                    <a href="#" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-remove"> Eliminar</i></a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Parque Cabal</td>
                                <td>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-eye-open"> Ver sitio</i></a> 
                                    <select class="btn btn-info btn-sm">
                                        <option>Asistió?</option>
                                        <option>SI</option>
                                        <option>NO</option>
                                    </select> 
                                    <a href="#" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-remove"> Eliminar</i></a></td> 
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger button hvr-bubble-left" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModalModificar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modificar Mis Datos</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal registro">
                        <div>
                            <label for="exampleInputName2">Nombre</label>
                            <input type="text" class="form-control" id="exampleInputName2" value="Pepito">
                        </div>
                        <div>
                            <label for="exampleInputEmail2">Apellidos</label>
                            <input type="text" class="form-control" id="exampleInputEmail2" value="Perez">
                        </div><br>
                        <div>
                            <label for="exampleInputName2">Correo electrónico</label>
                            <input type="email" class="form-control" id="exampleInputName2" value="pepito@gmail.com">
                        </div>
                        <br>
                        <div>
                            <label for="exampleInputName2">Contraseña</label>
                            <input type="password" class="form-control" id="exampleInputName2" placeholder="Escribe una contraseña">
                        </div>
                        <div>
                            <label for="exampleInputEmail2"></label>
                            <input type="password" class="form-control" id="exampleInputEmail2" placeholder="Confirma la contraseña">
                        </div>
                    </form>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger button hvr-bubble-left" data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-success button hvr-bubble-right">Enviar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid fondo1">
        <div class="j-eventos">
            <p>EVENTOS</p>
        </div>
        <div class="row main">
            <div class="posts col-xs-12 col-md-9">

                <div class="post clearfix">

                    <a class="thumbnail pull-left thumb hvr-pop">
                        <img src="<?php echo URL ?>image/1.jpg" />
                    </a>
                    <h2 class="post-title">
                        Feria de Buga
                    </h2>
                    <p class="post-contenido text-justify">
                        Desde el 20 de julio del 1951, El Comité de Ganaderos y 
                        Agricultores de Buga, ha logrado permanecer como uno de 
                        los principales Centros Agropecuarios del occidente 
                        Colombiano, gracias a su destacada labor y desempeño en 
                        las actividades realizadas durante estos años. Desde 
                        entonces, se ha realizado consecutivamente La Feria 
                        Exposición Nacional Agropecuaria, convirtiéndola a la 
                        fecha en la feria más antigua de todo el país.
                    </p>
                    <div class="contenedor-botones">
                        <a href="#" class="btn btn-primary hvr-grow-rotate" data-toggle="modal" data-target="#parqueCabal">Ver evento</a>
                        <select class="btn btn-info">
                            <option>Asistirás?</option>
                            <option>SI</option>
                            <option>NO</option>
                        </select>
                        <a href="#" class="btn btn-primary glyphicon glyphicon-share-alt btn-xs hvr-pop">Compartir</a>
                        <a href="#" class="btn btn-warning glyphicon glyphicon-thumbs-up btn-xs button hvr-pop"></a>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="parqueCabal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Feria de Buga</h4>
                            </div>
                            <div class="modal-body">
                                <p class="post-contenido text-justify sitio-text1">
                                    Desde el 20 de julio del 1951, El Comité de Ganaderos y 
                                    Agricultores de Buga, ha logrado permanecer como uno de 
                                    los principales Centros Agropecuarios del occidente 
                                    Colombiano, gracias a su destacada labor y desempeño en 
                                    las actividades realizadas durante estos años. Desde 
                                    entonces, se ha realizado consecutivamente La Feria 
                                    Exposición Nacional Agropecuaria, convirtiéndola a la 
                                    fecha en la feria más antigua de todo el país.
                                </p>
                                <p class="post-contenido text-justify sitio-text2">
                                    A su vez, se considera entre los eventos más
                                    importantes de la región, ya que reúne a gran 
                                    cantidad de expositores, visitantes y patrocinadores 
                                    en un solo lugar. Con muestra Agrícola, Comercial, 
                                    Industrial, Artesanal, entre otras, la feria cuenta 
                                    con espacios propicios para el entretenimiento de 
                                    toda la familia y comerciantes, pues el Comité tiene 
                                    como propósito continuar como la vitrina más vendedora 
                                    del suroccidente del país, donde se genere progreso, 
                                    desarrollo y oportunidades de negocio.</p>
                                <div class="row">
                                    <div class="col-md-6 col-xs-12">
                                        <img src="<?php echo URL ?>image/f1.jpg" class="img-responsive img-rounded"/>
                                    </div>
                                    <div class="col-md-6 col-xs-12">
                                        <img src="<?php echo URL ?>image/f3.jpg" class="img-responsive img-rounded"/>
                                    </div>
                                    <div class="col-md-12 col-xs-12">
                                        <br>
                                        <img src="<?php echo URL ?>image/f2.jpg" class="img-responsive img-rounded"/>
                                    </div>
                                </div>
                            </div>
                            <div class="container">

                                <div class="row">
                                    <div class="col-xs-12 col-md-8">
                                        <h1 class="">Escribe un Comentario sobre este evento</h1>
                                        <form class="form-horizontal">
                                            <div class="form-group has-success ">
                                                <label for="inputEmail3" class="col-sm-2 control-label">Nombre</label>
                                                <div class="col-md-3">
                                                    <input type="email" class="form-control" id="inputEmail3" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group has-success ">
                                                <label for="inputEmail3" class="col-sm-2 control-label">Correo</label>
                                                <div class="col-md-3">
                                                    <input type="email" class="form-control" id="inputEmail3" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="inputPassword3" class="col-sm-2 control-label"></label>
                                                <div class="col-sm-5">
                                                    <textarea class="form-control" rows="3" type="password" id="inputPassword3" placeholder="Escribe aquí tu comentario..."></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <button type="submit" class="btn btn-default button hvr-radial-out">Enviar</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="post clearfix">

                    <a class="thumbnail pull-left thumb hvr-pop">
                        <img src="<?php echo URL ?>image/2.jpg" />
                    </a>
                    <h2 class="post-title">
                        Semana Santa
                    </h2>
                    <p class="post-contenido text-justify">
                        Desde el 20 de julio del 1951, El Comité de Ganaderos y 
                        Agricultores de Buga, ha logrado permanecer como uno de 
                        los principales Centros Agropecuarios del occidente 
                        Colombiano, gracias a su destacada labor y desempeño en 
                        las actividades realizadas durante estos años. Desde 
                        entonces, se ha realizado consecutivamente La Feria 
                        Exposición Nacional Agropecuaria, convirtiéndola a la 
                        fecha en la feria más antigua de todo el país.
                    </p>
                    <div class="contenedor-botones">
                        <a href="#" class="btn btn-primary hvr-grow-rotate">Ver evento</a>
                        <select class="btn btn-info">
                            <option>Asistirás?</option>
                            <option>SI</option>
                            <option>NO</option>
                        </select>                        <a href="#" class="btn btn-primary glyphicon glyphicon-share-alt btn-xs hvr-pop">Compartir</a>
                        <a href="#" class="btn btn-warning glyphicon glyphicon-thumbs-up btn-xs button hvr-pop"></a>

                    </div>
                </div>
                <div class="post clearfix">

                    <a class="thumbnail pull-left thumb hvr-pop">
                        <img src="<?php echo URL ?>image/3.jpg" />
                    </a>
                    <h2 class="post-title">
                        Buga Digital
                    </h2>
                    <p class="post-contenido text-justify">
                        Desde el 20 de julio del 1951, El Comité de Ganaderos y 
                        Agricultores de Buga, ha logrado permanecer como uno de 
                        los principales Centros Agropecuarios del occidente 
                        Colombiano, gracias a su destacada labor y desempeño en 
                        las actividades realizadas durante estos años. Desde 
                        entonces, se ha realizado consecutivamente La Feria 
                        Exposición Nacional Agropecuaria, convirtiéndola a la 
                        fecha en la feria más antigua de todo el país.
                    </p>
                    <div class="contenedor-botones">
                        <a href="#" class="btn btn-primary hvr-grow-rotate">Ver evento</a>
                        <select class="btn btn-info">
                            <option>Asistirás?</option>
                            <option>SI</option>
                            <option>NO</option>
                        </select>                        <a href="#" class="btn btn-primary glyphicon glyphicon-share-alt btn-xs hvr-pop">Compartir</a>
                        <a href="#" class="btn btn-warning glyphicon glyphicon-thumbs-up btn-xs button hvr-pop"></a>
                    </div>
                </div>
                <div class="post clearfix">

                    <a class="thumbnail pull-left thumb hvr-pop">
                        <img src="<?php echo URL ?>image/4.jpg" />
                    </a>
                    <h2 class="post-title">
                        Evento Club Guadalajara
                    </h2>
                    <p class="post-contenido text-justify">
                        Desde el 20 de julio del 1951, El Comité de Ganaderos y 
                        Agricultores de Buga, ha logrado permanecer como uno de 
                        los principales Centros Agropecuarios del occidente 
                        Colombiano, gracias a su destacada labor y desempeño en 
                        las actividades realizadas durante estos años. Desde 
                        entonces, se ha realizado consecutivamente La Feria 
                        Exposición Nacional Agropecuaria, convirtiéndola a la 
                        fecha en la feria más antigua de todo el país.
                    </p>
                    <div class="contenedor-botones">
                        <a href="#" class="btn btn-primary hvr-grow-rotate">Ver evento</a>
                        <select class="btn btn-info">
                            <option>Asistirás?</option>
                            <option>SI</option>
                            <option>NO</option>
                        </select>                        <a href="#" class="btn btn-primary glyphicon glyphicon-share-alt btn-xs hvr-pop">Compartir</a>
                        <a href="#" class="btn btn-warning glyphicon glyphicon-thumbs-up btn-xs button hvr-pop"></a>
                    </div>
                </div>
                <div class="post clearfix">

                    <a class="thumbnail pull-left thumb hvr-pop">
                        <img src="<?php echo URL ?>image/5.jpg" />
                    </a>
                    <h2 class="post-title">
                        BugaTattoo
                    </h2>
                    <p class="post-contenido text-justify">
                        Desde el 20 de julio del 1951, El Comité de Ganaderos y 
                        Agricultores de Buga, ha logrado permanecer como uno de 
                        los principales Centros Agropecuarios del occidente 
                        Colombiano, gracias a su destacada labor y desempeño en 
                        las actividades realizadas durante estos años. Desde 
                        entonces, se ha realizado consecutivamente La Feria 
                        Exposición Nacional Agropecuaria, convirtiéndola a la 
                        fecha en la feria más antigua de todo el país.
                    </p>
                    <div class="contenedor-botones">
                        <a href="#" class="btn btn-primary hvr-grow-rotate">Ver evento</a>
                        <select class="btn btn-info">
                            <option>Asistirás?</option>
                            <option>SI</option>
                            <option>NO</option>
                        </select>                        <a href="#" class="btn btn-primary glyphicon glyphicon-share-alt btn-xs hvr-pop">Compartir</a>
                        <a href="#" class="btn btn-warning glyphicon glyphicon-thumbs-up btn-xs button hvr-pop"></a>
                    </div>
                </div>
                <nav>
                    <div class="center-block">
                        <ul class="pagination">
                            <li class="disabled"><a href="#">&laquo;<span class="sr-only">Anterior</span></a></li>  
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">&raquo;<span class="sr-only">Anterior</span></a></li>  

                        </ul>  
                    </div>
                </nav>
            </div>
            <aside class="col-md-3 hidden-xs hidden-sm">
                <h4>Categorías</h4>
                <div class="list-group ">
                    <a href="#"class="list-group-item hvr-bounce-to-bottom lista-categorias">Cultura y Tradición</a>
                    <a href="<?php echo URL ?>index.php/home/sitiosRegistrado"class="list-group-item active hvr-bounce-to-bottom lista-categorias">Histórico</a>
                    <a href="#"class="list-group-item  hvr-bounce-to-bottom lista-categorias">Ecoturístico</a>
                    <a href="#"class="list-group-item hvr-bounce-to-bottom lista-categorias">Religioso</a>
                    <a href="#"class="list-group-item hvr-bounce-to-bottom lista-categorias">Entretenimiento</a>
                    <a href="#"class="list-group-item hvr-bounce-to-bottom lista-categorias">Deporte</a>
                </div>
                <h4>Eventos Destacados</h4>
                <a href="#"class="list-group-item">
                    <h4 class="list-group-item-heading">La Feria de Buga</h4>
                    <p class="list-group-item-text">sjhksjhxkjskhc hsbhcb hdh dnh hh jedhjueeb jnr....</p>
                </a>
                <a href="#"class="list-group-item">
                    <h4 class="list-group-item-heading">La Feria de Buga</h4>
                    <p class="list-group-item-text">sjhksjhxkjskhc hsbhcb hdh dnh hh jedhjueeb jnr....</p>
                </a>
                <a href="#"class="list-group-item">
                    <h4 class="list-group-item-heading">La Feria de Buga</h4>
                    <p class="list-group-item-text">sjhksjhxkjskhc hsbhcb hdh dnh hh jedhjueeb jnr....</p>
                </a>
                <a href="#"class="list-group-item">
                    <h4 class="list-group-item-heading">La Feria de Buga</h4>
                    <p class="list-group-item-text">sjhksjhxkjskhc hsbhcb hdh dnh hh jedhjueeb jnr....</p>
                </a>
                <a href="#"class="list-group-item">
                    <h4 class="list-group-item-heading">La Feria de Buga</h4>
                    <p class="list-group-item-text">sjhksjhxkjskhc hsbhcb hdh dnh hh jedhjueeb jnr....</p>
                </a>

            </aside>
        </div>
    </div>

    <div class="container-fluid categorias">
        <div class="row">
            <div class="col-xs-12 col-md-4">
                <div class="thumbnail">
                    <a href="#"><img class="imgcategoria" src="<?php echo URL ?>image/a1.jpg" alt=""></a>
                    <div class="caption">
                        <h3>Ecoturísmo</h3>
                        <p>Se hallará los sitios, las agencias y los hoteles de turismo ecológico.</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-4">
                <div class="thumbnail">
                    <a href="#"><img class="imgcategoria" src="<?php echo URL ?>image/a2.jpg" alt=""></a>
                    <div class="caption">
                        <h3>Religioso</h3>
                        <p>Encontrará iglesias, parroquias y eventos relacionados.</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-4">
                <div class="thumbnail">
                    <a href="#"><img class="imgcategoria" src="<?php echo URL ?>image/a3.jpg" alt=""></a>
                    <div class="caption">
                        <h3>Historíco</h3>
                        <p>Se visualizará sitios que tienen que ver con la historia de la ciudad.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container comentarios">
        <h1 class="text-comment">Escribe un Comentario</h1>
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <form class="form-horizontal">
                    <div class="form-group has-success ">
                        <label for="inputEmail3" class="col-sm-2 control-label">Nombre</label>
                        <div class="col-md-5">
                            <input type="email" class="form-control" id="inputEmail3" placeholder="">
                        </div>
                    </div>
                    <div class="form-group has-success ">
                        <label for="inputEmail3" class="col-sm-2 control-label">Correo</label>
                        <div class="col-md-5">
                            <input type="email" class="form-control" id="inputEmail3" placeholder="">
                        </div>
                    </div>
                    <div class="form-group has-success">
                        <label for="inputPassword3" class="col-sm-2 control-label"></label>
                        <div class="col-sm-8">
                            <textarea class="form-control" rows="3" type="password" id="inputPassword3" placeholder="Escribe aquí tu comentario..."></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default button hvr-radial-out">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="footer-grids">
                <div class="col-md-6 col-xs-6 footer-grid">
                    <h4>Categorías</h4>
                    <ul>
                        <li><a href="#">Cutural</a></li>
                        <li><a href="#">Histórico</a></li>
                        <li><a href="#">Ecoturístico</a></li>
                        <li><a href="#">Religioso</a></li>
                        <li><a href="#">Entretenimiento</a></li>
                        <li><a href="#">Deportes</a></li>

                    </ul>
                </div>
                <div class="col-md-6 col-xs-6 footer-grid foot1">
                    <h4>Cuenta</h4>
                    <ul>
                        <li><a href="#">Modificar perfil</a></li>
                        <li><a href="#">Ver mi itinerario</a></li>
                        <li><a href="#">Cerrar sesión</a></li>

                    </ul>
                </div>
            </div>
        </div>

    </footer>
</div>


<?php include DIR . 'view/partial/foot.php' ?>