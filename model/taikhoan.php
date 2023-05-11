<?php
function loadall_taikhoan(){
    $sql="SELECT * FROM taikhoan order by id desc";
    $listtaikhoan=pdo_query($sql);
    return $listtaikhoan;
}
function insert_taikhoan($email,$user,$pass,){
    $sql="INSERT INTO taikhoan(email,user,pass)  
    VALUES('$email','$user','$pass')";
    pdo_execute($sql);
}
function checkuser($user,$pass){
    $sql="SELECT * FROM taikhoan WHERE user='".$user."' and pass='".$pass."'";
    $sp=pdo_query_one($sql);
    return $sp;
}
function checkemail($email){
    $sql="SELECT * FROM taikhoan WHERE email='".$email."'";
    $sp=pdo_query_one($sql);
    return $sp;
}
function edit_taikhoan($id,$user,$pass,$email,$tel,){
        $sql="UPDATE taikhoan SET user='".$user.", pass='".$pass."', email='".$email."', 
        tel='".$tel."' WHERE id=".$id;
    pdo_execute($sql);
}
?>