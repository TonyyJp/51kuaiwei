<?php

class UserAction extends Action {
	//验证码
    public function verify() {
        import("@.ORG.Util.Image");
        Image::buildImageVerify();
    }
    //首页
    public function index(){
    	$this -> redirect(U('user_weixinqun?i=1'));
    }
	//注册页面
 	public function user_reg(){
 		$this -> display();
 	}
 	//注册操作
 	public function reg(){
 		if(md5($this -> _post('code')) != $_SESSION['verify'])
 			$this -> error('验证码错误');
 			
 		if(md5($this -> _post('upass', 'trim')) != md5($this -> _post('upass2', 'trim')))
 			$this -> error('两次密码不一致');
 			dump($_POST);
 			
 		$data['account'] = $this -> _post('account', 'trim');
 		$data['nickname'] = $this -> _post('uname', 'trim');
 		$data['password'] = md5($this -> _post('upass', 'trim'));
 		$data['email'] = $this -> _post('email', 'trim');
        $data['status'] = 1;
        $data['create_time'] = time();
        $data['update_time'] = time();

 		
 		$user = M('member') -> where("(account = {$data['account']}) OR (email = {$data['email']})") -> find();
 		if($user)
 			$this -> error('该登录名/邮箱已存在');
 			
 		$result = M('member') -> add($data);
 		$_SESSION['user'] = array('account' => $data['account'], 'nickname' => $data['nickname'], 'email' => $data['email'], 'id' => $result);
 		
 		$this -> redirect(U('user_weixinqun?i=1'));
 	}
 	//登录操作
 	public function login(){
 		$data['account'] = $this -> _post('username', 'trim');
 		$data['password'] = md5($this -> _post('userpass', 'trim'));
 		
 		$user = M('member') -> where($data) -> find();
 		if(!$user)
 			$this -> error('用户名/密码错误');
 			
 		$_SESSION['user'] = array('account' => $user['account'], 'nickname' => $user['nickname'], 'email' => $user['email'], 'id' => $user['id']);
 		
 		$this -> redirect(U('user_weixinqun?i=1'));
 		
 	}
 	//用户中心
 	public function user_weixinqun(){
 		if(!$_SESSION['user'])
 			$this -> error('会话已过期，请重新登录', U('user_login'));

        $pid = $this -> _get('id');
        if (empty($pid)) {
            $this->redirect('User/user_weixinqun', array('id' => 44));
            die;
        }

        $category = D('category');
        $weixin = D('weixin');
        // 抢位 微信群
        $weixin_qun_t = $category -> where("pid = {$pid}") -> select();

        foreach($weixin_qun_t as $k => $v)
        {
            $weixin_qun_a[] = $v['id'];

            if($v['id'] == $_GET['tid']){
                $weixin_qun_t[$k]['css'] = 'selected';
            }
        }

        $where = " AND (catid IN (".implode(',',$weixin_qun_a)."))";

        $today_qun = $weixin
            -> field("*")
            -> where("(memberid = {$_SESSION['user']['id']})" . $where)
            -> order("update_time desc")
            -> select();
        foreach($today_qun as $key => $val){
            $category = D('category') -> where("id = {$val['catid']}") -> find();
            $today_qun[$key]['catid'] = $category['catname'];
            $today_qun[$key]['create_time'] = date('Y-m-d', $val['create_time']);
        }

        $this -> assign('today_qun',$today_qun);
        $this->display();
 	}
	//用户中心-修改密码
 	public function pass(){
 		$old = md5($this -> _post('old', 'trim'));
 		if(!$user = M('user') -> where("(id = {$_SESSION['user']['id']}) AND (password = '{$old}')") -> find())
 			$this -> error('旧密码错误');
 			
 		if(md5($this -> _post('newpass', 'trim')) != md5($this -> _post('newpass2', 'trim')))
 			$this -> error('两次密码不一样');
 			
 		$result = M('user') -> where("id = {$_SESSION['user']['id']}") -> save(array('password' => md5($this -> _post('newpass', 'trim')), 'up_time' => time()));
 		
 		if($result){
 			$this -> success('修改密码成功');
 		}else{
 			$this -> error('修改密码失败');
 		}
 	}
 	//退出
 	public function login_out(){
 		$_SESSION['user'] = null;
 		$this -> redirect(U('user_login'));
 	}
 	//用户中心-修改头像
 	public function header(){
 		$this -> display();
 	}
 	
