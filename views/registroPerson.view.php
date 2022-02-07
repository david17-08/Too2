<?= require ('../templates/Header.php'); 
    require ('../Controller/controllers.views/registro.controller.php');
    $vecotor = VecDatos("cliente",$mysqli,$_GET["id"]);
?>
    <div class="main-panel">
    <?= require ('../templates/nav.php'); ?>
    
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Usuarios</h4>
                  <p class="card-category">Complete your profile</p>
                </div>
                <div class="card-body"> 
                  <form action="../Controller/controllers.views/Person.controller.php" method="POST">
                    <div class="row">
                      <!-- <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Company (disabled)</label>
                          <select class="form-control">
                              <option value="0">Seleccione..</option> -->
                              <!-- <?= cbx($var,$mysqli); ?> -->
                          <!-- </select>
                          <input type="text" class="form-control" disabled>
                        </div>
                      </div> -->
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Cédula</label>
                          <input type="text" name="codigo" class="form-control" value="<?= $vecotor["Cedula"] ?>" maxlenght="10" onkeypress="return cedula(event);" required>
                          <script>
                            function cedula(evt){
                              if(window.event){
                                keynum = evt.keyCode;
                              }
                              else{
                                keynum = evt.which;
                              }
                              if((keynum >47 && keynum <58) || keynum == 8 || key num == 13)
                              {
                              return true; 
                              }
                              else{
                                alert("Ingrese solo números");
                                return false;
                              }
                            }
                          </script>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nombre</label>
                          <input type="text" class="form-control" name="Nombre" value="<?= $vecotor["Nombre"] ?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Apellido</label>
                          <input type="text" class="form-control" name="Apellido" value="<?= $vecotor["Apellido"] ?>">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Dirección</label>
                          <input type="text" class="form-control" name="Direccion" value="<?= $vecotor["Direccion"] ?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Telefono</label>
                          <input type="number" class="form-control" name="Telefono" value="<?= $vecotor["Telefono"] ?>">
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right" >Guardar</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?= require ('../templates/footer_pg.php'); ?>
    </div>
<?= require ('../templates/Footer.php'); ?>