<?php 
try {
    $from = $_POST['formEmail'];
    $phone = $_POST['formNumber'];
    $firstName = $_POST['formFirstName'];
    $lastName = $_POST['formLastName'];
    $comments = $_POST['formComments'];
    $organization = $_POST['formOrganization'];

    if(!empty($from) && !empty($phone) & !empty($firstName) & !empty($lastName) & !empty($comments) & !empty($organization)){
        $to = "sjayroe@exlog-global.com";
        $subject = "New Web Form submission";
        $body = "Web form filled out by: " . $firstName . " ". $lastName . " with " . $organization . "\r\nEmail address: " . $from . "\r\nPhone #: " . $phone . "\r\nComments: " . $comments;
        $headers = "From:" . $from;
        mail($to,$subject,$body,$headers);
        echo "True";
    } else {
        echo "False";
    }
} catch (Exception $e) {
    http_response_code(500);
}
?>