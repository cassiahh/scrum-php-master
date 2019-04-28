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
        idSprint bigint(20) not null auto_increment primary key,
        sprint varchar(191),
        semana timestamp 
);

CREATE TABLE Tarefa (
        idTarefa bigint(20) not null auto_increment primary key,
        tarefa varchar(191),
        idSprint bigint(20) not null,
        idHistoria int not null,
        ra varchar (191),
        status varchar(191),
        inicio timestamp,
        previsao timestamp,
        termino timestamp,
        objetivo varchar(191),
        dependencia varchar(191),
        prioridade varchar(191),
        constraint FK_raTarefa foreign key (ra) references Pessoa(ra),
        constraint FK_idSprintTarefa foreign key (idSprint) references Sprint(idSprint)
);

/*CREATE TABLE Epico (
        idEpico bigint(20) not null auto_increment primary key,
        epico varchar(255),
        ordem bigint(20),
        necessidade varchar(255),
        ra varchar (191) not null,
        constraint FK_raEpico foreign key (ra) references Pessoa(ra)
);*/

CREATE TABLE Historia (
        idHistoria bigint(20) not null auto_increment primary key,
        gostariaHistoria varchar(191),
        idEpico bigint(20) not null,
        objetivoHistoria varchar(191)
        /*constraint FK_idSprintHistoria foreign key (idEpico) references idEpico(Epico)*/
);

CREATE TABLE Funcionalidade (
        codFunc varchar(191) not null primary key,
        funcionalidade varchar(255),
        idHistoria bigint(20),
        oQue varchar(191),
        ra varchar (191) not null,
        constraint FK_raFuncionalidade foreign key (ra) references Pessoa(ra),
        constraint FK_idHistoriaFuncionalidade foreign key (idHistoria) references Historia(idHistoria)
);

-- a senha está em md5, é 123456
INSERT INTO Pessoa (ra,nome,papel,senha) VALUES ('111111', 'Maria', 'Scrum', 'e10adc3949ba59abbe56e057f20f883e');
INSERT INTO Pessoa (ra,nome,papel,senha) VALUES ('222222', 'João', 'Membro1', 'e10adc3949ba59abbe56e057f20f883e');
INSERT INTO Pessoa (ra,nome,papel,senha) VALUES ('333333', 'Paulo', 'Membro2', 'e10adc3949ba59abbe56e057f20f883e');
INSERT INTO Pessoa (ra,nome,papel,senha) VALUES ('444444', 'Marcia', 'Membro3', 'e10adc3949ba59abbe56e057f20f883e');
INSERT INTO Pessoa (ra,nome,papel,senha) VALUES ('555555', 'Renato', 'Membro4', 'e10adc3949ba59abbe56e057f20f883e');
INSERT INTO Pessoa (ra,nome,papel,senha) VALUES ('666666', 'Joana', 'Project Owner', 'e10adc3949ba59abbe56e057f20f883e');
INSERT INTO Pessoa (ra,nome,papel,senha) VALUES ('123456', 'Clientes', 'stakeholders', 'e10adc3949ba59abbe56e057f20f883e');
INSERT INTO Pessoa (ra,nome,papel,senha) VALUES ('654321', 'Consultores', 'stakeholders', 'e10adc3949ba59abbe56e057f20f883e');


INSERT INTO Sprint (sprint, semana) VALUES ('Sprint 1', '2019-01-01 10:00:00');
INSERT INTO Sprint (sprint, semana) VALUES ('Sprint 2', '2019-01-08 10:00:00');
INSERT INTO Sprint (sprint, semana) VALUES ('Sprint 3', '2019-01-15 10:00:00');
INSERT INTO Sprint (sprint, semana) VALUES ('Sprint 4', '2019-01-22 10:00:00');
INSERT INTO Sprint (sprint, semana) VALUES ('Sprint 5', '2019-01-29 10:00:00');


INSERT INTO Tarefa (tarefa, idSprint, idHistoria, ra, status, inicio, previsao, termino, objetivo, dependencia, prioridade)
VALUES ('Fazer tarefa 1', 1, 1, '111111', 'status 1', '2019-01-01 20:00:00', '2019-01-01 21:00:00', '2019-01-01 22:00:00',
'Conseguir objetivo 1', 'dependencia 1', 'prioridade 1');
INSERT INTO Tarefa (tarefa, idSprint, idHistoria, ra, status, inicio, previsao, termino, objetivo, dependencia, prioridade)
VALUES ('Fazer tarefa 5', 4, 2, '222222', 'status 2', '2019-01-02 20:00:00', '2019-01-02 21:00:00', '2019-01-02 22:00:00',
'Conseguir objetivo 2', 'dependencia 2', 'prioridade 2');
INSERT INTO Tarefa (tarefa, idSprint, idHistoria, ra, status, inicio, previsao, termino, objetivo, dependencia, prioridade)
VALUES ('Fazer tarefa 4', 3, 1, '333333', 'status 3', '2019-01-03 20:00:00', '2019-01-03 21:00:00', '2019-01-03 22:00:00',
'Conseguir objetivo 3', 'dependencia 3', 'prioridade 3');
INSERT INTO Tarefa (tarefa, idSprint, idHistoria, ra, status, inicio, previsao, termino, objetivo, dependencia, prioridade)
VALUES ('Fazer tarefa 3', 2, 1, '111111', 'status 1', '2019-01-01 20:00:00', '2019-01-01 21:00:00', '2019-01-01 22:00:00',
'Conseguir objetivo 1', 'dependencia 1', 'prioridade 1');
INSERT INTO Tarefa (tarefa, idSprint, idHistoria, ra, status, inicio, previsao, termino, objetivo, dependencia, prioridade)
VALUES ('Fazer tarefa 6', 5, 2, '222222', 'status 2', '2019-01-02 20:00:00', '2019-01-02 21:00:00', '2019-01-02 22:00:00',
'Conseguir objetivo 2', 'dependencia 2', 'prioridade 2');
INSERT INTO Tarefa (tarefa, idSprint, idHistoria, ra, status, inicio, previsao, termino, objetivo, dependencia, prioridade)
VALUES ('Fazer tarefa 2', 1, 1, '333333', 'status 3', '2019-01-03 20:00:00', '2019-01-03 21:00:00', '2019-01-03 22:00:00',
'Conseguir objetivo 3', 'dependencia 3', 'prioridade 3');


