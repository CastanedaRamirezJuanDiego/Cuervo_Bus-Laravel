@include('layouts.header')
@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Truck stop Altas</h1>
</div>


<!-- Content Row -->



<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Alta Truck stop</h6>
            </div>
            <div class="card-body">
                    
            <form action="{{ url('Truck_stop') }}" method="post">
                {!! csrf_field() !!}
                @include('components.flash_alerts') 
                <label > Name Truck stop:</label>
                <input class="form-control" type="text"  name="Name_Truck_stop">
                @error('Name_Truck_stop')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror 
                <label for=""> Length:</label>
                <input class="form-control" type="number" name="Length">
                @error('Length')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror 
                <label for=""> Latitude:</label>
                <input class="form-control" type="number" name="Latitude">
                @error('Latitude')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror 
                <div class="row">
                    <button type="submit" class="btn btn-primary m-3">Aceptar</button>
                </div>
            </form>
            </div>
        </div>

       

    </div>

  
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

@include('layouts.footer')