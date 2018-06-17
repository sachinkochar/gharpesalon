<?php 
    require('config.php');
    require('db_queries.php');
    require('creds.php');
//  facebook login
if(($_POST['check']) && $_POST['check']==='member_purchase'){
    $uid=$_COOKIE['id'];
    $mem_id=$_POST['mem_id'];
    $select_q="SELECT * FROM users_meta where user_id=".$uid;
    $select_q=$conn->query($select_q);
    if($select_q->num_rows > 0){
        $user_data = mysqli_fetch_array($select_q);
        session_start();
        $_SESSION['address1']=$user_data['address'];
        $_SESSION['phone1']=$user_data['phone'];
        $_SESSION['city1']='Chandigarh';
        $_SESSION['mem_id']=$mem_id;
        echo '1';
    }else{
        echo '0';
    }
}
if(($_POST['check']) && $_POST['check']==='update_phone'){
    $phone= $_POST['phone'];
    $address= $_POST['address'];
    $uid=$_COOKIE['id'];
    $mem_id=$_POST['mem_id'];
    $update_query="UPDATE users_meta set phone='".$phone."', address='".$address."' where user_id='".$uid."'";
    $update=$conn->query($update_query);
    if($update){
        session_start();
        $_SESSION['address1']=$address;
        $_SESSION['phone1']=$phone;
        $_SESSION['city1']='Chandigarh';
        $_SESSION['mem_id']=$mem_id;
        echo '1';
    }else{
        echo '0';
    }
}
if(isset($_POST['check']) && $_POST['check']==='fblogin'){
    $type=$_POST['type'];
    $name= mysqli_real_escape_string($conn,$_POST['name']);
    $email= mysqli_real_escape_string($conn,$_POST['email']);
//  $address= mysqli_real_escape_string($conn,$_POST['address']);
//  $referral_code=mysqli_real_escape_string($conn,$_POST['referral']);
//  $referral_check=$_POST['referral_c'];
    $signup_points=SIGNUP_POINTS;
            
    
    $check=check_existance($conn,'users','email',$email);
    if($check == True){
        $get_data=select_query($conn,'users','email',$email);
    
        if($type=='facebook'){
                        $login=setLogin($get_data['id'],$get_data['name'],'1','');  
                }else if($type=='google'){
                        $login=setLogin($get_data['id'],$get_data['name'],'','1');
                }
        if($login== TRUE){
            echo '1';
        }
    }else{
        $query = "INSERT INTO users (name, email)
            VALUES ('$name', '$email')";
        if($conn->query($query) === TRUE){
            $user_id=$conn->insert_id;
            $new_referral=generate_referral($user_id,$email,'');
            $query_updata = "INSERT INTO users_meta (user_id,points,referral_code)
            VALUES ($user_id,$signup_points,'$new_referral')";
            if($conn->query($query_updata) === TRUE){
                if($type=='facebook'){
                    $login=setLogin($user_id,$name,'1','');    
                }else if($type=='google'){
                    $login=setLogin($user_id,$name,'','1');
                }
                
                if($login== TRUE){
                    echo '1';
                }    
            }else{
                $last_id=$conn->insert_id;
                $query="DELETE FROM users where id='".$last_id."'";
                $result=$conn->query($query);
                echo  '2';
            }

        }
    }
    
    
    
}

// facebook login ends
//login script
if(isset($_POST['check']) && $_POST['check']==='login'){

    if(isset($_POST['email']) && !empty($_POST['email'])){
        if(isset($_POST['password']) && !empty($_POST['password'])){    
            $email= mysqli_real_escape_string($conn,$_POST['email']);
            $password= mysqli_real_escape_string($conn,$_POST['password']);
            $login=signin($conn,$email,$password); 
                if($login === FALSE){
                    echo 0;
                }elseif($login === TRUE){
                    echo 1;
                }elseif($login ==='notExists'){
                    echo 2;
                }
        }else{
            echo 2;
        }
    }
    else{
        echo 2;
    }
}
//login script ends


//signup ajax sript
if(isset($_POST['check']) && $_POST['check']==='signup'){
    $name= mysqli_real_escape_string($conn,$_POST['name']);
    $email= mysqli_real_escape_string($conn,$_POST['email']);
    $phone= mysqli_real_escape_string($conn,$_POST['phone']);
    $address= mysqli_real_escape_string($conn,$_POST['address']);
    $password= mysqli_real_escape_string($conn,$_POST['password']);
    $referral_code=mysqli_real_escape_string($conn,$_POST['referral']);
    $referral_check=$_POST['referral_c'];
    if($referral_check==true){  
     $register=signup($conn,$name,$email,$phone,$address,$password,$referral_code); 
    }else{
     $register=signup($conn,$name,$email,$phone,$address,$password); 
    }

     if($register['message']==='Email' && $register['result']===0){
        echo 0;
     }
     elseif($register['message']==='Phone' && $register['result']===0){
        echo 2;     
     }elseif($register['result']===1){
        echo 1;
     }elseif($register['message']==='Referral' && $register['result']===0){
        echo 3;
    }elseif($register['message']==='Retry' && $register['result']===2){
        echo 4;
     }

}

//signup ajax sript ends



//update profile ajax sript
if(isset($_POST['check']) && $_POST['check']==='update_profile'){
    $uid= mysqli_real_escape_string($conn,$_POST['uid']);
    $name= mysqli_real_escape_string($conn,$_POST['name']);
    $email= mysqli_real_escape_string($conn,$_POST['email']);
    $phone= mysqli_real_escape_string($conn,$_POST['phone']);
    $address= mysqli_real_escape_string($conn,$_POST['address']);
    $update=update_table($conn,'users',$name,$email,$phone,$address,'id',$uid); 
    if($update === TRUE){
        echo 1;
    }else{echo 0;}
   //   if($register['message']==='Email' && $register['result']===0){
   //       echo 0;
   //   }
   //   elseif($register['message']==='Phone' && $register['result']===0){
        // echo 2;      
   //   }elseif($register['result']===1){
   //       echo 1;
   //   }

}

//update profile ajax sript ends

//Change Password
if(isset($_POST['check']) && $_POST['check']==='change_pass'){
    $uid= mysqli_real_escape_string($conn,$_POST['uid']);
    $current_pass= md5(mysqli_real_escape_string($conn,$_POST['current_pass']));
    $new_pass= md5(mysqli_real_escape_string($conn,$_POST['new_pass']));
    $update=update_pass($conn,$uid,$current_pass,$new_pass);
    if($update === TRUE){
        echo 1;
    }else{echo 0;}

}
//Change Password


 ?>