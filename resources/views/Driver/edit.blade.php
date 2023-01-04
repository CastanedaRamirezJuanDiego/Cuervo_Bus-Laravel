@include('layouts.header')
@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Driver Editar</h1>
</div>


<!-- Content Row -->



<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Editar Driver</h6>
            </div>
            <div class="card-body">
                
                <form action="{{url('Driver/' .$Driver->id) }}"  enctype="multipart/form-data" method="post">
                    {!! csrf_field() !!}
                    @include('components.flash_alerts') 
                    @method("PATCH")
                    <label> Name:</label>
                    <input class="form-control" type="text" name="Name_Driver" id="Name_Driver"  value="{{$Driver->Name_Driver}}">
                    @error('Name_Driver')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror 
                    <label> Email:</label>
                    <input class="form-control" type="Email" name="Email" id="Email"  value="{{$Driver->Email}}">
                    @error('Email')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror 
                    <label> Password:</label>
                    <input class="form-control" type="Password" name="Password" id="Password" value="{{$Driver->Password}}">
                    @error('Password')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror 
                    <label> Phone_Number:</label>
                    <input class="form-control" type="Number" name="Phone_Number" id="Phone_Number" value="{{$Driver->Phone_Number}}">
                    @error('Phone_Number')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror 
                    <label> Age:</label>
                        <input class="form-control" type="Number" name="Age" id="Age" value="{{$Driver->Age}}">
                        @error('Age')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror 
                        <label> License:</label>
                    <td><img src="{{asset('storage').'/'.$Driver->License}}" alt="Imagen Usuario" width="50" height="50"></td>
                        <input class="form-control" type="file" name="License" id="License" value="{{$Driver->License}}">
                    <label for=""> Center :</label>
                            <select class="form-control form-select" aria-label="Default select example" id="Center_id" name="Center_id" value="{{$Driver->Center_id}}">
                                <option selected></option>
                                    @foreach($Center as $Center)
                                <option value={{$Center->id}}>{{$Center->Center}}</option>
                                   @endforeach
                                </select>
                                <a class="btn btn-danger m-3"  href="/Driver" >Cancelar</a>
                                <button type="submit" class="btn btn-primary m-3" value="update"data-toggle="modal" data-target="#exampleModal">Aceptar</button>
                       
                        
                        <div class="row">

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
