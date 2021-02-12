<?php require_once('header.php'); ?>

<?php
	$formValue = getInput('request_id');

	switch ($formValue) {
		case 'request_sample':
			$formTitle = 'Request sample';
			break;

		case 'request_discount':
			$formTitle = 'Request discount';
			break;
		
		default:
			$formTitle = "Request for inquiry";
			break;
	}
?>

	<div id="slideshow-sec" class="slideshow-inner-pages hidbred">
		<div id="carousel-div" class="carousel slide" data-ride="carousel">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="www.reportsinsights.html">Home</a></li>
								<li class="breadcrumb-item"><a href="materials-and-chemicals.html">
								Materials And Chemicals	</a></li>
								<li class="breadcrumb-item active" aria-current="page">United states ceramic sand market 2021</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<h1 class="heading-txt-report">Ceramic Sand Market Size, COVID-19 Impact Analysis By Regional Outlook(Europe, Asia Pacific, America[United States, Canada, Mexico, Brazil, Argentina, Columbia, Chile, Peru], Middle East And Africa), Industry Analysis Report, Growth Potential, Price Trend, Competitive Market Share, Market Statistics &amp; Forecast 2021 - 2025</h1>
				<p class="bottom-text"><b>ID : </b> RI_
					285557 | <b>Date : </b>
					Jan, 2021 | <b>Pages : </b>
					180 | <b>Region : </b> Global |
					<b>Publisher : </b>RI</p>
				<p class="bottom-text"><marquee behavior="scroll" direction="left" scrolldelay="150">Final Report will add the analysis of the impact of COVID-19 on this industry</marquee></p>


				<h2><?php echo $formTitle; ?></h2>
				<div class="card bg-light text-dark">

					<form id="enquiryForm" method="POST" action="">
						<div class="card-body">
							<div class="form-group row">
							 	<span class="star"></span>
							</div>
							<p>To request a Enquiry for this report , Please complete the form below</p>
							<hr class="hrline">

							<div class="form-group row">

								<label class="control-label col-sm-3" for="name">Full Name<span class="red">*</span>:</label>

								<div class="col-sm-9">

							  		<input type="text" name="fullname" class="form-control" id="form_name" placeholder="Enter Full Name" required>
							  	</div>
							</div>
							<div class="form-group row">
								<label class="control-label col-sm-3" for="email">Business Email:<span class="red">*</span></label>
								<div class="col-sm-9">
							  	<input type="email" name="email" class="form-control" id="form_email" placeholder="Business Email" required></div>
							</div>

							<div class="form-group row">
								<label class="control-label col-sm-3" for="phone">Phone:<span class="red">*</span></label>
								<div class="col-sm-9">

								  	<input type="text" name="phoneno" class="form-control" id="form_mobile" placeholder="Enter phone No" required>
							  	</div>
							</div>

							<div class="form-group row">
								<label class="control-label col-sm-3" for="email">Designation:<span class="red">*</span></label>
								<div class="col-sm-9">
							  		<input type="text" name="design" class="form-control" id="form_designation" placeholder="Designation" required>
							  	</div>
							</div>

							<div class="form-group row">
								<label class="control-label col-sm-3" for="cuntry"> Country:<span class="red">*</span></label>
								<div class="col-sm-9">

									<select class="form-control" name="country" id="form_country" required>

										<option value="">Select Country</option><option value="1">Afghanistan(+93)</option><option value="2">Albania(+355)</option><option value="3">Algeria(+213)</option><option value="4">American Samoa(+1-684)</option><option value="5">Andorra(+376)</option><option value="6">Angola(+244)</option><option value="7">Anguilla(+1-264)</option><option value="8">Antarctica(+672)</option><option value="9">Antigua and Barbuda(+1-268)</option><option value="10">Argentina(+54)</option><option value="11">Armenia(+374)</option><option value="12">Aruba(+297)</option><option value="13">Australia(+61)</option><option value="14">Austria(+43)</option><option value="15">Azerbaijan(+994)</option><option value="16">Bahamas(+1-242)</option><option value="17">Bahrain(+973)</option><option value="18">Bangladesh(+880)</option><option value="19">Barbados(+1-246)</option><option value="20">Belarus(+375)</option><option value="21">Belgium(+32)</option><option value="22">Belize(+501)</option><option value="23">Benin(+229)</option><option value="24">Bermuda(+1-441)</option><option value="25">Bhutan(+975)</option><option value="26">Bolivia(+591)</option><option value="27">Bosnia and Herzegowina(+387)</option><option value="28">Botswana(+267)</option><option value="29">Bouvet Island(+47)</option><option value="30">Brazil(+55)</option><option value="31">British Indian Ocean Territory(+246)</option><option value="32">Brunei Darussalam(+673)</option><option value="33">Bulgaria(+359)</option><option value="34">Burkina Faso(+226)</option><option value="35">Burundi(+257)</option><option value="36">Cambodia(+855)</option><option value="37">Cameroon(+237)</option><option value="38">Canada(+1)</option><option value="39">Cape Verde(+238)</option><option value="40">Cayman Islands(+1-345)</option><option value="41">Central African Republic(+236)</option><option value="42">Chad(+235)</option><option value="43">Chile(+56)</option><option value="44">China(+86)</option><option value="45">Christmas Island(+61)</option><option value="46">Cocos (Keeling) Islands(+61)</option><option value="47">Colombia(+57)</option><option value="48">Comoros(+269)</option><option value="49">Congo Democratic Republic of(+242)</option><option value="50">Cook Islands(+682)</option><option value="51">Costa Rica(+506)</option><option value="52">Cote D'Ivoire(+225)</option><option value="53">Croatia(+385)</option><option value="54">Cuba(+53)</option><option value="55">Cyprus(+357)</option><option value="56">Czech Republic(+420)</option><option value="57">Denmark(+45)</option><option value="58">Djibouti(+253)</option><option value="59">Dominica(+1-767)</option><option value="60">Dominican Republic(+1-809)</option><option value="61">Timor-Leste(+670)</option><option value="62">Ecuador(+593)</option><option value="63">Egypt(+20)</option><option value="64">El Salvador(+503)</option><option value="65">Equatorial Guinea(+240)</option><option value="66">Eritrea(+291)</option><option value="67">Estonia(+372)</option><option value="68">Ethiopia(+251)</option><option value="69">Falkland Islands (Malvinas)(+500)</option><option value="70">Faroe Islands(+298)</option><option value="71">Fiji(+679)</option><option value="72">Finland(+358)</option><option value="73">France(+33)</option><option value="75">French Guiana(+594)</option><option value="76">French Polynesia(+689)</option><option value="77">French Southern Territories(+)</option><option value="78">Gabon(+241)</option><option value="79">Gambia(+220)</option><option value="80">Georgia(+995)</option><option value="81">Germany(+49)</option><option value="82">Ghana(+233)</option><option value="83">Gibraltar(+350)</option><option value="84">Greece(+30)</option><option value="85">Greenland(+299)</option><option value="86">Grenada(+1-473)</option><option value="87">Guadeloupe(+590)</option><option value="88">Guam(+1-671)</option><option value="89">Guatemala(+502)</option><option value="90">Guinea(+224)</option><option value="91">Guinea-bissau(+245)</option><option value="92">Guyana(+592)</option><option value="93">Haiti(+509)</option><option value="94">Heard Island and McDonald Islands(+011)</option><option value="95">Honduras(+504)</option><option value="96">Hong Kong(+852)</option><option value="97">Hungary(+36)</option><option value="98">Iceland(+354)</option><option value="99">India(+91)</option><option value="100">Indonesia(+62)</option><option value="101">Iran (Islamic Republic of)(+98)</option><option value="102">Iraq(+964)</option><option value="103">Ireland(+353)</option><option value="104">Israel(+972)</option><option value="105">Italy(+39)</option><option value="106">Jamaica(+1-876)</option><option value="107">Japan(+81)</option><option value="108">Jordan(+962)</option><option value="109">Kazakhstan(+7)</option><option value="110">Kenya(+254)</option><option value="111">Kiribati(+686)</option><option value="112">Korea, Democratic People's Republic of(+850)</option><option value="113">South Korea(+82)</option><option value="114">Kuwait(+965)</option><option value="115">Kyrgyzstan(+996)</option><option value="116">Lao People's Democratic Republic(+856)</option><option value="117">Latvia(+371)</option><option value="118">Lebanon(+961)</option><option value="119">Lesotho(+266)</option><option value="120">Liberia(+231)</option><option value="121">Libya(+218)</option><option value="122">Liechtenstein(+423)</option><option value="123">Lithuania(+370)</option><option value="124">Luxembourg(+352)</option><option value="125">Macao(+853)</option><option value="126">Macedonia, The Former Yugoslav Republic of(+389)</option><option value="127">Madagascar(+261)</option><option value="128">Malawi(+265)</option><option value="129">Malaysia(+60)</option><option value="130">Maldives(+960)</option><option value="131">Mali(+223)</option><option value="132">Malta(+356)</option><option value="133">Marshall Islands(+692)</option><option value="134">Martinique(+596)</option><option value="135">Mauritania(+222)</option><option value="136">Mauritius(+230)</option><option value="137">Mayotte(+262)</option><option value="138">Mexico(+52)</option><option value="139">Micronesia, Federated States of(+691)</option><option value="140">Moldova(+373)</option><option value="141">Monaco(+377)</option><option value="142">Mongolia(+976)</option><option value="143">Montserrat(+1-664)</option><option value="144">Morocco(+212)</option><option value="145">Mozambique(+258)</option><option value="146">Myanmar(+95)</option><option value="147">Namibia(+264)</option><option value="148">Nauru(+674)</option><option value="149">Nepal(+977)</option><option value="150">Netherlands(+31)</option><option value="151">Netherlands Antilles(+599)</option><option value="152">New Caledonia(+687	)</option><option value="153">New Zealand(+64)</option><option value="154">Nicaragua(+505)</option><option value="155">Niger(+227)</option><option value="156">Nigeria(+234)</option><option value="157">Niue(+683)</option><option value="158">Norfolk Island(+672)</option><option value="159">Northern Mariana Islands(+1-670)</option><option value="160">Norway(+47)</option><option value="161">Oman(+968)</option><option value="162">Pakistan(+92)</option><option value="163">Palau(+680)</option><option value="164">Panama(+507)</option><option value="165">Papua New Guinea(+675)</option><option value="166">Paraguay(+595)</option><option value="167">Peru(+51)</option><option value="168">Philippines(+63)</option><option value="169">Pitcairn(+64)</option><option value="170">Poland(+48)</option><option value="171">Portugal(+351)</option><option value="172">Puerto Rico(+1-787)</option><option value="173">Qatar(+974)</option><option value="174">Reunion(+262)</option><option value="175">Romania(+40)</option><option value="176">Russian Federation(+7)</option><option value="177">Rwanda(+250)</option><option value="178">Saint Kitts and Nevis(+1-869)</option><option value="179">Saint Lucia(+1-758)</option><option value="180">Saint Vincent and the Grenadines(+1-784)</option><option value="181">Samoa(+685)</option><option value="182">San Marino(+378)</option><option value="183">Sao Tome and Principe(+239)</option><option value="184">Saudi Arabia(+966)</option><option value="185">Senegal(+221)</option><option value="186">Seychelles(+248)</option><option value="187">Sierra Leone(+232)</option><option value="188">Singapore(+65)</option><option value="189">Slovakia (Slovak Republic)(+421)</option><option value="190">Slovenia(+386)</option><option value="191">Solomon Islands(+677)</option><option value="192">Somalia(+252)</option><option value="193">South Africa(+27)</option><option value="194">South Georgia and the South Sandwich Islands(+500)</option><option value="195">Spain(+34)</option><option value="196">Sri Lanka(+94)</option><option value="197">Saint Helena, Ascension and Tristan da Cunha(+290)</option><option value="198">St. Pierre and Miquelon(+508)</option><option value="199">Sudan(+249)</option><option value="200">Suriname(+597)</option><option value="201">Svalbard and Jan Mayen Islands(+47)</option><option value="202">Swaziland(+268)</option><option value="203">Sweden(+46)</option><option value="204">Switzerland(+41)</option><option value="205">Syrian Arab Republic(+963)</option><option value="206">Taiwan(+886)</option><option value="207">Tajikistan(+992)</option><option value="208">Tanzania, United Republic of(+255)</option><option value="209">Thailand(+66)</option><option value="210">Togo(+228)</option><option value="211">Tokelau(+690)</option><option value="212">Tonga(+676)</option><option value="213">Trinidad and Tobago(+1-868)</option><option value="214">Tunisia(+216)</option><option value="215">Turkey(+90)</option><option value="216">Turkmenistan(+993)</option><option value="217">Turks and Caicos Islands(+1-649)</option><option value="218">Tuvalu(+688)</option><option value="219">Uganda(+256)</option><option value="220">Ukraine(+380)</option><option value="221">United Arab Emirates(+971)</option><option value="222">United Kingdom(+44)</option><option value="223">United States(+1)</option><option value="224">United States Minor Outlying Islands(+246)</option><option value="225">Uruguay(+598)</option><option value="226">Uzbekistan(+998)</option><option value="227">Vanuatu(+678)</option><option value="228">Vatican City State (Holy See)(+379)</option><option value="229">Venezuela(+58)</option><option value="230">Vietnam(+84)</option><option value="231">Virgin Islands (British)(+1-284)</option><option value="232">Virgin Islands (U.S.)(+1-340)</option><option value="233">Wallis and Futuna Islands(+681)</option><option value="234">Western Sahara(+212)</option><option value="235">Yemen(+967)</option><option value="236">Serbia(+381)</option><option value="238">Zambia(+260)</option><option value="239">Zimbabwe(+263)</option><option value="240">Aaland Islands(+358)</option><option value="241">Palestine(+970)</option><option value="242">Montenegro(+382)</option><option value="243">Guernsey(+44-1481)</option><option value="244">Isle of Man(+44-1624)</option><option value="245">Jersey(+44-1534)</option><option value="247">Cura&ccedil;ao(+599)</option><option value="248">Ivory Coast(+225)</option><option value="249">Kosovo(+383)</option></select>
								</div>
							</div>

							<div class="form-group row">

								<label class="control-label col-sm-3" for="message">Any specific research requirments:<span class="red">*</span></label>

								<div class="col-sm-9"><textarea class="form-control" rows="5" id="form_message" placeholder="Message" name="message" style="height:70px;"></textarea></div>

							</div>

							<div class="form-group row">

								<label class="control-label col-sm-3"> &nbsp;</label>

								<div class="col-sm-9"> <div class="checkbox" name="chkx" required></div>

									<label><input type="checkbox" name="subscribe" id="form_subscription" style="float:left;margin-top:3px;"><p>&nbsp;&nbsp;I am also interested to receive future industry updates an research report news letter.</p></label>

								</div>
							</div>

					    </div>
						<div class="form-group row">
							<label class="control-label col-sm-3"> &nbsp;</label>

							<div class="col-sm-9"> 
								<div class="checkbox">
									<div id="form_msg"></div>
									<button type="submit" name="confrms" id="form_submit" class="btn btn-danger btn-sm btn-form">Submit</button>
								</div>
							</div>
						</div>

				        </form>
			 	</div> 

			 	<p> <br></p>
			   	<h2>What's Included</h2>
			   	<div class="related-reports">
		        	<div class="col-sm-6">
			          	<ul class="list-of-wht-includes"><li><i class="fa fa-check" aria-hidden="true"></i>Market Size?</li>
				            <li><i class="fa fa-check" aria-hidden="true"></i>Key Geographies</li>
				            <li><i class="fa fa-check" aria-hidden="true"></i>Company Profiles</li>
				            <li><i class="fa fa-check" aria-hidden="true"></i>CAGR Between Forecast Period ?</li>
				            <li><i class="fa fa-check" aria-hidden="true"></i>Market Segmentation</li>
			          	</ul>
		          	</div>
			        <div class="col-sm-6">
			          	<ul class="list-of-wht-includes">
			          		<li><i class="fa fa-check" aria-hidden="true"></i>Market Opportunities</li>
			            	<li><i class="fa fa-check" aria-hidden="true"></i>Market Challenges</li>
			            	<li><i class="fa fa-check" aria-hidden="true"></i>Market Trend ?</li>
			          	</ul>
			      	</div>
		      	</div>
			</div>

			<div class="col-md-4">

				<div class="panel panel-default small_hide">

					<div class="panel-heading license">Select License</div>

					<div class="panel-body">

						<form action="https://www.reportsinsights.com/buynow/285557" method="post">


							<div class="form-check selectLicense">

								<input class="form-check-input" type="radio" name="ltype" id="exampleRadios1" value="opt1" checked><label class="form-check-label" for="exampleRadios1">Single User Licence : &nbsp;&nbsp;</label>

								<span class="text-right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;US$ &nbsp;3480</span>

							</div>

							<div class="form-check selectLicense">

								<input class="form-check-input" type="radio" name="ltype" id="exampleRadios1" value="opt2" checked><label class="form-check-label" for="exampleRadios1">Multi User Licence : &nbsp;&nbsp;</label>

								<span class="text-right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; US$ &nbsp;5200</span>

							</div>

							<div class="form-check selectLicense">

								<input class="form-check-input" type="radio" name="ltype" id="exampleRadios1" value="opt3" checked><label class="form-check-label" for="exampleRadios1">Corporate User Licence : &nbsp;</label>

								<span class="text-right">US$ &nbsp;6200</span>

							</div>

							<div class="text-center">

								<button type="submit" class="btn btn-danger btn-sm" id="buybtn"><i class="fa fa-shopping-cart"></i> Buy Now</button>
								<br><marquee style="color:#dc3545;font-size: 14px;font-weight: normal;padding: 10px 0px 0px;display: block;background:none" scrolldelay="20" direction="left"><span style="border:1px solid #0a5371;padding: 1px 6px;"><strong>Immediate Delivery Available</strong></span></marquee></div>

						</form>

						<div class="form-check text-left"> <img src="images/images-cards.png"></div>

					</div>

				</div>



				<div class="panel panel-default">

					<div class="panel-body">

						<div class="text-center"> <img src="images/images-right-icons.png"></div>

					</div>

				</div>

				<div class="panel panel-default">

					<div class="panel-heading license">Why Choose Us</div>

					<div class="panel-body">

						<div class="whyChooseUs">

							<div class="row row_border">

								<div class="col-md-2"> <img src="images/images-report1.png"></div>

								<div class="col-md-10 text-left">

									<h6>Guaranteed Success</h6>

									<p>We gather and analyze industry information to generate reports enriched with market data and consumer research that leads you to success.</p>

								</div>

							</div>

							<!--row-->

							<div class="row row_border">

								<div class="col-md-2"> <img src="images/images-Security.png"></div>

								<div class="col-md-10 text-left">

									<h6>Gain Instant Access </h6>

									<p>Without further ado, choose us and get instant access to crucial information to help you make the right decisions.</p>

								</div>

							</div>

							<!--row-->

							<div class="row row_border">

								<div class="col-md-2"> <img src="images/images-beste.png"></div>

								<div class="col-md-10 text-left">

									<h6> Best Estimation</h6>

									<p>We provide accurate research data with comparatively best prices in the market.</p>

								</div>

							</div>

							<!--row-->

							<div class="row row_border">

								<div class="col-md-2"> <img src="images/images-ServiceAsurance.png"></div>

								<div class="col-md-10 text-left">

									<h6>Discover Opportunities</h6>

									<p>With our solutions, you can discover the opportunities and challenges that will come your way in your market domain.</p>

								</div>

							</div>

							<!--row-->

							<div class="row row_border">

								<div class="col-md-2"> <img src="images/images-24x71.png"></div>

								<div class="col-md-10 text-left">

									<h6>Best Service Assured</h6>

									<p>Buy reports from our executives that best suits your need and helps you stay ahead of the competition.</p>

								</div>

							</div>

							<!--row--> 

						</div>

					</div>

				</div>

				<div class="panel panel-default">

					<div class="panel-heading license">Contact With Our Sales Team</div>

					<div class="panel-body">

						<div class="form-check selectLicense text-12">

							<p class="form-check-label" for="exampleRadios1"><i class="fa fa-phone"></i> : <a href="tel:+1-214-272-0234">(US) +1-214-272-0234</a></p>

							<p class="form-check-label" for="exampleRadios1"><i class="fa fa-phone"></i> : <a href="tel:+919257035703">(APAC) +91-73789-80300</a></p>

						</div>

						<div class="form-check text-12">

							<p class="form-check-label" for="exampleRadios1"><b>Email:</b> &nbsp; <a href="/cdn-cgi/l/email-protection#a7d4c6cbc2d4e7d5c2d7c8d5d3d4cec9d4cec0cfd3d489c4c8ca"><span class="__cf_email__" data-cfemail="96e5f7faf3e5d6e4f3e6f9e4e2e5fff8e5fff1fee2e5b8f5f9fb">[email&nbsp;protected]</span></a> </p>

						</div>

					</div>

				</div>

				<div class="panel panel-default">

					<div class="panel-heading license">Customer Testimonials</div>

					<div class="panel-body">

						<div id="testi" class="carousel slide" data-ride="carousel">

							<ol class="carousel-indicators">
								<li data-target="#testi" data-slide-to="0" class="active">

								</li>
								<li data-target="#testi" data-slide-to="1">

								</li>
								<li data-target="#testi" data-slide-to="2">

								</li>
							</ol>
							<div id="carouseltestiIndicators" class="carousel slide" data-ride="carousel">

								<ol class="carousel-indicators">
									<li data-target="#carouseltestiIndicators" data-slide-to="0" class="active">

									</li>
									<li data-target="#carouseltestiIndicators" data-slide-to="1">

									</li>
									<li data-target="#carouseltestiIndicators" data-slide-to="2">

									</li>
								</ol>
								<div class="carousel-inner">

									<div class="carousel-item active">

										<p class="testimonial">
											<i class="fa fa-quote-left" aria-hidden="true"></i>

											&nbsp; I am completely satisfied with the information given in the report. Report Insights is a value driven company just like us.&nbsp; <i class="fa fa-quote-right" aria-hidden="true"></i>
										</p>

										<p class="overview"><b>Privacy requested </b>, Managing Director</p>

									</div>

									<div class="carousel-item">

										<p class="testimonial"><i class="fa fa-quote-left" aria-hidden="true"></i>

											&nbsp; Reports Insights have understood our exact need and Delivered a solution for our requirements. Our experience with them has been fantastic.&nbsp; <i class="fa fa-quote-right" aria-hidden="true"></i>
										</p>

										<p class="overview"><b>Privacy requested</b>, President</p>

									</div>

									<div class="carousel-item">

										<p class="testimonial"><i class="fa fa-quote-left" aria-hidden="true"></i>

										&nbsp; Report of Reports Insight has given us the ability to compete with our competitors, every dollar we spend with Reports Insights is worth every penny Reports Insights have given us a robust solution.&nbsp; <i class="fa fa-quote-right" aria-hidden="true"></i></p>

										<p class="overview"><b>Privacy requested</b>, Development Manager</p>

									</div>

								</div>

								<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>

								<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="below-slideshow">
		<div class="container">
			<div class="row ourClient">
				<div class="col-md-2 text-center">
					<h3 class="section-title">Our Clients</h3>
				</div>
				<div class="col-md-10 clogos">
					<marquee behavior="SCROLL" onmouseover="this.stop();" onmouseout="this.start();" id="marq">
						<img src="images/images-abbott-logo_o.jpg" style="height: 64px;"><img src="images/images-SNF.jpg" style="height: 64px;">


						<img src="images/images-Panasonic_20Corporation_o.jpg" style="height: 64px;">
						<img src="images/images-WEH.jpg" style="height: 64px;">
						<img src="images/images-BASF.jpg" style="height: 64px;">
						<img src="images/images-Animal_20Care_20Group_o.jpg" style="height: 60px;">
						<img src="images/images-University_20of_20Fukui_o.png" style="height: 60px;">
						<img src="images/images-abbott-logo_o.jpg" style="height: 64px;"><img src="images/images-SNF.jpg" style="height: 64px;">


						<img src="images/images-Panasonic_20Corporation_o.jpg" style="height: 64px;">
						<img src="images/images-WEH.jpg" style="height: 64px;">
						<img src="images/images-BASF.jpg" style="height: 64px;">
						<img src="images/images-Animal_20Care_20Group_o.jpg" style="height: 60px;">
						<img src="images/images-University_20of_20Fukui_o.png" style="height: 60px;">
					</marquee>
				</div>
			</div>
		</div>
	</div>

