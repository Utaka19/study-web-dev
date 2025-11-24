<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
        $a = array("リンゴ", "バナナ", "ミカン", "ジャガイモ", "トマト");
        echo "<table style='border:1px solid'>\n";
        for ($i = 0; $i < count($a); $i++) {
            echo "<tr><td>" . $a[$i] . "</td></tr>\n";
        }
        echo "</table>"
        ?>
    </body>
</html>