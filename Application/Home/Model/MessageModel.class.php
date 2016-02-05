<?php
//----------------------------------------------------------------------
//  
//          example
//  Copyright 2016 yimis.com 
//  Author: yimis <i@yimis.com>
//  CreateTime: 2016/2/5 7:17
//
//  ----------------------------------------------------------------------
namespace Home\Model;
use Think\Model;

class MessageModel extends Model {
    /**
     * 自动完成
     */
    protected $_auto = array (
        array('time', 'time', 1, 'function'), // 对time字段在新增的时候写入当前时间戳
        array('ip', 'get_client_ip', 1, 'function'), // 对ip字段在新增的时候写入当前注册ip地址
    );

}