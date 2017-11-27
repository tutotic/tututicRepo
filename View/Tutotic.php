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


        <div class="col-md-3 col-sm-3 col-xs-3">
            <img src="../Imagenes/tutotics.png" alt="">
        </div>

        <div class="col-md-6 col-sm-6 col-xs-6">
            <center>
                <br>
                <br>
                <ol class="breadcrumb">

                    <li>
                        <a href="QuienesSomos.html">
                            <font size='3'> QUIENES SOMOS</font>
                        </a>
                    </li>
                    <li>
                        <a href="Contactanos.html">
                            <font size='3'>CONTACTANOS</font>
                        </a>
                    </li>

                </ol>
            </center>



        </div>



        <div class="col-md-3 col-sm-3 col-xs-3">
            <form action="Redes_Sociales.html">
                <input type="image" src="../Imagenes/Compartir.png">
            </form>
            <!-- Modal -->
            <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel">
                                <center>
                                    <font size="5">
                                        <b>COMPARTIR</b>
                                    </font>
                                </center>
                            </h4>
                        </div>
                        <div class="modal-body">

                            <input type="image" class="img" src="../Imagenes/Facebook.png">
                            <input type="image" class="img" src="../Imagenes/Twitter.png">
                            <input type="image" class="img" src="../Imagenes/Google.png">


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="container">

        <br>
        <br>
        <br>
        <br>
        <table>
            <tr>
                

                <td class="productos">
                    <div class="thumbnail">
                        <input type="image" title="SMART-TV" class="img2" src="../Imagenes/smart-tv.png">
                        <center>
                            <div class="caption">
                                <h4>
                                    <b>SMART-TV</b>
                                </h4>
                                <p>Para acceder a los tutoriales sobre Smart tv pulsa el boton ir</p>

                                <a href="TV.html" class="btn btn-primary" role="button">IR</a>
                            </div>
                        </center>
                    </div>
                </td>

                <td class="productos">
                        <div class="thumbnail">
                            <input type="image" title="TABLET" class="img2" src="../Imagenes/tablet.png">
                            <center>
                                <div class="caption">
                                    <h4>
                                        <b>TABLET</b>
                                    </h4>
                                    <p>Para acceder a los tutoriales sobre tablets pulsa el boton ir </p>
                                    <a href="Tables.html" class="btn btn-primary" role="button">IR</a>
                                </div>
                            </center>
                        </div>
                    </td>


                <td class="productos">
                    <div class="thumbnail">
                        <input type="image" class="img2" title="SMARTPHONE" src="../Imagenes/Smatphone.png">
                        <center>
                            <div class="caption">
                                <h4>
                                    <b>SMARTPHONE</b>
                                </h4>
                                <p>Para acceder a los tutoriales sobre Smartphones pulsa el boton ir</p>

                                <a href="SmartPhone.html" class="btn btn-primary" role="button">IR</a>
                            </div>
                        </center>
                    </div>
                </td>
            </tr>

        </table>




    </div>

    </div>

</body>

</html>
