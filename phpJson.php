<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // $arr = array("shiam" => 30, "sharif" => 29);
        // echo json_encode($arr);

        // $new = array("Sadman", "Ayman", "Subaita");
        // echo json_encode($new);

        $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
        $values = json_decode($jsonobj);
        // var_dump(json_decode($jsonobj));
        // var_dump(json_decode($jsonobj, true));

        foreach($values as $key => $value){
            echo $key . ' - ' . $value . ' ';
        }
    ?>
</body>
</html>