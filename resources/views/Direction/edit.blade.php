@include('layouts.header')
@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Acount Editar</h1>
    
</div>


<!-- Content Row -->



<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Editar Acount</h6>
            </div>
            <div class="card-body">
                
                <form action="{{url('Direction/' .$Direction->id) }}" method="post">
                    {!! csrf_field() !!}
                    @method("PATCH")
                    <label> Direction:</label>
                    <input class="form-control" type="text" name="Name_Direction" id="Name_Direction"  value="{{$Direction->Direction}}">
                   <div class="row">
                        <a class="btn btn-danger m-3"  href="/Direction" >Cancelar</a>
                        <button type="button" class="btn btn-primary m-3" data-toggle="modal" data-target="#exampleModal"> Guardar</button>
                    </div>
                    <!-- Star nodal  -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="ExampleModalLabel">Se Actualizo Con Exito</h5>
         </div>
         <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary m-3" value="update">Aceptar</button>
    </div>
        </div>
    </div>
 </div>





<!-- end nodal  -->

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
