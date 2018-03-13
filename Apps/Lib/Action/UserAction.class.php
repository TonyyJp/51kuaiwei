<?php
class UserAction extends CommonAction{
	/**
	 * 第三方登录模块  
	 * @access  Public
	 * @author  tml
	 * ***/
	Public Function other($type =null){
		if(empty($type))$this->error("参数错误");
		import("ORG.ThinkSDK.ThinkOauth");
		$sns = ThinkOauth::getInstance($type);
		redirect($sns->getRequestCodeURL());
		
	}
	public function test(){
		echo "ceshi";
	}
	/**
	 *  登录接口回调方法
	 *  @access   Public
	 *  @param    string  $type  登录类型  
	 *  @param    string  $code  返回的code
	 *  @author   tml
	 * **/
	Public Function otlogin($type=null,$code=null){
		if(empty($type) || empty($code))$this->error("参数错误");
		
		import("ORG.ThinkSDK.ThinkOauth");
		$sns  = ThinkOauth::getInstance($type);
		$extend=null;
		dump($sns);
		//腾讯微博
		/* $extend = null;
		if($type == 'tencent'){
			$extend = array('openid' => $this->_get('openid'), 'openkey' => $this->_get('openkey'));
		} */
		//请妥善保管这里获取到的Token信息，方便以后API调用
		//调用方法，实例化SDK对象的时候直接作为构造函数的第二个参数传入
		//如： $qq = ThinkOauth::getInstance('qq', $token);
		
		$token = $sns->getAccessToken($code , $extend);
		dump($token);exit;
		if(is_array($token)){
			$openid = $token['openid'];//获取openid;
			$User = new UserModel();
			//dump($openid);
			if(empty($openid)){
				$this->error("Opneid  Is  Null",U('index/index'));
			}else{
				//$map['openid']=$openid;
				//echo "opendi<br />";
				//dump($openid);
				$M = new Model();
				$sql = "select * from wxq_member where openid= '".$openid."' limit 1";
				$data = $M->query($sql);
				
			}
			if($data){
				//查询到注册了就获取信息登录  
				
				if($this->otherLogin($data[0])){
					$this->success("登录成功",U('index/index'));
					
				}else{
					$this->error("登录失败",U('index/index'));
				}
			}else{
				//如果没有就注册在登录
				$user_info = A('Type', 'Event')->$type($token);
				
				$Member=M('Member');
				$data['account'] = $user_info['name'];
				$data['password'] = $type;
				$data['openid']=$openid;
				
				if($Member->add($data)){
					$userM = new UserModel();
					
					$userinfo =$userM->getUser($openid); 
					if($this->otherLogin($userinfo)){
						$this->success("登录成功",U('index/index'));
							
					}else{
						$this->error("登录失败",U('index/index'));
					}
				}else{
					$this->error("用户注册失败",U('index/index'));
				}
				
			}
			
			
			
		}
		
		
	}
	
	
	Private function otherLogin($data){
		//dump($data);exit;
		if(empty($data))return false;
		session('id', $data['id']);
		session('account', $data['account']);
		session('nickname', $data['nickname']);
		session('email', $data['email']);
		session('avatar', $data['thumb']);
		session('lastLoginTime', $data['last_login_time']);
		session('login_count', $data['login_count']);
		//['id']=$data['id'];
		$vdata['last_login_time'] = time();
		$vdata['login_count']=array('exp','login_count+1');
		$vdata['last_login_ip']=get_client_ip();
		$Member=M('Member');
		
		if($Member->where(array('id'=>$data['id']))->data($vdata)->save()){
			return true;
		}else{
			echo M()->getLastSql();
			//return false;
		}
	}
	
}