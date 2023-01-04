@include('layouts.header')
@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Acount Altas</h1>
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
                
                <form action="{{ url('User') }}" method="post"  enctype="multipart/form-data">
                    @csrf
                    @include('components.flash_alerts') 
                    <label > Name </label>
                    <input class="form-control" type="text"  name="Name">
                    @error('Name')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror 
                    <label > Email </label>
                    <input class="form-control" type="Email"  name="Email">
                    @error('Email')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror 
                    <label > Password </label>
                    <input class="form-control" type="Password"  name="Password">
                    @error('Password')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror 
                    <label for=""> Img_User:</label>
                    <input class="form-control" type="file" name="Img_User" required>
                    @error('Img_User')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror 
                    <label for=""> Matricula:</label>
                    <input class="form-control" type="number" name="Matricula">
                    @error('Matricula')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror 
                    
                    <label for=""> Cuatrimeste:</label>
                    
                    <select class="form-control form-select" aria-label="Default select example" name="Cuatrimestre_id" required data-live-search="true">
                        <option value="">Elige el Cuatrimestre</option>
                        @foreach($Cuatrimeste as $Cuatrimeste)  
                        <option value={{$Cuatrimeste->id}}>{{$Cuatrimeste->Cuatrimestre}}</option>
                           @endforeach
                        </select>
                    
                    <label for=""> Direction:</label>
                    <select class="form-control form-select" aria-label="Default select example" name="Direction_id" required data-live-search="true" >
                            <option value="">Elija la direccion</option>
                            @foreach($Direction as $Direction)  
                            <option value={{$Direction->id}}>{{$Direction->Name_Direction}}</option>
                               @endforeach
                            </select> 

                     <label for=""> Trajectory:</label>
                    <select class="form-control form-select" aria-label="Default select example" name="Trajectory_id" required data-live-search="true">
                             <option value="">Elija la Trajectoria </option>
                             @foreach($Trajectory as $Trajectory)  
                             <option value={{$Trajectory->id}}>{{$Trajectory->Name_Trajectory}}</option>
                              @endforeach
                            </select> 
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
