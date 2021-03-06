<!doctype html>
<html lang="pt-br">
  <head>
    <title>Upload de arquivo com salvamento em diretório e nome no banco (PDO)</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <h5>Upload de arquivo com salvamento em diretório e nome no banco (PDO)</h1>
    <div class="container">
        <form action="backend.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-4 form-group">
                        Matricula:
                        <input type="text" name="matricula">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 form-group">
                        Imagem:
                        <input type="file" name="img">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 form-group">
                        <input name="frmBannersEnviar" type="submit" class="btn btn-primary" value="CADASTRAR" />
                    </div>
                </div>
        </form>
    </div>
  </body>
</html>