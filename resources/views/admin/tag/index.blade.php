@extends('layouts.admin')

@section('title') Tags @endsection

@section('header') Tags @endsection

@section('content')

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

<div class="card card-small mb-4">
    <div class="card-header border-bottom">
      <a class="btn btn-primary" href="{{ route('tags.create') }}" role="button">Tambah data</a>
    </div>
     <ul class="list-group list-group-flush">
        <table class="table mb-0">
            <thead class="bg-light">
              <tr>
                <th scope="col" class="border-0">No</th>
                <th scope="col" class="border-0">Nama</th>
                <th scope="col" class="border-0">Aksi</th>
              </tr>
            </thead>
            <tbody>
            <?php $no = 0; ?>
            @foreach ($tag as $data)
            <?php $no++ ?>
                <tr>
                    <td>{{ $no }}</td>
                    <td>{{ $data->name }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('tags.edit', $data->id) }}" role="button">Edit Data</a>
                        <a class="btn btn-info" href="{{ route('tags.show', $data->id) }}" role="button">Detail Data</a>
                        <a class="btn btn-danger" href="{{ route('tags.edit', $data->id) }}" role="button">Hapus Data</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
          </table>
  </div>


@endsection
