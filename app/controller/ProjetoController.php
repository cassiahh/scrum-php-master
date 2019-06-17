<?php
/**
 * Created by PhpStorm.
 * User: antonio
 * Date: 28/04/19
 * Time: 06:30
 */

require_once(__DIR__ . "/../model/database/Connection.php");
require_once(__DIR__ . "/../model/dao/PessoaDao.php");
require_once(__DIR__ . "/../model/dao/ProjetoDao.php");
require_once(__DIR__ . "/../model/builder/pessoaBuilder.php");
require_once(__DIR__ . "/../model/domain/Pessoa.php");


class ProjetoController
{    /**
     * ProjetoController constructor.
     */
    public function __construct()
    {
        return $this;
    }
    public function list()
    {
        $projetoDao = new ProjetoDao(Connection::getConnection());
        $projetos = $projetoDao->listaProjeto();

        $pessoaDao = new PessoaDao(Connection::getConnection());
        $pessoas = $pessoaDao->listaPessoas();

        include __DIR__ . '/../view/page/list/projeto.php';
    }
    public function editProjeto($projeto,$post)
    {
        $projetoDao = new ProjetoDao(Connection::getConnection());
        $projetos = $projetoDao->buscaProjeto($projeto);
        include __DIR__ . '/../view/page/edit/projeto.php';
    }
    public function editPessoa($ra,$post)
    {
        $pessoaDao = new PessoaDao(Connection::getConnection());
        $pessoas = $pessoaDao->buscaPessoa($ra);
        include __DIR__ . '/../view/page/edit/pessoa.php';
    }
    public function updateProjeto($projeto, $cliente, $nome)
    {
        $conexao = Connection::getConnection();
        $projetoDao = new ProjetoDao($conexao);
        $projeto = new Projeto($projeto,$cliente,$productOwner);
        $updated = $projetoDao->alteraProjeto($projeto);
        include __DIR__ . '/../view/page/edit/projeto.php';
    }
   public function updatePessoa($ra,$post)
    {
        $conexao = Connection::getConnection();
        
        $pessoaDao = new PessoaDao($conexao);
		$pessoa = $pessoaDao->buscaPessoa($ra);
        $pessoaModel = (new PessoaBuilder($pessoa))->build();	
        $pessoaModel->setRa($post['inputRa']);
        $pessoaModel->setNome($post['inputNome']);
        $pessoaModel->setPapel($post['inputPapel']);	
		
        $updated = $pessoaDao->alteraPessoa($pessoaModel, $ra);
        $projetoDao = new ProjetoDao(Connection::getConnection());
        $projetos = $projetoDao->listaProjeto();

        $pessoaDao = new PessoaDao(Connection::getConnection());
        $pessoas = $pessoaDao->listaPessoas();
       
        include __DIR__ . '/../view/page/edit/pessoa.php';
    }
    public function removePessoas($ra)
    {
        $conexao = Connection::getConnection();
        
        $pessoaDao = new PessoaDao($conexao);
       
        $removed = $pessoaDao->removePessoas($ra);
        
        $projetoDao = new ProjetoDao(Connection::getConnection());
        $projetos = $projetoDao->listaProjeto();

        $pessoaDao = new PessoaDao(Connection::getConnection());
        $pessoas = $pessoaDao->listaPessoas();
        
        include __DIR__ . '/../view/page/remove/pessoa.php';
    }
}