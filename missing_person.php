<?php
include "Includes/header.php";
?>
<main>
    <div class="container mt-4">
    <div class="heading card">
        <h1>Missing Persons</h1>   
    </div>
    <div class="button mt-4 d-flex" style="justify-content:end;">
        <a href="" class="btn btn-dark me-2">Founded By NGO</a>
        <a href="" class="btn btn-dark">Founded By NGO</a>
    </div>
    <table class="divborder changefont" style="padding: 10px; border-radius: 25px; border-collapse: separate; width: 100%; color: rgb(0, 64, 107); border: 3.5px solid rgb(102, 194, 255);">
								<tbody><tr>
									<td>
										<div>
											<table width="100%" class="new-font-div" style="border: 1px solid rgb(102, 194, 255);">

												<tbody><tr>
													<td colspan="8" class="tdbgcolor">
														<table width="100%" border="0" class="tdbgcolor" cellspacing="0" cellpadding="0" align="center" >
															<tbody><tr>
																<td height="40" class=" tdbgcolor" ><b>&nbsp;&nbsp;&nbsp;<span id="idc0">Person Name</span></b></td>
																<td class=" tdbgcolor" align="left" height="40" style=" color: rgb(0, 64, 107);"><input class="textfieldNormalFormMaxlength new-font-div" type="text" autocomplete="off" maxlength="50" name="missingName" id="City" onchange="addPresentAddressCity(this);" onkeydown="addPresentAddressCity(this);" onkeyup="addPresentAddressCity(this);" onblur="uppercase(this);" value="" style="border: 1px solid rgb(102, 194, 255);"></td>
																<td class=" tdbgcolor" height="40" align="center" style="color: rgb(0, 64, 107);">
																	<b><span id="idb4"><input name="namefilter" type="radio" value="0" id="idb4-0"><label for="idb4-0">Exactly</label> <input name="namefilter" type="radio" value="1" id="idb4-1"><label for="idb4-1">Anywhere</label> <input name="namefilter" type="radio" checked="checked" value="2" id="idb4-2"><label for="idb4-2">Begin With</label> <input name="namefilter" type="radio" value="3" id="idb4-3"><label for="idb4-3">End With</label> </span></b>
																</td>
															</tr>
														</tbody></table>
													</td>
												</tr>

												<tr>
													<td colspan="8" class="tdbgcolor" style="background-color: rgb(227, 246, 255); color: rgb(0, 64, 107);"><font size="3">
															<div class="feedback" style="text-align: left;">
																<span id="idc1"></span>
															</div>
													</font></td>
												</tr>
												<tr>
													<td align="left" height="40" class=""><b>&nbsp;&nbsp;&nbsp;<span id="idc2">Gender</span></b></td>
													<td align="left" height="25" class=""><select size="1" class="ctrGenderDropDown new-font-div" name="genderDropDown" id="idb3" style="border: 1px solid rgb(102, 194, 255);">
<option value="0">Male</option>
<option value="1">Female</option>
<option value="2">Transgender</option>
<option value="3">ALL</option>
</select></td>
													<td align="left" height="40" class=""><b>&nbsp;&nbsp;<span id="idc3">Date of Missing</span></b></td>
													<td class="" height="40" valign="middle" align="left">
														<b><span id="idb5"><input name="dateSelectRange" type="radio" value="0" id="idb5-0"><label for="idb5-0">Exactly</label> <input name="dateSelectRange" type="radio" checked="checked" value="1" id="idb5-1"><label for="idb5-1">Between</label> </span>&nbsp;&nbsp;</b>
													</td>
													<td align="left" class="" colspan="4" id="idc4">
														<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
															<tbody><tr>
																<td align="left" height="40" wicket:ids="rcDate" class=""><input class="textfieldNormalFormDate new-font-div" type="text" size="8" name="rcDate:missingFromDate" id="missingFromDate" onclick="NewCssCal('missingFromDate','ddMMyyyy','dropdown', false, '12', false, true)" value="01/01/2024" style="border: 1px solid rgb(102, 194, 255);">
																	<span> <img onclick="javascript:NewCssCal('missingFromDate','ddMMyyyy','dropdown', false, '12', false, true)" border="0" name="rcDate:fromRentCalImage" id="idc5" src="images/calender.gif">
																</span> <b><span>-</span></b> <input class="textfieldNormalFormDate new-font-div" type="text" size="8" name="rcDate:missingToDate" id="missingToDate" onclick="NewCssCal('missingToDate','ddMMyyyy','dropdown', false, '12', false, true)" value="02/03/2024" style="border: 1px solid rgb(102, 194, 255);">
																	<span> <img onclick="javascript:NewCssCal('missingToDate','ddMMyyyy','dropdown', false, '12', false, true)" border="0" name="rcDate:toRentCalImage" id="idc6" src="images/calender.gif">
																</span></td>
															</tr>


															<tr>
																<td><span> <font size="2" color="red"><span></span> <span style="text-align: left;"></span></font></span>
																</td>
															</tr>
														</tbody></table>
													</td>
												</tr>

												<tr class="tdbgcolor">
													<td align="left" height="40" class=""><b>&nbsp;&nbsp;&nbsp;<span id="idc7">Age Group</span></b></td>


													<td align="left" height="40" class=""><input class="textfieldNormalFormAge new-font-div" type="text" name="txtFromAge" id="txtFromAge" autocomplete="off" maxlength="2" onkeydown="checkNumbers(this)" onkeyup="checkNumbers(this)" value="" style="border: 1px solid rgb(102, 194, 255);"> &nbsp;-&nbsp;<input class="textfieldNormalFormAge new-font-div" type="text" name="txtToAge" id="txtToAge" autocomplete="off" maxlength="2" onkeydown="checkNumbers(this)" onkeyup="checkNumbers(this)" value="" style="border: 1px solid rgb(102, 194, 255);"> <font size="2" color="red"> <span style="text-align: right;"></span>
													</font></td>

													<td align="left" height="40" class="">&nbsp;&nbsp;<b><span>Height</span></b></td>


													<td align="left" height="40" class=""><input placeholder="cms" class="textfieldNormalFormAge new-font-div" type="text" name="fromHeight" id="txtFromheight" autocomplete="off" maxlength="3" onkeydown="checkNumbers(this)" onkeyup="checkNumbers(this)" value="" style="border: 1px solid rgb(102, 194, 255);">

														&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;<input placeholder="cms" class="textfieldNormalFormAge new-font-div" type="text" name="toHeight" id="toHeight" autocomplete="off" maxlength="3" onkeydown="checkNumbers(this)" onkeyup="checkNumbers(this)" value="" style="border: 1px solid rgb(102, 194, 255);"> <font size="2" color="red"> <span style="text-align: right;"></span>
													</font></td>
													<td align="center" height="40" class=""><b><span>Complexion</span></b></td>
													<td align="left" height="40" class=""><select size="1" class="ctrDropDown new-font-div" name="complexion" id="idbd" style="border: 1px solid rgb(102, 194, 255);">
