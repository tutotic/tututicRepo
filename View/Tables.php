<!DOCTYPE html>
<html lang="en">

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

<body>
    <div class="container" style="background-color: #4285F4;">

        <div class="col-md-3 col-sm-3 col-xs-3">
            <img src="../Imagenes/tutotics.png" alt="">
        </div>
        <div class="col-md-6 col-sm-6 col-xs-6">
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
                opacity: 0.8;  ">TABLETS</font>
            </center>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-3">

        </div>


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


    <div class="container">
        <div class="col-md-12 col-sm-12 col-xs-12">

            <br>
            <br>
            <table>
                <tr>
                    <td class="productos">

                        <div class="thumbnail">
                            <input type="image" href="Tables.html" class="img2" id="1" src="../Imagenes/tabletsony.png">
                            <center>
                                <div class="caption">
                                    <h4>
                                        <b>Sony</b>
                                    </h4>
                                    <p>Tutorial</p>

                                    <a href="TbSony.html" class="btn btn-primary" role="button">IR</a>
                                </div>
                            </center>
                        </div>

                    </td>
                    <td class="productos">

                        <div class="thumbnail">
                            <input type="image" class="img2" src="../Imagenes/Samsung7.7Tablet.png">
                            <center>
                                <div class="caption">
                                    <h4>
                                        <b>Samsung</b>
                                    </h4>
                                    <p>Tutorial</p>

                                    <a href="TbSamsung.html" class="btn btn-primary" role="button">IR</a>
                                </div>
                            </center>
                        </div>

                    </td>
                    <td class="productos">

                        <div class="thumbnail">
                            <input type="image" class="img2" id="3" src="../Imagenes/LG_G.png">
                            <center>
                                <div class="caption">
                                    <h4>
                                        <b>LG</b>
                                    </h4>
                                    <p>Tutorial</p>

                                    <a href="LG.html" class="btn btn-primary" role="button">IR</a>
                                </div>
                            </center>
                        </div>

                    </td>
                </tr>

            </table>

            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel">
                                <font size="5">
                                    <b> QUIENES SOMOS </b>
                                </font>
                            </h4>
                        </div>
                        <div class="modal-body">
                            <font size="5">Contenido aqui.......</font>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>

                        </div>
                    </div>
                </div>
            </div>
            <center>
                <div>
                    <table>
                        <label for="4">
                            <h3> Otros</h3>
                        </label>
                        <td>

                            <input type="image" id="4" src="../Imagenes/otros.png" style="width: 400px;">
                        </td>
                    </table>

                </div>
            </center>
        </div>

</body>

</html>