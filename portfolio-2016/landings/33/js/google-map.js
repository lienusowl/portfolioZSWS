function initialize() {
	var myLatlng = new google.maps.LatLng(43.253047415898415, 76.93860120727078);

	var mapCanvas = document.getElementById('map_canvas');
    var mapOptions = {
      center: new google.maps.LatLng(43.253047415898415, 76.93860120727078),
      zoom: 17,
      scrollwheel: false,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    var map = new google.maps.Map(mapCanvas, mapOptions);

   	var markerImage = new google.maps.MarkerImage(
		'images/mao-icon.png',
		new google.maps.Size(38,70),
		new google.maps.Point(0,0)
	);
	var marker = new google.maps.Marker({
		icon: markerImage,
		position: myLatlng, 
		map: map,
		animation: google.maps.Animation.DROP,
	});
}
google.maps.event.addDomListener(window, 'load', initialize);
