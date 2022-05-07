<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h1 class="display-4">Modelo de calculadora</h1>
                <h3 class="display-8">A continuación digite los números a operar y la operación a llevar a cabo:</h3>
                <form class="row g-3">
                    <div class="col-auto">
                        <label for="inputPassword2" class="visually-hidden">Primer número</label>
                        <input name="valor1" type="number" class="form-control" id="inputPassword2"
                            placeholder="Primer número">
                    </div>
                    <div class="operacion">
                        <select name="operacion" class="form-select">
                            <option selected>Seleccione</option>
                            <option value="1">+</option>
                            <option value="2">-</option>
                            <option value="3">*</option>
                            <option value="4">/</option>
                        </select>
                    </div>
                    <div class="col-auto">
                        <label for="inputPassword2" class="visually-hidden">Segundo número</label>
                        <input name="valor2" type="number" class="form-control" id="inputPassword2"
                            placeholder="Segundo número">
                    </div>
                    <br><br><br>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-outline-primary" type="submit">Calcular</button>
                    </div>

                </form><br><br><br>

            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="resultado">
                    <div class="shadow-lg p-3 mb-5 bg-body rounded">

                        <?php
                    @$valor1=$_GET['valor1'];
                    @$valor2=$_GET['valor2'];
                    @$operacion=$_GET['operacion'];
                    if ($operacion==1){
                        print($valor1+$valor2);
                    }elseif($operacion==2){
                        print($valor1-$valor2);
                    }elseif($operacion==3){
                        print($valor1*$valor2);
                    }elseif($operacion==4){
                        print($valor1/$valor2);
                    }else print("Por favor siga los criterios de este intento de calculadora :v")        
                    ?>

                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>


</body>

</html>