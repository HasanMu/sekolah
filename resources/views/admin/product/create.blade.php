@extends('layouts.admin')

@section('title') Product @endsection

@section('header') Product @endsection

@section('content')


<div class="card card-small mb-4">
    <div class="card-header border-bottom">
      Tambah data
    </div>
     <ul class="list-group list-group-flush">
        <center>
            <div class="col-md-11" style="text-align: left;">
                <form action="{{ route('products.store') }}" method="post">
                    @csrf
                    <strong class="text-muted d-block mb-2" style="padding-top: 5px;">Nama</strong>
                    <div class="input-group mb-3">
                        <input required name="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Nama produk" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif

                    <strong class="text-muted d-block mb-2" style="padding-top: 5px;">Harga satuan</strong>
                    <div class="input-group mb-3">
                        <input required name="price" type="number" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" placeholder="Harga satuan" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('price') }}</strong>
                        </span>
                    @endif

                    <strong class="text-muted d-block mb-2" style="padding-top: 5px;">Stok</strong>
                    <div class="input-group mb-3">
                        <input required name="stock" type="text" class="form-control{{ $errors->has('stock') ? ' is-invalid' : '' }}" placeholder="Stok" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    @if ($errors->has('stock'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('stock') }}</strong>
                        </span>
                    @endif

                    <strong class="text-muted d-block mb-2" style="padding-top: 5px;">Kategori</strong>
                    <div class="input-group mb-3">
                          <select class="form-control{{ $errors->has('cat') ? ' is-invalid' : '' }}" name="cat">
                            @foreach ($cat as $data)
                                <option value="{{ $data->id }}">{{ $data->name }}</option>
                            @endforeach
                          </select>
                    </div>

                    @if ($errors->has('cat'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('cat') }}</strong>
                        </span>
                    @endif

                    <strong class="text-muted d-block mb-2" style="padding-top: 5px;">Tags</strong>
                    <div class="input-group mb-3">
                          <select class="form-control{{ $errors->has('tag') ? ' is-invalid' : '' }}" multiple name="tag[]" id="tags">
                            @foreach ($tag as $data)
                                <option value="{{ $data->id }}">{{ $data->name }}</option>
                            @endforeach
                          </select>
                    </div>

                    @if ($errors->has('cat'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('tag') }}</strong>
                        </span>
                    @endif

                    <div class="col">
                        <button type="submit" class="mb-2 btn btn-success mr-2">Tambah data</button>
                        <a href="{{ route('products.index') }}" class="mb-2 btn btn-white mr-2">Kembali</a>
                    </div>

                </form>
            </div>
        </center>
     </ul>


  </div>


@endsection
