<!DOCTYPE html>
<html>


<head>



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">



    <link rel="stylesheet" type="text/css" href="Style.css">


    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>

    <meta charset="utf-8" />
    <title>Practica bootstrap</title>
</head>

<!-- LE DAMOS COLOR AL FONDO DE LA PANTALLA(BODY)-->

<body>

    <div class="container" style="background-color:#002b36;">
        <center>
            <br>



            <font ui-ref="mail" style="
                        text-shadow: 0 1px 0 #ccc, 
                        0 2px 0 #c9c9c9,
                        0 3px 0 #bbb,
                        0 4px 0 #b9b9b9,
                        0 5px 0 #aaa,
                        0 6px 1px rgba(0,0,0,.1),
                        0 0 5px rgba(0,0,0,.1),
                        0 1px 3px rgba(0,0,0,.3),
                        0 3px 5px rgba(0,0,0,.2),
                        0 5px 10px rgba(0,0,0,.25),
                        0 10px 10px rgba(0,0,0,.2),
                        0 20px 20px rgba(0,0,0,.15);
                        color: #fff;
                        font-size: 80px;
                        font-family: Impact; 
                        opacity: 0.8;  ">CONTACTANOS</font>
        </center>

    </div>
    <div class="container">
        <center>
            <table>
                <tr>
                    <td>
                        <form action="Tutotic.html">
                            <input type="image" class="punteros" title="Volver" src="../Imagenes/PunteroIzq.png">
                        </form>
                    </td>
                    <td>
                        <form action="Tutotic.html">
                            <input type="image" class="punteros" title="Volver" src="../Imagenes/home.png">
                        </form>
                    </td>
                </tr>
            </table>
        </center>
    </div>

    <br>

    <div class="container">
        <!--****************************************************************************-->
        <div id="fb-root"></div>
        <script>
            (function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.10";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>

        <!--****************************************************************************-->
        <!--COMENTARIOS-->
        <font>
            <h4>
                <b>Dejanos tu comentario</b>
            </h4>
        </font>
        <br>
        <br>
        <div class="fb-comments" data-href="http://localhost/Tutotic/View/Contactanos.html" data-width="100%" data-numposts="1">
        </div>
    </div>

</body>