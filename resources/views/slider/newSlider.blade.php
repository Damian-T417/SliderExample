@extends('templates.base')

@section('content')
<div class="container mt-5">
    <div class="card">
        <h5 class="card-header">Nueva imagen</h5>
        <div class="card-body">
            <form action="{{ Route('slider_add') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="">Titulo de la imagen</label>
                <input name="title" type="text" class="form-control mt-3" placeholder="Titulo" required>

                <div class="custom-file mt-3">
                    <label class="custom-file-label">Seleccionar Archivo</label>
                    <input name="image" type="file" class="custom-file-input" lang="es" required>
                </div>

                <div class="buttons-group mt-5">
                    <button type="submit" class="btn btn-lg btn-success">Guardar</button>
                    <button class="btn btn-lg btn-danger">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection