<?php
$con=mysqli_connect("172.16.0.57","u1046393_turas","Soamin123@","db1046393_dublin");
$result1 = mysqli_query($con,"SELECT * FROM Address2");
while($row = mysqli_fetch_assoc($result1))
{
	$data[] = $row;
	
}
$result2 = mysqli_query($con,"SELECT * FROM Address1");
while($row1 = mysqli_fetch_assoc($result2))
{
	$data1[] = $row1;
	
}
$result2 = mysqli_query($con,"SELECT * FROM files");
while($row2 = mysqli_fetch_assoc($result2))
{
	$data2[] = $row2;
	
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <link href="css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://getbootstrap.com/examples/navbar-fixed-top/navbar-fixed-top.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700|Open+Sans:700' rel='stylesheet' type='text/css'>
	
		
	
		

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="http://getbootstrap.com/assets/js/ie-emulation-modes-warning.js"></script>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
       <style type="text/css">
	
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }


      @media (max-width: 980px) {
        /* Enable use of floated navbar text */
        .navbar-text.pull-right {
          float: none;
          padding-left: 5px;
          padding-right: 5px;
        }
      }
	  p.test {
   
    border: 1px solid #000000;
    word-wrap: break-word;
}
    </style>
    
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
<script type="text/javascript">

var map;
var panorama;
var x = 1;
var sv = new google.maps.StreetViewService();
var longitudes;
var latitudes;
var a;
var b;
var filename1;
	var dr = [];
	var er = [];
	var arr = [];
	var brr = [];
	var drr = [];
	var err = [];
	var frr = [];
	var frr1 = [];
	var frr2 = [];
	var frr3 = [];
	var frr4 = [];
	var frr5 = [];
	var frr6 = [];
	var frr7 = [];
	var frr8 = [];
	var frr9 = [];
	var frr10 = [];
	var frr11 = [];
	var frr12 = [];
	var frr13 = [];
	var frr14 = [];
	var frr15 = [];
	var frr16 = [];
	var frr17 = [];
	var frr18 = [];
	var frr19 = [];
	var frr20 = [];
	var frr21 = [];
	var frr22 = [];
	var frr23 = [];
	var frr24 = [];
	var grr = [];
	var grr1 = [];
	var grr2 = [];
	var grr3 = [];
	var grr4 = [];
	var grr5 = [];
	var grr6 = [];
	var grr7 = [];
	var grr8 = [];
	var grr9 = [];
	var grr10 = [];
	var grr11 = [];
	var grr12 = [];
	var grr13 = [];
	var grr14 = [];
	var grr15 = [];
	var grr16 = [];
	var grr17 = [];
	var grr18 = [];
	var grr19 = [];
	var grr20 = [];
	var grr21 = [];
	var grr22 = [];
	var grr23 = [];
	var grr24 = [];
	
	var lrr = [];
	var mrr = [];
	var nrr = [];
	var orr = [];
	var prr = [];
	var qrr = [];
	var rrr = [];
	var srr = [];
	var trr = [];
	
	var c = [];
	var ema = [];
