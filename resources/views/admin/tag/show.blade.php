@extends('layouts.admin')

@section('title') Categories @endsection

@section('header') Categories @endsection

@section('content')


<div class="card card-small mb-4">
    <div class="card-header border-bottom">
      Detail data <strong>{{ $tag->name }}</strong>
    </div>
     <ul class="list-group list-group-flush">
        <center>
            <div class="col-md-11" style="text-align: left;">
                    <strong class="text-muted d-block mb-2" style="padding-top: 5px;">Nama</strong>
                    <div class="input-group mb-3">
                        <input readonly disabled value="{{ $tag->name }}" name="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Nama kategori" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                    <div class="col">
                        <a href="{{ route('categories.index') }}" class="mb-2 btn btn-white mr-2">Kembali</a>
                    </div>
            </div>
        </center>

    </ul>


  </div>


@endsection
