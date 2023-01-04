@include('layouts.header')
@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">User Editar</h1>
</div>






<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Editar User</h6>
            </div>
            <div class="card-body">
                <form action="{{url('User/' .$User->id) }}" method="post" >
                    {!! csrf_field() !!}
                    @method("PATCH")
                    <label> Name:</label>
                    <input class="form-control" type="text" name="Name" id="Name"  value="{{$User->Name}}" required >
                    @error('Name')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror 
                    <label> Email:</label>
                    <input class="form-control" type="Email" name="Email" id="Email" value="{{$User->Email}}">
                    @error('Email')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror 
                    <label> Password:</label>
                        <input class="form-control" type="Password" name="Password" id="Password" value="{{$User->Password}}">
                        @error('Password')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror 
                        <h5 class="card-title"> Img de usuario:<img src="{{asset('storage/'.$User->Img_User)}}" alt="Imagen Usuario" width="150" height="200"></h5>
                        <label> Matricula:</label>
                        <input class="form-control" type="number" name="Matricula" id="Matricula" value="{{$User->Matricula}}" required>
                        @error('Matricula')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror 
                        <label for=""> Cuatrimeste :</label>
                <select class="form-control form-select" aria-label="Default select example" id="Cuatrimestre_id" name="Cuatrimestre_id" value="{{$User->Cuatrimestre_id}}" >
                    <option value=>Elige el Cuatrimestre</option>
                        @foreach($Cuatrimeste as $Cuatrimeste)
                    <option value={{$Cuatrimeste->id}}>{{$Cuatrimeste->Cuatrimestre}}</option>
                       @endforeach
                    </select >

                    <label for=""> Direction :</label>
                <select class="form-control form-select" aria-label="Default select example" id="Direction_id" name="Direction_id" value="{{$User->Direction_id}}" required>
                    <option value="">Elija la direccion</option>
                        @foreach($Direction as $Direction)
                    <option value={{$Direction->id}}>{{$Direction->Name_Direction}}</option>
                       @endforeach
                    </select>

                        <label for=""> Trajectory :</label>
                    <select class="form-control form-select" aria-label="Default select example" id="Trajectory_id" name="Trajectory_id" value="{{$User->Trajectory_id}}" required>
                        <option value="">Elija la Trajectoria </option>
                            @foreach($Trajectory as $Trajectory)
                        <option value={{$Trajectory->id}}>{{$Trajectory->Name_Trajectory}}</option>
                           @endforeach
                        </select>

                        <div class="row">
                        <a class="btn btn-danger m-3"  href="/User" >Cancelar</a>
                        <button type="submit" class="btn btn-primary m-3" value="update">Aceptar</button>
                       
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
