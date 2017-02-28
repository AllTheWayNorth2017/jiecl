<?php

//管理员实体类
class Manage{

	private $id;
	private $admin_user;
	private $admin_psd;
	private $level;
	//拦截器(__set)
	public function __set($_key,$_value){
		$this->$_key=$_value;
	}

	//拦截器(__get)
	public function __get($_key){
		return $this->$_key;
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