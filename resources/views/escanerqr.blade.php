<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <tittle>Laravel 8 | QR Code Scanner</tittle>
      <link rel="stylesheet" href="https://cdnj.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
  </head>
  <body>
      <video id="preview"></video>
      <script type="text/javascript">
        let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
        scanner.addListener('scan', function(content){
            console.log(content);
            alert(content);
        });
      Instascan.Camera.getCameras().then(function(cameras){
          if(cameras.length > 0){ scanner.start(cameras[0]); }
          else{ console.error('No funcionan las camaras');  }
        }).catch(function(e){
          console.error(e);
      });
      </script>

      <a href="{{route('Inicio')}}" class="btn btn-secondary">Regresar</a>
  </body>
</html>
