<?php


$users = array(
    array('id' => 1,
        'name' => "hatched Hut",
        'image' => 'http://192.168.2.44/angular/default.gif'
    ),
    array(
        'id' => 2,
        'name' => "Aladdin's House",
        'image' => 'http://192.168.2.44/angular/default.gif'
    ),
    array(
        'id' => 3,
        'name' => "Ali Baba's Castle ",
        'image' => 'http://192.168.2.44/angular/default.gif'
    ),
    array(
        'id' => 4,
        'name' => 'Royal Palace',
        'image' => 'http://192.168.2.44/angular/default.gif'
    ),
    array(
        'id' => 5,
        'name' => "Citizen's Cottage",
        'image' => 'http://192.168.2.44/angular/default.gif'
    ),
);
echo json_encode($users);
 
	
