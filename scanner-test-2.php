<!DOCTYPE html>
<head>
<script src="https://aframe.io/releases/0.8.0/aframe.min.js"></script> 
<script src="//cdn.rawgit.com/donmccurdy/aframe-extras/v4.1.2/dist/aframe-extras.min.js"></script> 
<script src="https://jeromeetienne.github.io/AR.js/aframe/build/aframe-ar.js"></script>
</head>
<body style='margin : 0px; overflow: hidden;'>
    <a-scene embedded arjs='trackingMethod: best; debugUIEnabled:false; sourceType: webcam;'>
    <a-assets>
        <!-- id=“file name“ src=“file url" -->
        <a-asset-item id="NSLogo7" src="https://raw.githubusercontent.com/lajunex0/3dmodels/master/NSLogo7.gltf" crossOrigin="anonymous">
        </a-asset-item>
    </a-assets>
    <a-marker preset='hiro'>
        <a-box color="red"></a-box>
        
        </a-marker>

<a-marker preset='custom' type='pattern' url='images/pattern-armarker.patt' >
        <a-box color="red"></a-box>
        
        </a-marker>
        <a-entity camera></a-entity>
    </a-scene>
</body>
</html>
