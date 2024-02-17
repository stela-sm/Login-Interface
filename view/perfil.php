<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>Login</title>
</head>
<body class="fadein">
<?php session_start(); ?>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap');
        @keyframes fadeIn {
  0% { opacity: 0; }
  100% { opacity: 1; }
}
.fadein { animation: fadeIn 2s; }
   
        @import url('https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap');
        .main-row{
    width: 100vw;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    
}
.main{
    background: rgba( 255, 255, 255, 0.25 );
box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
backdrop-filter: blur( 14.5px );
-webkit-backdrop-filter: blur( 14.5px );
border-radius: 15px;
border: 1px solid rgba( 255, 255, 255, 0.18 );


}

        body{
    height: 100vh;
    width: 100vw;
    align-items: center;
    justify-content: center;
    display: flex;
    background: rgb(123,201,232);
background: linear-gradient(42deg, rgba(123,201,232,1) 0%, rgba(118,118,245,1) 100%);
font-family: "Raleway", sans-serif;
}
       .input-padrao, .input-padrao:active{
    border: 0px;
    border-bottom: 1px white solid;
   background-color: transparent;
   color: white;
   margin-bottom: 1.2rem;
   width: 80%;
}

input::placeholder{
  color: white;
  font-size: 0.9em;
  opacity: 0.7;
}

