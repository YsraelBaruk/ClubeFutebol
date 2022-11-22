<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Champions League</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <table class="table table-dark table-striped ">
    <thead>
        <tr>
        <th scope="col">Club</th>
        <th scope="col">Stadium</th>
        <th scope="col">Capacity</th>
        <th scope="col">Titles</th>
        </tr>
    </thead>
    <tbody>
        <?php
            require_once 'class/Clube.php';
            require_once 'biblioteca_funcoes.php';
            $clube = new Clube();
            $listaDeClubes = $clube->consultarTodos();
            //var_dump($listaDeClubes);
            if ($listaDeClubes){
                foreach($listaDeClubes as $clube){
                    echo exibirDadosClube($clube);
                }
            }
        ?>
    </tbody>
    </table>
</body>
</html>