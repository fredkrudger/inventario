<?php
<<<<<<< HEAD
session_start();
=======
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') 
{
	class Autocompletar
{
	private $dbh;
 
	public function __construct()
	{
<<<<<<< HEAD
		$this->dbh = new PDO("mysql:host=mysql.hostinger.es;dbname=u608912532_bd", "u608912532_root", "123456");
	}
	public function findData($search,$rol)
=======
		$this->dbh = new PDO("mysql:host=localhost;dbname=inventario", "root", "");
	}
	public function findData($search)
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
	{
	 $query = $this->dbh->prepare("SELECT * FROM envio
                WHERE envio.id_envio LIKE :search LIMIT 5");
        $query->execute(array(':search' => '%'.$search.'%'));
        $this->dbh = null;
        if($query->rowCount() > 0)
        {
<<<<<<< HEAD
          echo json_encode(array('res' => 'full', 'data' => $query->fetchAll(), 'rol' => $rol));
=======
          echo json_encode(array('res' => 'full', 'data' => $query->fetchAll()));
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
        }
        else
        {
           echo json_encode(array('res' => 'empty'));
        }
	}
}
<<<<<<< HEAD
    
    if(isset($_SESSION["admin"])){ 
		$rol = $_SESSION["admin"];
	}else{
		$rol = $_SESSION['user'];
	}

	$search = $_POST["autocomplete"];
	$autocompletar = new Autocompletar();
	$autocompletar->findData($search,$rol);
=======
	$search = $_POST["autocomplete"];
	$autocompletar = new Autocompletar();
	$autocompletar->findData($search);
>>>>>>> 446942e80d104328d6913c44f1a36546bf726908
} 