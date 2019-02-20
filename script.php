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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <nav>
        <div class="nav-wrapper light-blue darken-4 center">
            <a href="search.php" class="brand-logo left"><i class="material-icons">search</i></a>
        </div>
    </nav>
    <div class="container">
        <table class="striped">
            <thead>
            <tr class="row">
                <th class="col s1 center"><h6>#</h6></th>
                <th class="col s10"><h6>Resultados</h6></th>
                <th class="col s1"><h6>Download</h6></th>
            </tr>
            </thead>
            <tbody>
                <?php 
                    $path_to_check = 'data/';
                
                    $name_person1 = $_POST['name_person1'];
                    $name_person2 = $_POST['name_person2'];


                    foreach(glob($path_to_check . 'INDEX*.txt') as $filename) {
                        foreach(file($filename) as $fli=>$fl) {
                            if(stripos($fl, $name_person1)!==false) {
                                if(stripos($fl, $name_person2)!==false) {
                                    $hd = substr($filename, 13, 2);
                                    $path = explode("/", $fl);
                                    $file = "data/HD". $hd .".txt.zip";
                                    echo "
                                    <tr class=\"row\">
                                        <td class=\"col s1 center\">
                                            <span class=\"badge\">" . $hd .  "</span>
                                        </td>
                                        <td class=\"col s10\">" . $fl  . "</td>
                                        <td class=\"col s1 center\">
                                        <a href=" . $file . "><i class=\"small material-icons center\">attach_file</i></a>
                                    </td>
                                    </tr>";
                                }
                                elseif (empty($name_person2)) {
                                    $hd = substr($filename, 13, 2);
                                    $path = explode("/", $fl);
                                    $file = "data/HD". $hd .".txt.zip";
                                    echo "
                                    <tr class=\"row\">
                                        <td class=\"col s1 center\">
                                            <span class=\"badge\">" . $hd .  "</span>
                                        </td>
                                        <td class=\"col s10\">" . $fl  . "</td>
                                        <td class=\"col s1 center\">
                                            <a href=" . $file . "><i class=\"small material-icons center\">attach_file</i></a>
                                        </td>
                                    </tr>";
                                }
                            }
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>