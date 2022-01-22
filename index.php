<!--
#######################
File written by Elvis Ansima
#######################

The output is shown on the browser console
-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Job pretest challenge</title>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Ubuntu+Condensed&display=swap');
		*{
			font-family: 'Bebas Neue', cursive;
		}
	</style>

</head>
<body style="padding: 25%; background-image: url(https://i.pinimg.com/736x/86/6b/57/866b57c50e7f93fb7e94b637b06ea16f.jpg);">
	<div style="background-color:#fff; padding:40px; border-radius:40px;">
		<p style="top:40%;font-size: 2.4rem;">Things are happening in the console</p>
		<p style="color:#ebd234;">Please open dev tool with ctrl + shift + i to see</p>
		<p style="text-align: right;"><a href="">Reload</a></p>
	</div>
</body>

<script type="text/javascript">
	console.log(`%cThe source file were looking like this before proccessing#######################################:`,'background: #000; color: #42f5ce');
	<?php
		$str = file_get_contents(__DIR__."/filestests/file2.txt");

		echo "console.log(`".$str."`);";
		echo "console.log(`%cAnd after processing, this is the output ###################################################`,'background: #000; color: #42f5ce');";

		$pattern = "~\[([^\]]{1,})\]~"; //match "[" as the starting untill a we get a closed bracket but ignore shorter word with 0 character
		preg_match_all($pattern, $str,$array_of_matches);

		foreach($array_of_matches as $key=>$value){
		   foreach ($value as $key2 => $value2){
		    echo "console.log(`".preg_replace("/[\]|[\]]/","",$value2)."`);"; //replace [ and ] with empty character
		    echo " \n";
		   }
		}
	?>
</script>
</html>

