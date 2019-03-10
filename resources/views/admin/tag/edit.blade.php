@extends('layouts.admin')

@section('title') Categories @endsection

@section('header') Categories @endsection

@section('content')


<div class="card card-small mb-4">
    <div class="card-header border-bottom">
      Edit data <strong>{{$tag->name}}</strong>
    </div>
     <ul class="list-group list-group-flush">
        <center>
            <div class="col-md-11" style="text-align: left;">
                <form action="{{ route('tags.update', $tag->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <strong class="text-muted d-block mb-2" style="padding-top: 5px;">Nama</strong>
                    <div class="input-group mb-3">
                        <input required value="{{ $tag->name }}" name="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Nama kategori" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                    <div class="col">
                        <button type="submit" class="mb-2 btn btn-success mr-2">Edit data</button>
                        <a href="{{ route('tags.index') }}" class="mb-2 btn btn-white mr-2">Kembali</a>
                    </div>

                </form>
            </div>
        </center>

    </ul>


  </div>


@endsection
