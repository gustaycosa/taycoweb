<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="panel panel-default">
            <div class="panel-heading">Reporteador taycosa</div>
            <div class="panel-body">
                <form id="frminicio" method="POST" action="SR/comprobarusuario.php">
                    <div class="form-group">
                        <input class="form-control" type="text" name="usuario" id="usuario" placeholder="Ingrese su usuario" style="    background: whitesmoke !Important; padding: 5px 10px !Important; height: 45px !Important; color: black !important; -webkit-text-fill-color: #000000 !Important;">
                    </div>
                    <div class="form-group">
                        <input class="form-control"  type="password" autocomplete="current-password" name="password" id="password" placeholder="Ingrese su password" style="background: whitesmoke !Important; padding: 5px 10px !Important; height: 45px !Important; color: black !important; -webkit-text-fill-color: #000000 !Important;">
                    </div>
                    <div class="form-group">
                        <button name="Iniciar sesion" class="btn btn-lg btn-default" onClick="entrar();" value="Iniciar sesion">Iniciar sesion</button>
                    </div>
                    <div class="form-group">
                        <a href="#">No puedo entrar</a> -
                        <a href="http://taycosa.mx:2095" target="blank">Correo</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
