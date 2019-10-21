<?php require("components/header.php"); ?>

  <body style='margin : 0px; overflow: hidden;'>
    <a-scene embedded arjs>
      <a-marker preset="hiro">
          <a-box position='0 0.5 0' material='color: yellow;'></a-box>
      </a-marker>
      <a-entity camera></a-entity>
    </a-scene>

<?php require("components/footer.php"); ?>