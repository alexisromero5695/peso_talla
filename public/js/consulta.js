$(function() {
        $("input[name='dni']").on('input', function(e) {
            $(this).val($(this).val().replace(/[^0-9]/g, ''));
        });
    });

    function onlynum() {
        var fm = document.getElementById("form2");
        var ip = document.getElementById("num");
        var tag = document.getElementById("value");
        var res = ip.value;

        if (res != '') {
            if (isNaN(res)) {

                // Set input value empty
                ip.value = "";

                // Reset the form
                fm.reset();
                return false;
            } else {
                return true
            }
        }
    }

    const Toast = Swal.mixin({
        toast: true,
        position: 'top',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })

    function toastError(mensaje) {
        Toast.fire({
            icon: 'error',
            title: mensaje
        })
    };
    $(document).on('click', '.consultar', function() {
        let dni = $("#dni").val();
        if (dni != "") {
            $.ajax({
                url: "{{url('consulta-dni')}}",
                type: 'get',
                async: false,
                data: {
                    'dni': dni,
                },
                success: function(dato) {
                    $("#nombre_paciente").val(dato.nombre_paciente);
                    $("#apellido_paciente").val(`${dato.apellido_paterno} ${dato.apellido_materno}`);
                    $("#peso_paciente").val(dato.peso_paciente);
                    $("#talla_paciente").val(dato.talla_paciente);
                },
                error: function(error) {
                    let mensaje = error.responseJSON.message;
                    toastError(mensaje);
                }
            })
        } else {
            let mensaje = "Ingrese un número de DNI";
            toastError(mensaje);
        }

    })
    $(document).on('click', '.nueva-prueba', function() {
        $("#nombre_paciente").val('');
        $("#apellido_paciente").val(``);
        $("#peso_paciente").val('');
        $("#talla_paciente").val('');
    });