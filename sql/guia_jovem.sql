	-- Código SQL atualizado
	DROP DATABASE IF EXISTS guia_jovem;
	CREATE DATABASE guia_jovem;
	USE guia_jovem;

	CREATE TABLE IF NOT EXISTS perfis (
	  ID_perfil INT NOT NULL AUTO_INCREMENT,
	  nome VARCHAR(50) NOT NULL,
	  email VARCHAR(50) NOT NULL,
	  senha VARCHAR(50) NOT NULL,
	  nivel_acesso ENUM('usuario comum', 'autor', 'administrador') NOT NULL,
	  PRIMARY KEY (ID_perfil)
	);

	CREATE TABLE IF NOT EXISTS usuarios_comuns (
	  usuario VARCHAR(50) NOT NULL,
	  ID_perfil INT NOT NULL,
	  foto_usuario VARCHAR(200),
	  PRIMARY KEY (usuario),
	  FOREIGN KEY (ID_perfil) REFERENCES perfis(ID_perfil)
	);

	CREATE TABLE IF NOT EXISTS autores (
	  cpf VARCHAR(20) NOT NULL,
	  data_de_nascimento DATE NOT NULL,
	  ID_perfil INT NOT NULL,
	  PRIMARY KEY (cpf),
	  FOREIGN KEY (ID_perfil) REFERENCES perfis(ID_perfil)
	);

	CREATE TABLE IF NOT EXISTS administradores (
	  codigo_de_acesso INT NOT NULL,
	  data_de_criacao DATE,
	  ID_perfil INT NOT NULL,
	  PRIMARY KEY (codigo_de_acesso),
	  FOREIGN KEY (ID_perfil) REFERENCES perfis(ID_perfil)
	);

	CREATE TABLE IF NOT EXISTS post (
	  ID_post INT NOT NULL AUTO_INCREMENT,
	  data_hora_post DATETIME NOT NULL,
	  titulo TEXT NOT NULL,
	  conteudo TEXT NOT NULL,
	  categoria VARCHAR(50),
	  thumb VARCHAR(200) NOT NULL,
	  cpf VARCHAR(20) NOT NULL,
	  ID_perfil INT NOT NULL,
	  PRIMARY KEY (ID_post),
	  FOREIGN KEY (cpf) REFERENCES autores(cpf),
	  FOREIGN KEY (ID_perfil) REFERENCES perfis(ID_perfil)
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

	-- PERFIS
		INSERT INTO perfis (nome, email, senha, nivel_acesso)
VALUES 
  	('teste', 'teste@gmail.com', 'Qm9sc29sdWxhMTMyMg==', 'usuario comum'),
  ('Kauã', 'kauaalmeida8995@gmail.com', 'Qm9sc29sdWxhMTMyMg==', 'administrador'),
  ('autor', 'autor@gmail.com', 'Qm9sc29sdWxhMTMyMg==',  'autor'),
  ('Anderson', 'andersonpiresdacruz@gmail.com', 'Qm9sc29sdWxhMTMyMg==', 'administrador'),
  ('João Silva', 'joao.silva@example.com', 'c2VuaGEx',  'usuario comum'),
  ('Maria Santos', 'maria.santos@example.com', 'c2VuaGEy', 'autor'),
  ('Pedro Costa', 'pedro.costa@example.com', 'c2VuaGEz', 'administrador'),
  ('Ana Ferreira', 'ana.ferreira@example.com', 'c2VuaGE0',  'usuario comum'),
  ('Carlos Oliveira', 'carlos.oliveira@example.com', 'c2VuaGE1', 'autor'),
  ('Sofia Pereira', 'sofia.pereira@example.com', 'c2VuaGE2',  'administrador'),
  ('Luiz Almeida', 'luiz.almeida@example.com', 'c2VuaGE3', 'usuario comum'),
  ('Laura Ribeiro', 'laura.ribeiro@example.com', 'c2VuaGE3', 'autor'),
  ('Fernando Gomes', 'fernando.gomes@example.com', 'c2VuaGE5', 'administrador'),
  ('Mariana Sousa', 'mariana.sousa@example.com', 'c2VuaGEw', 'usuario comum'),
  ('Gabriel Carvalho', 'gabriel.carvalho@example.com', 'c2VuaGExMQ==', 'autor'),
  ('Carolina Mendes', 'carolina.mendes@example.com', 'c2VuaGExMg==', 'administrador'),
  ('Rafaela Castro', 'rafaela.castro@example.com', 'c2VuaGExMw==', 'usuario comum'),
  ('Ricardo Santos', 'ricardo.santos@example.com', 'c2VuaGExNA==', 'autor'),
  ('Isabela Lima', 'isabela.lima@example.com', 'c2VuaGExNQ==',  'administrador'),
  ('Daniel Pereira', 'daniel.pereira@example.com', 'c2VuaGExNg==', 'usuario comum'),
  ('Vitória Alves', 'vitoria.alves@example.com', 'c2VuaGExNw==', 'autor'),
  ('Diego Fernandes', 'diego.fernandes@example.com', 'c2VuaGExOA==', 'administrador'),
  ('Larissa Ribeiro', 'larissa.ribeiro@example.com', 'c2VuaGExOQ==', 'usuario comum'),
  ('Gustavo Melo', 'gustavo.melo@example.com', 'c2VuaGExMA==', 'autor');
	  -- USUARIOS ADM

	INSERT INTO administradores (codigo_de_acesso, data_de_criacao, ID_perfil)
	VALUES ('1322','2023-03-01', 2),
	('1109', '2023-03-01', 4);
	-- USUARIOS COMUNS
	INSERT INTO usuarios_comuns (usuario, ID_perfil)
	VALUES ('teste', 1);
	-- AUTOR
	INSERT INTO autores (cpf, data_de_nascimento, ID_perfil)
	VALUES ('000.111.222-33', '2000-01-01', 3);

