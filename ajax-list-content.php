<?php
require('Includefiles/conn.inc');

$q = str_replace("'","",$_POST['tafuta']);
$col = $_POST['level'];
if ($col=="") {$col='school';}
         //Create the chart - Column 3D Chart with data from strXML variable using dataXML method
         if ($col=='county'){
         $query_="SELECT DISTINCT  trim(DistrictCode.County) as FCont  FROM  `SchoolResultsCompound` 
INNER JOIN DistrictCode ON  `SchoolResultsCompound`.DistCode = DistrictCode.DistrictCode WHERE DistrictCode.County LIKE '$q%' ORDER BY DistrictCode.County LIMIT 10";
	} 
	if ($col=='district'){
         $query_="SELECT DISTINCT  trim(DistrictCode.DistrictName) as FCont  FROM  `SchoolResultsCompound` 
INNER JOIN DistrictCode ON  `SchoolResultsCompound`.DistCode = DistrictCode.DistrictCode WHERE DistrictCode.DistrictName LIKE '$q%' ORDER BY DistrictCode.DistrictName LIMIT 10";
	}
	if ($col=='school'){
	$query_="SELECT DISTINCT  CONCAT(  `SCHOOL NAME` ,  ' - ',  `DistrictName` ) AS FCont, SchoolCode FROM `SchoolResultsCompound` 
INNER JOIN DistrictCode ON  `SchoolResultsCompound`.`DistCode` = DistrictCode.DistrictCode WHERE `SCHOOL NAME` LIKE '$q%' ORDER BY `SCHOOL NAME` LIMIT 10";
	} 
         $Contents = mysql_query($query_, $conn) or die(mysql_error());
	
	$strXML = "||";
	  while ($row_Contents=mysql_fetch_array($Contents)) {
		$strXML .=  trim($row_Contents['FCont']) .'||';
	  }
	  $strXML = str_replace('\t','',$strXML);
	  $strXML = str_replace('\n','',$strXML);  
	 $strXML = ($strXML != '') ? $strXML : 'Sorry no content';
echo $strXML;
?>
