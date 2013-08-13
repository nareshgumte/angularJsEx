<?php
	$users = array(
				array('id' => 1,
					  'name' => "hatched Hut", 
					  'image' => 'http://localhost/angular-ex/default.gif'
				),
				array(
						'id' => 2, 
						'name' => "Aladdin's House", 
						'image' => 'http://localhost/angular-ex/default.gif'
				),
				array(
						'id' => 3, 
						'name' => "Ali Baba's Castle ", 
						'image' => 'http://localhost/angular-ex/default.gif'
				),		
				array(
						'id' => 4, 
						'name' => 'Royal Palace', 
						'image' => 'http://localhost/angular-ex/default.gif'
				),		
				array(
						'id' => 5, 
						'name' => "Citizen's Cottage", 
						'image' => 'http://localhost/angular-ex/default.gif'
				),		
		);
	echo json_encode($users);
	/*$usersArabic = array(
		array(1, 'كوخ القش', 'http://localhost/angular-ex/default.gif'),
		array(2, 'بيت علاء الدين', 'http://localhost/angular-ex/default.gif'),
		array(3, 'حصن علي بابا', 'http://localhost/angular-ex/default.gif'),		
		array(4, 'القصر الملكي', 'http://localhost/angular-ex/default.gif'),		
		array(5, 'كوخ المواطن', 'http://localhost/angular-ex/default.gif'),		
	);*/
	
	//echo ($_GET['language'] == 'ar')?json_encode($usersArabic):json_encode($users);
	
	
	
