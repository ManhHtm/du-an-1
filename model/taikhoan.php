<?php

// function insert_taikhoan($email,$user,$pass){
//     $sql="insert into taikhoan(user,email,pass) values('$email','$user','$pass')";
//     pdo_execute($sql);
// }

// function  checktk($user,$pass){
//     $sql="select * from taikhoan where user='".$user."' AND pass='".$pass."'";
//     $sp=pdo_query_one($sql);
//     return $sp;
// }

function checkuser($user,$pass){
    $conn=connectdb();
    $stmt = $conn->prepare("SELECT * FROM taikhoan WHERE user='".$user."' AND pass='".$pass."'");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    if(count($kq)>0) return $kq[0]['role'];
    else return 0;
}
function getuserinfo($user,$pass){
    $conn=connectdb();
    $sql="SELECT * FROM taikhoan WHERE user='".$user."' AND pass='".$pass."'";
    echo $sql;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}
?>