<?php

class games {

    public $conexao;
    public $banco;
    public $db;
    public $var;
    public $val;
    public $apoio;
    public $noticias = array();
    public $valor;
    public $id;
    public $query;
    public $dados;
    public $linha;

    // Metodo construtor setamos aqui o que queremos que ele faça ao criar o objeto
    function __construct(){
        //criamos a nossa conexao com o banco de dados e selecionamos o banco
    }
    /* O metodo __set e responsavel por receber o nome da propriedade e o valor a ser atribuido, podendo atribuir ou nao*/
    function __set($var, $val){
        $this->$var = $val;

    }


    public function retornarvalorid($valor){
    	$conexao = mysql_connect("216.172.160.199","clash641_admin","121094") or die (mysql_error());
        $banco = mysql_select_db("clash641_testecms");
    	$query = sprintf("SELECT * FROM testnoticia ORDER BY n_id DESC");
    	$dados = mysql_query($query, $conexao) or die(mysql_error());
    	$linha = mysql_fetch_assoc($dados);

    	/*echo("<script>console.log('PHP: ".json_encode($linha)."');</script>");
     	$valor = "teste";
		echo "<br /><br /><br /> ".$valor;
     	*/

        do{
	    	$apoio = stripslashes($linha['n_id']);
	    	if($apoio == $valor){
	        	$valor= $linha;
	    	}
	    }while($linha = mysql_fetch_assoc($dados));

        return $valor;
    }


}



?>