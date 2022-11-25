 @include('layouts.header')

@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->





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
                <div class="modal-body">Info del Usuarios</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="/User">Continuar</a>
                </div>
            </div>
        </div>
    </div>
            <div class="card-body">
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h3 class="m-1 font-weight-bold text-primary">Lista de Usuarios</h3>
                            <div class="d-flex justify-content-end">
                                    <a class="btn btn-primary" href="User/create"><i class="fa-regular fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="card-body">
                           
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Img_User</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>Matricula</th>
                                            <th>Cuatrimestre</th>
                                            <th>Direction</th>
                                            <th>Trajectory</th>
                                            <th>Acciones</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                             <th>ID</th>
                                            <th>Name</th>
                                            <th>Img_User</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>Matricula</th>
                                            <th>Cuatrimestre</th>
                                            <th>Direction</th>
                                            <th>Trajectory</th>
                                            <th>Acciones</th>
                                        
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($User as $User)
                                        <tr>
                                            <td>{{$User->id}}</td>
                                            <td>{{$User->Name}}</td>
                                            <td>{{$User->Img_User}}</td>
                                            <td>{{$User->Email}}</td>
                                            <td>{{$User->Password}}</td>
                                            <td>{{$User->Matricula}}</td>
                                            <td>{{$User->Cuatrimeste->Cuatrimestre}}</td>
                                            <td>{{$User->Direction->Name_Direction}}</td>
                                            <td>{{$User->Trajectory->Name_Trajectory}}</td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                                    <a class="btn btn-success m-3" href="User/{{$User->id}}" ><i class="fa-regular fa-eye"></i></a>
                                                    <a class="btn btn-warning m-3" href="User/{{$User->id}}/edit"><i class="fa-solid fa-pen-to-square"></i></a>
                                                    <form action="User/{{$User->id}}" method="POST">
                                                    {!! csrf_field() !!}
                                                    @method("delete")
                                                        
                                                    <button class="btn btn-danger m-3" type="submit"><i class="fa-solid fa-trash"></i></button>
                                                    </form>
                                                    <!-- <a class="btn btn-danger m-3" data-toggle="modal" data-target="#logoutModal"><i class="fa-solid fa-trash"></i></a> -->
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
