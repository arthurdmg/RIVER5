<!DOCTYPE html>
<html lang="en">
  <head>

    <link rel="icon" href="favicon.jpg" type="image/x-icon">
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
<meta name="description" content="">

    <meta name="author" content="">
  



    <title>riverrun</title>


    <!-- Bootstrap core CSS -->
    <link href="TEMPLATES/dist/css/bootstrap.min.css" rel="stylesheet">


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

    <link href="TEMPLATES/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="TEMPLATES/jumbotron-narrow-edited.css" rel="stylesheet">


    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]>
<script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js">
</script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>

      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>

      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->
  </head>

  <body>

    <div class="container">
      <div class="header clearfix">

        <nav>
          <ul class="nav nav-pills pull-right">

            <li role="presentation" ><a href="index.php">Home</a></li>

            <li role="presentation" class="active"><a href="upload.html">Upload</a></li>
    
            <li role="presentation"><a href="about.php">About</a></li>

	    <li role="presentation"><a href="index02.php">Servers</a></li>
  

	          </ul>

        </nav>
        <h3 class="text-muted"><RIVERRUN></h3>
      </div>

      <div class="jumbotron">

<span id="logo">U P L O A D</span>
      </div>




<div align="center" class="main">




<form action='uploaded.php' method='POST' enctype='multipart/form-data'>
<input type="file" style="font-size: 20px;" name='file' id='file' onchange="filename()">

</br>
<input type="text" style="font-size: 20px;" maxlength="50" id="filenameTag01" name="filenameTag1" placeholder="title (optional)" onblur="filenameTag()"></br>

</br><i>tags</i></br>



<input type="text" style="font-size: 20px;" id="hashtag01" name="tag1" placeholder="#hashtag" onblur="validAlpha(hashtag='hashtag01', label='label01')" onfocus="valid(label='label01')">

<label id="label01" ></label></br>

<input type="text" style="font-size: 20px;" id="hashtag02" name="tag2" placeholder="#hashtag" onblur="validAlpha(hashtag='hashtag02', label='label02')" onfocus="valid(label='label02')">

<label id="label02" ></label></br>
<input type="text" style="font-size: 20px;" id="hashtag03" name="tag3" placeholder="#hashtag" onblur="validAlpha(hashtag='hashtag03', label='label03')" onfocus="valid(label='label03')">

<label id="label03" ></label></br>
<input type="text" style="font-size: 20px;" id="hashtag04" name="tag4" placeholder="#hashtag" onblur="validAlpha(hashtag='hashtag04', label='label04')" onfocus="valid(label='label04')">

<label id="label04" ></label></br>
<input type="text" style="font-size: 20px;" id="hashtag05" name="tag5" placeholder="#hashtag" onblur="validAlpha(hashtag='hashtag05', label='label05'), filename()" onfocus="valid(label='label05')">

<label id="label05" ></label></br>


<input type="submit" name="button" class="btn btn-lg btn-success" id="button01" disabled>



<script>

