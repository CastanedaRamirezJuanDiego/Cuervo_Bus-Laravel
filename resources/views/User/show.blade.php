@include('layouts.header')

@include('layouts.menu')


@section('header')

@endsection
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">User Información</h1>
        
    </div>
    
    
    <!-- Content Row -->
    
    
    
    <!-- Content Row -->
    <div class="row">
    
        <!-- Content Column -->
        <div class="col-lg-12 mb-4">
    
            <!-- Project Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">User</h6>
                </div>
                <div class="card-body">
                    <h5 class="card-title"> id: {{ $User->id }}</h5>
                 <h5 class="card-title"> Name: {{ $User->Name }}</h5>
                 <h5 class="card-title"> Img de usuario:<img src="{{asset('storage/'.$User->Img_User)}}" alt="Imagen Usuario" width="150" height="200"></h5>
                 <h5 class="card-title"> Email: {{ $User->Email }}</h5>
                 <h5 class="card-title"> Password: {{ $User->Password }}</h5>
                 <h5 class="card-title"> Matricula: {{ $User->Matricula }}</h5>
                 <h5 class="card-text">Cuatrimestre: {{ $User->Cuatrimestre }}</h5>
                 <h5 class="card-title"> Name_Direction: {{ $User->Name_Direction }}</h5>
                 <h5 class="card-title"> Name_Trajectory: {{ $User->Name_Trajectory }}</h5>
                 <a class="btn btn-outline-success m-3" href="/User" ><i class="fa-solid fa-arrow-left"></i></a>
                </div>
           
        </div>
      
    </div>
    </div>
    <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->
@include('layouts.footer')