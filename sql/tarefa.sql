CREATE TABLE Tarefa (
        idTarefa int not null auto_increment,
        tarefa varchar(255),
        idSprint int not null,
        idHistoria int not null,
        idPessoa int not null,
        status varchar(255),
        inicio timestamp,
        termino timestamp,
        objetivo varchar(255),
        dependencia varchar(255),
        prioridade varchar(255)
);

INSERT INTO Customers (tarefa, idSprint, idHistoria, idPessoa, status, inicio, previsao, termino, objetivo, dependencia, prioridade)
VALUES ('Fazer tarefa 1', 1, 1, 1, 'status 1', '2019-01-01 20:00:00', '2019-01-01 21:00:00', '2019-01-01 22:00:00',
'Conseguir objetivo 1', 'dependencia 1', 'prioridade 1');
INSERT INTO Customers (tarefa, idSprint, idHistoria, idPessoa, status, inicio, previsao, termino, objetivo, dependencia, prioridade)
VALUES ('Fazer tarefa 2', 2, 2, 2, 'status 2', '2019-01-02 20:00:00', '2019-01-02 21:00:00', '2019-01-02 22:00:00',
'Conseguir objetivo 2', 'dependencia 2', 'prioridade 2');
INSERT INTO Customers (tarefa, idSprint, idHistoria, idPessoa, status, inicio, previsao, termino, objetivo, dependencia, prioridade)
VALUES ('Fazer tarefa 1', 1, 1, 1, 'status 3', '2019-01-03 20:00:00', '2019-01-03 21:00:00', '2019-01-03 22:00:00',
'Conseguir objetivo 3', 'dependencia 3', 'prioridade 3');