<!doctype html>
<html lang="pt-BR">
    <head>
        <title>Abrir Caixa</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Copse" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Niramit" rel="stylesheet">

        <!-- Fontawesome 5 -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

        <!-- CSS Files -->
        <link rel="stylesheet" href="<?=URL?>/public/css/dashboard.css">
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
        <!-- Data Table CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    </head>
    <style>.card {-webkit-box-shadow: 0 1px 2px rgba(0,0,0,.10);-moz-box-shadow: 0 1px 2px rgba(0,0,0,.10);box-shadow: 0 1px 2px rgba(0,0,0,.10);border: 1px solid rgba(0,0,0,.2);border-radius: 0;color: black;}.card-header{font-size: 22px;}.card-footer{background-color: #fff;}</style>
    <body style="font-family: 'Niramit', sans-serif;background-color: #f1f2f7;">

        <?php include 'app/Views/templates/dashboard.php'?>

        <div class="container mt-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="caixa">Caixa</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Abrir Caixa</li>
                </ol>
            </nav>
            <div class="card mb-5">
                <div class="card-header border-success">            
                    <h1 class="text-center text-success">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAUDSURBVGhD3VlbiBxFFB0REfEtCuZDhTUSmZ3uiW6IDxIUfPyI4GsRFP80YMju3OpNyPrjh4EI+uELxYhgCIgkH/qjKCoYMYnJVHUS4pqEiGIQ9UPzBg34WM+trp6p7q6ZoWemM2kPHCZb99ate7oeXbdTOVNYtG3Nxb6irb4S83npKfE3+IW3b/ZyE250QCIrXUnm5DMm3OiA2Zh1JJaLnqQ3TLjRISNE0neg6kolDtp9zkohdUn3GVNH+CpYZvcZSMjNkhYgwCOeCibz0A8bD90UzlxnwoxWCCeCKT5qB8tFKU57ipZzrJEKQccn7UB9UYoNHCu72ek1L6QV3YiH+ILdp28hvgyetgP1RUnv6lgZIfk5NCFYJu/VpFjbjUj8JbtPS4gUM4n2PuhJ8aJOLC8yQqR4zJg6Aj6e3ScWUlPBjRBzKmHLQ+w3XzZu0YPkRSch+H0OS2VLkmKjsTmFMMabwTV+UzzsOuV6skljJkx+dBZCX9nt2qboeGTrLOSMYvHuqauQ6Ct4yp8iiQN2UrGQWkhL8ITutlmXjTvZlhGi6Ff8fjYM4r62yWs2FvE4PYGBt6OTlUibsZBuyAoZOn+qzq28yAznRjUUCx0dW4yF4Hcz/v4+QUl7ja1oIfM1RY/zWB3hh8Gjro4x20Jy7JEiKOl1HqsjsKzWOTsaxkK4SOIix2Z9T+MytvUSwuu8ukNcke7fk/qkjOPQVh6rI/Ck37cHTXMYQvgkZL+8qO+i8XYcOmKa3UAShxKDphgLGWhp9SmEN7gdp7pr9dXGlMStO8QFXBvbzmm2hCh6G+s0VQRF012UEAb6/x7HqcngHtOchBfOTLQG68BYSDf0FkJTxjU3cE2RcRw8zIZpTsJv0hOJAR3EklqffhFmqMRTrr4tSrHfD+l+Z98urKnGAxj/5zgOrwqTehJ4Uom7/1lPSV+b1JPAkvjQ2WHIxIxtw36a5Ss/xnw+3pf4fTUuBdD+ifHHnqB1ujzgeoY/WLRi0cnKfOUck34bmPLDbafiWGuKO8yQGhAwB54wf2pgKY1pf0lvmSYN+JEdy/4moLF059QltkOxDJaZYTWQ7L746I5RVdPXsi/2RKIiTN/GM3V/LWzcZjsUSS8M7jLDakDIAS647GXCN1ztL+kd06SBGVljx+IlZ0wR4ND9pBkuDyLxDUz7JoF/fxy3g6FuU/QHfjdqX5xS8Pkt9o/sYpOREAGOL9sOZSGE7DESImAKP3c5FkI8tHG5+nre0HUpluKEOoa2f837YkxvdBkE7ItE52rhtM9tusSQ4gM7Fs/Y5JbJc40MCImquOSAhbH/zQ5hmS/6rYqRS9u0sVgO79Ri1pV4UBv5XE8bi6Rd3emLqhS/YMmcnlDBlaa5wvU/+/IBkDjN8NJMxwOf1UYcYascxuIo6R/wKNOcSsZGf1rtf1ntJ3Ub76VWW5to36yF8PS5HMpC5P9tLCRTJJWJPHsTasV5/A7hl0/yi0jJuHj39A16Vv4X4Mqw7NQvRUyNc+2ViRNq7aWFComOTPoIB8qPLvuwWKgQvLxO8Bual+/CQ1Pnm0PF6TsoC54R2q43oQFmZb3bb3AWLeQIf4HUKnDNwIx86fYbnMXvEUU/gG9ir+x02YfFSAjffRzGMpG/OfCN8huXsTSU4rBevlwfYCMmauGyEMv2eF3SvVoIw987c+F4M7jdlJvloKLl/N8bkYJK5T8UR4LerF/6ZAAAAABJRU5ErkJggg==">
                        <img width="30" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAALkSURBVGhD7ZhLaBNRFIYjvhUFXXQj4gMfkGZmKoX6BBFcCG4U6dKdipsm5yYU3UUQQRARQUERQV24EHGnS7PR2M6ZtEWKShXEB4KiIkWkvlrPpMc4uTkJSTttbmU++DeT+997/tx7Z+5MLCIiIiJiMmx80L3EQnXG8uC6g7CdL88wxmKzbA/u2p4aKwrhN+nclrxayC1mBpanDpdCBIXw1MbUZm5mNnZPZg3NxrAYxBfC91Y3vY2bGwotKZqNnBggKFQX2GEmtLFTYuG6EI6yxTzs3vQGCvJNLDwoBG9nLjuHbWbReatzNi2XvFh4UKhGnF5oZZt5JFAdEwvXRPunmy3mYbvJhP9PS4WXCx76M8c2s2j3jsylEAW58H+yEL629SXXs8086AhyQiq8QqiSbDEPq5BppyA/xMIDotm47z9f2GYW64a65tPGHZQKLxcMO/2p1WwzDyrwtFx4uWg2DrHFPBKF1FaajV9S4ZruGbuk6C61iPbFkFB0uRA+O/1qBdvCh06dK/2HUsJL7eNLDUFL5bxYuC4XDrIlfGw3vYkG+fh3MDoXXWpk6h1Uu+g2Oloqtooo7B22hI8eoiRUl+sJw6+tLyv8mqjNB3sg08K2cBkPAZ+kgYuqIwy1uSJ6dbnqAFvCxX9HpgHeVAyoq0YYu6D21LOkSDfZEj5tfZm4MKAsIYz1+PgyWvNvxfYB0ZJ6F8+r5WwLn/hgdh4N9EwfuKq0MHSHuyG20+Qg7GXL1GG5sJb2yGupAFEcxvHUfvF3TRT2Kg819TQcxlPXaEm9F66XC9Wrjp6upTzM9DCBMLVFNwDqczd3P72EGgbhInfbHEIJg/CCHnyLucvmMZkw4yff9A7uqvlMNAyd0c5yF+bQcBhUT1blsgvYbhb1hqGZ+Ekn4A62mUl9YeAkNzebmmEQBvzjDjc1n2IYhOfBELSkvhj9vbYa/vOBNvUpCvSIQtz2P4nyTxERERER/yux2B/z6JjClilZgAAAAABJRU5ErkJggg==">                        
                        Abrir Caixa
                    </h1> 
                </div>
                <div class="card-body">
                    <h1 class="text-center mb-5">                            
                        <button type="button" class="btn btn-success btn-lg" id="#abrirCaixa"  data-toggle="modal" data-target="#abrirCaixa">
                            Abrir Caixa
                        </button>
                    </h1>
                    
                    <table id="tabela" class="table table-striped table-hover table-bordered">
                        <thead>
                            <tr class="text-center">
                                <th scope="col" style="width: 20%;">Funcionário</th>
                                <th scope="col">Data da Abertura</th>
                                <th scope="col">Hora da Abertura</th>
                                <th scope="col">Data de Fechamento</th>
                                <th scope="col">Hora de Fechamento</th>
                                <th scope="col">Saldo</th>
                                <th scope="col" style="width: 10%;">Ações</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        <!-- Modal Abrir Caixa -->
        <div class="modal fade" id="abrirCaixa" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title text-center">Abrir Caixa</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="" method="post">
                        <div class="modal-body">                            
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">Funcionário:</label>
                                        <select class="form-control" name="" id="">
                                            <option value="">Selecionar</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                    <label for="">Valor da Abertura:</label>
                                    <input type="text" name="" id="" class="form-control" placeholder="R$ 0,00">                                      
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-success">Abrir Caixa</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        
        <!-- Data Table JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#tabela').DataTable( {
                    "language": {
                        "lengthMenu": "Mostrar _MENU_ registros por página",
                        "zeroRecords": "Nenhum registro encontrado!",
                        "info": "Mostrando _PAGE_ de _PAGES_",
                        "infoEmpty": "Nenhum registro disponível!",
                        "sSearch": "Buscar:",
                        "infoFiltered": "(Filtrado do total de _MAX_ registros)"                        
                    },
                    "lengthMenu": [[5, 10, 15, 20, -1], [5, 10, 15, 20, "Todos"]],
                    "ordering": false
                } );
            } );
        </script>
    </body>
</html>