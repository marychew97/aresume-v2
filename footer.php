<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js" integrity="sha384-NaWTHo/8YCBYJ59830LTz/P4aQZK1sS0SneOgAvhsIl3zBu8r9RevNg5lHCHAuQ/" crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/aad19734f2.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="../js/index.js"></script>

<script>
    $('#addDocbutton').click(function(){
        $('#addDocuments').append(
            '<div class="custom-file"><input type="file" class="custom-file-input" id="customFile"><label class="custom-file-label" for="customFile">Choose file</label></div>'
        )
    })

        $('#signup').on('submit', function (e) {
        e.preventDefault();
        var username = $('#username').val();
        var email = $('#email').val();
        var password = $('#password').val();
        var confirm = $('#confirm').val();
        
        var formData = $('#signup').serialize();
        console.log(formData)

        $('#signup-notification').hide();
        $.ajax({
            type: 'post',
            url: 'signup.php',
            data: formData,
            success: function (data) {
                console.log(data);
                $('#signup-notification').append('<p>'+data+'</p>').css("display", "block");
                window.location.href="/aresume/dashboard.php"
                $('#username').val('');
                $('#email').val('');
                $('#password').val('');
                $('#confirm').val('');
            }
        });
        });
</script>

</body>
</html>