function filenameTag(){

var filenameTag = document.getElementById('filenameTag01').value;
filenameTag = filenameTag.toLowerCase();


var i = 17;
var x = 0;

while (i < 40){

res = filenameTag.substr(x, 3);
res = res.trim();

document.getElementById(i).value = res;

i++;
x++;
}

var i = 40;
var x = 0;

while (i < 60){

res = filenameTag.substr(x, 4);
res = res.trim();

document.getElementById(i).value = res;

i++;
x++;
}


var i = 60;
var x = 0;

while (i < 80){

res = filenameTag.substr(x, 5);
res = res.trim();

document.getElementById(i).value = res;

i++;
x++;
}

var i = 80;
var x = 0;

while (i < 100){

res = filenameTag.substr(x, 6);
res = res.trim();

document.getElementById(i).value = res;

i++;
x++;
}

var i = 100;
var x = 0;

while (i < 120){

res = filenameTag.substr(x, 7);
res = res.trim();

document.getElementById(i).value = res;

i++;
x++;
}

var i = 120;
var x = 0;

while (i < 140){

res = filenameTag.substr(x, 8);
res = res.trim();

document.getElementById(i).value = res;

i++;
x++;
}



var i = 140;
var x = 0;

while (i < 160){

res = filenameTag.substr(x, 9);
res = res.trim();

document.getElementById(i).value = res;

i++;
x++;
}



var i = 160;
var x = 0;

while (i < 180){

res = filenameTag.substr(x, 10);
res = res.trim();

document.getElementById(i).value = res;

i++;
x++;
}


var i = 180;
var x = 0;

while (i < 200){

res = filenameTag.substr(x, 11);
res = res.trim();

document.getElementById(i).value = res;

i++;
x++;
}


var i = 200;
var x = 0;

while (i < 220){

res = filenameTag.substr(x, 12);
res = res.trim();

document.getElementById(i).value = res;

i++;
x++;
}


var i = 220;
var x = 0;

while (i < 240){

res = filenameTag.substr(x, 13);
res = res.trim();

document.getElementById(i).value = res;

i++;
x++;
}


var i = 240;
var x = 0;

while (i < 260){

res = filenameTag.substr(x, 14);
res = res.trim();

document.getElementById(i).value = res;

i++;
x++;
}


var i = 260;
var x = 0;

while (i < 280){

res = filenameTag.substr(x, 15);
res = res.trim();

document.getElementById(i).value = res;

i++;
x++;
}


var i = 280;
var x = 0;

while (i < 300){

res = filenameTag.substr(x, 16);
res = res.trim();

document.getElementById(i).value = res;

i++;
x++;
}

var i = 300;
var x = 0;

while (i < 320){

res = filenameTag.substr(x, 17);
res = res.trim();

document.getElementById(i).value = res;

i++;
x++;
}

var i = 320;
var x = 0;

while (i < 340){

res = filenameTag.substr(x, 18);
res = res.trim();

document.getElementById(i).value = res;

i++;
x++;
}

var i = 340;
var x = 0;

while (i < 360){

res = filenameTag.substr(x, 19);
res = res.trim();

document.getElementById(i).value = res;

i++;
x++;
}

var i = 360;
var x = 0;

while (i < 380){

res = filenameTag.substr(x, 20);
res = res.trim();

document.getElementById(i).value = res;

i++;
x++;
}



}

function filename(){


var filepath = document.getElementById('file').value;
file = filepath.substring(12,filepath.length);
document.getElementById('name01').value = file;

var names = document.getElementById('name01').value;

names = names.toLowerCase();

names = names.replace(/[^a-z0-9]/gi,' ');


document.getElementById('hashtag06').value = names.substr(names.length - 3);

var n = names.split(" ");


var loop = 0;

while (loop <= 8){

if (typeof n[loop] === "undefined"){n[loop] = "";}
if (n[loop] == " " || n[loop] == "  " ){n[loop] = "";}

loop++;
}

if (n[8] == "") {
n[8] = document.getElementById('hashtag01').value + " " + document.getElementById('hashtag02').value + " " + document.getElementById('hashtag03').value;
}

if (n[7] == "") {
n[7] = document.getElementById('hashtag02').value + " " + document.getElementById('hashtag03').value + " " + document.getElementById('hashtag04').value;
}

if (n[6] == "") {
n[6] = document.getElementById('hashtag01').value + " " + document.getElementById('hashtag02').value;
}

if (n[5] == "") {
n[5] = document.getElementById('hashtag02').value + " " + document.getElementById('hashtag03').value;
}

if (n[4] == "") {
n[4] = document.getElementById('hashtag03').value + " " + document.getElementById('hashtag04').value;
}

if (n[3] == "") {
n[3] = document.getElementById('hashtag02').value + " " + document.getElementById('hashtag01').value;
}

if (n[2] == "") {
n[2] = document.getElementById('hashtag03').value + " " + document.getElementById('hashtag02').value;
}

if (n[1] == "") {
n[1] = document.getElementById('hashtag04').value + " " + document.getElementById('hashtag03').value;
}

if (n[0] == "") {
n[0] = document.getElementById('hashtag04').value + " " + document.getElementById('hashtag05').value;
}


document.getElementById('hashtag07').value = n[0];
document.getElementById('hashtag08').value = n[1];
document.getElementById('hashtag09').value = n[2];
document.getElementById('hashtag10').value = n[3];
document.getElementById('hashtag11').value = n[4];
document.getElementById('hashtag12').value = n[5];
document.getElementById('hashtag13').value = n[6];
document.getElementById('hashtag14').value = n[7];
document.getElementById('hashtag15').value = n[8];

}



//logo style
var min = 000000;
var max = 999999;
var random = Math.floor(Math.random()*(max-min+1)+min);
var color = "#" + random;
document.getElementById('logo').style.color = color;

function valid(){
document.getElementById(label).innerHTML = 'checking...';
}



