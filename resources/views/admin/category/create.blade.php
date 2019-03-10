@extends('layouts.admin')

@section('title') Categories @endsection

@section('header') Categories @endsection

@section('content')


<div class="card card-small mb-4">
    <div class="card-header border-bottom">
      Tambah data
    </div>
     <ul class="list-group list-group-flush">
        <center>
            <div class="col-md-11" style="text-align: left;">
                <form action="{{ route('categories.store') }}" method="post">
                    @csrf
                    <strong class="text-muted d-block mb-2" style="padding-top: 5px;">Nama</strong>
                    <div class="input-group mb-3">
                        <input required name="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Nama kategori" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                    <div class="col">
                        <button type="submit" class="mb-2 btn btn-success mr-2">Tambah data</button>
                        <a href="{{ route('categories.index') }}" class="mb-2 btn btn-white mr-2">Kembali</a>
                    </div>

                </form>
            </div>
        </center>
     {{-- <li class="list-group-item p-3">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <strong class="text-muted d-block mb-2">Forms</strong>
            <form>
              <div class="form-group">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">@</span>
                  </div>
                  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1"> </div>
              </div>
              <div class="form-group">
                <input type="password" class="form-control" id="inputPassword4" placeholder="Password" value="myCoolPassword"> </div>
              <div class="form-group">
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" value="7898 Kensington Junction, New York, USA"> </div>
              <div class="form-row">
                <div class="form-group col-md-7">
                  <input type="text" class="form-control" id="inputCity" value="New York"> </div>
                <div class="form-group col-md-5">
                  <select id="inputState" class="form-control">
                    <option selected="">Choose...</option>
                    <option>...</option>
                  </select>
                </div>
              </div>
            </form>
          </div>
          <div class="col-sm-12 col-md-6">
            <strong class="text-muted d-block mb-2">Form Validation</strong>
            <form>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <input type="text" class="form-control is-valid" id="validationServer01" placeholder="First name" value="Catalin" required="">
                  <div class="valid-feedback">The first name looks good!</div>
                </div>
                <div class="form-group col-md-6">
                  <input type="text" class="form-control is-valid" id="validationServer02" placeholder="Last name" value="Vasile" required="">
                  <div class="valid-feedback">The last name looks good!</div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control is-invalid" id="validationServer03" placeholder="Username" value="catalin.vasile" required="">
                <div class="invalid-feedback">This username is taken.</div>
              </div>
              <div class="form-group">
                <select class="form-control is-invalid">
                  <option selected="">Choose...</option>
                  <option>...</option>
                </select>
                <div class="invalid-feedback">Please select your state.</div>
              </div>
            </form>
          </div>
        </div>
      </li> --}}
    </ul>


  </div>


@endsection
