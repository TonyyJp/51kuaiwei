<?php

class IndexAction extends CommonAction {

    public function index(){
    	$category = D('category');
        $weixin = D('weixin');
        // 抢位 微信群
        $weixin_qun_t = $category -> where("pid = 44") -> select();
        foreach($weixin_qun_t as $k => $v)
        {
            $weixin_qun_a[] = $v['id']; 
        }
        $weixin_qun_catid = "(".implode(',',$weixin_qun_a).")"; 
        // 抢位 公众号
        $weixin_hao_t = $category -> where("pid = 47") -> select();
        foreach($weixin_hao_t as $k => $v)
        {
            $weixin_hao_a[] = $v['id']; 
        }
        $weixin_hao_catid = "(".implode(',',$weixin_hao_a).")"; 
        // 抢位 个人威信
        $weixin_person_t = $category -> where("pid = 48") -> select();
        foreach($weixin_person_t as $k => $v)
        {
            $weixin_person_a[] = $v['id']; 
        }
        $weixin_person_catid = "(".implode(',',$weixin_person_a).")"; 
    	
        
        $weixin_huoyuan_t = $category -> where("pid = 1") -> select();
        foreach($weixin_huoyuan_t as $k => $v)
        {
            $weixin_huoyuan_a[] = $v['id']; 
        }
        $weixin_huoyuan_catid = "(".implode(',',$weixin_huoyuan_a).")"; 
    	
    	
    	$today_qun = $weixin -> field("id,title,logo,logo2,qrcode,qrcode2,qiangwei_time,create_time,pubaccount")-> where("status = 1 and catid in {$weixin_qun_catid}") -> limit("12") -> order("update_time desc") -> select();
    	$today_hao = $weixin -> field("id,title,logo,logo2,qrcode,qrcode2,qiangwei_time,create_time,pubaccount")-> where("status = 1  and catid in {$weixin_hao_catid}") -> limit("12") -> order("update_time desc") -> select();
    	$today_person = $weixin -> field("id,title,logo,logo2,qrcode,qrcode2,qiangwei_time,create_time,pubaccount")-> where("status = 1  and catid in {$weixin_person_catid}") -> limit("12") -> order("update_time desc") -> select();
    	$weixin_huoyuan = $weixin -> field("id,title,logo,logo2, qiangwei_time,create_time") -> where("status = 1  and catid in {$weixin_huoyuan_catid}") -> order("create_time desc") -> limit(8) -> select();
		
    	foreach ($today_qun as $key => $val){
            if ($val['qiangwei_time'] == NULL || empty($val['qiangwei_time'])) {
                $val['qiangwei_time'] = $val['create_time'];
                $today_qun[$key]['qiangwei_time'] = $val['create_time'];
            }
            $cha = (time() - $val['qiangwei_time']);
    		$minute = floor($cha / 60);
    		$hour = floor($minute / 60);
    		$day = floor($hour / 24);
    	
    		$today_qun[$key]['qiangwei_time'] = "<font class='fs'>{$minute}</font> 分钟前";
    		
    		if($hour > 1){
    			$today_qun[$key]['qiangwei_time'] = "<font class='fs'>{$hour}</font> 小时前";
    		}
    		
    		if($day > 1){
    			$today_qun[$key]['qiangwei_time'] = "<font class='fs'>{$day}</font> 天前";
    		}
    	}
    	
    	foreach ($today_hao as $key => $val){
            if ($val['qiangwei_time'] == NULL || empty($val['qiangwei_time'])) {
                $val['qiangwei_time'] = $val['create_time'];
                $today_hao[$key]['qiangwei_time'] = $val['create_time'];
            }
    		$cha = (time() - $val['qiangwei_time']);
    		$minute = floor($cha / 60);
    		$hour = floor($minute / 60);
    		$day = floor($hour / 24);
    	
    		$today_hao[$key]['qiangwei_time'] = "<font class='fs'>{$minute}</font> 分钟前";
    		
    		if($hour > 1){
    			$today_hao[$key]['qiangwei_time'] = "<font class='fs'>{$hour}</font> 小时前";
    		}
    		
    		if($day > 1){
    			$today_hao[$key]['qiangwei_time'] = "<font class='fs'>{$day}</font> 天前";
    		}
    	}
        foreach ($today_person as $key => $val){
            if ($val['qiangwei_time'] == NULL || empty($val['qiangwei_time'])) {
                $val['qiangwei_time'] = $val['create_time'];
                $today_person[$key]['qiangwei_time'] = $val['create_time'];
            }
    		$cha = (time() - $val['qiangwei_time']);
    		$minute = floor($cha / 60);
    		$hour = floor($minute / 60);
    		$day = floor($hour / 24);
    	
    		$today_person[$key]['qiangwei_time'] = "<font class='fs'>{$minute}</font> 分钟前";
    		
    		if($hour > 1){
    			$today_person[$key]['qiangwei_time'] = "<font class='fs'>{$hour}</font> 小时前";
    		}
    		
    		if($day > 1){
    			$today_person[$key]['qiangwei_time'] = "<font class='fs'>{$day}</font> 天前";
    		}
    	}
    	
    	foreach ($weixin_huoyuan as $key => $val){
            if ($val['qiangwei_time'] == NULL || empty($val['qiangwei_time'])) {
                $val['qiangwei_time'] = $val['create_time'];
                $weixin_huoyuan[$key]['qiangwei_time'] = $val['create_time'];
            }
    		$cha = (time() - $val['qiangwei_time']);
    		$minute = floor($cha / 60);
    		$hour = floor($minute / 60);
    		$day = floor($hour / 24);
    	
    		$weixin_huoyuan[$key]['qiangwei_time'] = "<font class='fs'>{$minute}</font> 分钟前";
    		
    		if($hour > 1){
    			$weixin_huoyuan[$key]['qiangwei_time'] = "<font class='fs'>{$hour}</font> 小时前";
    		}
    		
    		if($day > 1){
    			$weixin_huoyuan[$key]['qiangwei_time'] = "<font class='fs'>{$day}</font> 天前";
    		}
    	}

        // 广告设置
        $advert = M('advert')->where("timelimit = '0' OR (starttime >= '%s' AND endtime <= '%s')", array(time(), time()))->select();

        $this -> assign('advert', $advert);
    	$this -> assign('today_hao',$today_hao);
    	$this -> assign('today_qun',$today_qun);
    	$this -> assign('today_person',$today_person);
        $this -> assign('weixin_huoyuan',$weixin_huoyuan);
        $this->sitename=C(SITE_NAME);
        $this->display();
    }
    
