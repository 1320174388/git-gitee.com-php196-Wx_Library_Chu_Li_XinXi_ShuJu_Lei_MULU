<?php
/**
 *  版权声明 :  地老天荒科技有限公司
 *  文件名称 :  index_cheshi_demo.php
 *  创 建 者 :  Shi Guang Yu
 *  创建日期 :  2018/08/15 20:27
 *  文件描述 :  Wx_小程序：处理信息数据示例
 *  历史记录 :  -----------------------
 */
include('../library/RSD.php');

$success = [ 'msg' => 'success' , 'data' => '100544' ];
$error   = [ 'msg' => 'error'   , 'data' => '44944' ];

print_r(RSD::wxReponse($success,'S','1314','520'));