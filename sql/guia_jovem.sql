	-- Código SQL atualizado
	DROP DATABASE IF EXISTS guia_jovem;
	CREATE DATABASE guia_jovem;
	USE guia_jovem;

	CREATE TABLE IF NOT EXISTS perfis (
	  ID_perfil INT NOT NULL AUTO_INCREMENT,
	  nome VARCHAR(50) NOT NULL,
	  email VARCHAR(50) NOT NULL,
	  senha VARCHAR(50) NOT NULL,
	  foto_default VARCHAR(100) NOT NULL,
	  nivel_acesso ENUM('usuário comum', 'autor', 'administrador') NOT NULL,
	  PRIMARY KEY (ID_perfil)
	);

	CREATE TABLE IF NOT EXISTS usuarios_comuns (
	  usuario VARCHAR(50) NOT NULL,
	  status_usuario BOOLEAN,
	  ID_perfil INT NOT NULL,
	  foto_usuario LONGBLOB,
	  PRIMARY KEY (usuario),
	  FOREIGN KEY (ID_perfil) REFERENCES perfis(ID_perfil)
	);

	CREATE TABLE IF NOT EXISTS autores (
	  cpf VARCHAR(14) NOT NULL,
	  data_de_nascimento DATE NOT NULL,
	  status_autor BOOLEAN,
	  ID_perfil INT NOT NULL,
	  PRIMARY KEY (cpf),
	  FOREIGN KEY (ID_perfil) REFERENCES perfis(ID_perfil)
	);

	CREATE TABLE IF NOT EXISTS administradores (
	  codigo_de_acesso INT NOT NULL,
	  data_de_criação DATE,
	  ID_perfil INT NOT NULL,
	  PRIMARY KEY (codigo_de_acesso),
	  FOREIGN KEY (ID_perfil) REFERENCES perfis(ID_perfil)
	);

	CREATE TABLE IF NOT EXISTS post (
	  ID_post INT NOT NULL AUTO_INCREMENT,
	  data_publicacao DATE NOT NULL,
	  hora_publicacao TIME NOT NULL,
	  titulo TIME NOT NULL,
	  conteudo TEXT NOT NULL,
	  thumb LONGBLOB NOT NULL,
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

	-- PERFIS
	INSERT INTO perfis (nome, email, senha, foto_default, nivel_acesso)
	VALUES ('teste', 'teste@gmail.com', 'Qm9sc29sdWxhMTMyMg==', 'https://www.promoview.com.br/uploads/2017/04/b72a1cfe.png', 'usuário comum'),
	  ('Kauã', 'kauaalmeida8995@gmail.com', 'Qm9sc29sdWxhMTMyMg==', 'https://www.promoview.com.br/uploads/2017/04/b72a1cfe.png', 'administrador'),
	  ('autor', 'autor@gmail.com', 'Qm9sc29sdWxhMTMyMg==', 'https://www.promoview.com.br/uploads/2017/04/b72a1cfe.png', 'autor'),
	  ('Anderson', 'andersonpiresdacruz@gmail.com', 'Qm9sc29sdWxhMTMyMg==', 'https://www.promoview.com.br/uploads/2017/04/b72a1cfe.png', 'administrador'),
	  ('João Silva', 'joao.silva@example.com', 'senha1', 'https://www.promoview.com.br/uploads/2017/04/b72a1cfe.png', 'usuário comum'),
	  ('Maria Santos', 'maria.santos@example.com', 'senha2', 'https://www.promoview.com.br/uploads/2017/04/b72a1cfe.png', 'autor'),
	  ('Pedro Costa', 'pedro.costa@example.com', 'senha3', 'https://www.promoview.com.br/uploads/2017/04/b72a1cfe.png', 'administrador'),
	  ('Ana Ferreira', 'ana.ferreira@example.com', 'senha4', 'https://www.promoview.com.br/uploads/2017/04/b72a1cfe.png', 'usuário comum'),
	  ('Carlos Oliveira', 'carlos.oliveira@example.com', 'senha5', 'https://www.promoview.com.br/uploads/2017/04/b72a1cfe.png','autor'),
	  ('Sofia Pereira', 'sofia.pereira@example.com', 'senha6', 'https://www.promoview.com.br/uploads/2017/04/b72a1cfe.png', 'administrador'),
	  ('Luiz Almeida', 'luiz.almeida@example.com', 'senha7', 'https://www.promoview.com.br/uploads/2017/04/b72a1cfe.png','usuário comum'),
	  ('Laura Ribeiro', 'laura.ribeiro@example.com', 'senha8','https://www.promoview.com.br/uploads/2017/04/b72a1cfe.png', 'autor'),
	  ('Fernando Gomes', 'fernando.gomes@example.com', 'senha9', 'https://www.promoview.com.br/uploads/2017/04/b72a1cfe.png','administrador'),
	  ('Mariana Sousa', 'mariana.sousa@example.com', 'senha10', 'https://www.promoview.com.br/uploads/2017/04/b72a1cfe.png','usuário comum'),
	  ('Gabriel Carvalho', 'gabriel.carvalho@example.com', 'senha11','https://www.promoview.com.br/uploads/2017/04/b72a1cfe.png', 'autor'),
	  ('Carolina Mendes', 'carolina.mendes@example.com', 'senha12', 'https://www.promoview.com.br/uploads/2017/04/b72a1cfe.png','administrador'),
	  ('Rafaela Castro', 'rafaela.castro@example.com', 'senha13','https://www.promoview.com.br/uploads/2017/04/b72a1cfe.png', 'usuário comum'),
	  ('Ricardo Santos', 'ricardo.santos@example.com', 'senha14', 'https://www.promoview.com.br/uploads/2017/04/b72a1cfe.png','autor'),
	  ('Isabela Lima', 'isabela.lima@example.com', 'senha15', 'https://www.promoview.com.br/uploads/2017/04/b72a1cfe.png','administrador'),
	  ('Daniel Pereira', 'daniel.pereira@example.com', 'senha16', 'https://www.promoview.com.br/uploads/2017/04/b72a1cfe.png','usuário comum'),
	  ('Vitória Alves', 'vitoria.alves@example.com', 'senha17','https://www.promoview.com.br/uploads/2017/04/b72a1cfe.png', 'autor'),
	  ('Diego Fernandes', 'diego.fernandes@example.com', 'senha18', 'https://www.promoview.com.br/uploads/2017/04/b72a1cfe.png','administrador'),
	  ('Larissa Ribeiro', 'larissa.ribeiro@example.com', 'senha19', 'https://www.promoview.com.br/uploads/2017/04/b72a1cfe.png', 'usuário comum'),
	  ('Gustavo Melo', 'gustavo.melo@example.com', 'senha20', 'https://www.promoview.com.br/uploads/2017/04/b72a1cfe.png', 'autor');
	  -- USUARIOS ADM

	INSERT INTO administradores (codigo_de_acesso, ID_perfil)
	VALUES ('1322', 2),
	('1109', 4);
	-- USUARIOS COMUNS
	INSERT INTO usuarios_comuns (usuario, ID_perfil)
	VALUES ('teste', 1);
	-- AUTOR
	INSERT INTO autores (cpf, data_de_nascimento, ID_perfil)
	VALUES ('00011122233', '2000-01-01', 4);