 	//用户中心-修改个人信息页面
 	public function user_edit(){
 		if(!$_SESSION['user'])
 			$this -> error('会话已过期，请重新登录', U('user_login'));
 		
 		$user = M('member') -> where("id = {$_SESSION['user']['id']}") -> find();

        $user['birthday'] = strtotime($user['birthday']);

 		//获取年份
 		for($i=1970; $i<=date('Y', time()); $i++){
 			$y[$i]['val'] = $i;
 			if(date('Y', $user['birthday']) == $i){
 				$y[$i]['css'] = 'selected';
 			}
 		}
 		//获取月份
 		for($i=1; $i<=12; $i++){
            $i = strlen($i) == 1 ? '0' . $i : $i;
 			$m[$i]['val'] = $i;
 			if(date('m', $user['birthday']) == $i){
 				$m[$i]['css'] = 'selected';
 			}
 		}
 		//获取日期
 		$BeginDate=date('Y-m-01', strtotime(date("Y-m-d")));
 		for($i=1; $i<=date('d', strtotime("$BeginDate +1 month -1 day")); $i++){
            $i = strlen($i) == 1 ? '0' . $i : $i;
 			$d[$i]['val'] = $i;
 			if(date('d', $user['birthday']) == $i){
 				$d[$i]['css'] = 'selected';
 			}
 		}
 		
 		//获取省份
 		$province = M('areas') -> where("parent_id = 1") -> select();
 		foreach ($province as $key => $val){
 			if($user['province'] == $val['id']){
 				$province[$key]['css'] = 'selected';
                break;
 			}
 		}
 		
 		//获取城市
 		$pid = $user['province'] ? $user['province'] : $province[0]['id'];
 		$ctiy = M('areas') -> where("parent_id = {$pid}") -> select();
 		foreach ($ctiy as $key => $val){
 			if($user['city'] == $val['id']){
 				$ctiy[$key]['css'] = 'selected';
                break;
 			}
 		}
 		
 		
 		
 		$this -> assign('user', $user);
 		$this -> assign('y', $y);
 		$this -> assign('m', $m);
 		$this -> assign('d', $d);
 		$this -> assign('province', $province);
 		$this -> assign('ctiy', $ctiy);
 		$this -> display();
 	}
 	
 	public function show_date(){
 		$BeginDate=date('Y-' .$this -> _post('m'). '-01', strtotime(date("Y-m-d")));
 		for($i=1; $i<=date('d', strtotime("$BeginDate +1 month -1 day")); $i++){
 			$d[$i]['val'] = $i;
 			if(date('d', $user['birthday']) == $i){
 				$d[$i]['css'] = 'selected';
 			}
 		}
 		$this -> ajaxReturn($d);
 	}
 	
 	public function edit(){
 		$data['nickname'] = $this -> _post('nickname', 'trim');
 		$data['wxaccount'] = $this -> _post('weixin', 'trim');
 		$data['birthday'] = $this -> _post('y', 'trim') . '-' . $this -> _post('m', 'trim') . '-' . $this -> _post('d', 'trim');
 		$data['gender'] = $this -> _post('gender');
 		$data['province'] = $this -> _post('province');
 		$data['city'] = $this -> _post('ctiy');
 		$data['update_time'] = time();
 		
 		$is_up = M('member') -> where("id = {$this -> _post('id')}") -> save($data);
 		
 		if($is_up){
 			$this -> success('修改成功');
 		}else{
 			$this -> error('修改失败');
 		}
 	}
 
 	
 	public function user(){
 		/*if(!$_SESSION['user'])
 			$this -> error('会话已过期，请重新登录', U('user_login'));*/
 			
 		$this -> display();
 		
 	}


}