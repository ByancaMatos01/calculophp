    <?php
    echo "<p>O calculo da área do RETÂNGULO</p>";
    extract($_POST);
        $area=$base*$altura;
        echo"<p> O resultado é: $area u²</p>";
        echo "<a href='area.php'>Voltar</a>";
    ?>

    <?php
    echo "<p>O calculo da área do TRIÂNGULO</p>";
    extract($_POST);
        $area=$baset*$alturat/2;
        echo"<p> O resultado é: $area u²</p>";
        echo "<a href='area.php'>Voltar</a>";
    ?>

    <?php
     echo "<p>O calculo da área do LOSANGULO</p>";
        extract($_POST);
        $area=$Dmaior*$dmin/2;
        echo"<p> O resultado é: $area u²</p>";
        echo "<a href='area.php'>Voltar</a>";
    ?>

    <?php
        echo "<p>O calculo da área do TRAPÉZIO</p>";
        extract($_POST);
        $area=$Bmaior+$bmin*$h/2;
        echo"<p> O resultado é: $area u²</p>";
        echo "<a href='area.php'>Voltar</a>";
    ?>

     <?php
    echo "<p>O calculo da área do QUADRADO</p>";
        extract($_POST);
        $area=$L*$L;
        echo"<p> O resultado é: $area u²</p>";
        echo "<a href='area.php'>Voltar</a>";
    ?>
    <?php
    echo "<p>O calculo da área do CIRCULO</p>";
    extract($_POST);
        $area=$R*$R*3.14;
        echo"<p> O resultado é: $area u²</p>";
        echo "<a href='area.php'>Voltar</a>";
    ?>

