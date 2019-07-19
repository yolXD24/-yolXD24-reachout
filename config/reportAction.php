<?php 
    session_start();
    header("Access-Control-Allow-Origin: *");
    ini_set('display_errors',1);
    require_once 'config.php';

    $id = $_POST['id'];
    $act = $_POST['act'];
    
    
    function delete($id){
        global $link;
        $sql = "DELETE FROM tblReport WHERE IdReport = '$id'";
        $result = 'error';
        if ($link->query($sql)) {
            $result =  "delete";
        }
        return $result;
    }

    function update($id){
        global $link;
        $sql = "update tblReport set status = 1 WHERE IdReport = '$id'";
        $result = 'error';
        if ($link->query($sql)) {
            $result =  "update";
            $_SESSION['IdReport'] = $id; 
        }
        return $result;
    }
    
    $_SESSION['IdReport'] = $id;
    if ($act == 'del') {    
        echo delete($id);
    }elseif ($act == 'open') {
        echo update($id);
    }else{
        echo "error";
    }
    
?>