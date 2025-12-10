<?php
    $status = 2;
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php if(10 > 8): ?>
        vusala
    <?php endif; ?>

    <?php
        if (10 > 9) {
            echo "<b>Vusala Salimova</b>";
        }
    ?>

    <table border="1">
        <tr>
            <td>Eltun Mamedov</td>
            <td>100</td>
            <td>
                <?= match($status) {
                    0 => 'qebul olundu',
                    1 => 'Baxildi',
                    2 => 'yola salindi',
                    3 => 'imtina',
                    default => 'namelum'
                }?>
            </td>
        </tr>
    </table>
</body>
</html>