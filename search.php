<!DOCTYPE html>
<html>
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56644904-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-56644904-2');
    </script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Fotos - Visual Studio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <nav>
    <div class="nav-wrapper light-blue darken-4">
        <a href="search.php" class="brand-logo left"> <i class="material-icons">search</i></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="">Total de pastas: <span class="badge white">27525</span></a></li>
            <li><a href="">Total de Arquivos: <span class="badge white">3148526</span></a></li>
        </ul>
    </div>
  </nav>
    <div class="container">
        <div class="row">
            <form class="col s12 " action="script.php" name="Form"onsubmit="return validateForm()" method="post">
                <div class="row">
                    <div class="input-field col s6">
                    <i class="material-icons prefix">account_circle</i><input placeholder="Digite um nome" name="name_person1" type="text" class="validate">
                        <label for="name_person1">Primeiro Nome</label>
                    </div>
                    <div class="input-field col s6">
                    <i class="material-icons prefix">account_circle</i><input placeholder="Digite um nome" name="name_person2" type="text" class="validate">
                        <label for="name_person2">Segundo Nome</label>
                    </div>
                    <button class="btn waves-effect waves-light right" type="submit" name="action">Pesquisar
                        <i class="material-icons right">search</i>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <script type="text/javascript">
        function validateForm()
        {
            var a=document.forms["Form"]["name_person1"].value;
            if (a=="")
            {
                alert("Insira pelo menos o primeiro nome..");
                return false;
            }
        }
    </script>
</body>
</html>