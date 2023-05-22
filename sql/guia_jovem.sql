-- Código SQL atualizado
DROP DATABASE IF EXISTS guia_jovem;
CREATE DATABASE guia_jovem;
USE guia_jovem;

CREATE TABLE IF NOT EXISTS perfis (
  ID_perfil INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(50) NOT NULL,
  email VARCHAR(50) NOT NULL,
  senha VARCHAR(50) NOT NULL,
  foto_default LONGBLOB,
  nivel_acesso ENUM('usuário comum', 'autor', 'administrador') NOT NULL,
  PRIMARY KEY (ID_perfil)
);

CREATE TABLE IF NOT EXISTS usuarios_comuns (
  usuario VARCHAR(50) NOT NULL,
  foto_usuario LONGBLOB,
  ID_perfil INT NOT NULL,
  PRIMARY KEY (usuario),
  FOREIGN KEY (ID_perfil) REFERENCES perfis(ID_perfil)
);

CREATE TABLE IF NOT EXISTS autores (
  cpf VARCHAR(14) NOT NULL,
  data_de_nascimento DATE NOT NULL,
  foto_autor LONGBLOB,
  ID_perfil INT NOT NULL,
  PRIMARY KEY (cpf),
  FOREIGN KEY (ID_perfil) REFERENCES perfis(ID_perfil)
);

CREATE TABLE IF NOT EXISTS administradores (
  codigo_de_acesso INT NOT NULL,
  status BOOLEAN,  
  ID_perfil INT NOT NULL,
  PRIMARY KEY (codigo_de_acesso),
  FOREIGN KEY (ID_perfil) REFERENCES perfis(ID_perfil)
);

CREATE TABLE IF NOT EXISTS post (
  ID_post INT NOT NULL AUTO_INCREMENT,
  data_publicacao DATE NOT NULL,
  hora_publicacao TIME NOT NULL,
  conteudo TEXT NOT NULL,
  thumb LONGBLOB,
  cpf VARCHAR(14) NOT NULL,
  PRIMARY KEY (ID_post),
  FOREIGN KEY (cpf) REFERENCES autores(cpf)
);

CREATE TABLE IF NOT EXISTS comentarios (
  ID_comentario INT NOT NULL AUTO_INCREMENT,
  data_hora_comentario DATETIME NOT NULL,
  comentario TEXT NOT NULL,
  ID_post INT NOT NULL,
  ID_perfil INT NOT NULL,
  PRIMARY KEY (ID_comentario),
  FOREIGN KEY (ID_post) REFERENCES post(ID_post),
  FOREIGN KEY (ID_perfil) REFERENCES perfis(ID_perfil)
);

-- USUARIOS COMUNS
INSERT INTO perfis (nome, email, senha, foto_default, nivel_acesso)
VALUES ('teste', 'teste@gmail.com', 'Qm9sc29sdWxhMTMyMg==', NULL, 'usuário comum');
 
-- AUTOR
INSERT INTO perfis (nome, email, senha, foto_default, nivel_acesso)
VALUES ('autor', 'autor@gmail.com', 'Qm9sc29sdWxhMTMyMg==', NULL, 'autor');

-- USUARIOS ADM
INSERT INTO perfis (nome, email, senha, foto_default, nivel_acesso)
VALUES ('Anderson', 'andersonpiresdacruz@gmail.com', 'Qm9sc29sdWxhMTMyMg==', NULL, 'administrador');
 
INSERT INTO perfis (nome, email, senha, foto_default, nivel_acesso)
VALUES ('Kauã', 'kauaalmeida8995@gmail.com', 'Qm9sc29sdWxhMTMyMg==', NULL, 'administrador');

-- PERFIS 

-- USUARIOS ADM

INSERT INTO administradores (codigo_de_acesso, status, ID_perfil)
VALUES ('1322', NULL, LAST_INSERT_ID());
 
INSERT INTO administradores (codigo_de_acesso, status, ID_perfil)
VALUES ('1109', NULL, LAST_INSERT_ID());

-- USUARIOS COMUNS

INSERT INTO usuarios_comuns (usuario, foto_usuario, ID_perfil)
VALUES ('teste', NULL, LAST_INSERT_ID());
 
-- AUTOR

INSERT INTO autores (cpf, data_de_nascimento, foto_autor, ID_perfil)
VALUES ('00011122233', '2000-01-01', NULL, LAST_INSERT_ID());