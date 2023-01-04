@include('layouts.header')

@include('layouts.menu')


@section('header')

@endsection
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Truck_stop Información</h1>
        
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
                 <h5 class="card-title"> Name_Truck_stop: {{ $Truck_stop->Name_Truck_stop }}</h5>
                 <h5 class="card-title"> Length: {{ $Truck_stop->Length }}</h5>
                 <h5 class="card-title"> Latitude: {{ $Truck_stop->Latitude }}</h5>
                 <a class="btn btn-outline-success m-3" href="/Truck_stop" ><i class="fa-solid fa-arrow-left"></i></a>
                </div>
           
        </div>
      
    </div>
    </div>
    <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->
@include('layouts.footer')