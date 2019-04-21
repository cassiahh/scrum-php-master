<?php
class EpicoDao
{
    private $conexao;
    public function __construct($conexao)
    {
        $this->conexao = $conexao;
    }
    public function listaEpicos()
    {
        $epico = array();
        $resultado = mysqli_query($this->conexao, "select * from Epico");
        while ($array = mysqli_fetch_assoc($resultado)) {
            array_push($epico, new Epico(
            $array['idEpico'],
            $array['Epico'],
            $array['Ordem'],
            $array['Necessidade'],
            $array['idPessoa']
            ));
        }
        return $epico;
    }
    public function insereEpico(Epico $epico)
    {
        $query = "insert into Epico (Epico, Ordem, Necessidade, idPessoa)
           values ('{$epico->getEpico()},
                    {$epico->getOrdem()},
                    {$epico->getNecessidade()},
                    {$epico->getIdPessoa()}";
        return mysqli_query($this->conexao, $query);
    }
    public function alteraEpico(Epico $epico)
    {
        $query = "update Epico set Epico = '{$epico->getEpico()}',
            Ordem = {$epico->getOrdem()}, Necessidade = '{$epico->getNecessidade()}',
			idPessoa = '{$epico->getIdPessoa()}',
            where idEpico = '{$epico->getIdEpico()}'"; 
        return mysqli_query($this->conexao, $query);
    }
    public function buscaEpico($idEpico)
    {
        $query = "select * from Epico where idEpico = {$idEpico}";
        $resultado = mysqli_query($this->conexao, $query);
        $array = mysqli_fetch_assoc($resultado);
        return  new Epico(
            $array['idEpico'],
            $array['Epico'],
            $array['Ordem'],
            $array['Necessidade'],
            $array['idPessoa']
            );
    }
    function removeEpico($idEpico)
    {
        $query = "delete from Epico where idEpico = {$idEpico}";
        return mysqli_query($this->conexao, $query);
    }
}
?> 