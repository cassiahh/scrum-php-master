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
        idSprint bigint(20),
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
INSERT INTO Projeto (projeto, cliente, projectOwner) VALUES ('Projeto','Cliente','Product Owner');
INSERT INTO Pessoa (ra,nome,papel,senha) VALUES 
('admin', 'Admin', 'Admin', 'e10adc3949ba59abbe56e057f20f883e'); -- a senha está em md5, é 123456


