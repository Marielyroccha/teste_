<html>
    <head>
        <link href="css/geral.css" rel="stylesheet" />
    </head>
    <body style="background-color: #FC775A;">
        <div style="display: flex; justify-content: center; color: #EBFEF5;">
            <h1>Cadastrar Produto</h1>
        </div>
        <div style="display: flex; justify-content: center;">
        <div style="display: flex; justify-content: left; border: 2px solid black; border-radius: 8px; width: 27%; background-color: #FA8C62; padding-left: 100px; ">
        <form method = "POST" action="cadastrar_action.php">
            <br>
            <label class="campo">
            EMPRESA: <input type="text" name="EMPRESA"/>
            </label>
            <br>
            <br>
            <label>
            PRODUTO: <input type="text" name="PRODUTO"/>
            </label>
            <br>
            <br>
             <label>
            DESCRIÇÃO: <input type="text" name="DESCRICAO_PRODUTO"/>
            </label>
            <br>
            <br>
            <label>
            APELIDO: <input type="text" name="APELIDO_PRODUTO"/>
            </label>
            <br>
            <br>
            <label class="campo" >
            GRUPO: <input type="text" name="GRUPO_PRODUTO"/>
            </label>
            <br>
            <br>
            <label>
            SUBGRUPO: <input type="text" name="SUBGRUPO_PRODUTO"/>
            </label>
            <br>
            <br>
            <label>
            SITUAÇÃO: <input type="text" name="SITUACAO"/>
            </label>
            <br>
            <br>
            <label>
            PESO LÍQUIDO: <input type="text" name="PESO_LIQUIDO"/>
            </label>
            <br>
            <br>
            <label>
            CLASSIFICAÇÃO FISCAL: <input type="text" name="CLASSIFICACAO_FISCAL"/>
            </label>
            <br>
            <br>
            <label>
            CÓDIGO DE BARRAS: <input type="text" name="CODIGO_BARRAS"/>
            </label>
            <br>
            <br>
            <label>
            COLEÇÃO: <input type="text" name="COLECAO"/>
            </label>
            <br>
            <br>
            <div style="display:flex; justify-content: center;">
                <input class="btn" type="submit" value="Salvar" onclick="funcao2()" style="cursor: pointer;"/>
            </div>
        
        </form>
        </div>
        </div> 
        <script>
                function funcao2()
                {
                alert("Produto Cadastrado!");
                }
                </script>       
    </body>
</html>