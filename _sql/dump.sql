DROP DATABASE IF EXISTS scrum;
CREATE DATABASE scrum;
USE scrum;

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

CREATE TABLE Epico (
        idEpico int not null auto_increment primary key,
        Epico varchar(255),
        Ordem varchar(255),
        Necessidade varchar(255),
        idPessoa int not null
);

-- a senha está em md5, é 123456
INSERT INTO Pessoa (ra,nome,papel,senha) VALUES ('111111', 'Maria', 'Scrum', 'e10adc3949ba59abbe56e057f20f883e');
INSERT INTO Pessoa (ra,nome,papel,senha) VALUES ('222222', 'João', 'Membro1', 'e10adc3949ba59abbe56e057f20f883e');
INSERT INTO Pessoa (ra,nome,papel,senha) VALUES ('333333', 'Paulo', 'Membro2', 'e10adc3949ba59abbe56e057f20f883e');
INSERT INTO Pessoa (ra,nome,papel,senha) VALUES ('444444', 'Marcia', 'Membro3', 'e10adc3949ba59abbe56e057f20f883e');
INSERT INTO Pessoa (ra,nome,papel,senha) VALUES ('555555', 'Renato', 'Membro4', 'e10adc3949ba59abbe56e057f20f883e');


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