function validAlpha(){
// Allow only alphanumeric


var a = document.getElementById(hashtag).value;
a = a.toLowerCase();

var b = a.replace(/[^a-z0-9]/gi,'');

document.getElementById(hashtag).value = b;
document.getElementById(label).innerHTML = "Ok!";
document.getElementById(label).style.color = color;
var blankCheck = document.getElementById(hashtag).value;
if (blankCheck != ""){
document.getElementById('button01').disabled = false;
}else{
// If the user clear the textbox the buttom will be disabled again
document.getElementById('button01').disabled = true;
document.getElementById(label).innerHTML = "";
}

var c = document.getElementById('hashtag01').value;
var d = document.getElementById('hashtag02').value;
var e = document.getElementById('hashtag03').value;
var f = document.getElementById('hashtag04').value;
var g = document.getElementById('hashtag05').value;

// Set x for prevent NaN
var x = 0;
if (a == c){x++;}
if (a == d){x++;}
if (a == e){x++;}
if (a == f){x++;}
if (a == g){x++;}
// Deny repeat of values. But no warning blank fields
if (x > 1 && a != ""){
document.getElementById(label).innerHTML = "Same values";
document.getElementById(label).style.color = '#ff0000';
document.getElementById('button01').disabled = true;
}
//console.log(x);
var name = document.getElementById('name01').value;

if (name == ""){
document.getElementById('button01').disabled = true;
}else{
// Avoid this because can allow same 
//document.getElementById('button01').disabled = false;
}
}

</script>



<div class="suggest">
</br>
Automatic tags generated</br>
<input type="text" id="name01" name="name" placeholder="name">

<input type="text" id="hashtag06" name="tag6">
<input type="text" id="hashtag07" name="tag7">

<input type="text" id="hashtag08" name="tag8">

<input type="text" id="hashtag09" name="tag9">

<input type="text" id="hashtag10" name="tag10">

<input type="text" id="hashtag11" name="tag11">

<input type="text" id="hashtag12" name="tag12">
<input type="text" id="hashtag13" name="tag13">

<input type="text" id="hashtag14" name="tag14">

<input type="text" id="hashtag15" name="tag15">

<input type="text" id="hashtag16" name="tag16">

