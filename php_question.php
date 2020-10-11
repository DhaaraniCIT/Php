<?php
	header('Access-Control-Allow-Origin: *');
	/*Question : This page contain multiple array
	 * 		$employee array contain employee with employee_id, firstName etc.
	 * 		$employee_salary contain salary of employee
	 * 		$employee_status contain status of employee
	 * Now you will have to solve below questions : 
	 * 	a. Who is Head of Abhisek(7)
	 *  Note : Find by name eg: $name = "Abhisek"; Head is Sumita Nath
		b. List out all department  name
		* Note : Answer must be like Tech, Crm
		c. Who is CTO of Switchme.
		d. List out all employee whose age>23 and age<27
		e. add salary key in $employee array from $employee_salary array.
		* Note : Final array should be like : https://interview.switchme.in/php/arr_with_salary.php
		f. Modify $employee array : delete employee who has status Delete from $employee_status array
		* Note : Final array should be like : https://interview.switchme.in/php/arr_with_active_status.php
		* 
		* NOTE : YOU ARE NOT ALLOWED TO USE ANY INBUILT FUNCTION
		* NOTE : YOU ARE NOT ALLOWED TO USE ANY INBUILT FUNCTION
		* 
	* */
	
$employee = array
	(
	0=>
		array("employee_id"=>1, "firstName"=>"Zahir", "lastName"=>"Alam", "Age"=>25, "Company"=>"Switchme", "Role"=>"Developer", "Department"=>"Tech"
			,"Head"=>
				array("Id"=>3 , "Name"=>"Sourasis Roy")
		)
	,
	1=>
		array("employee_id"=>2, "firstName"=>"Amith", "lastName"=>"Manniken", "Age"=>25, "Company"=>"Switchme", "Role"=>"Developer", "Department"=>"Tech"
			,"Head"=>
				array("Id"=>3 , "Name"=>"Sourasis Roy")
		)
	,
	2=>
		array("employee_id"=>3, "firstName"=>"Sourasis", "lastName"=>"Roy", "Age"=>28, "Company"=>"Switchme", "Role"=>"CTO")
	,
	3=>
		array("employee_id"=>4, "firstName"=>"Aditya", "lastName"=>"Mishra", "Age"=>29, "Company"=>"Switchme", "Department"=>"Tech", "Role"=>"CEO")
	,
	4=>
		array("employee_id"=>5, "firstName"=>"Priti", "lastName"=>"Lata", "Age"=>24, "Company"=>"Switchme", "Role"=>"HR")
	,
	5=>
		array("employee_id"=>6, "firstName"=>"Sumita", "lastName"=>"Nath", "Age"=>24, "Company"=>"Switchme", "Role"=>"HLA Head", "Department"=>"Crm")
	,
	6=>
		array("employee_id"=>7, "firstName"=>"Tarini", "lastName"=>"Khanna", "Age"=>22, "Company"=>"Switchme", "Role"=>"Content Writer")
	,
	7=>
		array("employee_id"=>8, "firstName"=>"Abhisek", "lastName"=>"Soni", "Age"=>23, "Company"=>"Switchme", "Role"=>"HLA", "Department"=>"Crm"
			,"Head"=>
				array("Id"=>5 , "Name"=>"Sumita Nath")
		)
	,
	8=>
		array("employee_id"=>9, "firstName"=>"Ankit", "lastName"=>"Pump", "Age"=>23, "Company"=>"Switchme", "Role"=>"HLA", "Department"=>"Crm"
			,"Head"=>
				array("Id"=>5 , "Name"=>"Sumita Nath")
		)
	,
	9=>
		array("employee_id"=>10, "firstName"=>"Pogo", "lastName"=>"Laal", "Age"=>23, "Company"=>"Switchme", "Role"=>"Designer")
	,
	10=>
		array("employee_id"=>11, "firstName"=>"Sabina", "lastName"=>"Sekh", "Age"=>28, "Company"=>"Switchme", "Role"=>"HLA Head", "Department"=>"Crm")
	,
	11=>
		array("employee_id"=>12, "firstName"=>"Sanjay", "lastName"=>"Poudal", "Age"=>24, "Company"=>"Switchme", "Role"=>"HLA Head", "Department"=>"Crm"
			,"Head"=>
				array("Id"=>10 , "Name"=>"Sabina Sekh")
		)
	,
	);


$employee_salary = array
	(
	7=>
		array("employee_id"=>7, "salary"=>"55,000"
		)
	,
	2=>
		array("employee_id"=>2, "salary"=>"60,000"
		)
	,
	9=>
		array("employee_id"=>9, "salary"=>"50,000"
		)
	,
	10=>
		array("employee_id"=>10, "salary"=>"30,000"
		)
	,
	);


