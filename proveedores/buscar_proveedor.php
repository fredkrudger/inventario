<?php
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') 
{
	class Autocompletar
{
 
	private $dbh;
 
	public function __construct()
	{
		$this->dbh = new PDO("mysql:host=localhost;dbname=inventario", "root", "");
	}
 
	public function findData($search)
	{
	 $query = $this->dbh->prepare("SELECT * FROM proveedor
                WHERE proveedor.nombre_proveedor LIKE :search LIMIT 5");
        $query->execute(array(':search' => '%'.$search.'%'));
        $this->dbh = null;
        if($query->rowCount() > 0)
        {
          echo json_encode(array('res' => 'full', 'data' => $query->fetchAll()));
        }
        else
        {
           echo json_encode(array('res' => 'empty'));
        }
	}
}

	$search = $_POST["autocomplete"];
	$autocompletar = new Autocompletar();
	$autocompletar->findData($search);
}
 