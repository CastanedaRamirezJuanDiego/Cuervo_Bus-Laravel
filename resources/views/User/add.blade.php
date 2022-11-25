@include('layouts.header')
@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Acount Altas</h1>
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
                <h6 class="m-0 font-weight-bold text-primary">Acount Alta</h6>
            </div>
            <div class="card-body">
                
                <form action="{{ url('User') }}" method="post">
                    @csrf
                    <label > Name </label>
                    <input class="form-control" type="text"  name="Name">
                    <label > Email </label>
                    <input class="form-control" type="Email"  name="Email">
                    <label > Password </label>
                    <input class="form-control" type="Password"  name="Password">
                    <label for=""> Img_User:</label>
                    <input class="form-control" type="img" name="Img_User">
                    <label for=""> Matricula:</label>
                    <input class="form-control" type="number" name="Matricula">
                    
                    <label for=""> Cuatrimeste:</label>
                    
                    <select class="form-control form-select" aria-label="Default select example" name="Cuatrimestre_id">
                        <option selected>Elige el Cuatrimestre</option>
                        @foreach($Cuatrimeste as $Cuatrimeste)  
                        <option value={{$Cuatrimeste->id}}>{{$Cuatrimeste->Cuatrimestre}}</option>
                           @endforeach
                        </select>
                    
                    <label for=""> Direction:</label>
                    <select class="form-control form-select" aria-label="Default select example" name="Direction_id">
                            <option selected>Elige la Direction</option>
                            @foreach($Direction as $Direction)  
                            <option value={{$Direction->id}}>{{$Direction->Name_Direction}}</option>
                               @endforeach
                            </select> 

                     <label for=""> Trajectory:</label>
                    <select class="form-control form-select" aria-label="Default select example" name="Trajectory_id">
                             <option selected>Elige la Trajectory </option>
                             @foreach($Trajectory as $Trajectory)  
                             <option value={{$Trajectory->id}}>{{$Trajectory->Name_Trajectory}}</option>
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
