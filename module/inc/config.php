<?php
$protocol = (array_key_exists('HTTPS', $_SERVER) && $_SERVER["HTTPS"] == "on") ? 'https://' : 'http://';
$host = $_SERVER['HTTP_HOST'];
$adminroot = rtrim('','/');
$root = rtrim('/','/');

define('ROOTPATH', str_replace('conts/','',$_SERVER['DOCUMENT_ROOT'] . $root . '/'));
define('SITEURL', $protocol . $host . $root);

$siteinfo = array(
	'viewport' => 'width=1040',
	'name' => '名古屋ディスコの始まり | 混血孤児のエスノグラフィー | 名古屋ディスコの起源から紐解く文化の出会い',
	'subname' => '名古屋ディスコの始まり | 混血孤児のエスノグラフィー | 名古屋ディスコの起源から紐解く文化の出会い',
	'url' => $protocol . $host . $root,
	'adminurl' => $protocol . $host . $adminroot,
	'description' => "先祖から聞いている名古屋ディスコの起源について、時代背景と共に現代でも課題として上げられる、文化の出会いから見た表現・言論の自由を考え、まとめました。"
);


$pageinfo = array();
$addelements = array();

switch($filename){
	case 'index.php':
		$pageinfo = array(
			'id' => 'index',
			'canonical' => SITEURL.'/',
			'classtype' => '',
			'layouttype' => '',
			'description' => $siteinfo['description'],
			'title' => $siteinfo['name']
		);
	break;
}

if(empty($pageinfo["description"])){
	$pageinfo["description"] = $siteinfo["description"];
}
if(empty($pageinfo["title"])){
	$pageinfo["title"] = $pagename.' | '.$siteinfo['subname'];
}


?>