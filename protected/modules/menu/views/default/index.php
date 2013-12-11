<?php
/**
 * @var $this Controller
 * @var $dataProvider CDataProvider
 */
$this->breadcrumbs = array(
    Yii::t('menu', 'Menu')        => array('default/admin'),
    Yii::t('menu', 'Управление'),
);

$this->widget(
    'bootstrap.widgets.TbListView',
    array(
        'dataProvider'    => $dataProvider,
        'itemView'        => '_view',
    )
);