var dates = [];
var v1 = [];
var v2 = [];
var v3 = [];

		
function initialize() {


 <?php 
foreach($data as $marker)
{
	$lat  = $marker['Latitude']; 
    $lon  = $marker['Longitude']; 
    $ans  = $marker['Answers']; 
	$email =  $marker['aliasname'];
	$date =  $marker['date'];

	
?>

var lat  = <?php echo $lat;?>;
    arr.push(lat);

	  var lon  = <?php echo $lon;?>;
	
     brr.push(lon);
	  var ans  = "<?php echo $ans;?>";
	 
     c.push(ans);
	 var email = "<?php echo $email;?>";
	 ema.push(email);
	 	 var date = "<?php echo $date;?>";
	   dates.push(date);
<?php
}

?>
<?php 
foreach($data2 as $marker2)
{
	$lats  = $marker2['latitude']; 
    $lons  = $marker2['longitude']; 
    $filename  = $marker2['Docname']; 
	$filename1  = $marker2['filename1']; 
	$filename2  = $marker2['filename2'];
	$filename3  = $marker2['filename3'];
	$filename4  = $marker2['filename4'];
	$filename5  = $marker2['filename5'];
	$filename6  = $marker2['filename6'];
	$filename7  = $marker2['filename7'];
	$filename8  = $marker2['filename8'];
	$filename9  = $marker2['filename9'];
	$filename10  = $marker2['filename10'];
	$filename11  = $marker2['filename11'];
	$filename12  = $marker2['filename12'];
	$filename13  = $marker2['filename13'];
	$filename14  = $marker2['filename14'];
	$filename15 = $marker2['filename15'];
	$filename16  = $marker2['filename16'];
	$filename17  = $marker2['filename17'];
	$filename18  = $marker2['filename18'];
	$filename19  = $marker2['filename19'];
	$filename20  = $marker2['filename20'];
	$filename21  = $marker2['filename21'];
	$filename22  = $marker2['filename22'];
	$filename23  = $marker2['filename23'];
	$filename24  = $marker2['filename24'];
?>
var lats  = <?php echo $lats;?>;
dr.push(lats);
var lons  = <?php echo $lons;?>;
er.push(lons);
var filename  = "<?php echo $filename;?>";
frr.push(filename);
var filename1  = "<?php echo $filename1;?>";
frr1.push(filename1);
var filename2  = "<?php echo $filename2;?>";
frr2.push(filename2);
var filename3  = "<?php echo $filename3;?>";
frr3.push(filename3);
var filename4  = "<?php echo $filename4;?>";
frr4.push(filename4);
var filename5  = "<?php echo $filename5;?>";
frr5.push(filename5);
var filename6  = "<?php echo $filename6;?>";
frr6.push(filename6);
var filename7  = "<?php echo $filename7;?>";
frr7.push(filename7);
var filename8  = "<?php echo $filename8;?>";
frr8.push(filename8);
var filename9  = "<?php echo $filename9;?>";
frr9.push(filename9);
var filename10  = "<?php echo $filename10;?>";
frr10.push(filename10);
var filename11  = "<?php echo $filename11;?>";
frr11.push(filename11);
var filename12  = "<?php echo $filename12;?>";
frr12.push(filename12);
var filename13  = "<?php echo $filename13;?>";
frr13.push(filename13);
var filename14  = "<?php echo $filename14;?>";
frr14.push(filename14);
var filename15  = "<?php echo $filename15;?>";
frr15.push(filename15);
var filename16  = "<?php echo $filename16;?>";
frr16.push(filename16);
var filename17  = "<?php echo $filename17;?>";
frr17.push(filename17);
var filename18  = "<?php echo $filename18;?>";
frr18.push(filename18);
var filename19  = "<?php echo $filename19;?>";
frr19.push(filename19);
var filename20  = "<?php echo $filename20;?>";
frr20.push(filename20);
var filename21  = "<?php echo $filename21;?>";
frr21.push(filename21);
var filename22  = "<?php echo $filename22;?>";
frr22.push(filename22);
var filename23  = "<?php echo $filename23;?>";
frr23.push(filename23);
var filename24  = "<?php echo $filename24;?>";
frr24.push(filename24);
<?php
}
?>
<?php 
foreach($data1 as $marker1)
{
	$lats  = $marker1['Latitude']; 
    $lons  = $marker1['Longitude']; 
 
	$filenamepic =  $marker1['filenamepic'];
	$filenamepic1 =  $marker1['filenamepic1'];
	$filenamepic2 =  $marker1['filenamepic2'];
	$filenamepic3 =  $marker1['filenamepic3'];
	$filenamepic4 =  $marker1['filenamepic4'];
	$filenamepic5 =  $marker1['filenamepic5'];
	$filenamepic6 =  $marker1['filenamepic6'];
	$filenamepic7 =  $marker1['filenamepic7'];
	$filenamepic8 =  $marker1['filenamepic8'];
	$filenamepic9 =  $marker1['filenamepic9'];
	$filenamepic10 =  $marker1['filenamepic10'];
	$filenamepic11 =  $marker1['filenamepic11'];
	$filenamepic12 =  $marker1['filenamepic12'];
	$filenamepic13 =  $marker1['filenamepic13'];
	$filenamepic14 =  $marker1['filenamepic14'];
	$filenamepic15 =  $marker1['filenamepic15'];
	$filenamepic16 =  $marker1['filenamepic16'];
	$filenamepic17 =  $marker1['filenamepic17'];
	$filenamepic18 =  $marker1['filenamepic18'];
	$filenamepic19 =  $marker1['filenamepic19'];
	$filenamepic20 =  $marker1['filenamepic20'];
	$filenamepic21 =  $marker1['filenamepic21'];
	$filenamepic22 =  $marker1['filenamepic22'];
	$filenamepic23 =  $marker1['filenamepic23'];
    $filenamepic24 =  $marker1['filenamepic24'];

	$location  = $marker1['Location']; 
    $description  = $marker1['Description']; 
    $ownersip  = $marker1['OwnershipDetails']; 
	$zoning =  $marker1['Zoning'];
	$planninghistory =  $marker1['PlanningHistory'];
	$size =  $marker1['Size'];
	$derelict =  $marker1['Derelict'];
	$heritage =  $marker1['Heritage'];
	$suggesteduses =  $marker1['suggesteduses'];
	$video1 =  $marker1['video1'];
	$video2 =  $marker1['video2'];
	$video3 =  $marker1['video3'];
	
	
?>

var lats  = <?php echo $lats;?>;
drr.push(lats);
var lons  = <?php echo $lons;?>;
err.push(lons);

var filenamepic = "<?php echo $filenamepic;?>";
grr.push(filenamepic);
var filenamepic2 = "<?php echo $filenamepic2;?>";
grr2.push(filenamepic2);
var filenamepic1 = "<?php echo $filenamepic1;?>";
grr1.push(filenamepic1);
var filenamepic3 = "<?php echo $filenamepic3;?>";
grr3.push(filenamepic3);
var filenamepic4 = "<?php echo $filenamepic4;?>";
grr4.push(filenamepic4);
var filenamepic5 = "<?php echo $filenamepic5;?>";
grr5.push(filenamepic5);
var filenamepic6 = "<?php echo $filenamepic6;?>";
grr6.push(filenamepic6);
var filenamepic7 = "<?php echo $filenamepic7;?>";
grr7.push(filenamepic7);
var filenamepic8 = "<?php echo $filenamepic8;?>";
grr8.push(filenamepic8);
var filenamepic9 = "<?php echo $filenamepic9;?>";
grr9.push(filenamepic9);
var filenamepic10 = "<?php echo $filenamepic10;?>";
grr10.push(filenamepic10);
var filenamepic11 = "<?php echo $filenamepic11;?>";
grr11.push(filenamepic11);
 var filenamepic12 = "<?php echo $filenamepic12;?>";
grr12.push(filenamepic12);
 var filenamepic13 = "<?php echo $filenamepic13;?>";
grr13.push(filenamepic13);
var filenamepic14 = "<?php echo $filenamepic14;?>";
grr14.push(filenamepic14);
var filenamepic15 = "<?php echo $filenamepic15;?>";
grr15.push(filenamepic15);
var filenamepic16 = "<?php echo $filenamepic16;?>";
grr16.push(filenamepic16);
var filenamepic17 = "<?php echo $filenamepic17;?>";
grr17.push(filenamepic17);
var filenamepic18 = "<?php echo $filenamepic18;?>";
grr18.push(filenamepic18);
var filenamepic19 = "<?php echo $filenamepic19;?>";
grr19.push(filenamepic19);
var filenamepic20 = "<?php echo $filenamepic20;?>";
grr20.push(filenamepic20);
var filenamepic21 = "<?php echo $filenamepic21;?>";
grr21.push(filenamepic21);
var filenamepic22 = "<?php echo $filenamepic22;?>";
grr22.push(filenamepic22);
var filenamepic23 = "<?php echo $filenamepic23;?>";
grr23.push(filenamepic23);
var filenamepic24 = "<?php echo $filenamepic24;?>";
grr24.push(filenamepic24);
var video1 = "<?php echo $video1;?>";
v1.push(video1);
var video2 = "<?php echo $video2;?>";
v2.push(video2);
var video3 = "<?php echo $video3;?>";
v3.push(video3);



	 var locati = "<?php echo $location;?>";
	 lrr.push(locati);
	 var descrip = "<?php echo $description;?>";
	 mrr.push(descrip);
	 var owners = "<?php echo $ownersip;?>";
	 nrr.push(owners);
	 var zoning = "<?php echo $zoning;?>";
	 orr.push(zoning);
	 var planinghist = "<?php echo $planninghistory;?>";
	 prr.push(planinghist);
	 var size = "<?php echo $size;?>";
	 qrr.push(size);
	 var derelict = "<?php echo $derelict;?>";
	 rrr.push(derelict);
	 var heritage = "<?php echo $heritage;?>";
	 srr.push(heritage);
	 var suggesteduses = "<?php echo $suggesteduses;?>";
	 trr.push(suggesteduses);
<?php
}

?>


a = sessionStorage.getItem("lll");
b = sessionStorage.getItem("llll");

document.getElementById('lat').value = a;
document.getElementById('lon').value = b;
var loc = sessionStorage.getItem("locat");
var desc = sessionStorage.getItem("descrip");

 document.body.scroll = "yes";
 document.getElementById('addres1').value = loc;


var astorPlace = new google.maps.LatLng(a,b);

  // Set up the map
  var mapOptions = {
    center: astorPlace,
    zoom: 18,
    streetViewControl:false,
	scrollwheel: false 
  };

  map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);
	  
  
   panorama = new google.maps.StreetViewPanorama(document.getElementById('map-canv'));
   sv.getPanoramaByLocation(astorPlace, 50, processSVData);
  
}

