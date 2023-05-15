<html>
<body>    
<form method="post" enctype="multipart/form-data">
    <label>NOME:</label>
    <input type="text" name="nome">
    <label>DESCRICAO:</label>
    <input type="text" name="descricao">
    <input type="file" name="foto[]">

    <input type="submit" name="">
</form>
<pre>
<?php
    if (isset($_POST['nome'])){
        $nome      = addslashes($_POST['nome']);
        $descricao = addslashes($_POST['descricao']);
        $fotos     = array();

    }

    ?>
</body>
</html>    