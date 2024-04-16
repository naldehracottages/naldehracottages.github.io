<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Jacaranda Estate &amp; Whispering willows</title>
<?php
$current_year = date('Y');
 ?>

<style>
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	text-align: center;
}
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 24px;
	color: #A91C00;
	font-weight: bold;
	text-align: center;
}
.style2 {font-size: 24px; color: #A91C00; font-family: Arial, Helvetica, sans-serif;}
.style3 {
	font-family: Arial, Helvetica, sans-serif;
	color: #666666;
	font-size: 14px;
}
.style5 {font-family: Arial, Helvetica, sans-serif; color: #666666; font-size: 14px; font-weight: bold; }
.style6 {
	font-size: 18px;
	color: #000000;
}
-->
</style>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script>

<style type="text/css">

/*Make sure your page contains a valid doctype at the top*/
#simplegallery1{ //CSS for Simple Gallery Example 1
position: relative; /*keep this intact*/
visibility: hidden; /*keep this intact*/
border: 0px solid darkred;
}

#simplegallery1 .gallerydesctext{ //CSS for description DIV of Example 1 (if defined)
text-align: left;
	padding: 2px 5px;
	font-weight: bold;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
}

.style7 {
	color: #CC0000;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}
a {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #CC0000;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #CC0000;
}
a:hover {
	text-decoration: underline;
	color: #666666;
}
a:active {
	text-decoration: none;
	color: #CC0000;
}
.style8 {font-size: 18px}
.textt {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 18px;
	color: #000;
	padding-left: 15px;
	font-weight: bold;
}
.texttwhite {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 18px;
	color: #FFF;
	padding-left: 15px;
	font-weight: bold;
}
</style>

<script type="text/javascript" src="simplegallery.js">

/***********************************************
* Simple Controls Gallery- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for this script and 100s more
***********************************************/

</script>

<script type="text/javascript">

var mygallery=new simpleGallery({
	wrapperid: "simplegallery1", //ID of main gallery container,
	dimensions: [900, 350], //width/height of gallery in pixels. Should reflect dimensions of the images exactly
	imagearray: [
	["slide/001.jpg", "", "", "Garderns at Jacaranda Estate"],
	["slide/002.jpg", "", "", "Kukies Pub"],
	["slide/003.jpg", "", "", "Plum Tree and Plum Tree Cottage"],
	["slide/004.jpg", "", "", "Whispering Willow Gazebo"],
	["slide/01.jpg", "", "", "Snow at Jacranda Cottage"],
	["slide/02.jpg", "", "", "Snow at Jacranda Cottage"],
	["slide/03.jpg", "", "", "Snow at Jacranda Cottage"],
	["slide/1.jpg", "", "", "Interior of Plum Tree Cottage"],
		["slide/2.jpg", "", "", "View from Jacaranda cottage"],
		["slide/3.jpg", "", "", "Bathroom of Plum Tree Cottage"],
		["slide/4.jpg", "", "", "View from near Homestay"],
		["slide/5.jpg", "", "", "The suite in Whispering Willows"],
		["slide/6.jpg", "", "", "The suite in Whispering Willows"],
		["slide/7.jpg", "", "", "The entrance to Whispering Willows"],
		["slide/8.jpg", "", "", "A view of both the cottages and the garden"],
		["slide/9.jpg", "", "", "Interior of Whispering Willows"],
		["slide/11.jpg", "", "", "The Cottages at Naldehra"],
		["slide/12.jpg", "", "", ""],
		["slide/13.jpg", "", "", "Jacaranda cottage with sitting room"],
		["slide/14.jpg", "", "", "Interior of the new plum tree cottage"],
["slide/10.jpg", "", "", "A view of Naldehra Golf Course"],
["slide/15.jpg", "", "", "Veranda of Jacaranda Cottage"],
["slide/16.jpg", "", "", "Interior of Jacaranda Cottage"],
["slide/17.jpg", "", "", "The Garden of Jacaranda Estate"],

	],
	autoplay: [true, 2500, 2], //[auto_play_boolean, delay_btw_slide_millisec, cycles_before_stopping_int]
	persist: false, //remember last viewed slide and recall within same session?
	fadeduration: 500, //transition duration (milliseconds)
	oninit:function(){ //event that fires when gallery has initialized/ ready to run
		//Keyword "this": references current gallery instance (ie: try this.navigate("play/pause"))
	},
	onslide:function(curslide, i){ //event that fires after each slide is shown
		//Keyword "this": references current gallery instance
		//curslide: returns DOM reference to current slide's DIV (ie: try alert(curslide.innerHTML)
		//i: integer reflecting current image within collection being shown (0=1st image, 1=2nd etc)
	}
})

</script>
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="top" bgcolor="#BFBFBF"><div align="center"> <br />
    <table width="900" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td colspan="5" bgcolor="#FFFFFF"><div align="center"><img src="images/topCurve.png" width="900" height="70" /></div></td>
          </tr>
          <tr>
            <td width="4" bgcolor="#FFFFFF">&nbsp;</td>
            <td width="531" height="80" valign="middle" bgcolor="#FFFFFF"><div align="left"><span class="style1">Jacaranda Estate and Whispering Willows<br />
            </span><span class="style2">Cottages near Shimla at Naldehra</span><br />
            </div></td>
            <td width="137" valign="middle" bgcolor="#FFFFFF"><div align="right"><a href="index.php"><img src="images/Home-icon.png" width="88" height="88" border="0" /></a></div></td>
            <td width="216" valign="middle" bgcolor="#FFFFFF"><div align="right"><a href="activities.html"><img src="images/activities-header.jpg" width="200" height="40" border="0"/></a></div></td>
            <td width="12" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
          </tr>
        </table>
        <table width="900" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td bgcolor="#FFFFFF"><div id="simplegallery1"></div></td>
          </tr>
        </table>
        <table width="900" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="27" rowspan="2" bgcolor="#FFFFFF">&nbsp;</td>
            <td width="505" valign="top" bgcolor="#FFFFFF"><br />
              <table width="506" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="496" height="30" bgcolor="#FFC000" class="textt">About Us </td>
              </tr>
            </table>
              <p align="justify" class="style3">Jacaranda Estate and Whispering Willows cottages are located near Shimla in an English garden with deodar and
                jacaranda trees. Situated on   half an acre of   terraced hills it overlooks on the mountain opposite, Shimla’s   landmarks…
              The Viceregal Lodge… the Cecil Hotel and the church on the ridge.</p>
            <p align="justify" class="style3"> Away from the hustle and bustle of the city, yet tantalizingly (one hour drive) close too, the cottages are a stone’s throw
              from the 100-year-old Naldehra golf course set among gigantic deodars. </p>
            <p align="justify" class="style3">In these serene surroundings one wakes to enchanting birdsong, the smell of cedar wood and the waft of clean
            Himalayan air. A naturalists delight! </p>
            <p align="justify" class="style3">As the owner is also a travel consultant she can plan a trip for you in himachal.. </p>
            <p class="style3">We,  in the rural part of Himachal are proud to open our home to visitors who are  familiar with the concept.<br />
              <br />
              Visitors  who enjoy the tranquility of the countryside, the silence, the verdant green  are welcome to enjoy our homestay.<br />
              <br />
              We  are lucky to have Shimla, Kufri and Tattapani an hours drive away from  Jacaranda Estate, where the visitor can avail of golf, white water rafting, hot  springs, trekking on daisy strewn trails, visiting nearby villages and many  other activities. <br />
            <div>
            <p class="style3" style="display: inline-block; width: 330px; vertical-align: top;">
            We  have to respect the fragile eco system, thus we encourage and educate the  children and adults to partake in nature walks, observe the flora and fauna and  respect silence as we don&rsquo;t wish to break the laws of the state.
            </p>
            <!--
            Trip Advisor Badge
            Added: 16th Sept. 2014
             -->
             <div id="TA_excellent296" class="TA_excellent" style='display: inline-block;'>
               <ul id="mqZrM4FW" class="TA_links UmvARKY">
                <li id="8WnfrqaJrP3S" class="GPjzZwp2h">
                  <a target="_blank" href="http://www.tripadvisor.in/"><img src="http://c1.tacdn.com/img2/widget/tripadvisor_logo_115x18.gif" alt="TripAdvisor" class="widEXCIMG" id="CDSWIDEXCLOGO"/></a>
                </li>
               </ul>
             </div>
             <script src="http://www.jscache.com/wejs?wtype=excellent&amp;uniq=296&amp;locationId=3811843&amp;lang=en_IN&amp;langversion=2"></script>
             <!-- end of trip advisor badge -->
             </div>
            </td>
            <td width="336" valign="top" bgcolor="#FFFFFF"><div align="center">
              <br />
              <table width="250" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="214" height="30" bgcolor="#003300" class="texttwhite">Whispering Willow</td>
                </tr>
                <tr>
                  <td align="center"><img src="images/whisperingwillows.jpg" /></td>
                </tr>
                <tr>
                  <td bgcolor="#003300">&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td height="30" bgcolor="#FF0099"><span class="texttwhite">Jacaranda Cottage</span></td>
                </tr>
                <tr>
                  <td><img src="images/jacarandacottage.jpg" width="240" height="220" /></td>
                </tr>
                <tr>
                  <td bgcolor="#FF0099">&nbsp;</td>
                </tr>
              </table>
              <br />
            </div></td>
            <td width="32" rowspan="2" bgcolor="#FFFFFF">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2" valign="top" bgcolor="#FFFFFF"><div align="center"><span class="style3"><img src="images/partition.png" width="727" height="15" /></span></div></td>
          </tr>
        </table>
        <table width="900" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="27" bgcolor="#FFFFFF">&nbsp;</td>
            <td width="843" valign="top" bgcolor="#FFFFFF"><div align="left">
              <table width="845" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="845" height="30" bgcolor="#005B17" class="texttwhite">Accomodation </td>
                </tr>
              </table>
            </div>
              <ul>
                  <li class="style3">
                    <div align="justify">The smaller cottage on Jacaranda Estate is a private cottage  at Rs. 4,999/- a day. One double bedroom, bathroom,
                     verandah and garden. </div>
                </li>
                <li class="style3">
                  <div align="justify">Whispering Willows Cottage has cedar ceiling and floor and large windows that look out at the valley beyond.
                    Each room has its own TV.Whispering Willows Suite   (two double beds) Rs 8,999/- (per day). </div>
                </li>
                <li class="style3">Plum Tree cottage double bedroom with antique bed to accomodate a child also very plush with it own private garden at Rs. 7,500 a day breakfast included.</li>
                <div align="justify"><span class="style3"> Dinner Rs.500/-per person, Non Veg Rs.650 Per Person</span></div>
              </ul>
        <div>
                  <ol class="style3">
                    <li>
                      <div align="left"> A complimentary cold drink. </div>
                    </li>
                    <li>
                      <div align="left"> Cookies in room.</div>
                    </li>
                    <li>
                      <div align="left">Breakfast included.</div>
                    </li>
                    <li>
                      <div align="left"> Tea /Coffee maker and ingredients in room.</div>
                    </li>
                </ol>
              </div>
              <p align="left" class="style3"><span class="item">Anything beyond the mentioned above  will be charged extra.                  </span></p>
              <p align="left" class="style3"><strong>Rack Rate</strong><br />
Jacaranda Cottage : Rs.5,999 a day<br />
Plum Tree Cottage : Rs. 7,500 a day<br />
Whispering Willows : Rs. 11,999 a day<strong></strong></p>
            <p align="center" class="style3"><img src="images/partition.png" width="727" height="15" /></p>              </td>
            <td width="30" bgcolor="#FFFFFF">&nbsp;</td>
          </tr>
        </table>
        <table width="900" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="25" bgcolor="#FFFFFF">&nbsp;</td>
            <td width="849" align="center" valign="top" bgcolor="#FFFFFF"><table width="855" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <!-- <td width="845" height="30" bgcolor="#FF0099" class="texttwhite">Summer Rates   from 3rd April to 3rd August - (Early Bird Deals!!!)</td> -->
                  <td width="845" height="30" bgcolor="#FF0099" class="texttwhite">Monsoon Rates from the 3rd August until 3rd October.  - (Early Bird Deals!!!)</td>
                </tr>
              </table>
              <table width="850" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="573"><p align="left" class="style3"><strong>Rack Rate</strong><br />
Jacaranda Cottage : Rs.11,999/- (2 Nights, 3 Days) (2 PAX space  for two extra beds)<br />
Jacaranda Cottage : Rs.14,999/- (3 Nights, 4 Days) (2 PAX space  for two extra beds)<br />
<br />
<!-- Plum Tree Cottage : Rs.12,999/-  (2 Nights, 3 Days) (2 PAX)<br />
Plum Tree Cottage : Rs.18,999/-  (3 Nights, 4 Days) (2 PAX)<br /> -->
Plum Tree Cottage : 15,000/-  (2 Nights, 3 Days) (2 PAX)<br />
Plum Tree Cottage : Rs 22,500/-  (3 Nights, 4 Days) (2 PAX)<br />
<br />
Whispering Willows Suite : Rs.23,999/-  (2 Nights, 3 Days) (4 PAX)<br />
Whispering Willows Suite : Rs.35,999/-  (3 Nights, 4 Days) (4 PAX)<br />
<br />
                  </p>
                    <p align="left" class="style3">1. Inclusive of Breakfast <br />
                      2. Tea / Coffee Maker in room<br />
3. Free WiFi
                    </p>
                    <p align="left" class="style3"><strong>Dinner</strong> @ Rs. 500 (Veg.) Rs. 650 (Non Veg) </p>
                    <p align="left" class="style3">Children below Five Year <strong>FREE</strong><br />
                      Rs. 1,000/- (between 5/12)<br />
                      Rs. 2,000/- (between 12 Years and above)</p>
                    <p align="left" class="style3"><strongWhispering Willows>Breakfast Timings</strong><br />
                      08:00 AM to 10:00 AM<br />
                    </p>
                    <p align="left" class="style3"><strong><strong>Dinner Timings</strong><br />
                    </strong>08:00 PM to 10:00 PM<br />
                    Kukie's Pub will close at 11:00 PM
                  </p>
                    <p align="left" class="style3">
                      <strong>Check-In Time: </strong>02:00 PM<br />
                      <strong>Check-Out Time: </strong>12:00 PM<br />
                    </p>
                    <p align="left" class="style3">Food not allowed from outside.<br />
                      Late Fee will be charged Rs.1,500/-<br />
                      <br />
                    </p></td>
                  <td width="277" valign="middle"><table width="200" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td><img src="images/snow.jpg" width="222" height="208" /></td>
                    </tr>
                  </table></td>
                </tr>
              </table>
              <table width="170" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td><span class="style3"><img src="images/partition.png" width="727" height="15" /></span></td>
                </tr>
            </table></td>
            <td width="26" bgcolor="#FFFFFF">&nbsp;</td>
          </tr>
        </table>
        <table width="900" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="26" bgcolor="#FFFFFF">&nbsp;</td>
            <td width="845" valign="top" bgcolor="#FFFFFF"><div align="left">
              <table width="855" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="845" height="30" bgcolor="#CC0000" class="texttwhite">Activities</td>
                </tr>
              </table>
            </div>
              <ul>
                  <li class="style3">
                    <div align="left">Tattapani is an hour’s drive from Naldehra where white water rafting takes place on the Satluj. </div>
                </li>
                <li class="style3">
                  <div align="left">Golf bags and balls are available on hire at the golf Club or from us. </div>
                </li>
                <li class="style3">
                  <div align="left">Horse rides can be arranged. </div>
                </li>
                <li class="style3">
                  <div align="left">Nature walks; short hikes in the vicinity can be organized. </div>
                </li>
                <li class="style3">
                  <div align="left">Indoor games are provided. </div>
                </li>
                <li class="style3">
                  <div align="left">Television with optic fiber based cable connection is provided. DVD’s can be provided with movies on hire at a nominal   		cost in the room.</div>
                </li>
              </ul>
              <p align="center" class="style7"><a href="activities.html">read more...</a></p>
            <p align="center"><span class="style3"><img src="images/partition.png" width="727" height="15" /></span></p></td>
            <td width="29" bgcolor="#FFFFFF">&nbsp;</td>
          </tr>
        </table>
        <table width="900" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="20" bgcolor="#FFFFFF">&nbsp;</td>
            <td width="851" valign="top" bgcolor="#FFFFFF"><div align="left">
              <table width="855" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="845" height="30" bgcolor="#000000" class="texttwhite">How to reach</td>
                </tr>
              </table>
            </div>
              <p align="left" class="style3">Naldehra from Shimla is a mere 23 kms. The airport is 35 kms away and the small gauge train can bring you from Kalka
            110 kms away to Shimla. Cars can be arranged to bring you to the estate. </p>
            <p align="center" class="style3"><img src="images/partition.png" width="727" height="15" /></p></td>
            <td width="29" bgcolor="#FFFFFF">&nbsp;</td>
          </tr>
        </table>
        <table width="900" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="20" rowspan="2" bgcolor="#FFFFFF">&nbsp;</td>
            <td width="354" valign="top" bgcolor="#FFFFFF"><div align="left">
              <table width="360" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="496" height="30" bgcolor="#FFC000" class="textt">Contact Us</td>
                </tr>
              </table>
              <span class="style5"><br />
                <span class="style6">Rita Sawhney</span></span><br />
              <span class="style3">+91 98110-16114</span><br />
              <a href="file:///d:/Websites/naldehracottages/html/%3C/a%3E%20%3C/p%3E%3Cp%3E%3Ca%20class=" class="style3" link="link""="">ritasawhney@hotmail.com</a>
              </p>
            </div>
              <p align="justify" class="style3"><strong>Bank Name</strong>: ICICI (Shimla Branch)<br />
                <strong>A/c No. </strong>635301000952<br />
                      <strong>IFSC Code:</strong> ICIC0006353<br />
                      <br />
              Check for availability and booking All packages are sold   on full amount on a prepaid basis and are non refundable.</p>
              <p align="justify" class="style3"><div id="TA_linkingWidgetWAR797" class="TA_linkingWidgetWAR"><ul id="IxlEKW" class="TA_links mL6gYKJAu"><li id="JPQwHq" class="ocmyKS">Write a review of <a target="_blank" href="http://www.tripadvisor.com/Hotel_Review-g1156035-d3811843-Reviews-Jacaranda_Estate_Whispering_Willows_Cottages-Naldehra_Himachal_Pradesh.html">Jacaranda Estate & Whispering Willows Cottages</a></li></ul></div><script src="http://www.jscache.com/wejs?wtype=linkingWidgetWAR&uniq=797&locationId=3811843&lang=en_US&border=true"></script></p>
            </td>
            <td width="496" valign="top" bgcolor="#FFFFFF"><div align="center">
              <table width="444" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td><form id="form1" name="form1" method="post" action="form.php">
                    <fieldset>
                    <legend class="style5">Booking Form</legend>
                    <table width="443" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td colspan="2" valign="top" class="style3"><div align="left">Full Name</div></td>
                        <td width="303"><div align="left"><span id="sprytextfield1">
                            <label>
                            <input name="Full name" type="text" id="Full name" size="17" />
                            </label>
                            <span class="textfieldRequiredMsg">Please enter your full name.</span></span></div></td>
                      </tr>
                      <tr>
                        <td colspan="2" valign="top" class="style3"><div align="left">Email Address</div></td>
                        <td width="303"><div align="left"><span id="sprytextfield2">
                        <label>
                        <input name="Email" type="text" id="Email" size="17" />
                        </label>
                        <span class="textfieldRequiredMsg">Please enter your email address.</span><span class="textfieldInvalidFormatMsg">Invalid email.</span></span></div></td>
                      </tr>
                      <tr>
                        <td colspan="2" valign="top" class="style3"><div align="left">Contact Number</div></td>
                        <td width="303"><div align="left"><span id="sprytextfield3">
                        <label>
                        <input name="Contact Number" type="text" id="Contact Number" size="17" />
                        </label>
                        <span class="textfieldRequiredMsg">Please enter contact number.</span><span class="textfieldInvalidFormatMsg">Invalid numbner.</span></span></div></td>
                      </tr>
                      <tr>
                        <td colspan="2" valign="top" class="style3"><div align="left">Date of Arrival</div></td>
                        <td width="303"><div align="left"><span id="spryselect1">
                          <label>
                          <select name="Arrival Date" id="Arrival Date">
                            <option>DD</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                          </select>
                          </label>
                          <span class="selectRequiredMsg">Please enter date.</span></span><span id="spryselect2">
                          <label>
                          <select name="Arrival Month" id="Arrival Month">
                            <option>MM</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                          </select>
                          </label>
                          <span class="selectRequiredMsg">Please select month.</span></span><span id="spryselect3">
                          <label>
                          <select name="Arrival Year" id="Arrival Year">
                            <option>YYYY</option>
                            <option value="<?= $current_year ?>"><?= $current_year ?></option>
                            <option value="<?= $current_year + 1 ?>"><?= $current_year + 1 ?></option>
                          </select>
                          </label>
                          <span class="selectRequiredMsg">Please select year.</span></span></div></td>
                      </tr>
                      <tr>
                        <td colspan="2" valign="top" class="style3"><div align="left">Date of Departurel</div></td>
                        <td><div align="left"><span id="spryselect3">
                            <label><span id="spryselect6">
                            <select name="Departure Date" id="Departure Date">
                              <option>DD</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                              <option value="9">9</option>
                              <option value="10">10</option>
                              <option value="11">11</option>
                              <option value="12">12</option>
                              <option value="13">13</option>
                              <option value="14">14</option>
                              <option value="15">15</option>
                              <option value="16">16</option>
                              <option value="17">17</option>
                              <option value="18">18</option>
                              <option value="19">19</option>
                              <option value="20">20</option>
                              <option value="21">21</option>
                              <option value="22">22</option>
                              <option value="23">23</option>
                              <option value="24">24</option>
                              <option value="25">25</option>
                              <option value="26">26</option>
                              <option value="27">27</option>
                              <option value="28">28</option>
                              <option value="29">29</option>
                              <option value="30">30</option>
                              <option value="31">31</option>
                            </select>
                            <span class="selectRequiredMsg">Please select date.</span></span></label>
                            <span class="selectRequiredMsg">Please select date.</span></span><span id="spryselect4">
                            <label>
                            <select name="Departure Month" id="Departure Month">
                              <option>MM</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                              <option value="9">9</option>
                              <option value="10">10</option>
                              <option value="11">11</option>
                              <option value="12">12</option>
                            </select>
                            </label>
                            <span class="selectRequiredMsg">Please select month.</span></span><span id="spryselect5">
                            <label>
                            <select name="Departure Year" id="Departure Year">
                              <option>YYYY</option>
                              <option value="<?= $current_year ?>"><?= $current_year ?></option>
                              <option value="<?= $current_year + 1 ?>"><?= $current_year + 1 ?></option>
                            </select>
                            </label>
                            <span class="selectRequiredMsg">Please select year.</span></span></div></td>
                      </tr>
                      <tr>
                        <td colspan="2" valign="top" class="style3"><div align="left">No. of Person</div></td>
                        <td width="303"><div align="left"><span id="spryselect7">
                          <label>
                          <select name="Child" id="Child">
                            <option>Child</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                          </select>
                          </label>
                          <span class="selectRequiredMsg">Please select no. of children.</span></span><span id="spryselect8">
                          <label>
                          <select name="Adult" id="Adult">
                            <option>Adult</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                          </select>
                          </label>
                          <span class="selectRequiredMsg">Please select no. of adults.</span></span></div></td>
                      </tr>
                      <tr>
                        <td colspan="2" valign="top" class="style3"><div align="left">Other Details</div></td>
                        <td width="303"><div align="left">
                          <label>
                          <textarea name="Other Details" id="Other Details" cols="25" rows="3"></textarea>
                          </label>
                        </div></td>
                      </tr>
                      <tr>
                        <td colspan="2" valign="top" class="style3">&nbsp;</td>
                        <td><div style="float:left;">
Please type the code shown in the image: <input type="text" name="wsp_code"/>
</div>
<div style="float:left;">
<script type="text/javascript" src="http://webspamprotect.com/captcha/5697/"></script>
<noscript>This form protected by <a href="http://webspamprotect.com" target="_blank" title="Web form spam protection">WebSpamProtect</a>. JavaScript must be enabled in your browser to view this image.
</noscript>
</div>
</td>
                      </tr>
                      <tr>
                        <td width="123" height="35"><div align="right">
                          <label>
                          <input type="reset" name="reset" id="reset" value="Reset" />
                          </label>
                        </div></td>
                        <td width="17">&nbsp;</td>
                        <td width="303"><div align="left">
                          <label>
                          <input type="submit" name="Submit" id="Submit" value="Submit" />
                          </label>
                        </div></td>
                      </tr>
                          </table>
                    </fieldset>
                        </form>
                  </td>
                </tr>
              </table>
            </div></td>
            <td width="30" rowspan="2" bgcolor="#FFFFFF">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2" valign="top" bgcolor="#FFFFFF"><div align="center"><span class="style3"><br />
            <img src="images/partition.png" width="727" height="15" /></span></div></td>
          </tr>
        </table>
        <table width="900" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td bgcolor="#FFFFFF"><table width="900" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td height="30"><div align="center" class="style5">&copy; 2011 www.naldehracottages.com</div></td>
              </tr>

            </table></td>
          </tr>
        </table>
    </div></td>
  </tr>
</table>
<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "email");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "integer");
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1");
var spryselect2 = new Spry.Widget.ValidationSelect("spryselect2");
var spryselect3 = new Spry.Widget.ValidationSelect("spryselect3");
var spryselect4 = new Spry.Widget.ValidationSelect("spryselect4");
var spryselect5 = new Spry.Widget.ValidationSelect("spryselect5");
var spryselect3 = new Spry.Widget.ValidationSelect("spryselect3");
var spryselect6 = new Spry.Widget.ValidationSelect("spryselect6");
var spryselect7 = new Spry.Widget.ValidationSelect("spryselect7");
var spryselect8 = new Spry.Widget.ValidationSelect("spryselect8");
//-->
</script>
</body>
</html>