function comments()
{
var ll =  document.getElementById('lat').value;
var looo = document.getElementById('lon').value;
for (var y = 0; y < drr.length ;y++) {
var la = dr[y];
var lo = er[y];
if (la == ll && lo == looo) {
 
if(frr[y].length!="")

	{   
		document.getElementById("demoos").innerHTML += "<a href=images/" + frr[y] + ">" + frr[y] + "</a>" + '</br>';  
	}
	if(frr1[y].length!="")
	{   
		document.getElementById("demoos").innerHTML += "<a href=images/" + frr1[y] + ">" + frr1[y] + "</a>" + '</br>';  
	}
	if(frr2[y].length!="")
	{   
		document.getElementById("demoos").innerHTML += "<a href=images/" + frr2[y] + ">" + frr2[y] + "</a>" + '</br>';  
	}
	if(frr3[y].length!="")
	{   
		document.getElementById("demoos").innerHTML += "<a href=images/" + frr3[y] + ">" + frr3[y] + "</a>" + '</br>';  
	}
		if(frr4[y].length!="")
	{   
		document.getElementById("demoos").innerHTML += "<a href=images/" + frr4[y] + ">" + frr4[y] + "</a>" + '</br>';  
	}
		if(frr5[y].length!="")
	{   
		document.getElementById("demoos").innerHTML += "<a href=images/" + frr5[y] + ">" + frr5[y] + "</a>" + '</br>';  
	}
		if(frr6[y].length!="")
	{   
		document.getElementById("demoos").innerHTML += "<a href=images/" + frr6[y] + ">" + frr6[y] + "</a>" + '</br>';  
	}
		if(frr7[y].length!="")
	{   
		document.getElementById("demoos").innerHTML += "<a href=images/" + frr7[y] + ">" + frr7[y] + "</a>" + '</br>';  
	}
		if(frr8[y].length!="")
	{   
		document.getElementById("demoos").innerHTML += "<a href=images/" + frr8[y] + ">" + frr8[y] + "</a>" + '</br>';  
	}
		if(frr9[y].length!="")
	{   
		document.getElementById("demoos").innerHTML += "<a href=images/" + frr9[y] + ">" + frr9[y] + "</a>" + '</br>';  
	}
		if(frr10[y].length!="")
	{   
		document.getElementById("demoos").innerHTML += "<a href=images/" + frr10[y] + ">" + frr10[y] + "</a>" + '</br>';  
	}
		if(frr11[y].length!="")
	{   
		document.getElementById("demoos").innerHTML += "<a href=images/" + frr11[y] + ">" + frr11[y] + "</a>" + '</br>';  
	}
		if(frr12[y].length!="")
	{   
		document.getElementById("demoos").innerHTML += "<a href=images/" + frr12[y] + ">" + frr12[y] + "</a>" + '</br>';  
	}
		if(frr13[y].length!="")
	{   
		document.getElementById("demoos").innerHTML += "<a href=images/" + frr13[y] + ">" + frr13[y] + "</a>" + '</br>';  
	}
		if(frr14[y].length!="")
	{   
		document.getElementById("demoos").innerHTML += "<a href=images/" + frr14[y] + ">" + frr14[y] + "</a>" + '</br>';  
	}
		if(frr15[y].length!="")
	{   
		document.getElementById("demoos").innerHTML += "<a href=images/" + frr15[y] + ">" + frr15[y] + "</a>" + '</br>';  
	}
		if(frr16[y].length!="")
	{   
		document.getElementById("demoos").innerHTML += "<a href=images/" + frr16[y] + ">" + frr16[y] + "</a>" + '</br>';  
	}
		if(frr17[y].length!="")
	{   
		document.getElementById("demoos").innerHTML += "<a href=images/" + frr17[y] + ">" + frr17[y] + "</a>" + '</br>';  
	}
		if(frr18[y].length!="")
	{   
		document.getElementById("demoos").innerHTML += "<a href=images/" + frr18[y] + ">" + frr18[y] + "</a>" + '</br>';  
	}
		if(frr19[y].length!="")
	{   
		document.getElementById("demoos").innerHTML += "<a href=images/" + frr19[y] + ">" + frr19[y] + "</a>" + '</br>';  
	}
		if(frr20[y].length!="")
	{   
		document.getElementById("demoos").innerHTML += "<a href=images/" + frr20[y] + ">" + frr20[y] + "</a>" + '</br>';  
	}
		if(frr21[y].length!="")
	{   
		document.getElementById("demoos").innerHTML += "<a href=images/" + frr21[y] + ">" + frr21[y] + "</a>" + '</br>';  
	}
		if(frr22[y].length!="")
	{   
		document.getElementById("demoos").innerHTML += "<a href=images/" + frr22[y] + ">" + frr22[y] + "</a>" + '</br>';  
	}
		if(frr23[y].length!="")
	{   
		document.getElementById("demoos").innerHTML += "<a href=images/" + frr23[y] + ">" + frr23[y] + "</a>" + '</br>';  
	}	
	if(frr24[y].length!="")
	{   
		document.getElementById("demoos").innerHTML += "<a href=images/" + frr24[y] + ">" + frr24[y] + "</a>" + '</br>';  
	}
}
}
for (var y = 0; y < drr.length ;y++) {
var la = drr[y];
var lo = err[y];
		
 if (la == ll && lo == looo) {
  document.getElementById("dem").innerHTML = 'Details about ' + lrr[y] + '</br>'  ;
  if(lrr[y]=="")
	{	document.getElementById("addres1").innerHTML = "null";
	}
	else
	{ 
	document.getElementById("addres1").innerHTML = lrr[y];
	}
	if(nrr[y]=="")
	{	document.getElementById("addres2").innerHTML = "null";
	}
	else
	{ 
	document.getElementById("addres2").innerHTML = nrr[y];
	}
	if(orr[y]=="")
	{	document.getElementById("addres3").innerHTML = "null";
	}
	else
	{ 
	document.getElementById("addres3").innerHTML = orr[y];
	}
	if(prr[y]=="")
	{	document.getElementById("addres4").innerHTML = "null";
	}
	else
	{ 
	document.getElementById("addres4").innerHTML = prr[y];
	}
	if(qrr[y]=="")
	{	document.getElementById("addres5").innerHTML = "null";
	}
	else
	{ 
	document.getElementById("addres5").innerHTML = qrr[y];
	}
	if(trr[y]=="")
	{	document.getElementById("addres9").innerHTML = "null";
	}
	else
	{ 
	document.getElementById("addres9").innerHTML = trr[y];
	}
	if(rrr[y]=="")
	{	document.getElementById("addres7").innerHTML = "null";
	}
	else
	{ 
	document.getElementById("addres7").innerHTML = rrr[y];
	}
	if(mrr[y]=="")
	{	document.getElementById("addres8").innerHTML = "null";
	}
	else
	{ 
	document.getElementById("addres8").innerHTML = mrr[y];
	}
	if(srr[y]=="")
	{	document.getElementById("addres6").innerHTML = "null";
	}
	else
	{ 
	document.getElementById("addres6").innerHTML = srr[y];
	}

	if(grr[y].length!="")
	{
	document.getElementById("demos").innerHTML +=  "<a href=images/" + grr[y] + ">" + grr[y] + "</a>" + '</br>';  
	}
	if(grr1[y].length!="")
	{
	document.getElementById("demos").innerHTML +=  "<a href=images/" + grr1[y] + ">" + grr1[y] + "</a>" + '</br>';  
	}

	
	if(grr2[y].length!="")
	{   
		document.getElementById("demos").innerHTML += "<a href=images/" + grr2[y] + ">" + grr2[y] + "</a>" + '</br>';  
	}
	
   if(grr3[y].length!="")
	{   
		document.getElementById("demos").innerHTML += "<a href=images/" + grr3[y] + ">" + grr3[y] + "</a>" + '</br>';  
	}
	if(grr4[y].length!="")
	{   
		document.getElementById("demos").innerHTML += "<a href=images/" + grr4[y] + ">" + grr4[y] + "</a>" + '</br>';  
	}
	if(grr5[y].length!="")
	{   
		document.getElementById("demos").innerHTML += "<a href=images/" + grr5[y] + ">" + grr5[y] + "</a>" + '</br>';  
	}
	if(grr6[y].length!="")
	{   
		document.getElementById("demos").innerHTML += "<a href=images/" + grr6[y] + ">" + grr6[y] + "</a>" + '</br>';  
	}
	if(grr7[y].length!="")
	{   
		document.getElementById("demos").innerHTML += "<a href=images/" + grr7[y] + ">" + grr7[y] + "</a>" + '</br>';  
	}
	if(grr8[y].length!="")
	{   
		document.getElementById("demos").innerHTML += "<a href=images/" + grr8[y] + ">" + grr8[y] + "</a>" + '</br>';  
	}
	if(grr9[y].length!="")
	{   
		document.getElementById("demos").innerHTML += "<a href=images/" + grr9[y] + ">" + grr9[y] + "</a>" + '</br>';  
	}
	if(grr10[y].length!="")
	{   
		document.getElementById("demos").innerHTML += "<a href=images/" + grr10[y] + ">" + grr10[y] + "</a>" + '</br>';  
	}
	if(grr11[y].length!="")
	{   
		document.getElementById("demos").innerHTML += "<a href=images/" + grr11[y] + ">" + grr11[y] + "</a>" + '</br>';  
	}
	if(grr12[y].length!="")
	{   
		document.getElementById("demos").innerHTML += "<a href=images/" + grr12[y] + ">" + grr12[y] + "</a>" + '</br>';  
	}
	if(grr13[y].length!="")
	{   
		document.getElementById("demos").innerHTML += "<a href=images/" + grr13[y] + ">" + grr13[y] + "</a>" + '</br>';  
	}
	if(grr14[y].length!="")
	{   
		document.getElementById("demos").innerHTML += "<a href=images/" + grr14[y] + ">" + grr14[y] + "</a>" + '</br>';  
	}
	if(grr15[y].length!="")
	{   
		document.getElementById("demos").innerHTML += "<a href=images/" + grr15[y] + ">" + grr15[y] + "</a>" + '</br>';  
	}
	if(grr16[y].length!="")
	{   
		document.getElementById("demos").innerHTML += "<a href=images/" + grr16[y] + ">" + grr16[y] + "</a>" + '</br>';  
	}
	if(grr17[y].length!="")
	{   
		document.getElementById("demos").innerHTML += "<a href=images/" + grr17[y] + ">" + grr17[y] + "</a>" + '</br>';  
	}
	if(grr18[y].length!="")
	{   
		document.getElementById("demos").innerHTML += "<a href=images/" + grr18[y] + ">" + grr18[y] + "</a>" + '</br>';  
	}
	if(grr19[y].length!="")
	{   
		document.getElementById("demos").innerHTML += "<a href=images/" + grr19[y] + ">" + grr19[y] + "</a>" + '</br>';  
	}
	if(grr20[y].length!="")
	{   
		document.getElementById("demos").innerHTML += "<a href=images/" + grr20[y] + ">" + grr20[y] + "</a>" + '</br>';  
	}
	if(grr21[y].length!="")
	{   
		document.getElementById("demos").innerHTML += "<a href=images/" + grr21[y] + ">" + grr21[y] + "</a>" + '</br>';  
	}
	if(grr22[y].length!="")
	{   
		document.getElementById("demos").innerHTML += "<a href=images/" + grr22[y] + ">" + grr22[y] + "</a>" + '</br>';  
	}
	if(grr23[y].length!="")
	{   
		document.getElementById("demos").innerHTML += "<a href=images/" + grr23[y] + ">" + grr23[y] + "</a>" + '</br>';  
	}
	if(grr24[y].length!="")
	{   
		document.getElementById("demos").innerHTML += "<a href=images/" + grr24[y] + ">" + grr24[y] + "</a>" + '</br>';  
	}
	
	if(v1[y].length!="")
	{   
		document.getElementById("demooos").innerHTML += "<a href=images/" + v1[y] + ">" + v1[y] + "</a>" + '</br>';  
	}
	if(v2[y].length!="")
	{   
		document.getElementById("demooos").innerHTML += "<a href=images/" + v2[y] + ">" + v2[y] + "</a>" + '</br>';  
	}
	if(v3[y].length!="")
	{   
		document.getElementById("demooos").innerHTML += "<a href=images/" + v3[y] + ">" + v3[y] + "</a>" + '</br>';  
	}
	
	
	//document.getElementById("demoos").attributes.href = 'images/' + docfile;

  }
}

for (var i = 0; i < arr.length ;i++) {
var e = arr[i];
var g = brr[i];

  if (e == ll && g == looo) {



	document.getElementById("demo").innerHTML += c[i] + '</br>' + ' ' + 'Posted By : ' + ema[i] +  '  ' +  '  ' + '   Posted On :'  + ' ' + dates[i] + '</br>' + '</br>' ;


  }
}

}


