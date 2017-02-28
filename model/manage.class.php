<?php

//管理员实体类
class Manage{
	private $_tpl;
	private $id;
	private $admin_user;
	private $admin_psd;
	private $level;
	//构造方法，初始化
	public function __construct(&$_tpl){
		$this->_tpl=$_tpl;
		$this->Action();
	}


	//业务流程控制器

	private function Action(){
		//创建数据库连接
		_connect(); 
		//选择一款数据库
		_select_db();
		//选择字符集
		_set_names();
		switch($_GET['action']){
			case'list':
				$this->_tpl->assign('list',true);
				$this->_tpl->assign('title','管理员列表');
				$this->_tpl->assign('AllManage',$this->getManage());
				break;
			case'add':
				if($_POST['send']=='新增管理员'){
					$this->admin_user=$_POST['admin_user'];
					$this->admin_psd=sha1($_POST['admin_psd']);
					$this->level=$_POST['level'];
					
					if($this->addManage()){
				
						Tool::alertLocation('恭喜你新增成功','manage.php?action=list');

					}else{
					
						Tool::alertBack('很遗憾，新增失败！');
					}
				}
				$this->_tpl->assign('add',true);
				$this->_tpl->assign('title','新增管理员');
				break;
			case'delete':
				
				if(isset($_GET['id'])){
					$this->id=$_GET['id'];
					$this->deleteManage() ? Tool::alertLocation('恭喜你，删除成功！','manage.php?action=list') : Tool::alertBack('很遗憾删除失败');

					
				}else{
					Tool::alertBack('非法操作！');
				}
				break;
			case'update':
				if(isset($_POST['send'])){
					if($_POST['admin_psd'] ==''){
						Tool::alertBack('密码不能为空！');
					}else{
						$this->id=$_POST['id'];
						$this->admin_psd=sha1($_POST['admin_psd']);
						$this->level=$_POST['level'];
						$this->updateManage() ? Tool::alertLocation('恭喜你，修改成功','manage.php?action=list') : Tool::alertBack('很遗憾，修改失败');
					}
				}
				if(isset($_GET['id'])){
					$this->id=$_GET['id'];
					is_object($this->getOneManage()) ? true : Tool::alertBack('管理员的传值有误！');
					$this->_tpl->assign('id',$this->getOneManage()->id);
					$this->_tpl->assign('level',$this->getOneManage()->level);
					$this->_tpl->assign('admin_user',$this->getOneManage()->admin_user);
					$this->_tpl->assign('update',true);
					$this->_tpl->assign('title','修改管理员');
				}else{
					Tool::alertBack('非法操作！');
				}
				
				break;
			default:
				echo '非法操作';

		}
		//载入tpl文件	
		$this->_tpl->display('manage.tpl');
		
	}
	//查询单个管理员
	public function getOneManage(){
		//创建数据库连接
		_connect(); 
		//选择一款数据库
		_select_db();
		//选择字符集
		_set_names();
		$_sql="SELECT id,admin_user,level From manage_user WHERE id='$this->id' LIMIT 1";
		$_result = _query($_sql);
		$_object=mysql_fetch_object($_result);
		return $_object;
	}
	
	//查询所有管理员
	public function getManage(){
		//获取结果集
		$_sql="SELECT m.id,m.admin_user,m.level,m.login_count,m.last_ip,m.last_time,l.level_name FROM manage_user m,manage_level l WHERE l.level=m.level ORDER BY m.id ASC ";
		$_result = _query($_sql);
		$_html=array();
		while (!!$_rows=mysql_fetch_assoc($_result)) {
			$_html[]=$_rows;
		
		}
					
		//清理结果集
		_free_result($_result);
		//关闭数据库
		_close();
		
		return $_html;
	}
	//新增管理员
	public function addManage(){
		//创建数据库连接
		_connect(); 
		//选择一款数据库
		_select_db();
		//选择字符集
		_set_names();
		if(!_fetch_array("SELECT admin_user FROM manage_user WHERE admin_user='$this->admin_user'")){
			$_sql="INSERT INTO manage_user (admin_user,admin_psd,level,reg_time) VALUES ('$this->admin_user','$this->admin_psd','$this->level',NOW())";
			_query($_sql);

		}else{
			_alert_back('该用户名已存在！');
		}
		return _affected_rows();
	
		
	

		
	}
	//修改管理员
	public function updateManage(){
		//创建数据库连接
		_connect(); 
		//选择一款数据库
		_select_db();
		//选择字符集
		_set_names();
		$_sql="UPDATE manage_user SET admin_psd='$this->admin_psd',level='$this->level' WHERE id='$this->id' LIMIT 1";
		_query($_sql);
		return _affected_rows();
	}
	//删除管理员
	public function deleteManage(){
		//创建数据库连接
		_connect(); 
		//选择一款数据库
		_select_db();
		//选择字符集
		_set_names();
		$_sql="DELETE FROM manage_user WHERE id='$this->id' LIMIT 1";
		_query($_sql);
		return _affected_rows();
	}
}

?>