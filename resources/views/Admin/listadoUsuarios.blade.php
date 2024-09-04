@extends('home')
@section('content')
<div class="container">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="row">
                <div class="col-md-12">
                    <div class="card-body">
                        <h4 class="card-title text-center mb-5 mt-5">LISTADO DE USUARIOS</h4>
                        <div class="table-responsive">
                            <livewire:listado-usuario />
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection