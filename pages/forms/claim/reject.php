<?php
include('../../../include/connection.php');
if(isset($_GET['reject'])) {
    $approve_id = $_GET['reject'];

    $update = "UPDATE `claim` SET `status` = 'Rejected' WHERE claim_id = '$approve_id'";
    $IsUpdated = mysqli_query($conn, $update);

    if($IsUpdated) {

        $select = "SELECT * FROM claim WHERE claim_id = '$approve_id'";
        $fetch_phone = mysqli_query($conn, $select);
        $row = mysqli_fetch_assoc($fetch_phone);
        $phone = $row['phone'];
        $message = 'Hello Student. Bad news! Your claim has been rejected. You can now retake the exam but make sure you pay before Entering into examination hall.';
        $data=array(
            "sender"=>'+250787959242',
             "recipients"=> $phone,
              "message"=>$message,
            );

                               $url="https://www.intouchsms.co.rw/api/sendsms/.json";
                               $data=http_build_query($data);
                               $username="bahati";
                               $password="bahati123";

                               $ch=curl_init();
                               curl_setopt($ch,CURLOPT_URL,$url);
                               curl_setopt($ch,CURLOPT_USERPWD,$username.":".$password);
                               curl_setopt($ch,CURLOPT_POST,true);
                               curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
                               curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
                               curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
                               $result=curl_exec($ch);
                               $httpcode=curl_getinfo($ch,CURLINFO_HTTP_CODE);
                               curl_close($ch);

                               echo $result;

                               echo $httpcode;
        header("location: participants_list.php?deleteAbsent= Claim has been rejected Successfully ");

}


}

?>