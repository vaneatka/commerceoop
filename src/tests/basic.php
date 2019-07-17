<?php
include '../Models/TimeStampModel.php';
include '../Models/Post.php';
include '../Models/User.php';
include '../Models/Topic.php';

use forum\Models\Post;
use forum\Models\User;
use forum\Models\Topic;

$u1 = new User('Big', 'Ass', "IonMariaSiIon", 'email@iiii.oi');
$p1 = new Post('Magistru', "WTF is SHOR");
$t1 = new Topic('THERE');
$p1->setUser($u1)->addTopic($t1);
var_dump($p1, $u1, $t1);
?>