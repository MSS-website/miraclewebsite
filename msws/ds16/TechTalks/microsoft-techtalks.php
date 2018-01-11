<!-- 
/* ******************************************************************************
*
* Project : The Digital Valley Summit V1
*
* Date    : October10,2016
*
* Author  : Corporate Applicaiton Support Team<hubble@miraclesoft.com>
*
* File    : Agenda.php
*
* Copyright 2016 Miracle Software Systems, Inc. All rights reserved.
* MIRACLE SOFTWARE PROPRIETARY/CONFIDENTIAL. Use is subject to license terms.
*
* *****************************************************************************
*/
-->
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
			<meta name="viewport"    content="width=device-width, initial-scale=1.0">
				<meta name="description" content="">
					<meta name="author"      content="Shankar">
						<meta content="miraclesoft, education,  industry,  IT,industries, " name="keywords"/>
						<link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
							<link rel="icon" href="" type="image/x-icon">
								<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" />
								<link rel="stylesheet" href="../includes/css/font-awsome.min.css" type="text/css" />
								<link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
									<title>Microsoft TechTalks | Digital Summit</title>
									<?php include '../context.php'; ?>
									<style>

 .current_tab_techtalks >  a{
                color:#53bce8 !important;
            }
            .current_tab_microsoft {
                color:#53bce8 !important;
            }
.session-break  b{

margin-left:16px;
}

.description{
padding: 2% 0;
}


.jumbotron {
background: #00A79B !important;
color: #FFF;
border-radius: 0px;
}


.box {
border-radius: 3px;
box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
padding: 10px 25px;
text-align: right;
display: block;
margin-top: 60px;
}
.box-icon {
background-color: #57a544;
border-radius: 50%;
display: table;
height: 100px;
margin: 0 auto;
width: 100px;
margin-top: -61px;
}
.box-icon span {
color: #fff;
display: table-cell;
text-align: center;
vertical-align: middle;
}
.info h4 {
font-size: 26px;
letter-spacing: 2px;
text-transform: uppercase;
}
.info > p {
color: #717171;
font-size: 16px;
padding-top: 10px;
text-align: justify;
}
.info > a {
background-color: #03a9f4;
border-radius: 2px;
box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
color: #fff;
transition: all 0.5s ease 0s;
}
.info > a:hover {
background-color: #0288d1;
box-shadow: 0 2px 3px 0 rgba(0, 0, 0, 0.16), 0 2px 5px 0 rgba(0, 0, 0, 0.12);
color: #fff;
transition: all 0.5s ease 0s;
}

.wpb_alert p:last-child, #content .wpb_alert p:last-child, .wpb_text_column p:last-child, .wpb_text_column *:last-child, #content .wpb_text_column p:last-child, #content .wpb_text_column *:last-child, .wpb_toggle_content p:last-child {
margin-bottom: 0;
}

.alignleft {
float: left;
margin: 5px 30px 10px 0;
}

img.alignleft {
border-radius: 50%;
height: 90px;
width: 90px;
border: 3px solid #00a79b;
}

h4 {
color: #000;
font-size: 15px;
padding: 10px 0 0;
}

h5 {
color: inherit;
font-size: 14px;
}


.active-read-more-btn::before {
content: ">";
font-size: 16px;
line-height: 0.9;
background: #189ac6 none repeat scroll 0 0;
border-radius: 50%;
color: #fff;

display: inline-block;
font-size: 14px;
height: 14px;
line-height: 1;
margin: 0 5px 0 0;
text-align: center;
width: 14px;
}

.time_strip{
background: #e7e7e7 none repeat scroll 0 0;
border-radius: 4px;
color: #000;
font-size: 15px;
padding: 12px;
text-align: center;

} 



.align-center {
text-align: center;
}
.hash-list {
display: block;
padding: 0;
margin: 0 auto;
}

