<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>CALIFORNIA INTERIORS --  Cotizador</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="assets/css/gsdk-base.css" rel="stylesheet" />
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
        <style>
            .mini{
                cursor: pointer;
            }
        </style>
    </head>
    <body >
        <div class="image-container set-full-height" style="background-image: url('http://4.bp.blogspot.com/-P64BfRcnZK8/UXCHQvUE6lI/AAAAAAAAAis/_rQYb8Xn4AY/s1600/claves-para-una-decoracion-vintage.jpg')">
            <!--   Big container   -->
            <div class="container">
                <div class="row">
                    <div class="col-sm-10">
                        <!--      Wizard container        -->   
                        <div class="wizard-container">
                            <div class="card wizard-card ct-wizard-orange" id="wizardProfile">
                                <form action="" method="post" id="estimate">
                                    <!--        You can switch "ct-wizard-orange"  with one of the next bright colors: "ct-wizard-blue", "ct-wizard-green", "ct-wizard-orange", "ct-wizard-red"             -->
                                    <div class="wizard-header">
                                        <h3>
                                            <b>COTIZADOR</b>  CALIFORNIA INTERIORS <br>
                                            <small>El fino complemento para decorar</small>
                                        </h3>
                                    </div>
                                    <ul>
                                        <li><a href="#about" data-toggle="tab">Información del Cliente</a></li>
                                        <li><a href="#account" data-toggle="tab">Información del Producto</a></li>
                                        <li><a href="#address" data-toggle="tab">Características del Producto</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane" id="about">
                                            <div class="row">
                                                <div class="col-sm-5">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <img class="imagen img-responsive" src="http://www.persianasfarz.com/images/productos/enrollable/inspiracion/img-mushroom.jpg">
                                                        </div>
                                                    </div>

                                                    <p>Colores disponibles:</p>
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <img class="img-responsive mini" src="http://www.persianasfarz.com/images/productos/enrollable/inspiracion/img02-mushroom.jpg" data-color="0">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <img class="img-responsive mini" src="http://www.persianasfarz.com/images/productos/enrollable/inspiracion/img03-brown.jpg" data-color="1">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <img class="img-responsive mini" src="http://www.persianasfarz.com/images/productos/enrollable/inspiracion/img04-chocolate.jpg" data-color="2">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-7">
                                                    <div class="row">
                                                        <h4 class="info-text">Información del Cliente </h4>
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label>Nombres</label>
                                                                <input name="firstname" type="text" class="form-control" placeholder="Ramón...">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label>Email</label>
                                                                <input name="email" type="email" class="form-control" placeholder="ramon@gmail.com">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label>Celular</label>
                                                                <input name="phone" type="text" class="form-control" placeholder="6621...." required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="tab-pane" id="account">
                                            <h4 class="info-text"> Información del producto </h4>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <img src='http://www.vintagedecoracion.com.mx/images/neulux/persianas-neulux.jpg' class='img-responsive'>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="form-group">
                                                        <label>Producto <small>(Requerido)</small></label>
                                                        <select class='form-control' required name='producto'>
                                                            <option value=''>-- Selecciona --</option>
                                                            <option value='Alfombra'>Alfombra</option>
                                                            <option value='Pasto'>Pasto Sintético</option>
                                                            <option value='Piso'>Piso Laminado-TERZA</option>
                                                            <option value='Persianas'>Persianas</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-15">
                                                        <div class="form-group">
                                                            <label>Área</label>
                                                            <input type="text" name="ancho" class="form-control" placeholder="Sala, Estancia, Escalera, Patio, etc." required>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label>Ancho</label>
                                                            <input type="text" name="ancho" class="form-control" placeholder="1.205" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label>Largo</label>
                                                            <input type="text" name="ancho" class="form-control" placeholder="1.205" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label>Metros Cuadrados</label>
                                                            <input type="text" name="ancho" class="form-control" placeholder="1.205" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Estilo </label>
                                                        <select class='form-control' required name='estilo'>
                                                            <option value=''>-- Selecciona --</option>
                                                            <!--     Alfombra       -->   
                                                            <option value='Trafico'>Tráfico Pesado</option>
                                                            <option value='Residencial'>Residencial</option>
                                                            <!--      Pasto Sintético       -->   
                                                            <option value='R21'>R21 G32</option>
                                                            <option value='Bermuda'>Bermuda</option>
                                                            <!--      Piso Laminado       -->   
                                                            <option value='Bermuda'>7mm</option>
                                                            <option value='Bermuda'>8mm</option>
                                                            <option value='Bermuda'>10mm</option>
                                                            <option value='Bermuda'>12mm</option>
                                                            <!--      Persianas      --> 
                                                            <option value='Bermuda'>Rollet</option>
                                                            <option value='Bermuda'>Wollet</option>
                                                            <option value='Bermuda'>Panellet</option>
                                                            <option value='Bermuda'>Aluminix</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Rango de precios</label>
                                                        <select class='form-control' required name='rango'>
                                                            <option value=''>-- Selecciona --</option>
                                                            <!--      Calidad Alfombra (Trafico Pesado)       --> 
                                                            <option value='250'>$250 - $350</option>
                                                            <option value='351'>$351 - $450</option>
                                                            <!--      Calidad Alfombra (Residencial)       --> 
                                                            <option value='250'>$300 - $450</option>
                                                            <option value='351'>$451 - $600</option>
                                                            <option value='250'>$601 - $750</option>
                                                            <option value='351'>$751 - $950</option>
                                                            <option value='250'>$951 - $1100</option>
                                                            <option value='351'>$1101 - $1250</option>
                                                            <option value='250'>$1250 - $1400</option>
                                                            <!--    Pasto Sintético      --> 
                                                            <option value='250'>$450 - $600</option>
                                                            <option value='250'>$601 - $750</option>
                                                            <!--      Piso Laminado       --> 
                                                            <option value='250'>$350 - $400</option>
                                                            <option value='250'>$401 - $450</option>
                                                            <option value='250'>$500 - $550</option>
                                                            <option value='250'>$551 - $600</option>
                                                            <option value='250'>$600 - $650</option>
                                                            <option value='250'>$700 - $750</option>
                                                            <!--    Persianas      --> 
                                                            <option value='250'>$1000 - $1500</option>
                                                            <option value='250'>$1501 - $2001</option>
                                                            <option value='250'>$2002 - $2502</option>
                                                            <option value='250'>$2503 - $3003</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Calidad</label>
                                                        <select class='form-control' required name='estilo'>
                                                            <option value=''>-- Selecciona --</option>
                                                            <!--      Calidad Alfombra (Tráfico Pesado)       --> 
                                                            <option value='Sprint'>Guerrero-Sprint</option>
                                                            <option value='Gladiador'>Gladiador</option>
                                                            <option value='Gladiador'>Curator</option>
                                                            <option value='Curator'>Olefina(Bajo Pedido)</option>
                                                            <!--      Calidad Alfombra (Residencial)       --> 
                                                            <option value='Sprint'>Montreal</option>
                                                            <option value='Gladiador'>Venus</option>
                                                            <option value='Curator'>Castelo, Ejecutiva</option>
                                                            <option value='Olefina'>Ejecutiva</option>
                                                            <option value='Olefina'>Montecarlo</option>
                                                            <option value='Olefina'>Castelo</option>
                                                            <option value='Olefina'>Glam</option>
                                                            <!--     Piso Laminado       --> 
                                                            <option value='Sprint'>Casual, Ambienta</option>
                                                            <option value='Gladiador'>Trend</option>
                                                            <option value='Curator'>Style</option>
                                                            <option value='Olefina'>Splendor</option>
                                                            <option value='Sprint'>Hickory</option>
                                                            <option value='Gladiador'>Grand Walnut</option>
                                                            <option value='Curator'>Mammut Plus</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="address">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <h4 class="info-text"> Características del Producto </h4>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Color</label><br>
                                                        <select name="exterior" class="form-control" >
                                                            <option value="">-- Selecciona --</option>
                                                            <option value="AF">Rojo</option>
                                                            <option value="AX">Azul</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label>Cantidad</label>
                                                        <input name="cantidad" type="cantidad" class="form-control" placeholder="3...">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Marco Exterior</label><br>
                                                        <select name="exterior" class="form-control" >
                                                            <option value="">-- Selecciona --</option>
                                                            <option value="AF">Sí</option>
                                                            <option value="AX">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Marco Interior</label><br>
                                                        <select name="interior" class="form-control" >
                                                            <option value="">-- Selecciona --</option>
                                                            <option value="AF">Sí</option>
                                                            <option value="AX">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wizard-footer">
                                        <div id='result'></div>
                                        <hr>
                                        <div class="pull-right">
                                            <input type='button' class='btn btn-next btn-fill btn-warning btn-wd btn-sm' name='next' value='Siguiente' />
                                            <input type='submit' class='btn btn-finish btn-fill btn-warning btn-wd btn-sm' name='finish' value='Finalizar' />
                                        </div>
                                        <div class="pull-left">
                                            <input type='button' class='btn btn-previous btn-fill btn-default btn-wd btn-sm' name='previous' value='Anterior' />
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- wizard container -->
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!--  big container -->
            <div class="footer">
            </div>
        </div>
    </body>
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
    <!--   plugins   -->
    <script src="assets/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>
    <!--  More information about jquery.validate here: http://jqueryvalidation.org/  -->
    <script src="assets/js/jquery.validate.min.js"></script>
    <!--  methods for manipulating the wizard and the validation -->
    <script src="assets/js/wizard.js"></script>
    <script>
        $( document ).ready( function(){

            var img = [
                'http://www.persianasfarz.com/images/productos/enrollable/inspiracion/img-mushroom.jpg',
                'http://www.persianasfarz.com/images/productos/enrollable/inspiracion/img-brown.jpg',
                'http://www.persianasfarz.com/images/productos/enrollable/inspiracion/img-chocolate.jpg', 
            ];

            $( ".mini" ).click( function( event ){

                var X = $( this ).data( "color" );

                $( ".imagen" ).attr('src',img[X]);
            });
        });

        var form1 = $( "#estimate" );
        form1.validate();
        $( "#estimate" ).submit(function( event ) {
            if (form1.valid()==true){
          var parametros = $(this).serialize();
              $.ajax({
                type: "POST",
                url: "process.php",
                data: parametros,
                 beforeSend: function(objeto){
                    $("#result").html("Mensaje: Cargando...");
                  },
                success: function(datos){
                $("#result").html(datos);
                
              }
            });
          event.preventDefault();
            }  
        });
    </script>
</html>