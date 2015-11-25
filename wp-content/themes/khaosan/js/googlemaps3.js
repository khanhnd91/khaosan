
var map = null;
var infowindow = new google.maps.InfoWindow();
var gmarkers = new google.maps.MarkerImage('img/common/googlemaps/spot.png');/*画像url*/
var i = 0;
var flg = 0;

function inicializar(uri) {
 if(flg){
      // 初期設定
    var option = {
      // ズームレベル
      zoom: 5,
      // 中心座標
      center: new google.maps.LatLng(40.355322,138.4679578),
      // タイプ (ROADMAP・SATELLITE・TERRAIN・HYBRIDから選択)
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
  }else{
      // 初期設定
    var option = {
      // ズームレベル
      zoom: 5,
      // 中心座標
      center: new google.maps.LatLng(40.355322,138.4679578),
      // タイプ (ROADMAP・SATELLITE・TERRAIN・HYBRIDから選択)
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
  }


  map = new google.maps.Map(document.getElementById("map_canvas"), option);
  google.maps.event.addListener(map, "click", function() {infowindow.close();});
  
  // ポイントの追加
  var point = new google.maps.LatLng(35.7149433,139.7901114);
  var marker = create_maker(point, "KHAOSAN SAMURAI CAPSULE", "KHAOSAN SAMURAI CAPSULE<br><a href='#' target='_blank'><img src='"+uri+"/img/hostels/samurai.jpg' width='180'></a>");

  var point = new google.maps.LatLng(35.7163377,139.7951915); //拡大する
  var marker = create_maker(point, "KHAOSAN ORIGAMI", "KHAOSAN ORIGAMI<br><a href='#' target='_blank'><img src='"+uri+"/img/hostels/origami.jpg' width='180'></a>");

  var point = new google.maps.LatLng(35.7147405,139.7895725); //拡大する
  var marker = create_maker(point, "KHAOSAN WORLD", "KHAOSAN WORLD<br><a href='#' target='_blank'><img src='"+uri+"/img/hostels/world.jpg' width='180'></a>");

  var point = new google.maps.LatLng(35.7119241,139.789145); //拡大する
  var marker = create_maker(point, "KHAOSAN LABORATORY", "KHAOSAN LABORATORY<br><a href='#' target='_blank'><img src='"+uri+"/img/hostels/labo.jpg' width='180'></a>");

  var point = new google.maps.LatLng(35.7115131,139.793053); //拡大する
  var marker = create_maker(point, "KHAOSAN KABUKI", "KHAOSAN KABUKI<br><a href='#' target='_blank'><img src='"+uri+"/img/hostels/kabuki.jpg' width='180'></a>");

  var point = new google.maps.LatLng(35.7092299,139.7949752); //拡大する
  var marker = create_maker(point, "KHAOSAN ORIGINAL", "KHAOSAN ORIGINAL<br><a href='#' target='_blank'><img src='"+uri+"/img/hostels/original.jpg' width='180'></a>");

  var point = new google.maps.LatLng(35.0069208,135.7642088); //拡大する
  var marker = create_maker(point, "KHAOSAN THEATER", "KHAOSAN THEATER<br><a href='#' target='_blank'><img src='"+uri+"/img/hostels/kyoto_shiater.jpg' width='180'></a>");

  var point = new google.maps.LatLng(35.002187,135.7644633); //拡大する
  var marker = create_maker(point, "KHAOSAN KYOTO", "KHAOSAN KYOTO<br><a href='#' target='_blank'><img src='"+uri+"/img/hostels/kyoto.jpg' width='180'></a>");

  var point = new google.maps.LatLng(43.0553269,141.3442082); //拡大する
  var marker = create_maker(point, "INTERNATIONAL HOSTEL KHAOSAN SAPPORO", "INTERNATIONAL HOSTEL KHAOSAN SAPPORO<br><a href='#' target='_blank'><img src='"+uri+"/img/hostels/sapporo.jpg' width='180'></a>");
}

function create_maker(latlng, label, html) {
  // マーカーを生成
  var marker = new google.maps.Marker({position: latlng, map: map, title: label});
  // マーカーをクリックした時の処理
  google.maps.event.addListener(marker, "click", function() {
    infowindow.setContent(html);
    infowindow.open(map, marker);
  });
  gmarkers[i] = marker;
  i++;
  return marker;
}

function map_click(i) {
  google.maps.event.trigger(gmarkers[i], "click");
  flg = 1;
}