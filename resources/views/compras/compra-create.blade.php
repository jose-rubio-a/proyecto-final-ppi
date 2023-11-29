<x-base>
    <form method="post" action="{{ route('compra.store') }}" enctype="multipart/form-data">
        @csrf
        <label class="form-label" for="producto" style="font-size: 36px;">Producto</label>
        <select class="form-select" name="productos_id[]" multiple required>
            <optgroup label="producto">
                @foreach($publicacions as $publicacion)
                    <option value="{{ $publicacion->id }}">{{ $publicacion->nombre }}</option>
                @endforeach           
            </optgroup>
        </select>
        @error('productos_id')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="d-lg-flex justify-content-lg-center">
            <button class="btn btn-primary" type="submit" style="width: 100%;margin-top: 15px;font-size: 24px;">Crear</button>
        </div>
    </form>
</x-base>