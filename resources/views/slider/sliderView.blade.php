@extends('templates.base')

@section('content')
<div class="container mt-5">

  <div class="row">
    <div class="col-4">
      <a href="{{ Route('slider_new') }}" class="btn btn-lg btn-success">Agregar nueva imagen</a>
    </div>
    <div class="col-6">
      @if (session('message'))
      <div class="alert alert-success" role="alert">
        {{ session('message') }}
      </div>
      @endif
    </div>
  </div>

  <table class="table mt-5">

    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Titulo</th>
        <th scope="col">Imagen</th>
        <th scope="col">Opciones</th>
      </tr>
    </thead>
    <tbody>

      @forelse($images as $image)

      <tr>
        <th scope="row">{{ $image->id }}</th>
        <td><a href="{{ Route('slider_edit', $image) }}">{{ $image->title }}</a></td>
        <td>
          <img src="{{ asset('storage'.$image->image) }}" width="50" height="100" class="d-block w-100"
            alt="{{ $image->title }}">
        </td>
        <td>
          <form action="{{Route('slider_delete',$image)}}" method="POST">
            @csrf
            @method('delete')
            <input type="submit" class="btn btn-danger" value=" Eliminar">
          </form>
        </td>
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
  {{ $images->links() }}
</div>
@endsection