<option selected="selected" value="0">Choose one</option>
<option value="1">DARK</option>
<option value="2">FAIR</option>
<option value="3">VERY FAIR</option>
<option value="4">WHEATISH/SALLOW</option>
</select></td>
													<td align="left" height="40" class="" colspan="2"></td>
												</tr>
												<tr>
													<td align="left" height="40" class=""><b>&nbsp;&nbsp;&nbsp;<span id="idc8">Scar</span></b></td>
													<td align="left" height="25" class=""><select size="1" class="ctrDropDown new-font-div" name="scarePlace" id="idb7" style="border: 1px solid rgb(102, 194, 255);">
<option selected="selected" value="0">Choose one</option>
<option value="1">BACK LEFT SIDE</option>
<option value="2">BACK RIGHT SIDE</option>
<option value="3">CHEEK LEFT</option>
<option value="4">CHEEK RIGHT</option>
<option value="5">FINGER(S)-HAND-LITTLE-RIGHT</option>
<option value="6">CHEST MIDDLE</option>
<option value="7">HIP – LEFT SIDE</option>
<option value="8">CHEST LEFT SIDE</option>
<option value="9">HIP – RIGHT SIDE</option>
<option value="10">CHEST RIGHT SIDE</option>
<option value="11">RIB – LEFT SIDE</option>
<option value="12">CHIN</option>
<option value="13">FINGER(S)-HAND-RIGHT</option>
<option value="14">RIB – RIGHT SIDE</option>
<option value="15">EAR LEFT</option>
<option value="16">FINGER(S)-FOOT-LEFT</option>
<option value="17">STOMACH – RIGHT SIDE</option>
<option value="18">EAR RIGHT</option>
<option value="19">FINGER(S)-FOOT-RIGHT</option>
<option value="20">STOMACH – LEFT SIDE</option>
<option value="21">ANKLE</option>
<option value="22">UPPER ARM – LEFT</option>
<option value="23">WRIST</option>
<option value="24">UPPER ARM – RIGHT</option>
<option value="25">ELBOW</option>
<option value="26">WRIST – RIGHT</option>
<option value="27">ABDOMEN</option>
<option value="28">UPPER ARM</option>
<option value="29">CLEFT LIP</option>
<option value="30">KNEE RIGHT</option>
<option value="31">EYE BROW LEFT</option>
<option value="32">EYE BROW RIGHT</option>
<option value="33">FACE</option>
<option value="34">FOOT LEFT</option>
<option value="35">WRIST – LEFT</option>
<option value="36">FOOT RIGHT</option>
<option value="37">ARMPIT LEFT</option>
<option value="38">FOREHEAD</option>
<option value="39">ARMPIT RIGHT</option>
<option value="40">HAND LEFT</option>
<option value="41">COLLAR BONE LEFT</option>
<option value="42">FOREARM LEFT- LETTER</option>
<option value="43">KNEE LEFT</option>
<option value="44">COLLAR BONE RIGHT</option>
<option value="45">FOREARM LEFT-FIGURE</option>
<option value="46">RIB</option>
<option value="47">HAND RIGHT</option>
<option value="48">HIP</option>
<option value="49">TOE LEFT</option>
<option value="50">TOE RIGHT</option>
<option value="51">THUMB LEFT</option>
<option value="52">THUMB RIGHT</option>
<option value="53">ANKLE LEFT SIDE</option>
<option value="54">ANKLE RIGHT SIDE</option>
<option value="55">ELBOW LEFT SIDE</option>
<option value="56">FOREARM RIGHT- FIGURE</option>
<option value="57">FOREARM RIGHT- LETTER</option>
<option value="58">HEAD</option>
<option value="59">LEG LEFT</option>
<option value="60">LEG RIGHT</option>
<option value="61">LIP LOWER</option>
<option value="62">LIP UPPER</option>
<option value="63">NECK</option>
<option value="64">ELBOW RIGHT SIDE</option>
<option value="65">NOSE</option>
<option value="66">FINGER(S)-FOOT–THUMB-LEFT</option>
<option value="67">SHOULDER LEFT</option>
<option value="68">FINGER(S)-FOOT–2ND-LEFT</option>
<option value="69">FINGER(S)-FOOT–3RD-LEFT</option>
<option value="70">FINGER(S)-FOOT–4TH-LEFT</option>
<option value="71">FINGER(S)-FOOT–LITTLE-LEFT</option>
<option value="72">FINGER(S)-HAND–THUMB-LEFT</option>
<option value="73">FINGER(S)-HAND–INDEX-LEFT</option>
<option value="74">FINGER(S)-HAND–MIDDLE-LEFT</option>
<option value="75">FINGER(S)-HAND–RING-LEFT</option>
<option value="76">FINGER(S)-HAND–LITTLE-LEFT</option>
<option value="77">FINGER(S)-FOOT–THUMB-RIGHT</option>
<option value="78">FINGER(S)-FOOT–2ND-RIGHT</option>
<option value="79">FINGER(S)-FOOT–3RD-RIGHT</option>
<option value="80">SHOULDER RIGHT</option>
<option value="81">FINGER(S)-FOOT–4TH-RIGHT</option>
<option value="82">STOMACH</option>
<option value="83">FINGER(S)-FOOT–LITTLE-RIGHT</option>
<option value="84">THIGH LEFT</option>
<option value="85">FINGER(S)-HAND–THUMB-RIGHT</option>
<option value="86">THIGH RIGHT</option>
<option value="87">FINGER(S)-HAND–INDEX-RIGHT</option>
<option value="88">PALM RIGHT</option>
<option value="89">FINGER(S)-HAND–MIDDLE-RIGHT</option>
<option value="90">PALM LEFT</option>
<option value="91">FINGER(S)-HAND–RING-RIGHT</option>
<option value="92">FINGER(S)-HAND-LEFT</option>
</select></td>

													<td align="left" height="40" class=""><b>&nbsp;<span id="idc9">Mole</span></b></td>
													<td align="left" height="25" class=""><select size="1" class="ctrDropDown new-font-div" name="molePlace" id="idb6" style="border: 1px solid rgb(102, 194, 255);">
