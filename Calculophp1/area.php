<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de area</title>
    <link rel="stylesheet" href="CSS.css">

</head>
<body>

    <div class="Central">
                <p>Retângulo</p>
        <fieldset>
            <img src="imgs/retangulo" alt="">
            <form action="area.act.php" method="Post" enctype="multipart/form-data">
                <p>Base: <input type="number" name="base" id=""></p>
                <p>Altura: <input type="number" name="altura" id=""></p>
                <p><input type="submit" value="Calcular" name="bt-calcular"></p>
            </form>
        <fieldset>
    </div>
    <div class="Central">
       <p>Triângulo</p>
        <fieldset>
            <img src="imgs/triangulo" alt="">
            <form action="area.act.php" method="Post" enctype="multipart/form-data">
                <p> Base: <input type="number" name="baset" id=""> </p>
                <p>Altura: <input type="number" name="alturat" id=""> </p>
                <p><input type="submit" value="Calcular" name="bt-calcular"></p>
            </form>
        <fieldset>
    </div>
    <div class="Central">
            <p>Losango</p>
        <fieldset>
            <img src="imgs/losango.jpg" alt="">
            <form action="area.act.php" method="Post" enctype="multipart/form-data">
                <p>Diagonal maior: <input type="number" name="Dmaior" id=""> </p>
                <p>diagonal menor: <input type="number" name="dmin" id=""> </p>
                <p><input type="submit" value="Calcular" name="bt-calcular"></p>
            </form>
        <fieldset>
    </div>
    <div class="Central">
    <p>Trapezio</p>
        <fieldset>
            <img src="imgs/trapezio.jpg" alt="">
            <form action="area.act.php" method="Post" enctype="multipart/form-data">
                <p>Base: <input type="number" name="Bmaior" id=""></p>
                <p>Base menor: <input type="number" name="bmin" id=""> </p>
                <p>Altura: <input type="number" name="h" id=""></p>
                <p><input type="submit" value="Calcular" name="bt-calcular"></p>
            </form>
        <fieldset>
    </div>  
    <div class="Central">
    <p>Quadrado</p>
        <fieldset>
            <img src="imgs/quadrado.jpg" alt="">
            <form action="area.act.php" method="Post" enctype="multipart/form-data">
                <p>Lado: <input type="number" name="L" id=""></p>
                <p><input type="submit" value="Calcular" name="bt-calcular"></p>
            </form>
        <fieldset>
    </div>  
    <div class="Central">
    <p>Circulo</p>
        <fieldset>
            <img src="imgs/circulo.jpg" alt="">
            <form action="area.act.php" method="Post" enctype="multipart/form-data">
                <p> Raio: <input type="number" name="R" id=""></p>
                <p><input type="submit" value="Calcular" name="bt-calcular"></p>
            </form>
        <fieldset>
    </div>  

</body>
</html>