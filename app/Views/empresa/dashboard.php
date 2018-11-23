<!doctype html>
<html lang="pt-BR">
    <head>
        <title>Dashboard</title>
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
            <section class="row text-center">
                <div class="col-md-2">
                    <a style="text-decoration: none" href="caixa">
                        <div class="card">
                            <div class="card-body bg-success text-white">
                                <h1>
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAARcSURBVGhD3ZpdaBRXGIYjUkRMjBaFetEIUYlQ9EZRlEiE1t6IoFURKt5VQVFaFDHe9EKhgl60Riq1BBRBJF7YmxZFBSNWFFQU6x+KpUE0F8b4U2iFmsTnO/POujPObDqbPbtZH3g55/s53zmfuzOZWawpF/39/XUDAwOdKDOsfY3OMh2vcpWDg2wIjlU81NiucpWDc7QGxykeGtmvcpWDc0Qa4VD3Ga4UEjl3GXMM10YWK5QKac1BdsCQGmHxJLSCOiuziDVfoMkqU9lG7CCoV3Uyw9pXaIHVwqxoI1+pRtFQ44DVYhpvZB/DukIiZzdjjqE0sl41ioYaR6wW00gjxVCyRrCPom2D6HulO7BdI4xb5CoaauxxB8sKC+ONfKlQKuTMULoDO/xEpjP/O/Bmh7V2vc11m2SFhYmNMO7APBbTIcUSGzGYf4yW40680w2iRpXJDpumNXJernyeK5baSFlh44loLzqF7ug8DuywkdmYn8W0ULF4I93odIl0GDXZPoNC4gWd4R2IZb5GSg31HzLUartkSJoapCcTNsLYgR7EdF0xr40Y7LHa9kqFhFXKTYR45mvEB+zxo+2VCgk7lZtIXiP2kjQ+pnGKFWyEuH3PP2QaX19QrLE7ZUin7ZUKyceVmAjxUjSy3vKywrpPVMJqPJU7GRLuKTcR4kP+ahEvqhGW1gYVcnykUBQ2GI1eKykR4mEj7ZjxFyH3cRPz0ojB2h6VsTqL5I5CbFaQkg6LXSOF+B+NbFJqZlh7WWWsztdyRyGwRjmpkPMdQ/wPYUTkrGVMhfhttIRp4voCWsq6R4wO5u06ehQCkWf/4Q7nvaijRyHwq3K8wj6/M7Qy2iP/LuSuS8Y2+Uwn5etBO82nNfaDhYP5S4YROv5bCHQFKX5hnxZt6cC+iV7IdJDWqNyf5XJgf2P+EOzcbwIOHGMVKwfN2tbB3jfwuVt3CHaDJRKLvBFix5/Go+/9OOYp5h32+lTbOrDvIHvhyn1NsJuUe1AuB/ZW84dgb1MoAEfBO00pYa+76ICUe5JgfiLPf1W+fxgOydeOnpg/BPuwWgjA8YNiVQXnvqYWAnCcUcw79o+GpjBtZJyDnqF+bPtbYRe5+TczWq7dCGbKNxX9Yv4QbPvERqoN10h3ECoLQ7nY3/lFH1/wxshkonzlomR3LQPfsjDYIl9ZYL/c2x1ze1B9jF4RmiC3NbJQuScY8u9mbebPB9+3YXCjfGWB/fpQr2TfcQfzf/P8/8lt/pfyPZMrAv6OsJH98lUlnP9W2EjSS1LVwPnt0/vAGrmK4r+IVJumuU/lvYCPxd4Mq10jrZH3gXqvjfDdtceP39BfcvnCXyMc/gVDg319mY9C7onWE14bueAuQoFtP1z4wmsjTxnc/x1hHIF9zgX84P0a+RP9hC7J5Yt6+8j7ZFQt9DDWGvlDdlXC+bvcRci8GSPyLlxFPOfsn7tGDIwxaD6B+M+Uw1acdwGqCzqoqXkDtYQGuNN9luEAAAAASUVORK5CYII=">
                                </h1> 
                                Caixa                           
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-2">
                    <a style="text-decoration: none" href="produtos">
                        <div class="card">
                            <div class="card-body bg-primary text-white">
                                <h1>
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAH9SURBVGhD7Zm9SgNREIXjTxUEmwQLsbMWBCtJaeEDaGMtFjaCjXkEWxsrH8BaEBEb0U40lYWNisHKgKWF0eh3d+eGDW42e+N1d5H54DDezZnJHPUGwVIaOp1OFV18ZQjvd4vmZYXfw8wRBp6E47OF921SKrLK72BQPZiaE4Q5pozIOsPBgBqDPoKJAuc7ynUa4X2gmp6X6PMk4b1BHb7uwnFHVnKH/goDnsNRIZwvKWNiGQj+Nenbl0epoGXX9Fnob1Nq8nJ6aPpxLzi30LRYUoF/2CDj9JhvWhfO7veFhp57wRDDsrycGnqGCmKgZwa1ggUEzunvC8a4e3FD2XAVfQdUwzmK9SSJ/kNqDzwbfF/wlTGaH2FhYb82mpWV48GwKP5Cw57bsnI8eGqhtfDUZeV4MPQEIfkpZTVvscceNYpzEOdPm7+APYJPvwgaJFcyC4JvBTXQvYOu0JqMSMT4ZCWL/yDYJvC9hR1u0PeJqjKqL1kFmcT3Hna4Q+/Av98yCWLAt46e0KuDHtGWjEgEn172AA3iGQ1i0SCe0SAWDeIZDWLRIJ7RIBYN4hkNYtEgntEgFg3iGQ1i0SCe0SCW/xSkQTH/vM9V7HFEjeIWpMAkByH5nBgLDXtuysrx4BnFdBbaiwn7NdGUrNwfvCbMAnWpgDK/+mVZNUKp9A28UcMpUZWkCwAAAABJRU5ErkJggg==">
                                </h1>
                                Produtos
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-2">
                    <a style="text-decoration: none" href="clientes">
                        <div class="card">
                            <div class="card-body bg-dark text-white">
                                <h1>
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAASfSURBVGhD7ZptiFVVFIZn1NE+xhjBBpky0QITJvGHkmLU4AQFo5KQ/khkRhBFCQWDGiboRyAYKFi/pGCSILCIIgJ1FKF/WhSIn1iTgqKioyZ9oaIzPWvv10vHe8+dc/Y+w53AB172OXut9e51mbnn7nvOrXtAQQwNDTWhyaheU/8fBgcHl6Bv0HVegIPjO+hHDrsZJyp1dEKTU2jyoOu8CuQMoFdVNrqgsWb0q3odFnLtL/S6ykcPNLVXPWaGmj8YZsii9tBQu28tP9T2ymZkYI169BQLzUNz0VSFyiDWgo65znJC3W1U/Jsf05noE3RJa5WwOfQxmqX0Esw9js4pNRfUdcgmHvzGYLgF3fH26ZBzF23nsEHlDuaez1JfgW5ZxIFRPQ187j2zQ00fw3jZOJj7yEezQ812lceB0TvyzI01LhsH53YZvqVwJsj/UOXhaOG/5Jkbau8yzJGdg7kvfDQb5PeoNBxM3pNfMHjslp2D85UKZYL81SoNB5ND8ovhBiq98fGc5qezQf48lYaBRwMmIVeZMvCZK9t7F48/faQ65F1mGKPSMDCY4twKgIaWytbB+VmFhmOXSsJhsVaZFUGXbB14H9V8VchboJJw8Jnh7eKhoRWydXB+RqFUyOlTehx4NWI26G2jeUG2DmxtZ5sKcdvGx73J/wtmv8k7GDxsy1La+HHcolA1itmW3INFP5NxMHgclp2D8w6FKkJ8P0Ox3+ExXO7cI6Cxt2Xn4HyHQhUh3qnU4sD3IYyv+SXyQ+1N1Cw787PPkKqXXuKJC0Nh4N3tl8gPTW2TjYPzlxRKhZwDDE0qKQ5MH8H8olslB9RcZUg0xNw+H60Oef+gXjRfpcWA4WqtkRlq1qjcwflChXJB3RGtP05WcWD2qbceHnLLbhow/b2PhoHnabRYduHgZf9iR7xtOuQcRxNU5mB6rY8Wwpco7j1Eg295r3TI+UDpDqaeZS74y1kl8PsFPaMl8kPxKnmlQs6bSncwtZy5rLvdzOB5HrVomXxQv9XbpIN52c0Cpsei11DU++R+WOtrLZEdiuze1IA8UiHnFEPqFYb4IvSDz44DH9vHPSbr6pBvn8Z22/MnV50B8nej2bIogxS7T7YO/e4rwsHjOdlWhhzbxq9HJ3xJfqi17/xdjA/LNgHz05UTDPVPyy4JMXsB76LSg5hYzAv1cNioZUowN57YVy4xJ9SdZyjfKRNYhi74tOLB+yJ6Q8uVIDSW+Vwvhvy/UbssPEw8inLfFg2Ftb5luH8fZj0c9xnVIW8falWphwm7GmW6GVAkrNmPnlQbDqbbfDQJefavabtie8ZYdrffCjNtO0YK1rZP6MTlk/ONaANaiuz5y/AfeiS9L8+aQQ+J7yxBYNIvv5pBDxfUTjjyqjm8mLjHaxjcllfNoAcjse3PDQY/y69m0MMxtRMOJu2oZn8V1rY7iq+onTjwa8MseD8VCmvaLyFeVhvFgOE4jFei79BNt9IIgLc9N9+LOjlNPCgtHBaxrcJCtAntRHvQCXQFZdlI3iDPfhhzEvUhey6/Gb2IRtcvf2i2AU2isSfQVB3HXXmCqav7F4jwnVx6WffsAAAAAElFTkSuQmCC">
                                </h1>
                                Clientes
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-2">
                    <a style="text-decoration: none" href="fornecedores">
                        <div class="card">
                            <div class="card-body bg-info text-white">
                                <h1>
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAM1SURBVGhD7ZhNa1NBFIZbqi3BInUhUldSatWKorhwUyjqTggoulFQXIgobhWlChUqKoigli7UhcsKCnYhiH9AEF3a0ioFBV34gVAUFauJz5k5ifm49ya59zqmOA+8nJk575yZc9PQJC0ej8fj+SfkcrkM2p/P54/8TXHGYeJaPTZ9OOAhBziBs76jPj06XSg8r+c4QV4ZPTpdtL4zaOSYHp0uWt8ZvpFaaH1n+EZqofWdUWiEuBJNoJdoNkIvkPjWmQuHofWdwYUKjYzpUl3gf496zaWDUJ8zShp5oEt1w55ptMRcvBL1OKNWI6x/qtAXTRmY3zYXr0TzzuAikY2YS5XAUhveazZrYb5P03/QnDMabURguR3/U+swNeYIPZq22JQ74jQi4F+NPqtN6jwhtGt64TQikD5kXRZqXNTUwmpEYN+4WqXWT8Imk7BL7kjaCJYu9r6yblNvopBwStJGBGy7rNvU+4WWNl0jrJ+qQ2dRTrfInq1N10hMBnwjcfGNRPMfNcKBwj2URd0sdRLXoONoxrrqhz2hjbD2lnCauIEo5yxHg2gMfTWmYKIbYfMHtE0ODgLLYvJXrbs+8Ac2wvwOodMUDoB8H5q07irCG2GTPIEtWkcKyYe2E+gCOoCKX3AYX7a7aoO3qhHG0kSbrBMXMd+DzqMh5vYjCDCXV+i17KkgspEh3S+ec8zLfpFk/oZgGiXKx+xpk6gBvrJGiB8Jy7ROD/MpWS/AXLjJ0DTKOGszZQxIQi5UBmvyanTpxoN2tRpy7wjmEoyP2tVo8GXVf12XLsmcKH+mZU2UQm5Yfa2MZ+1qsdFeKbiT+TNi6S8Xd2WTwDjySZM/KT6G8jRLa1RqBo3iKzzZFeg+GtT5XlMwBPJzqEO9V5DUnETm/EgwZbROKHjG1Z4I6oxoyVDw9Ku9Mdgrb7wftkww5G+pPRHUOaMlo1il9sbhgMh/XOR3qzUR1NmMip9oKyH1XK3xoEA/ki/7VbD+iNCq1sRQ74atXA7r82i72uJDEXlaj7WuFP6GRlFGLalAafnpZxgVHxzjKbRDLelAwW60EQX/2pcS1O9A6+kj/nvC4/F4mpiWlt+cOzuAkZaQFgAAAABJRU5ErkJggg==">
                                </h1>
                                Fornecedores
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-2">
                    <a style="text-decoration: none" href="relatorios">
                        <div class="card">
                            <div class="card-body bg-danger text-white">
                                <h1>
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAQXSURBVGhD7ZpbiA5hGMeXdYwbqyXrfM4FOSU25FSKcqEkx4tVJFxonS+VO7lQy6KUUEg5XrjhQlIuuHAqETnkGLuWaBfL75n5z+4338zY+XZ3vt2t+dW/932f5//OPM/H9803821BSkru1NfX90P70BV0AA1VquNA0SXo3d8MWNeg8bJ0DCj4qOr3QfyaLB0DCn6g2n0Qr5Kl/UO9wyj4o1u6H+L3ZcsPnLC7pjnBvtnok+oOQG6drMnCiRaih+gPeo/KlWoSvBtQnWq2ouvQW80/oi1MO8meHJxoGvplJ86E2GZZfBDvT3oY6sq8wjEL1p/QXKadGPtqS37ghCfdMvwQf4dWoFHyFaNrSlu+SlMH1vZGH+EctC2ggFtuKdHg+YLeaBmA3EWG3jpk/qGAqei9W07zYP8phs46ZP6hgHXop1uOH+K16BC6zrLajUayS4fMLxTXHR1TEQ6sv6Lj6BY6TWiK7HZ9sDfuJFTrmLMgXiprsnAi+xK3Gm1F89Ad1eDA+jEaK3skeHZoSwPEKpVOFk40C/3vQnWeIfabFL+9EIfRUbRU4WShQPucf+VUnAXx32g70+QvVC2FQie7ZQchVyFb+4ZCB6ALqjuMtvmkiQsFdqOB3eibW28QcvbROk5bWh2OPZLTTPHEeixj9HUGQxHaj26is2gTesomH8Q+aGrz72itDtGqcHj7mLYrfADitxl6yNoIwT4kXziuCMjfY5iDutjIehEq1iFaHY49wc4bBfnFsjZCcK/yAci9RWVM8/q1gfPNdAqIgJpWytoIwcvKByA3SLZY4O/FtmVovSdia9FAWWLBvmY1clB5H8Q/yxILthSy56672w/xKhT7RWFLsxoZg37I0wCx3bLEAv9obQ2FfJmsTYI990YMEjPQHfQLvULb8Of0vmDPePc04ZDfKGuTYG9eIx54CjXNmbiNMLX/gnZvXomOZGgn6iVPyxppCRw8ViOMgW++HuROmYdpMo2w167yexjPZYqY3TANNg9j3EYuKRSA3HPzME2mETaW6xgByF2XJ24jVxUKQO6leZgm1ojdS4dCznmEydghGrFb1iiq5WnbRgguR0+QPabxZM+h7F68izztuxFiPQiGPv0wyK0yH2O7b2SIm4rEuWliY9qIB/m0kWzwpY2kjXiQTxvJBl/aSNqIB/m0kWzw+RshUKRcKOSdX2MZjygUgNwbeYYrFAr5NfKdUSgAuUfmYTrRjYSDb4n5fBA8obwP4q9RiTzTUY1SDRAzdpqHpT3mDL37I/4MFelY81HYUxv7Xd75V2Np9/U33Iwf4g+Qc2/vg5wVYI8oF2RoZraZdV/i9ti0wUfM+bnZg1hnYpOyPKWopywOrO2XL/sNPdPn+xMmYtbM1CyPvaAZf1FRUPAPs7numEf34EUAAAAASUVORK5CYII=">
                                </h1>
                                Relatórios
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-2">
                    <a style="text-decoration: none" href="configuracoes">
                        <div class="card">
                            <div class="card-body bg-secondary text-white">
                                <h1>
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAUXSURBVGhD1ZppiFZVGMdnXLLFLbIiKitMyA+GDIWpVFgQLWSKiKXfSgdLUCSigWxFK4qolKBAosI2+6BBX1pcwC9KLmUuKaih4gKCUkmiOdPvuec/Z+a+573vvZP3PfPOD/6ce57lPM+FO3c57zT1Nh0dHbe1t7c/z9gskwdbf3zz0bUyNR40NxT9hNppuIPhKbk82BbJdxZ9zuEAuRoHmupHc39aowbHJ9HVcttJ3IT+ktv8B+VqPGhurfrsZAO2Zeh9tFm2BOYrldZ40NxS9ZkLsfOU1ljQ2wia2+TazIfYLxguUXrvQAODaeR7xjcZpyC7/lOXThHIWckwnPFB9Cr6WCXiQMG5rpWLh7WSu1wnTO9WmfpDsV9UNxNitjHMYLyRcSTjXHQocdaAmK9Upv5QbDo6qtoB+Oyyu1ThHuxXod9cVAi+w+hRhceBunZtf4gqL41/0PUKC8B3l0I92C6gD9BQhcWH4ufVTwLzH+TKhJjUJcZ8s1y9Aw0MUi8ebLnXOGFbXLSDnB1y9Q40cB06p34S8poiZCA6nQQLcuzvJv4zhaLNqJUGTlkjlWC/X6EBuFtdVBpydqN4t16Dgj+qflXwn0AtCvdgewidUVgAPuMdhdcfitnrRU2IsZvAKsaF6Dlkt+RciFuqMj2H5GvQ/goNkTsA332qa4WPoMq33kKQdwatR39rbic/UmV6Dgvcawt1B9sEuQNwN+N/DPnnBbZXksSCkHsOTVHuADSO+bRksf8LCzydrJ6mVe7CsM57ys2F2OALMhfy7F3nEU0D8C1zy3eBbbncAfgeIORmTT3Y7fO1EMTOV1oxyLGTsGvesNeAy+TyYFvvlu8C20a5PZgHYn8bGX8wT50MtiNJsmD+JGpBt6N3ZU5g/qXS8iE+OQmX6mC+i8GuR/sDfwMddJ4QfAcY7Nq/kuPR6OfEIZj7k+F4lLM6mK9JmhCYLsfma1muXPkQvER5KbDbLkbm/bwSYk8hv7HQHexvWS0OrdF5aAfHpxmDF0dsDyNjHXpC5ny0+B4rWA9Yey+6QuU82G7QYUAtX01IvBOl3ofKgDXPo/EqEwcKvqj6pcGaL2n5eFC0RfUzIeYA+hatQXtlzoSY0Vo+HhT9RvUD8O1BkxXqwTYB/aqwAHwrFBoHag6j6FlXPg12u8MMU2gAPtv2qbpXhd22P4Pv8lKhgH1PT0RzUNWnLXb7Yx2jlEyIGYWybhaf4LOH3niOhyulHFg09XTNgrjvlJILsauVVhPijjEMVtrF4ZbMh6KF7zqEt7msQmReqj1Ci+XCiSxSSi7ELlRaEaKfyEdKyYXY5UorQmknMpXCi9HXaBdK7Tt1gt12CnPvOsQNQlW3OrHbx9FOZLWs5jTM/ZVaLiw+1pUNwfe6wjIh5mWFB+C7VWFxoODvqp0Cu2132h9yP4V6sNnnrG0c/GuxlWDfqtB4ULTmzwD4t6Nn0CQ0EZPtWdX80Qb/LC0fD4reo/qlwZp3aPk4UNB+Nk59JZYBa+5jKOfhVwQKfuZKlw9rf6oy9YVCj6tm3aDGbJWrHxRZoHopsK9Ar3GY2hWvBnEnGdoYbffkgrN2ge1ZlasvVkg1rehx5Pe3OB6CZqLgRRObPTDtN0C/fcTxZNT94dgmVxwobiezCo2QKQX+4FUfW9UfbHDZJ4LFxz2JItDY4qT7bmB7Qe6+A01PV/8ebMkGc5+Cpseofw+2W+TuO9C3/a43o0LBP47Fo6npP3V5YL9OwNhsAAAAAElFTkSuQmCC">
                                </h1>
                                Configurações
                            </div>
                        </div>
                    </a>
                </div>
            </section>

            <div class="row mt-5 pt-5">
                <div class="col">
                    <div class="card">
                        <div class="card-header border-danger text-danger">
                            <img width="30" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAOwSURBVGhD7VlNaNRAFF7//1FERUXoQa27M9sqhjaTbWXVi0VvQhX0olLxIHjzB6WCRQreFKGiqAiKh+pBrVak7Ga3tIVivXkUFX9AEA9SFVt/6jfpa5tZ0022uy0J5IOPJfPmvbwv82Yyk42ECBFQpIxY2VAkMo0ugwlT8OOmwf+Cd/o0bRY1BwsZgzeDQ6MUrK29bt0cMgcDGZ2fUUQQMTIPW+vrZ1A3fwPl1OAkYpSC36Su/kVWRDcj0Z+OAmzMCnaEXPwHM5mciXnwyinxXKLEBjqrouXk6i/IJdYU7BISbSV+HkncRssGIbd6BFtKrv4GSuyBXYRpsO9kChYyBmvJEfKaTMECEm9UhfBeMgULps4O2IXIUiNTsGDqfGuOkGtkChbkqoR50oUl+Td+32cSsZ1kCiYCsyUJMZkwk2xhWq/Q/E6ziq2klJ2BJbNWWWl8SryjTlHKzgiFTDGLFyLYfRycrk46DXYd/OGYA1icEMH7qduUAHuzdsc8wKKE4El1UjdP6NO0+TgJVqcNviMteE1n7ablZPIEJHveKQ/JiQkR7JfcuWb02HrqlhdZgydwo0fyFGiPg2v5Wag3I+J7vHznkq8C+OEQxgaHtzn2WIUKEfyePMKSOS9kcujfhGT/KDEcKIXKESPXvLCO0Eb8WI5/oSPCWsjkCilC9XVlB8RPJ/e8wIjss/sWLcQ04lGcy+vM5MYl1GTBNKJxWYKqrzsx7xoohIWXjM3OGmy7nFP28iupEDzxE7LOqf1TRucxMkUg7qLq55Wsj0JYcwLxX4zaBGsbGbGSCelKbFiEYMqEg7C7lhMgVzTF5pVyIaE5iJE4mmuXK560lVLIarXd4lPLCcCNnjvYPdFMls0djsFP59qyOt9L8UtZWuzxWCCUmM53k0nabqt+Hin4WwoRSSX4Wlz3j9nZh5G5WFIh8ku6XAatj3AJvo2aLchjrOrnmc0UwkIqUbEBSV6AoKbslugqai6tEDdgnjxRffMTybzr0LTF5J4XpRByhUyukElhtLpVf2dC9MdUTYyTqyuw1dmv+E9AyDc5NzAnzvUIMY+6jQv5rxRu0oj+X9Q4w0T7AMTeMLXyZeQyLqydghE/hPu3wfeNGqdgITYW8L/Gs8rKBWkjvgtJnIXvZVnzsjy6jcoV1MUVSPbgfzkQixKCp/mVuk0JZCU45SFZpBA2aCbYYZRb/aQTO2TcUyknO4srLR8xFOI3uguprliDGj3pd5o1UUEphwgRwhMikX/vGzdOuMbV8wAAAABJRU5ErkJggg==">
                            Contas a Pagar
                        </div>
                        <div class="card-body"></div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-header border-success text-success">
                            <img width="30" src="data:image/png;base64,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"> 
                            Contas a Receber
                        </div>
                        <div class="card-body"></div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>