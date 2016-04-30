<?php

	$number_founders = $_POST['founders'];

	$industry = $_POST['industry'];

	$type = $_POST['type']; // IT \ Non-IT

	$knowledge = $_POST['toggle_option']; // Knowedge of Industry

	$business_type = $_POST['business_type'];	

	$startup_stage = $_POST['startup_stage']; 

	$funding = $_POST['funding']; // Funding Stage

	$city = $_POST['city'];

	$res = 0;
	//-------Number of Founders------

	$dedicated = array();

	if($number_founders === '1'){
		$res += 5*20;
		$college1 = $_POST['college1'];
		$dedicated1 = $_POST['dedicated1'];			
		
		$dedicated[0] = $dedicated1; 

		

	}

	else if($number_founders === '2'){
		$res += 5*75;
		$college1 = $_POST['college1'];
		$dedicated1 = $_POST['dedicated1'];

		$college2 = $_POST['college2'];
		$dedicated2 = $_POST['dedicated2'];

		$dedicated[0] = $dedicated1; 
		$dedicated[1] = $dedicated2;

	}

	else if($number_founders === "3"){
		$res += 5*100;
		$college1 = $_POST['college1'];
		$dedicated1 = $_POST['dedicated1'];

		$college2 = $_POST['college2'];
		$dedicated2 = $_POST['dedicated2'];

		$college3 = $_POST['college3'];
		$dedicated3 = $_POST['dedicated3'];

		$dedicated[0] = $dedicated1; 
		$dedicated[1] = $dedicated2; 
		$dedicated[2] = $dedicated3; 

	}


	else if($number_founders === "4"){
		$res += 5*50;
		$college1 = $_POST['college1'];
		$dedicated1 = $_POST['dedicated1'];

		$college2 = $_POST['college2'];
		$dedicated2 = $_POST['dedicated2'];

		$college3 = $_POST['college3'];
		$dedicated3 = $_POST['dedicated3'];

		$college4 = $_POST['college4'];
		$dedicated4 = $_POST['dedicated4'];
	
		$dedicated[0] = $dedicated1; 
		$dedicated[1] = $dedicated2; 
		$dedicated[2] = $dedicated3; 
		$dedicated[3] = $dedicated4; 


	}

	else{
		$res += 5*30;
		$college1 = $_POST['college1'];
		$dedicated1 = $_POST['dedicated1'];

		$college2 = $_POST['college2'];
		$dedicated2 = $_POST['dedicated2'];

		$college3 = $_POST['college3'];
		$dedicated3 = $_POST['dedicated3'];

		$college4 = $_POST['college4'];
		$dedicated4 = $_POST['dedicated4'];

		$dedicated[0] = $dedicated1; 
		$dedicated[1] = $dedicated2; 
		$dedicated[2] = $dedicated3; 
		$dedicated[3] = $dedicated4;
	}

	echo $res."<br>";

	//--------Dedication--------
	$temp = 0;

	for($i =0 ; $i<$number_founders ; $i++ ){
		
		if($dedicated[$i] === "Part Time"){
			$temp += 10*30;
		} 

		else if ($dedicated[$i] === "Full Time"){
			$temp += 10*100;
		}
	}

	$temp = ($temp/$number_founders);
	$res += $temp;

	echo $res."<br>";

	//--------Industry-----------
	

	if($industry === "Analytics"){
		$res += 10*15.4;
	}

	else if($industry === "Consumer Internet"){
		$res += 10*100;
	}

	else if($industry === "E-Commerce"){
		$res += 10*50;
	}

	else if($industry === "Education"){
		$res += 10*42.3;
	}

	else if($industry === "Energy"){
		$res += 10*3.8;
	}

	else if($industry === "Hardware"){
		$res += 10*11.5;
	}

	else if($industry === "Mobile App"){
		$res += 10*46.2;
	}

	else if($industry === "Healthcare"){
		$res += 10*34.6;
	}

	else if($industry === "Payment"){
		$res += 10*7.7;
	}

	else if($industry === "Service"){
		$res += 10*53.8;
	}

	else if($industry === "Technology"){
		$res += 10*38.5;
	}

	else if($industry === "Others"){
		$res += 10*30.8;
	}

	echo $res."<br>";

	//-----Type of Startup--------

	if($type === "IT"){
		$product_development = $_POST['product_development'];

		if($product_development === "Inhouse"){
			$res += (8*100*100)/100;
		}

		else if($product_development === "Outsourced"){
			$res += (8*100*70)/100;
		}

		else{
			$res += (8*100*5)/100;
		}
	}

	else if($type === "Non IT"){
		$setup = $_POST['setup']; // Ready \ Not Ready

		if($setup === "Ready"){
			$res += (8*60*100)/100;
		}

		else if($setup === "Not Ready"){
			$res += (8*60*30)/100;
		}
	}

	echo $res."<br>";

	//-----Knowledge of Industry------

	$res += 3*$knowledge*10;


	//-----Type of Business------

	if($business_type === "B2B"){
		$res += 3*40;
	}

	else if($business_type === "B2C"){
		$res += 3*100;
	}

	echo $res."<br>";

	//-----Startup Stage and Funding------


	if($startup_stage === "Ideation"){
		$res += 60*10; 
	}

	else if($startup_stage === "Concept"){
		if($funding === "Bootstraping"){
			$res += 60*15;
		}
		else if($funding === "Incubator"){
			$res += 60*35;
		}
		else if($funding === "Angel"){
			$res += 60*45;
		}
		else{
			$res += 60*20;
		}
	}

	else if($startup_stage === "Beta Launch"){
		if($funding === "Bootstraping"){
			$res += 60*20;
		}

		else if($funding === "Incubator"){
			$res += 60*40;
		}

		else if($funding === "Angel"){
			$res += 60*50;
		}
		else{
			$res += 60*25;
		}
	}

	else if($startup_stage === "Traction"){
		if($funding === "Angel"){
			$res += 60*70;
		}
		else if($funding === "Seed Investor"){
			$res += 60*100;
		}
	}

	else if($startup_stage === "Growth"){
		if($funding === "Angel"){
			$res += 60*140;
		}
		else if($funding === "Seed Investor"){
			$res += 60*200;
		}
	}

	echo $res."<br>";

	//-------City--------

	if($city === "Bangalore"){
		$res += 1*100;
	}

	else if($city === "New Delhi"){
		$res += 1*84.6;
	}

	else if($city === "Mumbai"){
		$res += 1*64.6;
	}

	else if($city === "Hyderabad"){
		$res += 1*18.5;
	}

	else if($city === "Pune"){
		$res += 1*12.3;
	}

	else if($city === "Chennai"){
		$res += 1*12.3;
	}

	else if($city === "Ahmedabad"){
		$res += 1*6.2;
	}

	else if($city === "Kochi"){
		$res += 1*6.2;
	}

	else if($city === "Others"){
		$res += 1*3.1;
	}




	$res = $res/100;

	echo $res;

?>