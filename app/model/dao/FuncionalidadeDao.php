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
		$funcionalidade = array();
		$resultado = mysqli_query($this->conexao, "select f.*, p.nome 
		                                           from Funcionalidade as f join Pessoa as p on e.ra=p.ra");
		while ($array = mysqli_fetch_assoc($resultado)) {
			array_push($funcionalidade, new Funcionalidade(
			$array['codFunc'],
			$array['funcionalidade'],
			$array['idHistoria'],
			$array['oQue'],
			$array['ra'],
			$array['nome']
			));
		}
		return $funcionalidade;
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
	public function alteraFuncionalidade(Funcionalidade $funcionalidade)
	{
		$query = "update Funcionalidade set funcionalidade = '{$funcionalidade->getFuncionalidade()}',
				  idHistoria = {$funcionalidade->getIdHistoria()}, 
				  oQue = '{$funcionalidade->getOQue()}',
				  ra = '{$funcionalidade->getRa()}',
				  where codFunc = '{$funcionalidade->getCodFunc()}'"; 
		return mysqli_query($this->conexao, $query);
	}
	public function buscaFuncionalidade($codFunc)
	{
		$query = "select f.*, p.nome
				  from Funcionalidade as f join Pessoa as p on e.ra=p.ra
				  where codFunc = {$codFunc}";
		$resultado = mysqli_query($this->conexao, $query);
		$array = mysqli_fetch_assoc($resultado);
		return  new Funcionalidade(
			$array['codFunc'],
			$array['funcionalidade'],
			$array['idHistoria'],
			$array['oQue'],
			$array['ra'],
			$array['nome']
			);
	}
	function removeFuncionalidade($codFunc)
	{
		$query = "delete from Funcionalidade where codFunc = {$codFunc}";
		return mysqli_query($this->conexao, $query);
	}
}
?> 