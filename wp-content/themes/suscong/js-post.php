<?php
	
$js_entrada = get_field("js-posts");
if ($js_entrada){
	echo $js_entrada;
	//echo '<script language="javascript">alert(\'Llamada JS\')</script>';
	$postid = get_the_ID();
	//echo $postid;
	if($postid){
	 echo "entro1";
	}
}
?>