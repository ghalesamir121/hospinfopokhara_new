<div class="page-section">
    <div class="container">
      <h1 class="text-center mb-5 wow fadeInUp" align="center" style="font-size:4vw;color:#000000">Popular Doctors in Nepal</h1>

      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
        <br>
        <br>
<<<<<<< HEAD
=======



>>>>>>> c9e4797dbade5d91368123ed185b0f21a0af657f
        @foreach ($doctor as $doctors )

        <div class="item" align="center">
          <div class="card-doctor">
            <div class="header">
              <img height="300 px" style="clip-path: circle();" src="doctorimage/{{ $doctors->image }}" alt="">
            </div>
            <br>
<<<<<<< HEAD
            <div class="body" align="center" style="margin-top: 10px">
              <strong><span class="text-sm text-black" style="font-size:2.5vw;color: black";>Name: Dr  {{ $doctors->name }}</span></strong><br>
              <span class="text-sm text-black" style="font-size:2vw; color: black"; >Phone: {{ $doctors->phone }}</span><br>
              <span class="text-sm text-black" style="font-size:2vw;color: black";>Speciality: {{$doctors->speciality }}</span><br>
              <span class="text-sm text-black" style="font-size:2vw;color: black";>Work: {{ $doctors->work }}</span>
=======
            <div class="body" align="center">
              <span class="text-sm text-grey" style="font-size:2.5vw;color: lightgreen";>Name: Dr  {{ $doctors->name }}</span><br>
              <span class="text-sm text-grey" style="font-size:2vw">Phone: {{ $doctors->phone }}</span><br>
              <span class="text-sm text-grey" style="font-size:2vw">Speciality: {{$doctors->speciality }}</span><br>
              <span class="text-sm text-grey" style="font-size:2vw">Work: {{ $doctors->work }}</span>
>>>>>>> c9e4797dbade5d91368123ed185b0f21a0af657f
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

<<<<<<< HEAD

=======
  <script src="../public/assets/css/css1.css"></script>
>>>>>>> c9e4797dbade5d91368123ed185b0f21a0af657f




