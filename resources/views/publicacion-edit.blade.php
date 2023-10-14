<x-base>
    <div style="margin-left: 72px;">
        <div style="width: 100%;">
            <div class="container d-lg-flex justify-content-lg-center align-items-lg-center" style="height: 150px;width: 100%;margin-top: 0px;background: var(--bs-body-color);margin-left: 0px;padding: 0px;">
                <h1 style="color: var(--bs-body-bg);font-size: 60px;">Editar: {{ $publicacion->nombre }}</h1>
            </div>
        </div>
        <div class="d-lg-flex justify-content-lg-center">
            <div class="card d-lg-flex justify-content-lg-center" style="width: 80%;background: rgb(255,255,253);">
                <div class="card-body">
                    <form method="post" action="{{ route('publicacion.update', $publicacion->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <label class="form-label" for="nombre" style="font-size: 24px;">Nombre</label>
                        <input class="form-control d-flex" type="text" style="width: 75%;" name="nombre" placeholder="Nombre" value="{{ $publicacion->nombre }}">
                        @error('nombre')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <label class="form-label" style="font-size: 24px;" for="descripcion">Descripción</label>
                        <textarea class="form-control" name="descripcion" placeholder="Descripcion">{{ $publicacion->descripcion }}</textarea>
                        @error('descripcion')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="row">
                            <div class="col">
                                <label class="form-label" style="font-size: 24px;" for="precio">Precio</label>
                                <input class="form-control" type="number" style="width: 100%;" name="precio" step="any" placeholder="0.00" value="{{ $publicacion->precio }}">
                                @error('precio')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col">
                                <label class="form-label" for="categoria" style="font-size: 24px;">Categoria</label>
                                <select class="form-select" name="categoria">
                                    <optgroup label="Categoria">
                                        <option value="comida">Comida</option>
                                        <option value="ropa">Ropa</option>
                                        <option value="electronicos">Electronicos</option>
                                        <option value="otro" selected="">Otro</option>
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