@media (min-width: 768px){
.hash-list.cols-3 > li:nth-last-child(-n+3) {
border-bottom: none;
}
}
@media (min-width: 768px){
.hash-list.cols-3 > li {
width: 33.3333%;
}
}
.hash-list > li {
display: block;
float: left;
/*                border-right: 1px solid rgba(0, 0, 0, 0.2);
border-bottom: 1px solid rgba(0, 0, 0, 0.2);*/
}
.pad-30, .pad-30-all > * {
padding: 30px;
}
.mgb-20{
width: 100px;
height: 100px;
border-radius:50%;
border: 3px solid #00aae7;
}
.mgb-20, .mgb-20-all > * {
margin-bottom: 20px;
}
.wpx-100, .wpx-100-after:after {
width: 100px;
}
.img-round, .img-rel-round {
border-radius: 50%;
}
.padb-30, .padb-30-all > * {
padding-bottom: 30px;
}
.mgb-40, .mgb-40-all > * {
margin-bottom: 40px;
}
.align-center {
text-align: center;
}
[class*="line-b"] {
position: relative;
padding-bottom: 20px;
border-color: #E6AF2A;
}
.fg-text-d, .fg-hov-text-d:hover, .fg-active-text-d.active {
color: #222;
}
.font-cond-b {font-weight: 700 !important;}

.parallax{
background-image:url('../images/schedule/tech-talk-header.png');
background-attachment:fixed;
background-size:cover;
background-position:center;
}
.methodText{
text-align: justify !important;
}
.blue-text{
color:#00aae7 !important;
}
.greyback1{
background-color:#eee;
padding:10px 15px;
color:#000;
}

.nomargintop{
margin-top:-15px !important;
}


