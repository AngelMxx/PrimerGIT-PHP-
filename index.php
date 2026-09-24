<style>
    * {
        font-family: Arial;
        color: white;
        padding: 0px;
        margin: 0px;
    }

    body {
        background-color: #2a2a2a;

    }

    div {
        display: flex;
        flex-direction: column;
        position: relative;
        width: fit-content;
        min-width: 200px;
        height: auto;
        padding: 10px 20px;

        margin-left: 10px !important;
        margin-top: 10px !important;

        background-color: rgb(255, 255, 255, 0.1);
        border-radius: 1rem;

    }

    h1 {
        font-size: 20px;

    }

    p {
        font-size: 15px;
    }
</style>

<?php
$num = 10;
?>


<div>
    <?php
    echo "<h1>Valor inicial</h1>";
    echo "<p>$num</p>";
    ?>
</div>


<div>
    <?php
    echo "<h1>PostIncremento</h1>";
    echo "<p>++$num</p>";
    ?>
</div>

<div>
    <?php
    echo "<h1>Postincremento</h1>";
    echo "<p>$num++</p>";
    ?>
</div>

<div>
    <?php
    echo "<h1>Predecremento</h1>";
    echo "<p>--$num</p>";
    ?>
</div>

<div>
    <?php
    echo "<h1>Postdecremento</h1>";
    echo "<p>$num--</p>";
    ?>
</div>