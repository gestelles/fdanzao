<!-- Maps Container -->
<div id="map_canvas" style="height:100%;width:100%;"></div>
<script type="text/javascript">
	$(function() {
			// Also works with: var yourStartLatLng = '59.3426606750, 18.0736160278';
			var yourStartLatLng = new google.maps.LatLng(59.3426606750, 18.0736160278);
			$('#map_canvas').gmap({'center': yourStartLatLng});
	});
</script>