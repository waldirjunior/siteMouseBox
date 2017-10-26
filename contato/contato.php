<!DOCTYPE HTML>
<html>

<!--Code Author: Mark-Anthony Karam
Host: mark-anthony.ca-->

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Contato</title>

<link type="text/css" rel="stylesheet" href="/contato/css/styles.css">

</head>

<body>
	
	

    <section class="body">
    
	    <form action="form.php" method="post" enctype="multipart/form-data">
	        
	        <h1 class="title">Contato</h1>
	        
		    <label></label>
		    <input name="name" required="required" placeholder="Seu Nome">
		    
		            
		    <label></label>
		    <input name="email" type="email" required="required" placeholder="Seu E-mail">
		            
		    
		    <label></label>
		    <textarea name="message" cols="20" rows="5" required="required" placeholder="Mensagem"></textarea>
		    
		    		    
		    <input id="cancel" name="cancel" value="Cancelar" />
		            
		    <input id="submit" name="submit" type="submit" value="Enviar">
	        
	    </form>

    </section>



</body>

</html>