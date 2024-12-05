<?php
    /* É uma boa prática fazer a conexão com o SGBD e qualquer outra operação subsequente dentro de um bloco try/catch */
    try {
        /* Etapa 1 - Criar uma instância da classe de conexão e definir os parâmetros de conexão */
        $dbconn = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=postgres");
        if($dbconn) {

                $nome = array("%" . $_POST['campo_primeiro_nome'] . "%");      
            
                $result = pg_query_params($dbconn, "SELECT * FROM TBPESSOA WHERE PESNOME ILIKE $1", $nome);

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