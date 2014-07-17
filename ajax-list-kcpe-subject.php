<?php
require('Includefiles/conn.inc');
$level = $_POST['level'];
$item = $_POST['item'];
$subject = $_POST['subject'];
//echo $item;
         //Create the chart - Column 3D Chart with data from strXML variable using dataXML method
         $query_National="SELECT  count(`SCHOOL NAME`),(`$subject`*(count(`SCHOOL NAME`)))/ count(`SCHOOL NAME`) as NatVal, `ResultYear` FROM `SchoolResultsCompound` GROUP BY ResultYear";
         $Contents = mysql_query($query_National, $conn) or die(mysql_error());
	
	$strXML = '[';
		while ($row_Contents=mysql_fetch_array($Contents)) {
	 	$strXML .= '{"year": "'. $row_Contents['ResultYear'] .'", "national": '. number_format($row_Contents['NatVal'],0);
		//}
		$mwaka=$row_Contents['ResultYear'];
	//$strXML .= '"},';	
	
	if ($level=="school"){
	//$item1 = str_replace(" " ,"", $item);
	$item = $_POST['item'];
	$item1 =  explode(" - ", $item);
	$item=$item1[1];
	$sch = $item1[0];
	$query_School="SELECT SchoolResultsCompound.$subject  AS SchoolVal, `SchoolResultsCompound`.ResultYear
FROM  `SchoolResultsCompound` 
INNER JOIN DistrictCode ON  `SchoolResultsCompound`.DistCode = DistrictCode.DistrictCode
WHERE DistrictCode.DistrictName =  '$item' AND SchoolResultsCompound.ResultYear = '".$mwaka ."'  AND SchoolResultsCompound.`SCHOOL NAME` = '".$sch ."'";
//echo $query_School; exit;
         $Contents_ = mysql_query($query_School, $conn) or die(mysql_error());

         $totalRows_Contents_ = mysql_num_rows($Contents_);
         $row_Contents_ = mysql_fetch_assoc($Contents_);
         $schoolVal = ($totalRows_Contents_>=1) ? number_format($row_Contents_['SchoolVal'],0) : 0;
		$strXML .= ', "school":'. $schoolVal;
		
	}
	
	if ($level=="district" || $level=="school"){
		if ($level=="district"){
		$item = $_POST['item'];
		}
	$query_Dist="SELECT ( SchoolResultsCompound.$subject * (count(SchoolResultsCompound.`SCHOOL NAME`))) / COUNT( SchoolResultsCompound.`SCHOOL NAME`)  AS DistrictVal, `SchoolResultsCompound`.ResultYear, DistrictCode.County
FROM  `SchoolResultsCompound` 
INNER JOIN DistrictCode ON  `SchoolResultsCompound`.DistCode = DistrictCode.DistrictCode
WHERE DistrictCode.DistrictName =  '$item' AND SchoolResultsCompound.ResultYear = '".$mwaka ."' 
GROUP BY  `SchoolResultsCompound`.ResultYear";
//echo $query_Dist; exit;
         $Contents1 = mysql_query($query_Dist, $conn) or die(mysql_error());

         $totalRows_Contents1 = mysql_num_rows($Contents1);
         $row_Contents1 = mysql_fetch_assoc($Contents1);
//echo $query_Dist;
	$county= $row_Contents1['County'];
		$districtVal = ($totalRows_Contents1>=1) ? number_format($row_Contents1['DistrictVal'],0) : 0;

		$strXML .= ', "district":'. $districtVal ;
	}
	
	
	if ($level=="county"){
	$item = $_POST['item'];
			
		$query_County="SELECT ( SchoolResultsCompound.$subject * (count(SchoolResultsCompound.`SCHOOL NAME`) )) / count(`SCHOOL NAME`) AS CountyVal, `SchoolResultsCompound`.ResultYear
FROM  `SchoolResultsCompound` 
INNER JOIN DistrictCode ON  `SchoolResultsCompound`.DistCode = DistrictCode.DistrictCode
WHERE DistrictCode.County =  '$item' AND SchoolResultsCompound.ResultYear = '".$mwaka ."' 
GROUP BY  `SchoolResultsCompound`.ResultYear";
         $Contents2 = mysql_query($query_County, $conn) or die(mysql_error());

         $totalRows_Contents2 = mysql_num_rows($Contents2);
         $row_Contents2 = mysql_fetch_assoc($Contents2);
//echo $query_County;
	//$strXML .= '{"county": "';
		$countyVal = ($totalRows_Contents2>=1) ? number_format($row_Contents2['CountyVal'],0) : 0;

		
		$strXML .= ', "county":'. $countyVal ;
		}
	$strXML .= '},';
	}
	
	$strXML .= ']';
     //  $strXML = str_replace('name','jna',$strXML);
     //   $strXML = str_replace('in','+i+n',$strXML);
      //  $strXML = str_replace('In','+I+n',$strXML);
      	//$strXML = str_replace(',"','"',$strXML); 
        $strXML = str_replace('},]','}]',$strXML); 
        
echo $strXML;
?>
