@extends('layouts.admin')

@section('title') Tags @endsection

@section('header') Tags @endsection

@section('content')


<div class="card card-small mb-4">
    <div class="card-header border-bottom">
      Tambah data
    </div>
     <ul class="list-group list-group-flush">
        <center>
            <div class="col-md-11" style="text-align: left;">
                <form action="{{ route('tags.store') }}" method="post">
                    @csrf
                    <strong class="text-muted d-block mb-2" style="padding-top: 5px;">Nama</strong>
                    <div class="input-group mb-3">
                        <input required name="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Nama tag" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                    <div class="col">
                        <button type="submit" class="mb-2 btn btn-success mr-2">Tambah data</button>
                        <a href="{{ route('tags.index') }}" class="mb-2 btn btn-white mr-2">Kembali</a>
                    </div>

                </form>
            </div>
        </center>
     </ul>


  </div>


@endsection
