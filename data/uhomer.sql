create database if not exists uhomer;
use uhomer;
--����Ա��
drop table if exists u_admin;
create table u_admin(
id tinyint unsigned auto_increment key,
username varchar(20) not null unique,
password char(32) not null,
email varchar(50) not null,
adalbumPath varchar(50),
info text
);

--���ӷ���
drop table if exists u_topic;
create table u_topic(
id int unsigned auto_increment key,
uName varchar(50) not null unique,
uAuthor varchar(20),
--��������
uTop text,
--��������
uDesc text,
--����ͼƬ
uImg varchar(50) not null,
upubTime int unsigned not null,
isShow tinyint(1) default 1,
isHot tinyint(1) default 0
);

--�������۱�
drop table if exists u_comment;
create table u_comment(
id int unsigned auto_increment key,
bId int not null,
name varchar(20),
email varchar(50),
cTop text,
cComment text not null
);

--�û���
drop table if exists u_user;
create table u_user(
id int unsigned auto_increment key,
username varchar(20) not null unique,
password varchar(32) not null,
email varchar(50) not null,
mobile varchar(20) not null,
regTime varchar(50) not null
);

--����ͼ����
drop table if exists focus_album;
create table focus_album(
id int unsigned auto_increment key,
albumPath varchar(50) not null,
phoTop text,
phoDesc text
);

--��ϵ���Ǳ�
drop table if exists u_contact;
create table u_contact(
id int unsigned auto_increment key,
contactName varchar(50) not null,
contactTp text,
contactEmail varchar(50) not null,
comment text
);

--�̼ҹ���
drop table if exists u_advertisement;
create table u_advertisement(
id int unsigned auto_increment key,
albumPath varchar(50) not null,
phoTop text,
phoDesc text,
price decimal(10,2) not null
);

--��Դ�б�
drop table if exists u_houses;
create table u_houses(
id int unsigned auto_increment key,
--�����С
hArea varchar(50) not null,
--����/��Ȧ
hLocation varchar(50) not null,
--����
hKind varchar(20) not null,
--����(���Ҽ���)
hType varchar(20) not null,
--�۸�
hPrice decimal(10,2) not null,
hImg varchar(50) not null,
hpubTime varchar(20) not null,
isShow tinyint(1) default 1,
isHot tinyint(1) default 0
);

--��Ȧ�б�
drop table if exists u_location;
create table u_location(
id int unsigned auto_increment key,
lcity varchar(20) not null,
hLocation varchar(50) not null
);

--

--˽�˶��Ʊ�
drop table if exists u_order;
create table u_order(
id int unsigned auto_increment key,
username varchar(20) not null unique,
email varchar(50) not null,
phone varchar(11) not null,
topic text,
demand text
);

--VR��Դ
drop table if exists u_congregation;
create table u_congregation(
id int unsigned auto_increment key,
--�����С
hArea varchar(50) not null,
--����/��Ȧ
hLocation varchar(50) not null,
--����
hKind varchar(20) not null,
--���Ҽ���
hType varchar(20) not null,
--�۸�
hPrice decimal(10,2) not null,
hImg varchar(50) not null,
hpubTime int unsigned not null,
hURL varchar(100) not null
);