<input type="text" id="17" name="tag17">
<input type="text" id="18" name="tag18">
<input type="text" id="19" name="tag19">
<input type="text" id="20" name="tag20">
<input type="text" id="21" name="tag21">
<input type="text" id="22" name="tag22">
<input type="text" id="23" name="tag23">
<input type="text" id="24" name="tag24">
<input type="text" id="25" name="tag25">
<input type="text" id="26" name="tag26">
<input type="text" id="27" name="tag27">
<input type="text" id="28" name="tag28">
<input type="text" id="29" name="tag29">
<input type="text" id="30" name="tag30">
<input type="text" id="31" name="tag31">
<input type="text" id="32" name="tag32">
<input type="text" id="33" name="tag33">
<input type="text" id="34" name="tag34">
<input type="text" id="35" name="tag35">
<input type="text" id="36" name="tag36">
<input type="text" id="37" name="tag37">
<input type="text" id="38" name="tag38">
<input type="text" id="39" name="tag39">
<input type="text" id="40" name="tag40">
<input type="text" id="41" name="tag41">
<input type="text" id="42" name="tag42">
<input type="text" id="43" name="tag43">
<input type="text" id="44" name="tag44">
<input type="text" id="45" name="tag45">
<input type="text" id="46" name="tag46">
<input type="text" id="47" name="tag47">
<input type="text" id="48" name="tag48">
<input type="text" id="49" name="tag49">
<input type="text" id="50" name="tag50">
<input type="text" id="51" name="tag51">
<input type="text" id="52" name="tag52">
<input type="text" id="53" name="tag53">
<input type="text" id="54" name="tag54">
<input type="text" id="55" name="tag55">
<input type="text" id="56" name="tag56">
<input type="text" id="57" name="tag57">
<input type="text" id="58" name="tag58">
<input type="text" id="59" name="tag59">
<input type="text" id="60" name="tag60">
<input type="text" id="61" name="tag61">
<input type="text" id="62" name="tag62">
<input type="text" id="63" name="tag63">
<input type="text" id="64" name="tag64">
<input type="text" id="65" name="tag65">
<input type="text" id="66" name="tag66">
<input type="text" id="67" name="tag67">
<input type="text" id="68" name="tag68">
<input type="text" id="69" name="tag69">
<input type="text" id="70" name="tag70">
<input type="text" id="71" name="tag71">
<input type="text" id="72" name="tag72">
<input type="text" id="73" name="tag73">
<input type="text" id="74" name="tag74">
<input type="text" id="75" name="tag75">
<input type="text" id="76" name="tag76">
<input type="text" id="77" name="tag77">
<input type="text" id="78" name="tag78">
<input type="text" id="79" name="tag79">
<input type="text" id="80" name="tag80">
<input type="text" id="81" name="tag81">
<input type="text" id="82" name="tag82">
<input type="text" id="83" name="tag83">
<input type="text" id="84" name="tag84">
<input type="text" id="85" name="tag85">
<input type="text" id="86" name="tag86">
<input type="text" id="87" name="tag87">
<input type="text" id="88" name="tag88">
<input type="text" id="89" name="tag89">
<input type="text" id="90" name="tag90">
<input type="text" id="91" name="tag91">
<input type="text" id="92" name="tag92">
<input type="text" id="93" name="tag93">
<input type="text" id="94" name="tag94">
<input type="text" id="95" name="tag95">
<input type="text" id="96" name="tag96">
<input type="text" id="97" name="tag97">
<input type="text" id="98" name="tag98">
<input type="text" id="99" name="tag99">
<input type="text" id="100" name="tag100">
<input type="text" id="101" name="tag101">
<input type="text" id="102" name="tag102">
<input type="text" id="103" name="tag103">
<input type="text" id="104" name="tag104">
<input type="text" id="105" name="tag105">
<input type="text" id="106" name="tag106">
<input type="text" id="107" name="tag107">
<input type="text" id="108" name="tag108">
<input type="text" id="109" name="tag109">
<input type="text" id="110" name="tag110">
<input type="text" id="111" name="tag111">
<input type="text" id="112" name="tag112">
<input type="text" id="113" name="tag113">
<input type="text" id="114" name="tag114">
<input type="text" id="115" name="tag115">
<input type="text" id="116" name="tag116">
<input type="text" id="117" name="tag117">
<input type="text" id="118" name="tag118">
<input type="text" id="119" name="tag119">
<input type="text" id="120" name="tag120">
<input type="text" id="121" name="tag121">
<input type="text" id="122" name="tag122">
<input type="text" id="123" name="tag123">
<input type="text" id="124" name="tag124">
<input type="text" id="125" name="tag125">
<input type="text" id="126" name="tag126">
<input type="text" id="127" name="tag127">
<input type="text" id="128" name="tag128">
<input type="text" id="129" name="tag129">
<input type="text" id="130" name="tag130">
<input type="text" id="131" name="tag131">
<input type="text" id="132" name="tag132">
<input type="text" id="133" name="tag133">
<input type="text" id="134" name="tag134">
<input type="text" id="135" name="tag135">
<input type="text" id="136" name="tag136">
<input type="text" id="137" name="tag137">
<input type="text" id="138" name="tag138">
<input type="text" id="139" name="tag139">
<input type="text" id="140" name="tag140">
<input type="text" id="141" name="tag141">
<input type="text" id="142" name="tag142">
<input type="text" id="143" name="tag143">
<input type="text" id="144" name="tag144">
<input type="text" id="145" name="tag145">
<input type="text" id="146" name="tag146">
<input type="text" id="147" name="tag147">
<input type="text" id="148" name="tag148">
<input type="text" id="149" name="tag149">
<input type="text" id="150" name="tag150">
<input type="text" id="151" name="tag151">
<input type="text" id="152" name="tag152">
<input type="text" id="153" name="tag153">
<input type="text" id="154" name="tag154">
<input type="text" id="155" name="tag155">
<input type="text" id="156" name="tag156">
<input type="text" id="157" name="tag157">
<input type="text" id="158" name="tag158">
<input type="text" id="159" name="tag159">
<input type="text" id="160" name="tag160">
<input type="text" id="161" name="tag161">
<input type="text" id="162" name="tag162">
<input type="text" id="163" name="tag163">
<input type="text" id="164" name="tag164">
<input type="text" id="165" name="tag165">
<input type="text" id="166" name="tag166">
<input type="text" id="167" name="tag167">
<input type="text" id="168" name="tag168">
<input type="text" id="169" name="tag169">
<input type="text" id="170" name="tag170">
<input type="text" id="171" name="tag171">
<input type="text" id="172" name="tag172">
<input type="text" id="173" name="tag173">
<input type="text" id="174" name="tag174">
<input type="text" id="175" name="tag175">
<input type="text" id="176" name="tag176">
<input type="text" id="177" name="tag177">
<input type="text" id="178" name="tag178">
<input type="text" id="179" name="tag179">
<input type="text" id="180" name="tag180">
<input type="text" id="181" name="tag181">
<input type="text" id="182" name="tag182">
<input type="text" id="183" name="tag183">
<input type="text" id="184" name="tag184">
<input type="text" id="185" name="tag185">
<input type="text" id="186" name="tag186">
<input type="text" id="187" name="tag187">
<input type="text" id="188" name="tag188">
<input type="text" id="189" name="tag189">
<input type="text" id="190" name="tag190">
<input type="text" id="191" name="tag191">
<input type="text" id="192" name="tag192">
<input type="text" id="193" name="tag193">
<input type="text" id="194" name="tag194">
<input type="text" id="195" name="tag195">
<input type="text" id="196" name="tag196">
<input type="text" id="197" name="tag197">
<input type="text" id="198" name="tag198">
<input type="text" id="199" name="tag199">
<input type="text" id="200" name="tag200">
<input type="text" id="201" name="tag201">
<input type="text" id="202" name="tag202">
<input type="text" id="203" name="tag203">
<input type="text" id="204" name="tag204">
<input type="text" id="205" name="tag205">
<input type="text" id="206" name="tag206">
<input type="text" id="207" name="tag207">
<input type="text" id="208" name="tag208">
<input type="text" id="209" name="tag209">
<input type="text" id="210" name="tag210">
<input type="text" id="211" name="tag211">
<input type="text" id="212" name="tag212">
<input type="text" id="213" name="tag213">
<input type="text" id="214" name="tag214">
<input type="text" id="215" name="tag215">
<input type="text" id="216" name="tag216">
<input type="text" id="217" name="tag217">
<input type="text" id="218" name="tag218">
<input type="text" id="219" name="tag219">
<input type="text" id="220" name="tag220">
<input type="text" id="221" name="tag221">
<input type="text" id="222" name="tag222">
<input type="text" id="223" name="tag223">
<input type="text" id="224" name="tag224">
<input type="text" id="225" name="tag225">
<input type="text" id="226" name="tag226">
<input type="text" id="227" name="tag227">
<input type="text" id="228" name="tag228">
<input type="text" id="229" name="tag229">
<input type="text" id="230" name="tag230">
<input type="text" id="231" name="tag231">
<input type="text" id="232" name="tag232">
<input type="text" id="233" name="tag233">
<input type="text" id="234" name="tag234">
<input type="text" id="235" name="tag235">
<input type="text" id="236" name="tag236">
<input type="text" id="237" name="tag237">
<input type="text" id="238" name="tag238">
<input type="text" id="239" name="tag239">
<input type="text" id="240" name="tag240">
<input type="text" id="241" name="tag241">
<input type="text" id="242" name="tag242">
<input type="text" id="243" name="tag243">
<input type="text" id="244" name="tag244">
<input type="text" id="245" name="tag245">
<input type="text" id="246" name="tag246">
<input type="text" id="247" name="tag247">
<input type="text" id="248" name="tag248">
<input type="text" id="249" name="tag249">
<input type="text" id="250" name="tag250">
<input type="text" id="251" name="tag251">
<input type="text" id="252" name="tag252">
<input type="text" id="253" name="tag253">
<input type="text" id="254" name="tag254">
<input type="text" id="255" name="tag255">
<input type="text" id="256" name="tag256">
<input type="text" id="257" name="tag257">
<input type="text" id="258" name="tag258">
<input type="text" id="259" name="tag259">
<input type="text" id="260" name="tag260">
<input type="text" id="261" name="tag261">
<input type="text" id="262" name="tag262">
<input type="text" id="263" name="tag263">
<input type="text" id="264" name="tag264">
<input type="text" id="265" name="tag265">
<input type="text" id="266" name="tag266">
<input type="text" id="267" name="tag267">
<input type="text" id="268" name="tag268">
<input type="text" id="269" name="tag269">
<input type="text" id="270" name="tag270">
<input type="text" id="271" name="tag271">
<input type="text" id="272" name="tag272">
<input type="text" id="273" name="tag273">
<input type="text" id="274" name="tag274">
<input type="text" id="275" name="tag275">
<input type="text" id="276" name="tag276">
<input type="text" id="277" name="tag277">
<input type="text" id="278" name="tag278">
<input type="text" id="279" name="tag279">
<input type="text" id="280" name="tag280">
<input type="text" id="281" name="tag281">
<input type="text" id="282" name="tag282">
<input type="text" id="283" name="tag283">
<input type="text" id="284" name="tag284">
<input type="text" id="285" name="tag285">
<input type="text" id="286" name="tag286">
<input type="text" id="287" name="tag287">
<input type="text" id="288" name="tag288">
<input type="text" id="289" name="tag289">
<input type="text" id="290" name="tag290">
<input type="text" id="291" name="tag291">
<input type="text" id="292" name="tag292">
<input type="text" id="293" name="tag293">
<input type="text" id="294" name="tag294">
<input type="text" id="295" name="tag295">
<input type="text" id="296" name="tag296">
<input type="text" id="297" name="tag297">
<input type="text" id="298" name="tag298">
<input type="text" id="299" name="tag299">
<input type="text" id="300" name="tag300">
<input type="text" id="301" name="tag301">
<input type="text" id="302" name="tag302">
<input type="text" id="303" name="tag303">
<input type="text" id="304" name="tag304">
<input type="text" id="305" name="tag305">
<input type="text" id="306" name="tag306">
<input type="text" id="307" name="tag307">
<input type="text" id="308" name="tag308">
<input type="text" id="309" name="tag309">
<input type="text" id="310" name="tag310">
<input type="text" id="311" name="tag311">
<input type="text" id="312" name="tag312">
<input type="text" id="313" name="tag313">
<input type="text" id="314" name="tag314">
<input type="text" id="315" name="tag315">
<input type="text" id="316" name="tag316">
<input type="text" id="317" name="tag317">
<input type="text" id="318" name="tag318">
<input type="text" id="319" name="tag319">
<input type="text" id="320" name="tag320">
<input type="text" id="321" name="tag321">
<input type="text" id="322" name="tag322">
<input type="text" id="323" name="tag323">
<input type="text" id="324" name="tag324">
<input type="text" id="325" name="tag325">
<input type="text" id="326" name="tag326">
<input type="text" id="327" name="tag327">
<input type="text" id="328" name="tag328">
<input type="text" id="329" name="tag329">
<input type="text" id="330" name="tag330">
<input type="text" id="331" name="tag331">
<input type="text" id="332" name="tag332">
<input type="text" id="333" name="tag333">
<input type="text" id="334" name="tag334">
<input type="text" id="335" name="tag335">
<input type="text" id="336" name="tag336">
<input type="text" id="337" name="tag337">
<input type="text" id="338" name="tag338">
<input type="text" id="339" name="tag339">
<input type="text" id="340" name="tag340">
<input type="text" id="341" name="tag341">
<input type="text" id="342" name="tag342">
<input type="text" id="343" name="tag343">
<input type="text" id="344" name="tag344">
<input type="text" id="345" name="tag345">
<input type="text" id="346" name="tag346">
<input type="text" id="347" name="tag347">
<input type="text" id="348" name="tag348">
<input type="text" id="349" name="tag349">
<input type="text" id="350" name="tag350">
<input type="text" id="351" name="tag351">
<input type="text" id="352" name="tag352">
<input type="text" id="353" name="tag353">
<input type="text" id="354" name="tag354">
<input type="text" id="355" name="tag355">
<input type="text" id="356" name="tag356">
<input type="text" id="357" name="tag357">
<input type="text" id="358" name="tag358">
<input type="text" id="359" name="tag359">
<input type="text" id="360" name="tag360">
<input type="text" id="361" name="tag361">
<input type="text" id="362" name="tag362">
<input type="text" id="363" name="tag363">
<input type="text" id="364" name="tag364">
<input type="text" id="365" name="tag365">
<input type="text" id="366" name="tag366">
<input type="text" id="367" name="tag367">
<input type="text" id="368" name="tag368">
<input type="text" id="369" name="tag369">
<input type="text" id="370" name="tag370">
<input type="text" id="371" name="tag371">
<input type="text" id="372" name="tag372">
<input type="text" id="373" name="tag373">
<input type="text" id="374" name="tag374">
<input type="text" id="375" name="tag375">
<input type="text" id="376" name="tag376">
<input type="text" id="377" name="tag377">
<input type="text" id="378" name="tag378">
<input type="text" id="379" name="tag379">
<input type="text" id="380" name="tag380">

</div>

</form>






 </div>


      <footer class="footer">
        <p>&copy; 2020 - riverrun</p>
 

     </footer>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
