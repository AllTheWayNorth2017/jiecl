<?php
class ManageAction extends Action{


	//构造方法初始化
	public function __construct(&$_tpl){
		parent::__construct(new Templates(),new Manage());
		$this->_action();
		
	}


	private function _action(){
		//创建数据库连接
		_connect(); 
		//选择一款数据库
		_select_db();
		//选择字符集
		_set_names();
		switch($_GET['action']){
			case'list':
				$this->show();
				break;
			case'add':
				$this->add();
				break;
			case'delete':
				$this->delete();
				break;
			case'update':
				$this->update();
				break;
			default:
				Tool::alertBack('非法操作！');

		}
		//载入tpl文件	
		$this->_tpl->display('manage.tpl');
		
	}
	//list
	private function show(){
		$this->_tpl->assign('list',true);
		$this->_tpl->assign('title','管理员列表');
		$this->_tpl->assign('AllManage',$this->_model->getManage());

	}


	//add
	private function add(){
		if($_POST['send']=='新增管理员'){
			$this->_model->admin_user=$_POST['admin_user'];
			$this->_model->admin_psd=sha1($_POST['admin_psd']);
			$this->_model->level=$_POST['level'];
			
			if($this->_model->addManage()){
		
				Tool::alertLocation('恭喜你新增成功','manage.php?action=list');

			}else{
			
				Tool::alertBack('很遗憾，新增失败！');
			}
		}
		$this->_tpl->assign('add',true);
		$this->_tpl->assign('title','新增管理员');
	}

	//delete
	private function delete(){

		if(isset($_GET['id'])){
			$this->_model->id=$_GET['id'];
			$this->_model->deleteManage() ? Tool::alertLocation('恭喜你，删除成功！','manage.php?action=list') : Tool::alertBack('很遗憾删除失败');

			
		}else{
			Tool::alertBack('非法操作！');
		}
	}

	//update

	private function update(){
		if(isset($_POST['send'])){
			if($_POST['admin_psd'] ==''){
				Tool::alertBack('密码不能为空！');
			}else{
				$this->_model->id=$_POST['id'];
				$this->_model->admin_psd=sha1($_POST['admin_psd']);
				$this->_model->level=$_POST['level'];
				$this->_model->updateManage() ? Tool::alertLocation('恭喜你，修改成功','manage.php?action=list') : Tool::alertBack('很遗憾，修改失败');
			}
		}
		if(isset($_GET['id'])){
			$this->_model->id=$_GET['id'];
			is_object($this->_model->getOneManage()) ? true : Tool::alertBack('管理员的传值有误！');
			$this->_tpl->assign('id',$this->_model->getOneManage()->id);
			$this->_tpl->assign('level',$this->_model->getOneManage()->level);
			$this->_tpl->assign('admin_user',$this->_model->getOneManage()->admin_user);
			$this->_tpl->assign('update',true);
			$this->_tpl->assign('title','修改管理员');
		}else{
			Tool::alertBack('非法操作！');
		}
				
	}
	




}



?>