    public function weixinqun(){
    	//地区
    	$areas = M('areas') -> where("parent_id = 1") -> select();
    	
    	foreach ($areas as $key => $val){
    		if($val['id'] == $_GET['aid']){
    			$areas[$key]['css'] = 'selected';
    		}
    	}
    	
    	$this -> assign('areas', $areas);
    	
    	
    	$category = D('category');
        $weixin = D('weixin');
        // 抢位 微信群
        $weixin_qun_t = $category -> where("pid = {$this -> _get('id')}") -> select();
        
        foreach($weixin_qun_t as $k => $v)
        {
            $weixin_qun_a[] = $v['id']; 
            
            if($v['id'] == $_GET['tid']){
            	$weixin_qun_t[$k]['css'] = 'selected';
            }
        }
        
        if($this -> _get('tid')){
        	$where .= " AND (catid = {$this -> _get('tid')})";
        }else{
        	$where .= " AND (catid IN (".implode(',',$weixin_qun_a)."))";
        }
        
        $time[0]['id'] = 1;
        $time[0]['name'] = '三天内';
        $time[1]['id'] = 2;
        $time[1]['name'] = '本周内';
        $time[2]['id'] = 3;
        $time[2]['name'] = '一月内';
        
        foreach ($time as $key => $val){
        	if($_GET['time'] == $val['id']){
        		$time[$key]['css'] = 'selected';
        	}
        }
    	$this -> assign('time', $time);
        
        if($_GET['time']){
        	if($_GET['time'] == 1){
        		$qiangwei_time = strtotime("-3 days");
        	}elseif ($_GET['time'] == 2){ 
        		$qiangwei_time = strtotime("-7 days");
        	}elseif ($_GET['time'] == 3){ 
        		$qiangwei_time = strtotime("-30 days");
        	}
        	
        	$where .= " AND (qiangwei_time > {$qiangwei_time})";
        }
        
        
        if($this -> _get('aid')){
        	$where .= " AND (province = {$this -> _get('aid')})";
        }
        
    	$count = $weixin 
    		-> field("id,title,logo,logo2,qrcode,qrcode2,qiangwei_time,create_time,pubaccount, hits")
    		-> where("(status = 1)" . $where) 
    		-> order("update_time desc") 
    		-> count();
    	//实例化 分页类
    	import('@.ORG.Page');
    	$Page       = new Page($count,30);
    	//设置分页样式
    	//$Page->setCon("next","");
    	$Page->setConfig("first", "首页");
    	$Page->setConfig("prev","上一页");
    	$Page->setConfig("next", "下一页");
    	$Page->setConfig("last", "末页");
    	$Page->setConfig("theme"," %first% %upPage%  %nowPage%/%totalPage% 页  %downPage%  %end% ");
    	$show = $Page->show();
    	$today_qun = $weixin 
    		-> field("id,title,logo,logo2,qrcode,qrcode2,qiangwei_time,create_time,pubaccount, hits")
    		-> where("(status = 1)" . $where) 
    		-> order("update_time desc") 
    		->limit($Page->firstRow.','.$Page->listRows)
    		-> select();
    	foreach ($today_qun as $key => $val){
            if ($val['qiangwei_time'] == NULL || empty($val['qiangwei_time'])) {
                $val['qiangwei_time'] = $val['create_time'];
                $today_qun[$key]['qiangwei_time'] = $val['create_time'];
            }
    		$cha = (time() - $val['qiangwei_time']);
    		$minute = floor($cha / 60);
    		$hour = floor($minute / 60);
    		$day = floor($hour / 24);
    	
    		$today_qun[$key]['qiangwei_time'] = "<font class='fs'>{$minute}</font> 分钟前";
    		
    		if($hour > 1){
    			$today_qun[$key]['qiangwei_time'] = "<font class='fs'>{$hour}</font> 小时前";
    		}
    		
    		if($day > 1){
    			$today_qun[$key]['qiangwei_time'] = "<font class='fs'>{$day}</font> 天前";
    		}
    	}
    	//dump($today_qun);exit;
    	$this -> assign('type_list', $weixin_qun_t);
    	$this -> assign('today_qun',$today_qun);
    	$this->assign('page',$show);
        $this->display();
    }
    
