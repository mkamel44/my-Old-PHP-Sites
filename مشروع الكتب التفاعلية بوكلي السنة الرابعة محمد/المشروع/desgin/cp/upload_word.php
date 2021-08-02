<?php
if(is_array($_FILES)) 
{
	if(is_uploaded_file($_FILES['userImage']['tmp_name'])) 
	{
		$sourcePath = $_FILES['userImage']['tmp_name'];
		
		$targetPath = "../../upload_word/".rand(0,1000000).".doc";
		
			if(move_uploaded_file($sourcePath,$targetPath)) 
			{
					echo $targetPath; 
			}
	}
}
?>