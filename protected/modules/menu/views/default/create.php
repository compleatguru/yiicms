<?php
/**
 * @var $this Controller
 * @var $model Menu
 * @var $root bool
 */
$this->breadcrumbs = array(
	Yii::t('menu', 'Menu') => array('default/admin'),
	Yii::t('menu', 'Addition'),
);

echo $this->renderPartial('_form', array('model' => $model, 'root' => $root));
