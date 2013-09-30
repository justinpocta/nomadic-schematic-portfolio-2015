<?php

function tagcloud($parent, $options=array()) {

  global $site;
  
  // default values
  $defaults = array(
    'limit'    => false,
    'field'    => 'tags',
    'children' => 'visible',
    
    'param'    => 'tag',
    'sort'     => 'name',
    'sortdir'  => 'asc',
    'field' => 'projecttype'
  );

  // merge defaults and options
  $options = array_merge($defaults, $options);  
    
  switch($options['children']) {
    case 'invisible':
      $children = $parent->children()->invisible();
      break;
    case 'visible';
      break;
    default:
      $children = $parent->children();
      break;
  }


  



    

          

}

?>
