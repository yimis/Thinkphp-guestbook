<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $Message = D('Message');    // 实例化Message对象
        $list = $Message->limit(100)->select();
        $this->assign('list', $list);
        // 不带任何参数 自动定位当前操作的模板文件
        $this->display();
    }
    //添加留言
    public function add(){
        if (IS_POST) {
            // 自动验证 创建数据集
            $Message = D('Message');    // 实例化Message对象
            // 自动验证 创建数据集
            if (!$data = $Message->create()) {
                $this->error($Message->getError(), '', 2);
            } else {
                $result = $Message->add(); // 写入数据到数据库
            }
            if ($result) {
                $this->success("添加成功！");
            } else {
                $this->error("添加失败！");
            }
        }
    }

}