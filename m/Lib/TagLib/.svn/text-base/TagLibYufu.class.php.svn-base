<?php
//import('TagLib');
class TagLibYufu extends TagLib {
   //标签定义
   protected $tags=array(
       'category'=>array('attr'=>'catid,result','level'=>1),
       'content'=>array('attr'=>'catid,result','level'=>1),
       'article'=>array('attr'=>'catid,field,order,num,result','level'=>1),
       'product'=>array('attr'=>'catid,field,order,num,result','level'=>1),
       'download'=>array('attr'=>'catid,field,order,num,result','level'=>1),
       'photo'=>array('attr'=>'catid,field,order,num,result','level'=>1),
       'other'=>array('attr'=>'result','level'=>1),
       'announce'=>array('attr'=>'catid,field,order,num,result','level'=>1),
   );
    //定义查询数据库标签
   public function _category($attr,$content) {
        $tag=$this->parseXmlAttr($attr, 'category');
       
        $result= !empty($tag['result'])?$tag['result']: 'category';

        $catlist = D('Category')->where('status=1')->select();	
        
        $idlist = arrToTree($catlist,$tag['catid']);  
        $idlist= substr($idlist, 0, strlen($idlist)-1);

        $map.="'status=1";
        $map.=($tag['catid'])?" and id in ($idlist)'":"'";

        $sql ='D(\'Category\')->where('.$map.')->field("*,concat(path,\'-\',id) as bpath")->order(\'bpath\')->select()';
        
        //下面拼接输出语句
        $parsestr  = '<?php $_list='.$sql.';';
        $parsestr .= 'foreach($_list as $key=>$value):';
        $parsestr .= '$_list[$key][\'count\']=count(explode(\'-\',$value[\'bpath\']));';
        $parsestr .= 'endforeach;';
        $parsestr .= '$_result=$_list;';
        $parsestr .= 'foreach($_result as $key=>$'.$result.'):?>';
        $parsestr .= $content;//解析在article标签中的内容
        $parsestr .= '<?php endforeach;?>';
        return  $parsestr;

   }
   //定义查询数据库标签
   public function _content($attr,$content) {
        $tag=$this->parseXmlAttr($attr, 'content');
       
        $result= !empty($tag['result'])?$tag['result']: 'content';
        
        $map.="'status=1";
        $map.=($tag['catid'])?" and id={$tag['catid']}'":"'";
        
        $sql ="M('Category')->";
        $sql.="where({$map})->";
        $sql.="find()";

        //下面拼接输出语句
        $parsestr  = '<?php $'.$result.'=$_result='.$sql.';?>';
        $parsestr .= $content;//解析在article标签中的内容
        return  $parsestr;

   }
   //定义查询数据库标签
   public function _article($attr,$content) {
        $tag=$this->parseXmlAttr($attr, 'article');
       
        $result= !empty($tag['result'])?$tag['result']: 'article';
        
        $catlist = D('Category')->where('status=1')->select();	
        $idlist = $tag['catid'].','.arrToTree($catlist,$tag['catid']);  
        $idlist= substr($idlist, 0, strlen($idlist)-1);
        
        
        $map.="'status=1";
        $map.=($tag['catid'])?" and catid in ($idlist)'":"'";
        
        $sql ="M('Article')->";
        $sql.="where({$map})->";
        $sql.=($tag['field'])?"field('{$tag['field']}')->":"";
        $sql.=($tag['order'])?"order('{$tag['order']}')->":"";
        $sql.=($tag['num'])?"limit({$tag['num']})->":"";
        $sql.="select()";

        //下面拼接输出语句
        $parsestr  = '<?php $_result='.$sql.';';
        $parsestr .= 'foreach($_result as $key=>$'.$result.'):?>';
        $parsestr .= $content;//解析在article标签中的内容
        $parsestr .= '<?php endforeach;?>';
        return  $parsestr;

   }
   