function processSVData(data, status) {
  if (status == google.maps.StreetViewStatus.OK) {
    var marker = new google.maps.Marker({
      position: data.location.latLng,
      map: map,
      title: data.location.description
    });

    panorama.setPano(data.location.pano);
    panorama.setPov({
      heading: 270,
      pitch: 0
    });
    panorama.setVisible(true);

    google.maps.event.addListener(map, 'onload', function() {

      var markerPanoID = data.location.pano;
      // Set the Pano to use the passed panoID
      panorama.setPano(markerPanoID);
      panorama.setPov({
        heading: 270,
        pitch: 0
      });
      panorama.setVisible(true);
    });
  } else {
	
    alert('Street View data not found for this location.');
  }
}

  // Setup the markers on the map
  
  // We get the map's default panorama and set up some defaults.
  // Note that we don't yet set it visible.

function myFunc()
	{
		window.open("http://factest.ie/timber/emailphp.php","Ratting","width=1024,height=600,0,status=0,");
		
	}
   
   function cll()
	{
		this.close();
		
	}
   


google.maps.event.addDomListener(window, 'load',initialize);

    </script>

  <body onload="comments()">




<form id="myForm" method="post" action="ViewData.php" enctype="multipart/form-data" autocomplete="off">
    <!-- Fixed navbar -->
    <div style="background-color:#00afc9;">
    <nav class="navbar navbar-default navbar-fixed-top" style="background-color:#00afc9;border:none;width:100%;">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
           <a href="index.php"> <img src="reusing-drraft-13.04-04.png"  style="margin-top:7%;height:20%;width:20%;border-top:hidden;" /></a>
        </div>
        </div>
        <div class="container">
        <div id="navbar" class="navbar-collapse collapse" style="float:right;margin-top:-4%;">
          <ul class="nav navbar-nav">
            <li><a onClick="cll();" style="color:#000;font-family:'Source Sans Pro', sans-serif;font-size:19px;">HOME</a></li>
            <li><a href="#works" style="color:#FFF;font-family:'Source Sans Pro', sans-serif;font-size:19px;">LEARN MORE ABOUT THE SITE</a></li>
            <li><a href="http://www.facebook.com" target="_blank"><img style="float:!important;" href="www.facebook.com" src="facebook.png"></img></a></li>
               <li><a href="http://www.twitter.com" target="_blank"><img style="float:!important" href="www.twitter.com"  src="twitter.png"></img></a></li>
           
       
          </ul>
        
        </div><!--/.nav-collapse -->
        </div>
      </div>
    </nav>
   </div> 
    
	

	
       	
   <div class="container-fluid"  style="height:100%;width:100%;margin-top:-10px;" id="works" >
            
      <div class="row-fluid">
        <div  class="span3">
		 <ul  class="nav nav-list">		
      <input type="hidden" name="lat1" ID="lat" value ="default" size="40"><br><br/><br/>
      <input type="hidden" name="lon1" ID="lon" value ="default" size="40"><br><br/><br/>
         <div style="width:100%;margin-right:80px;border:none;background-color:#FFF;padding:0px;" class="well sidebar-nav">
            
           
             
            
            <div id="map-canv"   style="height:300px;width:100%;float:left;" ></div> 
            
   <div id="map-canvas"  style="height:150px;width:150px;float:left;margin-top:-130px;margin-left:50px;" >   </div>
            </div>
             <font style="color:#000;font-family:'Source Sans Pro', sans-serif;font-size:40px;font-weight:bold;margin-top:10px;height:20px;width:100%;" align="center"  id="dem"></font> <br/>
      
            <br/>
             
  
          <div style="width:100%;margin-right:80px;border:none;background-color:#FFF;padding:0px;background-color:transparent;border:none;" class="well sidebar-nav">
    
             <br/>
             <br/>
       
      <font style="color:#036A78;font-family:'Source Sans Pro', sans-serif;font-size:40px;margin-top:-5px;font-weight:bold;"><b>DISCOVER</b></font>
       
      <div class="lot-detail-information" style="float:left;margin-top:-8px;background-color:#FFF;" >
    <div class="lot-detail-main-section">
    <div class="lot-detail-information-item">
      
        <h4 style="color:#036A78;font-family:'Source Sans Pro', sans-serif;font-size:28px;font-weight:bold;"><b>INFORMATION ABOUT THE LOT</b></h4>
                <div class="lot-detail-information-item-label" style="color:#036A78;font-family:'Source Sans Pro', sans-serif;font-size:28px;font-weight:semibold;">
                   Address:
                </div>
                <div class="lot-detail-information-item-value" style="color:#036A78;font-family:'Source Sans Pro', sans-serif;font-size:28px;font-weight:regular;">
            <p class="test" name="comment" style="color:#000;font-family:'Source Sans Pro', sans-serif;font-size:28px;font-weight:regular;border:none;" id ="addres1"></p>       
                </div>
                <br/> <br/>
            </div>
             <div class="lot-detail-information-item">
                <div class="lot-detail-information-item-label" style="color:#036A78;font-family:'Source Sans Pro', sans-serif;font-size:28px;font-weight:bold;">
                    Ownership Details:
                </div>
                <div class="lot-detail-information-item-value">
                    <p class="test" name="comment1"  style="color:#000;font-family:'Source Sans Pro', sans-serif;font-size:28px;font-weight:regular;border:none;" id ="addres2"></p> 
  
                </div>
                <br/>  <br/>
            </div>
              <div class="lot-detail-information-item">
                <div class="lot-detail-information-item-label" style="color:#036A78;font-family:'Source Sans Pro', sans-serif;font-size:28px;font-weight:bold;">
                   Zoning:
                </div>
                <div class="lot-detail-information-item-value">
                 <p class="test" name="comment2"  style="color:#000;font-family:'Source Sans Pro', sans-serif;font-size:28px;font-weight:regular;border:none;" id ="addres3"></p>  
  
                </div>
                 <br/> <br/>
            </div>
             <div class="lot-detail-information-item">
                <div class="lot-detail-information-item-label" style="color:#036A78;font-family:'Source Sans Pro', sans-serif;font-size:28px;font-weight:bold;border:none;">
                   Planning History:
                           
                </div>
                <div class="lot-detail-information-item-value">
                 <p class="test" name="comment3" style="color:#000;font-family:'Source Sans Pro', sans-serif;font-size:28px;font-weight:regular;border:none;" id ="addres4"></p>  
  
                </div>
                 <br/> <br/>
            </div>
            
                  <div class="lot-detail-information-item">
                <div class="lot-detail-information-item-label" style="color:#036A78;font-family:'Source Sans Pro', sans-serif;font-size:28px;font-weight:bold;border:none;">
                  Size / Area (Sqm):
                </div>
                <div class="lot-detail-information-item-value" style="border:none;">
                <p class="test" name="comment4" style="color:#000;font-family:'Source Sans Pro', sans-serif;font-size:28px;font-weight:regular;border:none;" id ="addres5"></p> 
                </div>
                 <br/> <br/>
            </div>
            <div class="lot-detail-information-item">
                <div class="lot-detail-information-item-label" style="color:#036A78;font-family:'Source Sans Pro', sans-serif;font-size:28px;font-weight:bold;border:none;">
               Heritage Designation:
                </div>
                <div class="lot-detail-information-item-value" style="color:#036A78;font-family:'Source Sans Pro', sans-serif;font-size:28px;">
                <p class="test" name="comment5" style="color:#000;font-family:'Source Sans Pro', sans-serif;font-size:28px;font-weight:regular;border:none;" id ="addres6"></p> 
                </div>
                 <br/> <br/>
            </div>
              <div class="lot-detail-information-item">
                <div class="lot-detail-information-item-label" style="color:#036A78;font-family:'Source Sans Pro', sans-serif;font-size:28px;font-weight:bold;border:none;" >
               Is the site officially derelict?:
                </div>
                <div class="lot-detail-information-item-value" style="color:#000;font-family:'Source Sans Pro', sans-serif;font-size:28px;">
                <p class="test" name="comment6" style="color:#000;font-family:'Source Sans Pro', sans-serif;font-size:28px;font-weight:regular;border:none;" id ="addres7"></p>  
                </div>
                 <br/> <br/>
            </div>
               <div class="lot-detail-information-item">
                <div class="lot-detail-information-item-label" style="color:#036A78;font-family:'Source Sans Pro', sans-serif;font-size:28px;font-weight:bold;">
               Description:
                </div>
                <div class="lot-detail-information-item-value">
                 <p class="test" name="comment7" style="color:#000;font-family:'Source Sans Pro', sans-serif;font-size:28px;font-weight:regular;border:none;" id ="addres8"></p>
                </div>
                 <br/> <br/>
            </div>
              <div class="lot-detail-information-item">
                <div class="lot-detail-information-item-label" style="color:#036A78;font-family:'Source Sans Pro', sans-serif;font-size:28px;font-weight:bold;">
              Suggested Uses:
                </div>
                <div class="lot-detail-information-item-value">
                    <p class="test" name="comment8" style="color:#000;font-family:'Source Sans Pro', sans-serif;font-size:28px;font-weight:regular;border:none;" id ="addres9"></p>
                </div>
                 <br/> <br/>
            </div>
             <div class="lot-detail-information-item">
                <div class="lot-detail-information-item-label" style="color:#036A78;font-family:'Source Sans Pro', sans-serif;font-size:28px;font-weight:bold;">
             Why has this area been highlighted
                </div>
                <div class="lot-detail-information-item-value" style="color:#000;font-family:'Source Sans Pro', sans-serif;font-size:28px;font-weight:regular;border:none;">
                   This space has been created to share and connect information about this building/area which has been highlighted as vacant / under utilised.
                   
                 </div>
                  <br/> <br/>
            </div>
                 </div>
                 
      <input type="hidden" name="lat1" ID="lat" value ="default" size="40"><br><br/><br/>
      <input type="hidden" name="lon1" ID="lon" value ="default" size="40"><br><br/><br/>
                             </div>
                             </ul>
                 </div>
       	  
       	  
       	  
            
   
   </div>
   </div>
      <!-- Main component for a primary marketing message or call to action -->
      <div class="container" style="width:100%;height:100%;background-color:#FFF;border:none;">

      <!-- Main component for a primary marketing message or call to action -->
      
    <div style="float:left;width:100%;background-color:#FFF;border:none;height:100%;" class="well sidebar-nav"> 
 <div style="float:left;margin-left:1%;height:60%;background-color:#9dd7e3;width:48%;">
  
     <font  align="center" style="color:#000;font-family:'Source Sans Pro', sans-serif;font-size:3vw;font-weight:bold;margin-left:10px;">Connect</font>
     
  
                
        <br/>
        <br/><br/>
         
    <font style="color:#000;font-family:'Source Sans Pro', sans-serif;font-size:3vw;font-weight:bold;margin-left:10px;" align="center">Have we made a mistake</font>
    
          
     <p style="margin-left:5px;"><a href="emailphp.php" style="color:#FFF;color:#FFF;font-family:'Source Sans Pro', sans-serif;font-size:3vw;font-weight:bold;margin-top:10px;"  class="btn btn-primary btn-large">LET US KNOW &raquo;</a></p>
        </br>
        <br/><br/>
         
     <font style="color:#000;font-family:'Source Sans Pro', sans-serif;font-size:3vw;font-weight:bold;margin-top:10px;"  align="center"><b>Further info</b></font>
       
   
          
      <p style="margin-left:5px;"><a href="emailphp.php" style="color:#FFF;font-family:'Source Sans Pro', sans-serif;font-size:3vw;font-weight:bold;margin-top:10px;" class="btn btn-primary btn-large">TELL US MORE &raquo;</a></p>
       </br>
       <br/>  <br/>
         
        
        <font style="color:#000;font-family:'Source Sans Pro', sans-serif;font-size:3vw;font-weight:bold;margin-top:10px;margin-left:10px;"><b>Connect</b></font> 
      
      
       <p style="margin-left:5px;"><a href="Connect.php" style="color:#FFF;font-family:'Source Sans Pro', sans-serif;font-size:3vw;font-weight:bold;margin-top:10px;" class="btn btn-primary btn-large">CONNECT &raquo;</a></p>
    
        </br> <br/>   
          
             </br>    
       
      
    </div>

    
                 <div style="float:right;background-color:#cadd70;height:50%;width:48%;"  >
         
          <font  align="center" style="color:#000;font-family:'Source Sans Pro', sans-serif;font-size:3vw;font-weight:bold;margin-left:10px;">Share</font>
     
  
                
        <br/>
          <font style="color:#000;font-family:'Source Sans Pro', sans-serif;font-size:3vw;font-weight:bold;margin-left:10px;" align="center">Share</font>
    
          
     <p style="margin-left:5px;"><a href="share.php" style="color:#FFF;color:#FFF;font-family:'Source Sans Pro', sans-serif;font-size:3vw;font-weight:bold;margin-top:10px;"  class="btn btn-primary btn-large">SHARE &raquo;</a></p>
        </br>
  
         
    <font style="color:#000;font-family:'Source Sans Pro', sans-serif;font-size:3vw;font-weight:bold;margin-left:10px;" align="center">Upload your files</font>
    
          
     <p style="margin-left:5px;"><a href="InsertDoc.php" style="color:#FFF;color:#FFF;font-family:'Source Sans Pro', sans-serif;font-size:3vw;font-weight:bold;margin-top:10px;"  class="btn btn-primary btn-large">ADD A FILE &raquo;</a></p>
       <p style="font-family:'Source Sans Pro', sans-serif;font-size:3vw;" id="demoos"><b></b></p> 
        </br>
         
     <font style="color:#000;font-family:'Source Sans Pro', sans-serif;font-size:3vw;font-weight:bold;margin-top:10px;"  align="center"><b>Upload your videos</b></font>
       
   
          
      <p style="margin-left:5px;"><a href="InsertVideos.php" style="color:#FFF;font-family:'Source Sans Pro', sans-serif;font-size:3vw;font-weight:bold;margin-top:10px;" class="btn btn-primary btn-large">ADD A VIDEO &raquo;</a></p>
        <p style="font-family:'Source Sans Pro', sans-serif;font-size:3vw;" id="demooos"><b></b></p>
       </br>  
         
        
        <font style="color:#000;font-family:'Source Sans Pro', sans-serif;font-size:3vw;font-weight:bold;margin-top:10px;margin-left:10px;">Upload your photos</font> 
      
      
       <p style="margin-left:5px;"><a href="InsertPhotographs.php" style="color:#FFF;font-family:'Source Sans Pro', sans-serif;font-size:3vw;font-weight:bold;margin-top:10px;" class="btn btn-primary btn-large">ADD A PHOTO &raquo;</a></p>
          <p style="font-family:Arial, Helvetica, sans-serif;font-family:'Source Sans Pro', sans-serif;font-size:3vw;" id="demos"><b></b></p>
    
        </br> 
           
          
             </br>    
       
            
                 
        
      </div>

 


    </div> <!-- /container -->
       <div class="well sidebar nav" style="float:right;margin-right:50%;width:100%;background-color:#FFF;border:none;">
           <h4 style="margin-top:0px"><b>BLOGS</b></h4>
            <p style="font-family:Arial, Helvetica, sans-serif;font-size:16px;color:#009;" id="demo"><b></b></p>
            </div>
           </div> 

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
