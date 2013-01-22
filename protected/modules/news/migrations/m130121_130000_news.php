<?php

class m130121_130000_news extends EDbMigration
{
    public function safeUp()
    {
        $options = Yii::app()->db->schema instanceof CMysqlSchema ? 'ENGINE=InnoDB DEFAULT CHARSET=utf8' : '';

        $this->createTable('{{news}}', array(
                'id'             => 'int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT',
                'date'           => 'date NOT NULL',
                'title'          => 'varchar(75) NOT NULL',
                'keywords'       => 'varchar(200) NOT NULL',
                'description'    => 'varchar(200) NOT NULL',
                'content_short'  => 'varchar(400) NOT NULL',
                'content'        => 'text NOT NULL',
                'slug'           => 'varchar(75) NOT NULL',
                'image'          => 'varchar(300) NOT NULL',
                'status'         => 'enum("draft","published","moderation") NOT NULL DEFAULT "published"',
                'is_protected'   => 'tinyint(1) NOT NULL DEFAULT "0"',
                'create_user_id' => 'int(11) unsigned NOT NULL',
                'update_user_id' => 'int(11) unsigned DEFAULT NULL',
                'create_time'    => 'timestamp NULL DEFAULT NULL',
                'update_time'    => 'timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
            ),
            $options
        );
        $this->createIndex('ux_{{news}}_slug', '{{news}}', 'slug', true);
        $this->createIndex('ix_{{news}}_status', '{{news}}', 'status', false);
        $this->createIndex('ix_{{news}}_is_protected', '{{news}}', 'is_protected', false);
        $this->createIndex('ix_{{news}}_create_user_id', '{{news}}', 'create_user_id', false);
        $this->createIndex('ix_{{news}}_update_user_id', '{{news}}', 'update_user_id', false);
        if ((Yii::app()->db->schema instanceof CSqliteSchema) == false) {
            $this->addForeignKey('fk_{{news}}_{{user}}_create_user_id', '{{news}}', 'create_user_id', '{{user}}', 'id', 'NO ACTION', 'NO ACTION');
            $this->addForeignKey('fk_{{news}}_{{user}}_update_user_id', '{{news}}', 'update_user_id', '{{user}}', 'id', 'NO ACTION', 'NO ACTION');
        }
    }

    public function safeDown()
    {
        $this->dropTable('{{news}}');
    }
}