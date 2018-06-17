<?php
function signup($conn,$name,$email,$phone,$address,$password,$referral_code=''){
	$to_reffer=false;
	$signup_points=SIGNUP_POINTS;
	$referrer_id='';
	$password=md5($password);
	if($referral_code!==''){
		if(check_existance($conn,'users_meta','referral_code',$referral_code) === FALSE){
			$test=array(
			'result'=> 0,
			'message'=> 'Referral'
			) ;
			return $test;
		}else{
			$data=select_query($conn,'users_meta','referral_code',$referral_code);
			$to_reffer=true;
			$reffering_points=REFFERING_POINTS;
			$reffered_points=REFFERED_POINTS;
			$referrer_id=$data['user_id'];
		}
	}
	if(check_existance($conn,'users','email',$email) === TRUE){
		$test=array(
			'result'=> 0,
			'message'=> 'Email'
			) ;
		return $test;
	}elseif(check_existance($conn,'users_meta','phone',$phone) === TRUE){
		$test=array(
			'result'=> 0,
			'message'=> 'Phone'
			) ;
		return $test;
	}else{
	 	$query = "INSERT INTO users (name, email,password)
	    	VALUES ('$name', '$email','$password')";
	    if($conn->query($query) === TRUE){
	    	$user_id=$conn->insert_id;
	    	$new_referral=generate_referral($user_id,$email,$phone);
	    	$query_updata = "INSERT INTO users_meta (user_id,phone,address,points,referral_code)
	    	VALUES ($user_id,'$phone','$address',$signup_points,'$new_referral')";
	    	// echo $query_updata;
	    	if($conn->query($query_updata) === TRUE){
	    		if($to_reffer==true){
	    			$update_query=select_query($conn,'users_meta','user_id',$referrer_id);
	    			$referrer_total=$update_query['points'] + $reffering_points;
	    			$update_points= query_update($conn,'users_meta','points',$referrer_total,'user_id',$referrer_id);
	    			// echo $update_points;
	    			if($update_points == TRUE){
		    			// $query_insert = "INSERT INTO refferal (user_reffering,user_reffered,date_joined,reffering_points,reffered_points)
		    			// VALUES ('$referrer_id','$user_id',now(),'$reffering_points','$reffered_points')";
		    			
		    			$query_insert = "INSERT INTO refferal (user_reffering,user_reffered,date_joined,reffering_points)
		    			VALUES ('$referrer_id','$user_id',now(),'$reffering_points')";
		    			if($conn->query($query_insert) === TRUE){
							$set=setLogin($user_id,$name,'');
							if($set==TRUE){
								$test=array(
									'result'=> 1,
									'message'=> 'Done'
									) ;	
								return $test;		
							}
						}
	    			}
	    		}else{
	    			$set=setLogin($user_id,$name,'');
					if($set==TRUE){
		    			$test=array(
									'result'=> 1,
									'message'=> 'Done'
									) ;	
						return $test;
					}
	    		}
	    	}else{
	    		$last_id=$conn->insert_id;
	    		$query="DELETE FROM users where id='".$last_id."'";
	    		$result=$conn->query($query);
	    		$test=array(
								'result'=> 2,
								'message'=> 'Retry'
								);	
	    		return $test;
	    	}
	    }
	}
    }
    function setLogin($user_id,$name,$fbStatus='',$gStatus=''){
        if($fbStatus != ''){
			setcookie('logged_fb',TRUE,time() + (86400 * 30),"/") ;
    	}
    	if($gStatus != ''){
			setcookie('logged_g',TRUE,time() + (86400 * 30),"/") ;
    	}
		setcookie('logged_in',TRUE,time() + (86400 * 30),"/") ;			
		setcookie('id',$user_id,time() + (86400 * 30),"/") ;
		setcookie('username',$name,time() + (86400 * 30),"/") or die('cookie not set user name');
        session_start();
        $_SESSION['id1']=$user_id;	
        $_SESSION['username1']=$name;	
		return TRUE;
    }

    function generate_referral($uid,$email,$phone){
    	$em=strtoupper(substr($email,0,3));
    	$referral= 'JAX'.$uid.$em;
    	return $referral;
    }
    function signin($conn,$email,$password){
    	$password=md5($password);
    	// echo $password;
    	$check=check_existance($conn,'users','email',$email);
    	if($check === FALSE){
    		$result='notExists';
    		return $result;
    	}else{
			$check= check_existance($conn,'users','email',$email,'password',$password);
			if($check=== FALSE){
				return FALSE;
			}else{
				$get_data=select_query($conn,'users','email',$email);
				$login=setLogin($get_data['id'],$get_data['name'],'');
				if($login== TRUE){
	    			return TRUE;
				}
			}
		}
    }


    function check_existance($conn,$tblname,$para,$value,$para2='',$value2=''){
    	if($para2==='' && $value2===''){
			$check="SELECT * FROM ".$tblname." WHERE ".$para."='".$value."'";
			$result=$conn->query($check);
    	}else{
    		$check="SELECT * FROM ".$tblname." WHERE ".$para."='".$value."' and ".$para2."='".$value2."'";
			$result=$conn->query($check);
    	}
		if($result->num_rows > 0){
			return TRUE;
		}else return FALSE;
    }

    function update_table($conn,$tblname,$name,$email,$phone,$address,$condition,$cond_value){
			$check="UPDATE ".$tblname." set name='".$name."',email='".$email."' WHERE ".$condition."='".$cond_value."'";
			// $check="UPDATE table ".$tblname." set name='".$name."',email='".$email."',phone='".$phone."',address='".$address."' WHERE ".$condition."='".$cond_value."'";
			$result=$conn->query($check);
			if($result === TRUE){
				$check2="UPDATE users_meta set phone='".$phone."',address='".$address."' WHERE user_id='".$cond_value."'";
				$update_meta=$conn->query($check2);
				if($update_meta===TRUE ){
					return TRUE;
				}
			}
    }

    function update_pass($conn,$uid,$current_pass,$new_pass){
    	$check=check_existance($conn,'users','id',$uid,'password',$current_pass);
    	if($check === TRUE){
    		$update="UPDATE users set password='".$new_pass."' where id='".$uid."'";
    		$update_pass=$conn->query($update);
    		if($update_pass===TRUE){
    			return TRUE;
    		}
    	}elseif($check===FALSE){
    		return FALSE;
    	}
    }

    function select_query($conn,$tblname,$para,$value){
    	$query="SELECT * FROM ".$tblname." where ".$para."='".$value."'";
    	$result= $conn->query($query);
    	return $result->fetch_assoc();

    }

    function query_update($conn,$tblname,$para,$value,$cond,$cond_value){
    	$query="UPDATE ".$tblname." set ".$para."='".$value."' where ".$cond."='".$cond_value."'";
    	// echo $query;
    	$result= $conn->query($query);
    	// echo $result;
    	return $result;

    }

    function select_all($conn,$tblname){
    	$query="SELECT * FROM ".$tblname;
    	$result= $conn->query($query);
    	return $result;

    }

    function getUserData($conn,$uid){
    	$getuserdetails=select_query($conn,'users','id',$uid);
  		$details= $getuserdetails;
  		$getusermeta=select_query($conn,'users_meta','user_id',$uid);
  		$usermeta= $getusermeta;
  		$allData= array(
  			'uid' => $details['id'],
  			'name' => $details['name'],
  			'email' => $details['email'],
  			'phone' => $usermeta['phone'],
  			'address' => $usermeta['address'],
  			'referral'=> $usermeta['referral_code']
  			);
  		return $allData;

  

    }		

    function get_refferals($conn,$user_id){
    	$query="SELECT * FROM refferal WHERE user_reffering='".$user_id."' OR user_reffered='".$user_id."'";
    	$get_refferals=$conn->query($query);
    	// $get_refferals=$get_refferals->fetch_assoc();
    	return $get_refferals;
    }

    function total_refferals($conn,$user_id){
    	$total=select_query($conn,'users_meta','user_id',$user_id);
    	return $total['points'];	
    }

    function get_username($conn,$user_id){
    	$query="SELECT * from users where id='".$user_id."'";
    	// echo $query;
    	$result=$conn->query($query);
    	if($result->num_rows > 0){
    		$username=$result->fetch_assoc();
    		return $username['name']; 
    	}
    }

    function create_hash($conn,$uid,$email){
    	$id_len=strlen((string)$uid);
    	if($id_len ===1){
    		$id='00'.$uid;
    	}elseif($id_len ===2){
    		$id='0'.$uid;
    	}elseif($id_len ===3){
    		$id=$uid;
    	}
    	$hash=substr(md5($uid), 0, 12);
    	// $hash_final=hash('md5', $hash);
    	$query="UPDATE users_meta set pass_hash='".$hash."' where user_id='".$uid."'";
		$result= $conn->query($query);
		if($result === TRUE){
			$hash_final=$hash.$id;
			echo HOME_URL.'/forgot_pass.php?hash='.$hash_final;
		}else{return FALSE;}
    }




?>