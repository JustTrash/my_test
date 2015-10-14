<?php
	$dirname = "./iPod";

	function fordir($dirname){
		//打开目录资源
		$dir = opendir($dirname);

		readdir($dir);
		readdir($dir);
		while($file = readdir($dir)){
			$nfile = $dirname."/".$file;
			if(is_dir($nfile)){
				echo "目录：{$file}<br>";
				fordir($nfile);
			}
			else{
				echo "文件：{$file}<br>";
			}
		}

		closedir($dir);
	}

	fordir($dirname);
?>