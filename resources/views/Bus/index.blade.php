@include('layouts.header')

@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">


<!-- Content Row -->
@if(Session::has('message'))
<h6 class="alert alert-success">{{
Session::get('message')}}
</h6>
@endif



<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
          <!--   <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Lista De  Carreras</h6>
            </div> -->
             <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¿Desea eliminar el Bus</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Info del Bus</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="/Bus">Continuar</a>
                </div>
            </div>
        </div>
    </div>
            <div class="card-body">
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h3 class="m-1 font-weight-bold text-primary">Lista de AutoBuses</h3>
                            <div class="d-flex justify-content-end">
                                    <a class="btn btn-primary" href="Bus/create"><i class="fa-regular fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="card-body">
                           
                            <div class="table-responsive">
                                <table class="table table-striped" id="dataTable" >
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>ID</th>
                                            <th>Matricula</th>
                                            <th>Driver</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                             <th>ID</th>
                                            <th>Matricula</th>
                                            <th>Driver</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($Bus as $Bus)
                                        <tr>
                                            <td>{{$Bus->id}}</td>
                                            <td>{{$Bus->Matricula}}</td>
                                            <td>{{$Bus->Name_Driver}}</td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                                    <a class="btn btn-outline-info" href="Bus/{{$Bus->id}}" ><i class="fa-regular fa-eye"></i></a>
                                                    <a class="btn btn-outline-warning" href="Bus/{{$Bus->id}}/edit"><i class="fa-solid fa-pen-to-square"></i></a>
                                                    <a href="" class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModalCenter{{$Bus->id}}"><i class="fa-solid fa-trash"></i></a>
                                                 
                                                   
                                                    <!------ ESTE ES EL MODAL QUE SE MUESTRA AL DAR CLICK EN EL BOTON "ELIMINAR" ------>
          <div class="modal fade" id="exampleModalCenter{{$Bus->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                      <div class="modal-header d-flex justify-content-center">
                      </div>
                      <div class="modal-body">
                          <p class="text-center">Está seguro(a) de eliminar el Autobus {{$Bus->id}}?</p>
                      </div>
                      <div class="modal-footer d-flex justify-content-center">
                          <button type="button" class="btn btn-secondary btn-default" data-dismiss="modal">Cancelar</button>
                          <form action="Bus/{{$Bus->id}}" method="POST">
                              {!! csrf_field() !!}
                              @method("delete")
                                  
                              <button class="btn btn-danger m-3" type="submit">Aceptar</button>
                              </form>
                      </div>
                  </div>
              </div>
          </div><!--fin modal-->
                                        </div>            
                                           
                                            </td>
                                        </tr>
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
          
            </div>
        </div>

       

    </div>

  
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@include('layouts.footer')