<option selected="selected" value="0">Choose one</option>
<option value="1">BACK LEFT SIDE</option>
<option value="2">BACK RIGHT SIDE</option>
<option value="3">CHEEK LEFT</option>
<option value="4">CHEEK RIGHT</option>
<option value="5">FINGER(S)-HAND-LITTLE-RIGHT</option>
<option value="6">CHEST MIDDLE</option>
<option value="7">HIP – LEFT SIDE</option>
<option value="8">CHEST LEFT SIDE</option>
<option value="9">HIP – RIGHT SIDE</option>
<option value="10">CHEST RIGHT SIDE</option>
<option value="11">RIB – LEFT SIDE</option>
<option value="12">CHIN</option>
<option value="13">FINGER(S)-HAND-RIGHT</option>
<option value="14">RIB – RIGHT SIDE</option>
<option value="15">EAR LEFT</option>
<option value="16">FINGER(S)-FOOT-LEFT</option>
<option value="17">STOMACH – RIGHT SIDE</option>
<option value="18">EAR RIGHT</option>
<option value="19">FINGER(S)-FOOT-RIGHT</option>
<option value="20">STOMACH – LEFT SIDE</option>
<option value="21">ANKLE</option>
<option value="22">UPPER ARM – LEFT</option>
<option value="23">WRIST</option>
<option value="24">UPPER ARM – RIGHT</option>
<option value="25">ELBOW</option>
<option value="26">WRIST – RIGHT</option>
<option value="27">ABDOMEN</option>
<option value="28">UPPER ARM</option>
<option value="29">CLEFT LIP</option>
<option value="30">KNEE RIGHT</option>
<option value="31">EYE BROW LEFT</option>
<option value="32">EYE BROW RIGHT</option>
<option value="33">FACE</option>
<option value="34">FOOT LEFT</option>
<option value="35">WRIST – LEFT</option>
<option value="36">FOOT RIGHT</option>
<option value="37">ARMPIT LEFT</option>
<option value="38">FOREHEAD</option>
<option value="39">ARMPIT RIGHT</option>
<option value="40">HAND LEFT</option>
<option value="41">COLLAR BONE LEFT</option>
<option value="42">FOREARM LEFT- LETTER</option>
<option value="43">KNEE LEFT</option>
<option value="44">COLLAR BONE RIGHT</option>
<option value="45">FOREARM LEFT-FIGURE</option>
<option value="46">RIB</option>
<option value="47">HAND RIGHT</option>
<option value="48">HIP</option>
<option value="49">TOE LEFT</option>
<option value="50">TOE RIGHT</option>
<option value="51">THUMB LEFT</option>
<option value="52">THUMB RIGHT</option>
<option value="53">ANKLE LEFT SIDE</option>
<option value="54">ANKLE RIGHT SIDE</option>
<option value="55">ELBOW LEFT SIDE</option>
<option value="56">FOREARM RIGHT- FIGURE</option>
<option value="57">FOREARM RIGHT- LETTER</option>
<option value="58">HEAD</option>
<option value="59">LEG LEFT</option>
<option value="60">LEG RIGHT</option>
<option value="61">LIP LOWER</option>
<option value="62">LIP UPPER</option>
<option value="63">NECK</option>
<option value="64">ELBOW RIGHT SIDE</option>
<option value="65">NOSE</option>
<option value="66">FINGER(S)-FOOT–THUMB-LEFT</option>
<option value="67">SHOULDER LEFT</option>
<option value="68">FINGER(S)-FOOT–2ND-LEFT</option>
<option value="69">FINGER(S)-FOOT–3RD-LEFT</option>
<option value="70">FINGER(S)-FOOT–4TH-LEFT</option>
<option value="71">FINGER(S)-FOOT–LITTLE-LEFT</option>
<option value="72">FINGER(S)-HAND–THUMB-LEFT</option>
<option value="73">FINGER(S)-HAND–INDEX-LEFT</option>
<option value="74">FINGER(S)-HAND–MIDDLE-LEFT</option>
<option value="75">FINGER(S)-HAND–RING-LEFT</option>
<option value="76">FINGER(S)-HAND–LITTLE-LEFT</option>
<option value="77">FINGER(S)-FOOT–THUMB-RIGHT</option>
<option value="78">FINGER(S)-FOOT–2ND-RIGHT</option>
<option value="79">FINGER(S)-FOOT–3RD-RIGHT</option>
<option value="80">SHOULDER RIGHT</option>
<option value="81">FINGER(S)-FOOT–4TH-RIGHT</option>
<option value="82">STOMACH</option>
<option value="83">FINGER(S)-FOOT–LITTLE-RIGHT</option>
<option value="84">THIGH LEFT</option>
<option value="85">FINGER(S)-HAND–THUMB-RIGHT</option>
<option value="86">THIGH RIGHT</option>
<option value="87">FINGER(S)-HAND–INDEX-RIGHT</option>
<option value="88">PALM RIGHT</option>
<option value="89">FINGER(S)-HAND–MIDDLE-RIGHT</option>
<option value="90">PALM LEFT</option>
<option value="91">FINGER(S)-HAND–RING-RIGHT</option>
<option value="92">FINGER(S)-HAND-LEFT</option>
</select></td>

													<td align="left" height="40" class=""><b>&nbsp;<span id="idca">Tattoo</span></b></td>
													<td align="left" height="25" class=""><select size="1" class="ctrDropDown new-font-div" name="tattoPlace" id="idb8" style="border: 1px solid rgb(102, 194, 255);">
