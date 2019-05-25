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
				 from funcionalidade as f 
				 join historia as h on f.idHistoria=h.idHistoria
				 join Pessoa as p on p.ra=h.ra
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
				"select MAX(idHistoria) from funcionalidade");
		$countFunc = mysqli_fetch_assoc($resultado);
        return $countFunc;
	}	

	public function insereFuncionalidade(Funcionalidade $funcionalidade)
	{
		$query = "insert into Funcionalidade (codFunc, funcionalidade, idHistoria, oQue, ra)
			values ({$funcionalidade->getCodFunc()},
					'{$funcionalidade->getFuncionalidade()}',
					{$funcionalidade->getIdHistoria()},					
					'{$funcionalidade->getOQue()}',
					'{$funcionalidade->getRa()}')";
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
	function removeFuncionalidade($codFunc)
	{
		$query = "delete from Funcionalidade where codFunc = {$codFunc}";
		return mysqli_query($this->conexao, $query);
	}
}
?> 