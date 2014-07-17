<?php
require('Includefiles/conn.inc');
$level = $_POST['level'];
$item=$_POST['item'];
 //echo $level;

         //Create the chart - Column 3D Chart with data from strXML variable using dataXML method
 $query_National="SELECT  count(`SCHOOL NAME`),(((`ENG`+ `MATHS`+ `KIS`+ `SSR`+`SCIENCE`)/5)*(count(`SCHOOL NAME`)))/ (count(`SCHOOL NAME`)) as NatVal, `ResultYear` FROM `SchoolResultsCompound` group by `ResultYear`";
//   echo  $query_National;
 $Contents = mysql_query($query_National, $conn) or die(mysql_error());

$strXML = '[';
while ($row_Contents=mysql_fetch_array($Contents)) {
  $strXML .= '{"year": "'. $row_Contents['ResultYear'] .'", "national": '. number_format($row_Contents['NatVal'],0) ;
		//}
		$mwaka=$row_Contents['ResultYear'] ;
	//$strXML .= '"},';	
	
	if ($level=="school"){

	$item2 = $_POST['item'];
	//$item2 = str_replace(" " ,"", $item2);
	$item =  explode(" - ", $item2);
	$item1 = $item[1];
	//echo $item[1];
	$query_School="SELECT MeanGrade AS SchoolVal FROM `SchoolResultsCompound` 
	INNER JOIN DistrictCode ON  `SchoolResultsCompound`.`DistCode` = DistrictCode.DistrictCode WHERE SchoolResultsCompound.`SCHOOL NAME` = '". $item[0] ."' AND DistrictCode.DistrictName = '". $item[1] ."' AND ResultYear = '".$mwaka ."'";
	//echo $query_School;
	$Content_ = mysql_query($query_School, $conn) or die(mysql_error());
	$totalRows_Contents_ = mysql_num_rows($Content_);
	$row_Content_=mysql_fetch_array($Content_);
	
	$SchVal = ($totalRows_Contents_>=1) ? number_format($row_Content_['SchoolVal'],0) : 0;
	//echo $totalRows_Contents_;
	$strXML .= ', "school":'. $SchVal ;
	
	}
//echo $item1;
	if ($level=="district" || $level=="school"){
		if ($level=="district"){
		$item1 = $_POST['item'];
		}
	$query_Dist="SELECT count(`SCHOOL NAME`),(((`ENG`+ `MATHS`+ `KIS`+ `SSR`+`SCIENCE`)/5)*(count(`SCHOOL NAME`)))/ count(`SCHOOL NAME`) AS DistrictVal, `SchoolResultsCompound`.ResultYear, ucase(DistrictCode.County) as County
FROM  `SchoolResultsCompound` 
INNER JOIN DistrictCode ON  `SchoolResultsCompound`.DistCode = DistrictCode.DistrictCode
WHERE ucase(DistrictCode.DistrictName) = '$item1' AND SchoolResultsCompound.ResultYear = '".$mwaka ."' 
GROUP BY  `SchoolResultsCompound`.ResultYear,DistrictCode.DistrictCode";
         $Contents1 = mysql_query($query_Dist, $conn) or die(mysql_error());
         $totalRows_Contents1 = mysql_num_rows($Contents1);
         $row_Contents1 = mysql_fetch_assoc($Contents1);
//echo $query_Dist;
	$item1= $row_Contents1['County'];
	
		$DistVal = ($totalRows_Contents1>=1) ? number_format($row_Contents1['DistrictVal'],0) : 0;	
		
		$strXML .= ', "district":'. $DistVal ;
	}
	
	if ($level=="county"){
	$item1 = $_POST['item'];
			
	$query_County="SELECT count(`SCHOOL NAME`),(((`ENG`+ `MATHS`+ `KIS`+ `SSR`+`SCIENCE`)/5)*(count(`SCHOOL NAME`)))/ count(`SCHOOL NAME`) AS CountyVal, `SchoolResultsCompound`.ResultYear
FROM  `SchoolResultsCompound` 
INNER JOIN DistrictCode ON  `SchoolResultsCompound`.DistCode = DistrictCode.DistrictCode
WHERE ucase(DistrictCode.County) = '$item1' AND SchoolResultsCompound.ResultYear = '".$mwaka ."' 
GROUP BY  `SchoolResultsCompound`.ResultYear, DistrictCode.County";
//echo $query_County; exit;
         $Contents2 = mysql_query($query_County, $conn) or die(mysql_error());
         $totalRows_Contents2 = mysql_num_rows($Contents2);
         $row_Contents2 = mysql_fetch_assoc($Contents2);
	
		$countyVal = ($totalRows_Contents2>=1) ? number_format($row_Contents2['CountyVal'],0) : 0;	
		
		$strXML .= ', "county":'. $countyVal;
		
	}
		
$strXML .= '},';
} 
	
	$strXML .= ']';
        $strXML = str_replace('},]','}]',$strXML); 
        
echo $strXML;
?>
