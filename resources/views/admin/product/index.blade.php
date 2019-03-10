@extends('layouts.admin')

@section('title') Product @endsection

@section('header') Product @endsection

@section('content')

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

<div class="card card-small mb-4">
    <div class="card-header border-bottom">
      <a class="btn btn-primary" href="{{ route('products.create') }}" role="button">Tambah data</a>
    </div>
     <ul class="list-group list-group-flush">
        <table class="table mb-0">
            <thead class="bg-light">
              <tr>
                <th scope="col" class="border-0">No</th>
                <th scope="col" class="border-0">Nama</th>
                <th scope="col" class="border-0">Harga satuan</th>
                <th scope="col" class="border-0">Stok</th>
                <th scope="col" class="border-0">Kategori</th>
                <th scope="col" class="border-0">Tags</th>
                <th scope="col" class="border-0">Aksi</th>
              </tr>
            </thead>
            <tbody>
            <?php $no = 0; ?>
            @foreach ($product as $data)
            <?php $no++ ?>
                <tr>
                    <td>{{ $no }}</td>
                    <td>{{ $data->name }}</td>
                    <td>Rp.{{ idr($data->price) }}</td>
                    <td>{{ $data->stock }}</td>
                    <td>{{ $data->categories->name }}</td>
                    <td>
                        <ol>
                            @foreach ($data->tags as $item)
                                <li>{{ $item->name }}</li>
                            @endforeach
                        </ol>
                    </td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('products.edit', $data->id) }}" role="button">Edit Data</a>
                        <a class="btn btn-info" href="{{ route('products.show', $data->id) }}" role="button">Detail Data</a>
                        <a class="btn btn-danger" href="{{ route('products.edit', $data->id) }}" role="button">Hapus Data</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
          </table>

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
