<?php
	function zag(){
		header ("{$_SERVER['SERVER_PROTOCOL']} 200 OK");
		header ('Content-Type: application/json');
		header ('Access-Control-Allow-Origin: *');
	}
	
	function rest_get($request, $data){ 
		$idartikla = $_GET['articleID'];
		$veza = new PDO('mysql:host=' . getenv('MYSQL_SERVICE_HOST') . ';port=3306;dbname=sajrinabaza', 'root', '');
		$veza->exec("set names utf8");
        $upit = $veza->prepare("SELECT * FROM articles WHERE articleID=?");
        $upit->bindValue(1, $idartikla, PDO::PARAM_INT);
        $upit->execute();
		$rezultat = '';
		foreach($upit->fetchAll() as $red) {
			$rezultat = array('title' => $red['title'], 'description' => $red['description'], 'author' => $red['author']);
		}
		if($rezultat != ''){
			echo json_encode($rezultat, JSON_UNESCAPED_UNICODE);
		}
		else {
			rest_error($rezultat);
		}
			
	}
	
	function rest_post($request, $data) 
	{
		print "Servis za post nije implementiran!";
	}
	
	function rest_delete($request) 
	{
		print "Servis za delete nije implementiran";
	}
	
	function rest_put($request, $data) 
	{ 
		print "Servis za put nije implementiran";
	}
	
	function rest_error($request) 
	{ 
		print "Neispravan id!";
	}
	
	$method = $_SERVER ['REQUEST_METHOD'];
	$request = $_SERVER ['REQUEST_URI'];
	switch($method) {
    case 'PUT':
        parse_str(file_get_contents('php://input'), $put_vars);
        zag(); $data = $put_vars; rest_put($request, $data); break;
    case 'POST':
        zag(); $data = $_POST; rest_post($request, $data); break;
    case 'GET':
        zag(); $data = $_GET; rest_get($request, $data); break;
    case 'DELETE':
        zag(); rest_delete($request); break;
    default:
        header("{$_SERVER['SERVER_PROTOCOL']} 404 Not Found");
        rest_error($request); break;
}
?>