<?php 
    ini_set('display_errors',1);
    require "config.php";
    

    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $description = $_POST['description'];
    $location = $_POST['location'];
    $ipaddress =$_SERVER['REMOTE_ADDR'];
    $ipId  = findIp($ipaddress);
    date_default_timezone_set("Asia/Manila");
    $datenow = date('Y-m-d H:i:s');
    
    function findBrgy($loc){
    global $link;
    $x = null ;
    $sql1 = "SELECT IdBarangay FROM tblBarangay WHERE BarangayName = '$loc'";
    $result = $link->query($sql1);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $x = $row["IdBarangay"];
        }
    }
    return $x;
    }

    function findIp($ip){
        global $link;
        $sql2 = "Select * from tblIpAddress where IpAddress = '$ip'";
        $ipId = 0;
        $result = $link->query($sql2);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $ipId = $row["IdIpAdd"];
        }
    }else{
        $result = insertIp($ip);
        findIp($ip);
    }
        return $ipId;
    }

    function insertIp($ip){
        global $link;
        $sql3 = "INSERT into  tblIpAddress(IpAddress) Values('$ip')";
        $result = false;
        if ($link->query($sql3)) {
            $result =  true;
        }
        return $result;

    }

    function insertReport($pname,$pdate,$pipId,$pbrgy,$psubject,$pdescription){
        $arr =  Array($pname,$pdate,$pipId,$pbrgy,$psubject,$pdescription);
    print_r($arr);
        global $link;
        $resultx = "error : ";
        $sql4 = "INSERT INTO  tblReport  (  Name ,  Date ,  IdIpAdd ,  IdBarangay ,  ReportSubject ,  ReportContent ) VALUES ('$pname', '$pdate', $pipId, $pbrgy, '$psubject', '$pdescription') ";
        if ($link->query($sql4)) {
           $resultx = true;
        }return $resultx . mysqli_error($link);
    }

    if(insertReport($name,$datenow,$ipId,findBrgy($location),$subject,$description)  ) {
       header('Location:http://10.0.2.1/Students/leonilojrtorres/reachout/thankYou.php');
    }

    
?>