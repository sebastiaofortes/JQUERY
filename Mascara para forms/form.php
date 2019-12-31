<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Usando máscaras com jquery</title>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="jquery.maskedinput.js"></script>
</head>
 <script type="text/javascript">
$(document).ready(function(){
	$("input.data").mask("9999-99-99");
        $("input.cpf").mask("999.999.999-99");
        $("input.cep").mask("99.999-999");
});
</script>

 <form action="salvar.php" method="post">
 
 <input type="text"  name="data"  class="data" id="data"  maxlength="10">
 
 <button type="submit" class="btn btn-primary btn-block btn-flat">Salvar</button>
   
 
   </form>