    public function phb(){
    	//地区
    	$areas = M('areas') -> where("parent_id = 1") -> select();
    	
    	foreach ($areas as $key => $val){
    		if($val['id'] == $_GET['aid']){
    			$areas[$key]['css'] = 'selected';
    		}
    	}
    	
    	$this -> assign('areas', $areas);
    	
    	
    	$category = D('category');
        $weixin = D('weixin');
        // 抢位 微信群
        $weixin_qun_t = $category -> where("pid = {$this -> _get('id')}") -> select();
        
        foreach($weixin_qun_t as $k => $v)
        {
            $weixin_qun_a[] = $v['id']; 
            
            if($v['id'] == $_GET['tid']){
            	$weixin_qun_t[$k]['css'] = 'selected';
            }
        }
        
    
        if($this -> _get('tid')){
        	$where .= " AND (catid = {$this -> _get('tid')})";
        }else{
        	$where .= " AND (catid IN (".implode(',',$weixin_qun_a)."))";
        }
        
        $time[0]['id'] = 1;
        $time[0]['name'] = '三天内';
        $time[1]['id'] = 2;
        $time[1]['name'] = '本周内';
        $time[2]['id'] = 3;
        $time[2]['name'] = '一月内';
        
        foreach ($time as $key => $val){
        	if($_GET['time'] == $val['id']){
        		$time[$key]['css'] = 'selected';
        	}
        }
    	$this -> assign('time', $time);
        
        if($_GET['time']){
        	if($_GET['time'] == 1){
        		$qiangwei_time = strtotime("-3 days");
        	}elseif ($_GET['time'] == 2){ 
        		$qiangwei_time = strtotime("-7 days");
        	}elseif ($_GET['time'] == 3){ 
        		$qiangwei_time = strtotime("-30 days");
        	}
        	
        	$where .= " AND (qiangwei_time > {$qiangwei_time})";
        }
        
        
        if($this -> _get('aid')){
        	$where .= " AND (province = {$this -> _get('aid')})";
        }
        $count = $weixin 
    		-> field("id,title,logo,logo2,qrcode,qrcode2,qiangwei_time,pubaccount,hits")
    		-> where("(status = 1)" . $where) 
    		-> order("update_time desc") 
    		-> count();
        import('@.ORG.Page');
        $Page       = new Page($count,.30);
        $Page->setConfig("first", "首页");
        $Page->setConfig("prev","上一页");
        $Page->setConfig("next", "下一页");
        $Page->setConfig("last", "末页");
        $Page->setConfig("theme"," %first% %upPage%  %nowPage%/%totalPage% 页  %downPage%  %end% ");
        $show = $Page->show();
    	$today_qun = $weixin 
    		-> field("id,title,logo,logo2,qrcode,qrcode2,qiangwei_time,pubaccount,hits")
    		-> where("(status = 1)" . $where) 
    		->limit($Page->firstRow.','.$Page->listRows)
    		-> order("update_time desc") 
    		-> select();
    		
    	
    	foreach ($today_qun as $key => $val){
    		$cha = (time() - $val['qiangwei_time']);
    		$minute = floor($cha / 60);
    		$hour = floor($minute / 60);
    		$day = floor($hour / 24);
    	
    		$today_qun[$key]['qiangwei_time'] = "<font class='fs'>{$minute}</font> 分钟前";
    		
    		if($hour > 1){
    			$today_qun[$key]['qiangwei_time'] = "<font class='fs'>{$hour}</font> 小时前";
    		}
    		
    		if($day > 1){
    			$today_qun[$key]['qiangwei_time'] = "<font class='fs'>{$day}</font> 天前";
    		}
    	}
    	
    	$this -> assign('type_list', $weixin_qun_t);
    	$this -> assign('today_qun',$today_qun);
    	$this->assign("page",$show);
        $this->display();
    }
    
