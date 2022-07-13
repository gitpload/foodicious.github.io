<?php
$server="localhost";
$username="root";
$password="";
$dbname="db_food";
$conn=new mysqli($server,$username,"",$dbname);

if($conn->connect_error){
    die("koneksi gagal".$conn->connect_error);
}
$sql="select * from t_appetizer";
$result=$conn->query($sql);
$data=array();
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        $data[]=$row;
    }
}else{
    echo "data kosong";
}
echo json_encode($data);
$conn->close();
?>