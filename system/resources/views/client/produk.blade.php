@extends ('client.template.base')

@section('content')
	<div class="brand">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Produk Recomended</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="brand-bg">
          <div class="row">
            <div class="col-md-3">
              <div class="card">
                <div class="card-header">
                  FILTER
                </div>
                <div class="card-body">
                  <form action="{{('filter')}}" method="post">
                    @csrf
                    <div class="form-group">
                      <label for="" class="control-label">Nama</label>
                      <input type="text" class="form-control" name="nama" value="{{$nama ?? ""}}">
                    </div>
                    <button class="btn btn-dark float-right"><i class="fa fa-search"></i> Filter</button>
                  </form>
                </div>
              </div>
            </div>
          @foreach($list_produk as $produk)
            <div class="col-md-3">
                <div class="brand_box">
          {{$loop->iteration}}
                <img src="{{url('public')}}/dist/client/images/6.png" class="card-img-top" alt="...">
                    <div class="card-body bg-dark text-white">
                      <h4 class="card-title text-white">{{$produk->nama}}</h4>
                      <i class="fas fa-star text-success"></i>
                      <i class="fas fa-star text-success"></i>
                      <i class="fas fa-star text-success"></i>
                      <i class="fas fa-star-half-alt text-success"></i>
                      <i class="far fa-star text-success"></i><br>
                      <a href="#" class="btn btn-primary" data-target="#produk1" data-toggle="modal">Detail</a>
                      <a href="#" class="btn btn-danger">Rp. {{$produk->harga}}</a>
                    </div>
                </div>
            </div>
          @endforeach
            <div class="col-md-12">
                <a class="read-more">See More</a>
            </div>
          </div>
        </div>
    </div>
@endsection