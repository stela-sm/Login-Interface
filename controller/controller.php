<?php
session_start();  // Starting Session

if (isset($_REQUEST["new"])){
    require_once"../model/ferramentas.php";
    $senhaHASH = hash256($_REQUEST['senha']);
    require_once"../model/manager.php"; //arquivo específico para comunicação com o BD
    $dados = array();
   $dados["nome"] =  $_REQUEST["nome"] ;
   $dados["sobrenome"] = $_REQUEST["sobrenome"] ;
   $dados["email"] =  $_REQUEST["email"]  ;
   $dados["telefone"] = $_REQUEST["telefone"] ; 
   $dados["senha"] =  $senhaHASH   ; 
   $dados["estado"] =  $_REQUEST["estado"]  ;
    $dados=userNew($dados);
    if($dados["result"]==1){//tudo certo!

                $_SESSION["NOME"] = $dados["nome"];
                $_SESSION["SOBRENOME"] = $dados["sobrenome"];
                $_SESSION["EMAIL"] = $dados["email"];
                $_SESSION["ESTADO"] = $dados["estado"]; 
                $_SESSION["SENHA"] = $_REQUEST["senha"]; 
                $_SESSION["TELEFONE"] = $dados["telefone"];
        ?>

          <form action="../view/perfil.php" name="form" id="myForm" method="POST">
                <input type="hidden" name="result" value="validado"> 
                </form> 
                <script>
                document.getElementById('myForm').submit();//envio automático submit()
                </script> 
                <?php  
                }else{//erro no cadastro, volta pra tela de login e exibe mensagem de erro

                    session_destroy();
                    ?>
                <form action="../index.php" name="form" id="myForm" method="POST">
                <input type="hidden" name="msg" value="FR06">  
                </form> 
                <script>
                document.getElementById('myForm').submit();//envio automático submit()
                </script> 
                <?php  
                }
            }

            if (isset($_REQUEST["old"])){
                require_once"../model/ferramentas.php";
                $senhaHASH = hash256($_REQUEST['senha']);
                require_once"../model/manager.php"; //arquivo específico para comunicação com o BD
                $dados = array();
               $dados["email"] =  $_REQUEST["email"]  ;
               $dados["senha"] =  $senhaHASH   ; 
                $dados=loginUser($dados);
                if($dados["result"]==1){//tudo certo!
            
                            $_SESSION["NOME"] = $dados["nome"];
                            $_SESSION["SOBRENOME"] = $dados["sobrenome"];
                            $_SESSION["EMAIL"] = $dados["email"];
                            $_SESSION["ESTADO"] = $dados["estado"]; 
                            $_SESSION["SENHA"] = $_REQUEST["senha"]; 
                            $_SESSION["TELEFONE"] = $dados["telefone"];
                    ?>
            
                      <form action="../view/perfil.php" name="form" id="myForm" method="POST">
                            <input type="hidden" name="result" value="validado"> 
                            </form> 
                            <script>
                            document.getElementById('myForm').submit();//envio automático submit()
                            </script> 
                            <?php  
                            }else{//erro no cadastro, volta pra tela de login e exibe mensagem de erro
            
                                session_destroy();
                                ?>
                            <form action="../index.php?login=sim" name="form" id="myForm" method="POST">
                            <input type="hidden" name="msg" value="FR06">  
                            </form> 
                            <script>
                            document.getElementById('myForm').submit();//envio automático submit()
                            </script> 
                            <?php  
                            }
                        }










