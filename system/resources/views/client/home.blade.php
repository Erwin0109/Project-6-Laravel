@extends('client.template.base')

@section('content')
    <section class="slider_section">
    <div id="myCarousel" class="carousel slide banner-main" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="first-slide" src="{{url('public')}}/dist/client/images/banner.jpg" alt="First slide">
                <div class="container">
                    <div class="carousel-caption relative">
                        <span>Semua Merk HP </span>
                        <h1>Dapatkan Discount 25% Saat Promo</h1>
                        <p>Menjual Berbagai Macam Merk HP Bergaransi Resmi
                            <br>E-Comerce Terpercaya, Bermutu Dan Terjamin</p>
                        <a class="buynow" href="#">Beli Sekarang</a>
                        <ul class="social_icon">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="second-slide" src="{{url('public')}}/dist/client/images/banner.jpg" alt="Second slide">
                <div class="container">
                    <div class="carousel-caption relative">
                        <span>Semua Merk HP </span>
                        <h1>Dapatkan Discount 25% Saat Promo</h1>
                        <p>Menjual Berbagai Macam Merk HP Bergaransi Resmi
                            <br>E-Comerce Terpercaya, Bermutu Dan Terjamin</p>
                        <a class="buynow" href="#">Beli Sekarang</a>
                        <ul class="social_icon">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <i class='fa fa-angle-left'></i>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <i class='fa fa-angle-right'></i>
        </a>
    </div>
    </section>
    <!-- brand -->
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
            <div class="container">
                <div class="row">
                @foreach($list_produk as $produk)
                  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 ">
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
    </div>
    <!-- Modal -->
    <div class="modal fade" id="produk1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h3 class="modal-title text-white" id="exampleModalLabel">Detail Produk</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                    <div class="modal-body">
                        <div class="row">
                        <div class="col-md-6">
                            <img src="{{url('public')}}/dist/client/images/6.png">
                        </div>
                        <div class="col-md-6">
                            <table class="table table-borderless">
                              <tr>
                                <th>Nama Produk</th>
                                <td>{{$produk->nama}}</td>
                              </tr>
                              <tr>
                                <th>Rating Produk</th>
                                <td>
                                  <i class="fas fa-star text-success"></i>
                                  <i class="fas fa-star text-success"></i>
                                  <i class="fas fa-star text-success"></i>
                                  <i class="fas fa-star-half-alt text-success"></i>
                                  <i class="far fa-star text-success"></i>
                                </td>
                              </tr>
                              <tr>
                                <th>Stock Produk</th>
                                <td>{{$produk->stock}} pcs</td>
                              </tr>
                              <tr>
                                <th>Harga</th>
                                <td>Rp {{$produk->harga}}</td>
                              </tr>
                            </table>
                        </div>
                        </div>
                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Kembali</button>
                    <button type="button" class="btn btn-primary">Beli</button>
                </div>
            </div>
        </div>
    </div>
    <!-- modal akhir -->
    <!-- end brand -->
    <!-- contact -->
    <div class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Contact us</h2>
                </div>
                <form class="main_form">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                            <input class="form-control" placeholder="Your name" type="text" name="Your Name">
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                            <input class="form-control" placeholder="Email" type="text" name="Email">
                        </div>
                        <div class=" col-md-12">
                            <input class="form-control" placeholder="Phone" type="text" name="Phone">
                        </div>
                        <div class="col-md-12">
                            <textarea class="textarea" placeholder="Message"></textarea>
                        </div>
                        <div class=" col-md-12">
                            <button class="send">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <!-- end contact -->
@endsection