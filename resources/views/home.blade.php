<!doctype html>
<!-- (c) PNNGUYEN 2017 - MOCARCH.COM -->
<!-- University of Information Technology - VNU-HCM -->
<!-- Glixylus Team 2018 -->
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<title>M O C</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="css/style.css">
</head>
<style>

</style>
<body style="font-family: font2;">


<div class="" style="width: 100%;height:100%; ">
<div class="l1" style="z-index: 2;height: 100%;width: 110px;float: left; position:absolute;color:#ffffff">
	<div class="tipl tiphome" style="margin-top: 100px">
		<div style="padding: 7px;color: white;"></div>
			<a href="/galleryKT" style="text-decoration:none" style="width: 120px;padding: 5px;"><span class="fa fa-home" aria-hidden="true">&nbsp;</span>Thiết kế</a>
	</div>
	<br>
	<div class="tipl tiphome">
		<div style="padding: 7px;"></div>
			<a href="#" style="text-decoration:none" style="width: 120px;padding: 5px;"><span class="fa fa-map-signs" aria-hidden="true">&nbsp;</span>Thi công</a>
	</div>
	<br>
	<div class="tipl tiphome">
		<div style="padding: 7px;"></div>
			<a href="" style="text-decoration:none" style="width: 120px;padding: 5px;"><span class="fa fa-shopping-cart" aria-hidden="true">&nbsp;</span>Nội thất</a>
	</div>
	<br>
	<div class="tipl tiphome">
		<div style="padding: 7px;"></div>
			<a href="#" style="text-decoration:none" style="width: 120px;padding: 5px;"><span class="fa fa-info-circle" aria-hidden="true">&nbsp; </span>Cảnh quan</a>
	</div>
	<br>
	<div class="tipl tiphome">
		<div style="padding: 7px;"></div>
			<a href="#" style="text-decoration:none" style="width: 120px;padding: 5px;"><span class="fa fa-info-circle" aria-hidden="true">&nbsp; </span>Nhà gỗ</a>
	</div>
	<br>
</div>

<div id="bottom" style="float:left;z-index: 2;right: 0;bottom: 0;height: 280px;color: #000000; position: fixed;display: block;text-align: center" class="w3-animate-bottom col-lg-12 col-md-12 col-sm-12">
	<div class="col-lg-9 col-sm-8" style="height: 100%;padding: 8px">
		<div class="col-lg-12" style="height: 90px;text-align: right">
			<h1 style="background-color: rgba(200,200,200,0.75);color: black;display: inline;font-family: font1;padding: 5px"><b>Image 1 - Article 1</b></h1>
			<br>
			<div style="padding: 8px"></div>
			<div style="background-color: rgba(220,220,220,0.75);padding:2px;height: 100px;display: inline;color:black;font-size: 15pt;font-family: font3">
				Hình ảnh 1, nội dung hình ảnh 1, mô tả hình ảnh 1
			</div>
		</div><br>
		<div class="col-lg-12" style="height: 2100px;bottom: 0;">
			<div style="padding:10px"></div>
			<div style="background-color: rgba(30,30,30,0.3);height: 80%;border-top-left-radius: 25px;border-bottom-left-radius: 25px;">
				<div style="width: 95%;height: 100%;padding:50px">
					<marquee behavior="" scrollamount="10" onmouseover="this.stop()" onmouseout="this.start()" >
						<img class="w3-card-4" src="img/1.png" height="70px" style="vertical-align: middle;margin-right: 60px">
						<img class="w3-card-4" src="img/2.png" height="70px" style="vertical-align: middle;margin-right: 80px">
						<img class="w3-card-4" src="img/3.png" height="70px" style="vertical-align: middle;margin-right: 80px">
						<img class="w3-card-4" src="img/4.png" height="70px" style="vertical-align: middle;margin-right: 80px">
						<img class="w3-card-4" src="img/5.png" height="70px" style="vertical-align: middle;margin-right: 80px">
						<img class="w3-card-4" src="img/6.png" height="70px" style="vertical-align: middle;margin-right: 80px">
					</marquee>
				</div>
			</div>
		</div>
		
	</div>
	<div class="col-lg-3 col-sm-4" style="background-color: rgba(30,30,30,0.75);height: 100%;color: #ffffff">
		<h6>công ty TNHH Thiết kế kiến trúc</h6>
		<div style="padding: 1px"></div>
		<h3 style="letter-spacing: 5px"><kbd>MOC</kbd></h3>
		<div style="padding-left: 10px;padding-right: 10px">
			<hr style="border-top: 2px solid #808080;">
		</div>
		<div style="padding-left: 10px;padding-right: 10px">
			<span class="fa fa-address-card" aria-hidden="true">&nbsp; </span>&nbsp;Địa chỉ: Nhà 9 Đường 7, Phường An Phú, Quận 2 - TP Hồ Chí Minh</br>
			-<br>
			<a href="tel:+84967387439" target="_top"><span class="fa fa-phone" aria-hidden="true">&nbsp; </span>&nbsp;0967.387.439</a></br>
			<a href="mailto:info@mocarch.com" target="_top"><span class="fa fa-envelope-open" aria-hidden="true">&nbsp; </span>&nbsp;info@mocarch.com</a></br>
			-<br>
			<div style="letter-spacing: 5px">www.mocarch.com</div>
		</div>	
	</div>
</div>

<div>
	@foreach($data as $value)
	<table>
		<tr>
			<a href="/art/{{ $value->imgurl }}"><img class="myS w3-animate-right col-sm-12" src="img/{{ $value->imgurl }}" style="z-index: -1;padding: 0px;"></a>
		</tr>
	</table>
	@endforeach
</div>

<div class="l2" style="z-index: 1;background-color:#111111;height: 100%;width: 220px;float: right; position:absolute;display: none "></div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("myS");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 5000);

}
	function openInf() {
		var z = document.getElementById("infoPal");
		z.style.display = "block";
	}
	function closePal(){
		var z = document.getElementById("infoPal");
		z.style.display = "none";
	}
</script>
</body>
