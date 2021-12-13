#Mostra todos os databases existentes no BD
show databases;

#Tabela de Categorias

create database dbprojecthamburgueria;
use dbprojecthamburgueria;


select * from tblCategorias order by tipo;

select * from tblCategorias;

#Tabela de Categorias
create table tblCategorias (
	idCategorias int not null auto_increment primary key,
    tipo varchar(45) not null,
    unique index(idCategorias)
);
drop tables tblCategorias;

#Tabela de Usuarios
create table tblUsuarios (
	idUsuarios int not null auto_increment primary key,
    nome varchar (100) not null,
    usuario varchar(100) not null,
    senha varchar(100) not null
);

create table tblUsuarios2 (
	idUsuarios2 int not null auto_increment primary key,
    login varchar(100) not null,
    senha varchar(100) not null
);

show tables;


#database de contatos
create database dbcontatos;

use dbcontatos;

#Tabela de Contatos
create table tblContatos (
	idContatos int not null auto_increment primary key,
    nome varchar (45) not null,
    celular varchar(50) not null,
    telefone varchar(50) not null
);
select * from tblProdutos;

#Tabela de Produtos
create table tblProdutos (
	idProdutos int not null auto_increment primary key,
	nome varchar (100) not null,
    imagem varchar (100) not null,
    preco varchar(25) not null,
    desconto varchar(10) not null,
    descricao varchar(100) not null,
    destaques boolean,
    idCategorias int not null, 
    
	constraint fk_categorias_produtos
	foreign key (idCategorias)
    references tblCategorias(idCategorias)
    
);

create table tblProdutos (
	idProdutos int not null auto_increment primary key,
	nome varchar (100) not null,
    imagem varchar (100) not null,
    preco varchar(25) not null,
    desconto varchar(10) not null,
    descricao varchar(100) not null,
    destaques boolean
 
    
);

insert into tblProdutos ( nome, preco, desconto, descricao, destaques, imagem ) values ( 'sdfsdf', '555', '55', '55', 0, '' );

alter table tblProdutos
add column idCategorias int not null,
add constraint FK_categorias_produtos
foreign key (idCategorias)
references tblCategorias(idCategorias);

drop tables tblProdutos;

insert into tblProdutos ( nome, preco, desconto, descricao, destaques, imagem, idCategorias ) values ( 'sdfsdf', '555', '55', '55', 0, '', 0 );
insert into tblProdutos ( nome, preco, desconto, descricao, destaques, imagem, idCategorias ) values ( 'sdfsdf', '555', '55', '55', 0, '', 0 );

desc tblProdutos;

select *from tblProdutos;

insert into tblProdutos ( nome, preco, desconto, descricao, destaques, imagem, idCategorias ) values ( 'SAS', '141', '1414', '23432', 0, 'ddd2af88d891ca8dab77d86caf39044f.png', 0 );

#Tratar o select depois
select tblFilme, tblClassificacao.faixaEtaria from tblFilme inner join tblClassificacao on tblClassificacao.idClassificacao = tblFilme.idClassificacao;
select tblProdutos. *, tblCategorias.tipo from tblProdutos inner join tblCategorias on tblCategorias.idCategorias = tblProdutos.idCategorias;

alter table tblUsuarios
	add column nome varchar(100);
    
drop table tblProdutos;

 alter table tblProdutos   
		change column destaques destaques int;
        

	drop table tblUsuarios2;


#Mostra todas as tabelas existentes no database
show tables;




insert into tblProdutos ( nome, preco, desconto, descricao, destaques, imagem ) values ( 'Samuel', '2', '657', '22', 0, 'dc4ee8d6d3b66325f66fb8a75b8f01ba.jpg' );
insert into tblProdutos ( nome, preco, desconto, descricao, destaques, imagem ) values ( '323', '02423', '2423', '242', 0, '0fac345370a5f4a274a29b226f36fc92.jpg' );
select * from tblUsuarios2 where login = 'usuario' and senha = '123';

#Permite visualizar a estrutura de uma tabela
desc tblCategorias;
desc tblUsuarios;
desc tblContatos;
desc tblProdutos;
 
/*Tabela de Categorias*/ 
select * from tblCategorias order by idCategorias desc;
select * from tblCategorias where idCategorias;

insert into tblProdutos ( nome, preco, desconto, descricao, destaques, imagem, idCategorias ) values ( 'Samuel', '445', '455', '555', 0, 'c5b138bdcc402a08f913fe25930580dd.png', 0 );

select *from tblProdutos;
insert into tblProdutos ( nome, preco, desconto, descricao, destaques, imagem ) values ( 'Samuel', '445', '455', '555', 0, 'f6d49a13cf751f1051167914c6d8e30a.png' );
/*Tabela de Login*/
select * from tblUsuarios order by idUsuarios desc;
select * from tblUsuarios where idUsuarios;

select * from tblUsuarios2 order by idUsuarios2 desc;
select * from tblContatos order by idContatos desc;
select * from tblContatos where idContatos;
insert into tblUsuarios (nome, usuario, senha ) values('usuario', 'usuario', '123');
insert into tblUsuarios (nome, usuario, senha ) values('usuario', 'usuario', '123');
select * from tblUsuarios where idUsuarios ='usuario' and senha='81dc9bdb52d04dc20036dbd8313ed055';


/*Tabela de Produtos*/
select * from tblProdutos order by idProdutos desc;
select * from tblProdutos where idProdutos;

select * from tblContatos where idContatos =4;

insert into tblUsuarios2 ( login, senha ) values ( '12345', 'bcd127' );

insert into tblUsuarios ( nome, usuario, senha ) values ( 'Samuel', '21191764', '131' );
insert into tblProdutos ( nome, imagem, preco, calorias, tamanho, destaques ) values ( 'SAS', 'Captura de Tela (32).png', '22.00', '3553', '3535');
