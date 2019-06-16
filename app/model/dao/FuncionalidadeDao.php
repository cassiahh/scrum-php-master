<?php

require_once (__DIR__."/../domain/Funcionalidade.php");

class FuncionalidadeDao
{
	private $conexao;
	
	function __construct($conexao)
	{
		$this->conexao = $conexao;
	}
	
	public function listaFuncionalidades()
	{
		$arrays = array();
		$resultado = mysqli_query($this->conexao, 
				"select concat(f.idHistoria,'.',f.idFuncionalidade) as codFunc,
				        f.funcionalidade,
				        f.idHistoria,
				        h.objetivo as oQue, 
				        h.ra, 
				        p.nome,
                        f.idFuncionalidade				 
				 from Funcionalidade as f 
				 join Historia as h on f.idHistoria=h.idHistoria
				 join Pessoa as p on p.ra=h.ra
                 UNION
                 Select s.idHistoria  as codFunc,
                        null as funcionalidade,
                 	    s.idHistoria,
                 	    s.objetivo as oQue,  
                 	    s.ra, 
                 	    p.nome,
                        null as idFuncionalidade	
                 from Historia as s
                      join Pessoa as p on p.ra=s.ra
                 where not EXISTS (SELECT 1
                                   from Funcionalidade as f 
                 				   where f.idHistoria=s.idHistoria)
                 order by codFunc");
		while ($array = mysqli_fetch_assoc($resultado)) {
			array_push($arrays, $array);
        }
        return $arrays;
	}

	public function countFunc()
	{
		$arrays = array();
		$resultado = mysqli_query($this->conexao, 
				"select MAX(idHistoria) from Funcionalidade");
		$countFunc = mysqli_fetch_assoc($resultado);
        return $countFunc;
	}	

	public function insereFuncionalidade($idHistoria, $idFuncionalidade,Funcionalidade $funcionalidade)
	{
		$query = "insert into Funcionalidade (idHistoria, idFuncionalidade, funcionalidade)
			values ({$funcionalidade->getIdHistoria()},
					'{$funcionalidade->getIdFuncionalidade()}',
					'{$funcionalidade->getFuncionalidade()}')";
		return mysqli_query($this->conexao, $query);
	}
	public function alteraFuncionalidade($idHistoria, $idFuncionalidade,Funcionalidade $funcionalidade)
	{
		$query = "update Funcionalidade set funcionalidade = '{$funcionalidade->getFuncionalidade()}',
				  idHistoria = {$funcionalidade->getIdHistoria()}, 
				  idFuncionalidade = '{$funcionalidade->getIdFuncionalidade()}'
				  where idHistoria = '{$idHistoria}'
				  and idFuncionalidade = '{$idFuncionalidade}'"; 
		return mysqli_query($this->conexao, $query);
	}
	public function buscaFuncionalidade($idHistoria, $codFunc)
	{
		$array = array();
		$query = "select *
				  from Funcionalidade
                  where idHistoria = {$idHistoria}
                  and idFuncionalidade = {$codFunc}";
		$resultado = mysqli_query($this->conexao, $query);
		$array = mysqli_fetch_assoc($resultado);
		return $array;
	}
	public function buscaIdFuncionalidade($idHistoria)
	{
		$array = array();
		$query = "select MAX(idFuncionalidade) + 1 as idFuncionalidade, idHistoria, '' as funcionalidade
		          from Funcionalidade
                  where idHistoria = {$idHistoria}";
		$resultado = mysqli_query($this->conexao, $query);
		$array = mysqli_fetch_assoc($resultado);
		return $array;
	}
	public function buscaIdFuncionalidadeHist($idHistoria)
	{
		$array = array();
		$query = "select 1 as idFuncionalidade, idHistoria, '' as funcionalidade
		          from Historia
                  where idHistoria = {$idHistoria}";
		$resultado = mysqli_query($this->conexao, $query);
		$array = mysqli_fetch_assoc($resultado);
		var_dump($array);
		return $array;
	}
	function removeFuncionalidade($idHistoria, $idFuncionalidade)
	{
		$query = "delete from Funcionalidade where idHistoria = {$idHistoria} and idFuncionalidade = {$idFuncionalidade}";
		return mysqli_query($this->conexao, $query);
	}
}
?> 