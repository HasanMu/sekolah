@extends('layouts.admin')

@section('title') Product @endsection

@section('header') Product @endsection

@section('content')


<div class="card card-small mb-4">
    <div class="card-header border-bottom">
      Detail data <strong>{{ $product->name }}</strong>
    </div>
     <ul class="list-group list-group-flush">
        <center>
            <div class="col-md-11" style="text-align: left;">

                    <strong class="text-muted d-block mb-2" style="padding-top: 5px;">Nama</strong>
                    <div class="input-group mb-3">
                        <input required disabled readonly value="{{ $product->name }}" name="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Nama produk" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif

                    <strong class="text-muted d-block mb-2" style="padding-top: 5px;">Harga satuan</strong>
                    <div class="input-group mb-3">
                        <input required disabled readonly value="{{ idr($product->price) }}" name="price" type="text" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" placeholder="Harga satuan" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('price') }}</strong>
                        </span>
                    @endif

                    <strong class="text-muted d-block mb-2" style="padding-top: 5px;">Stok</strong>
                    <div class="input-group mb-3">
                        <input required disabled readonly value="{{ $product->stock }}" name="stock" type="text" class="form-control{{ $errors->has('stock') ? ' is-invalid' : '' }}" placeholder="Stok" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    @if ($errors->has('stock'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('stock') }}</strong>
                        </span>
                    @endif

                    <strong class="text-muted d-block mb-2" style="padding-top: 5px;">Kategori</strong>
                    <div class="input-group mb-3">
                            <input required disabled readonly value="{{ $product->categories->name }}" name="cat" type="text" class="form-control{{ $errors->has('cat') ? ' is-invalid' : '' }}" placeholder="Kategori" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    @if ($errors->has('cat'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('cat') }}</strong>
                        </span>
                    @endif

                    <strong class="text-muted d-block mb-2" style="padding-top: 5px;">Kategori</strong>
                    <div class="input-group mb-3">
                            <input required disabled readonly value="@foreach ($product->tags as $item){{$item->name}}
                            @endforeach" name="cat" type="text" class="form-control{{ $errors->has('cat') ? ' is-invalid' : '' }}" placeholder="Kategori" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <div class="col">
                        <a href="{{ route('products.index') }}" class="mb-2 btn btn-white mr-2">Kembali</a>
                    </div>
            </div>
        </center>
     </ul>


  </div>


@endsection
