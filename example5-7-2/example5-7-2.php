<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
        $h = [
            "apple" => "リンゴ",
            "banana" => "バナナ",
            "orange" => "ミカン",
            "potato" => "ジャガイモ",
            "tomato" => "トマト"
        ];
        $key = $_POST["english"];
        if (array_key_exists($key, $h)) {
            echo $h[$key];
        } else {
            echo $key . "は、登録されていません";
        }
        ?>
    </body>
</html>