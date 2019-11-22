<!doctype HTML>
<html>
    <head>
        <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    </head>
    <script src="https://aframe.io/releases/0.9.0/aframe.min.js"></script>
    <script src="https://rawgit.com/jeromeetienne/AR.js/master/aframe/build/aframe-ar.min.js"></script>
    <script src="https://rawgit.com/donmccurdy/aframe-extras/master/dist/aframe-extras.loaders.min.js"></script>
    
    <!-- import events.js script -->
    <!-- <script src="https://rawgit.com/nicolocarpignoli/nicolocarpignoli.github.io/master/ar-click-events/events.js"></script> -->
    
    <body style='margin : 0px; overflow: hidden;'>
        <!-- we add detectionMode and matrixCodeType to tell AR.js to recognize barcode markers -->
        <a-scene embedded arjs='sourceType: webcam; debugUIEnabled: false; detectionMode: mono_and_matrix; matrixCodeType: 3x3;'>

        <a-assets>
            <a-asset-item id="animated-asset" src="https://raw.githubusercontent.com/nicolocarpignoli/nicolocarpignoli.github.io/master/ar-click-events/models/CesiumMan.gltf"></a-asset-item>
        </a-assets>

        <a-marker markerhandler emitevents="true" cursor="rayOrigin: mouse" id="animated-marker" preset="hiro">
            <a-entity
                id="animated-model"
                gltf-model="#animated-asset"
                scale="2">
            </a-entity>
        </a-marker>

        <!-- use this <a-entity camera> to support multiple-markers, otherwise use <a-marker-camera> instead of </a-marker> -->
        <a-entity camera></a-entity>
        </a-scene>

		<script>
		AFRAME.registerComponent('markerhandler', {

		init: function() {
			const animatedMarker = document.querySelector("#animated-marker");
			const aEntity = document.querySelector("#animated-model");

			// every click, we make our model grow in size :)
			animatedMarker.addEventListener('click', function(ev, target){
				// const intersectedElement = ev && ev.detail && ev.detail.intersectedEl;
				// if (aEntity && intersectedElement === aEntity) {
				// 	const scale = aEntity.getAttribute('scale');
				// 	Object.keys(scale).forEach((key) => scale[key] = scale[key] + 1);
				// 	aEntity.setAttribute('scale', scale);
				// }
				window.location="https://www.google.com";
			});
		}});
		</script>
    </body>
	
</html>