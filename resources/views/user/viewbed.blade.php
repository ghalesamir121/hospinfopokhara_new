<div class="page-section">
  <div class="container">
    <h1 class="text-center mb-5 wow fadeInUp">Popular Hospital in Pokhara</h1>

    <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">

      @foreach ($viewbed as $add_beds)
      <div class="item">
        <div class="card-doctor">
           <div class="header">
            {{-- <img height="300 px" src="adminimage/{{ $admins->image }}" alt="">
             <div class="meta">
              <a href="#"><span class="mai-call"></span></a>
              <a href="#"><span class="mai-logo-whatsapp"></span></a>
            </div>  --}}
          </div>
          <div class="body">
            <p class="text-xl mb-0">Hospital:  {{ $add_beds->total_bed }}</p>
            <span class="text-sm text-grey">Total Bed: {{$add_beds->total_bed }}</span><br>
            <span class="text-sm text-grey">Available Bed: {{$add_beds->available_bed }}</span><br>
            <span class="text-sm text-grey">Total ICU: {{$add_beds->total_icu }}</span><br>
            <span class="text-sm text-grey">Available ICU: {{ $add_beds->available_icu }}</span><br>
          </div>
        </div>
      </div>

      @endforeach
    </div>
  </div>
</div>
