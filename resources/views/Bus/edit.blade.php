 @include('layouts.header')
@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Bus Editar</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Reporte</a>
</div>

<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Editar Bus</h6>
            </div>
            <div class="card-body">
                
            <form action="{{url('Bus/' .$Bus->id) }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
               <label for=""> Matricula:</label>
                <input class="form-control" type="Text" value="{{$Bus->Matricula}}" name="Matricula">

                <label for=""> DRIVER :</label>
                <select class="form-control form-select" aria-label="Default select example" id="Driver_id" name="Driver_id" value="{{$Bus->Driver_id}}">
                    <option selected>Elige el conductor</option>
                        @foreach($Driver as $Driver)
                    <option value={{$Driver->id}}>{{$Driver->Name_Driver}}</option>
                       @endforeach
                    </select>
              

                <div class="row">
                 <a class="btn btn-danger m-3"  href="/Bus" >Cancelar</a>
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
