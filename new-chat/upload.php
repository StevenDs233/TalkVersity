<?php

//upload.php

if(!empty($_FILES))
{
	if(is_uploaded_file($_FILES['uploadFile']['tmp_name']))
	{
		$ext = pathinfo($_FILES['uploadFile']['name'], PATHINFO_EXTENSION);
		$allow_ext = array('jpg', 'png', 'doc', 'pdf', 'zip', 'zip');
		if(in_array($ext, $allow_ext))
		{
			$_source_path = $_FILES['uploadFile']['tmp_name'];
			$target_path = 'upload/' . $_FILES['uploadFile']['name'];
			$path=$_FILES['uploadFile']['name'];
			if(move_uploaded_file($_source_path, $target_path))
			{
				echo '<form method="get" action="'.$target_path.'"><button class="btn btn-lg btn-success" type="submit"><p>'.$path.'</p></button></form><br />';
				
			}
			//echo $ext;
		}
	}
}

?>