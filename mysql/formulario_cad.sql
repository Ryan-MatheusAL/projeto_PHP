USE formulario_cad;

CREATE TABLE funcionario
(
	id_funcionario int unsigned not null auto_increment primary key,
    nome varchar(45) not null,
    nome_mae varchar(45) not null,
    nome_pai varchar(45) not null,
    telefone varchar(15) not null default '0',
    rg varchar(15) not null default '0',
    cpf varchar(15) not null default '0',
    grau_instrucao varchar(20) not null,
    formacao varchar(20) not null,
    endereco varchar(45) not null,
    estado varchar(45) not null,
    cidade varchar(45) not null,
    num_casa int not null default '0',
    genero varchar(15) not null,
    data_nasc DATE not null
);
