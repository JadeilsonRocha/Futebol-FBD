-- Script do Banco de Dados Futebol - Fundamentos de BD - BSI-UFRPE

-- Criando o esquema Futebol
create schema futebol;
use futebol;

create table pais(
sigla_pais varchar(5) not null,
nome_pais varchar(20) not null,
primary key (sigla_pais)
);

create table copa(
ano_copa integer not null, 
data_inicio_copa date not null, 
data_fim_copa date not null, 
cidade_abertura varchar(20) not null,
primary key (ano_copa)
);

create table pessoa(
cod_pessoa integer not null auto_increment , 
nome_pessoa varchar(20) not null, 
data_nascimento date not null, 
sigla_pais_Nasc varchar(5) not null,
primary key (cod_pessoa),
foreign key (sigla_pais_Nasc) references pais(sigla_pais) on update cascade on delete cascade
);

create table treinador(
cod_treinador integer not null,
cod_pessoa integer not null,
primary key(cod_treinador),
foreign key (cod_pessoa) references pessoa(cod_pessoa) on update cascade on delete cascade
);

create table equipe(
cod_equipe integer not null auto_increment, 
sigla_pais varchar(5) not null, 
cod_treinador integer not null,
primary key (cod_equipe),
foreign key (sigla_pais) references pais(sigla_pais) on update cascade on delete cascade,
foreign key (cod_treinador) references treinador(cod_treinador) on update cascade on delete cascade
);

create table jogador(
posicao varchar(20),
cod_pessoa integer not null, 
cod_equipe integer not null,
primary key (cod_pessoa, cod_equipe),
foreign key (cod_pessoa) references pessoa(cod_pessoa) on update cascade on delete cascade,
foreign key (cod_equipe) references equipe(cod_equipe) on update cascade on delete cascade
);

create table jogo(
numero_jogo integer not null, 
estadio_jogo varchar(20) not null, 
data_jogo date not null, 
hora_jogo time not null, 
cod_equipe1 integer not null, 
gols_equipe1 integer not null, 
cod_equipe2 integer not null, 
gols_equipe2 integer not null,
primary key (numero_jogo),
foreign key (cod_equipe1) references equipe(cod_equipe) on update cascade on delete cascade,
foreign key (cod_equipe2) references equipe(cod_equipe) on update cascade on delete cascade
);

create table copa_equipe(
ano_copa integer not null, 
cod_equipe integer not null,
primary key (ano_copa, cod_equipe),
foreign key (ano_copa) references copa(ano_copa) on update cascade on delete cascade,
foreign key (cod_equipe) references equipe(cod_equipe) on update cascade on delete cascade
);

-- Povoando o Banco de Dados

insert into pais (sigla_pais, nome_pais) values 
('BRA','Brasil'), 
('ARG','Argentina'), 
('ALE','Alemanha'), 
('CHI','Chile'), 
('COL','Colombia'), 
('JAP','Japão'), 
('EUA', 'Estados Unidos'), 
('FRA', 'França'), 
('ESP', 'Espanha'),
('AFS', 'Africa do Sul'),
('RUS', 'Russia'),
('CRS', 'Coreia do Sul');


insert into copa (ano_copa, data_inicio_copa, data_fim_copa, cidade_abertura) values 
(2018,'2018-06-02','2018-07-04','Moscou'),
(2014, '2014-06-05', '2014-07-02', 'Brasilia'),
(2010,'2010-06-04','2010-07-07','Joanesburgo'),
(2006, '2006-06-07', '2006-07-09', 'Stuttgard'),
(2002, '2002-06-13', '2002-07-17', 'Osaka');


INSERT INTO `pessoa` (`cod_pessoa`, `nome_pessoa`, `data_nascimento`, `sigla_pais_Nasc`) VALUES
(1, 'Jadeilson Rocha', '1991-12-30', 'BRA'),
(2, 'Adailson Tavares', '1993-12-04', 'ARG'),
(3, 'Leandro Braz', '1992-05-20', 'COL'),
(4, 'Juan Santos', '1990-10-10', 'CHI'),
(5, 'Tanaka Kanui', '1993-05-08', 'JAP'),
(6, 'Podosky Huller', '1992-07-25', 'ALE'),
(7, 'Cristian Grae', '1990-01-09', 'EUA'),
(8, 'Malouda Heatz', '1991-04-23', 'FRA'),
(9, 'Pablo Hierro', '1990-12-24', 'ESP'),
(10, 'Treinador Adailson', '2018-02-19', 'BRA'),
(11, 'Treinador Leandro', '2018-02-19', 'ESP'),
(12, 'Treinador Jadeilson', '2018-02-13', 'ARG'),
(13, 'Treinador Bio Zoião', '2018-02-19', 'CHI'),
(14, 'Treinador José', '2018-02-19', 'COL'),
(15, 'Treinadora Maria', '2018-02-19', 'RUS'),
(20, 'Neymar', '2018-02-13', 'BRA');

INSERT INTO `treinador` (`cod_treinador`, `cod_pessoa`) VALUES
(10, 10),
(11, 11),
(12, 12),
(13, 13),
(14, 14),
(15, 15);


INSERT INTO `equipe` (`cod_equipe`, `sigla_pais`, `cod_treinador`) VALUES
(1, 'BRA', 15),
(2, 'ARG', 14),
(3, 'COL', 10),
(4, 'CHI', 11),
(5, 'JAP', 12),
(6, 'ALE', 13),
(7, 'EUA', 15),
(8, 'FRA', 12),
(9, 'ESP', 13);

INSERT INTO `jogador` (`posicao`, `cod_pessoa`, `cod_equipe`) VALUES
('Goleiro reseva', 1, 2),
('Goleiro principal', 2, 2),
('Atacante', 3, 2),
('Lateral direito', 4, 2),
('Lateral esquerdo', 5, 2),
('Goleiro reseva', 6, 1),
('Goleiro principal', 7, 1),
('Lateral esquerdo', 8, 1),
('Lateral direito', 9, 1),
('Atacante', 20, 1);

INSERT INTO `jogo` (`numero_jogo`, `estadio_jogo`, `data_jogo`, `hora_jogo`, `cod_equipe1`, `gols_equipe1`, `cod_equipe2`, `gols_equipe2`) VALUES
(1, 'Arena Pernambuco', '2014-06-09', '17:00:00', 1, 2, 2, 0),
(2, 'Arena Pernambuco', '2018-02-28', '16:00:00', 1, 5, 2, 0);

INSERT INTO `copa_equipe` (`ano_copa`, `cod_equipe`) VALUES
(2010, 1),
(2010, 6),
(2014, 1),
(2014, 2),
(2014, 4),
(2014, 6);
