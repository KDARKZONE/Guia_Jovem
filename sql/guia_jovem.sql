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
	
	INSERT INTO `post` (`ID_post`, `data_hora_post`, `titulo`, `conteudo`, `categoria`, `thumb`, `cpf`, `ID_perfil`) 
	VALUES 
	('5', '2023-06-19 23:57:54', 'Enem abre inscrições', 'Estão abertas as inscrições do Exame Nacional do Ensino Médio (Enem) 2023. Os interessados devem se inscrever, na Página do Participante, até o dia 16 de junho – prazo que vale, também, para os pedidos de atendimento especializado e tratamento por nome social.', 'Enem', 'IMG-autor/enem3.png6490cf6221cc8.png', '000.111.222-33', '3'),
	('6', '2023-06-20 00:05:42', 'Enem 2023: inscrições encerram em breve', 'As inscrições para o Exame Nacional do Ensino Médio (Enem) terminam nesta sexta-feira (16). Elas podem ser realizadas por meio da página do participante, no site do Instituto Nacional de Estudos e Pesquisas Educacionais Anísio Teixeira (Inep). A taxa de inscrição é de R$ 85, podendo ser paga até 21 de junho. A aplicação das provas acontecerá em 5 e 12 de novembro. Os portões das unidades de ensino serão abertos às 12h e fechados às 13h, com o início do exame às 13h30', 'Enem', 'IMG-autor/enem1.png6490d13673160.png', '000.111.222-33', '3'),
	('7', '2023-06-20 00:11:12', 'Cursos com estágio!!!', 'O estágio é o momento de preparação para o mercado de trabalho do estudante, é onde conhece a rotina, coloca em prática os conhecimentos que aprendeu ao longo do curso e também começa a criar sua trajetória profissional. Muitos estudantes têm dúvidas de quando devem começar a estagiar, esse ponto é muito pessoal e vai da escolha de cada um. Desde que o estágio não atrapalhe sua rotina de estudos e aulas ou o estudante se sinta capaz e pronto para estagiar, ele já está apto para iniciar esse novo processo em sua carreira profissional.', 'Cursos', 'IMG-autor/estagio.png6490d28020a1c.png', '000.111.222-33', '3'),
	('8', '2023-06-20 00:16:20', 'Sisu tem novidades!!!', 'Logo da Quero Bolsa Página inicial Programas do Governo Sisu Sisu 2023: Tudo o que você precisa saber O Sistema de Seleção Unificada (Sisu) é o sistema informatizado do Ministério da Educação, um portal para as instituições públicas de ensino superior disponibilizarem suas vagas para quem participou do Exame Nacional do Ensino Médio (Enem).', 'Sisu', 'IMG-autor/sisu2.png6490d3b477e70.png', '000.111.222-33', '3'),	
	('9', '2023-06-20 00:25:03', 'Curiosidadesdo SISU', 'O Sisu é um programa de acesso ao ensino superior do Ministério da Educação (MEC) que reúne as vagas ofertadas por instituições públicas de ensino superior de todo o Brasil, sendo a maioria disponibilizada por instituições federais de ensino (universidades e institutos). A inscrição é gratuita e feita totalmente pela internet. Essa possibilidade é aberta duas vezes ao ano, antes do início de cada período letivo. Em média, três dias são disponibilizados para que os candidatos possam escolher os cursos.', 'Sisu', 'IMG-autor/sisu5.png6490d5bf3c094.png', '063044631', '6'),
	('10', '2023-06-20 00:31:27', 'Prouni o que é', 'O Prouni, sigla de Programa Universidade Para Todos, pertence ao MEC e oferece bolsas integrais e parciais em instituições de ensino particulares.', 'Prouni', 'IMG-autor/prouni1.png6490d73f23fa4.png', '063044631', '6'),
	('11', '2023-06-20 00:32:38', 'Como ingressar no PROUNI', 'Você deve indicar até duas opções de curso preferidas (lembre-se sempre de colocar sua opção favorita como a primeira) – para isso, você precisa também selecionar a instituição e o turno desejado. A seguir, selecione se deseja participar com ampla concorrência ou, caso você se enquadre, por meio de cotas. Então, monitore, todos os dias, a nota parcial para os cursos selecionados. Você pode mudar suas escolhas, caso deseje.', 'Prouni', 'IMG-autor/prouni5.png6490d7862efe7.png', '063044631', '6'),
	('12', '2023-06-20 00:35:14', 'FIES: Como você nunca viu', 'Aumentar letra | Letra normal | Dos-Vox | Ir para o conteúdo Quem acredita em si mesmo merece o nosso crédito. SisFies O QUE É O FIES O Fundo de Financiamento Estudantil(Fies) é um programa do Ministério da Educação destinado a financiar a graduação na educação superior de estudantes matriculados em cursos superiores não gratuitas na forma da Lei 10.260/2001. Podem recorrer ao financiamento os estudantes matriculados em cursos superiores que tenham avaliação positiva nos processos conduzidos pelo Ministério da Educação.', 'Fies', 'IMG-autor/fies3.png6490d8222be75.png', '063044631', '6'),
	('13', '2023-06-20 00:42:09', 'O primeiro passo', 'O primeiro passo para efetuar a inscrição consiste em acessar o Sistema de Seleção do FIES (FIES Seleção) e informar os dados solicitados. No primeiro acesso, o estudante informará seu número de Cadastro de Pessoa Física (CPF), sua data de nascimento, um endereço de e-mail válido e cadastrará uma senha que será utilizada sempre que o estudante acessar o Sistema. Após informar os dados solicitados, o estudante receberá uma mensagem no endereço de e-mail informado para validação do seu cadastro. A partir daí, o estudante acessará o FIES Seleção e fará sua inscrição informando seus dados pessoais, do seu curso e instituição.', 'Fies', 'IMG-autor/fies4.png6490d9c139e63.png', '063044631', '6')
	;
