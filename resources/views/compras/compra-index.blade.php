<x-base>
    <div class="row d-flex d-lg-flex flex-column justify-content-center align-items-center justify-content-lg-center align-items-lg-center">
        <div class="col d-flex justify-content-center align-items-center">
            <h1>Compras de {{ auth()->user()->name }}</h1>
        </div>
        <div class="col" style="margin-top: 20px;width: 50%;">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Compra ID</th>
                            <th>Total</th>
                            <th>Ver</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    @foreach($compras as $compra)
                    <tbody>
                        <tr>
                            <td>{{ $compra->id }}</td>
                            <td>{{ $compra->total }}</td>
                            <td>
                            <a class="btn btn-primary" href="{{ route('compra.show', $compra->id)}}" style="width: 100%;border-width: 0;">Ver</a>
                            </td>
                            <td>
                                <form method="post" action="{{ route('compra.destroy', $compra->id ) }}">
                                    @csrf    
                                    @method('DELETE')
                                    <button class="btn btn-primary" type="submit" style="width: 100%;background: var(--bs-form-invalid-color);border-width: 0;">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</x-base>