<option selected="selected" value="0">Choose one</option>
<option value="1">BACK LEFT SIDE</option>
<option value="2">BACK RIGHT SIDE</option>
<option value="3">CHEEK LEFT</option>
<option value="4">CHEEK RIGHT</option>
<option value="5">FINGER(S)-HAND-LITTLE-RIGHT</option>
<option value="6">CHEST MIDDLE</option>
<option value="7">HIP – LEFT SIDE</option>
<option value="8">CHEST LEFT SIDE</option>
<option value="9">HIP – RIGHT SIDE</option>
<option value="10">CHEST RIGHT SIDE</option>
<option value="11">RIB – LEFT SIDE</option>
<option value="12">CHIN</option>
<option value="13">FINGER(S)-HAND-RIGHT</option>
<option value="14">RIB – RIGHT SIDE</option>
<option value="15">EAR LEFT</option>
<option value="16">FINGER(S)-FOOT-LEFT</option>
<option value="17">STOMACH – RIGHT SIDE</option>
<option value="18">EAR RIGHT</option>
<option value="19">FINGER(S)-FOOT-RIGHT</option>
<option value="20">STOMACH – LEFT SIDE</option>
<option value="21">ANKLE</option>
<option value="22">UPPER ARM – LEFT</option>
<option value="23">WRIST</option>
<option value="24">UPPER ARM – RIGHT</option>
<option value="25">ELBOW</option>
<option value="26">WRIST – RIGHT</option>
<option value="27">ABDOMEN</option>
<option value="28">UPPER ARM</option>
<option value="29">CLEFT LIP</option>
<option value="30">KNEE RIGHT</option>
<option value="31">EYE BROW LEFT</option>
<option value="32">EYE BROW RIGHT</option>
<option value="33">FACE</option>
<option value="34">FOOT LEFT</option>
<option value="35">WRIST – LEFT</option>
<option value="36">FOOT RIGHT</option>
<option value="37">ARMPIT LEFT</option>
<option value="38">FOREHEAD</option>
<option value="39">ARMPIT RIGHT</option>
<option value="40">HAND LEFT</option>
<option value="41">COLLAR BONE LEFT</option>
<option value="42">FOREARM LEFT- LETTER</option>
<option value="43">KNEE LEFT</option>
<option value="44">COLLAR BONE RIGHT</option>
<option value="45">FOREARM LEFT-FIGURE</option>
<option value="46">RIB</option>
<option value="47">HAND RIGHT</option>
<option value="48">HIP</option>
<option value="49">TOE LEFT</option>
<option value="50">TOE RIGHT</option>
<option value="51">THUMB LEFT</option>
<option value="52">THUMB RIGHT</option>
<option value="53">ANKLE LEFT SIDE</option>
<option value="54">ANKLE RIGHT SIDE</option>
<option value="55">ELBOW LEFT SIDE</option>
<option value="56">FOREARM RIGHT- FIGURE</option>
<option value="57">FOREARM RIGHT- LETTER</option>
<option value="58">HEAD</option>
<option value="59">LEG LEFT</option>
<option value="60">LEG RIGHT</option>
<option value="61">LIP LOWER</option>
<option value="62">LIP UPPER</option>
<option value="63">NECK</option>
<option value="64">ELBOW RIGHT SIDE</option>
<option value="65">NOSE</option>
<option value="66">FINGER(S)-FOOT–THUMB-LEFT</option>
<option value="67">SHOULDER LEFT</option>
<option value="68">FINGER(S)-FOOT–2ND-LEFT</option>
<option value="69">FINGER(S)-FOOT–3RD-LEFT</option>
<option value="70">FINGER(S)-FOOT–4TH-LEFT</option>
<option value="71">FINGER(S)-FOOT–LITTLE-LEFT</option>
<option value="72">FINGER(S)-HAND–THUMB-LEFT</option>
<option value="73">FINGER(S)-HAND–INDEX-LEFT</option>
<option value="74">FINGER(S)-HAND–MIDDLE-LEFT</option>
<option value="75">FINGER(S)-HAND–RING-LEFT</option>
<option value="76">FINGER(S)-HAND–LITTLE-LEFT</option>
<option value="77">FINGER(S)-FOOT–THUMB-RIGHT</option>
<option value="78">FINGER(S)-FOOT–2ND-RIGHT</option>
<option value="79">FINGER(S)-FOOT–3RD-RIGHT</option>
<option value="80">SHOULDER RIGHT</option>
<option value="81">FINGER(S)-FOOT–4TH-RIGHT</option>
<option value="82">STOMACH</option>
<option value="83">FINGER(S)-FOOT–LITTLE-RIGHT</option>
<option value="84">THIGH LEFT</option>
<option value="85">FINGER(S)-HAND–THUMB-RIGHT</option>
<option value="86">THIGH RIGHT</option>
<option value="87">FINGER(S)-HAND–INDEX-RIGHT</option>
<option value="88">PALM RIGHT</option>
<option value="89">FINGER(S)-HAND–MIDDLE-RIGHT</option>
<option value="90">PALM LEFT</option>
<option value="91">FINGER(S)-HAND–RING-RIGHT</option>
<option value="92">FINGER(S)-HAND-LEFT</option>
</select></td>
													<td align="left" height="40" class=""><b>&nbsp;<span id="idcb">Face </span></b></td>
													<td align="left" height="25" class=""><select size="1" class="ctrDropDown new-font-div" name="faceType" id="idbe" style="border: 1px solid rgb(102, 194, 255);">
