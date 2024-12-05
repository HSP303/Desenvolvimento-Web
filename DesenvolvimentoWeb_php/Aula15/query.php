<?php 

    require_once 'conexaobd.php';

    class query {
        private $sql;
        private $registros;
        private $connection;
        private $queryResource;

        public function __construct($oConn) {
            $this->registros = 0;
            $this->connection = $oConn;
        }

        public function open() {
            $this->queryResource = pg_query($this->connection->getInternalConnection(), $this->sql);
            if($this->queryResource) {
                //Retorna a quantidade de linhas da query.
                $this->registros = pg_num_rows($this->queryResource);
                return true;
            }
            return false;
        }

        public function getNextRow() {
            $row = pg_fetch_assoc($this->queryResource);
            if($row) {
                return $row;
            }
            return false;
        }

        public function update($stabela, $aColunas, $aValores, $sWhere) {
            for ($iCampo = 1; $iCampo <= count($aColunas); $iCampo++) {
                $varCol = "$".$iCampo;
            }

            $result = pg_query_params($this->connection->getInternalConnection(), 
                                      "UPDATE " . $stabela . " SET " . $aColunas . " = " . $varCol . " WHERE " . $sWhere, 
                                      $aValores);
            return $result;
        }

        public function insert($sTabela, $aColunas, $aValores) {
            //TODO implementar método de insert
        }

        public function delete($sTabela, $sWhere) {
            //TODO implementar método de delete
        }

        public function getRegistros() {
            return $this->registros;
        }

        public function setSql($sSql) {
            $this->sql = $sSql;
        }

    }

?>