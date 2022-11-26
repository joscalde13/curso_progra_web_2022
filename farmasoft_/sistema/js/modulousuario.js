$('#btnusuario').on('click', function () {

    
    var nombre = $('#nombre').val();
    var usuario = $('#usuario').val();
    
    var email = $('#correo').val();


$.ajax({
        type: 'POST',
        data: "actualizar_usuario=1" + "&nombre=" + nombre  + "&usuario=" + usuario + "&email=" + email,
        url: '../Controler/Usuarios/UsuariosController.php',
        dataType: 'json',
        success: function (data) {
            var resultado = data.resultado;
            if (resultado === 1) {
                header("Location: lista_usuarios.php");
        
        
            }
        }
    });
    });

    function obtenerUsuario(id) {

        $.ajax({
            type: 'POST',
            data: "obtener_usuario=1&user_id=" + id,
            url: '../Controler/Usuarios/UsuariosController.php',
            dataType: 'json',
            success: function (data) {
                var nombres = data.nombres;
                var usuario = data.usuario;
                var email = data.email;
    
                $('#nombre').val(nombres);
                $('#usuario').val(usuario);
                $('#correo').val(email);
                }
        });
    }
    
