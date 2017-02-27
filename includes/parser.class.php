<?php
//模版解析类
class Parser{

	//字段，保存模板内容
	private $_tpl;
	//构造方法，用于获取模板文件里内容
	public function __construct($_tplFile){
		if(!$this->_tpl=file_get_contents($_tplFile)){
			exit('ERROR,模板文件读取错误！');
		}
	}
	//解析普通变量
	private function parVar(){
		$_pattern='/\{\$([\w]+)\}/';
		if(preg_match($_pattern, $this->_tpl)){
			$this->_tpl=preg_replace($_pattern,"<?php echo \$this->_vars['$1'];?>", $this->_tpl);
		}
	}
	//解析if语句
	private function parIf(){
		$_pattenIf='/\{if\s+\$([\w]+)\}/';
		$_pattenEndif='/\{\/if\}/';
		$_pattenElse='/\{else\}/';
		if(preg_match('/\{if\s+\$([\w]+)\}/', $this->_tpl)){
			if(preg_match($_pattenEndif, $this->_tpl)){
				$this->_tpl=preg_replace($_pattenIf, "<?php if(\$this->_vars['$1']){ ?>", $this->_tpl);
				$this->_tpl=preg_replace($_pattenEndif, "<?php } ?>", $this->_tpl);
				if(preg_match($_pattenElse,$this->_tpl)){
					$this->_tpl=preg_replace($_pattenElse, "<?php }else{ ?>", $this->_tpl);
				}
			}else{
				exit('ERROR,if语句没有关闭');
			}

		}
	}
	//PHP代码注释
	public function parCommon(){
		$_patten='/\{#\}(.*)\{#\}/';
		if(preg_match('/\{#\}(.*)\{#\}/', $this->_tpl)){
			$this->_tpl=preg_replace($_patten, "<?php /*$1*/?>", $this->_tpl);
		}

	}
	//解析系统变量
	private function parConfig(){
		$_pattenConfig='/<!--\{([\w]+)\}-->/';
		if(preg_match($_pattenConfig, $this->_tpl)){
			$this->_tpl=preg_replace($_pattenConfig, "<?php echo \$this->_config['$1'];?>", $this->_tpl);
			
		}
	}
	//解析foreach语句
	public function parForeach(){
		$_pattenForeach='/\{foreach\s+\$([\w]+)\(([\w]+),([\w]+)\)\}/';
		$_pattenEndForeach='/\{\/foreach\}/';
		$_pattenVar='/\{@([\w]+)([\[\w\]]*)\}/';
		if(preg_match($_pattenForeach, $this->_tpl)){
			if(preg_match($_pattenEndForeach, $this->_tpl)){
				$this->_tpl=preg_replace($_pattenForeach, "<?php foreach(\$this->_vars['$1'] as \$$2 => \$$3){?>", $this->_tpl);
				$this->_tpl=preg_replace($_pattenEndForeach,"<?php } ?>", $this->_tpl);
				if(preg_match($_pattenVar, $this->_tpl)){
					$this->_tpl=preg_replace($_pattenVar, "<?php echo \$$1$2;?>", $this->_tpl);
				
				}else{
					echo '没有匹配到';
				}
			}else{
				exit('foreach必须得有结束标签！');
			}

		}

	}
	//解析include语句
	private function parInclude(){
		$_pattenInclude='/\{include\s+file=\"([\w\.\-]+)\"\}/';
		if(preg_match($_pattenInclude, $this->_tpl,$_file)){
			if(!file_exists($_file[1]) || empty($_file)){
				exit('包含文件出错');
			}else{
			$this->_tpl=preg_replace($_pattenInclude, "<?php include '$1';?>", $this->_tpl);

			}
		}
	}

	//对外公共方法
	public function compile($_parFile){
		//解析模板内容
		$this->parVar();
		$this->parIf();
		$this->parCommon();
		$this->parForeach();
		$this->parInclude();
		$this->parConfig();
		//生成编译文件
		if(!file_put_contents($_parFile,$this->_tpl)){
			exit('ERROR,编译文件出错！');
		}
	}

}

?>