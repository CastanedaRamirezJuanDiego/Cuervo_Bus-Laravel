@include('layouts.header')
@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Driver Altas</h1>
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
                <h6 class="m-0 font-weight-bold text-primary">Driver Alta</h6>
            </div>
            <div class="card-body">
                
                <form action="{{ url('Driver') }}" method="post">
                    @csrf
                    <label > Name </label>
                    <input class="form-control" type="text"  name="Name_Driver">
                    <label for=""> Email:</label>
                    <input class="form-control" type="Email" name="Email">
                    <label for=""> Password:</label>
                    <input class="form-control" type="Password" name="Password">
                    <label for=""> Phone_Number:</label>
                    <input class="form-control" type="phone" name="Phone_Number">
                    <label for=""> Age:</label>
                    <input class="form-control" type="number" name="Age">
                    <label for=""> License:</label>
                    <input class="form-control" type="text" name="License">
            
                    <label for=""> Centrar:</label>
                    <select class="form-control form-select" aria-label="Default select example" name="Center_id">
                        <option selected>Elige el Cuatrimestre</option>
                        @foreach($Center as $Center)  
                        <option value={{$Center->id}}>{{$Center->Center}}</option>
                           @endforeach
                        </select>
                        <div class="row">
                            <button type="submit" class="btn btn-primary m-3">Guadar</button>
         
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
