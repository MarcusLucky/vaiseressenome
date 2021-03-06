CREATE DATABASE cadastro;

USE cadastro;

CREATE TABLE usuarios(
    id_usuario int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome varchar(255) NOT NULL,
    telefone varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
    senha varchar(255) NOT NULL,
    foto_perfil varchar(255) default 'sem_foto.png',
    profissao varchar(255) default NULL,
    avaliacao_user int default NULL default 0
);

CREATE TABLE imagem(
    id_img int not null auto_increment primary key,
    imagem varchar(255) not null,
    avaliacao_img int default 0,
    id_usuario int
);

ALTER TABLE imagem
ADD CONSTRAINT fk_id_usuario FOREIGN KEY (id_usuario) REFERENCES usuarios (id_usuario);


create or replace view post as 
    select 
        nome, foto_perfil, telefone, email, avaliacao_user, profissao, i.*
    from 
        usuarios u
    join imagem i on i.id_usuario = u.id_usuario; 