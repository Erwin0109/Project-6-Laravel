@extends('admin.template.base')

@section('content')
	<!-- content 2  awal -->
        <h4 class="font-weight-bold p-3">PRODUK TERBARU RECOMENDED</h4>

        <div class="row mx-auto pb-3">
          <div class="card ml-3 mr-3" style="width: 16rem;">
            <img src="{{url('public')}}/images/feature1.png" class="card-img-top" alt="...">
            <div class="card-body bg-dark text-white">
              <h5 class="card-title">Headphone</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, itaque?</p>
              <i class="fas fa-star text-success"></i>
              <i class="fas fa-star text-success"></i>
              <i class="fas fa-star text-success"></i>
              <i class="fas fa-star-half-alt text-success"></i>
              <i class="far fa-star text-success"></i><br>
              <a href="#" class="btn btn-primary" data-target="#produk1" data-toggle="modal">Detail</a>
              <a href="#" class="btn btn-danger">Rp 250.000</a>
            </div>
          </div>

          <div class="card mr-2" style="width: 16rem;">
            <img src="{{url('public')}}/images/feature2.png" class="card-img-top" alt="...">
            <div class="card-body bg-dark text-white">
              <h5 class="card-title">Powerbank</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, itaque?</p>
              <i class="fas fa-star text-success"></i>
              <i class="fas fa-star text-success"></i>
              <i class="fas fa-star text-success"></i>
              <i class="fas fa-star-half-alt text-success"></i>
              <i class="far fa-star text-success"></i><br>
              <a href="#" class="btn btn-primary">Detail</a>
              <a href="#" class="btn btn-danger">Rp 150.000</a>
            </div>
          </div>

          <div class="card mr-2" style="width: 16rem;">
            <img src="{{url('public')}}/images/feature4.png" class="card-img-top" alt="...">
            <div class="card-body bg-dark text-white">
              <h5 class="card-title">Jam Tangan</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, itaque?</p>
              <i class="fas fa-star text-success"></i>
              <i class="fas fa-star text-success"></i>
              <i class="fas fa-star text-success"></i>
              <i class="fas fa-star-half-alt text-success"></i>
              <i class="far fa-star text-success"></i><br>
              <a href="#" class="btn btn-primary">Detail</a>
              <a href="#" class="btn btn-danger">Rp 100.000</a>
            </div>
          </div>

          <div class="card mr-2" style="width: 16rem;">
            <img src="{{url('public')}}/images/feature3.png" class="card-img-top" alt="...">
            <div class="card-body bg-dark text-white">
              <h5 class="card-title">TWS Bloetooth</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, itaque?</p>
              <i class="fas fa-star text-success"></i>
              <i class="fas fa-star text-success"></i>
              <i class="fas fa-star text-success"></i>
              <i class="fas fa-star-half-alt text-success"></i>
              <i class="far fa-star text-success"></i><br>
              <a href="#" class="btn btn-primary">Detail</a>
              <a href="#" class="btn btn-danger">Rp 120.000</a>
            </div>
          </div>
        </div>
        <div class="row mx-auto">
          <div class="card ml-3 mr-3" style="width: 16rem;">
            <img src="{{url('public')}}/images/new1.png" class="card-img-top" alt="...">
            <div class="card-body bg-dark text-white">
              <h5 class="card-title">Bag Pack Pria</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, itaque?</p>
              <i class="fas fa-star text-success"></i>
              <i class="fas fa-star text-success"></i>
              <i class="fas fa-star text-success"></i>
              <i class="fas fa-star-half-alt text-success"></i>
              <i class="far fa-star text-success"></i><br>
              <a href="#" class="btn btn-primary">Detail</a>
              <a href="#" class="btn btn-danger">Rp 180.000</a>
            </div>
          </div>

          <div class="card mr-2" style="width: 16rem;">
            <img src="{{url('public')}}/images/new2.png" class="card-img-top" alt="...">
            <div class="card-body bg-dark text-white">
              <h5 class="card-title">Tas Wanita</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, itaque?</p>
              <i class="fas fa-star text-success"></i>
              <i class="fas fa-star text-success"></i>
              <i class="fas fa-star text-success"></i>
              <i class="fas fa-star-half-alt text-success"></i>
              <i class="far fa-star text-success"></i><br>
              <a href="#" class="btn btn-primary">Detail</a>
              <a href="#" class="btn btn-danger">Rp 320.000</a>
            </div>
          </div>

          <div class="card mr-2" style="width: 16rem;">
            <img src="{{url('public')}}/images/new3.png" class="card-img-top" alt="...">
            <div class="card-body bg-dark text-white">
              <h5 class="card-title">Kacamata</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, itaque?</p>
              <i class="fas fa-star text-success"></i>
              <i class="fas fa-star text-success"></i>
              <i class="fas fa-star text-success"></i>
              <i class="fas fa-star-half-alt text-success"></i>
              <i class="far fa-star text-success"></i><br>
              <a href="#" class="btn btn-primary">Detail</a>
              <a href="#" class="btn btn-danger">Rp 80.000</a>
            </div>
          </div>

          <div class="card mr-2" style="width: 16rem;">
            <img src="{{url('public')}}/images/new5.png" class="card-img-top" alt="...">
            <div class="card-body bg-dark text-white">
              <h5 class="card-title">Dompet</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, itaque?</p>
              <i class="fas fa-star text-success"></i>
              <i class="fas fa-star text-success"></i>
              <i class="fas fa-star text-success"></i>
              <i class="fas fa-star-half-alt text-success"></i>
              <i class="far fa-star text-success"></i><br>
              <a href="#" class="btn btn-primary">Detail</a>
              <a href="#" class="btn btn-danger">Rp 160.000</a>
            </div>
          </div>
        </div>
        <!-- content 2 akhir -->
@endsection