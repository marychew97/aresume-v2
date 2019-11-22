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

    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
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
    
    </script>
  </body>
</html>