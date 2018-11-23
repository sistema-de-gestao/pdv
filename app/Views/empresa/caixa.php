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
    <style>.card {-webkit-box-shadow: 0 1px 2px rgba(0,0,0,.10);-moz-box-shadow: 0 1px 2px rgba(0,0,0,.10);box-shadow: 0 1px 2px rgba(0,0,0,.10);border: 1px solid rgba(0,0,0,.2);border-radius: 0;color: black;}.card-header{font-size: 22px;}.card-footer{background-color: #fff;}</style>
    <body style="font-family: 'Niramit', sans-serif;background-color: #f1f2f7;">

        <?php include 'app/Views/templates/dashboard.php'?>

        <div class="container mt-5">
            <h1 class="text-center">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAOoSURBVGhD3dpdqE5ZHMfxI0mT1xHFhVHDRIkbE43IlJcbKcZIkTsUkWkmMTdzMYriAqMRUqQkLrghQg0hCpH3ZiKTcOGdYsrr97dnr3P+Z5119vZse53nbL/61DnrWWs9z/88+20tGtow3XAM7wt4g7/wJeqehQh9yFr8irpnOUIfrhYbUff4hfyDczluwI5pl4VMRl7GwI75pEL64UfMqNEPGACXuhaiD/IYdrJa/IexUOpayFzYiYrYDMUvZAPm51gNO6ZwIQtgJypiJxS/kCJKK2QXluVYCzvGFfILbHsRa1AofiGzkJdhsGNcIUPwAva1Wuh8G4VCaa2Q37HHsx1Ka4Uo/TEdoatcnq9ROK0VcgK2XZ5CySqkTdMH63EY12E/lCvkW0zwfA/FL+Q+jpRkBwbjo3IK9oNYRc6Rst1BV2RmEEKDHVfIbtz0XIQSuxCZjczMRGigU+QcieFPZGYFQgMdV4gWSVrkWD2h5BWi47wX/PF5dKV0c2iBlpm9sG/qK6MQXQmLZCjcHI/UkJW/Yd/UV8ahVbQQneB2nr4I5gtobWw7+1whW+EvgtzXHasQ5SHcPBPVEMoI2DcMcYVkJa+QxSias3DzLFFDKHNg3zBkJfwboW8eQmOda5iC0NgsU3EXbh4dFcH4z/7t3WkEsx+hAWU7Ca1N9Mi/Cu68/CNtk0Npm84J3RLUpjHasHDzPEcHtMi/cJ1iGgebK3j2/4+N0ZOu+m5JfmvKT7Bz2T2BJN1hO8SkdbjNJbhLt8tXUF9/Reg/jbdY938H2yGm8bDRE7YWXPYw0ROu+m5LfmvKUti5dMg1S96VpkzadNOGhNgniYNpm5xP215CCza16Sr1AK6/6HGnWdbBdqiKC2iWowh1jEF/tIHQCT0ST/AOuleoTX6G+upCMDxt0xJjH+xc+sY6ojFaxdkOMX3KyR7a0W9cMWpp678YU5lXLZmGJLqu+y/GZFd3elC9B2319FZDGq3/1VcXAHs1003Tn+83JFkE/8WY3kL7yaJj3LW/StvkddomuoOrTeeSa7O07E6iry/UoSquIklokVQl+vY6Ibn5+DsiVfMNPp9oZVh1yU0xdNxVTQ8EXyiLLpkHcNu0xRC1EC2WdIdWOsM90cYQtRBthtto4yLUrwxRC9FuoHYgFT1mHEeoXxminyO3sAlnTFsMSSF69gm9WCXac2i4bBqqSLs/SbQ+8NfCVaF1zCQ0pgtGw9+mbM/0X0P0zxukoeEDtTIgM6g6Y3YAAAAASUVORK5CYII=">
                Caixa
            </h1> 
            
            <section class="row text-center mt-5 pt-5">
                <div class="col-md-2">
                    <a style="text-decoration: none" href="abrir-caixa">
                        <div class="card">
                            <div class="card-body bg-success text-white">
                                <h1>
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAARcSURBVGhD3ZpdaBRXGIYjUkRMjBaFetEIUYlQ9EZRlEiE1t6IoFURKt5VQVFaFDHe9EKhgl60Riq1BBRBJF7YmxZFBSNWFFQU6x+KpUE0F8b4U2iFmsTnO/POujPObDqbPbtZH3g55/s53zmfuzOZWawpF/39/XUDAwOdKDOsfY3OMh2vcpWDg2wIjlU81NiucpWDc7QGxykeGtmvcpWDc0Qa4VD3Ga4UEjl3GXMM10YWK5QKac1BdsCQGmHxJLSCOiuziDVfoMkqU9lG7CCoV3Uyw9pXaIHVwqxoI1+pRtFQ44DVYhpvZB/DukIiZzdjjqE0sl41ioYaR6wW00gjxVCyRrCPom2D6HulO7BdI4xb5CoaauxxB8sKC+ONfKlQKuTMULoDO/xEpjP/O/Bmh7V2vc11m2SFhYmNMO7APBbTIcUSGzGYf4yW40680w2iRpXJDpumNXJernyeK5baSFlh44loLzqF7ug8DuywkdmYn8W0ULF4I93odIl0GDXZPoNC4gWd4R2IZb5GSg31HzLUartkSJoapCcTNsLYgR7EdF0xr40Y7LHa9kqFhFXKTYR45mvEB+zxo+2VCgk7lZtIXiP2kjQ+pnGKFWyEuH3PP2QaX19QrLE7ZUin7ZUKyceVmAjxUjSy3vKywrpPVMJqPJU7GRLuKTcR4kP+ahEvqhGW1gYVcnykUBQ2GI1eKykR4mEj7ZjxFyH3cRPz0ojB2h6VsTqL5I5CbFaQkg6LXSOF+B+NbFJqZlh7WWWsztdyRyGwRjmpkPMdQ/wPYUTkrGVMhfhttIRp4voCWsq6R4wO5u06ehQCkWf/4Q7nvaijRyHwq3K8wj6/M7Qy2iP/LuSuS8Y2+Uwn5etBO82nNfaDhYP5S4YROv5bCHQFKX5hnxZt6cC+iV7IdJDWqNyf5XJgf2P+EOzcbwIOHGMVKwfN2tbB3jfwuVt3CHaDJRKLvBFix5/Go+/9OOYp5h32+lTbOrDvIHvhyn1NsJuUe1AuB/ZW84dgb1MoAEfBO00pYa+76ICUe5JgfiLPf1W+fxgOydeOnpg/BPuwWgjA8YNiVQXnvqYWAnCcUcw79o+GpjBtZJyDnqF+bPtbYRe5+TczWq7dCGbKNxX9Yv4QbPvERqoN10h3ECoLQ7nY3/lFH1/wxshkonzlomR3LQPfsjDYIl9ZYL/c2x1ze1B9jF4RmiC3NbJQuScY8u9mbebPB9+3YXCjfGWB/fpQr2TfcQfzf/P8/8lt/pfyPZMrAv6OsJH98lUlnP9W2EjSS1LVwPnt0/vAGrmK4r+IVJumuU/lvYCPxd4Mq10jrZH3gXqvjfDdtceP39BfcvnCXyMc/gVDg319mY9C7onWE14bueAuQoFtP1z4wmsjTxnc/x1hHIF9zgX84P0a+RP9hC7J5Yt6+8j7ZFQt9DDWGvlDdlXC+bvcRci8GSPyLlxFPOfsn7tGDIwxaD6B+M+Uw1acdwGqCzqoqXkDtYQGuNN9luEAAAAASUVORK5CYII=">
                                    <img width="30" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAKKSURBVGhD7ZhNSJRRFIZHNGsSg1q0iSADW5ibCIx+NkGLoE3i2l1BK1tJ2yCCICIChSICa9Eq2tWyVtWmoIVYlBD9IBgVERJqNdNzv/tK6HDvN6OfzjHuAy93vN97znmPDv6VEolEIrESKpVKJ7qMbqPDul5fVKvVFsI/4Mzg9R90FZVlWR8Q+LR2WAT3r9AB2WxD0C70Q9lr4NkcOiS7Tcjp3lKPfeQweEZUYhMCnlXWKPjOqMQehNuDfiprjOeoTWW2IFgrSzzNYkbAM4v2qswehDunrFHwDavEHoTrdZ9pZQ2C5wlHq8psQbANBHyRJY2AZwZ1q8weZDzvo8ZhiSGV2IN8+wk476OGwfOIo0VltiDcRjTuo4bB437C71KZPQh3KUuaA4ucUok9CHcQ/VbWIHgecth8SxFsMwHfZEkj4PmGdqiseGi+Ew0z66SuGoLaaz5qHHyDKikemu9DXzTLDbvOUfeXHv9RVPHVYbDcV0nx0HzREgtwd4Mjdxl87s/Wd74qDJ7PaLvKioXGbomvmlUDz3KXwXPTu+PgG1BJsdC4jD5qTpDYMjw7jup5S91VSfHQvEdzcsFbswwfb+X+U2aIgGcKbVNZ8TCjnQGv/bh8li7Dx3f8kzj4Tqhk9WDObgZ98CPzWViGs9/fxMF3S6NWH+Y1tAyM4Z/W6yB43qMtGrM2MLfRZaLQy30DOKb2awuDC1uGPqNq2xzIsOJlqJ9EHWrZPMiy7GWoc7/5HlGr5kOYZS1DzRW1sAO5GloG7wTHJpXbgmB1LYPnF+pTmU3ImbsMzy/IbhuyBpfh/iVHu6z2Iaxb5m2W/h/fubP7/9oQhO5AF9EzdA/16lEikUgk/ldKpb/vgtPmKvdOmgAAAABJRU5ErkJggg==">              
                                </h1> 
                                Abrir Caixa                           
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-2">
                    <a style="text-decoration: none" href="vender">
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
                <div class="col-md-2">
                    <a style="text-decoration: none" href="devolver">
                        <div class="card">
                            <div class="card-body bg-secondary text-white">
                                <h1>
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAT/SURBVGhD7ZlbjF1TGMenLUOHaIdo0Kjbg8SdShN1iU77IB5EtKkXDxWk6QsPFC9CKihiBAmRkEpbqbpEhMSUChKZVOKSiEb0EokQ2ikhrqFm/L6z/s7pOmetfVlnbV78kn/2Pt/6f//vXLLP3vucgSaYnJx8AL2PxtAm9PjU1NRdbK9Hl6MzeDwke14IP57w2XrYF2T9QlYheIwv0OvIXvhctadB5kWE7Hbx7QGfs/sM2yvYTpe1MvR91QqrAT0Pqj0NAiaUFYT1XWhE9krg/1TtlcD/JZsT1Z6GiyqGQX+hm9VSCt531VqKvQh0ilrTUV4pDDOWq60QfC+prRB8eV6EQdAG5ZaCdy86Uq1R8DymlkLwfYaOVlt/kDedsGXIvjmeQlvQz25UkNvVGoX+2+QtBe82dIha80L+LMJfcKN8qG+XLQqea2SvBP4n1ZofwmeinZrlQf042YKwvlDWSuA3Fqo9P4Sv0SwP6lfJEgTLsHN2oMfOLT+4R72w/p7a80P4Is3xoH6PLFHwfCu7+VvfTuhCFD3+zKP2vJBtx8qkG9OB0hZZouB5W17vK5b9EbS/FdQF9dWy5YfwHZrThtqElqPgWYTWo553mdotivKgvlGW/BD+nOZ0k3xJQe8Mcj92MR2ovSZLfgrevaWyJEHElS6pA5mbtZwfwkc0x4P6vbIkQcTBZOxxaQ4el36JGFjn4V2KTlepHJpm05B0wJdBxquKa8Hjy7QUBc8N6A+1WM9DWioHc8+Jkdo+LSdjT0JxlmefzqCWguCZg351HR2oLZClGIyb1eNB/SRZkqB/VFGWdafKUbCtdW4feq+TpRiMq9XjQb2vA57+jcqxq+ojVA7C+lHop9bgLqifJ1sxGBerx4P6fbIkQf+Hyim9z8EW+zS2ylIO/mEaQgf8G7LUht65yO48N6gUhVHH4Av+oEF9sWzVoGGXettQSz7g6b2ViA9Q6c9CeIM3atTHZakOfc+79h5OlqUWPIkL0Bw9jILnBPS7ZnWzRLbqEGbvYA/Ul8nSCOQ/rVHdvCNLPWhc4vp9GNTXAV8E8eeQ/6eb5EP9YtnqQW/PzZJB4JuyZIVo+y1hm5viQ31MtjQIaP8i+Q/UvmNT+9fIMshd6Sb4UDeqncljkBM74C+VJQs8UbsU+V7ZHtQ3yZYOIauU50HdLv6mydY35K13yT7Uf2MzT7Z0CLKTWOw29WV0rqzJkHE16jn5GpTvlq1/CFun3CCs/4i2s2snu9qit+fq1qC+E83U0+gfwo5Fe5X/r8A8o9Y/ApUg9BJU+mdOLpj1qEbnh/AF6GvNagxmvMXmII1tBgbYbfAoCt4nZMCOm2GNax6GzUIreEHr0DjagXb3oY+Q3QYfrhH/UxvevSHexbPRaezPULkW9B1K/1nI/r5u9rjoRsMfRu3vf/a/QStlKYWWQbSWnvaxxv4EupHdbFcMURhiP31ubU0OwNoaWaNgm4bvFdfRC2ujsjYHc1a4cWF4EvvRqbIHYX257EFYN6r9SpIKA8Y0LwqeO2QPwnrwL74DwdPYzVsLBnyiWVHwPCF7ENbHZY2C51nZm4EBOT6RF2WNgqfxT+RazQrCepZjhM182ZuBAfatZddCQVgrvX/A9t9/axnMsvPII8ju3lqwvwetkqUUWgbx34/aV9Ts70M3sdv8eeRAGHoYOh+dyfDUM/sQmq+MGmf2gYG/AXo34Luu8zt2AAAAAElFTkSuQmCC">
                                </h1>
                                Devolução
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-2">
                    <a style="text-decoration: none" href="reforcar-caixa">
                        <div class="card">
                            <div class="card-body bg-primary text-white">
                                <h1>                                
                                    <img src="data:image/png;base64,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">
                                </h1>
                                Reforçar Caixa
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-2">
                    <a style="text-decoration: none" href="sangria">
                        <div class="card">
                            <div class="card-body bg-dark text-white">
                                <h1>
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAMxSURBVGhD7Znfa41xHMc3NmOmaSGkXMivuKIkc4Gbae6UqblBkwu1Oz+iKdLKnaUmQopc4GK24cLd4mLhPxDyo5RcaMhszrw+3+ft7EfPnnOencfp+dbzqnff7/fz6/v5dJ6znbNVZGR4Si6XWzk2Nlapo58wxHFk3GGYapn9guY7aT4P5z5UI7cf0PAZ9T8J7A9ZZiss3dBsW9B2OPhvKjS90OQm9Es9TwsxR5WSPuivigZfB61GQ9wwWqPUdEF/lTTXxXrPxP6LNT0F50O38DcoNd3QaI9rXXD+IZdf0Hi3ZnBwfiOXX9B4h2ZwcB6Uyy/o/WAwQgCD9MjlF/S+IxghgEGuyeUXNN6AnqFR9AE1y+UnvBh+fCTJ+J/wGNShzR5oqVoOh4DtyAdOqeVwCMgGKTOlDcLvggfoahl0Hf3UtWHMfBAKDymsLHDfY10dRkmDDCisKEipJWcLakKNaLFcRUH8heDmUOIPQsERNIhWKywS4rahXjSsEg7OhtVp4Vjw71zE2K8C+4L2G41ajQnEG4QC91mq5I6EOPuGeB79cckRENPLUqvUSIizr9DtLnGc2IN0y1UQG0JpRUH8U5ZZSo+E2NYgK09pg2Bah20360KZHNg2ohGXFANy2lTCgWkOtl2okX3+8eOc3CDsT6Cc7J/RernMd8klxOelStjdddR5FZjdHX0s7hVjn8wgrAvQpDcc57suCdgPyBwL8uxVdO9B9scC6zjYmuRLbJDlMuXB9sQlAfsXMs+EuapxWuc82PbLl+ij1S+z2Y29cpnvtlyxIO+dSliNVWhILvN9ZHHvRfaJDlKD2lEX2imzg3OzUmJBXqdKODivRReR/RhfJnOygxSC2EdKKwri37PUKz2SJAa5IldBCK8n/nmQGQ1xn9AGpRaE2ANK/UfsQb6jfnQOzVPYtJBSTVwH+hpUmAx2++P1DbaLlDItxNgnhcPI/kH01hUYJ94gE6FY0f/XIHY+2oPOosvInvlWtEQhBSH2kK4Oo6RBvimsLHBf/qdkCCUNYp9Cj7Dd97/FPS1o6uM0kZkPkjKyQdJG9CA8lyvQSQ+0VS1nZGQURUXFX9nrLlhkKFxOAAAAAElFTkSuQmCC">                                    
                                </h1>
                                Sangria
                            </div>
                        </div>
                    </a>
                </div>                
                <div class="col-md-2">
                    <a style="text-decoration: none" href="fechar-caixa">
                        <div class="card">
                            <div class="card-body bg-danger text-white">
                                <h1>
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAARcSURBVGhD3ZpdaBRXGIYjUkRMjBaFetEIUYlQ9EZRlEiE1t6IoFURKt5VQVFaFDHe9EKhgl60Riq1BBRBJF7YmxZFBSNWFFQU6x+KpUE0F8b4U2iFmsTnO/POujPObDqbPbtZH3g55/s53zmfuzOZWawpF/39/XUDAwOdKDOsfY3OMh2vcpWDg2wIjlU81NiucpWDc7QGxykeGtmvcpWDc0Qa4VD3Ga4UEjl3GXMM10YWK5QKac1BdsCQGmHxJLSCOiuziDVfoMkqU9lG7CCoV3Uyw9pXaIHVwqxoI1+pRtFQ44DVYhpvZB/DukIiZzdjjqE0sl41ioYaR6wW00gjxVCyRrCPom2D6HulO7BdI4xb5CoaauxxB8sKC+ONfKlQKuTMULoDO/xEpjP/O/Bmh7V2vc11m2SFhYmNMO7APBbTIcUSGzGYf4yW40680w2iRpXJDpumNXJernyeK5baSFlh44loLzqF7ug8DuywkdmYn8W0ULF4I93odIl0GDXZPoNC4gWd4R2IZb5GSg31HzLUartkSJoapCcTNsLYgR7EdF0xr40Y7LHa9kqFhFXKTYR45mvEB+zxo+2VCgk7lZtIXiP2kjQ+pnGKFWyEuH3PP2QaX19QrLE7ZUin7ZUKyceVmAjxUjSy3vKywrpPVMJqPJU7GRLuKTcR4kP+ahEvqhGW1gYVcnykUBQ2GI1eKykR4mEj7ZjxFyH3cRPz0ojB2h6VsTqL5I5CbFaQkg6LXSOF+B+NbFJqZlh7WWWsztdyRyGwRjmpkPMdQ/wPYUTkrGVMhfhttIRp4voCWsq6R4wO5u06ehQCkWf/4Q7nvaijRyHwq3K8wj6/M7Qy2iP/LuSuS8Y2+Uwn5etBO82nNfaDhYP5S4YROv5bCHQFKX5hnxZt6cC+iV7IdJDWqNyf5XJgf2P+EOzcbwIOHGMVKwfN2tbB3jfwuVt3CHaDJRKLvBFix5/Go+/9OOYp5h32+lTbOrDvIHvhyn1NsJuUe1AuB/ZW84dgb1MoAEfBO00pYa+76ICUe5JgfiLPf1W+fxgOydeOnpg/BPuwWgjA8YNiVQXnvqYWAnCcUcw79o+GpjBtZJyDnqF+bPtbYRe5+TczWq7dCGbKNxX9Yv4QbPvERqoN10h3ECoLQ7nY3/lFH1/wxshkonzlomR3LQPfsjDYIl9ZYL/c2x1ze1B9jF4RmiC3NbJQuScY8u9mbebPB9+3YXCjfGWB/fpQr2TfcQfzf/P8/8lt/pfyPZMrAv6OsJH98lUlnP9W2EjSS1LVwPnt0/vAGrmK4r+IVJumuU/lvYCPxd4Mq10jrZH3gXqvjfDdtceP39BfcvnCXyMc/gVDg319mY9C7onWE14bueAuQoFtP1z4wmsjTxnc/x1hHIF9zgX84P0a+RP9hC7J5Yt6+8j7ZFQt9DDWGvlDdlXC+bvcRci8GSPyLlxFPOfsn7tGDIwxaD6B+M+Uw1acdwGqCzqoqXkDtYQGuNN9luEAAAAASUVORK5CYII=">
                                    <img width="30" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAIjSURBVGhD7ZlNSgNBEEaTpYL4s85el3HhAcSVCHoFA7oQBL1C1jmCCrrLXfw5iblBkvF1UiWExEl3dc9MhH5QdNJd/U2/hcxMbGUymUzmXzCdTk+oe6ojU0koimKbzFvqUqaqg4v0qAkXLRhH1LEsRUHcPlmfLtfB5yeGtiynhfBfCYXv0TLELEgozD0zpJUhdElCYf6bMsmwfaWEwtoLQxoZwv6UUFgPlmFbqYRCT7wMIe4PezyPLIc+bxnavSQUeh9lqw0C7iTLCx8Z2oIkHPQPZbsNAjrucJLnheunVsqwbJGYUBcSYccdihpJrhf0O/muRMzgu0ViTPUkIh7ComQYm5dQCDXJUKfUZkgohAfLhFK5hFKlTG0SShUyToLhWi5RHyllGpNQUsg0LqHEyGyMhMKBzuZHC4N9fYloHg5zQH3J2YJgX7KXsyhiJJTGZVJIKOQEv88kQSSCHjvWUbtMFRJKbTJVSiiVy1gk6HfPTn0q6D5D/9L7TBIINb1PMMxudnwOvmkmlyEsSkIRmeDXZoZ4GYK2qGgJhTWTDHUoETYIuJE8L+hf++xEj0XmTbbbIOBKstbiI6GEytA7kK02yGgT4n7pKyVEQgmQ+aB2ZZsdQkplLBIK+7plMqy9M+xJezyEORn36/gCMRIK+1fKJJdQCHUy7v8WM1JIKOQsyFQmoRDuZB6oIXUu00kg+4h6JXdA7ch0JpPJZDI10Gr9AMuAuJcz7Mh4AAAAAElFTkSuQmCC">
                                </h1>
                                Fechar Caixa
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