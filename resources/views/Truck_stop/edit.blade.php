@include('layouts.header')
@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Acount Editar</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>


<!-- Content Row -->



<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Editar Truck Stop</h6>
            </div>
            <div class="card-body">
                
                <form action="{{url('Truck_stop/' .$Truck_stop->id) }}" method="post">
                    {!! csrf_field() !!}
                    @method("PATCH")
                    <label> Truck_stop:</label>
                    <input class="form-control" type="text" name="Name_Truck_stop" id="Name_Truck_stop"  value="{{$Truck_stop->Name_Truck_stop}}">
                    <label> Length:</label>
                    <input class="form-control" type="number" name="Length" id="Length" value="{{$Truck_stop->Length}}">
                    <label> Latitude:</label>
                        <input class="form-control" type="number" name="Latitude" id="Latitude" value="{{$Truck_stop->Latitude}}">
                        <div class="row">
                        <a class="btn btn-danger m-3"  href="/Truck_stop" >Cancelar</a>
                        <button type="submit" class="btn btn-primary m-3" value="update">Guadar</button>
    
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
