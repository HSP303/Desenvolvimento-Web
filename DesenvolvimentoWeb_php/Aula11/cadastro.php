<?php
    /* É uma boa prática fazer a conexão com o SGBD e qualquer outra operação subsequente dentro de um bloco try/catch */
    try {
        /* Etapa 1 - Criar uma instância da classe de conexão e definir os parâmetros de conexão */
        $dbconn = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=postgres");
        if($dbconn) {
            $aDados = array(
                $_POST['campo_primeiro_nome'],
                $_POST['campo_sobrenome'],
                $_POST['campo_email'],
                $_POST['campo_password'],
                $_POST['campo_cidade'],
                $_POST['campo_estado']
            );
            
            /* Etapa 3 - Fazer a query de inserção dos dados (DML) com o array de valores */
            $result = PG_query_params($dbconn, "INSERT INTO TBPESSOA 
                (PESNOME, PESSOBRENOME, PESEMAIL, PESPASSWORD, PESCIDADE, PESESTADO)
                VALUES ($1, $2, $3, $4, $5, $6)", $aDados);

                $result = pg_query($dbconn, "SELECT * FROM TBPESSOA");

                /* Etapa 3 - Buscar os dados da query e percorrer as linhas */
                while($pessoa = pg_fetch_assoc($result)) {
                    var_dump($pessoa);
}
            
        } 

    } catch (Exception $e) {
        /* Caso ocorra algum erro, então exibir mensagem */
        echo $e->getMessage();
    }

?>