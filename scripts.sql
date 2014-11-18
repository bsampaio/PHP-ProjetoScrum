--Criando bd scrum;
CREATE DATABASE scrum;

--Criando usuário Scrum;
CREATE USER 'scrumuser'@'%' IDENTIFIED BY 'scrum@)!$';GRANT ALL PRIVILEGES ON *.* TO 'scrumuser'@'%' IDENTIFIED BY 'scrum@)!$' WITH GRANT OPTION MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;GRANT ALL PRIVILEGES ON `scrum`.* TO 'scrumuser'@'%';

--Criando tabelas:
 --TABELA TIPOS:
    CREATE TABLE tipos (
    id integer not null auto_increment primary key,
    nome varchar(255) not null
    );
 --TABELA COLABORADORES:
    CREATE TABLE colaboradores(
    id integer not null auto_increment primary key,
    nome varchar(200) not null,
    email varchar(255) null,
    datanascimento date not null,
    fk_tipos integer references tipos.id
    );
