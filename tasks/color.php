<?php // Write a script that will change the first color of the first character

function changeColor($character, $color)
{
    return " <span style='color: {$color}'>{$character}</span>";
}
?>

<html>
    <head>

    </head>
    <body>
       <?php echo changeColor('Remi Okeowo', 'black'); ?>
    </body>

    <button><?php echo 'Click Me'; ?></button>
</html>