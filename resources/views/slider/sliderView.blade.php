@extends('templates.base')

@section('content')
<div class="container mt-5">

    <a href="{{ Route('slider_new') }}" class="btn btn-lg btn-success">Agregar nueva imagen</a>

<table class="table mt-5">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Titulo</th>
        <th scope="col">Imagen</th>
      </tr>
    </thead>
    <tbody>
        @forelse($images as $image)
      <tr>
      <th scope="row">{{ $image->id }}</th>
        <td>{{ $image->title }}</td>
        <td>{{ $image->image }}</td>
      </tr>
      @empty
      <tr>
        <th scope="row"></th>
          <td>No hay registros</td>
          <td></td>
        </tr>
      @endforelse
    </tbody>
  </table>
</div>
@endsection