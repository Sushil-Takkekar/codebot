<?php
	
	$code = $_POST['code'];
	//echo $code;	//it'll show error on this page, but can be displayed in textarea

	$input_file = fopen("submissions/Reach_Nth_point.java", "w");
	fwrite($input_file, $code);
	fclose($input_file);
/*
	exec('cd submissions && javac 14ce5504.java 2>&1', $re);
	if($re)
	{
		$op='';
		foreach($re as $r)
		{		
			$op .= $r.'<br>';
		}	
		echo $op;
	}
	else
	{
		exec('cd submissions && java Hello', $res);
		$output = '';
		foreach($res as $r)
		{		
			$output .= $r.'<br>';
		}
		//print($output);	
		echo $output;
	}	
*/
	exec('cd submissions && javac Reach_Nth_point.java 2>&1', $re);
	if($re)
	{
		$op='';
		foreach($re as $r)
		{		
			$op .= $r.'<br>';
		}	
		echo $op;
	}
	else
	{
		$file_path = "submissions/testcase/case2.txt";
		$case1 = fopen($file_path, "r");
		$input = fread($case1,filesize($file_path));
		//$input = '52 87';
		//echo getcwd();
		$descriptorspec = array(
		   0 => array("pipe", "r"),  // stdin is a pipe that the child will read from
		   1 => array("pipe", "w"),  // stdout is a pipe that the child will write to
		   2 => array("file", "submissions/testcase/error_log.txt", "a") // stderr is a file to write to
		);
		$cwd = NULL;
		$env = NULL;
		$process = proc_open('cd submissions && java Hello 2>&1', $descriptorspec, $pipes, $cwd, $env);

		if (is_resource($process)) 
		{
		    //feeding text to java
		    fwrite($pipes[0], $input);
		    fclose($pipes[0]);

		    //reading output text from java
		    $output = stream_get_contents($pipes[1]);
		    fclose($pipes[1]);

		    $return_value = proc_close($process);
		    $output = preg_replace('/\s+/', '<br>', $output);
		    echo $output;
		}
	}
?>