<option selected="selected" value="0">Choose one</option>
<option value="1">POXPITTED</option>
<option value="2">PROMINENT CHEEK</option>
<option value="3">PROTRUDING CHIN</option>
<option value="4">DIMPLED CHEEK</option>
<option value="5">RECEDING FOREHEAD</option>
<option value="6">DIMPLED CHIN</option>
<option value="7">ROUND</option>
<option value="8">DOUBLE CHIN</option>
<option value="9">SQUARE/HEAVY JAW</option>
<option value="10">FOREHEAD BROAD</option>
<option value="11">SUNKEN CHEEKS</option>
<option value="12">FOREHEAD NARROW</option>
<option value="13">WRINKLED</option>
<option value="14">HIGH CHEEK</option>
<option value="15">LONG</option>
<option value="16">OVAL</option>
</select></td>
												</tr>

												<tr class="tdbgcolor">
													<td align="left" height="40" class=""><b>&nbsp;&nbsp;&nbsp;<span>Lower Dress</span></b></td>
													<td align="left" height="40" class=""><select size="1" class="ctrDropDown new-font-div" name="lowerType" id="idbb" style="border: 1px solid rgb(102, 194, 255);">
<option selected="selected" value="0">Choose one</option>
<option value="1">PANT</option>
<option value="2">HALF PANT</option>
<option value="3">DHOTHI</option>
<option value="4">LUNGI</option>
<option value="5">SHORTS</option>
<option value="6">JEANS PANT</option>
<option value="7">BURMUDAS</option>
<option value="8">PYJAMA PANT</option>
<option value="9">¾TH PANT</option>
<option value="10">SAFARI SUIT</option>
<option value="11">TRACK SUIT</option>
</select></td>

													<td align="left" height="40" class=""><b>&nbsp;<span id="idcc">Lower Dress Color</span></b></td>
													<td align="left" height="40" class=""><select size="1" class="ctrDropDown new-font-div" name="lowerdresscolor" id="idb9" style="border: 1px solid rgb(102, 194, 255);">
