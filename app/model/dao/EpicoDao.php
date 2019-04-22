<?php

require_once (__DIR__."/../domain/Epico.php");

class EpicoDao
{
	private $conexao;
	
	function __construct($conexao)
	{
		$this->conexao = $conexao;
	}
	
	public function listaEpicos()
	{
		$epico = array();
		$resultado = mysqli_query($this->conexao, "select e.*, p.nome 
		                                           from Epico as e join Pessoa as p on e.ra=p.ra");
		while ($array = mysqli_fetch_assoc($resultado)) {
			array_push($epico, new Epico(
			$array['idEpico'],
			$array['epico'],
			$array['ordem'],
			$array['necessidade'],
			$array['ra']
			));
		}
		return $epico;
	}
	public function insereEpico(Epico $epico)
	{
		$query = "insert into Epico (epico, ordem, necessidade, ra)
			values ('{$epico->getEpico()},
					{$epico->getOrdem()},
					{$epico->getNecessidade()},
					{$epico->getRa()}";
		return mysqli_query($this->conexao, $query);
	}
	public function alteraEpico(Epico $epico)
	{
		$query = "update Epico set epico = '{$epico->getEpico()}',
				  ordem = {$epico->getOrdem()}, 
				  necessidade = '{$epico->getNecessidade()}',
				  ra = '{$epico->getRa()}',
				  where idEpico = '{$epico->getIdEpico()}'"; 
		return mysqli_query($this->conexao, $query);
	}
	public function buscaEpico($idEpico)
	{
		$query = "select * 
				  from Epico
				  where idEpico = {$idEpico}";
		$resultado = mysqli_query($this->conexao, $query);
		$array = mysqli_fetch_assoc($resultado);
		return  new Epico(
			$array['idEpico'],
			$array['epico'],
			$array['ordem'],
			$array['necessidade'],
			$array['ra']
			);
	}
	function removeEpico($idEpico)
	{
		$query = "delete from Epico where idEpico = {$idEpico}";
		return mysqli_query($this->conexao, $query);
	}
}
?> 