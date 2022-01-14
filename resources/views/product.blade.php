@include ('layouts.front_end.header')


<body>


@include ('layouts.front_end.head')
  
  
    <section id="portfolio" class="portfolio">
      <div class="container">
        <div class="section-title">
          <h2>สินค้าทั่วไป</h2>
            </div>
@foreach ($product as $item1)
    

        <div class="row portfolio-container">
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{ $item1->image }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>{{ $item1->name }}</h4>
                <p>{{ $item1->price }}</p>
                <div class="portfolio-links">
                  <a href="{{asset('front_end/assets/img/Product/sile1.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
                  <a href="Product-detil.php" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
      </div>
        

 


    </section>

    <div class="Herohr"><hr size="100px"></div>

    <section id="why-us" class="why-us">
      <hr>
      <div class="container">

      <div class="section-title">
          <h2>โปรโมทชั่น</h2><br>
      </div>
      
          
     
      <div class="row gy-4">

<div class="col-lg-12">
  <div class="portfolio-details-slider swiper-container">
    <div class="swiper-wrapper align-items-center">
      @foreach ($job as $item3)
      <div class="swiper-slide">
        <img src="{{ $item3->image }}" alt="">
      </div>
      @endforeach

    </div>
    
  </div>
</div>




    </div>
      </div>
    </section>



    <!-- ======= Portfolio Section ======= -->
    
    <!-- ======= Contact Section ======= -->
    
    @include ('layouts.front_end.footer')
</body>



</html>