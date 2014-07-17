$(window).load(function() {
			$("#kcpe_data_chart").hide();
		   	$("#kcpe_data_MATHS").hide();
		   	$("#kcpe_data_ENG").hide();
		   	$("#kcpe_data_KIS").hide();
		   	$("#kcpe_data_SSR").hide();
		   	$("#kcpe_data_SCIENCE").hide();
		   	$("#list_down").hide();
		});
		
		 function showResult(str){
		     var c = $("#level_rad:checked").val();
		     //alert(c);
		     $("#list_down").fadeOut(6000);
		     
			document.onkeydown = checkKey;
			function checkKey(e) {

			    e = e || window.event;

			    if (e.keyCode == '13') {
				$("#list_down").show();
				return false;
			    }
			   
			}
		     if (str.length >= 3 ){
		     $.ajax({
		      url: 'ajax-list-content.php',
		      type: "POST",
		      data: {tafuta: str, level: c},
		     // async: false,
		      //dataType: "json",
		     // contentType: "application/json",
		      success:function(data){
		       //alert(data);
		   	$("#kcpe_data").empty();
		   	$("#kcpe_data").show();
		   	$("#kcpe_data_global").hide();
		   	$("#kcpe_data_MATHS").hide();
		   	$("#kcpe_data_ENG").hide();
		   	$("#kcpe_data_KIS").hide();
		   	$("#kcpe_data_SSR").hide();
		   	$("#kcpe_data_SCIENCE").hide();
		       //	$("#kcpe_data").append("");
		        $("#kcpe_data").append("<span class='searching'>Searching for <strong>" + str + "</strong></span><br />");
		       //	alert(data);
		       k=data.split('||');
		       //alert(k.length);
		      	for (i = 0; i< k.length; i++) {
		      	var j = "'"+k[i]+"'";
			   $("#kcpe_data").append("<a href='#trends' class=\"skel-panels-ignoreHref\" onclick=\"kcpe_data("+ j +");\">" + k[i] + "</a><br>");
			}
			
		      }
		
		    });
		    }
		 }
		 
    		
		function kcpe_data(str) {
		//$("#kcpe_data").empty();
		var c = $("#level_rad:checked").val();
		//$("#kcpe_data").show();
		var ajax_image = "<img src='./images/loader.gif' alt='Loading...'/"+">";
		$("#kcpe_data").html(ajax_image);
		
			kcpe_data_subject(str, 'MATHS',c);
			kcpe_data_subject(str, 'ENG',c);
			kcpe_data_subject(str, 'KIS',c);
			kcpe_data_subject(str, 'SCIENCE',c);
			kcpe_data_subject(str, 'SSR',c);
			kcpe_data_global(str, c);
		}
		
		
		function kcpe_data_global(str,l) {

		$.ajax({
		      url: 'ajax-list-kcpe.php',
		      type: "POST",
		      data: {item: str, level:l},
		     // async: false,
		      dataType: "json",
		     // contentType: "application/json",
		      success:function(d){
		      $("#kcpe_data_global").show();
		      $("#kcpe_data").hide();

		     	 var d = d;
		     	//  alert(d);
			 $("#kcpe_data_global").dxChart({
			    dataSource: d,
			    commonSeriesSettings: {
				argumentField: "year"
			    },
			    series: [				
				{ valueField: "national", name: "National" },
				{ valueField: "district", name: "District" },
				{ valueField: "county", name: "County" },
				{ valueField: "school", name: str }
			    ],
			    argumentAxis:{
				grid:{
				    visible: true
				}
			    },
			    
			valueAxis: {
			    title: 'Average Grade',
			    axisDivisionFactor: 15,
			    valueMarginsEnabled: true,
			    minValueMargin: 0.04,
			    maxValueMargin: 0.04,
			    visible: true,
			},
			    tooltip:{
				enabled: true
			    },
			    title: str +" OVERALL",
			    legend: {
				verticalAlignment: "bottom",
				horizontalAlignment: "center"
			    },
			    commonPaneSettings: {
				border:{
				    visible: true,
				    right: false
				}     
			    }
			});
		      }
		   });
			  //alert('Load was performed.');
		}
		
		
		function kcpe_data_subject(str, sbj,l) {
//alert(str);
		//var c = $_GET('county');
		//alert(l);
		//var ajax_image = "<img src='./images/loading.gif' alt='Loading...'/"+">";
		//$("#kcpe_data_SSR").html(ajax_image);
		//$("#kcpe_data_MATHS").html(ajax_image);
		//$("#kcpe_data_ENG").html(ajax_image);
		//$("#kcpe_data_SCIENCE").html(ajax_image);
		//$("#kcpe_data_KIS").html(ajax_image);
		
		var subj = {};
		subj["ENG"]="English";
		subj["MATHS"]="Mathematics";
		subj["KIS"]="Kiswahili";
		subj["SSR"]="Social Studies & Religion";
		subj["SCIENCE"]="Science";
		$.ajax({
		      url: 'ajax-list-kcpe-subject.php',
		      type: "POST",
		      data: {item: str, subject: sbj, level: l},
		     // async: false,
		      dataType: "json",
		     // contentType: "application/json",
		      success:function(d){
		     // $("#kcpe_data_"+ sbj).empty();
		      $("#kcpe_data_"+ sbj).show();

		     	 var d = d;
		     	//  alert(d);
			 $("#kcpe_data_"+ sbj).dxChart({
			    dataSource: d,
			    commonSeriesSettings: {
				argumentField: "year"
			    },
			    series: [				
				{ valueField: "national", name: "National" },
				{ valueField: "district", name: "District" },
				{ valueField: "county", name: "County" },
				{ valueField: "school", name: str  }
			    ],
			    argumentAxis:{
				grid:{
				    visible: true
				}
			    },
			    valueAxis: {
			    title: 'Average Grade',
			    axisDivisionFactor: 15,
			    valueMarginsEnabled: true,
			    minValueMargin: 0.04,
			    maxValueMargin: 0.04,
			    visible: true,
			    },
			    tooltip:{
				enabled: true
			    },
			    title: subj[sbj],
			    legend: {
				verticalAlignment: "bottom",
				horizontalAlignment: "center"
			    },
			    commonPaneSettings: {
				border:{
				    visible: true,
				    right: false
				}     
			    }
			});
		      }
		   });
			  //alert('Load was performed.');
		}
