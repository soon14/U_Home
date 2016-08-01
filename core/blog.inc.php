<?php
require_once '../lib/mysql.func.php';
//�õ�����
function getAllBlog(){
	$sql = "select * from u_topic order by id";
	$rows = fetchAll($sql);
	return $rows;
}
//�õ�����
function getBlogRows(){
	$sql = "select * from u_topic";
	$totalRows = getResultNum($sql);
	return $totalRows;
}
//���ݵ���ĸ����Ͷ�����ò��;�������ҳ
function getOwnBlog($id){
	$sql = "select * from u_topic where id=$id";
	$row = fetchOne($sql);
	return $row;
}

//�õ��������ӣ���ѡȡǰ7��
function getNewestBlog(){
	$sql = "select * from u_topic order by id desc limit 7";
	$rows = fetchAll($sql);
	return $rows;
}

//����isHot�õ���������
function getFavBlog(){
	$sql = "select * from u_topic where isHot=1 order by id desc";
	$rows = fetchAll($sql);
	return $rows;
}

//ִ�и�������id���в�������
function insertComment($bId,$name,$email,$topic,$comment){
	$arr['bId'] = $bId;
	$arr['name'] = $name;
	$arr['email'] = $email;
	$arr['topic'] = $topic;
	$arr['comment'] = $comment;
	
	insert("u_comment", $arr);
}