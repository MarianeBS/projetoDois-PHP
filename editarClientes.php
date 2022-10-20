    <?php
require_once("controller/ControllerCadastro.php");
?>
<!doctype html>
<html lang="en">

<head>
    <title>Sistema Web 2.0</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <nav class="navbar bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">
                            <img src="img/bootstrap-solid.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
                            Sistema Web 2.0
                        </a>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"></button>
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="index.php">Cadastro</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="consulta.php">Consulta</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h5 class="card-title">Editar - Cadastro de Potenciais Clientes</h5>
                <p class="card-text">Sistema utilizado para cadastro de usuários.</p>
                <p>
                    <?php
                        $controller = new ControllerCadastro();
                        $resultado = $controller->listar($_GET['id']);
                    ?>

                    <form class="row g-3" method="post" action="controller/ControllerCadastro.php?funcao=editar&id=<?php echo $resultado[0]['id']; ?>" id="form" name="form"> 
                        <div style="text-align: left;" class="col-md-6">
                            <label for="formControlInput1">Email:</label>   
                            <input type="text" class="form-control" name="txtEmail" required id="txtEmail" value="<?php echo $resultado[0]['email']; ?>">
                        </div> 
                        <div style="text-align: left;" class="col-md-6">
                            <label for="formControlInput1">Senha:</label>   
                            <input type="text" class="form-control" name="txtSenha" required id="txtSenha" value="<?php echo $resultado[0]['senha']; ?>">
                        </div> 
                        <div style="text-align: left;" class="col-12">
                            <label for="formControlInput1">Endereço:</label>   
                            <input type="text" class="form-control" name="txtEndereco" required id="txtEndereco" value="<?php echo $resultado[0]['endereco']; ?>">
                        </div> 
                        <div style="text-align: left;" class="col-md-6">
                            <label for="formControlInput1">Bairro:</label>   
                            <input type="text" class="form-control" name="txtBairro" required id="txtBairro" value="<?php echo $resultado[0]['bairro']; ?>">
                        </div> 
                        <div style="text-align: left;" class="col-md-6">
                            <label for="formControlInput1">Cep:</label>   
                            <input type="text" class="form-control" name="txtCep" required id="txtCep" value="<?php echo $resultado[0]['cep']; ?>">
                        </div> 
                        <div style="text-align: left;" class="col-md-6">
                            <label for="formControlInput1">Cidade:</label>   
                            <input type="text" class="form-control" name="txtCidade" required id="txtCidade" value="<?php echo $resultado[0]['cidade']; ?>">
                        </div> 
                        <div style="text-align: left;" class="col-md-6">
                            <label for="formControlInput1">Estado:</label>   
                            <input type="text" class="form-control" name="cboEstado" required id="cboEstado" value="<?php echo $resultado[0]['estado']; ?>">
                        </div> 
                        <div class="col-12">
                            <button type="submit" id="btnInserir" class="btn btn-primary">Editar</button>
                        </div>    
                    </form>    
                </p>         
            </div>
        </div> 
    </div>     
</body>
</html>                    
