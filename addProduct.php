<?php
session_start();
require_once "functions.php";
if(isset($_POST["pCode"])){
	$pCode=sanitizeString($_POST["pCode"]);
	$pName=sanitizeString($_POST["pName"]);
	$pDes=sanitizeString($_POST["pDes"]);
	$pPrice=sanitizeString($_POST["pPrice"]);

	if ($pCode == "" || $pName == "" || $pDes == "" || $pPrice == ""){
		echo "Some thing wrong!";
		echo "<meta http-equiv=\"refresh\" content=\"1; URL=index.php\">";
		die();
	}
	else
	{
		$result = queryMysql("SELECT * FROM products WHERE ProductCode='$pCode'");

		if ($result->num_rows){
			echo "That Product Code already exists<br><br>";
			echo "<meta http-equiv=\"refresh\" content=\"1; URL=adminManager.php\">";
		}
		else
		{
			queryMysql("INSERT INTO products (ProductCode,ProductName,ProductDes,ProductPrice) VALUES('$pCode', '$pName', '$pDes', '$pPrice')");
			if(isset($_FILES['pImg']['name'])){
				$saveto = "pictures/$pCode.jpg";
				move_uploaded_file($_FILES['pImg']['tmp_name'], $saveto);
				$typeok = TRUE;

				switch($_FILES['pImg']['type'])
			    {
			      case "image/gif":   $src = imagecreatefromgif($saveto); break;
			      case "image/jpeg":  // Both regular and progressive jpegs
			      case "image/pjpeg": $src = imagecreatefromjpeg($saveto); break;
			      case "image/png":   $src = imagecreatefrompng($saveto); break;
			      default:            $typeok = FALSE; break;
			    }

			    if ($typeok)
    { //resize image to $max x $max pixels
      list($w, $h) = getimagesize($saveto);

      $max = 200;
      $tw  = $w;
      $th  = $h;

      if ($w > $h && $max < $w)
      {
        $th = $max / $w * $h;
        $tw = $max;
      }
      elseif ($h > $w && $max < $h)
      {
        $tw = $max / $h * $w;
        $th = $max;
      }
      elseif ($max < $w)
      {
        $tw = $th = $max;
      }

      $tmp = imagecreatetruecolor($tw, $th); //new canvas to hold image of size  $tw and $th
      imagecopyresampled($tmp, $src, 0, 0, 0, 0, $tw, $th, $w, $h); //resize image 
      imageconvolution($tmp, array(array(-1, -1, -1),
        array(-1, 16, -1), array(-1, -1, -1)), 8, 0);
      imagejpeg($tmp, $saveto);
      imagedestroy($tmp);
      imagedestroy($src);
    }
			}

			echo "<h4>Product Added.</h4>";

			echo "<meta http-equiv=\"refresh\" content=\"1; URL=adminManager.php\">";
		}
	}
}
?>