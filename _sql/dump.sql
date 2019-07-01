DROP DATABASE IF EXISTS scrum;
CREATE DATABASE scrum;
USE scrum;
CREATE TABLE Projeto(
    projeto varchar (191) not null primary key,
    cliente varchar (191),
    projectOwner varchar (191)
);
CREATE TABLE Pessoa(
        ra varchar (191) not null primary key,
       	nome varchar(191),
        papel varchar(191),
        senha varchar(191)
);
CREATE TABLE Sprint (
        idSprint bigint(20) not null primary key,
        sprint varchar(191),
        semana timestamp 
);
CREATE TABLE Historia (
        idHistoria bigint(20) not null auto_increment primary key,
        gostaria varchar(191),
        ra varchar (191),
        objetivo varchar(191),
        constraint FK_raHistoria foreign key (ra) references Pessoa(ra) ON UPDATE CASCADE ON DELETE SET NULL
);
CREATE TABLE Funcionalidade (
        idHistoria bigint(20) not null,
        idFuncionalidade bigint(20) not null,

        funcionalidade varchar(191),
        primary key (idHistoria, idFuncionalidade),
        constraint FK_idHistoriaFuncionalidade foreign key (idHistoria) references Historia(idHistoria) ON DELETE CASCADE
);
CREATE TABLE Tarefa (
        idHistoria bigint(20) not null,
        idFuncionalidade bigint(20) not null,
        idTarefa bigint(20) not null,

        tarefa varchar(191),
        idSprint bigint(20) not null,
        ra varchar (191),
        status varchar(191),
        inicio timestamp,
        tempo timestamp,
        termino timestamp,
        duracao bigint(20) not null,
        dependencia varchar(191),
        prioridade varchar(191),
        primary key (idHistoria, idFuncionalidade, idTarefa),
        constraint FK_idFuncionalidadeTarefa foreign key (idHistoria, idFuncionalidade) references Funcionalidade(idHistoria, idFuncionalidade),
        constraint FK_raTarefa foreign key (ra) references Pessoa(ra) ON UPDATE CASCADE ON DELETE SET NULL,
        constraint FK_idSprintTarefa foreign key (idSprint) references Sprint(idSprint)
);
INSERT INTO Projeto (projeto, cliente, projectOwner) VALUES ('Scrum','Robson','Giovanni');
INSERT INTO Pessoa (ra,nome,papel,senha) VALUES 
('111111', 'Integrante 1', 'Scrum Master', 'e10adc3949ba59abbe56e057f20f883e'), -- a senha está em md5, é 123456
('222222', 'Integrante 2', 'Membro1', 'e10adc3949ba59abbe56e057f20f883e'),
('333333', 'Integrante 3', 'Membro2', 'e10adc3949ba59abbe56e057f20f883e'),
('444444', 'Integrante 4', 'Membro3', 'e10adc3949ba59abbe56e057f20f883e'),
('555555', 'Integrante 5', 'Membro4', 'e10adc3949ba59abbe56e057f20f883e'),
('666666', 'Integrante 6', 'Membro5', 'e10adc3949ba59abbe56e057f20f883e');
INSERT INTO Sprint (idSprint,sprint, semana) VALUES 
(1, 'Sprint 1', '2019-01-01 10:00:00'),
(2,'Sprint 2', '2019-01-08 10:00:00'),
(3,'Sprint 3', '2019-01-15 10:00:00'),
(4,'Sprint 4', '2019-01-22 10:00:00'),
(5,'Sprint 5', '2019-01-29 10:00:00');
INSERT INTO Historia (gostaria, ra, objetivo) VALUES 
('gostaria 1', '111111', 'melhorar a visão dos clientes sobre seu estabelecimento'),
('gostaria 2', '222222', 'ampliar as vendas on-line dos produtos'),
('gostaria 3', '333333', 'ter controle sobre seus consultores'),
('gostaria 4', '444444', 'ter uma área para que os consultores observem suas vendas e total da comissão do periodo.'),
('gostaria 5', '555555', 'precisa uma área restrita do sistema para gestão da loja'),
('gostaria 6', '666666', 'objetivo 6');     
INSERT INTO Funcionalidade (idHistoria, idFuncionalidade, funcionalidade) VALUES 
(1,1, 'Elaborar uma página de apresentação da empresa'),
(2,1, 'Cadastro de produtos'),
(2,2, 'Criar uma página de catalogo de todos os produtos da loja'),
(3,1, 'Criar uma página de vendas'),
(3,2, 'Criar o cadastro de clientes'),
(3,3, 'Criar carrinho de compras'),
(4,1, 'Gestão dos consultores'),
(5,1, 'Área de acesso dos consultores'),
(6,1, 'Cadastro de Funcionarios'),
(6,2, 'Controle de estoque'),
(6,3, 'Categorias de usuário'),
(6,4, 'Terminal de atendimento (PDV)'),
(6,5, 'Controle das vendas'),
(6,6, 'Gestão das comissões');
INSERT INTO Tarefa (idHistoria, idFuncionalidade, idTarefa, tarefa, idSprint, ra, status, inicio, tempo, termino, duracao, dependencia, prioridade) VALUES
(1, 1, 1, 'Levantar histórico da empresa', 1, '111111', 'A fazer', '2019-01-01 20:00:00', '2019-01-01 21:00:00', '2019-01-01 22:00:00', 1, 'dep 1', 'alta'),
(1, 1, 2, 'Levantar outro histórico da empresa', 1, '555555', 'A fazer', '2019-01-01 20:00:00', '2019-01-01 21:00:00', '2019-01-01 22:00:00', 1, 'dep 1', 'alta'),
(2, 1, 1, 'Definir layout da página', 2, '222222', 'Fazendo', '2019-01-02 20:00:00', '2019-01-02 21:00:00', '2019-01-02 22:00:00', 2, 'dep 2', 'baixa'),
(2, 2, 1, 'Tirar fotos', 2, '222222', 'Feito', '2019-01-03 20:00:00', '2019-01-03 21:00:00', '2019-01-03 22:00:00', 3, 'dep 3', 'média'),
(2, 2, 2, 'Desenvolver a página', 3, '333333', 'Aguardando', '2019-01-01 20:00:00', '2019-01-01 21:00:00', '2019-01-01 22:00:00', 4, 'dep 1', 'baixa'),
(2, 2, 3, 'Desenvolver a home', 4, '333333', 'Aguardando', '2019-01-01 20:00:00', '2019-01-01 21:00:00', '2019-01-01 22:00:00', 4, 'dep 1', 'baixa'),
(3, 1, 1, 'Teste', 4, '444444', 'Fazendo', '2019-01-02 20:00:00', '2019-01-02 21:00:00', '2019-01-02 22:00:00', 4, 'dep 2', 'baixa'),
(3, 1, 2, 'Criar base de dados de produtos', 5, '555555', 'Feito', '2019-01-03 20:00:00', '2019-01-03 21:00:00', '2019-01-03 22:00:00', 2, 'dep 3', 'média'),
(3, 1, 3, 'Criar base de dados de clientas', 5, '555555', 'Feito', '2019-01-03 20:00:00', '2019-01-03 21:00:00', '2019-01-03 22:00:00', 2, 'dep 3', 'média');