INSERT INTO Historia (gostariaHistoria, idEpico, objetivoHistoria)
VALUES ('gostaria 1', 1, 'objetivo 1');
INSERT INTO Historia (gostariaHistoria, idEpico, objetivoHistoria)
VALUES ('gostaria 1', 2, 'objetivo 1');
INSERT INTO Historia (gostariaHistoria, idEpico, objetivoHistoria)
VALUES ('gostaria 1', 3, 'objetivo 1');
INSERT INTO Historia (gostariaHistoria, idEpico, objetivoHistoria)
VALUES ('gostaria 1', 4, 'objetivo 1');
INSERT INTO Historia (gostariaHistoria, idEpico, objetivoHistoria)
VALUES ('gostaria 1', 5, 'objetivo 1');
INSERT INTO Historia (gostariaHistoria, idEpico, objetivoHistoria)
VALUES ('gostaria 1', 6, 'objetivo 1');
        
INSERT INTO Funcionalidade (codFunc, funcionalidade, idHistoria, oQue, ra)
VALUES ('1.1', 'Elaborar uma página de apresentação da empresa', 1, 'melhorar a visão dos clientes sobre seu estabelecimento', '666666');
INSERT INTO Funcionalidade (codFunc, funcionalidade, idHistoria, oQue, ra)
VALUES ('2.1', 'Cadastro de produtos', 2, 'melhorar a divulgação dos seus produtos', '123456');
INSERT INTO Funcionalidade (codFunc, funcionalidade, idHistoria, oQue, ra)
VALUES ('2.2', 'Criar uma página de catalogo de todos os produtos da loja', 2, 'melhorar a divulgação dos seus produtos', '123456');
INSERT INTO Funcionalidade (codFunc, funcionalidade, idHistoria, oQue, ra)
VALUES ('3.1', 'Criar uma página de vendas', 3, 'ampliar as vendas on-line dos produtos', '666666');
INSERT INTO Funcionalidade (codFunc, funcionalidade, idHistoria, oQue, ra)
VALUES ('3.2', 'Criar o cadastro de clientes', 3, 'ampliar as vendas on-line dos produtos', '666666');
INSERT INTO Funcionalidade (codFunc, funcionalidade, idHistoria, oQue, ra)
VALUES ('3.3', 'Criar carrinho de compras', 3, 'ampliar as vendas on-line dos produtos', '666666');
INSERT INTO Funcionalidade (codFunc, funcionalidade, idHistoria, oQue, ra)
VALUES ('4.1', 'Gestão dos consultores', 4, 'ter controle sobre seus consultores', '666666');
INSERT INTO Funcionalidade (codFunc, funcionalidade, idHistoria, oQue, ra)
VALUES ('5.1', 'Área de acesso dos consultores', 5, 'ter uma área para que os consultores observem suas vendas e total da comissão do periodo.', '654321');
INSERT INTO Funcionalidade (codFunc, funcionalidade, idHistoria, oQue, ra)
VALUES ('6.1', 'Cadastro de Funcionarios', 6, 'precisa uma área restrita do sistema para gestão da loja', '666666');
INSERT INTO Funcionalidade (codFunc, funcionalidade, idHistoria, oQue, ra)
VALUES ('6.2', 'Controle de estoque', 6, 'precisa uma área restrita do sistema para gestão da loja', '666666');
INSERT INTO Funcionalidade (codFunc, funcionalidade, idHistoria, oQue, ra)
VALUES ('6.3', 'Categorias de usuário', 6, 'precisa uma área restrita do sistema para gestão da loja', '666666');
INSERT INTO Funcionalidade (codFunc, funcionalidade, idHistoria, oQue, ra)
VALUES ('6.4', 'Terminal de atendimento (PDV)', 6, 'precisa uma área restrita do sistema para gestão da loja', '666666');
INSERT INTO Funcionalidade (codFunc, funcionalidade, idHistoria, oQue, ra)
VALUES ('6.5', 'Controle das vendas', 6, 'precisa uma área restrita do sistema para gestão da loja', '666666');
INSERT INTO Funcionalidade (codFunc, funcionalidade, idHistoria, oQue, ra)
VALUES ('6.6', 'Gestão das comissões', 6, 'precisa uma área restrita do sistema para gestão da loja', '666666');

INSERT INTO Projeto (projeto, cliente, projectOwner) VALUES ('Scrum','Robson','Giovanni');
