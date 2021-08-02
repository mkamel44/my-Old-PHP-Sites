<?php
if(is_array($_FILES)) 
{
	if(is_uploaded_file($_FILES['userImage']['tmp_name'])) 
	{
		$sourcePath = $_FILES['userImage']['tmp_name'];
					
		$targetPath = "../../upload/theses_".rand(0,1000000).".pdf";
		
			if(move_uploaded_file($sourcePath,$targetPath)) 
			{
					echo $targetPath; 
			}
	}
}
?>