   //定义查询数据库标签
   public function _product($attr,$content) {
        $tag=$this->parseXmlAttr($attr, 'product');
     
        $result= !empty($tag['result'])?$tag['result']: 'product';
        
        $catlist = D('Category')->where('status=1')->select();	
        $idlist = $tag['catid'].','.arrToTree($catlist,$tag['catid']);  
        $idlist= substr($idlist, 0, strlen($idlist)-1);
        
        
        $map.="'status=1";
        $map.=($tag['catid'])?" and catid in ($idlist)'":"'";
        
        $sql ="M('Product')->";
        $sql.="where({$map})->";
        $sql.=($tag['field'])?"field('{$tag['field']}')->":"";
        $sql.=($tag['order'])?"order('{$tag['order']}')->":"";
        $sql.=($tag['num'])?"limit({$tag['num']})->":"";
        $sql.="select()";

        //下面拼接输出语句
        $parsestr  = '<?php $_result='.$sql.';';
        $parsestr .= 'foreach($_result as $key=>$'.$result.'):?>';
        $parsestr .= $content;//解析在article标签中的内容
        $parsestr .= '<?php endforeach;?>';
        return  $parsestr;

   }
   //定义查询数据库标签
   public function _download($attr,$content) {
        $tag=$this->parseXmlAttr($attr, 'download');
       
        $result= !empty($tag['result'])?$tag['result']: 'download';
        
        $catlist = D('Category')->where('status=1')->select();	
        $idlist = $tag['catid'].','.arrToTree($catlist,$tag['catid']);  
        $idlist= substr($idlist, 0, strlen($idlist)-1);
        
        
        $map.="'status=1";
        $map.=($tag['catid'])?" and catid in ($idlist)'":"'";
        
        $sql ="M('Dowonload')->";
        $sql.="where({$map})->";
        $sql.=($tag['field'])?"field('{$tag['field']}')->":"";
        $sql.=($tag['order'])?"order('{$tag['order']}')->":"";
        $sql.=($tag['num'])?"limit({$tag['num']})->":"";
        $sql.="select()";

        //下面拼接输出语句
        $parsestr  = '<?php $_result='.$sql.';';
        $parsestr .= 'foreach($_result as $key=>$'.$result.'):?>';
        $parsestr .= $content;//解析在article标签中的内容
        $parsestr .= '<?php endforeach;?>';
        return  $parsestr;

   }
   //定义查询数据库标签
   public function _photo($attr,$content) {
        $tag=$this->parseXmlAttr($attr, 'photo');
       
        $result= !empty($tag['result'])?$tag['result']: 'photo';
        
        $catlist = D('Category')->where('status=1')->select();	
        $idlist = $tag['catid'].','.arrToTree($catlist,$tag['catid']);  
        $idlist= substr($idlist, 0, strlen($idlist)-1);
        
        
        $map.="'status=1";
        $map.=($tag['catid'])?" and catid in ($idlist)'":"'";
        
        $sql ="M('Photo')->";
        $sql.="where({$map})->";
        $sql.=($tag['field'])?"field('{$tag['field']}')->":"";
        $sql.=($tag['order'])?"order('{$tag['order']}')->":"";
        $sql.=($tag['num'])?"limit({$tag['num']})->":"";
        $sql.="select()";

        //下面拼接输出语句
        $parsestr  = '<?php $_result='.$sql.';';
        $parsestr .= 'foreach($_result as $key=>$'.$result.'):?>';
        $parsestr .= $content;//解析在article标签中的内容
        $parsestr .= '<?php endforeach;?>';
        return  $parsestr;

   }
  
   //定义查询数据库标签
   public function _other($attr,$content) {
        $tag=$this->parseXmlAttr($attr, 'other');

        $result= !empty($tag['result'])?$tag['result']: 'other';
        
        $sql ="M('Other')->";
        $sql.="find()";

        //下面拼接输出语句
        $parsestr  = '<?php $'.$result.'=$_result='.$sql.';?>';
        $parsestr .= $content;//解析在article标签中的内容
        return  $parsestr;

   }
    //定义查询数据库标签
   public function _announce($attr,$content) {
        $tag=$this->parseXmlAttr($attr, 'announce');
        
        $result= !empty($tag['result'])?$tag['result']: 'announce';

        $map.="'status=1";
        $sql ="M('Announce')->";
        $sql.="where({$map})->";
        $sql.=($tag['field'])?"field('{$tag['field']}')->":"";
        $sql.=($tag['order'])?"order('{$tag['order']}')->":"";
        $sql.=($tag['num'])?"limit({$tag['num']})->":"";
        $sql.="select()";

        //下面拼接输出语句
        $parsestr  = '<?php $_result='.$sql.';';
        $parsestr .= 'foreach($_result as $key=>$'.$result.'):?>';
        $parsestr .= $content;//解析在article标签中的内容
        $parsestr .= '<?php endforeach;?>';
        return  $parsestr;

   }
   
   
}

?>
