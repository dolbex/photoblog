$(function() {

	var shootLocation = { lat: -34.397, lng: 150.644};
	var map = null;
	var streetview = null;

	function initializeMap() {
        var mapOptions = {
			center: shootLocation,
			zoom: 8
        };

		map = new google.maps.Map(document.getElementById('photo-map'), mapOptions);

		var marker = new google.maps.Marker({
			position: shootLocation,
			title:"Photo Location"
		});

		marker.setMap(map);

		initilizeStreetView();
    }

    function initilizeStreetView() {
		var streetViewOptions = {
			position: map.getCenter(),
			zoom: 1
		};

		streetview = new google.maps.StreetViewPanorama(
			document.getElementById('photo-streetview'),
			streetViewOptions
		);

		streetview.setVisible(false);

		$('#photo-streetview').hide();
    }

    function toggleStreetView() {

		if (streetview.getVisible() === false) {

			$('#photo-map').hide();
			$('#photo-streetview').show();

			$('#photo-map-controls > .map').removeClass('active');
			$('#photo-map-controls > .compass').addClass('active');

			streetview.setVisible(true);

		} else {

			$('#photo-map').show();
			$('#photo-streetview').hide();

			$('#photo-map-controls > .map').addClass('active');
			$('#photo-map-controls > .compass').removeClass('active');

			streetview.setVisible(false);

		}

    }

    function addToggleListener() {
		$('#photo-map-controls').click(function(){
			toggleStreetView();
		});
    }


    function init() {
		google.maps.event.addDomListener(window, 'load', initializeMap);

		addToggleListener();
    }

    init();

});