<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Peso y Talla</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<body class="antialiased">
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">


        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

            <div p-4 class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <div class="p-4">
                    <b><h3 class="text-center text-title">Peso y Talla</h3></b>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">DNI</label>
                                <input name="dni" id="dni" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-8 d-flex align-items-end">
                            <button  class="btn btn-success consultar">
                                <i class="fa fa-search" aria-hidden="true"></i> Consultar                               
                            </button>
                            <button height="38" class="btn btn-primary nueva-prueba ms-1">
                                <i class="fa fa-plus" aria-hidden="true"></i> Nueva Prueba
                            </button>
                        </div>
                       
                        
                        
                    </div>

                    <div class="row col-md-12 pt-2">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Nombre</label>
                                <input readonly id="nombre_paciente" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Apellidos</label>
                                <input readonly id="apellido_paciente" type="text" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row col-md-12 pt-2">
                        <div class="col-md-6 row pe-0">
                            <div class="form-group col-md-6 pe-0">
                                <label for="">Peso</label>
                                <input readonly id="peso_paciente" type="text" class="form-control">
                            </div>
                            <div class="form-group col-md-6 pe-0">
                                <label for="">Talla</label>
                                <input readonly id="talla_paciente" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                        </div>
                    </div>

                    <div class="mt-3">
                        <div class="col-md-4 mx-auto">
                            <button class="btn btn-danger btn-xl w-100">
                            <i class="fa fa-paper-plane" aria-hidden="true"></i> Enviar
                            </button>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

</html>

<script src="{{asset('js/consulta.js')}}"></script>