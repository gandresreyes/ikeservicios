<div class="row my-4">
    <div class="col-lg-7 text-white my-5">
        <form class="needs-validation" novalidate method="POST">
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationCustom01">Nombres</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="" required>

                    <div class="invalid-feedback">
                        Porfavor digite este campo
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="apellido">Apellido</label>
                    <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido" value="" required>
                    <div class="invalid-feedback">
                        Porfavor digite este campo
                    </div>
                </div>

            </div>
            <div class="form-row">
                <div class="col-md-12 mb-3">
                    <label for="ciudad">Ciudad</label>
                    <input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="Ciudad" required>
                    <div class="invalid-feedback">
                        Porfavor digite este campo
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="validationCustom04">Direccion </label>
                    <input type="text" class="form-control" id="Direccion" name="Direccion" placeholder="State" required>
                    <div class="invalid-feedback">
                        Porfavor digite este campo
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="telefono">Telefono</label>
                    <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono" required>
                    <div class="invalid-feedback">
                        Porfavor digite este campo
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="correo">Correo</label>
                    <input type="text" class="form-control" id="correo" name="correo" placeholder="Correo" required>
                    <div class="invalid-feedback">
                        Porfavor digite este campo
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                        Acepta terminos y condiciones
                    </label>
                    <div class="invalid-feedback">
                        Debes estar de acuerdo antes de enviar.
                    </div>
                </div>
            </div>            
           
        </form>
    </div>
    <div class="col-lg-5 text-white bg-dark my-5 p-4 rounded">
        <h3 class=" text-center">Tu Orden </h3>
        <table class="table table-bordered my-5 text-white">
            <thead>
                <tr>
                    <th scope="col">Producto</th>
                    <th scope="col">Precio</th>                    
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>test1</th>
                    <td>Mark</td>                   
                </tr>
                <tr>
                    <th>Tets2</th>
                    <td>Jacob</td>                   
                </tr>
                <tr>
                    <th>Test3</th>
                    <td>Larry the Bird</td>                    
                </tr>

                <tr>
                    <th><h5 class="text-danger">Total</h5></th>                    
                    <th><h5 class="text-danger">$52222</h5></th>                    
                </tr>
            </tbody>
        </table>
            <div class="text-center">
                <button class="btn btn-danger w-50 " type="submit" data-toggle="modal" data-target="#modalpagos">Pagar</button>
            </div>

    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="modalpagos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Datos de pago</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST" action="">
            <div class="form-group">
                <label for="exampleInputEmail1">numero de Cuenta</label>
                <input type="text" class="form-control" id="nrocuenta"  name="nrocuenta" placeholder="Digite su nuemero de cuenta">
                <small  class="form-text text-muted">Digite los 16 numeoros de su trajeta .</small>
            </div>
            <div class="form-group">
                <label for="nombrecta">Nombre</label>
                <input type="text" class="form-control" id="nombrecta" name="nombrecta" placeholder="Nombre">
            </div>           
            <div class="form-row">
                <div class="col-md-3 mb-3">
                    <small for="validationCustom01">dia de vencimento </small>
                    <input type="number" class="form-control" id="diven"  name="diven" placeholder="05" value="" required>

                </div>
                <div class="col-md-1"></div>
                <div class="col-md-3 mb-3">
                    <small for="apellido">año de vencimento</small>
                    <input type="number" class="form-control" id="anoven" name="anoven" placeholder="2025" value="" required>
                </div>
               <div class="col-md-1"></div>
                <div class="col-md-3 mb-3">
                    <small for="apellido"># de seguridad</small>
                    <input type="number" class="form-control" id="numsegu" name="numsegu" placeholder="123" value="" required>
                </div>

            </div>
            <div class="text-center my-5 ">
            <input type="submit" class="btn btn-danger w-50 " value="Realizar pago "></input>
            </div>
            
        </form>
       
      </div>      
    </div>
  </div>
</div>



<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>