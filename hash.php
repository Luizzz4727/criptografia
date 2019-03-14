<?php 
@$login = $_POST['login'];
@$senha1 = $_POST['senha'];

if($senha1 != ""){
    $senha = md5($senha1);
    $senha2 = sha1($senha1);
    echo "Sua senha é (MD5): " . $senha . "<br><br>";
    echo "Sua senha é (SHA1): " . $senha2 . "<br><br>";
    
    $senha3 = base64_encode($senha1);
    echo "Sua senha é (BASE64-CODIFICADO): " . $senha3 . "<br><br>";
    $senha4 = base64_decode($senha3);
    echo "Sua senha é (BASE64-DECODIFICADO): " . $senha4;

    

}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criptografia</title>
</head>
<body>
    <form action='' method='post' autocomplete='off'>
        <input type='text' name='login' />
        <input type='password' name='senha' />
        <input type='submit' />
    </form>
</body>
</html>
