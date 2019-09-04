<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Weixinvaild extends CI_Controller {

	public function __construct() {

		parent::__construct();
		
		# 加载对应操作接口
		//文件夹名注意大写
		$this->load->library('Wechat/wechat_user', self::getWconfig());
		// var_dump($this->wechat_user->getUserList());
	}
	
	public function index()
	{	
		var_dump( self::getWconfig() );die();
	}

	/**
	 * 微信服务器认证
	 * @author   jingfeiMac
	 * @datetime 2019-09-04T12:52:55+0800
	 * @return   [type]                   [description]
	 */
	public function valid()
	{	
		# 加载对应操作接口
		//文件夹名注意大写
		$this->load->library('Wechat/lib/Wechat_common', self::getWconfig());
		var_dump($this->wechat_common->valid());
	}
}
