@extends('layouts.app')

@section('title','Home')
    
@section('content')

    <!-- escanear QR -->
    <video id="preview" class="video-escaner"></video>
    <script type="text/javascript">
      let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
      scanner.addListener('scan', function (content) {
        window.location.href=content;
    });
      Instascan.Camera.getCameras().then(function (cameras) {
        if (cameras.length > 0) {
          scanner.start(cameras[0]);
        } else {
          alert('No cameras found.');
        }
      }).catch(function (e) {
        console.error(e);
      });
    </script>
    <!-- end escanear QR -->

    <section class="box">
        <img src="/img/pet.jpg" width="180" alt="" class="box-img">
        <h1>Roger Natividad</h1>
        <h2>Software Engineer - Web Developer</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad ut hic consequuntur quo qui culpa veritatis, blanditiis corrupti perspiciatis illo a laudantium illum sunt deleniti, nihil doloremque! Obcaecati, at, cupiditate.</p>
        <ul>
                <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
        </ul>

</section>

@endsection
