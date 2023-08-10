<?php

// include('connect.php');

// if(isset($_POST['save_debit'])){
//     $created_date=$_POST["created_date"];
//     $action_done=$_POST["action_done"];
//     $debit_amount=$_POST["debit_amount"];
//     $details=$_POST["details"];
//     $reference_number=$_POST["reference_number"];
//     $check_number=$_POST["check_number"];
//     $charge=$_POST["charge"];


//     $check_duplicate= "SELECT Check_Number FROM management where Check_Number=$check_number";
//     if($result=mysqli_query($conn,$check_duplicate)){
//         $sum_credit="SELECT SUM(Credit) as sum_of_credit,SUM(Debit) as sum_of_debit, SUM(Charge) as sum_of_charge FROM management";
//         if(mysqli_num_rows($result)>0){
//             header("location: ../forms/advanced.php?duplicated= Check Number: $check_number is already exist in Database, Try new check number. ");
//         }
//         else if($check_comparison= mysqli_query($conn, $sum_credit)){
//             while($res=mysqli_fetch_assoc($check_comparison)){
//                 $sum_bank_debited=$res['sum_of_debit'];
//                 $sum_bank_credited=$res['sum_of_credit'];
//                 $sum_bank_charge=$res['sum_of_charge'];
//                 $sum_debited_and_charged=$sum_bank_debited + $sum_bank_charge;
//                 $total_sum_on_bank=$sum_bank_credited - $sum_debited_and_charged;
//                 $total_for_inserted=($debit_amount + $charge);

//                 if($total_for_inserted > $total_sum_on_bank){
//                     header("location: ../forms/advanced.php?credit_less= Debit amount : $debit_amount$,their charge: $charge$, their Total = $total_for_inserted$ ,and  is Greater than Bank Balance: $total_sum_on_bank$. ");
//                 }
//                 else{
//                     $query= "INSERT INTO management(`Date`,`action`,`Debit`,`Details`,`Ref`,`check_Number`,`Charge`)
//                     VALUES ('$created_date','$action_done','$debit_amount','$details','$reference_number','$check_number','$charge')";

//                     $insert=mysqli_query($conn,$query);
//                     if($insert == true){
//                         header("location: ../forms/advanced.php?debit_success= Your Debit Amount of  : $debit_amount$ with Refference number: $reference_number Saved Successfully.");
//                     }
//                     else{
//                         echo"Something Went Wrong!, Record not saved, try again later.";
//                     }

//                 }


//             }

//         }



//             }



// }




?>