    public function huoyuan(){
    	$category = D('category');
        $weixin = D('weixin');
        
        $weixin_huoyuan_t = $category -> where("pid = 1") -> select();
        
        
        foreach($weixin_huoyuan_t as $k => $v)
        {
            $weixin_huoyuan_a[] = $v['id']; 
            
            if($v['id'] == $_GET['cid']){
            	$weixin_huoyuan_t[$k]['css'] = 'selected';
            }
        }
        
        $weixin_huoyuan_catid = $_GET['cid'] ? " AND catid = {$_GET['cid']}" : " AND catid IN (".implode(',',$weixin_huoyuan_a).")";
        //$weixin_huoyuan_catid = "(".implode(',',$weixin_huoyuan_a).")"; 
        $count =  $weixin ->field("id,title,logo,logo2, qiangwei_time, create_time, membername") 
    								->where("status = 1 {$weixin_huoyuan_catid}")
    								->order("create_time desc")
    								->count();
        import('@.ORG.Page');
        $Page       = new Page($count,30);
        $Page->setConfig("first", "首页");
        $Page->setConfig("prev","上一页");
        $Page->setConfig("next", "下一页");
        $Page->setConfig("last", "末页");
        $Page->setConfig("theme"," %first% %upPage%  %nowPage%/%totalPage% 页  %downPage%  %end% ");
        $show = $Page->show();
    	$weixin_huoyuan = $weixin ->field("id,title,logo,logo2, qiangwei_time, create_time, membername") 
    								->where("status = 1 {$weixin_huoyuan_catid}")
    								->order("create_time desc")
    								->limit($Page->firstRow.','.$Page->listRows)
    								->select();
		
    	
    	foreach ($weixin_huoyuan as $key => $val){
            if ($val['qiangwei_time'] == NULL || empty($val['qiangwei_time'])) {
                $val['qiangwei_time'] = $val['create_time'];
                $weixin_huoyuan[$key]['qiangwei_time'] = $val['create_time'];
            }
    		$cha = (time() - $val['qiangwei_time']);
    		$minute = floor($cha / 60);
    		$hour = floor($minute / 60);
    		$day = floor($hour / 24);
    	
    		$weixin_huoyuan[$key]['qiangwei_time'] = "<font class='fs'>{$minute}</font> 分钟前";
    		
    		if($hour > 1){
    			$weixin_huoyuan[$key]['qiangwei_time'] = "<font class='fs'>{$hour}</font> 小时前";
    		}
    		
    		if($day > 1){
    			$weixin_huoyuan[$key]['qiangwei_time'] = "<font class='fs'>{$day}</font> 天前";
    		}
    	}
    	$this->assign("page",$show);
        $this -> assign('type_list',$weixin_huoyuan_t);
        $this -> assign('weixin_huoyuan',$weixin_huoyuan);
        $this->display();
    }
    
