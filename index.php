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
        color: #1fc4e5;
    }
</style>

<?php
echo "<h1>Inicio</h1>";
$x = 10;
echo "<p>$x</p>";

echo "<h1>Primero</h1>";
$x += 5;
echo "<p>$x</p>";

echo "<h1>Segundo</h1>";
$x -= 3;
echo "<p>$x</p>";

echo "<h1>Tercero</h1>";
$x *= 2;
echo "<p>$x</p>";

echo "<h1>Cuarto</h1>";
$x /= 4;
echo "<p>$x</p>";

echo "<h1>Quinto</h1>";
$x %= 3;
echo "<p>$x</p>";