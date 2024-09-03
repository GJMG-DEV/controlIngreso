@extends('home')
@section('content')
<div class="container">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="row">
                <div class="col-md-12">
                    <div class="card-body">
                        <h4 class="card-title text-center mb-5 mt-5">REGISTRO DE USUARIOS</h4>
                        <form class="forms-sample">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Apellido Paterno</label>
                                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Apellido Materno</label>
                                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Nombres</label>
                                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username">
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">D.N.I</label>
                                            <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Unidad</label>
                                            <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Hora Ingreso</label>
                                            <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username">
                                        </div>
                                    </div>
                                    </div>
                                </div>

                            </div>
                            <hr>
                            <button type="submit" class="btn btn-primary me-2">Registrar</button>
                            <button class="btn btn-light">Cancelar</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection