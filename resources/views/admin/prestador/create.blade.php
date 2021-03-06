@extends('layouts.admin')
 

@section('titulo', 'Nuevo prestador')



@section('breadcrumb')

  <li class="breadcrumb-item"><a href="{{route('admin.prestador.index')}}">Prestadores</a></li>

  <li class="breadcrumb-item active">@yield('titulo')</li>

@endsection





@section('contenido')





@section('estilos')

  <!-- Select2 -->

  <link rel="stylesheet" href="/adminlte/plugins/select2/css/select2.min.css">

  <link rel="stylesheet" href="/adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

@endsection

@section('scripts')



  <script src="/adminlte/ckeditor/ckeditor.js"></script>

  <!-- Select2 -->

  <script src="/adminlte/plugins/select2/js/select2.full.min.js"></script>

  <script>

    $(function () {

    //Initialize Select2 Elements

    $('#especialidad_id').select2()



    //Initialize Select2 Elements

    $('.select2bs4').select2({

      theme: 'bootstrap4'

    })

  }); 

  </script>



@endsection 



<div id="apiprestador">

<form action="{{ route('admin.prestador.store') }}" method="POST" enctype="multipart/form-data" >

@csrf



  <!-- Main content -->

    <section class="content">

      <div class="container-fluid">

        <!-- SELECT2 EXAMPLE -->







      <div class="card card-success">

          <div class="card-header">

            <h3 class="card-title">Datos Personales</h3>



           

          </div>

          <!-- /.card-header -->

          <div class="card-body">



             <div class="row">

              <div class="col-md-6">

                <div class="form-group">



                  <label>Visitas</label>

                  <input  class="form-control" type="number" id="visitas" name="visitas">



                 

                </div>

                <!-- /.form-group -->

                

              </div>

              <!-- /.col -->

              <div class="col-md-6">

                <div class="form-group">



                  <label>Ventas</label>

                  <input  class="form-control" type="number" id="ventas" name="ventas" >

                </div>

                <!-- /.form-group -->

    

              </div>

              <!-- /.col -->

            </div>

            <!-- /.row -->









          </div>

          <!-- /.card-body -->

          <div class="card-footer">

            

          </div>

        </div>

        <!-- /.card -->





















 
        @livewire('prestador') 











 
      </div>



        <!-- /.card -->

        

        <div class="card card-success">

            <div class="card-header">

              <h3 class="card-title">Sección de Precios</h3>

  

              

            </div>

            <!-- /.card-header -->

            <div class="card-body">

              <div class="row">

  

  

  

                <div class="col-md-3">

                  <div class="form-group">

  

                    <label>Precio anterior</label>

                    

  

  

                  <div class="input-group">

                    <div class="input-group-prepend">

                      <span class="input-group-text">$</span>

                    </div>

                    <input v-model='precioanterior'

                    class="form-control" type="number" id="precioanterior" name="precioanterior" min="0" value="0" step=".01">                 

                  </div>

                   

                  </div>

                  <!-- /.form-group -->

                  

                </div>

                <!-- /.col -->

  

  

  

                <div class="col-md-3">

                  <div class="form-group">

  

                    <label>Precio actual</label>

                     <div class="input-group">

                    <div class="input-group-prepend">

                      <span class="input-group-text">$</span>

                    </div>

                    <input v-model='precioactual' 

                    class="form-control" type="number" id="precioactual" name="precioactual" min="0" value="0" step=".01">                 

                  </div>

  

                  <br>

                  <span id="descuento">

                  @{{generardescuento}}



                  </span>

                  </div>

                  <!-- /.form-group -->

      

                </div>

                <!-- /.col -->

  

  

  

  

                <div class="col-md-6">

                  <div class="form-group">

  

                    <label>Porcentaje de descuento</label>

                     <div class="input-group">                  

                    <input v-model='porcentajededescuento' 

                    class="form-control" type="number" id="porcentajededescuento" name="porcentajededescuento" step="any" min="0" max="100" value="0" >    <div class="input-group-prepend">

                      <span class="input-group-text">%</span>

                    </div>  

  

                  </div>

  

                  <br>

                  <div class="progress">

                      <div id="barraprogreso" class="progress-bar" role="progressbar" style="width: 0%;" 

                      v-bind:style="{width:porcentajededescuento+'%'}"

                      aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">@{{ porcentajededescuento}}%</div>

                  </div>

                  </div>

                  <!-- /.form-group -->

                  

                </div>

                <!-- /.col -->

  

  

              </div>

              <!-- /.row -->

  

  

            </div>

            <!-- /.card-body -->

            <div class="card-footer">

              

            </div>

          </div>

          <!-- /.card -->









   <div class="row">

          <div class="col-md-6">



            <div class="card card-primary">

              <div class="card-header">

                <h3 class="card-title">Descripciones del producto</h3>

              </div>

              <div class="card-body">

                <!-- Date dd/mm/yyyy -->

                <div class="form-group">

                  <label>Descripción corta:</label>



                  <textarea class="form-control ckeditor" name="descripcion_corta" id="descripcion_corta" rows="3"></textarea>

                

                </div>

                <!-- /.form group -->



               <div class="form-group">

                  <label>Descripción larga:</label>



                  <textarea class="form-control ckeditor" name="descripcion_larga" id="descripcion_larga" rows="5"></textarea>

                

                </div>                



              </div>

              <!-- /.card-body -->

            </div>

            <!-- /.card -->



       </div>

        <!-- /.col-md-6 -->









          <div class="col-md-6">



            <div class="card card-info">

              <div class="card-header">

                <h3 class="card-title">Especificaciones y otros datos</h3>

              </div>

              <div class="card-body">

                <!-- Date dd/mm/yyyy -->

                <div class="form-group">

                  <label>Especificaciones:</label>



                  <textarea class="form-control ckeditor" name="especificaciones ckeditor" id="especificaciones" rows="3"></textarea>

                

                </div>

                <!-- /.form group -->



               <div class="form-group">

                  <label>Datos de interes:</label>



                  <textarea class="form-control ckeditor" name="datos_de_interes " id="datos_de_interes" rows="5"></textarea>

                

                </div>                



              </div>

              <!-- /.card-body -->

            </div>

            <!-- /.card -->



       </div>

        <!-- /.col-md-6 -->







      </div>

      <!-- /.row -->









         <div class="card card-warning">

          <div class="card-header">

            <h3 class="card-title">Imágenes</h3>



           

          </div>

          <!-- /.card-header -->

          <div class="card-body">



            <div class="form-group">

                

               <label for="imagenes">Agregar imágenes</label> 

                              

               <input type="file" class="form-control-file" id="imagenes[]" name="imagenes[]" multiple 

               accept="image/*" >



              <div class='description'>

                Un número limitado de archivos pueden ser cargados en este campo

                <br>

                Límite 2048 MB por imágen

                <br>

                Tipos permitidos: jpg, jpeg, png, gif, svg.

                <br>

                <br>

              </div>



            </div>





          </div>





          <!-- /.card-body -->

          <div class="card-footer">

            

          </div>

        </div>

        <!-- /.card -->





      <div class="card card-danger">

          <div class="card-header">

            <h3 class="card-title">Administración</h3>

          </div>

          <!-- /.card-header -->

      <div class="card-body">



       <div class="row">

              <div class="col-md-6">

                <div class="form-group">



                <label>Estado</label> 

                   


                </div>

                <!-- /.form-group -->

                

              </div>

              <!-- /.col -->

              <div class="col-sm-6">

                    <!-- checkbox -->

                    <div class="form-group clearfix">

                      <div class="custom-control custom-checkbox">

                        <input type="checkbox" class="custom-control-input" id="activo" name="activo">

                        <label class="custom-control-label" for="activo">Activo</label>

                     </div>



                    </div>



                    <div class="form-group">

                    <div class="custom-control custom-switch">

                      <input type="checkbox"  class="custom-control-input" id="sliderprincipal" name="sliderprincipal">

                      <label class="custom-control-label" for="sliderprincipal">Aparece en el Slider principal</label>

                    </div>

                  </div>



                  </div>



                



       </div>

            <!-- /.row -->









       <div class="row">

              <div class="col-md-12">

                <div class="form-group">



                   <a class="btn btn-danger" href="{{ route('cancelar','admin.product.index') }}">Cancelar</a>

                   <input   

                   :disabled="deshabilitar_boton==1"                 

                  type="submit" value="Guardar" class="btn btn-primary">

                 

                </div>

                <!-- /.form-group -->

                

              </div>

              <!-- /.col -->





           

                



       </div>

            <!-- /.row -->









          </div>





   

          <!-- /.card-body -->

          <div class="card-footer">

            

          </div>

        </div>

        <!-- /.card -->















      </div><!-- /.container-fluid -->

    </section>

    <!-- /.content -->







    </form>

    </div>

 @endsection     



