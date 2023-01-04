@include('layouts.header')

@include('layouts.menu')


@section('header')

@endsection
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Trajectory Información</h1>
        
    </div>
    
    
    <!-- Content Row -->
    
    
    
    <!-- Content Row -->
    <div class="row">
    
        <!-- Content Column -->
        <div class="col-lg-12 mb-4">
    
            <!-- Project Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Truck_stop</h6>
                </div>
                <div class="card-body">
                 <h5 class="card-title"> Name_Trajectory: {{ $Trajectory->Name_Trajectory }}</h5>
                 <h5 class="card-title"> Length: {{ $Trajectory->Length }}</h5>
                 <h5 class="card-title"> Latitude: {{ $Trajectory->Latitude }}</h5>
                 <a class="btn btn-outline-success m-3" href="/Trajectory" ><i class="fa-solid fa-arrow-left"></i></a>
                </div>
           
        </div>
      
    </div>
    </div>
    <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->
@include('layouts.footer')