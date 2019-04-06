<?php
class ServerStatus {
	var $hostRag;
	var $hostSql;
	var $userSql;
	var $passSql;
	var $baseSql;
	
	# Mщtodo construtor da classe.
	function __construct($hostRag,$hostSql,$userSql,$passSql,$baseSql) {
		$this->hostRag = gethostbyname($hostRag);
		$this->hostSql = gethostbyname($hostSql);
		$this->userSql = $userSql;
		$this->passSql = $passSql;
		$this->baseSql = $baseSql;
	}
	
	# Mщtodo para conectar com o host:porta.
	function connect( $host,$port ) {
		# $fp receberс o retorno da funчуo fsockopen.
		$fp = @fsockopen( $host, $port, $errno, $errstr, 1.0 );
		# $close receberс o retorno do mщtodo $this->close;
		$close = $this->close( $fp );
		# Irс retornar o valor de $fp.
		return $fp;
	}
	
	# Mщtodo para fechar a conexуo.
	function close( $fp ) {
		# Chama a funчуo fclose para fechar a conexуo gerada em $fp.
		@fclose( $fp );
	}
	
	# Mщtodo de retorno do Status atravщs de $port.
	function getStatus($server) {
		switch($server){
			case "map": $port=5121; break;
		}
		# Retorna o retorno do mщtodo $this->connect.
		 return (!empty($port))?$this->connect( $this->hostRag, $port ):'0';
	}
	
}

?>