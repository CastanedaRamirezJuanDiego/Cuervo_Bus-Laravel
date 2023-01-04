@include('layouts.header')
@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Bus Altas</h1>
</div>


<!-- Content Row -->



<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Bus Alta</h6>
            </div>
            <div class="card-body">
                
            <form action="{{ url('Bus') }}" method="post" >
                @csrf
                @include('components.flash_alerts') 
                <label for=""> Matricula:</label>
                <input class="form-control" type="Text" value="" name="Matricula" required="required">
                @error('Matricula')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror 
                    <select class="form-control form-select" aria-label="Default select example" name="Driver_id" required="required">
                        <option selected>Elija al conductor</option>
                        @foreach($Driver as $Driver)  
                        <option value={{$Driver->id}}>{{$Driver->Name_Driver}}</option>
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
