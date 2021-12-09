<!doctype html>
<html>
    <head>
        <title>Google Map - Harviacode.com</title>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    </head>
    <body>
        <div id="map" style="width: 260px; height: 260px;"></div> 
 
        <script type="text/javascript">
              
//              menentukan koordinat titik tengah peta
              var myLatlng = new google.maps.LatLng(-7.557109,111.659035);
 
//              pengaturan zoom dan titik tengah peta
              var myOptions = {
                  zoom: 15,
                  center: myLatlng
              };
              
//              menampilkan output pada element
              var map = new google.maps.Map(document.getElementById("map"), myOptions);
              
//              menambahkan marker
              var marker = new google.maps.Marker({
                   position: myLatlng,
                   map: map,
                   title:"SMKN 1 Mejayan"
              });
        </script> 
    </body>
</html>