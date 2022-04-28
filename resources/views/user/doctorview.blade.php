<div class="page-section">
    <div class="container">
      <h1 class="text-center mb-5 wow fadeInUp" align="center" style="font-size:4vw;color:#000000">Popular Doctors in Nepal</h1>

      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
        <br>
        <br>
        @foreach ($doctor as $doctors )

        <div class="item" align="center">
          <div class="card-doctor">
            <div class="header">
              <img height="300 px" style="clip-path: circle();" src="doctorimage/{{ $doctors->image }}" alt="">
            </div>
            <br>
            <div class="body" align="center" style="margin-top: 10px">
              <strong><span class="text-sm text-black" style="font-size:2.5vw;color: black";>Name: Dr  {{ $doctors->name }}</span></strong><br>
              <span class="text-sm text-black" style="font-size:2vw; color: black"; >Phone: {{ $doctors->phone }}</span><br>
              <span class="text-sm text-black" style="font-size:2vw;color: black";>Speciality: {{$doctors->speciality }}</span><br>
              <span class="text-sm text-black" style="font-size:2vw;color: black";>Work: {{ $doctors->work }}</span>
            </div>
          </div>
        </div>
        <br>
        <br>
        <br>
        <br>

        @endforeach
    </div>
      </div>
    </div>
  </div>






