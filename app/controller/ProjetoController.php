<?php
/**
 * Created by PhpStorm.
 * User: antonio
 * Date: 28/04/19
 * Time: 06:30
 */
require_once(__DIR__ . "/../model/dao/ProjetoDao.php");
require_once(__DIR__ . "/../model/builder/ProjetoBuilder.php");
require_once(__DIR__ . "/../model/domain/Projeto.php");
require_once(__DIR__ . "/../model/database/Connection.php");
require_once(__DIR__ . "/../model/dao/PessoaDao.php");
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
        $conexao = Connection::getConnection();
        $projetoDao = new ProjetoDao($conexao);
        $projetos = $projetoDao->listaProjeto();

        $PessoaDao = new PessoaDao($conexao);
        $pessoas = $PessoaDao->listaPessoas();

        include __DIR__ . '/../view/page/list/projeto.php';
    }
   public function editProjeto()
    {
        $conexao = Connection::getConnection();
        $projetoDao = new ProjetoDao($conexao);
        $projetos = $projetoDao->listaProjeto();
        include __DIR__ . '/../view/page/edit/projeto.php';
    }
    public function editPessoa($ra,$post)
    {
        $pessoaDao = new PessoaDao(Connection::getConnection());
        $pessoas = $pessoaDao->buscaPessoa($ra);
        include __DIR__ . '/../view/page/edit/pessoa.php';
    }
   public function updateProjeto($post)
    {
        $conexao = Connection::getConnection();
        $projetoDao = new ProjetoDao($conexao);
        $projeto = $projetoDao->listaProjeto();
        $projetoModel = (new ProjetoBuilder($projeto))->build();
        $projetoModel->setProjeto($post['projeto']);
        $projetoModel->setCliente($post['cliente']);
        $projetoModel->setProductOwner($post['projectOwner']);
        
        $updated = $projetoDao->alteraProjeto($projetoModel, (new ProjetoBuilder($projeto))->build());
        $projetoDao = new ProjetoDao($conexao);
        $projetos = $projetoDao->listaProjeto();

        $pessoaDao = new PessoaDao($conexao);
        $pessoas = $pessoaDao->listaPessoas();

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
    	
    public function insere()
   {
        $post=null;
        $pessoaDao = new PessoaDao(Connection::getConnection());
        
        include __DIR__ . '/../view/page/insere/pessoa.php';

    }
    
    public function adicionar($post)
    {
      $conexao = Connection::getConnection();
        $pessoaDao = new PessoaDao($conexao);
		$pessoa=null;
        $pessoaModel = (new PessoaBuilder($pessoa))->build();	
        $pessoaModel->setRa($post['ra']);
        $pessoaModel->setNome($post['nome']);
        $pessoaModel->setPapel($post['papel']);
        $pessoaModel->setSenha($post['senha']);
		
        $projetoDao = new ProjetoDao(Connection::getConnection());
        $projetos = $projetoDao->listaProjeto();

        $pessoaDao = new PessoaDao(Connection::getConnection());
        $pessoas = $pessoaDao->listaPessoas();
        
        $updated = $pessoaDao->inserePessoas($pessoaModel);
        include __DIR__ . '/../view/page/insere/pessoa.php';
    }    
    
    
    
}