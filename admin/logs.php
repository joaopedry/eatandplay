<?php 
	include_once "connect.php";
	include_once "functions.php";
	protegePagina();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php include_once "template/header.php"; ?>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Painel de Controle</title>
    </head>
    
    <body>
    <header>
    	<div class="logo"><a href="index.php">eat&play </a></div>
    </header>
		<?php include_once "template/lateral.php"; ?>
    	<section class="conteudo">
        	<h1 class="titulo">Visualizar Logs:</h1>
            <div class="UPmusica">
                <table>
                    <thead>
                        <tr>
                            <th>Arquivo de log</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        	<td>
                                <select style="width:100%;" name="download" onChange="download(this.value)">
                                    <?php 
                                    foreach(new DirectoryIterator("logs/")  as $fileInfo)
                                    {
                                        if($fileInfo->isDot()) continue;
                                        $arqName = $fileInfo->getFilename();
                                    ?>
                                    <option  value="<?php echo $arqName;?>"><?php echo $arqName;?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                           </td>
              			</tr>  
                    </tbody>
                </table>
            </div>
       	</section>
    </body>
</html>
<script type="text/javascript">
function download(d) {
        if (d == 'Select document') return;
        window.location = 'http://localhost/site/admin/logs/' + d;
}
</script>


<script>
function ConfirmarAlteracao(){		if (confirm ("Deseja realmente excluir?"))		return true;	else		return false;}
</script>