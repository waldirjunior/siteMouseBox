<?php

class postagem {

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

    public function mostrarpostsprogramacao(){
        $conexao = mysql_connect("216.172.160.199","clash641_admin","121094") or die (mysql_error());
        $banco = mysql_select_db("clash641_testecms");

        $query = sprintf("SELECT ID,post_author,post_date,post_content,post_title,post_categoria FROM box_posts ORDER BY ID DESC");
        $dados = mysql_query($query, $conexao) or die(mysql_error());
        $linha = mysql_fetch_assoc($dados);
        $total = mysql_num_rows($dados);

        $noticias = array();

        do{
            $categoria = stripslashes($linha['post_categoria']);
            if($categoria == "elem_3"){
                $noticias[]= $linha;
            }
        }while($linha = mysql_fetch_assoc($dados));


        mysql_free_result($dados);

        return $noticias;
    }

    public function retornarvalorid($valor){
    	$conexao = mysql_connect("216.172.160.199","clash641_admin","121094") or die (mysql_error());
        $banco = mysql_select_db("clash641_testecms");
    	$query = sprintf("SELECT * FROM box_posts ORDER BY ID DESC");
    	$dados = mysql_query($query, $conexao) or die(mysql_error());
    	$linha = mysql_fetch_assoc($dados);

    	/*echo("<script>console.log('PHP: ".json_encode($linha)."');</script>");
     	$valor = "teste";
		echo "<br /><br /><br /> ".$valor;
     	*/

        do{
	    	$apoio = stripslashes($linha['ID']);
	    	if($apoio == $valor){
	        	$valor= $linha;
	    	}
	    }while($linha = mysql_fetch_assoc($dados));

        return $valor;
    }

    function sluggify($url) {
        # Prep string with some basic normalization
        $url = strtolower($url);
        $url = strip_tags($url);
        $url = stripslashes($url);
        $url = html_entity_decode($url);

        # Remove quotes (can't, etc.)
        $url = str_replace('\'', '', $url);

        # Replace non-alpha numeric with hyphens
        $match = '/[^a-z0-9]+/';
        $replace = '-';
        $url = preg_replace($match, $replace, $url);

        $url = trim($url, '-');

        return $url;
    }


}



?>