<?php
  $title="Peta Kecamatan Tegal Barat"; 
?> <!-- Judul Halaman -->

<div class="pages">
  <div data-page="tables" class="page no-toolbar no-navbar">
    <div class="page-content">
    
	<div class="navbarpages">
		<div class="navbar_left">
		<div class="logo_text"><a href="<?=url('beranda')?>" class="external"> <span>Web</span>GIS</a></div>
		</div>
						
	</div>
     
    <div id="pages_maincontent">
    <h2 class="page_title">Peta Kelurahan di Kecamatan Tegal Barat</h2> 

    <div id="mapid" style=" height: 81vh;"></div>
            <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js" 
                     integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="
                     crossorigin=""></script>

                      <script src="<?=assets()?>js/leaflet-panel-layers-master/src/leaflet-panel-layers.js"></script>
                      <script src="<?=assets()?>js/leaflet.ajax.js"></script>

            <script>
               

    var map = L.map('mapid').setView([-6.868825, 109.128311], 12);

    var layerkita=L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        maxZoom: 25,
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
          '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
          'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        id: 'mapbox.streets'
        });
    map.addLayer(layerkita);
    


    function iconByName(name) {
    return '<i class="icon" style="background-color:'+name+';border-radius:50%"></i>';
    }

    function featureToMarker(feature, latlng) {
    return L.marker(latlng, {
    icon: L.divIcon({
    className: 'marker-'+feature.properties.amenity,
    html: iconByName(feature.properties.amenity),
    iconUrl: '../images/markers/'+feature.properties.amenity+'.png',
    iconSize: [25, 41],
    iconAnchor: [12, 41],
    popupAnchor: [1, -34],
    shadowSize: [41, 41]
    })
    });
    }

    var baseLayers = [
    {
    name: "OpenStreetMap",
    layer: layerkita
    },
    {
    name: "OpenCycleMap",
    layer: L.tileLayer('http://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
    },
    {
    name: "Outdoors",
    layer: L.tileLayer('http://{s}.tile.thunderforest.com/outdoors/{z}/{x}/{y}.png')
    }
    ];


        function style(feature) {
          return {
            weight: 1,
            opacity: 1,
            color: 'white',
            dashArray: '3',
            fillOpacity: 0.7,
            fillColor: getColor(feature.properties.density)
          };
        }
      function highlightFeature(e) {
          var layer = e.target;

          layer.setStyle({
            weight: 3,
            color: '#666',
            dashArray: '',
            fillOpacity: 0.7
          });

          if (!L.Browser.ie && !L.Browser.opera && !L.Browser.edge) {
            layer.bringToFront();
          }

        }



        function resetHighlight(e) {
          var layer = e.target;

          layer.setStyle({
            weight: 2,
            opacity: 1,
            color: 'white',
            dashArray: '3',
            fillOpacity: 0.7
          });
        }

        function zoomToFeature(e) {
          map.fitBounds(e.target.getBounds());
        }

        function onEachFeature(feature, layer) {
          layer.on({
            mouseover: highlightFeature,
            mouseout: resetHighlight,
            click: zoomToFeature
          });
        }

        <?php 
        include "koneksi.php";
        $data = mysqli_query($connection,"SELECT * FROM tb_produksipadi_tb order by id_kelurahan");
        
        while ($d = mysqli_fetch_array($data)) {
          ?>
              var myStyle<?=$d['id_kelurahan']?>={
                  "color":"white",
                  "weight":2,
                  "dashArray": '3',
                  "fillOpacity": 0.7,
                  "fillColor": "<?=$d['warna']?>"
              }
              <?php
          $arraydes[]='{
            name: "'.str_replace('_', ' ', $d['nama_kelurahan']).'",
            icon: iconByName("'.$d['warna'].'"),
            layer:  new L.GeoJSON.AJAX(["assets/geojson/'.$d['nama_kelurahan'].'.geojson"] ,{onEachFeature:onEachFeature,style:myStyle'.$d['id_kelurahan'].',pointToLayer: featureToMarker }).addTo(map).bindPopup("<b>Kelurahan '.$d['nama_kelurahan'].' ha<br>Luas Panen : '.$d['luas_panen'].' ha<br>Produksi (ku/ha) : '.$d['rata_produksi_ha'].' ku/ha <br>Produksi (ton) : '.$d['rata_produksi_ton'].' ton <br>Luas Sawah (ha) : '.$d['lahan_sawah'].' ha <br>Lahan Bukan Sawah (ha) : '.$d['lahan_bukan_sawah'].' ha<br>Jumlah (ha) : '.$d['jumlah'].' ha<br> ")
          }';
        }
          # code...
        
          
      
        ?>
    var overLayers = [
    <?=implode(',', $arraydes);?>
    ];

    var panelLayers = new L.Control.PanelLayers(baseLayers, overLayers);

    map.addControl(panelLayers);
    </script>

                            
                     