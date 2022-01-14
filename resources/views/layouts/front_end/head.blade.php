<section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">
@foreach ($promotion as $item)
    

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url({{ $item->image }})">
          <div class="carousel-container">
            <div class="container">

              <h2 class="animate__animated animate__fadeInDown">{{ $item->name }} <span></span></h2>
              <p class="animate__animated animate__fadeInUp">{{ $item->content }}</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>
        @endforeach

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->
  <div class="Herohr"><hr size="100px"></div>
  