
var map = null;
var infowindow = new google.maps.InfoWindow();
var gmarkers = new google.maps.MarkerImage('img/common/googlemaps/spot.png');/*画像url*/
var i = 0;
var flg = 0;

function inicializar(home_url,cities,hotels) {
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
  for(z=0;z<cities.length;z++){
      if(hotels[z] !== null){
            for(k=0;k<hotels[z].length;k++){
                var point = new google.maps.LatLng(hotels[z][k]['latitude'],hotels[z][k]['longitude']);
                var marker = create_maker(point, hotels[z][k]['post_title'], hotels[z][k]['post_title']+"<br><a href='"+home_url+"/?post_type=hotel&p="+hotels[z][k]['ID']+"'><img src='"+hotels[z][k]['eye_catch']+"' width='180'></a>");
            }
          }
      }
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