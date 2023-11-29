<x-base>
    <div class="col-md-12 d-flex d-lg-flex justify-content-center align-items-center justify-content-lg-center align-items-lg-center" style="width: 100%;padding-right: 0px;padding-left: 0px;">
        <div class="col-md-12 d-flex d-lg-flex justify-content-center justify-content-lg-center align-items-lg-center" style="width: 100%;padding-right: 0px;padding-left: 0px;">
            <img class="d-inline-block" src="{{asset('storage/img/playera_portada.jpg')}}" style="width: 100%;">
            <h1 style="position: absolute;color: rgba(14,45,86,0.85);font-family: 'Abril Fatface', serif;font-size: 50px; text-align: center;">AGREGAR UN NUEVO PRODUCTO</h1>
        </div>
    </div>
    <div style="margin-left: 0px;">
        <div class="d-flex d-sm-flex d-lg-flex justify-content-center justify-content-sm-center justify-content-lg-center" style="margin-top: 30px;">
            <div class="card d-lg-flex justify-content-lg-center" style="width: 80%;background: rgb(255,255,253);">
                <div class="card-body">
                    <form method="post" action="{{ route('publicacion.store') }}" enctype="multipart/form-data">
                        @csrf
                        <label class="form-label" for="nombre" style="font-size: 24px;" >Nombre</label>
                        <input class="form-control d-flex" type="text" style="width: 75%;" name="nombre" placeholder="Nombre" value="{{ old('nombre') }}">
                        @error('nombre')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <label class="form-label" style="font-size: 24px;" for="descripcion">Descripción</label>
                        <textarea class="form-control" name="descripcion" placeholder="Descripcion">{{ old('descripcion') }}</textarea>
                        @error('descripcion')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="row">
                            <div class="col">
                                <label class="form-label" style="font-size: 24px;" for="precio">Precio</label>
                                <input class="form-control" type="number" style="width: 100%;" name="precio" step="any" placeholder="0.00" value="{{ old('precio') }}">
                                @error('precio')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col">
                                <label class="form-label" for="temporada" style="font-size: 24px;">temporada</label>
                                <select class="form-select" name="temporadas_id[]" multiple>
                                    <optgroup label="temporada">
                                        @foreach($temporadas as $temporada)
                                            <option value="{{ $temporada->id }}">{{ $temporada->nombre }}</option>
                                        @endforeach           
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                        <div style="margin-top: 5px;">
                            <label class="form-label" for="imagen" style="font-size: 24px;">Imagen</label>
                            <input class="form-control" type="file" name="imagen">
                            @error('imagen')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="d-lg-flex justify-content-lg-center">
                            <button class="btn btn-primary" type="submit" style="width: 100%;margin-top: 15px;font-size: 24px;">Crear</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-base>