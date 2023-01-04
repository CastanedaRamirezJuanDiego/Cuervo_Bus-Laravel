@include('layouts.header')
@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->


<!-- Content Row -->



<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Cuatrimestre Alta</h6>
            </div>
            <div class="card-body">
                
            <form action="{{ url('Cuatrimeste')}}" method="post">
                @csrf
                <label for=""> Cuatrimestre :</label>
                <input class="form-control" type="Text" value="" name="Cuatrimestre">
                <div class="row">
                    <button type="button" class="btn btn-primary m-3" data-toggle="modal" data-target="#exampleModal"> Guardar</button>
                </div>
                <!-- Star nodal  -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
<div class="modal-dialog" role="document">
    <div class="modal-content">
     <div class="modal-header">
        <h5 class="modal-title" id="ExampleModalLabel">Se guardo Con Exito</h5>
     </div>
     <div class="d-flex justify-content-end">
        <button type="submit" class="btn btn-primary m-3">Aceptar</button>
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
