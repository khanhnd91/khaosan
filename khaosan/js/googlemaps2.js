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

/*アイコン設定*/
var latlng = new google.maps.LatLng(35.7149433,139.7901114);
var icon = new google.maps.MarkerImage('img/common/googlemaps/spot.png',/*画像url*/
new google.maps.Size(50,68),/*アイコンサイズ*/
new google.maps.Point(0,0)/*アイコン位置*/
);
var markerOptions = {
position: latlng,
map: map,
icon: icon,
title: 'KHAOSAN SAMURAI CAPSULE',/*タイトル*/
animation: google.maps.Animation.DROP/*アニメーション*/
};
var marker = new google.maps.Marker(markerOptions);

/*アイコン設定*/
var latlng = new google.maps.LatLng(35.7163377,139.7951915);
var icon = new google.maps.MarkerImage('img/common/googlemaps/spot.png',/*画像url*/
new google.maps.Size(50,68),/*アイコンサイズ*/
new google.maps.Point(0,0)/*アイコン位置*/
);
var markerOptions = {
position: latlng,
map: map,
icon: icon,
title: 'KHAOSAN ORIGAMI',/*タイトル*/
animation: google.maps.Animation.DROP/*アニメーション*/
};
var marker = new google.maps.Marker(markerOptions);

/*アイコン設定*/
var latlng = new google.maps.LatLng(35.7147405,139.7895725);
var icon = new google.maps.MarkerImage('img/common/googlemaps/spot.png',/*画像url*/
new google.maps.Size(50,68),/*アイコンサイズ*/
new google.maps.Point(0,0)/*アイコン位置*/
);
var markerOptions = {
position: latlng,
map: map,
icon: icon,
title: 'KHAOSAN WORLD',/*タイトル*/
animation: google.maps.Animation.DROP/*アニメーション*/
};
var marker = new google.maps.Marker(markerOptions);

/*アイコン設定*/
var latlng = new google.maps.LatLng(35.7147405,139.7895725);
var icon = new google.maps.MarkerImage('img/common/googlemaps/spot.png',/*画像url*/
new google.maps.Size(50,68),/*アイコンサイズ*/
new google.maps.Point(0,0)/*アイコン位置*/
);
var markerOptions = {
position: latlng,
map: map,
icon: icon,
title: 'KHAOSAN WORLD',/*タイトル*/
animation: google.maps.Animation.DROP/*アニメーション*/
};
var marker = new google.maps.Marker(markerOptions);

/*アイコン設定*/
var latlng = new google.maps.LatLng(35.7119241,139.789145);
var icon = new google.maps.MarkerImage('img/common/googlemaps/spot.png',/*画像url*/
new google.maps.Size(50,68),/*アイコンサイズ*/
new google.maps.Point(0,0)/*アイコン位置*/
);
var markerOptions = {
position: latlng,
map: map,
icon: icon,
title: 'KHAOSAN LABORATORY',/*タイトル*/
animation: google.maps.Animation.DROP/*アニメーション*/
};
var marker = new google.maps.Marker(markerOptions);

/*アイコン設定*/
var latlng = new google.maps.LatLng(35.7115131,139.793053);
var icon = new google.maps.MarkerImage('img/common/googlemaps/spot.png',/*画像url*/
new google.maps.Size(50,68),/*アイコンサイズ*/
new google.maps.Point(0,0)/*アイコン位置*/
);
var markerOptions = {
position: latlng,
map: map,
icon: icon,
title: 'KHAOSAN KABUKI',/*タイトル*/
animation: google.maps.Animation.DROP/*アニメーション*/
};
var marker = new google.maps.Marker(markerOptions);

/*アイコン設定*/
var latlng = new google.maps.LatLng(35.7092299,139.7949752);
var icon = new google.maps.MarkerImage('img/common/googlemaps/spot.png',/*画像url*/
new google.maps.Size(50,68),/*アイコンサイズ*/
new google.maps.Point(0,0)/*アイコン位置*/
);
var markerOptions = {
position: latlng,
map: map,
icon: icon,
title: 'KHAOSAN ORIGINAL',/*タイトル*/
animation: google.maps.Animation.DROP/*アニメーション*/
};
var marker = new google.maps.Marker(markerOptions);

