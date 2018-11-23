<!doctype html>
<html lang="pt-BR">
    <head>
        <title>Caixa</title>
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
    </head>
    <body style="font-family: 'Niramit', sans-serif;background-color: #f1f2f7;">

        <?php include 'app/Views/templates/dashboard.php'?>

        <div class="container mt-5">
            <h1 class="text-center">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAOoSURBVGhD3dpdqE5ZHMfxI0mT1xHFhVHDRIkbE43IlJcbKcZIkTsUkWkmMTdzMYriAqMRUqQkLrghQg0hCpH3ZiKTcOGdYsrr97dnr3P+Z5119vZse53nbL/61DnrWWs9z/88+20tGtow3XAM7wt4g7/wJeqehQh9yFr8irpnOUIfrhYbUff4hfyDczluwI5pl4VMRl7GwI75pEL64UfMqNEPGACXuhaiD/IYdrJa/IexUOpayFzYiYrYDMUvZAPm51gNO6ZwIQtgJypiJxS/kCJKK2QXluVYCzvGFfILbHsRa1AofiGzkJdhsGNcIUPwAva1Wuh8G4VCaa2Q37HHsx1Ka4Uo/TEdoatcnq9ROK0VcgK2XZ5CySqkTdMH63EY12E/lCvkW0zwfA/FL+Q+jpRkBwbjo3IK9oNYRc6Rst1BV2RmEEKDHVfIbtz0XIQSuxCZjczMRGigU+QcieFPZGYFQgMdV4gWSVrkWD2h5BWi47wX/PF5dKV0c2iBlpm9sG/qK6MQXQmLZCjcHI/UkJW/Yd/UV8ahVbQQneB2nr4I5gtobWw7+1whW+EvgtzXHasQ5SHcPBPVEMoI2DcMcYVkJa+QxSias3DzLFFDKHNg3zBkJfwboW8eQmOda5iC0NgsU3EXbh4dFcH4z/7t3WkEsx+hAWU7Ca1N9Mi/Cu68/CNtk0Npm84J3RLUpjHasHDzPEcHtMi/cJ1iGgebK3j2/4+N0ZOu+m5JfmvKT7Bz2T2BJN1hO8SkdbjNJbhLt8tXUF9/Reg/jbdY938H2yGm8bDRE7YWXPYw0ROu+m5LfmvKUti5dMg1S96VpkzadNOGhNgniYNpm5xP215CCza16Sr1AK6/6HGnWdbBdqiKC2iWowh1jEF/tIHQCT0ST/AOuleoTX6G+upCMDxt0xJjH+xc+sY6ojFaxdkOMX3KyR7a0W9cMWpp678YU5lXLZmGJLqu+y/GZFd3elC9B2319FZDGq3/1VcXAHs1003Tn+83JFkE/8WY3kL7yaJj3LW/StvkddomuoOrTeeSa7O07E6iry/UoSquIklokVQl+vY6Ibn5+DsiVfMNPp9oZVh1yU0xdNxVTQ8EXyiLLpkHcNu0xRC1EC2WdIdWOsM90cYQtRBthtto4yLUrwxRC9FuoHYgFT1mHEeoXxminyO3sAlnTFsMSSF69gm9WCXac2i4bBqqSLs/SbQ+8NfCVaF1zCQ0pgtGw9+mbM/0X0P0zxukoeEDtTIgM6g6Y3YAAAAASUVORK5CYII=">
                Caixa
            </h1> 
            
            <section class="row text-center mt-5">
                <div class="col-md-4">
                    <a style="text-decoration: none" href="">
                        <div class="card">
                            <div class="card-body bg-success text-white">
                                <h1>
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAARcSURBVGhD3ZpdaBRXGIYjUkRMjBaFetEIUYlQ9EZRlEiE1t6IoFURKt5VQVFaFDHe9EKhgl60Riq1BBRBJF7YmxZFBSNWFFQU6x+KpUE0F8b4U2iFmsTnO/POujPObDqbPbtZH3g55/s53zmfuzOZWawpF/39/XUDAwOdKDOsfY3OMh2vcpWDg2wIjlU81NiucpWDc7QGxykeGtmvcpWDc0Qa4VD3Ga4UEjl3GXMM10YWK5QKac1BdsCQGmHxJLSCOiuziDVfoMkqU9lG7CCoV3Uyw9pXaIHVwqxoI1+pRtFQ44DVYhpvZB/DukIiZzdjjqE0sl41ioYaR6wW00gjxVCyRrCPom2D6HulO7BdI4xb5CoaauxxB8sKC+ONfKlQKuTMULoDO/xEpjP/O/Bmh7V2vc11m2SFhYmNMO7APBbTIcUSGzGYf4yW40680w2iRpXJDpumNXJernyeK5baSFlh44loLzqF7ug8DuywkdmYn8W0ULF4I93odIl0GDXZPoNC4gWd4R2IZb5GSg31HzLUartkSJoapCcTNsLYgR7EdF0xr40Y7LHa9kqFhFXKTYR45mvEB+zxo+2VCgk7lZtIXiP2kjQ+pnGKFWyEuH3PP2QaX19QrLE7ZUin7ZUKyceVmAjxUjSy3vKywrpPVMJqPJU7GRLuKTcR4kP+ahEvqhGW1gYVcnykUBQ2GI1eKykR4mEj7ZjxFyH3cRPz0ojB2h6VsTqL5I5CbFaQkg6LXSOF+B+NbFJqZlh7WWWsztdyRyGwRjmpkPMdQ/wPYUTkrGVMhfhttIRp4voCWsq6R4wO5u06ehQCkWf/4Q7nvaijRyHwq3K8wj6/M7Qy2iP/LuSuS8Y2+Uwn5etBO82nNfaDhYP5S4YROv5bCHQFKX5hnxZt6cC+iV7IdJDWqNyf5XJgf2P+EOzcbwIOHGMVKwfN2tbB3jfwuVt3CHaDJRKLvBFix5/Go+/9OOYp5h32+lTbOrDvIHvhyn1NsJuUe1AuB/ZW84dgb1MoAEfBO00pYa+76ICUe5JgfiLPf1W+fxgOydeOnpg/BPuwWgjA8YNiVQXnvqYWAnCcUcw79o+GpjBtZJyDnqF+bPtbYRe5+TczWq7dCGbKNxX9Yv4QbPvERqoN10h3ECoLQ7nY3/lFH1/wxshkonzlomR3LQPfsjDYIl9ZYL/c2x1ze1B9jF4RmiC3NbJQuScY8u9mbebPB9+3YXCjfGWB/fpQr2TfcQfzf/P8/8lt/pfyPZMrAv6OsJH98lUlnP9W2EjSS1LVwPnt0/vAGrmK4r+IVJumuU/lvYCPxd4Mq10jrZH3gXqvjfDdtceP39BfcvnCXyMc/gVDg319mY9C7onWE14bueAuQoFtP1z4wmsjTxnc/x1hHIF9zgX84P0a+RP9hC7J5Yt6+8j7ZFQt9DDWGvlDdlXC+bvcRci8GSPyLlxFPOfsn7tGDIwxaD6B+M+Uw1acdwGqCzqoqXkDtYQGuNN9luEAAAAASUVORK5CYII=">
                                </h1> 
                                Abrir Caixa                           
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a style="text-decoration: none" href="">
                        <div class="card">
                            <div class="card-body bg-info text-white">
                                <h1>
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAATLSURBVGhDzZptqFRVFIZvaaImlArSj0pQMQrCRFCMCNIy5IKgoGDaj5IiIYRQUFAjgqhA/WmYlCWo+EmSiPVDFCuC0qCwsI8fGvmVSZCKWl571t7v7Dt7zsw4Z86XD7zss9ba5117e++dOXvGnr6+vtXo8s0WUDPOo8/RAlJ39hQE/gvRRXQGPat0Z3BDn19yZzD9M4ahuj1X8D7nu7g+19BMlW4Nk6/q3o7hng91e67ge1wtHKk2w8RedJD7vm0mat+hC1wHiI2HZNESpt7FvAmMkzoRc181Y64DhOl+Mu3Azxa03VsH3lG5KdSHcc/3fmo2tJkpss4GRqPRDXmb+UmVmkJ9tqbmAn4bZJ0dzI7I10H8sEoJqI1F1zQ1M3i9Iuvs4LfC23owX6pSU6g/jtagDR1qG0q8ipL6gCG/l30MH/XWHuKDKuUCfltkHch9EzUwPulbuCbXGe5RKTP4nffOnsI2YWC+3rcJzFUpM3i/J0/bxPsMhT1FWLNe38pD/CXayOWOrMJnJ7qAzjar10R9PVrC9XAtKz0YDEFXMKkc1vE7wxgtLT0Y7PNW1cNatmpZ6eHmxfKpHNbS9o25Ldz/oLfpB8O3GJ5uJeo/MNq8r+vzJnIvMTq4XskQ1etFfQ4K7zVcntKyugOD6DmKeJNKTaHungoY9ykVIBfen7juVbop1JdpqoN4r0rdgcHb8nIQ/8kwQOUE1DNvhPIg6vYHHiCep3J34PGEt+oH0+UMc5uJ2k+MNudofd5Ebimjg2v7B4rqNakWIP6VYaCW1B0YDMDoL+dYEfRfrOVkA6PEs1FZ0PscGqKlZAOj5+QbIDeLYUyjyH/DaHU7jTbWZjI6uF7EENVN5E8wBohXaRnZwWwE+k/eDuLXVY4g3/UfO7mnVHYQ/8Nwr8r5gGnjYeuYShG1eYzdbOSAyg7iNSrlB77RYcug0S6Gxgc9e3m22un6vImcfcTk4No2XF/bjerfAO38fr/a5wem0WGraOhXyEdRDszDYcsgts/KGj9Wst9r42/UWAufZ3H9C0Mt/7NLCuIb6BG1zR/Mo8MW8b9opMoO4tR/I1yvVdpB/IlKxWDN1StA7kWVHcSpNsI4EtV+ig7iqe6GoqBB4rBFHC2YONVGuHzDZzzkD7vJRWMLVE8Hsf162XNVV38jjJd8xkOceFkuBBoVdtjC244Md6hVsdAocdjKCzYyW23KQf9yuYHfRYaXZV8eNG48L7zGMDyDWh7UCoXG0WGLjdgTbzWLyYItmsWfcrvop+33KLctbGS+NhAgtxfNQOMIE2eNTsS9I9SiPGi6mea5gqc9AX+kFuVAw6H03e9WkDP4jlebcqDnQJquRC2/w08LXvZun9vXGKmwxizgBWTfXG0jjg5VnYp7N6LJsi0fmk9DXyD7uuAr9IxKCaiNQh+jP9AJ9CabGKRydbCQJ1H4JtggNqZrSoDSYPI/+ln9kGv7UWwpsIhwFm/gkKYEmPu8agmoPaBp1cACftNaIsif1pQA6ej8UQ/zEz/BUmEBn2otEeQPaEqAtH2+m4C59qt5n6ZVAwt4jIVE/2mH+DpKvPpQspdr++4kgtw6TakWFjIB2Zecx9EeNFGlBNTuRu+iY+gwssNaOQeq24Oenv8BraUYv9pg+EIAAAAASUVORK5CYII=">
                                </h1>
                                Realizar Venda
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a style="text-decoration: none" href="">
                        <div class="card">
                            <div class="card-body bg-danger text-white">
                                <h1>
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAARcSURBVGhD3ZpdaBRXGIYjUkRMjBaFetEIUYlQ9EZRlEiE1t6IoFURKt5VQVFaFDHe9EKhgl60Riq1BBRBJF7YmxZFBSNWFFQU6x+KpUE0F8b4U2iFmsTnO/POujPObDqbPbtZH3g55/s53zmfuzOZWawpF/39/XUDAwOdKDOsfY3OMh2vcpWDg2wIjlU81NiucpWDc7QGxykeGtmvcpWDc0Qa4VD3Ga4UEjl3GXMM10YWK5QKac1BdsCQGmHxJLSCOiuziDVfoMkqU9lG7CCoV3Uyw9pXaIHVwqxoI1+pRtFQ44DVYhpvZB/DukIiZzdjjqE0sl41ioYaR6wW00gjxVCyRrCPom2D6HulO7BdI4xb5CoaauxxB8sKC+ONfKlQKuTMULoDO/xEpjP/O/Bmh7V2vc11m2SFhYmNMO7APBbTIcUSGzGYf4yW40680w2iRpXJDpumNXJernyeK5baSFlh44loLzqF7ug8DuywkdmYn8W0ULF4I93odIl0GDXZPoNC4gWd4R2IZb5GSg31HzLUartkSJoapCcTNsLYgR7EdF0xr40Y7LHa9kqFhFXKTYR45mvEB+zxo+2VCgk7lZtIXiP2kjQ+pnGKFWyEuH3PP2QaX19QrLE7ZUin7ZUKyceVmAjxUjSy3vKywrpPVMJqPJU7GRLuKTcR4kP+ahEvqhGW1gYVcnykUBQ2GI1eKykR4mEj7ZjxFyH3cRPz0ojB2h6VsTqL5I5CbFaQkg6LXSOF+B+NbFJqZlh7WWWsztdyRyGwRjmpkPMdQ/wPYUTkrGVMhfhttIRp4voCWsq6R4wO5u06ehQCkWf/4Q7nvaijRyHwq3K8wj6/M7Qy2iP/LuSuS8Y2+Uwn5etBO82nNfaDhYP5S4YROv5bCHQFKX5hnxZt6cC+iV7IdJDWqNyf5XJgf2P+EOzcbwIOHGMVKwfN2tbB3jfwuVt3CHaDJRKLvBFix5/Go+/9OOYp5h32+lTbOrDvIHvhyn1NsJuUe1AuB/ZW84dgb1MoAEfBO00pYa+76ICUe5JgfiLPf1W+fxgOydeOnpg/BPuwWgjA8YNiVQXnvqYWAnCcUcw79o+GpjBtZJyDnqF+bPtbYRe5+TczWq7dCGbKNxX9Yv4QbPvERqoN10h3ECoLQ7nY3/lFH1/wxshkonzlomR3LQPfsjDYIl9ZYL/c2x1ze1B9jF4RmiC3NbJQuScY8u9mbebPB9+3YXCjfGWB/fpQr2TfcQfzf/P8/8lt/pfyPZMrAv6OsJH98lUlnP9W2EjSS1LVwPnt0/vAGrmK4r+IVJumuU/lvYCPxd4Mq10jrZH3gXqvjfDdtceP39BfcvnCXyMc/gVDg319mY9C7onWE14bueAuQoFtP1z4wmsjTxnc/x1hHIF9zgX84P0a+RP9hC7J5Yt6+8j7ZFQt9DDWGvlDdlXC+bvcRci8GSPyLlxFPOfsn7tGDIwxaD6B+M+Uw1acdwGqCzqoqXkDtYQGuNN9luEAAAAASUVORK5CYII=">
                                </h1>
                                Feixar Caixa
                            </div>
                        </div>
                    </a>
                </div>
            </section>
        </div>
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>