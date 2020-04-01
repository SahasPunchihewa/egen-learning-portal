<?php

include("db.php");

$error_count = 0;

$url = "https://makemeapassword.ligos.net/api/v1/alphanumeric/plain";

//  Initiate curl
$ch = curl_init();
// Will return the response, if false it print the response
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Set the url
curl_setopt($ch, CURLOPT_URL,$url);
// Execute
$result=curl_exec($ch);
// Closing
curl_close($ch);

$sql = "Insert INTO user(userName, userPassword, userType, userMail) VALUES('".$_POST['sName']."','".$result."','".$_POST['sGrade']."','".$_POST['sMail']."')";

if (mysqli_query($conn, $sql)) {

} else {
    $error_count += 1;
    echo "Error: " . $sql . "<br>" . $conn->error;
}

if($error_count==0){

    $ch = curl_init();

    $headers = array(
        'Authorization: Bearer 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',
        'Content-Type: application/json'
    );

    $data = array(
        "personalizations" => array(
            array(
                "to" => array(
                    array(
                        "email" => $_POST['sMail']
                    )
                    ),
                    "dynamic_template_data" => array(

                            "username" => $_POST['sMail'],
                            "password" => $result
                    ),
            )
        ),
        "from" => array(
            "email" => "hello@kushan.info",
            "name" => "EGEN Institute"
        ),
        "template_id" => "d-6539b72230d24a80839215a7e07131fe"
    );

    

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://api.sendgrid.com/v3/mail/send");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($ch);
    curl_close($ch);

    echo $response;
}


?>