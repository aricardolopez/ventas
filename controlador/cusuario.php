<?php
	include('modelo/musuario.php');
	$ins = new musuario();
	$doc = isset($_POST['doc']) ? $_POST['doc']:NULL;
	$nom = isset($_POST['nom']) ? $_POST['nom']:NULL;
	$tel = isset($_POST['tel']) ? $_POST['tel']:NULL;
	$dir = isset($_POST['dir']) ? $_POST['dir']:NULL;
	$p  =  isset($_POST['p']) 	? $_POST['p']:NULL;

	$error_msg = "";
	$idperf = isset($_POST['idperf']) ? $_POST['idperf']:NULL;

	echo $p;

	$usuarios = $ins->selusu();
	$perfiles = $ins->selperf();

	if($doc && $nom && $p)
	{
		$ins -> insusu($doc,$nom,$tel,$dir,$idperf);
	}




	/*
	$nom=isset($_POST['nomperf']) ? $_POST['nomperf']:NULL;
	

	if($idperf&&$nomperf)
	{
		$ins -> insperf($idperf,$nomperf);
	}*/
?>