    public function archives(){
    	
    	$weixin = M('weixin') -> where("id = {$this -> _get('id')}") -> find();
    	$weixin['create_time'] = date('Y-m-d H:i:s', $weixin['create_time']);
    	
    	$category = M('category') -> where("id = {$weixin['catid']}") -> find();
    	$category1  = M('category') -> where("id = {$category['pid']}") -> find();

        $province = M('areas')->where("id = '%d'", array($weixin['province']))->getField('area_name');
        $city = M('areas')->where("id = '%d'", array($weixin['city']))->getField('area_name');

    	switch ($category['id']) {
    		case 1:
    		$str = '?huoyuan';
    		break;
    		case 44:
    		$str = '?weixinqun';
    		break;
    		case 47:
    		$str = '?gongzhonghao';
    		break;
    		case 48:
    		$str = '?geren';
    		break;
    	}

        $map['catid'] = $weixin['catid'];
        $map['id'] = array('lt', $this -> _get('id'));
    	$shang = M('weixin') -> where($map) -> order('id DESC') ->find();
        unset($map);
        if (! $shang) {
            $shang = '';
        }
//    	if(!$shang)
//    		$shang = M('weixin') -> order('id DESC') ->find();
        $map['catid'] = $weixin['catid'];
        $map['id'] = array('gt', $this -> _get('id'));
    	$xia = M('weixin') -> where($map) -> order('id ASC') ->find();
        unset($map);
        if (! $xia) {
            $xia = '';
        }
//    	if(!$xia)
//    		$xia = M('weixin') -> order('id ASC') ->find();

        // 删除内容的html标签
        $weixin['content'] = htmlspecialchars_decode($weixin['content']);
        $weixin['content'] = strip_tags($weixin['content']);

    	$this -> daohang = "<a href='index.php'>首页</a> > {$category1['catname']} > {$category['catname']} > {$weixin['pubaccount']}";
    	$this -> weixin = $weixin;
    	$this -> shang = $shang;
    	$this -> xia = $xia;
    	
        $this->assign('province', $province);
        $this->assign('city', $city);
    	$this -> display();
    }

    public function search(){
    	if($this -> _post('keywords', 'trim')){
    		$this -> data = M('weixin') -> where("(title LIKE '%{$this -> _post('keywords', 'trim')}%') OR (membername LIKE '%{$this -> _post('keywords', 'trim')}%') OR (pubaccount LIKE '%{$this -> _post('keywords', 'trim')}%') OR (wxaccount LIKE '%{$this -> _post('keywords', 'trim')}%')") -> select();
    	}
    	$this -> display();
    }

    public function weixin_add(){
    	if(!$_SESSION['user']){
    		$this -> error('请登录', U('User/user_login'));
    	}
    	$category = D('category');
        $weixin = D('weixin');


        if($this -> _get('ctid')){
        	$data = $weixin -> where("id = {$this -> _get('ctid')}") -> find();
        }
        
        $id = $this -> _get('id') ? $this -> _get('id') : 44;
        $weixin_qun_t = $category -> where("pid = {$id}") -> select();
        
        
        foreach($weixin_qun_t as $k => $v)
        {
            $weixin_qun_a[] = $v['id']; 
            
            if($v['id'] == $_GET['cid']){
            	$weixin_qun_t[$k]['css'] = 'selected';
            }
            
            if($v['id'] == $data['catid']){
            	$weixin_qun_t[$k]['css'] = 'selected';
            }
        }
        $this -> assign('type_list', $weixin_qun_t);
        
        $province = M('areas') -> where("parent_id = 1") -> select();
        foreach ($province as $key => $val){
        	if($val['id'] == $this -> _get('aid')){
        		$province[$key]['css'] = 'selected';
        	}
        	
        	if($val['id'] == $data['province']){
        		$province[$key]['css'] = 'selected';
        	}
        }
        $province_id = $this -> _get('aid') ? $this -> _get('aid') : $data['province'];
        
        $city = M('areas') -> where("parent_id = {$province_id}") -> select();
        foreach ($city as $key => $val){
        	if($val['id'] == $data['city']){
        		$city[$key]['css'] = 'selected';
        	}
        }

        $this -> assign('province', $province);
        $this -> assign('city', $city);
        $this -> assign('id', $id);
        $this -> assign('aid', $this -> _get('aid'));
        $this -> assign('data', $data);
    	$this -> display();
    }
    
