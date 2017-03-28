<?php //17.13.1 DreamStarter 2.5 minimal core

$sys['core_path']=$_SERVER['DOCUMENT_ROOT'];
$sys['core_url']=$_SERVER['HTTP_HOST'];

function FN($logic,$data,$type)
{
	global $sys;
	include $core_pth.'/logic/'.$logic.'.php';
	return ($ret);
}

FN('init','','');//load all vars to $sys

echo FN('mandate',$sys['init']['order'],$sys['ui']);//mandates a list and sens it's result to some renderer with consequenses (like caching);
?>
