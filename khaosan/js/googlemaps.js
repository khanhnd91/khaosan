/* Google Maps API */


var map;

function initialize() {
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


//−−−−−−−−−−−マーカ1−−−−−−−−−−−−−
var contentString1 = 
        '<img src="img/sample/ureshinoashiyu-model.jpg" width="240px"/>' +
        '<div class="googlemap_text">日本三大美肌の湯を気軽に体験。嬉野の足湯どころ</div> '+
        '<div class="googlemap_linkbox"><a href="http://uma-style.com/matcha/">記事を見る</a></div>';   　//★インフォウィンドウ記述
var infowindow1 = new google.maps.InfoWindow({
        content: contentString1
    });
  var image1 = new google.maps.MarkerImage('img/common/googlemaps/pin.png',　//★マーカ種類
      new google.maps.LatLng(33.0993158,129.9827799);　//★マーカ位置
      new google.maps.Size(64, 64),
      new google.maps.Point(0,0),
      new google.maps.Point(0, 32));
  ;

var marker1 = new google.maps.Marker({　　//★マーカ追加
        position: LatLng1,
        map: map,
        title: "日本三大美肌の湯を気軽に体験。嬉野の足湯どころ",
        icon: image1,
    });
google.maps.event.addListener(marker1, 'click', function() {　　//★クリックアクション
        infowindow1.open(map, marker1);
    });

//−−−−−−−−−−−マーカ2−−−−−−−−−−−−−
var LatLng2 = new google.maps.LatLng(35.6619577,139.6980);
var contentString2 = 
        '<img src="img/sample/th__MG_0274.jpg" width="240px"/>' +
        '<div class="googlemap_text">東急ハンズで買える 高品質＆和の心を感じるメイド・イン・ジャパン プロダクト5選</div> '+
        '<div class="googlemap_linkbox"><a href="http://uma-style.com/matcha/">記事を見る</a></div>';   　//★インフォウィンドウ記述
var infowindow2 = new google.maps.InfoWindow({
        content: contentString2
    });
  var image2 = new google.maps.MarkerImage('img/common/googlemaps/shop.png',
      new google.maps.Size(64, 64),
      new google.maps.Point(0,0),
      new google.maps.Point(0, 32));
  ;
var marker2 = new google.maps.Marker({
        position: LatLng2,
        map: map,
        title: "東急ハンズで買える 高品質＆和の心を感じるメイド・イン・ジャパン プロダクト5選",
        icon: image2,
    });
google.maps.event.addListener(marker2, 'click', function() {
        infowindow2.open(map, marker2);
    });

//−−−−−−−−−−−マーカ3−−−−−−−−−−−−−
var LatLng3 = new google.maps.LatLng(35.7007104,139.7414694);
var contentString3 = 
        '<img src="img/sample/Taiyaki-image1.jpg" width="240px"/>' +
        '<div class="googlemap_text">魚の形をした甘いおやつ、日本の「たい焼き」を食べてみよう</div> '+
        '<div class="googlemap_linkbox"><a href="http://uma-style.com/matcha/">記事を見る</a></div>';   　//★インフォウィンドウ記述
var infowindow3 = new google.maps.InfoWindow({
        content: contentString3
    });
  var image3 = new google.maps.MarkerImage('img/common/googlemaps/food.png',
      new google.maps.Size(64, 64),
      new google.maps.Point(0,0),
      new google.maps.Point(0, 32));
  ;
var marker3 = new google.maps.Marker({
        position: LatLng3,
        map: map,
        title: "魚の形をした甘いおやつ、日本の「たい焼き」を食べてみよう",
        icon: image3,
    });
google.maps.event.addListener(marker3, 'click', function() {
        infowindow3.open(map, marker3);
    });

}

function toAll() {
  map.panTo(new google.maps.LatLng(38.2586,137.6850));
  map.setZoom(5);
}

function toHokkaido() {
  map.panTo(new google.maps.LatLng(43.063968,141.347899));
  map.setZoom(7);
}

function toAomori() {
  map.panTo(new google.maps.LatLng(40.824623,140.740593));
  map.setZoom(8);
}

function toIwate() {
  map.panTo(new google.maps.LatLng(39.703531,141.152667));
  map.setZoom(8);
}

function toMiyagi() {
  map.panTo(new google.maps.LatLng(38.268839,140.872103));
  map.setZoom(8);
}

function toAkita() {
  map.panTo(new google.maps.LatLng(39.718600,140.102334));
  map.setZoom(8);
}

function toTokyo() {
  map.panTo(new google.maps.LatLng(35.689521,139.691704));
  map.setZoom(10);
}

function toNagasaki() {
  map.panTo(new google.maps.LatLng(32.744839,129.873756));
  map.setZoom(9);
}

//地図描画を実行
google.maps.event.addDomListener(window, 'load', map_canvas);