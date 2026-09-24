<style>
    * {
        font-family: Arial;
        color: white;
        padding: 0px;
        margin: 0px;
        user-select: none;
        color: black;
    }

    body {
        display: flex;
        flex-direction: row;
        background-color: #ffffff; /*light mode*/
    }

    div {
        display: flex;
        flex-direction: column;
        position: relative;
        width: fit-content;
        width: fit-content;
        height: fit-content;
        
        padding: 10px 20px;

        gap: 0px;

        margin-left: 20px;
        margin-top: 10px;

        background-color: rgb(0, 0, 0, 0.1);
        border-radius: 1rem;

        box-shadow: 0 5px 17px rgb(0, 0, 0, 0.45);

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