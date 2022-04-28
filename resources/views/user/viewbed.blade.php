<div class="page-section">
  <div class="container">
    <h1 class="text-center mb-5 wow fadeInUp">Popular Hospital in Pokhara</h1>

    <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">

      @foreach ($viewbed as $add_beds)
      <div class="item">
        <div class="card-doctor">
           <div class="header">
            {{-- <img height="300 px" src="adminimage/{{ $admins->image }}" alt=""> --}}
            <img height="300 px" src="hospitalphoto/{{ $add_beds->image }}" alt="">
             <div class="meta">
            </div>
          </div>
          <div class="body">
<<<<<<< HEAD
            <strong><p class="text-xl mb-0" style="color:#000000">{{$add_beds->hospital }}</strong></p>
            <strong><span class="text-sm text-black" style="color:#000000">Total Bed: {{$add_beds->total_bed }}</span></strong><br>
            <strong> <span class="text-sm text-green" style="color:green">Available Bed: {{$add_beds->available_bed }}</span></strong><br>
            <strong><span class="text-sm text-black" style="color:#000000">Total ICU: {{$add_beds->total_icu }}</span></strong><br>
            <strong><span class="text-sm text-green" style="color:green">Available ICU: {{ $add_beds->available_icu }}</span></strong><br>
=======
            <p class="text-xl mb-0" style="color:#000000"><strong>{{$add_beds->hospital }}</strong></p>
            <span class="text-sm text-green" style="color:#000000">Total Bed: {{$add_beds->total_bed }}</span><br>
            <span class="text-sm text-grey" style="color:#006400">Available Bed: {{$add_beds->available_bed }}</span><br>
            <span class="text-sm text-grey" style="color:#000000">Total ICU: {{$add_beds->total_icu }}</span><br>
            <span class="text-sm text-grey" style="color:#7FFF00">Available ICU: {{ $add_beds->available_icu }}</span><br>
>>>>>>> c9e4797dbade5d91368123ed185b0f21a0af657f
          </div>
        </div>
      </div>

      @endforeach
    </div>
  </div>
</div>
