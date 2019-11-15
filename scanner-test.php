<?php session_start();?>
<?php require('config/db.php');?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>ARe</title>
  <meta name="description" content="AR.js Business Card">
  <meta name="author" content="Utkarsh Gupta">
  <script src="https://aframe.io/releases/0.8.0/aframe.min.js"></script>
	<script src="https://cdn.rawgit.com/jeromeetienne/AR.js/1.6.0/aframe/build/aframe-ar.js"></script>

	<script>
	  AFRAME.registerComponent('navigate-on-click', {
	    schema: {
	      url: {default: ''}
	    },
	    init: function () {
	      var data = this.data;
	      var el = this.el;
	      el.addEventListener('click', function () {
		window.open(data.url, '_blank');
	      });
	    }
	  });        
	</script>
</head>
	
<body style='margin : 0px; overflow: hidden;'>
	<a-scene embedded arjs='trackingMethod: best;'>
		
		<a-assets>
			<img id="github_icon" src="https://cdn3.iconfinder.com/data/icons/social-media-2169/24/social_media_social_media_logo_github-512.png">
			<img id="insta_icon" src="https://cdn3.iconfinder.com/data/icons/social-media-2169/24/social_media_social_media_logo_instagram-512.png">
			<img id="linkedin_icon" src="https://cdn3.iconfinder.com/data/icons/social-media-2169/24/social_media_social_media_logo_likedin-512.png">
			<img id="facebook_icon" src="https://cdn3.iconfinder.com/data/icons/social-media-2169/24/social_media_social_media_logo_facebook-512.png">
		</a-assets>
		
		<!-- <a-plane rotation="-90 0 0" color="#3199f9" opacity="0.95" navigate-on-click="url: https://www.linkedin.com/in/utkarshgpta/">
			<a-image src="https://s.gravatar.com/avatar/78156753f9d8feaebe2418780bdc262b?s=250"></a-image>
			<a-text align="center" value="Hello, World!\nThis is a business card.\nMade by Utkarsh\nSociete Generale GSC\nFind below the links to various platforms.\P.S.Exhibits random behaviour when opening links." color="black" width="1" z-offset="0.1"></a-text>
		</a-plane> -->
		
		<?php 
            // $name = $GET['name'];
        ?>
        <a-text value="Hello, welcome to <?php echo $name.'\'s';?> profile!" color="black" width="3" z-offset="0.1" rotation="-90 0 0" position="-0.5 1.5 -1"></a-text>
		<!-- <a-plane rotation="-90 0 0" opacity="0.95" navigate-on-click="url: https://www.linkedin.com/in/mary-c-30316a9b/">
			<a-image src="images/linkedin.png"></a-image>
		</a-plane> -->
		
		<a-plane position="0 0 0.8" color="transparent" opacity="0" width="2" height="0.3" rotation="-90 0 0">
			<a-box src="#github_icon" position="-0.4 0 0" depth="0.15" height="0.15" width="0.15" navigate-on-click="url: http://github.com/UtkarshGpta">
				<a-animation attribute="rotation" dur="7000" to="0 360 0" easing="linear" repeat="indefinite"></a-animation>
			</a-box>
			<a-box src="#insta_icon" position="0 0 0" depth="0.15" height="0.15" width="0.15" navigate-on-click="url: http://instagram.com/utkarshgpta">
				<a-animation attribute="rotation" dur="7000" to="0 360 0" easing="linear" repeat="indefinite"></a-animation>
			</a-box>
			<a-box src="#linkedin_icon" position="0.4 0 0" depth="0.15" height="0.15" width="0.15" navigate-on-click="url: https://www.linkedin.com/in/utkarshgpta/">
				<a-animation attribute="rotation" dur="7000" to="0 360 0" easing="linear" repeat="indefinite"></a-animation>
			</a-box>
			<a-box src="#facebook_icon" position="0.8 0 0" depth="0.15" height="0.15" width="0.15" navigate-on-click="url: http://facebook.com/utkarshgpta">
				<a-animation attribute="rotation" dur="7000" to="0 360 0" easing="linear" repeat="indefinite"></a-animation>
			</a-box>
		</a-plane>
		
		<a-plane position="1.2 0 0" width="1" height="1" rotation="-90 0 0" opcatity="1">
			<a-image src="img/assets/nyancat.jpg"></a-image>
		</a-plane>
		
		<a-entity id="camera" cursor="rayOrigin: mouse"></a-entity>
		<a-marker-camera preset='hiro'></a-marker-camera>
	</a-scene>
</body>
</html>
