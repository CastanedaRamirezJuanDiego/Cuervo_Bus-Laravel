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
                
                <form action="{{url('Driver/' .$Driver->id) }}" method="post">
                    {!! csrf_field() !!}
                    @method("PATCH")
                    <label> Name:</label>
                    <input class="form-control" type="text" name="Name_Driver" id="Name_Driver"  value="{{$Driver->Name_Driver}}">
                    <label> Email:</label>
                    <input class="form-control" type="Email" name="Email" id="Email"  value="{{$Driver->Email}}">
                    <label> Password:</label>
                    <input class="form-control" type="Password" name="Password" id="Password" value="{{$Driver->Password}}">
                    <label> Phone_Number:</label>
                    <input class="form-control" type="text" name="Phone_Number" id="Phone_Number" value="{{$Driver->Phone_Number}}">
                    <label> Age:</label>
                        <input class="form-control" type="text" name="Age" id="Age" value="{{$Driver->Age}}">
                    <label> License:</label>
                        <input class="form-control" type="text" name="License" id="License" value="{{$Driver->License}}">
                    <label for=""> Center :</label>
                            <select class="form-control form-select" aria-label="Default select example" id="Center_id" name="Center_id" value="{{$Driver->Center_id}}">
                                <option selected></option>
                                    @foreach($Center as $Center)
                                <option value={{$Center->id}}>{{$Center->Center}}</option>
                                   @endforeach
                                </select>
                       
                       
                        
                        <div class="row">
                        <a class="btn btn-danger m-3"  href="/Driver" >Cancelar</a>
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
