<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
    public function Index()
    {
        //调用对应的服务
        $this->load->service('demo');
        
        //执行服务方法
        echo $this->demo->Hello();
    }
}