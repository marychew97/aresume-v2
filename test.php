<!doctype html>
<html>
  <head>
    
  </head>
  <body>
    <form method="post" action="video-upload-test.php" enctype='multipart/form-data'>
      <input type='file' name='file' />
      <input type='submit' value='Upload' name='upload'>
    </form>
    <br/>
    <form method="post" action="submit-test.php" id="form">
      <div id="addInput">
      Name: <input type="text" name="name[]" id="name"/>
      </div>
      <input type="button" value="Add" id="add"/>
      <input type="submit" value="Submit" />
    </form>

    <input type="button" value="sign in with linkedin" id="linkedin"/>
    <div id="profileData" style="display: none;">
    <p><a href="javascript:void(0);" onclick="logout()">Logout</a></p>
    <div id="picture"></div>
      <div class="info">
          <p id="name"></p>
          <p id="intro"></p>
          <p id="email"></p>
          <p id="location"></p>
          <p id="link"></p>
      </div>
    </div>

    <script type="in/Login"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script type="text/javascript" src="https://platform.linkedin.com/in.js">
      api_key: 811itp4m0jnfbe
      authorize: true
      onLoad: onLinkedInLoad
      scope: r_basicprofile r_emailaddress
    </script>
    <script>
    $('#add').on('click', function(){
      $('#addInput').append('<div>Name: <input type="text" id="name" name="name[]"/><input type="button" value="Delete" id="delete"/></div>');

    })

    $('#addInput').on('click', '#delete', function(e){
        e.preventDefault();
        $(this).parent().remove();
    })

    $('#form').submit(function(e){
      e.preventDefault();
      $('#addInput input[type=text]').each(function(){
        $(this).val();
        // var formData = $('#form').serialize();
        // alert(formData)
        
      })
      // alert($('#form').serialize());
      $.ajax({
          type: 'post',
          url: 'submit-test.php',
          data: $('#form').serialize(),
          success: function(data){
            alert(data);
          }
        })
    });

    $('#linkedin').on('click', function(){
      IN.Event.on(IN, "auth", getProfileData);
    })
    
    // Setup an event listener to make an API call once auth is complete
    function onLinkedInLoad() {
        IN.Event.on(IN, "auth", getProfileData);
    }
    
    // Use the API call wrapper to request the member's profile data
    function getProfileData() {
        IN.API.Profile("me").fields("id", "first-name", "last-name", "headline", "location", "picture-url", "public-profile-url", "email-address").result(displayProfileData).error(onError);
    }

    // Handle the successful return from the API call
    function displayProfileData(data){
        var user = data.values[0];
        document.getElementById("picture").innerHTML = '<img src="'+user.pictureUrl+'" />';
        document.getElementById("name").innerHTML = user.firstName+' '+user.lastName;
        document.getElementById("intro").innerHTML = user.headline;
        document.getElementById("email").innerHTML = user.emailAddress;
        document.getElementById("location").innerHTML = user.location.name;
        document.getElementById("link").innerHTML = '<a href="'+user.publicProfileUrl+'" target="_blank">Visit profile</a>';
        document.getElementById('profileData').style.display = 'block';
    }

    // Handle an error response from the API call
    function onError(error) {
        console.log(error);
    }
    
    // Destroy the session of linkedin
    function logout(){
        IN.User.logout(removeProfileData);
    }
    
    // Remove profile data from page
    function removeProfileData(){
        document.getElementById('profileData').remove();
    }
    
    </script>
  </body>
</html>