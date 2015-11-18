/* Google Maps API */

  

function googleMap() {
  var latlng = new google.maps.LatLng(38.774357,136.93793);
  var opts = {
    zoom: 5,
    center: latlng,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    scrollwheel: false
  };
  map = new google.maps.Map(document.getElementById("map_canvas"), opts);

function createMarker(name,latlng,map){
  var infoWindow = new google.maps.InfoWindow();
  var marker = new google.maps.Marker({position: latlng,map: map});
  google.maps.event.addListener(marker, 'click', function() {
      infoWindow.setContent(name);
      infoWindow.open(map,marker);  
      });
}

/*ƒAƒCƒRƒ“Ý’è*/
var latlng = new google.maps.LatLng(35.7149433,139.7901114);
var icon = new google.maps.MarkerImage('img/common/googlemaps/spot.png',/*‰æ‘œurl*/
new google.maps.Size(50,68),/*ƒAƒCƒRƒ“ƒTƒCƒY*/
new google.maps.Point(0,0)/*ƒAƒCƒRƒ“ˆÊ’u*/
);
var markerOptions = {
position: latlng,
map: map,
icon: icon,
title: 'KHAOSAN SAMURAI CAPSULE',/*ƒ^ƒCƒgƒ‹*/
animation: google.maps.Animation.DROP/*ƒAƒjƒ[ƒVƒ‡ƒ“*/
};
var marker = new google.maps.Marker(markerOptions);

/*ƒAƒCƒRƒ“Ý’è*/
var latlng = new google.maps.LatLng(35.7163377,139.7951915);
var icon = new google.maps.MarkerImage('img/common/googlemaps/spot.png',/*‰æ‘œurl*/
new google.maps.Size(50,68),/*ƒAƒCƒRƒ“ƒTƒCƒY*/
new google.maps.Point(0,0)/*ƒAƒCƒRƒ“ˆÊ’u*/
);
var markerOptions = {
position: latlng,
map: map,
icon: icon,
title: 'KHAOSAN ORIGAMI',/*ƒ^ƒCƒgƒ‹*/
animation: google.maps.Animation.DROP/*ƒAƒjƒ[ƒVƒ‡ƒ“*/
};
var marker = new google.maps.Marker(markerOptions);

/*ƒAƒCƒRƒ“Ý’è*/
var latlng = new google.maps.LatLng(35.7147405,139.7895725);
var icon = new google.maps.MarkerImage('img/common/googlemaps/spot.png',/*‰æ‘œurl*/
new google.maps.Size(50,68),/*ƒAƒCƒRƒ“ƒTƒCƒY*/
new google.maps.Point(0,0)/*ƒAƒCƒRƒ“ˆÊ’u*/
);
var markerOptions = {
position: latlng,
map: map,
icon: icon,
title: 'KHAOSAN WORLD',/*ƒ^ƒCƒgƒ‹*/
animation: google.maps.Animation.DROP/*ƒAƒjƒ[ƒVƒ‡ƒ“*/
};
var marker = new google.maps.Marker(markerOptions);

/*ƒAƒCƒRƒ“Ý’è*/
var latlng = new google.maps.LatLng(35.7147405,139.7895725);
var icon = new google.maps.MarkerImage('img/common/googlemaps/spot.png',/*‰æ‘œurl*/
new google.maps.Size(50,68),/*ƒAƒCƒRƒ“ƒTƒCƒY*/
new google.maps.Point(0,0)/*ƒAƒCƒRƒ“ˆÊ’u*/
);
var markerOptions = {
position: latlng,
map: map,
icon: icon,
title: 'KHAOSAN WORLD',/*ƒ^ƒCƒgƒ‹*/
animation: google.maps.Animation.DROP/*ƒAƒjƒ[ƒVƒ‡ƒ“*/
};
var marker = new google.maps.Marker(markerOptions);

/*ƒAƒCƒRƒ“Ý’è*/
var latlng = new google.maps.LatLng(35.7119241,139.789145);
var icon = new google.maps.MarkerImage('img/common/googlemaps/spot.png',/*‰æ‘œurl*/
new google.maps.Size(50,68),/*ƒAƒCƒRƒ“ƒTƒCƒY*/
new google.maps.Point(0,0)/*ƒAƒCƒRƒ“ˆÊ’u*/
);
var markerOptions = {
position: latlng,
map: map,
icon: icon,
title: 'KHAOSAN LABORATORY',/*ƒ^ƒCƒgƒ‹*/
animation: google.maps.Animation.DROP/*ƒAƒjƒ[ƒVƒ‡ƒ“*/
};
var marker = new google.maps.Marker(markerOptions);

/*ƒAƒCƒRƒ“Ý’è*/
var latlng = new google.maps.LatLng(35.7115131,139.793053);
var icon = new google.maps.MarkerImage('img/common/googlemaps/spot.png',/*‰æ‘œurl*/
new google.maps.Size(50,68),/*ƒAƒCƒRƒ“ƒTƒCƒY*/
new google.maps.Point(0,0)/*ƒAƒCƒRƒ“ˆÊ’u*/
);
var markerOptions = {
position: latlng,
map: map,
icon: icon,
title: 'KHAOSAN KABUKI',/*ƒ^ƒCƒgƒ‹*/
animation: google.maps.Animation.DROP/*ƒAƒjƒ[ƒVƒ‡ƒ“*/
};
var marker = new google.maps.Marker(markerOptions);

/*ƒAƒCƒRƒ“Ý’è*/
var latlng = new google.maps.LatLng(35.7092299,139.7949752);
var icon = new google.maps.MarkerImage('img/common/googlemaps/spot.png',/*‰æ‘œurl*/
new google.maps.Size(50,68),/*ƒAƒCƒRƒ“ƒTƒCƒY*/
new google.maps.Point(0,0)/*ƒAƒCƒRƒ“ˆÊ’u*/
);
var markerOptions = {
position: latlng,
map: map,
icon: icon,
title: 'KHAOSAN ORIGINAL',/*ƒ^ƒCƒgƒ‹*/
animation: google.maps.Animation.DROP/*ƒAƒjƒ[ƒVƒ‡ƒ“*/
};
var marker = new google.maps.Marker(markerOptions);

/*ƒAƒCƒRƒ“Ý’è*/
var latlng = new google.maps.LatLng(35.0069208,135.7642088);
var icon = new google.maps.MarkerImage('img/common/googlemaps/spot.png',/*‰æ‘œurl*/
new google.maps.Size(50,68),/*ƒAƒCƒRƒ“ƒTƒCƒY*/
new google.maps.Point(0,0)/*ƒAƒCƒRƒ“ˆÊ’u*/
);
var markerOptions = {
position: latlng,
map: map,
icon: icon,
title: 'KHAOSAN THEATER',/*ƒ^ƒCƒgƒ‹*/
animation: google.maps.Animation.DROP/*ƒAƒjƒ[ƒVƒ‡ƒ“*/
};
var marker = new google.maps.Marker(markerOptions);

/*ƒAƒCƒRƒ“Ý’è*/
var latlng = new google.maps.LatLng(35.002187,135.7644633);
var icon = new google.maps.MarkerImage('img/common/googlemaps/spot.png',/*‰æ‘œurl*/
new google.maps.Size(50,68),/*ƒAƒCƒRƒ“ƒTƒCƒY*/
new google.maps.Point(0,0)/*ƒAƒCƒRƒ“ˆÊ’u*/
);
var markerOptions = {
position: latlng,
map: map,
icon: icon,
title: 'KHAOSAN KYOTO',/*ƒ^ƒCƒgƒ‹*/
animation: google.maps.Animation.DROP/*ƒAƒjƒ[ƒVƒ‡ƒ“*/
};
var marker = new google.maps.Marker(markerOptions);

/*ƒAƒCƒRƒ“Ý’è*/
var latlng = new google.maps.LatLng(33.5951046,130.4204305);
var icon = new google.maps.MarkerImage('img/common/googlemaps/spot.png',/*‰æ‘œurl*/
new google.maps.Size(50,68),/*ƒAƒCƒRƒ“ƒTƒCƒY*/
new google.maps.Point(0,0)/*ƒAƒCƒRƒ“ˆÊ’u*/
);
var markerOptions = {
position: latlng,
map: map,
icon: icon,
title: 'KHAOSAN FUKUOKA ANNEX',/*ƒ^ƒCƒgƒ‹*/
animation: google.maps.Animation.DROP/*ƒAƒjƒ[ƒVƒ‡ƒ“*/
};
var marker = new google.maps.Marker(markerOptions);

/*ƒAƒCƒRƒ“Ý’è*/
var latlng = new google.maps.LatLng(33.5845174,130.4264393);
var icon = new google.maps.MarkerImage('img/common/googlemaps/spot.png',/*‰æ‘œurl*/
new google.maps.Size(50,68),/*ƒAƒCƒRƒ“ƒTƒCƒY*/
new google.maps.Point(0,0)/*ƒAƒCƒRƒ“ˆÊ’u*/
);
var markerOptions = {
position: latlng,
map: map,
icon: icon,
title: 'INTERNATIONAL HOSTEL KHAOSAN FUKUOKA',/*ƒ^ƒCƒgƒ‹*/
animation: google.maps.Animation.DROP/*ƒAƒjƒ[ƒVƒ‡ƒ“*/
};
var marker = new google.maps.Marker(markerOptions);

/*ƒAƒCƒRƒ“Ý’è*/
var latlng = new google.maps.LatLng(33.2823758,131.5013631);
var icon = new google.maps.MarkerImage('img/common/googlemaps/spot.png',/*‰æ‘œurl*/
new google.maps.Size(50,68),/*ƒAƒCƒRƒ“ƒTƒCƒY*/
new google.maps.Point(0,0)/*ƒAƒCƒRƒ“ˆÊ’u*/
);
var markerOptions = {
position: latlng,
map: map,
icon: icon,
title: 'KHAOSAN BEPPU',/*ƒ^ƒCƒgƒ‹*/
animation: google.maps.Animation.DROP/*ƒAƒjƒ[ƒVƒ‡ƒ“*/
};
var marker = new google.maps.Marker(markerOptions);

/*ƒAƒCƒRƒ“Ý’è*/
var latlng = new google.maps.LatLng(43.0553269,141.3442082);
var icon = new google.maps.MarkerImage('img/common/googlemaps/spot.png',/*‰æ‘œurl*/
new google.maps.Size(50,68),/*ƒAƒCƒRƒ“ƒTƒCƒY*/
new google.maps.Point(0,0)/*ƒAƒCƒRƒ“ˆÊ’u*/
);
var markerOptions = {
position: latlng,
map: map,
icon: icon,
title: 'INTERNATIONAL HOSTEL KHAOSAN SAPPORO',/*ƒ^ƒCƒgƒ‹*/
animation: google.maps.Animation.DROP/*ƒAƒjƒ[ƒVƒ‡ƒ“*/
};
var marker = new google.maps.Marker(markerOptions);


/*取得スタイルの貼り付け*/
var styleOptions = [
  {
    "featureType": "water","stylers": [
      { "color": "#aeaeae"  }
    ]
  },
  {
    "featureType": "landscape","stylers": [
      { "color": "#585858" }
    ]
  },
  {
    "featureType": "road","stylers": [
      { "color": "#585858" }
    ]
  }
];


var styledMapOptions = { name: 'ƒAƒ‰ƒCƒhƒA[ƒLƒeƒNƒc' }/*’n}‰Eã‚Ìƒ^ƒCƒgƒ‹*/
var sampleType = new google.maps.StyledMapType(styleOptions, styledMapOptions);
map.mapTypes.set('style', sampleType);
map.setMapTypeId('style');
};
google.maps.event.addDomListener(window, 'load', function() {
googleMap();
});
