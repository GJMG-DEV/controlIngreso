<div>
    <form class="forms-sample" wire:submit="save">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputUsername1">Apellido Paterno</label>
                    <input type="text" wire:model="apePaterno" class="form-control" id="exampleInputUsername1" placeholder="Username">
                    <div>
                        @error('apePaterno') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputUsername1">Apellido Materno</label>
                    <input type="text" wire:model="apeMaterno" class="form-control" id="exampleInputUsername1" placeholder="Username">
                    <div>
                        @error('apeMaterno') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputUsername1">Nombres</label>
                    <input type="text" wire:model="nombre" class="form-control" id="exampleInputUsername1" placeholder="Username">
                    <div>
                        @error('nombre') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>
            <div class="mt-3">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputUsername1">D.N.I</label>
                            <input type="text" wire:model="dni" class="form-control" id="exampleInputUsername1" placeholder="Username">
                            <div>
                                @error('dni') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Unidad</label>
                            <input type="text" wire:model="unidad" class="form-control" id="exampleInputUsername1" placeholder="Username">
                            <div>
                                @error('unidad') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Hora Ingreso</label>
                            <input type="time" wire:model="horaIngreso" class="form-control" id="exampleInputUsername1" placeholder="Username">
                            <div>
                                @error('horaIngreso') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <hr>
        <button type="submit"  class="btn btn-primary me-2">Registrar</button>
        <button type="button" class="btn btn-light">Cancelar</button>
    </form>
</div>