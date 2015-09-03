<?php

/* Prevent Direct Access */
defined('ADAPT_STARTED') or die;

$adapt = $GLOBALS['adapt'];
$sql = $adapt->data_source->sql;

/*
 * Tagging categories but tags are only available in the context
 * they are being used
 */
$sql->create_table('tag_context')
    ->add('tag_context_id', 'bigint')
    ->add('bundle_name', 'varchar(128)')
    ->add('name', 'varchar(64)')
    ->add('label', 'varchar(64)')
    ->add('description', 'text')
    ->add('date_created', 'datetime')
    ->add('date_modified', 'timestamp')
    ->add('date_deleted', 'datetime')
    ->primary_key('tag_context_id')
    ->execute();

$model = new model_tag_context();
$model->bundle_name = 'tagging';
$model->name = 'global';
$model->label = 'Global Tags';
$model->description = 'Tags for use where no context is available';
$model->save();

$sql->create_table('tag')
    ->add('tag_id', 'bigint')
    ->add('tag_context_id', 'bigint')
    ->add('user_id', 'bigint')
    ->add('tag', 'varchar(64)')
    ->add('date_created', 'datetime')
    ->add('date_modified', 'timestamp')
    ->add('date_deleted', 'datetime')
    ->primary_key('tag_id')
    ->foreign_key('tag_context_id', 'tag_context_id', 'tag_context_id')
    ->execute();


    




?>