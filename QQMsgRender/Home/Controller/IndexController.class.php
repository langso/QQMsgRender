<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        /*
		$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>[ 您现在访问的是Home模块的Index控制器 ]</div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
		*/
        $this->display();        
    }
	
	public function render(){
		$upload = new \Think\Upload();// 实例化上传类
		$upload->maxSize   =     3145728 ;// 设置附件上传大小
		$upload->exts      =     array('txt');// 设置附件上传类型
		$upload->rootPath  =     './Uploads/'; // 设置附件上传根目录
		$upload->savePath  =     ''; // 设置附件上传（子）目录
		// 上传文件 
		$info   =   $upload->upload();
		
		/* info具体信息
		 * array(1) { ["uploadfile"]=> array(9) { ["name"]=> string(22) "鏂板缓鏂囨湰鏂囨。.txt" ["type"]=> string(10) "text/plain" ["size"]=> int(12) ["key"]=> string(10) "uploadfile" ["ext"]=> string(3) "txt" ["md5"]=> string(32) "89403e405bbb916ea8627a445847f50a" ["sha1"]=> string(40) "47c402148721956af6a75f66d57160a237cdf303" ["savename"]=> string(17) "54058a891ac2e.txt" ["savepath"]=> string(11) "2014-09-02/" } }
		 * 
		 */
		
		var_dump($info); die('');
		
		if(!$info) {// 上传错误提示错误信息
			$this->error($upload->getError());
		}else{// 上传成功
			$this->success('上传成功！');
		}
	
		$this->display();
	}
}