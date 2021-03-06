<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/column1';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();

	protected function getCurrectDate(){
		$now = time();
		$currectTime = date("Y-m-d H:i:s",$now);	
		return $currectTime;
	}
	protected function jsonSuccess($data, $params = array())
	{
		$data = array('code'=>200,'message'=>'操作成功','data'=>$data);
		$data = array_merge($data, $params);
		echo CJSON::encode($data);
		exit;
	}
	protected function jsonError($data,$message, $params = array())
	{
		$data = array('code'=>201,'message'=>$message,'data'=>$data);
		$data = array_merge($data, $params);
		echo CJSON::encode($data);
		exit;
	}
	
}