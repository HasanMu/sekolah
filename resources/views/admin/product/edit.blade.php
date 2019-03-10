@extends('layouts.admin')

@section('title') Product @endsection

@section('header') Product @endsection

@section('content')


<div class="card card-small mb-4">
    <div class="card-header border-bottom">
      Edit data <strong>{{ $product->name }}</strong>
    </div>
     <ul class="list-group list-group-flush">
        <center>
            <div class="col-md-11" style="text-align: left;">
                <form action="{{ route('products.update', $product->id) }}" method="post">
                    @csrf
                    @method('PUT')

                    <strong class="text-muted d-block mb-2" style="padding-top: 5px;">Nama</strong>
                    <div class="input-group mb-3">
                        <input required value="{{ $product->name }}" name="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Nama produk" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif

                    <strong class="text-muted d-block mb-2" style="padding-top: 5px;">Harga satuan</strong>
                    <div class="input-group mb-3">
                        <input required value="{{ $product->price }}" name="price" type="number" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" placeholder="Harga satuan" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('price') }}</strong>
                        </span>
                    @endif

                    <strong class="text-muted d-block mb-2" style="padding-top: 5px;">Stok</strong>
                    <div class="input-group mb-3">
                        <input required value="{{ $product->stock }}" name="stock" type="text" class="form-control{{ $errors->has('stock') ? ' is-invalid' : '' }}" placeholder="Stok" aria-label="Username" aria-describedby="basic-addon1">
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
                                <option value="{{ $data->id }}"{{ $product->categories->id == $data->id ?  'selected' : ''}}>{{ $data->name }}</option>
                            @endforeach
                          </select>
                    </div>

                    @if ($errors->has('cat'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('cat') }}</strong>
                        </span>
                    @endif

                    <strong class="text-muted d-block mb-2" style="padding-top: 5px;">Tag</strong>
                    <div class="input-group mb-3">
                          <select class="form-control{{ $errors->has('tag') ? ' is-invalid' : '' }}" name="tag[]" id="tags" multiple>
                            @foreach ($tag as $data)
                                <option value="{{ $data->id }}"{{ (in_array($data->id, $selected)) ? 'selected' : ''}}>{{ $data->name }}</option>
                            @endforeach
                          </select>
                    </div>

                    @if ($errors->has('cat'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('cat') }}</strong>
                        </span>
                    @endif

                    <div class="col">
                        <button type="submit" class="mb-2 btn btn-success mr-2">Edit data</button>
                        <a href="{{ route('products.index') }}" class="mb-2 btn btn-white mr-2">Kembali</a>
                    </div>

                </form>
            </div>
        </center>
     </ul>


  </div>


@endsection
