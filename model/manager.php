<?php


function userNew($dados){ //função pra criar adm
     require "conexao.php";
     $query = " CALL VerificarEmailExistente('{$dados['email']}', @resultado);";
     $conn->query($query);
 
 // Obtém o resultado da procedure
 $resultQuery = $conn->query("SELECT @resultado as resultado");
 $row = $resultQuery->fetch_assoc();
 $result = $row['resultado'];
 
 // Cria uma condição com base no resultado
 if ($result == 0) {
    
    
     $sql="INSERT INTO usuarios (nome,sobrenome,email,senha,telefone, estado) VALUES ('{$dados["nome"]}', '{$dados["sobrenome"]}','{$dados["email"]}', '{$dados["senha"]}','{$dados["telefone"]}',  '{$dados["estado"]}')";
    $result = $conn -> query($sql);
    if($result == true){
        $conn->close();
        $dados["result"]=1;
        return $dados;
    }    else{
        $conn->close();
        $dados["result"]=0;
        return $dados;
    }


}else{
    $conn->close();
    $dados["result"]=0;
    return $dados;
}} 


function loginUser($dados){
    require "conexao.php";
    $sql = "SELECT * FROM usuarios WHERE email = {$dados["email"]}  AND senha = {$dados["senha"]} ";
    $result = $conn -> query($sql);
    if($result != 0){
        $dados=array();
        $row=$result->fetch_assoc();
            $dados["id"] = $row["ID"];
            $dados["nome"] = $row["nome"];
            $dados["email"] = $row["email"];
            $dados["senha"] = $row["senha"];
            $dados["telefone"] = $row["celular"];      
            $dados["estado"] = $row["estado"];
      
        
        $dados["result"] = 1;
        $conn->close();
        return $dados;
    }else{
        $dados["result"]=0;
        $conn->close();
        return $dados;
    }
}

?>