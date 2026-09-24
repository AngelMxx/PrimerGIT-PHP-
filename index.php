<style>
    * {
        font-family: Arial;
        color: white;
        padding: 0px;
        margin: 0px;
        user-select: none;
    }

    body {
        background-color: #1a1a1a;
    }

    div {
        display: flex;
        flex-direction: column;
        position: relative;
        width: fit-content;
        min-width: 200px;
        height: auto;
        padding: 10px 20px;

        gap: 0px;

        margin-left: 10px;
        margin-top: 10px;

        background-color: rgb(255, 255, 255, 0.1);
        border-radius: 1rem;

        transition: all 0.13s ease;
    }
    div:hover {
        cursor: pointer;
        transform: scale(1.04);
    }
    div:active {
        transform: scale(0.99);
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