<option selected="selected" value="0">Choose one</option>
<option value="1">light pink</option>
<option value="2">light salmon</option>
<option value="3">light seagreen</option>
<option value="4">light skyblue</option>
<option value="5">light slategray</option>
<option value="6">light steelblue</option>
<option value="7">light yellow</option>
<option value="8">lime</option>
<option value="9">pink</option>
<option value="10">limegreen</option>
<option value="11">plum</option>
<option value="12">linen</option>
<option value="13">powderblue</option>
<option value="14">purple</option>
<option value="15">red</option>
<option value="16">rosy brown</option>
<option value="17">royal blue</option>
<option value="18">saddle brown</option>
<option value="19">salmon</option>
<option value="20">sandy brown</option>
<option value="21">magenta</option>
<option value="22">maroon</option>
<option value="23">medium aquamarine</option>
<option value="24">medium blue</option>
<option value="25">medium orchid</option>
<option value="26">medium purple</option>
<option value="27">medium seagreen</option>
<option value="28">medium slateblue</option>
<option value="29">seagreen</option>
<option value="30">medium springgreen</option>
<option value="31">seashell</option>
<option value="32">aliceblue</option>
<option value="33">medium turquoise</option>
<option value="34">sienna</option>
<option value="35">antiquewhite</option>
<option value="36">silver</option>
<option value="37">aqua</option>
<option value="38">skyblue</option>
<option value="39">aquamarine</option>
<option value="40">slateblue</option>
<option value="41">azure</option>
<option value="42">slategray</option>
<option value="43">beige</option>
<option value="44">snow</option>
<option value="45">bisque</option>
<option value="46">spring green</option>
<option value="47">black</option>
<option value="48">steelblue</option>
<option value="49">blanched almond</option>
<option value="50">medium violetred</option>
<option value="51">midnight blue</option>
<option value="52">mintcream</option>
<option value="53">mistyrose</option>
<option value="54">moccasin</option>
<option value="55">navajowhite</option>
<option value="56">navy</option>
<option value="57">oldlace</option>
<option value="58">tan</option>
<option value="59">blue</option>
<option value="60">olive</option>
<option value="61">teal</option>
<option value="62">blueviolet</option>
<option value="63">olivedrab</option>
<option value="64">thistle</option>
<option value="65">brown</option>
<option value="66">tomato</option>
<option value="67">burlywood</option>
<option value="68">turquoise</option>
<option value="69">cadetblue</option>
<option value="70">violet</option>
<option value="71">chartreuse</option>
<option value="72">wheat</option>
<option value="73">chocolate</option>
<option value="74">white</option>
<option value="75">coral</option>
<option value="76">white smoke</option>
<option value="77">cornflowerblue</option>
<option value="78">yellow</option>
<option value="79">cornsilk</option>
<option value="80">yellow green</option>
<option value="81">crimson</option>
<option value="82">cyan</option>
<option value="83">dark blue</option>
<option value="84">dark cyan</option>
<option value="85">dark goldenrod</option>
<option value="86">dark gray</option>
<option value="87">dark green</option>
<option value="88">dark khaki</option>
<option value="89">dark magenta</option>
<option value="90">dark olivegreen</option>
<option value="91">dark orange</option>
<option value="92">dark orchid</option>
<option value="93">dark red</option>
<option value="94">dark salmon</option>
<option value="95">dark seagreen</option>
<option value="96">dark slateblue</option>
<option value="97">dark slategray</option>
<option value="98">dark turquoise</option>
<option value="99">dark violet</option>
<option value="100">deep pink</option>
<option value="101">deep skyblue</option>
<option value="102">dim gray</option>
<option value="103">dodge rblue</option>
<option value="104">fire brick</option>
<option value="105">floral white</option>
<option value="106">forest green</option>
<option value="107">fuchsia</option>
<option value="108">gainsboro</option>
<option value="109">ghost white</option>
<option value="110">gold</option>
<option value="111">golden rod</option>
<option value="112">gray</option>
<option value="113">green</option>
<option value="114">green yellow</option>
<option value="115">honeydew</option>
<option value="116">hotpink</option>
<option value="117">indianred</option>
<option value="118">indigo</option>
<option value="119">ivory</option>
<option value="120">khaki</option>
<option value="121">lavender</option>
<option value="122">lavender blush</option>
<option value="123">lawn green</option>
<option value="124">lemon chiffon</option>
<option value="125">light blue</option>
<option value="126">light coral</option>
<option value="127">light cyan</option>
<option value="128">light goldenrod yellow</option>
<option value="129">orange</option>
<option value="130">light gray</option>
<option value="131">orange red</option>
<option value="132">light green</option>
<option value="133">orchid</option>
<option value="134">pale goldenrod</option>
<option value="135">pale green</option>
<option value="136">pale turquoise</option>
<option value="137">pale violetred</option>
<option value="138">papayawhip</option>
<option value="139">peachpuff</option>
<option value="140">peru</option>
</select></td>

													<td align="left" height="40" class=""><b>&nbsp;<span>Upper Dress</span></b></td>
													<td align="left" height="40" class=""><select size="1" class="ctrDropDown new-font-div" name="upperType" id="idbc">
