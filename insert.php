
    <?php
        include("server.php");

        $sex = mysqli_real_escape_string($conn,$_POST["sex"]);
        $name = mysqli_real_escape_string($conn,$_POST["name"]);
        $level = mysqli_real_escape_string($conn,$_POST["level"]);
        $class = mysqli_real_escape_string($conn,$_POST["class"]);
        $number = mysqli_real_escape_string($conn,$_POST["number"]);
        $token = mysqli_real_escape_string($conn,$_POST["token"]);
        $email = mysqli_real_escape_string($conn,$_POST["email"]);

        $namefull = $sex . $name;
        $classroom = $level . $class;

        //check if has a duplicate of Token.
        $select_Token = "SELECT * FROM register WHERE token = '$token' AND active = '0'";
        $select_query = mysqli_query($conn,$select_Token);
        $select_result = mysqli_fetch_assoc($select_query);

        $select_Token_used = "SELECT * FROM register WHERE token = '$token' AND active = '1'";
        $select_query_used = mysqli_query($conn,$select_Token_used);
        $select_result_used = mysqli_fetch_assoc($select_query_used);

        if($select_result){ //Found a same Token and Active's value = 0
            if($select_result["token"] == $token){
               $update = "UPDATE register SET name='$namefull',class='$classroom',number='$number',email='$email', active='1' WHERE token = '$token' AND active = '0'";
               $update_query = mysqli_query($conn,$update);
             if($update_query){
                include "mailer/mailtest.php";
             }
            }
        }else if($select_result_used){ //Found a same Token and Active's value = 1
             // Show Token ถูกใช้ไปแล้ว

             //echo "Token was already used";
             $data["status"] = "0";
             $data["texts"] = "Token ถูกใช้ไปแล้ว";
             echo json_encode($data);
        }else{
             // Show Token ผิด
             // echo "Token not found";
             $data["status"] = "0";
             $data["texts"] = "Token ไม่ถูกอะลองกรอกใหม่ดู";
             echo json_encode($data);
        }

    ?>
