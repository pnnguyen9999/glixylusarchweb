<!doctype html>
<!-- (c) PNNGUYEN 2017 - MOCARCH.COM -->
<!-- University of Information Technology - VNU-HCM -->
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
<div class="l1" style="z-index: 2;height: 100%;width: 110px;float: left; position:absolute;opacity: 0;color:#ffffff">
	<div class="tipl tiphome" style="margin-top: 100px">
		<div style="padding: 7px;color: white;"></div>
			<a href="#" style="text-decoration:none" style="width: 120px;padding: 5px;"><span class="fa fa-home" aria-hidden="true">&nbsp;</span>trang chủ</a>
	</div>
	<br>
	<div class="tipl tiphome">
		<div style="padding: 7px;"></div>
			<a href="#" style="text-decoration:none" style="width: 120px;padding: 5px;"><span class="fa fa-map-signs" aria-hidden="true">&nbsp;</span>công trình</a>
	</div>
	<br>
	<div class="tipl tiphome">
		<div style="padding: 7px;"></div>
			<a href="product" style="text-decoration:none" style="width: 120px;padding: 5px;"><span class="fa fa-shopping-cart" aria-hidden="true">&nbsp;</span>sản phẩm</a>
	</div>
	<br>
	<div class="tipl tiphome">
		<div style="padding: 7px;"></div>
			<a href="#" style="text-decoration:none" style="width: 120px;padding: 5px;" onClick="openInf()"><span class="fa fa-info-circle" aria-hidden="true">&nbsp; </span>thông tin</a>
	</div>
	<br>
</div>
<div id="infoPal" style="z-index: 2;right: 0;bottom: 0;width: 300px;height: 350px;background-color: rgba(195,195,195,0.88);color: #000000; position: fixed;display: none;border-top:23px solid #b5b5b5;text-align: center" class="w3-animate-bottom iPal">
<div style="float: right;width: 300px;height: 20px;background-color: #C8C8C8;margin-top: -23px;cursor: pointer" onClick="closePal()">✖</div>
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

	</div>
	<div style="padding-left: 10px;padding-right: 10px">
		<hr style="border-top: 2px solid #808080;">
	</div>
		<div style="letter-spacing: 5px">www.mocarch.com</div>
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