</style>
</head>
<?php include '../header.php'; ?>
<body class="home">
<section class="parallax">
	<div class="overlay">
		<div class="container">
			<div class="row"  style="margin-top:40px; margin-bottom:45px;">
				<div class="col-sm-6 text-left">
					<h1 style="color:#fff">
						<strong>Microsoft TechTalks</strong>
					</h1>
				</div>
				<div class="col-sm-6 text-right">
					<ul class="breadcrumb pull-right">
						<li>
							<a href="../">
								<font color="#fff">Home</font>
							</a>
						</li>
						<li class="active">
							<font color="#fff">Microsoft TechTalks</font>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="container">
	<div class="row" >
		<div class="col-sm-12">
			<p class="methodText">
				<br>It was a special Wednesday at <strong>Digital Summit 2016</strong> and we had very special speakers from our partner, Microsoft. <strong>Microsoft TechTalks</strong> helped us to have some exposure on <strong>DevOps and Cloud</strong>. There were few keynote sessions from students, professionals and experts as well. The attendees have also experienced the revolution of technology at <strong>Digital Summit 2016 Andhra Pradesh</strong>. 
			</p>
			</div>
		</div>
		<!--<div class="row">
			<div class="col-sm-12">
				<center>
					<a href="../registration.php" >
						<button type="button" class="btn btn-info col-sm-12">Register for the Summit today!</button>
					</a>
				</center>
			</div>
		</div> -->
		<div class="row">
			
			<br>
				<div class="col-sm-4">
					<center>
						<img src="../images/schedule/date_DS.png" height="100px" width="100px"></img>
						<h4 class="blue-text">
							<strong>December 14th, 2016</strong>
						</h4>
					</center>
				</div>
				<div class="col-sm-4">
					<center>
						<img src="../images/schedule/place_DS.png" height="100px" width="100px"></img>
						<h4 class="blue-text">
							<strong>AU Convocation Hall</strong>
						</h4>
					</center>
				</div>
				<div class="col-sm-4">
					<center>
						<img src="../images/schedule/time_DS.png" height="100px" width="100px"></img>
						<h4 class="blue-text">
							<strong>9 AM to 8 PM IST</strong>
						</h4>
					</center>
				</div>
			</div>
			<div class="row session-heading">
				<div class="col-sm-12"></div>
			</div>
			<div class="row">
				<div class="col-sm-3">
					<h5 class="time_strip">
						<strong> 9:00AM&ndash;10:00AM </strong>
					</h5>
				</div>
				<div class="col-sm-9">
					<div class="session-details col-sm-12" style="border:0">
						<br>
							<h4>
								<strong>Keynote – Connected, Cloud and Cognitive</strong>
							</h4>
						</div>
					</div>
				</div>
				<div class="row session-heading-g">
					<div class="col-sm-12"></div>
				</div>
				<div class="row">
					<div class="col-sm-3">
						<h5 class="time_strip">
							<strong> 10:00AM&ndash;11:30AM </strong>
						</h5>
					</div>
					<div class="col-sm-9">
						<div class="session-details col-sm-12" style="border:0">
							<br>
								<h4>
									<strong>The fundamentals of DevOps with Microsoft Azure</strong>
								</h4>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-3"></div>
						<div class="col-sm-6">
							<p class="methodText"><strong>DevOps</strong> has become one of the hottest and most talked about paradigm during last few years with the advent and widespread adoption of cloud. Cloud has changed the way applications and environments are provisioned, configured, deployed and developed. The entire application lifecycle process has and is undergoing changes. CIO’s and enterprises are trying to understand how DevOps can help them with being more agile and flexible and the onus is on us to provide the right strategy and implementations to these enterprises on DevOps. DevOps is built on top of few principles and suggests few practices. In this session, the speaker explained us about the details of these principles and practices and saw how automation can help us achieve higher agility and flexibility in deploying and configuring environments and applications. The different choices of tools, utilities and services for automating these principles and practices including open source were discussed in the next session. </p>
						</div>
						<div class="col-sm-3">
							<center>
								<img data-toggle="modal" data-target="#myModal" src="../images/schedule/Ritesh-modi.png" class="wpx-100   mgb-20" title="" alt="" data-edit="false" data-editor="field" data-field="src[Image Path]; title[Image Title]; alt[Image Alternate Text]">
									<h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false">
										<strong>Ritesh Modi</strong>
									</h5>
									<h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false">Sr. Technical Evangelist</h5>
									<h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false">Microsoft</h5>
								</center>
							</div>
							<!-- Modal--->
							<div class="modal fade" id="myModal" role="dialog">
								<div class="modal-dialog">
									<!-- Modal content-->
									<div class="modal-content">
										<div class="modal-header greyback1">
											<h4 class="modal-title">
												<strong>Ritesh Modi</strong>
											</h4>
										</div>
										<div class="modal-body ">
											<div class="row">
												<div class="col-sm-8">
													<p class="methodText">Ritesh Modi is an architect and senior Technical Evangelist with Microsoft ] having 14+ years of experience in industry. He’s an expert on Azure, DevOps, Automation, PowerShell, SharePoint, SQL Server and System Center. He recently co-authored a book titled “Introducing Windows Server 2016 technical Preview” along with Windows Server team. He is also involved in creating large IP like automation library and cloudburst. He has spoken at multiple national and international conferences including TechEd and PowerShell Asia conference, does lots of internal training and is a published author for MSDN magazine. He has more than a decade of experience in building and deploying enterprise solutions for customers. He blogs at <a href="http://automationnext.wordpress.com">http://automationnext.wordpress.com</a> and can be followed on Twitter <i>@automationnext</i>.</p>
												</div>
												<div class="col-sm-4">
													<center>
													<img src="../images/schedule/Ritesh-modi.png" class="wpx-100   mgb-20" title="" alt="" data-edit="false" data-editor="field" data-field="src[Image Path]; title[Image Title]; alt[Image Alternate Text]">
														<h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false">Sr. Technical Evangelist</h5>
														<h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false">Microsoft</h5>
													</center>
													</div>
												</div>
											</div>
											<div class="modal-footer nomargintop">
												<button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<!--Modal End-->
							</div>
							<div class="row session-heading-g">
								<div class="col-sm-12"></div>
							</div>
							<div class="row">
								<div class="col-sm-3">
									<h5 class="time_strip">
										<strong> 11:30AM&ndash;1:00PM </strong>
									</h5>
								</div>
								<div class="col-sm-6">
									<div class="session-details col-sm-12" style="border:0">
										<br>
											<h4>
												<strong>Leveraging Azure IoT for Business Innovation</strong>
											</h4>
											<br>
											<p class="methodText">The <strong>Internet of Things (IoT)</strong> is a key building block for digital business. Every organization wish to be ahead of the curve by the virtue of Product and Process Innovation. Today with the help of IoT and Cloud - one can not only collect the data but can make it intelligent by applying Predictive Analytics and cognitive services for Business innovation. </p>
										</div>
									</div>
							
									<div class="col-sm-3">
									    <center>
											<img data-toggle="modal" data-target="#myModal1" src="../images/schedule/Prabhajhot-singh.png" class="wpx-100   mgb-20" title="" alt="" data-edit="false" data-editor="field" data-field="src[Image Path]; title[Image Title]; alt[Image Alternate Text]">
												<h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false">
													<strong>Prabhjot Singh Bakshi</strong>
												</h5>
												<h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false">Regional Director and Azure MVP</h5>
												<h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false">Microsoft</h5>
											</center>
									</div>
								
									
									</div>
									
										<!-- Modal--->
										<div class="modal fade" id="myModal1" role="dialog">
											<div class="modal-dialog">
												<!-- Modal content-->
												<div class="modal-content">
													<div class="modal-header greyback1">
														<h4 class="modal-title">
															<strong>Prabhjot Singh Bakshi</strong>
														</h4>
													</div>
													<div class="modal-body ">
														<div class="row">
															<div class="col-sm-8">
																<p class="methodText">Prabhjot Singh Bakshi has been extensively working with the country's top Accelerators & Incubators. He closely works with CEOs of start-ups in creating awareness & educating them on their Azure Journey starting from enrolling for Bizspark program. He has been instrumental in driving the Azure adoption in the start-up ecosystem. As a Microsoft certified Trainer Alumni with strong community connect, he has built a strong working relationship with Microsoft. For his work and contribution towards Community he has been awarded and recognized as Microsoft Most Valuable Professional on Azure.</p>
															</div>
															<div class="col-sm-4">
																<center>
																<img src="../images/schedule/Prabhajhot-singh.png" class="wpx-100   mgb-20" title="" alt="" data-edit="false" data-editor="field" data-field="src[Image Path]; title[Image Title]; alt[Image Alternate Text]">
																	<h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false">Regional Director and Azure MVP</h5>
																	<h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false">Microsoft</h5>
															</center>
																</div>
															</div>
														</div>
														<div class="modal-footer nomargintop">
															<button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
														</div>
													</div>
												</div>
											</div>
											<!--Modal End-->
									
										<!---lunch--->
										<div class="row session-heading-g">
											<div class="col-sm-12"></div>
										</div>
										<div class="row">
											<div class="col-sm-3">
												<h5 class="time_strip">
													<strong> 1:00PM&ndash;2:00PM </strong>
												</h5>
											</div>
											<div class="col-sm-9">
												<div class="session-details col-sm-12" style="border:0">
													<br>
														<h4>
															<strong>Lunch Break  </strong>
														</h4>
													</div>
												</div>
											</div>
											<div class="row session-heading-g">
												<div class="col-sm-12"></div>
											</div>
											<div class="row">
												<div class="col-sm-3">
													<h5 class="time_strip">
														<strong> 02:00PM&ndash;3:30PM </strong>
													</h5>
												</div>
												<div class="col-sm-9">
													<div class="session-details col-sm-12" style="border:0">
														<br>
															<h4>
																<strong>Understanding Containers – Past, Present and Future</strong>
															</h4>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-3"></div>
													<div class="col-sm-6">
														<p class="methodText">Containers have been there for long and quite ubiquitous in Linux world. They are part of core Linux kernel. They were adopted but the real adoption started with the advent of Docker. Docker make containers accessible to developers, operations and to the enterprises. So much so, Windows Server 2016 has recently launched and it brings along with it some revolutionary paradigm features that will change the way environment and applications are deployed, managed and operated in windows world. Containers are one among them. Containers have swept the entire industry and is one of the hottest buzzword. Every CIO wants to hear about containers and how they can help in making their applications more agile, flexible and reduce their cost of operations and availability. In this session, We understood the evolution of Containers. The tools and services available from Service providers, vendors and partners. Furthermore, how containers are changing the face of DevOps were also discussed in this session.</p>
													</div>
													<div class="col-sm-3">
														<center>
															<img data-toggle="modal" data-target="#myModal2" src="../images/schedule/Ritesh-modi.png" class="wpx-100   mgb-20" title="" alt="" data-edit="false" data-editor="field" data-field="src[Image Path]; title[Image Title]; alt[Image Alternate Text]">
																<h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false">
																	<strong>Ritesh Modi</strong>
																</h5>
																<h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false">Sr. Technical Evangelist</h5>
																<h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false">Microsoft</h5>
															</center>
														</div>
														<!-- Modal--->
														<div class="modal fade" id="myModal2" role="dialog">
															<div class="modal-dialog">
																<!-- Modal content-->
																<div class="modal-content">
																	<div class="modal-header greyback1">
																		<h4 class="modal-title">
																			<strong>Ritesh Modi</strong>
																		</h4>
																	</div>
																	<div class="modal-body">
																		<div class="row">
																			<div class="col-sm-8">
																			<p class="methodText">Ritesh Modi is an architect and senior Technical Evangelist with Microsoft ] having 14+ years of experience in industry. He’s an expert on Azure, DevOps, Automation, PowerShell, SharePoint, SQL Server and System Center. He recently co-authored a book titled “Introducing Windows Server 2016 technical Preview” along with Windows Server team. He is also involved in creating large IP like automation library and cloudburst. He has spoken at multiple national and international conferences including TechEd and PowerShell Asia conference, does lots of internal training and is a published author for MSDN magazine. He has more than a decade of experience in building and deploying enterprise solutions for customers. He blogs at <a href="http://automationnext.wordpress.com">http://automationnext.wordpress.com</a> and can be followed on Twitter <i>@automationnext</i>.</p>
																			</div>
																			<div class="col-sm-4">
																				<center>
																					<img src="../images/schedule/Ritesh-modi.png" class="wpx-100   mgb-20" title="" alt="" data-edit="false" data-editor="field" data-field="src[Image Path]; title[Image Title]; alt[Image Alternate Text]">
																						<h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false">Sr. Technical Evangelist</h5>
																						<h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false">Microsoft</h5>
																					</center>
																				</div>
																			</div>
																		</div>
																		<div class="modal-footer nomargintop">
																			<button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
																		</div>
																	</div>
																</div>
															</div>
															<!--Modal End-->
														</div>
														
														<div class="row session-heading-g">
																		<div class="col-sm-12"></div>
																	</div>
																	<div class="row">
																		<div class="col-sm-3">
																			<h5 class="time_strip">
																				<strong>03:30PM&ndash;03:45PM </strong>
																			</h5>
																		</div>
																		<div class="col-sm-9">
																			<div class="session-details col-sm-12" style="border:0">
																				<br>
																					<h4>
																						<strong>Stretch Your Legs Break</strong>
																					</h4>
																				</div>
																			</div>
																		</div>
														
														
														
														<div class="row session-heading-g">
															<div class="col-sm-12"></div>
														</div>
														<div class="row">
															<div class="col-sm-3">
																<h5 class="time_strip">
																	<strong>03:45PM&ndash;05:15PM </strong>
																</h5>
															</div>
															<div class="col-sm-9">
																<div class="session-details col-sm-12" style="border:0">
																	<br>
																		<h4>
																			<strong>Building an Intelligent Bot using Microsoft BOT Framework and Cognitive Service</strong>
																		</h4>
																	</div>
																</div>
															</div>
															<div class="row">
																<div class="col-sm-3"></div>
																<div class="col-sm-6">
																	<p class="methodText">The Microsoft Bot Framework offers everything that you need to build, connect, and deploy your bots to your users. In this session, the attendees have learnt how to start building a bot, how to use Bot builder and more over how to make bot smart and intelligent by adding skills with natural language processing. They also covered how a Bot can interact with custom developed applications and finally, they have learnt how to publish and register the Bot and get connected with their users where they are.</p>
																</div>
																<div class="col-sm-3">
																	<center>
																		<img data-toggle="modal" data-target="#myModal3" src="../images/schedule/abhijit.jpg" class="wpx-100   mgb-20" title="" alt="" data-edit="false" data-editor="field" data-field="src[Image Path]; title[Image Title]; alt[Image Alternate Text]">
																			<h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false">
																				<strong>Abhijit Jana</strong>
																			</h5>
																			<h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false">Emerging Capabilities – HoloLens</h5>
																			<h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false">Microsoft(Former MVP)</h5>
																		</center>
																	</div>
																
																		<!--Modal End-->
																	</div>
																	
                                                                                
                                                                                                                                              <!-- modal start -->
                                                                                                                                              <div class="modal fade" id="myModal3" role="dialog">
															<div class="modal-dialog">
																<!-- Modal content-->
																<div class="modal-content">
																	<div class="modal-header greyback1">
																		<h4 class="modal-title">
																			<strong>Abhijit Jana</strong>
																		</h4>
																	</div>
																	<div class="modal-body">
																		<div class="row">
																			<div class="col-sm-8">
																			<p class="methodText">Abhijit Jana works as a consultant at Microsoft. He is responsible for adopting and delivering world class solution with N+1 technologies, where he mainly leads the engagements on Universal Windows Platforms, Microsoft Azure, IoT, Cross Platform, Devices Apps development and HoloLens. </p>
																			<p class="methodText">Apart from being a former Microsoft MVP (Most Valuable Professional), he is a Speaker, and author, as well as an avid Technology Evangelist. He has delivered sessions at prestigious Microsoft events like Tech Ready, TechED, Web Camps, Azure Camps, Community Tech Days, Virtual Tech Days and various developer conferences. He has authored the book "Kinect for Windows SDK Programming Guide”.</p>
																			</div>
																			<div class="col-sm-4">
																				<center>
																					<img src="../images/schedule/abhijit.jpg" class="wpx-100   mgb-20" title="" alt="" data-edit="false" data-editor="field" data-field="src[Image Path]; title[Image Title]; alt[Image Alternate Text]">
																						<h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false">Emerging Capabilities – HoloLens</h5>
																						<h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false">Microsoft(Former MVP)</h5>
																					</center>
																				</div>
																			</div>
																		</div>
																		<div class="modal-footer nomargintop">
																			<button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
																		</div>
																	</div>
																</div>
															</div>
															<!--Modal End-->
                                                                                
                                                                                
                                                                                                                                            
																		<!--- 415 to 5.30--->
			
			
			
																						<!--Modal End-->
																				
																					<div class="row session-heading-g">
																						<div class="col-sm-12"></div>
																					</div>
																					<div class="row">
																						<div class="col-sm-3">
																							<h5 class="time_strip">
																								<strong>05:15PM&ndash;05:30PM </strong>
																							</h5>
																						</div>
																						<div class="col-sm-9">
																							<div class="session-details col-sm-12" style="border:0">
																								<br>
																									<h4>
																										<strong>Keynote – Looking forward for tomorrow 

																																				
																											<i class="em em-blush"></i>
																										</strong>
																									</h4>
																								</div>
																							</div>
																						</div>
																						<div class="row session-heading-g">
																							<div class="col-sm-12"></div>
																						</div>
																						<div class="row">
																							<div class="col-sm-3">
																								<h5 class="time_strip">
																									<strong>06:00PM&ndash;08:00PM </strong>
																								</h5>
																							</div>
																							<div class="col-sm-9">
                                                                                              <div class="session-details col-sm-12" style="border:0">
                                                                                                <br> <a href="../schedule/culturals.php"><h4><strong>Hungama@Digital Summit ’16 Day #2</strong></h4></a> 
                                                                                              
                                                                                         </div>
                                                                                         </div>
																							</div>
																								<br>
																						</div>
																				
														<div class="uparrow" id="uparrow">
															<i class="fa fa-3x fa-angle-up" aria-hidden="true"></i>
														</div>
														<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
														<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
														<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
														<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.4/waypoints.min.js"></script>
																							<script>
$(document).ready(function () {
$(function () {
$('.item').matchHeight();
});

// fade in and fade out
$(function () {
$(window).scroll(function () {
if ($(this).scrollTop() > 50) {
$('#uparrow').fadeIn();
} else {
$('#uparrow').fadeOut();
}
});

// scroll body to 0px on click
$('#uparrow').click(function () {
$('body,html').animate({
scrollTop: 0
}, 800);
return false;
});
});

});
</script>
																							<?php include '../footer.php'; ?>
																						</body>
																					</html>
