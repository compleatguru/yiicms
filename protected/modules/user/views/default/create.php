<?php
/**
 * @var $model User
 * @var $this Controller
 */
$this->breadcrumbs = array(
    Yii::t('user', 'Members') => array('admin'),
    Yii::t('user', 'Add'),
);

echo $this->renderPartial('_form', array('model' => $model));
