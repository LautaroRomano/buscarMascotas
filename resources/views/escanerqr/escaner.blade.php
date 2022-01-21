@extends('layouts.app')

@section('title','Home')
    
@section('content')

    <!-- escanear QR -->
    <video id="preview" class="video-escaner w-full aspect-video"></video>
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

@endsection