textarea:focus, input:focus, select:focus {
    box-shadow: 0 0 0 0;
    
    border-bottom: 1px white solid;
    outline: 0;
} 
p{
    font-weight: 600;
    font-size: 1.8em;
    color: white;
    padding: 1em;

}
select{
    border: none;
    box-shadow: none;
    outline: none;
    appearance: none;
}
.main{
    padding-bottom: 50px;
    justify-content: center;
    align-items: center;
    text-align: center;
    padding: 30px;
}
option{
    color: black;
}
.submit-button{
    padding: 15px 10px;
    border-radius: 45px;
    cursor: pointer;
    background-color: transparent;
    color: white;
    width: 80%;
    border: 1px solid white;
    font-size: 0.8em;
    font-weight: 600;
    transition: 0.2s;
    text-transform: uppercase;
    margin-top: 2rem;
    margin-bottom: 10px;
}
.submit-button:hover{
    padding: 15px 10px;
    border-radius: 45px;
    cursor: pointer;
    background-color: white;
    color: rgba(118,118,245,1);
    width: 80%;    
    border: 1px solid white;
    font-size: 0.8em;
    font-weight: 600;
    transition: 0.2s;
}
.link{
   border: none;
   background-color: transparent;
    font-size: 0.7em;
    color: white !important;
    text-decoration: underline;
}

    </style>
    <div class="row main-row">
        <div class="col-3 main">
    <form action="controller/controller.php" method="post">
        <p>Minha Ficha</p>
    <input type="hidden" name="new" value="1">
            <input class="input-padrao" type="text" disbled value="NOME: <?php echo $_SESSION["nome"]?>"  name="nome" placeholder="Seu nome..." required id=""><br>
            <input class="input-padrao" type="text" disbled value="SOBRENOME: <?php echo $_SESSION["sobrenome"]?>"  name="sobrenome" placeholder="Seu sobrenome..." required id=""><br>
            <input class="input-padrao" type="text" disbled value="TELEFONE: <?php echo $_SESSION["telefone"]?>"  name="telefone" placeholder="Seu telefone..." required id=""><br>
            <input class="input-padrao" type="text" disbled value="EMAIL: <?php echo $_SESSION["email"]?>"  autocomplete="none" name="email" placeholder="Seu email..." required id=""><br>
          
            <select  class="input-padrao" name="estado" style="color:white; opacity:1;"disabled id="">
                <option <?php if ($_SESSION["estado"] == "AC"){ ECHO "selected";} ?>value="AC">ESTADO: Acre</option>
                <option <?php if ($_SESSION["estado"] == "AL"){ ECHO "selected";} ?>value="AL">ESTADO: Alagoas</option> 
                <option <?php if ($_SESSION["estado"] == "AP"){ ECHO "selected";} ?>value="AP">ESTADO: Amapá</option>  
                <option <?php if ($_SESSION["estado"] == "AM"){ ECHO "selected";} ?>value="AM">ESTADO: Amazonas</option> 
                <option <?php if ($_SESSION["estado"] == "BA"){ ECHO "selected";} ?>value="BA">ESTADO: Bahia</option> 
                <option <?php if ($_SESSION["estado"] == "CE"){ ECHO "selected";} ?>value="CE">ESTADO: Ceará</option>  
                <option <?php if ($_SESSION["estado"] == "DF"){ ECHO "selected";} ?>value="DF">ESTADO: Distrito Federal</option>  
                <option <?php if ($_SESSION["estado"] == "ES"){ ECHO "selected";} ?>value="ES">ESTADO: Espírito Santo</option>  
                <option <?php if ($_SESSION["estado"] == "GO"){ ECHO "selected";} ?>value="GO">ESTADO: Goiás</option>   
                <option <?php if ($_SESSION["estado"] == "MA"){ ECHO "selected";} ?>value="MA">ESTADO: Maranhão</option>     
                <option <?php if ($_SESSION["estado"] == "MG"){ ECHO "selected";} ?>value="MG">ESTADO: Minas Gerais</option> 
                <option <?php if ($_SESSION["estado"] == "MS"){ ECHO "selected";} ?>value="MS">ESTADO: Mato Grosso do Sul</option>     
                <option <?php if ($_SESSION["estado"] == "MT"){ ECHO "selected";} ?>value="MT">ESTADO: Mato Grosso</option>          
                <option <?php if ($_SESSION["estado"] == "PA"){ ECHO "selected";} ?>value="PA">ESTADO: Pará</option>            
                <option <?php if ($_SESSION["estado"] == "PB"){ ECHO "selected";} ?>value="PB">ESTADO: Paraíba</option>                     
                <option <?php if ($_SESSION["estado"] == "PE"){ ECHO "selected";} ?>value="PE">ESTADO: Pernambuco</option>                            
                <option <?php if ($_SESSION["estado"] == "PI"){ ECHO "selected";} ?>value="PI">ESTADO: Piauí</option>                           
                <option <?php if ($_SESSION["estado"] == "PR"){ ECHO "selected";} ?>value="PR">ESTADO: Paraná</option>        
                <option <?php if ($_SESSION["estado"] == "RJ"){ ECHO "selected";} ?>value="RJ">ESTADO: Rio de Janeiro</option>          
                <option <?php if ($_SESSION["estado"] == "RN"){ ECHO "selected";} ?>value="RN">ESTADO: Rio Grande do Norte</option>       
                <option <?php if ($_SESSION["estado"] == "RO"){ ECHO "selected";} ?>value="RO">ESTADO: Rondônia</option>        
                <option <?php if ($_SESSION["estado"] == "RS"){ ECHO "selected";} ?>value="RS">ESTADO: Rio Grande do Sul</option>       
                <option <?php if ($_SESSION["estado"] == "RR"){ ECHO "selected";} ?>value="RR">ESTADO: Roraima</option>  
                <option <?php if ($_SESSION["estado"] == "SC"){ ECHO "selected";} ?>value="SC">ESTADO: Santa Catarina</option>       
                <option <?php if ($_SESSION["estado"] == "SP"){ ECHO "selected";} ?>value="SP">ESTADO: São Paulo</option>         
                <option <?php if ($_SESSION["estado"] == "SE"){ ECHO "selected";} ?>value="SE">ESTADO: Sergipe</option>      
                <option <?php if ($_SESSION["estado"] == "TO"){ ECHO "selected";} ?>value="TO">ESTADO: Tocantins</option>                 
            
           </select>
            <br>
            <button type="button" onclick="logout()" class="submit-button">LogOut</button>
        </form>
        <button href="" onclick="excluir()"  class="link">Excluir meu cadastro</button>
        </div>
    </div>
    <?php  if(isset($_REQUEST["msg"])){

$cod = $_REQUEST["msg"];
require_once "model/msg.php";
echo "<script>alert('" . $MSG[$cod] . "');</script>";

}
?>
<script>
function logout(){
    if(confirm("Deseja se deslogar?") == true){
        window.location.href = '../controller/logout.php';
    }else{
        return false
    }
}

function excluir(){
    if(confirm("Deseja excluir sua ficha?") == true){
        window.location.href = '../controller/controller.php?excluir=1';
    }else{
        return false
    }
}
</script>
</body>
</html>