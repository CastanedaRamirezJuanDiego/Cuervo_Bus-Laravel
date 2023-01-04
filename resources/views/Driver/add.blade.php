@include('layouts.header')
@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Driver Altas</h1>
    
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
                
                <form action="{{ url('Driver') }}"  enctype="multipart/form-data" method="post">
                  {!! csrf_field() !!}
                    @include('components.flash_alerts') 
                    <label > Name </label>
                    <input class="form-control" type="text"  name="Name_Driver" id="Name_Driver" value="{{old('Name_Driver')}}" >
                    @error('Name_Driver')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror 
                    <label for=""> Email:</label>
                    <input class="form-control" type="Email" name="Email" id="Email" value="{{old('Email')}}" >
                    @error('Email')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror 
                    <label for=""> Password:</label>
                    <input class="form-control" type="Password" name="Password" id="Password" value="{{old('Password')}}">
                    @error('Password')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror 
                    <label for=""> Phone_Number:</label>
                    <input class="form-control" type="Number" name="Phone_Number" id="Phone_Number" value="{{old('Phone_Number')}}">
                    @error('Phone_Number')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror 
                    <label for=""> Age:</label>
                    <input class="form-control" type="number" name="Age"  id="Age" value="{{old('Age')}}">
                    @error('Age')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror 
                    <label for=""> License:</label>
                    <input class="form-control" type="file" name="License" id="License" value="{{old('License')}}">
                    <label for=""> Centrar:</label>
                    <select class="form-control form-select" aria-label="Default select example" name="Center_id" id="Center_id" value="{{old('Center_id')}}">
                        <option selected>Elige el la central</option>
                        @foreach($Center as $Center)  
                        <option value={{$Center->id}}>{{$Center->Center}}</option>
                           @endforeach
                        </select>
                        <button type="submit" class="btn btn-primary m-3"  value="save">Aceptar</button>
                        <div class="row">
                         
        </div>
            </div>
        </div>
     </div>
    
    
    
    
    
    <!-- end nodal  -->
            </div>
        </div>

       

    </div>

  
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

@include('layouts.footer')
