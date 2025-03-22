<?php
$arUrlRewrite=array (
  15 => 
  array (
    'CONDITION' => '#^/dokumenty/([a-zA-Z0-9\\.\\-_]+)/([a-zA-Z0-9\\.\\-_]+)/?.*#',
    'RULE' => 'SECTION_CODE=$1&SUB_SECTION_CODE=$2',
    'PATH' => '/dokumenty/index.php',
    'SORT' => 100,
  ),
  27 => 
  array (
    'CONDITION' => '#^/novosti/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/novosti/index.php',
    'SORT' => 100,
  ),
  1 => 
  array (
    'CONDITION' => '#^(.*)$#',
    'RULE' => '$1.php',
    'SORT' => 100,
  ),
  26 => 
  array (
    'CONDITION' => '#^#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/local/templates/.default/components/bitrix/news/news_list_index/bitrix/news.list/.default/template.php',
    'SORT' => 100,
  ),
  16 => 
  array (
    'CONDITION' => '#^/dokumenty/([a-zA-Z0-90-9\\.\\-_]+)/?.*#',
    'RULE' => 'SECTION_CODE=$1',
    'PATH' => '/dokumenty/index.php',
    'SORT' => 110,
  ),
  0 => 
  array (
    'CONDITION' => '#^(.*)\\?(.*)#',
    'RULE' => '$1.php?$2',
    'SORT' => 120,
  ),
);