<option selected="selected" value="0">Choose one</option>
<option value="1">SHIRT (FULL)</option>
<option value="2">SHIRT (HALF)</option>
<option value="3">T-SHIRT (SLEEVELESS)</option>
<option value="4">T-Shirt (FULL)</option>
<option value="5">T-Shirt (HALF)</option>
<option value="6">KADHAR SHIRT</option>
<option value="7">GURTHA</option>
<option value="8">JEANS SHIRT</option>
<option value="9">JERSY</option>
<option value="10">PYJAMA</option>
<option value="11">COLLAR LESS T-SHIRT (FULL/HALF)</option>
<option value="12">SAFARI SHIRT</option>
<option value="13">COAT</option>
<option value="14">SWEATER</option>
<option value="15">BARE BODY</option>
<option value="16">STONE WASH SHIRT</option>
<option value="17">SHORT SHIRT</option>
</select></td>

													<td align="left" height="40" class=""><b><span id="idcd">Upper Dress Color</span></b></td>
													<td align="left" height="40" class=""><select size="1" class="ctrDropDown new-font-div" name="upperdresscolor" id="idba">
<option selected="selected" value="0">Choose one</option>
<option value="1">light pink</option>
<option value="2">light salmon</option>
<option value="3">light seagreen</option>
<option value="4">light skyblue</option>
<option value="5">light slategray</option>
<option value="6">light steelblue</option>
<option value="7">light yellow</option>
<option value="8">lime</option>
<option value="9">pink</option>
<option value="10">limegreen</option>
<option value="11">plum</option>
<option value="12">linen</option>
<option value="13">powderblue</option>
<option value="14">purple</option>
<option value="15">red</option>
<option value="16">rosy brown</option>
<option value="17">royal blue</option>
<option value="18">saddle brown</option>
<option value="19">salmon</option>
<option value="20">sandy brown</option>
<option value="21">magenta</option>
<option value="22">maroon</option>
<option value="23">medium aquamarine</option>
<option value="24">medium blue</option>
<option value="25">medium orchid</option>
<option value="26">medium purple</option>
<option value="27">medium seagreen</option>
<option value="28">medium slateblue</option>
<option value="29">seagreen</option>
<option value="30">medium springgreen</option>
<option value="31">seashell</option>
<option value="32">aliceblue</option>
<option value="33">medium turquoise</option>
<option value="34">sienna</option>
<option value="35">antiquewhite</option>
<option value="36">silver</option>
<option value="37">aqua</option>
<option value="38">skyblue</option>
<option value="39">aquamarine</option>
<option value="40">slateblue</option>
<option value="41">azure</option>
<option value="42">slategray</option>
<option value="43">beige</option>
<option value="44">snow</option>
<option value="45">bisque</option>
<option value="46">spring green</option>
<option value="47">black</option>
<option value="48">steelblue</option>
<option value="49">blanched almond</option>
<option value="50">medium violetred</option>
<option value="51">midnight blue</option>
<option value="52">mintcream</option>
<option value="53">mistyrose</option>
<option value="54">moccasin</option>
<option value="55">navajowhite</option>
<option value="56">navy</option>
<option value="57">oldlace</option>
<option value="58">tan</option>
<option value="59">blue</option>
<option value="60">olive</option>
<option value="61">teal</option>
<option value="62">blueviolet</option>
<option value="63">olivedrab</option>
<option value="64">thistle</option>
<option value="65">brown</option>
<option value="66">tomato</option>
<option value="67">burlywood</option>
<option value="68">turquoise</option>
<option value="69">cadetblue</option>
<option value="70">violet</option>
<option value="71">chartreuse</option>
<option value="72">wheat</option>
<option value="73">chocolate</option>
<option value="74">white</option>
<option value="75">coral</option>
<option value="76">white smoke</option>
<option value="77">cornflowerblue</option>
<option value="78">yellow</option>
<option value="79">cornsilk</option>
<option value="80">yellow green</option>
<option value="81">crimson</option>
<option value="82">cyan</option>
<option value="83">dark blue</option>
<option value="84">dark cyan</option>
<option value="85">dark goldenrod</option>
<option value="86">dark gray</option>
<option value="87">dark green</option>
<option value="88">dark khaki</option>
<option value="89">dark magenta</option>
<option value="90">dark olivegreen</option>
<option value="91">dark orange</option>
<option value="92">dark orchid</option>
<option value="93">dark red</option>
<option value="94">dark salmon</option>
<option value="95">dark seagreen</option>
<option value="96">dark slateblue</option>
<option value="97">dark slategray</option>
<option value="98">dark turquoise</option>
<option value="99">dark violet</option>
<option value="100">deep pink</option>
<option value="101">deep skyblue</option>
<option value="102">dim gray</option>
<option value="103">dodge rblue</option>
<option value="104">fire brick</option>
<option value="105">floral white</option>
<option value="106">forest green</option>
<option value="107">fuchsia</option>
<option value="108">gainsboro</option>
<option value="109">ghost white</option>
<option value="110">gold</option>
<option value="111">golden rod</option>
<option value="112">gray</option>
<option value="113">green</option>
<option value="114">green yellow</option>
<option value="115">honeydew</option>
<option value="116">hotpink</option>
<option value="117">indianred</option>
<option value="118">indigo</option>
<option value="119">ivory</option>
<option value="120">khaki</option>
<option value="121">lavender</option>
<option value="122">lavender blush</option>
<option value="123">lawn green</option>
<option value="124">lemon chiffon</option>
<option value="125">light blue</option>
<option value="126">light coral</option>
<option value="127">light cyan</option>
<option value="128">light goldenrod yellow</option>
<option value="129">orange</option>
<option value="130">light gray</option>
<option value="131">orange red</option>
<option value="132">light green</option>
<option value="133">orchid</option>
<option value="134">pale goldenrod</option>
<option value="135">pale green</option>
<option value="136">pale turquoise</option>
<option value="137">pale violetred</option>
<option value="138">papayawhip</option>
<option value="139">peachpuff</option>
<option value="140">peru</option>
</select></td>
												</tr>
												<tr>
													<td colspan="8">
														<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
															<tbody><tr>
																<td align="left" class="" width="30%">
																	<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
																		<tbody><tr>
																			<td align="left" height="23" class=""><b>&nbsp;&nbsp;&nbsp;<span>Districts</span></b></td>
																			<td align="left" height="70" class="">
																				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="ctrDropDownDatePeriod new-font-div" name="district" multiple="multiple" size="1" style="border: 1px solid rgb(102, 194, 255);">
