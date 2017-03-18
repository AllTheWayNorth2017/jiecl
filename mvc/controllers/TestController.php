<?php


class TestController{


	public function test() {
		echo "这是test控制器的控制方法<br/>";


		include './models/TestModel.php';
		$model = new TestModel();
		$var = $model -> getVar();
		echo $var."<br/>";


		include './views/Test/TestView.php'; 
	}
}