<?php require_once('footer.php'); ?>


<script type="text/javascript">
	
	// common validate function
    function validate_fields(field, flag2){
        field_value = $('#'+field).val();
        if(field_value == ''){
            $('#'+field).addClass('error');
            flag = false;
        }else{
            flag = true;
            $('#'+field).removeClass('error');
        }
        return (flag2 == true) ? flag : false;
    }


   // enquiry form submittion
    $('#enquiryForm').submit( function(e){

        e.preventDefault();
        
        flag = true;
        var prefix = 'form_';

        var name = $('#'+prefix+'name').val();
        var email = $('#'+prefix+'email').val();
        var mobile = $('#'+prefix+'mobile').val();
        var designation = $('#'+prefix+'designation').val();
        var message = $('#'+prefix+'message').val();
        var country = $('#'+prefix+'country').val();


		subscription = ($('#' + prefix+'subscription').is(":checked")) ? "1" :'';


        form_data = { name : name, email : email, mobile : mobile, designation : designation, message : message, country : country, subscription : subscription };

        $('#'+prefix+'msg').html('').removeClass('alert text-danger text-success');
        $('#'+prefix+'submit').prop('disabled', true);

        var url = "<?php echo base_url(); ?>ajax_form.php";

        flag = validate_fields(prefix+'name', flag);
        flag = validate_fields(prefix+'mobile', flag);
        flag = validate_fields(prefix+'email', flag);
        flag = validate_fields(prefix+'designation', flag);
        flag = validate_fields(prefix+'message', flag);
        flag = validate_fields(prefix+'country', flag);

        if(flag == true){

            $.ajax({

                method: 'POST',
                dataType: "json",
                url: url,
                data: form_data,
                success: function(data){

                    console.log(data);

                    $('#'+prefix+'submit').prop('disabled', false);

                    if(data.code == "1"){

                        $('#'+prefix+'msg').html(data.desc).addClass('alert text-success');
                        // location.reload();

                    }else{

                        $('#'+prefix+'msg').html(data.desc).addClass('alert text-danger');
                    }
                },
                error: function(e){

                    $('#'+prefix+'submit').prop('disabled', false);
                    console.log(e);

                    $('#'+prefix+'msg').html('Server Error! Please try again...').addClass('alert text-danger');
                }
            });

        }else{
            
            msg = 'Kindly fill all mandatory fields!';
            $('#'+prefix+'submit').prop('disabled', false);
            console.log(e);

            $('#'+prefix+'msg').html(msg).addClass('alert text-danger');
        }

    });
</script>