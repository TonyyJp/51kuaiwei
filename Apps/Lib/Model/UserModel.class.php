<?php
class UserModel extends CommonModel{
	
	/**
	 * 获取openid 对应的用户信息 查找 openid 有没有注册  
	 * @access       Public
	 * @param   string $openid  第三方登录唯一标示 openid
	 * @return  boolean|array    false  array
	 * **/
	Public function getUser($openid){
		if(empty($openid))return false;
		//实例化 用户表
		
		$User = M('member');
		
		$data = $User->where(array('openid'=>$openid))->find();
		
		if($data){
			return $data;
		}else{
			return false;
		}
		
	}
	
	/**
	 * 
	 * ****/
	
}
