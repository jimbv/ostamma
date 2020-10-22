@extends ('layouts.admin')

@section('titulo','Administración de Especialidades')

@section('breadcrumb')

<li class="breadcrumb-item active">@yield('titulo')</li>

@endsection

@section('contenido')

 

<div class="row" id='confirmareliminar'>

<span style='display:none;' id='URLbase'>{{route('admin.especialidad.index')}}</span>

@include('custom.modal_eliminar')

          <div class="col-12">

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Sección de especialidades</h3>
                <div class="card-tools">

                 <form>

                    <div class="input-group input-group-sm" style="width: 150px;">

                      <input type="text" name="nombre" class="form-control float-right" 

                      placeholder="Buscar"

                      value="{{request()->get('nombre')}}"

                      >                     



                      <div class="input-group-append">

                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>

                      </div>

                    </div>

                  </form>

                </div>

              </div>

              <!-- /.card-header -->

              <div class="card-body table-responsive p-0" style="height: 500px;">

               

              <a class='m-2 float-right btn btn-primary' href="{{ route('admin.especialidad.create')}}">Nueva Especialidad</a>

              

              <table class="table table-head-fixed text-nowrap">

                  <thead>

                    <tr>

                      <th>ID</th>

                      <th>Nombre</th>

                      <th>Slug</th>

                      <th>Descripción</th>

                      <th>Fecha creación</th>

                      <th>Fecha modificación</th>

                      <th colspan="3"></th>

                    </tr>

                  </thead>

                  <tbody>

                  @foreach ($especialidades as $especialidad)

                   

                    <tr>

                      <td> {{$especialidad->id}}</td>

                      <td> {{$especialidad->nombre}}</td>

                      <td> {{$eespecialidadoria->slug}}</td>

                      <td style ="max-width:300px;overflow:hidden;"> {{$especialidad->descripcion}}</td>

                      <td> {{$especialidad->created_at}}</td>

                      <td> {{$especialidad->updated_at}}</td>

                      <td> <a class='btn btn-default' href="{{ route('admin.especialidad.show',$especialidad->slug)}}">

                          <i class="fas fa-eye"></i>

                          </a></td>

                      <td> <a class='btn btn-info' href="{{ route('admin.especialidad.edit',$especialidad->slug)}}">

                          <i class="fas fa-edit"></i>

                          </a></td>

                      <td> <a class='btn btn-danger' href="{{ route('admin.especialidad.index')}}" 

                          v-on:click.prevent='deseas_eliminar({{ $especialidad->id }})'

                          >

                          <i class="fas fa-trash-alt"></i>

                          </a></td>

                    </tr>

                    @endforeach

                  </tbody>

                </table>

              </div>

              <!-- /.card-body -->

            </div>

            <!-- /.card -->

          </div>

        </div>

        {{ $especialidades->appends($_GET)->links()}} 
        <div class="c-body">
        <main class="c-main">
          <div class="container-fluid">
            <div class="fade-in">
              <div class="row">
                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-header"><i class="fa fa-align-justify"></i> Simple Table</div>
                    <div class="card-body">
                      <table class="table table-responsive-sm">
                        <thead>
                          <tr>
                            <th>Username</th>
                            <th>Date registered</th>
                            <th>Role</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Samppa Nori</td>
                            <td>2012/01/01</td>
                            <td>Member</td>
                            <td><span class="badge badge-success">Active</span></td>
                          </tr>
                          <tr>
                            <td>Estavan Lykos</td>
                            <td>2012/02/01</td>
                            <td>Staff</td>
                            <td><span class="badge badge-danger">Banned</span></td>
                          </tr>
                          <tr>
                            <td>Chetan Mohamed</td>
                            <td>2012/02/01</td>
                            <td>Admin</td>
                            <td><span class="badge badge-secondary">Inactive</span></td>
                          </tr>
                          <tr>
                            <td>Derick Maximinus</td>
                            <td>2012/03/01</td>
                            <td>Member</td>
                            <td><span class="badge badge-warning">Pending</span></td>
                          </tr>
                          <tr>
                            <td>Friderik Dávid</td>
                            <td>2012/01/21</td>
                            <td>Staff</td>
                            <td><span class="badge badge-success">Active</span></td>
                          </tr>
                        </tbody>
                      </table>
                      <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- /.col-->
                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-header"><i class="fa fa-align-justify"></i> Striped Table</div>
                    <div class="card-body">
                      <table class="table table-responsive-sm table-striped">
                        <thead>
                          <tr>
                            <th>Username</th>
                            <th>Date registered</th>
                            <th>Role</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Yiorgos Avraamu</td>
                            <td>2012/01/01</td>
                            <td>Member</td>
                            <td><span class="badge badge-success">Active</span></td>
                          </tr>
                          <tr>
                            <td>Avram Tarasios</td>
                            <td>2012/02/01</td>
                            <td>Staff</td>
                            <td><span class="badge badge-danger">Banned</span></td>
                          </tr>
                          <tr>
                            <td>Quintin Ed</td>
                            <td>2012/02/01</td>
                            <td>Admin</td>
                            <td><span class="badge badge-secondary">Inactive</span></td>
                          </tr>
                          <tr>
                            <td>Enéas Kwadwo</td>
                            <td>2012/03/01</td>
                            <td>Member</td>
                            <td><span class="badge badge-warning">Pending</span></td>
                          </tr>
                          <tr>
                            <td>Agapetus Tadeáš</td>
                            <td>2012/01/21</td>
                            <td>Staff</td>
                            <td><span class="badge badge-success">Active</span></td>
                          </tr>
                        </tbody>
                      </table>
                      <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- /.col-->
              </div>
              <!-- /.row-->
              <div class="row">
                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-header"><i class="fa fa-align-justify"></i> Condensed Table</div>
                    <div class="card-body">
                      <table class="table table-responsive-sm table-sm">
                        <thead>
                          <tr>
                            <th>Username</th>
                            <th>Date registered</th>
                            <th>Role</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Carwyn Fachtna</td>
                            <td>2012/01/01</td>
                            <td>Member</td>
                            <td><span class="badge badge-success">Active</span></td>
                          </tr>
                          <tr>
                            <td>Nehemiah Tatius</td>
                            <td>2012/02/01</td>
                            <td>Staff</td>
                            <td><span class="badge badge-danger">Banned</span></td>
                          </tr>
                          <tr>
                            <td>Ebbe Gemariah</td>
                            <td>2012/02/01</td>
                            <td>Admin</td>
                            <td><span class="badge badge-secondary">Inactive</span></td>
                          </tr>
                          <tr>
                            <td>Eustorgios Amulius</td>
                            <td>2012/03/01</td>
                            <td>Member</td>
                            <td><span class="badge badge-warning">Pending</span></td>
                          </tr>
                          <tr>
                            <td>Leopold Gáspár</td>
                            <td>2012/01/21</td>
                            <td>Staff</td>
                            <td><span class="badge badge-success">Active</span></td>
                          </tr>
                        </tbody>
                      </table>
                      <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- /.col-->
                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-header"><i class="fa fa-align-justify"></i> Bordered Table</div>
                    <div class="card-body">
                      <table class="table table-responsive-sm table-bordered">
                        <thead>
                          <tr>
                            <th>Username</th>
                            <th>Date registered</th>
                            <th>Role</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Pompeius René</td>
                            <td>2012/01/01</td>
                            <td>Member</td>
                            <td><span class="badge badge-success">Active</span></td>
                          </tr>
                          <tr>
                            <td>Paĉjo Jadon</td>
                            <td>2012/02/01</td>
                            <td>Staff</td>
                            <td><span class="badge badge-danger">Banned</span></td>
                          </tr>
                          <tr>
                            <td>Micheal Mercurius</td>
                            <td>2012/02/01</td>
                            <td>Admin</td>
                            <td><span class="badge badge-secondary">Inactive</span></td>
                          </tr>
                          <tr>
                            <td>Ganesha Dubhghall</td>
                            <td>2012/03/01</td>
                            <td>Member</td>
                            <td><span class="badge badge-warning">Pending</span></td>
                          </tr>
                          <tr>
                            <td>Hiroto Šimun</td>
                            <td>2012/01/21</td>
                            <td>Staff</td>
                            <td><span class="badge badge-success">Active</span></td>
                          </tr>
                        </tbody>
                      </table>
                      <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- /.col-->
              </div>
              <!-- /.row-->
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header"><i class="fa fa-align-justify"></i> Combined All Table</div>
                    <div class="card-body">
                      <table class="table table-responsive-sm table-bordered table-striped table-sm">
                        <thead>
                          <tr>
                            <th>Username</th>
                            <th>Date registered</th>
                            <th>Role</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Vishnu Serghei</td>
                            <td>2012/01/01</td>
                            <td>Member</td>
                            <td><span class="badge badge-success">Active</span></td>
                          </tr>
                          <tr>
                            <td>Zbyněk Phoibos</td>
                            <td>2012/02/01</td>
                            <td>Staff</td>
                            <td><span class="badge badge-danger">Banned</span></td>
                          </tr>
                          <tr>
                            <td>Einar Randall</td>
                            <td>2012/02/01</td>
                            <td>Admin</td>
                            <td><span class="badge badge-secondary">Inactive</span></td>
                          </tr>
                          <tr>
                            <td>Félix Troels</td>
                            <td>2012/03/01</td>
                            <td>Member</td>
                            <td><span class="badge badge-warning">Pending</span></td>
                          </tr>
                          <tr>
                            <td>Aulus Agmundr</td>
                            <td>2012/01/21</td>
                            <td>Staff</td>
                            <td><span class="badge badge-success">Active</span></td>
                          </tr>
                        </tbody>
                      </table>
                      <nav>
                        <ul class="pagination">
                          <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                          <li class="page-item active"><a class="page-link" href="#">1</a></li>
                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item"><a class="page-link" href="#">4</a></li>
                          <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                      </nav>
                    </div>
                  </div>
                </div>
                <!-- /.col-->
              </div>
              <!-- /.row-->
            </div>
          </div>
        </main>
        <footer class="c-footer">
          <div><a href="https://coreui.io">CoreUI</a> &copy; 2020 creativeLabs.</div>
          <div class="ml-auto">Powered by&nbsp;<a href="https://coreui.io/">CoreUI</a></div>
        </footer>
      </div>
@endsection