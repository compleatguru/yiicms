<?php
/**
 * @var $this Controller
 * @var $model Menu|NestedSetBehavior
 */
$this->breadcrumbs = array(
    Yii::t('menu', 'Menu')        => array('default/admin'),
    Yii::t('menu', 'Изменение ' . $model->title),
);
echo $this->renderPartial('_form', array('model' => $model, 'root' => $model->isRoot()));