<option value="0">ALL</option>
</select>
																			</td>
																		</tr>
																		<tr>
																			<td class=""></td>
																			<td class=""><font color="red">Use
																					Control for Multiple selection</font></td>
																		</tr>
																	</tbody></table>
																</td>

																<td align="left" class="" width="70%">
																	<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
																		<tbody><tr>
																			<td align="left" width="19%"><b>&nbsp;Enter
																					Security code</b><span class="feedback">*</span>&nbsp;
																			</td>
																			<td align="left">
																				<!-- <span class="changefont bold">Secure Code <span class="feedback red">*</span></span> -->
																				<input style="width: 95px !important; font-weight: bold;" id="captchaImageText6 textfieldCapcha" maxlength="5" size="7" type="text" placeholder="Secure code" name="captchaImageText" autocomplete="off" value=""> <!-- <span id="captchaNo5" wicket:id="captchaNo"  style="background-color: silver; font-size: 20px !important; font-weight: bold;" ></span> -->

																				<img class="img-responsive img-thumbnail" style="height: 55% !important; width: 20% !important;" id="idce" src="./MissingHomePage?23--formmissing-captchaImage&amp;antiCache=1709391990409">
																				<a id="link1" title="Reload the new Secure code" href="./MissingHomePage?23-2.-formmissing-link"><img style="width: 30px; padding: 2px !important;" src="images/Refresh.png" alt="Help"></a> <!-- <br/><span><font size="2"><div class="feedback" style=" text-align:center;"><span wicket:id="captchaFeedback" id="captchaFeedback" name="captchaFeedback"></span></div></font></span> -->

																			</td>

																			<!-- <td align="left" valign="middle" height="25" width="10%"
												style="background-color: silver;"><font
												style="font-size: 15px; font-weight: bold; text-align: center;">&nbsp;<span
													id="security_image" name="security_image"
													wicket:id="captchaNo"></span></font></td>
											<td  style="background-color: silver"></td>
											<td width="5px"></td>
											<td valign="middle" width="10%"><input wicket:id="security code"
												id="security_code" name="security_code" type="text"
												maxlength="5" style="width: 45px;"
												class="textfieldNormalFormAge new-font-div"  autocomplete="off" /></td>
											
											<td align="left" valign="middle"><a href="#"
												title="Reload the new Secure Code"
												wicket:id="refreshCaptcha">
												<img alt="Help" src="images/Refresh.png" width="15px"></a> &nbsp;</td> -->
																		</tr>
																	</tbody></table>
																</td>
															</tr>
														</tbody></table>
													</td>
												</tr>


												<tr align="center" class="tdbgcolor" height="40" width="100%">

													<td colspan="4" align="right"><input type="submit" name="Search" value="SEARCH" class="btn btn-dark">
														&nbsp;</td>
													<td colspan="4" align="left">&nbsp;<a href="./MissingHomePage" style="text-decoration: none"><input type="button" name="Submit" value="CLEAR" class="btn btn-dark"></a></td>
												</tr>
												<tr>
													<td colspan="5"><span> <font size="3">
																<div class="feedback" style="text-align: left;">
																	<span id="idcf"></span>
																</div>
														</font>

													</span></td>
												</tr>

												<tr>
													<td>&nbsp;&nbsp;</td>
												</tr>
												<tr>
													<td>&nbsp;&nbsp;</td>
												</tr>
											</tbody></table>
										</div>
									</td>
								</tr>
							</tbody></table>
    </div>
</main>
<?php
include "Includes/footer.php";
?>