/*アイコン設定*/
var latlng = new google.maps.LatLng(35.0069208,135.7642088);
var icon = new google.maps.MarkerImage('img/common/googlemaps/spot.png',/*画像url*/
new google.maps.Size(50,68),/*アイコンサイズ*/
new google.maps.Point(0,0)/*アイコン位置*/
);
var markerOptions = {
position: latlng,
map: map,
icon: icon,
title: 'KHAOSAN THEATER',/*タイトル*/
animation: google.maps.Animation.DROP/*アニメーション*/
};
var marker = new google.maps.Marker(markerOptions);

/*アイコン設定*/
var latlng = new google.maps.LatLng(35.002187,135.7644633);
var icon = new google.maps.MarkerImage('img/common/googlemaps/spot.png',/*画像url*/
new google.maps.Size(50,68),/*アイコンサイズ*/
new google.maps.Point(0,0)/*アイコン位置*/
);
var markerOptions = {
position: latlng,
map: map,
icon: icon,
title: 'KHAOSAN KYOTO',/*タイトル*/
animation: google.maps.Animation.DROP/*アニメーション*/
};
var marker = new google.maps.Marker(markerOptions);

/*アイコン設定*/
var latlng = new google.maps.LatLng(33.5951046,130.4204305);
var icon = new google.maps.MarkerImage('img/common/googlemaps/spot.png',/*画像url*/
new google.maps.Size(50,68),/*アイコンサイズ*/
new google.maps.Point(0,0)/*アイコン位置*/
);
var markerOptions = {
position: latlng,
map: map,
icon: icon,
title: 'KHAOSAN FUKUOKA ANNEX',/*タイトル*/
animation: google.maps.Animation.DROP/*アニメーション*/
};
var marker = new google.maps.Marker(markerOptions);

/*アイコン設定*/
var latlng = new google.maps.LatLng(33.5845174,130.4264393);
var icon = new google.maps.MarkerImage('img/common/googlemaps/spot.png',/*画像url*/
new google.maps.Size(50,68),/*アイコンサイズ*/
new google.maps.Point(0,0)/*アイコン位置*/
);
var markerOptions = {
position: latlng,
map: map,
icon: icon,
title: 'INTERNATIONAL HOSTEL KHAOSAN FUKUOKA',/*タイトル*/
animation: google.maps.Animation.DROP/*アニメーション*/
};
var marker = new google.maps.Marker(markerOptions);

/*アイコン設定*/
var latlng = new google.maps.LatLng(33.2823758,131.5013631);
var icon = new google.maps.MarkerImage('img/common/googlemaps/spot.png',/*画像url*/
new google.maps.Size(50,68),/*アイコンサイズ*/
new google.maps.Point(0,0)/*アイコン位置*/
);
var markerOptions = {
position: latlng,
map: map,
icon: icon,
title: 'KHAOSAN BEPPU',/*タイトル*/
animation: google.maps.Animation.DROP/*アニメーション*/
};
var marker = new google.maps.Marker(markerOptions);

/*アイコン設定*/
var latlng = new google.maps.LatLng(43.0553269,141.3442082);
var icon = new google.maps.MarkerImage('img/common/googlemaps/spot.png',/*画像url*/
new google.maps.Size(50,68),/*アイコンサイズ*/
new google.maps.Point(0,0)/*アイコン位置*/
);
var markerOptions = {
position: latlng,
map: map,
icon: icon,
title: 'INTERNATIONAL HOSTEL KHAOSAN SAPPORO',/*タイトル*/
animation: google.maps.Animation.DROP/*アニメーション*/
};
var marker = new google.maps.Marker(markerOptions);


/*取得スタイルの貼り付け*/
var styleOptions = [
{
"stylers": [
{ saturation: -70 }, { hue: "#0E244C" }, { gamma: 0.3 }
]
}
];

var styledMapOptions = { name: 'アライドアーキテクツ' }/*地図右上のタイトル*/
var sampleType = new google.maps.StyledMapType(styleOptions, styledMapOptions);
map.mapTypes.set('style', sampleType);
map.setMapTypeId('style');
};
google.maps.event.addDomListener(window, 'load', function() {
googleMap();
});