    public function add(){
    	$data['memberid'] = $_SESSION['user']['id'];
    	$data['membername'] = $_SESSION['user']['account'];
    	$data['publish_type_id'] = $this -> _get('id') ? $this -> _get('id') : 44;
    	$data['catid'] = $this -> _post('wxqtype_top');
    	$data['province'] =$this -> _get('aid');
    	$data['city'] = $this -> _post('nativeplace_son');
    	$data['qq'] = $this -> _post('qq');
    	$data['title'] = $this -> _post('title');
    	$data['pubaccount'] = $this -> _post('title');
    	$data['description'] = $this -> _post('description');
    	$data['qun_shang_xian'] = $this -> _post('rensu');
    	$data['renshu'] = $this -> _post('rensu2');
    	$data['wxaccount'] = $this -> _post('weixinhao');
    	$data['phone'] = $this -> _post('sjh');
    	
    	$files = $_FILES;
    	$_FILES = null;
    	if($files['fm']['size']){
    		$_FILES['fm'] = $files['fm'];
	    	import('@.ORG.Net.UploadFile');
			$upload = new UploadFile();// 实例化上传类
			$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
			$upload->savePath =  $_SERVER['DOCUMENT_ROOT'] . '/Uploads/';// 设置附件上传目录

            $upload -> thumb = true;
            $upload -> thumbMaxWidth = 130;
            $upload -> thumbMaxHeight = 130;
            $upload -> thumbType = 0;

			 if(!$upload->upload()) {// 上传错误提示错误信息
			 	$this->error($upload->getErrorMsg());
			 }else{// 上传成功 获取上传文件信息
				$info =  $upload->getUploadFileInfo();
			 }
			 $data['logo'] = '/../../..//Uploads/thumb_' . $info[0]['savename'];
    	}
	    	
    	$_FILES = null;
    	if($files['rwm']['size']){
    		$_FILES['rwm'] = $files['rwm'];
	    	import('@.ORG.Net.UploadFile');
			$upload = new UploadFile();// 实例化上传类
			$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
			$upload->savePath =  $_SERVER['DOCUMENT_ROOT'] . '/Uploads/';// 设置附件上传目录




			 if(!$upload->upload()) {// 上传错误提示错误信息
				$this->error($upload->getErrorMsg());
			 }else{// 上传成功 获取上传文件信息
				$info =  $upload->getUploadFileInfo();



			 }
			 $data['qrcode'] = '/../../..//Uploads/' . $info[0]['savename'];
    	}

        $data['typeid'] = 1;
        $data['hits'] = 0;
        $data['zhiding'] = 0;
        $data['curtuijian'] = 0;
        $data['tuijian'] = 0;
        $data['xingji'] = 5;
	    $data['status'] = 2;
	    $data['update_time'] = time();
	    
	    if($this -> _post('ctid')){
		    $result = M('weixin') -> where("id = {$this -> _post('ctid')}") -> save($data);
		    $hint = '编辑';
	    }else{
	    	$data['create_time'] = time();
		    $result = M('weixin') -> add($data);
		    $hint = '发布';
	    }
	    
    	
    	if($result){
    		$this -> success($hint . '成功' , 'index.php?m=User&a=user_weixinqun&id='  . $data['publish_type_id']);
    	}else{
    		$this -> error($hint . '发布失败');
    	}
    }
    
    public function weixin_del(){
    	$result = M('weixin') -> where("id = {$this -> _get('id')}") -> delete();
    	
    	if($result){
    		$this -> success('删除成功');
    	}else{
    		$this -> error('删除失败');
    	}
    }
 
}