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
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap');
        @keyframes fadeIn {
  0% { opacity: 0; }
  100% { opacity: 1; }
}
.fadein { animation: fadeIn 2s; }
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

input::placeholder, select {
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
   
    font-size: 0.7em;
    color: white !important;
    text-decoration: underline;
}

    </style>
    <div class="row main-row">
        <div class="col-3 main">
    <form action="controller/controller.php" method="post">
        <?php if(isset($_REQUEST['login']) && $_REQUEST['login']!=""){
            ?>
 <p>Seja Bem-vindo(a) de volta!</p>
 <input type="hidden" name="old" value="1">

 <input class="input-padrao" type="text" autocomplete="none" name="email" placeholder="Seu email..." required id=""><br>
 <input class="input-padrao" type="text" name="senha" placeholder="Sua senha..." required id=""><br>

 <button type="submit" class="submit-button">Prosseguir</button>

 </form>
        <a href="index.php?login=" class="link">Não tenho login</a>




            <?php } else{?>
        <p>Seja Bem-vindo(a)!</p>
    <input type="hidden" name="new" value="1">
            <input class="input-padrao" type="text" name="nome" placeholder="Seu nome..." required id=""><br>
            <input class="input-padrao" type="text" name="sobrenome" placeholder="Seu sobrenome..." required id=""><br>
            <input class="input-padrao" type="text" name="telefone" placeholder="Seu telefone..." required id=""><br>
            <input class="input-padrao" type="text" autocomplete="none" name="email" placeholder="Seu email..." required id=""><br>
            <input class="input-padrao" type="text" name="senha" placeholder="Sua senha..." required id=""><br>
            <select  class="input-padrao" name="estado" id="">
                <option value="" selected disabled>Seu Estado...</option>
                <option value="AC">Acre</option>
                <option value="AL">Alagoas</option> 
                <option value="AP">Amapá</option>  
                <option value="AM">Amazonas</option> 
                <option value="BA">Bahia</option> 
                <option value="CE">Ceará</option>  
                <option value="DF">Distrito Federal</option>  
                <option value="ES">Espírito Santo</option>  
                <option value="GO">Goiás</option>   
                <option value="MA">Maranhão</option>     
                <option value="MG">Minas Gerais</option> 
                <option value="MS">Mato Grosso do Sul</option>     
                <option value="MT">Mato Grosso</option>          
                <option value="PA">Pará</option>            
                <option value="PB">Paraíba</option>                     
                <option value="PE">Pernambuco</option>                            
                <option value="PI">Piauí</option>                           
                <option value="PR">Paraná</option>        
                <option value="RJ">Rio de Janeiro</option>          
                <option value="RN">Rio Grande do Norte</option>       
                <option value="RO">Rondônia</option>        
                <option value="RS">Rio Grande do Sul</option>       
                <option value="RR">Roraima</option>  
                <option value="SC">Santa Catarina</option>       
                <option value="SP">São Paulo</option>         
                <option value="SE">Sergipe</option>      
                <option value="TO">Tocantins</option>                 
            
            </select>
            <br>
            <button type="submit" class="submit-button">Prosseguir</button>
        </form>
        <a href="index.php?login=sim" class="link">Já tenho cadastro</a>
        </div>
    </div>
    <?php } if(isset($_REQUEST["msg"])){

$cod = $_REQUEST["msg"];
require_once "model/msg.php";
echo "<script>alert('" . $MSG[$cod] . "');</script>";

}
?>
</body>
</html>