$employee_status = array
	(
	1=>
		array("employee_id"=>1, "status"=>"Active"
		)
	,
	7=>
		array("employee_id"=>2, "status"=>"Delete"
		)
	,
	11=>
		array("employee_id"=>11, "status"=>"Delete"
		)
	,
	10=>
		array("employee_id"=>10, "status"=>"Active"
		)
	,
	);

	//1
	$output1 = array();
	foreach($employee as $product){
		foreach($product as $key => $val){
			if($key == "firstName" && $val != "Abhisek"){
				continue 2;
			}
		}
		$output1[]=$product; 
	}
	$output1 = $output1[0];
	$output1 = $output1['Head'];
	echo "1.Head of Abhisek is Mr. $output1[Name]";
	echo "<br>";

	//2
	$depatment=array();
	$output2 = array();
	$i=0;
	echo "2.";
	foreach($employee as $product){
		foreach($product as $key => $val){
			if($key == "Department"){
				$depatment[]=$val;
			}
		}
	}
	foreach($depatment as $depat){
		foreach($output2 as $out){
			if($out == $depat){
				continue 2;
			}
		}
		$output2[]=$depat;
		echo "$depat, ";
	}

	//3
	$output3 = array();
	foreach($employee as $product){
		foreach($product as $pro=>$val){
			if($pro =='Role' && $val != "CTO"){
				continue 2;
			}
		}
		$output3[] = $product;
	}
	$output3 = $output3[0];
	echo "<br>";
	echo "3.CTO of Switchme is Mr. $output3[firstName] $output3[lastName]";

	//4
	$output4 = array();
	foreach($employee as $product){
		foreach($product as $key => $val){
			if($key == 'Age' && ($val < 23 || $val >27)){
				continue 2;
			}
		}
		$output4[]=$product;
	}
	echo "<br>";
	echo "4.The List of employee whos age is >23 and <27 <br><br>";
	// foreach($output4 as $product){
	// 	foreach($product as $key => $val){
	// 		if($key == "Head"){
	// 			echo "Head<br>";
	// 			foreach($val as $key => $val){
	// 				echo "$key : $val";
	// 				echo "<br>";
	// 			}
	// 			echo "<br>";
	// 		}
	// 		else{
	// 			echo "$key:$val";
	// 			echo "<br>";
	// 		}	
			
	// 	}
	// 	echo "<br>";
	// }
	display_arr($output4);

	//5
	$output5 = array();
	//$output = array();
	foreach($employee as $employe){
		foreach($employe as $keyy=>$vall){
			foreach($employee_salary as $salary){
				foreach($salary as $key=>$val){
					if($val == $vall ){
						$output5=$employee[$val-1];
						$output5['salary'] = $salary['salary']; 
						$employee[$val-1]= $output5;
					}
				}
			}

		}
	}
	echo "5.<br>";
	display_arr($employee);


	//6
	$output7 = array();
	foreach($employee as $employe){
		foreach($employe as $keyy=>$vall){
			foreach($employee_status as $status){
				foreach($status as $key=>$val){
					if($val == $vall ){
						$output7=$employee[$val-1];
						$output7['status'] = $status['status'];
						$employee[$val-1]= $output7;
					}
				}
			}
		}
	}
	$output7 = array();
	foreach($employee as $employe){
		foreach($employe as $key=>$val){
			if($key == 'status' && $val == 'Delete'){
				continue 2;
			}
		}
		$output7[]=$employe;
	}
	$employee = $output7;
	echo "6.<br>";
	display_arr($employee);


	function display_arr($employee)
	{
		$i;
		echo "Array";
		echo "<br>(";
		foreach($employee as $product){
			foreach($product as $key => $val){
				if($key == "Head"){
					echo "<pre>            [Head] => Array<br>		(</pre>";
					foreach($val as $key => $val){
						echo "<pre>                    [$key] => $val</pre>";
					}
					echo "<pre>		)</pre>";
				}
				elseif($key == "employee_id"){
					$i= $val-1;
					echo "<pre>    [$i] => Array<br>	(<br></pre>";
					echo "<pre>            [$key] => $val</pre>";
				}
				else if($key == "status"){
					continue;
				}
				else{
						echo "<pre>            [$key] => $val</pre>";
				}	
				
			}
			echo "<pre>	)</pre>
			";
		}
		echo "<pre>)</pre>";
	}
?>
