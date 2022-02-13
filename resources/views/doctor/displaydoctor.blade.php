<div class="page-section">
    <div class="container">
      <h1 class="text-center mb-5 wow fadeInUp">Popular Doctors</h1>

      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">

        @foreach ($doctor as $doctors )
          
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img height="300 px" src="doctorimage/{{ $doctors->image }}" alt="">
              {{-- <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div> --}}
            </div>
            <div class="body">
              <p class="text-xl mb-0">Name:  {{ $doctors->name }}</p>
              <span class="text-sm text-grey">Phone: {{ $doctors->phone }}</span><br>
              <span class="text-sm text-grey">Speciality: {{$doctors->speciality }}</span><br>
              <span class="text-sm text-grey">Working: {{ $doctors->work }}</span><br>
            </div>
          </div>
        </div>

        @endforeach
      </div>
    </div>
  </div>
