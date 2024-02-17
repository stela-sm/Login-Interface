<?php
session_start();  // Starting Session

if (isset($_REQUEST["new"])){
    require_once"../model/ferramentas.php";
    foreach ($_REQUEST as $chave => $valor) {
        if (!antiInjection($valor)) {
            
            session_destroy();
            ?>

          <form action="../index.php" name="form" id="myForm" method="POST">
                <input type="hidden" name="msg" value="OP02"> 
                </form> 
                <script>
                document.getElementById('myForm').submit();//envio automático submit()
                </script> 
                <?php  
                exit;
        }
    }
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

                $_SESSION["nome"] = $dados["nome"];
                $_SESSION["sobrenome"] = $dados["sobrenome"];
                $_SESSION["email"] = $dados["email"];
                $_SESSION["estado"] = $dados["estado"]; 
                $_SESSION["senha"] = $_REQUEST["senha"]; 
                $_SESSION["telefone"] = $dados["telefone"];
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
                foreach ($_REQUEST as $chave => $valor) {
                    if (!antiInjection($valor)) {
                        
                        session_destroy();
                        ?>
            
                      <form action="../index.php?login=1" name="form" id="myForm" method="POST">
                            <input type="hidden" name="msg" value="OP02"> 
                            </form> 
                            <script>
                            document.getElementById('myForm').submit();//envio automático submit()
                            </script> 
                            <?php  
                            exit;
                    }
                }
                $senhaHASH = hash256($_REQUEST['senha']);
                require_once"../model/manager.php"; //arquivo específico para comunicação com o BD
                $dados = array();
               $dados["email"] =  $_REQUEST["email"]  ;
               $dados["senha"] =  $senhaHASH ; 
                $resp=loginUser($dados);
                if($resp["result"]==1){//tudo certo!
            
                            $_SESSION["nome"] = $resp["nome"];
                            $_SESSION["sobrenome"] = $resp["sobrenome"];
                            $_SESSION["email"] = $resp["email"];
                            $_SESSION["estado"] = $resp["estado"]; 
                            $_SESSION["senha"] = $_REQUEST["senha"]; 
                            $_SESSION["telefone"] = $resp["telefone"];
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
                            <input type="hidden" name="msg" value="FR02">  
                            </form> 
                            <script>
                            document.getElementById('myForm').submit();//envio automático submit()
                            </script> 
                            <?php  
                            }
                        }



                        if (isset($_REQUEST["excluir"])){
                            require_once"../model/manager.php"; 
                            $dados=excluirUser($_SESSION["email"]);
                                       
                                ?>
                        
                                  <form action="../index.php" name="form" id="myForm" method="POST">
                                  <input type="hidden" name="msg" value="OP51">  
                                        </form> 
                                        <script>
                                        document.getElementById('myForm').submit();//envio automático submit()
                                        </script> 
                                        <?php  
                                        }
                                    







