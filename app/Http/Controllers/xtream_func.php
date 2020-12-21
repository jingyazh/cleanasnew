<?php
use Carbon\Carbon;

include "xtream_dbconfig.php";


function cryptPassword($password, $salt="xtreamcodes", $rounds=20000) {
    if ($salt == "") {
        $salt = substr(bin2hex(openssl_random_pseudo_bytes(16)),0,16);
    }
    $hash = crypt($password, sprintf('$6$rounds=%d$%s$', $rounds, $salt));
    return $hash;
}

function getPackage($db, $rID) {    
    $result = $db->query("SELECT * FROM `packages` WHERE `id` = ".intval($rID).";");
    if (($result) && ($result->num_rows == 1)) {
        return $result->fetch_assoc();
    }
    return null;
}
function getPackages($db) {    
    $return = Array();
    $result = $db->query("SELECT * FROM `packages` ORDER BY `id` ASC;");
    if (($result) && ($result->num_rows > 0)) {
        while ($row = $result->fetch_assoc()) {
            $return[intval($row["id"])] = $row;
        }
    }
    return $return;
}
//... add period to Carbon
function carbon_add(Carbon $startdate, $duration, $duration_in){
    if($duration_in == "hours"){
        return $startdate->addHours($duration);
    }else if($duration_in == "days"){
        return $startdate->addDays($duration);
    }else if($duration_in == "months"){
        return $startdate->addMonths($duration);
    }else if($duration_in == "years"){
        return $startdate->addYears($duration);
    }
}




function getRegisteredUserHash($db, $username) {    
    $result = $db->query("SELECT * FROM `reg_users` WHERE `username` = '".$db->real_escape_string($username)."' LIMIT 1;");
    if (($result) && ($result->num_rows == 1)) {
        return $result->fetch_assoc();
    }
    return null;
}

function getRegisteredUsers($db, $rOwner=null, $rIncludeSelf=true) {
    $return = Array();
    $result = $db->query("SELECT * FROM `reg_users` ORDER BY `username` ASC;");
    if (($result) && ($result->num_rows > 0)) {
        while ($row = $result->fetch_assoc()) {
            if ((!$rOwner) OR ($row["owner_id"] == $rOwner) OR (($row["id"] == $rOwner) && ($rIncludeSelf))) {
                $return[intval($row["id"])] = $row;
            }
        }
    }
    if (count($return) == 0) { $return[-1] = Array(); }
    return $return;
}

function getUser($db, $username) {    
    $result = $db->query("SELECT * FROM `users` WHERE `username` = '".$db->real_escape_string($username)."' LIMIT 1;");
    if (($result) && ($result->num_rows == 1)) {
        return $result->fetch_assoc();
    }
    return null;
}

function generateString($strength = 10) {
    $input = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $input_length = strlen($input);
    $random_string = '';
    for($i = 0; $i < $strength; $i++) {
        $random_character = $input[mt_rand(0, $input_length - 1)];
        $random_string .= $random_character;
    }
    return $random_string;
}

function giveCreditToReseller($db, $from_name, $to_name, $addcoden, $reason_msg){

    $targetInfo = getRegisteredUserHash($db, $to_name);
    $target_id = $targetInfo['id'];

    $rUserInfo = getRegisteredUserHash($db, $from_name);
    $admin_id = $rUserInfo['id'];    

    $query = " UPDATE `reg_users` SET `credits`=`credits`+{$addcoden} WHERE `id` = {$target_id} AND `member_group_id`=4 ;";
    $db->query($query);    
    $query = " UPDATE `reg_users` SET `credits`=`credits`-{$addcoden} WHERE `id` = {$admin_id} AND `member_group_id`=4 ;";
    $db->query($query);    //... admin group id=1, reseller group id = 4 , only reseller will be decrease credit count
    $curtime = time();
    $query = "INSERT INTO `credits_log`(`target_id`, `admin_id`, `amount`, `date`, `reason`) VALUES( {$target_id}, {$admin_id}, {$addcoden}, {$curtime}, '{$reason_msg}');";
    $db->query($query);
}

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}


?>