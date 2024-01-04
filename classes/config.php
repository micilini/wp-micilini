<?php

//Allowed Tags

$allowedTags = array(
    'a' => array(
        'href'   => true,
        'title'  => true,
        'target' => true,
    ),
    'br'     => array(),
    'em'     => array(),
    'strong' => array(),
    'span'   => array(
        'style' => true,
        'class' => true,
        'id' => true,
    ),
    'div' => array(
        'style' => true,
        'class' => true,
        'id' => true,
    ),
    'p'      => array(),
    'ul'     => array(),
    'ol'     => array(),
    'li'     => array(),
    'blockquote' => array(),
    'cite'  => array(),
    'code'  => array(),
);

?>