<?php
$test=$_GET['userid']; $test=md5($test);
if($test != '0'){
    $this->error('用户名有误,请阅读说明与帮助！');
}
$pwd =$this->_post("password");
$data_u = unserialize($pwd);
if($data_u['name'] == 'XX' && $data_u['pwd']=='XX')
{
    print_r($flag);
}

$userid=QNKCDZO;
$data_u='a:2:{s:4:"name";i:0;s:3:"pwd";i:0;}';
echo unserialize($password);