<?php

function getAllHouses(){
	$sql = "select * from u_houses ";
	$rows = fetchAll($sql);
	return $rows;
}

//ȡǰ�ĸ���������
function getFavHouses(){
	$sql = "select * from u_houses where isHot=1 order by id limit 4";
	$rows = fetchAll($sql);
	return $rows;
}

//���ݵ���ĸ����������÷�Դ��������ҳ
function getOwnHouses($id){
	$sql = "select * from u_houses where id='{$id}'";
	$row = fetchOne($sql);
	return $row;
}

//���ݳ��еõ��ó�����Ȧ����
function getLocationbyCity($lcity){
	$sql = "select * from u_location where lcity='{$lcity}'";
	$rows = fetchAll($sql);
	return $rows;
}

//ȡ���̼ҹ���
function getAD(){
	$sql = "select * from u_advertisement order by id desc";
	$row = fetchOne($sql);
	return $row;
}

//ȡ�ĸ�����չʾ
function showHouses(){
	$sql = "select * from u_houses order by id desc limit 4";
	$rows = fetchAll($sql);
	return $rows;
}

//ȡ���ڳ﷿Դ
function getConHouses(){
	$sql = "select * from u_congregation order by id desc";
	$rows = fetchAll($sql);
	return $rows;
}

