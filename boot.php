<?php

/* Prevent Direct Access */
defined('ADAPT_STARTED') or die;

$adapt = $GLOBALS['adapt'];
$sql = $adapt->data_source->sql;

/* We are going to extend model and make tagging available globally */
\frameworks\adapt\model::extend(
    'tag',
    function($_this, $tags = null, $context = null){
        if (is_null($tags)){
            /* Retrieving */
            
        }else{
            /* Setting */
            
            
        }
    }
);

?>