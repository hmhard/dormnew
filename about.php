
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>description</title>
<script type="text/javascript">
var slideShowSpeed = 3000;
var crossFadeDuration =15;
var Pic = new Array();
Pic[0] = 'images/5.jpg'

Pic[1] = 'images/images2.jpg'

// do not edit anything below this line
// do not edit anything below this line
var t;
var j = 0;
var p = Pic.length;
var preLoad = new Array();
for (i = 0; i < p; i++) {
preLoad[i] = new Image();
preLoad[i].src = Pic[i];
}
function runSlideShow() {
if (document.all) {
document.images.SlideShow.style.filter="blendTrans(duration=7)";
document.images.SlideShow.style.filter="blendTrans(duration=crossFadeDuration)";
document.images.SlideShow.filters.blendTrans.Apply();
}
document.images.SlideShow.src = preLoad[j].src;
if (document.all) {
document.images.SlideShow.filters.blendTrans.Play();
}
j = j + 1;
if (j > (p - 1)) j = 0;
t = setTimeout('runSlideShow()', slideShowSpeed);
}
window.onload=runSlideShow;
</script>
</head>

<body bgcolor="#FFFFFF">
<p>
<font face="Lucida Calligraphy" color="GREEN" size="4">
<center>WELL COME TO OUR WEB SITE!!</center></font>

<center>                   
<p> <img src="images/5.jpg" name='SlideShow' width="800" height="370"></p>
</center> 

<p style="text-align: justify;"><span style="font-family: Cambria, serif; font-size: 12pt; line-height: 115%;">
 Automated logistics Management System for Oromia (ALMS)office was established in 1998 and involved in the response to the famine caused by drought and civil war
 in oromia until know. It is non-profit, non-governmental development organization.
 logesitic managemnet system for oromia  has mainly engaged major areas of Programs such as Natural Resource Development,
 Water Resource Development, Food Security and Agricultural Development and Cross-cutting issues 
 like Gender and HIV/AIDS are implemented in organization. </span></p>
<p>
<u>Vision:</u> <br>Automated logesitic management system envisions prosperous society in oromia Region.<br></p>
<p>
<u>Mission:</u>
<br> Empowering poor communities and their organizations Logisitic management system to achieve livelihoods 
and environmental security in oromia. Organizational Goal Contributing for the overall efforts 
of ensuring food, Livelihood and environmental security that realizes sustainable development and 
social transformation in oromia. </p>
</body>
</html>
