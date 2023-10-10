<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raspberry Tests</title>
</head>
<body>
    <?php
        echo "Hello, world";
        // require_once "../libs/math.php";
        // require_once "../libs/webshipper.php";
        // require_once "../libs/jwt.php";
        // require_once "../libs/webui.php";
        // require_once "../libs/requests.php";
        // require_once "../libs/numpy.php";
        require_once "../libs/json.php";


        $a = [0, 1, 2, 3, 4];
        $b = [5, 6, 7, 8, 9];

        
        $strng = JSON::stringify($a);
        print_r($strng);
        // $np = Numpy::dot($a, $b);
        // print_r($np);

        
        
        // $payload = array(
        //     "userId" => 1,
        //     "name" => "raspberry",
        //     "isAdmin" => true,
        // );

        // $token = jwt::sign($payload, 'raspberryweb', array('expires_in' => 3600));
        // $token = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VySWQiOjEsIm5hbWUiOiJyYXNwYmVycnkiLCJpc0FkbWluIjp0cnVlfQ==.OfpBduffr2JnPcpiR6_b3rbOVThTIiFdA1x7lJTgqZo";

        // if(jwt::verify($token, 'raspberryweb')){
        //     echo "<pre>";
        //         print_r("Authorized");
        //     echo "</pre>";
        // }else{
        //     echo "Unauthorized";
        // }

        // $res = Request::get("http://127.0.0.1:33455/v1/login", ['email' => 'emmafikayomi2004@gmail.com']);

        // echo "<pre>";
        //     print_r($res);
        // echo "</pre>";

        // $res = Webshipper::ship("files.000webhost.com", 21, "raspberryframework", "raspberry");
        // print_r($res);
        // echo Input::text("firstname", "Firstname");
    ?>
</body>
</html>