<?php
header("Content-Type:text/plain");
$dir="./booklist";



$response["book"]=array();
$filenames=array();
if($dh=opendir($dir)){
while(($file=readdir($dh))!==false){
$filenames[]=$file;

  

}
closedir($dh);

}
$row=array();
$count = 1;
for($i=0; $i < count($filenames); $i++){

   if($filenames[$i] != '.' && $filenames[$i] != '..'){

       
array_push($response["book"], $filenames["$i"]);


}
}
   
echo json_encode($response);
?>
