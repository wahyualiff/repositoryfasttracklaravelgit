@extends('tampilan')
@section('isi_halaman')
<br>
<br>
<body>
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{asset('storage/sl2.jpg')}}" class="d-block w-100" alt="First Slide">
      </div>
      <div class="carousel-item">
        <img src="{{asset('storage/slider1.jpg')}}" class="d-block w-100" alt="Second Slide">
      </div>
      <div class="carousel-item">
        <img src="{{asset('storage/sl3.jpg')}}" class="d-block w-100" alt="Third Slide">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <hr>
    <main>
      <h1><center>UCL Winners</center></h1>
      <div class="row">
          <div class="col-md-3">
              <div class="card">
                  <div class="card-img-top">
                      <img src="{{asset('storage/pc1.jpg')}}" alt="" style="height: 250px; object-fit:contain; width:100%" >
                  </div>
                  <div class="card-body">
                      Chelsea UCL 2021 Champions Graphic T-Shirt
                      <br>
                      Harga : £18.00
                      <br> <br>
                      <input type="button" value="Beli" class="btn btn-primary">
                  </div>
              </div>
          </div>

          <div class="col-md-3">
            <div class="card">
                <div class="card-img-top">
                    <img src="{{asset('storage/pc2.jpg')}}" alt="" style="height: 250px; object-fit:cover; width:100%" >
                </div>
                <div class="card-body">
                  Chelsea UCL 2021 Champions Graphic T-Shirt
                    <br>
                    Harga : £20.00
                    <br> <br>
                    <input type="button" value="Beli" class="btn btn-primary">
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <div class="card-img-top">
                    <img src="{{asset('storage/pc3.jpg')}}" alt="" style="height: 250px; object-fit:cover; width:100%" >
                </div>
                <div class="card-body">
                    Chelsea UCL 2021 Champions Hoodie
                    <br>
                    Harga : £50.00
                    <br><br>
                    <input type="button" value="Beli" class="btn btn-primary">
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <div class="card-img-top">
                    <img src="{{asset('storage/jkt1.jpg')}}" alt="" style="height: 250px; object-fit:cover; width:100%" >
                </div>
                <div class="card-body">
                    Chelsea UCL 2021 Champions Zip Thru Hoodie
                    <br>
                    Harga : £50.00
                    <br> <br>
                    <input type="button" value="Beli" class="btn btn-primary">
                </div>
            </div>
        </div>
      </div>
      <br> 
      <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-img-top">
                    <img src="{{asset('storage/pc1.jpg')}}" alt="" style="height: 250px; object-fit:contain; width:100%" >
                </div>
                <div class="card-body">
                    Chelsea UCL 2021 Champions Graphic T-Shirt
                    <br>
                    Harga : £18.00
                    <br> <br>
                    <input type="button" value="Beli" class="btn btn-primary">
                </div>
            </div>
        </div>

        <div class="col-md-3">
          <div class="card">
              <div class="card-img-top">
                  <img src="{{asset('storage/pc1.jpg')}}" alt="" style="height: 250px; object-fit:contain; width:100%" >
              </div>
              <div class="card-body">
                  Chelsea UCL 2021 Champions Graphic T-Shirt
                  <br>
                  Harga : £18.00
                  <br> <br>
                  <input type="button" value="Beli" class="btn btn-primary">
              </div>
          </div>
      </div>

      <div class="col-md-3">
        <div class="card">
            <div class="card-img-top">
                <img src="{{asset('storage/pc1.jpg')}}" alt="" style="height: 250px; object-fit:contain; width:100%" >
            </div>
            <div class="card-body">
                Chelsea UCL 2021 Champions Graphic T-Shirt
                <br>
                Harga : £18.00
                <br> <br>
                <input type="button" value="Beli" class="btn btn-primary">
            </div>
        </div>
    </div>

      <div class="col-md-3">
      <div class="card">
          <div class="card-img-top">
              <img src="{{asset('storage/pc1.jpg')}}" alt="" style="height: 250px; object-fit:contain; width:100%" >
          </div>
          <div class="card-body">
              Chelsea UCL 2021 Champions Graphic T-Shirt
              <br>
              Harga : £18.00
              <br> <br>
              <input type="button" value="Beli" class="btn btn-primary">
          </div>
      </div>
      </div>
      </div>
  </main>
</body>
@endsection