<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<link rel="apple-touch-icon" href="<?=templates()?>images/apple-touch-icon.png" />
<link href="<?=templates()?>images/apple-touch-startup-image-320x460.png" media="(device-width: 320px)" rel="apple-touch-startup-image">
<link href="<?=templates()?>images/apple-touch-startup-image-640x920.png" media="(device-width: 320px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">
<title><?=isset($title)?$title:'Tegal Composer'?></title>
<link rel="stylesheet" href="<?=templates()?>css/framework7.css">
<link rel="stylesheet" href="<?=templates()?>css/style.css">
<link type="text/css" rel="stylesheet" href="<?=templates()?>css/swipebox.css" />
<link type="text/css" rel="stylesheet" href="<?=templates()?>css/animations.css" />
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet"> 



<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
   integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
   crossorigin=""/>
    <link rel="stylesheet" href="<?=assets()?>js/leaflet-panel-layers-master/src/leaflet-panel-layers.css" />
   
   <style type="text/css"> #mapid {height: 100vh} 
        .icon {
          display: inline-block;
          margin: 2px;
          height: 16px;
          width: 16px;
          background-color:  $d['warna'];
        }
        .icon-bar {
          background: url('<?=assets()?>js/leaflet-panel-layers-master/examples/images/icons/bar.png') center center no-repeat;
        }
        .info { padding: 6px 8px; font: 14px/16px Arial, Helvetica, sans-serif; background: white; background: rgba(255,255,255,0.8); box-shadow: 0 0 15px rgba(0,0,0,0.2); border-radius: 5px; } .info h4 { margin: 0 0 5px; color: #777; }
        .legend { text-align: left; line-height: 18px; color: #555; } .legend i { width: 18px; height: 18px; float: left; margin-right: 8px; opacity: 0.7; }
   </style>


    
</head>

 

