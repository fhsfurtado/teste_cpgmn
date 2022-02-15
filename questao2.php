<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 2</title>
</head>
<body>
    <div style="width:50%">
        <div>
            <input type="text" name="senha" id="senha">
        </div><br>
        <div id="div_atende">
            Falta mais <label id="atende">6 caracteres</label>.
        </div>
        <div id="detalhes">
            <div>
                Tem número?   <label id="num">false</label>
            </div><br>
            <div>
                Tem Maiuscula?  <label id="mai">false</label>
            </div><br>
            <div>
                Tem minúscula?  <label id="min">false</label>
            </div><br>
            <div>
                Tem Car. Esp?  <label id="sch">false</label>
            </div><br>
            <div>
                Tem 6 caracs?  <label id="ch6">false</label>
            </div><br>
        </div>
    </div>
    <script type="text/javascript">
        window.onload = function() {
            document.querySelector("#senha").addEventListener("keyup",verifyPass);
        };

        function verifyPass(){
            var tam_min = 6; // tamanho mínimo desejado para a senha
            var pass = document.getElementById("senha");
            number = /[0-9]/g;
            upper  = /[A-Z]/g;
            lower  = /[a-z]/g;
            SpcCh  = /[!@#$%^&*()-+]/g;
            hasNumber = false;
            hasUpper  = false;
            hasLower  = false;
            hasSpcCh  = false;
            hasALSix  = false;
            if(pass.value.length>=tam_min){ // 6 = quantidade mínima de caracteres
                hasALSix=true;
            }
            hasNumber= number.test(pass.value);
            hasUpper = upper.test(pass.value);
            hasLower = lower.test(pass.value);
            hasSpcCh = SpcCh.test(pass.value);
            document.getElementById("num").textContent = hasNumber;
            document.getElementById("mai").textContent = hasUpper;
            document.getElementById("min").textContent = hasLower;
            document.getElementById("sch").textContent = hasSpcCh;
            document.getElementById("ch6").textContent = hasALSix;
            
            total = Number(hasNumber)+Number(hasUpper)+Number(hasLower)+Number(hasSpcCh)+Number(hasALSix);
            
            if(total==5 && pass.value.length>=tam_min){
                document.getElementById("div_atende").textContent = 'A senha atende todos os requisitos e é segura!';
            } else{
                if(total==5){
                    document.getElementById("atende").textContent = '1 caractere';
                } else{
                    document.getElementById("atende").textContent = Number(Number(tam_min)-Number(total))+" caracteres";
                }
            }
        }
    </script>
</body>
</html>