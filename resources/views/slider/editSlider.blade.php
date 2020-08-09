@extends('templates.base')

@section('content')

<div class="container mt-5">
    <div class="card">
        <h5 class="card-header">Nueva imagen</h5>
        <div class="card-body">
            <form action="{{ Route('slider_change', $image) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="">Titulo de la imagen</label>
                <input name="title" type="text" value="{{ $image->title }}" class="form-control mt-3" placeholder="Titulo" required>

                <div class="form-group mt-3">
                    <h5>Actualmente: <a href="{{ $image->image }}">{{ $image->image }}</a></h5>
                    <label for="exampleFormControlFile1">Selecciona una imagen</label>
                    <input name="image" type="file" class="form-control-file" lang="es" required>
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