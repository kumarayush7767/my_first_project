
 <head>
       <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
       <link rel="stylesheet" type="text/css" href="../css/new.css"/>
       <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
        <script>
     $(document).ready(function(){
 
        
        $("#stuactlink").click(function()
            {
                stuact();
            });
        $("#1styearlink").click(function()
            {
                styear();
            });
        $("#antilink").click(function()
            {
                antirag()
            });
        $("#societieslink").click(function()
            {
                society();
            });
        $("#festlink").click(function()
            {
               techfest();
            });
        $("#otheractlink").click(function()
            {
                stuexc();
            });
            
         stuact()     
});    
    function stuact()
    {
        
                $("#new_full_about").load('../php/studentact.php');
                $("#new_vmenu ul li").css('background','#224E90');
                $("#new_head").text('Student Activities & Sports');
                $("#stuactlink").css('background','#6fa6f9');
    }
    function styear()
    {
        
                $("#new_full_about").load('../php/first_year.php');
                $("#new_vmenu ul li").css('background','#224E90');
                $("#new_head").text('Welcome! 1st Year');
                $("#1styearlink").css('background','#6fa6f9');
    }
    function antirag()
    {
        
                $("#new_full_about").load('../php/anti_ragging.php');
                $("#new_vmenu ul li").css('background','#224E90');
                $("#new_head").text('Anti Ragging Committee');
                $("#antilink").css('background','#6fa6f9');
    }
    function society()
    {
        
                $("#new_full_about").load('../php/society.php');
                $("#new_vmenu ul li").css('background','#224E90');
                $("#new_head").text('Societies');
                $("#societieslink").css('background','#6fa6f9');
    }
    function techfest()
    {
         
                $("#new_full_about").load('../php/techfest.php');
                $("#new_vmenu ul li").css('background','#224E90');
                $("#new_head").text('CORONA(Tech Fest)');
                $("#festlink").css('background','#6fa6f9');
    }
    function stuexc()
    {
        
                $("#new_full_about").load('../php/stuexc.php');
                $("#new_vmenu ul li").css('background','#224E90');
                $("#new_head").text('Student Exchange');
                $("#otheractlink").css('background','#6fa6f9');
    }
    </script>
   </head>
   
    <head>
        <title>NIT Patna</title>
        <link rel="shortcut icon" href="../images/icon.png"/>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="../css/1350_25_col.css"/>
        <link rel="stylesheet" type="text/css" href="../css/index.css"/>
        <link rel="stylesheet" type="text/css" href="../css/menu.css"/>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
        <script src="../js/notice.js" type="text/javascript"></script>
		<script src="http://jgateplus.com/cdn/js/search.js"></script>
		
   </head>
    <body>
        <div class="container_25">
        <div class="grid_25" id="header" id="top">
       
       <div class="grid_24" id="header_div" style="text-align:right;">
           <div class="head_link">
		   <a href="../uploads/ORG_CHART_NITP.pdf">Organization Chart</a> | 
		    <a href="http://www.nitp.ac.in/php/course_structure.php">Course Structure</a> | 
            <a href="http://mail.google.com/a/nitp.ac.in" >Web Mail</a> |
            <a href="contactus.php" >Contact Us</a> |
           <a href="gallerynew.php">Gallery</a> 
           
		   <!--<a href="http://nitp.ac.in/hindi">Hindi Site</a>-->
           </div>
           
       </div>

</div>
        <div class="grid_25" id="banner">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="../css/banner.css"/>
    </head>
    <body>
        <div class="banner_div">
        <div class="grid_3"><img src="../images/nitlogo.png" id="logo"/></div>
        <div class="grid_10" id="eng" style="font-size:1.4em; margin-top:-4px;"><img src="../images/nithindi.png" style="width:60%; height:50%;"/><br>
             &nbsp;NATIONAL INSTITUTE OF TECHNOLOGY &nbsp;PATNA</div>
        <div class="grid_5" id="banabt" >An Institute of National Importance<br>under Ministry of Education(Shiksha Mantralaya), Government of India</div>
        </div>
    </body>

</div>
        <div class="grid_25" id="menu"><head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title></title>
      <link rel="stylesheet" type="text/css" href="../css/menu.css"/>
      <script src="../js/menu.js" type="text/javascript"></script>

  </head>
  <body>
      <div class="grid_24">
          <ul id="menu_bar">
                  <li><a href="home.php">Home</a>
				  <ul>
                           <li><a href="../uploads/PAN_NITP.pdf">PAN Card</a></li>
						   <li><a href="../uploads/GST_NITP.pdf">GST certificate</a></li>
						   <li><a href="../uploads/rti_faa.pdf">RTI </a></li>
                 </ul>
				 </li>
                  <li><a href="about_nitp.php?pp=about" >About Us</a>
                      <ul>
                           <li><a href="about_nitp.php?pp=about">About</a></li>
                           <li><a href="about_nitp.php?pp=vision">Vision</a></li>
                           <li><a href="about_nitp.php?pp=mission">Mission</a></li>
                           <li><a href="about_nitp.php?pp=values">Values</a></li>
                           <li><a href="about_nitp.php?pp=campus">Campus</a></li>
                      </ul>
                  </li>
                  <li><a href="admin_nitp.php?pp=director">Administration</a>
                      <ul>
						  <li><a href="admin_nitp.php?pp=director">Director</a></li>
						  <li><a href="admin_nitp.php?pp=dydirector">Deputy Director</a></li>
                          <li><a href="admin_nitp.php?pp=admin">Administration</a></li>
						  <li><a href="admin_nitp.php?pp=dean">Deans</a></li>
                          <li><a href="admin_nitp.php?pp=bog">BOG</a></li>
                          <li><a href="admin_nitp.php?pp=bwc">BWC</a></li>
						  <li><a href="admin_nitp.php?pp=idc">IDC</a></li>
                          <li><a href="admin_nitp.php?pp=finance">Finance Committee</a></li>
                          <li><a href="admin_nitp.php?pp=senate">Senate</a></li>
                          <li><a href="admin_nitp.php?pp=service">Service Units</a></li>
                      </ul>
                  </li>
                  <li><a href="academics.php">Academics</a>
                  <ul>
				      <li><a href="../uploads/Result of Interview.pdf">Recruitments</a></li>
				      <li><a href="Regulation_Curricula.php">Regulation & Curricula</a></li>
					  <li><a href="course_structure.php">Course Structure</a></li>
                      <li><a href="academics.php?pp=acadnot">Academic Notices</a></li>
					  <li><a href="academics.php?pp=admission">Admissions</a></li>
                      <li><a href="academics.php?pp=programme">Programmes</a></li>
                      <li><a href="Academic_Calender.php">Academic Calender</a></li>
                      <li><a href="../uploads/Fee_Structure_All.pdf">Fee Structure(2018-19)</a></li>
                      <li><a href="../uploads20/Fee Structure_UG_PG_Ph.D.pdf">Fee Structure(2020-21)</a></li>
					  <!--<li><a href="https://goo.gl/it4A21">Time Table</a></li> -->
					  <li><a href="academics.php?pp=Format">Format for Offcial Documents</a></li>
                    <!--  <li><a href="academics.php?pp=result">Results</a></li> -->
                  </ul>
                      </li>
                  <li><a href="departments.php">Departments</a>
                      <ul>
                           <li><a href="archi_dept.php">Architecture</a></li>
                           <li><a href="civil_dept.php">Civil&nbsp;Engineering</a></li>
                           <li><a href="cse_dept.php">Computer&nbsp;Science&nbsp;And&nbsp;Engineering</a></li>
                           <li><a href="ele_dept.php">Electrical&nbsp;Engineering</a></li>
                           <li><a href="ece_dept.php">Electronics&nbsp;And&nbsp;Communication</a></li>
                           <li><a href="mech_dept.php">Mechanical&nbsp;Engineering</a></li>
                           <li><a href="phy_dept.php">Physics</a></li>
                           <li><a href="math_dept.php">Mathematics</a></li>
                           <li><a href="chem_dept.php">Chemistry</a></li>
                           <li><a href="ssh_dept.php">Humanities & Social Sciences</a></li>
                      </ul>
                  </li>


                  <li><a href="facilities.php?pp=cc" >Facilities</a>
                      <ul>
                          <li><a href="facilities.php?pp=cc">Computer Centre</a></li>
                            <li><a href="facilities.php?pp=clib">Central Library</a></li>
                            <li><a href="facilities.php?pp=medical">Medical Facilities</a></li>
                            <li><a href="facilities.php?pp=sport">Sports Facilities</a></li>
                            <li><a href="facilities.php?pp=sac">SAC</a></li>
                            <li ><a href="facilities.php?pp=hostel">Hostels and Mess</a></li>
                            <li><a href="facilities.php?pp=lab">Laboratories</a></li>
                            <li><a href="facilities.php?pp=wifi">Wi Fi</a></li>
                            <li><a href="facilities.php?pp=bank">Banking</a></li>
                            <li><a href="facilities.php?pp=security">Security</a></li>
							<li><a href="facilities.php?pp=w_cell">Women Cell</a></li>
                            <li><a href="facilities.php?pp=scholarship">Scholarship</a></li>
							<li><a href="facilities.php?pp=concession">Concessions</a></li>
							<li><a href="facilities.php?pp=emu">EMU</a></li>
						<!--	<li><a href="facilities.php?pp=concession">MIS Cell</a></li> -->


                      </ul>
                  </li>

                  <li><a href="students_nitp.php?pp=stuact" >Students</a>
                      <ul>
                          <li><a href="students_nitp.php?pp=stuact">Student Activities</a></li>
                   <li><a href="students_nitp.php?pp=styear">1st Year Students</a></li>
                   <li><a href="students_nitp.php?pp=antirag">Anti Ragging</a></li>
                   <li><a href="students_nitp.php?pp=society">Societies</a></li>
                   <li><a href="students_nitp.php?pp=techfest">Tech Fest</a></li>
                   <li><a href="students_nitp.php?pp=stuexc">Student Exchange</a></li>
				   <li><a href="..\uploads\Faculty_Advisor_first_year.pdf">Faculty Advisor (First Year Students)</a></li>
                      </ul>
                  </li>

                  <li><a href="placement_home.php?pp=home">Placements</a>
                    <ul>
                        <li><a href="placement_home.php?pp=dirmsg">Director Message</a></li>
                        <li><a href="placement_home.php?pp=tpomsg">TPO Message</a></li>
                        <li><a href="placement_home.php?pp=company">Our Recruiters</a></li>
                        <li><a href="placement_home.php?pp=recplac">Recent Placements</a></li>
                        <li><a href="placement_home.php?pp=placnotice">Placement Notices</a></li>
                    </ul>
                  </li>

                  <li><a href="http://www.nitp.ac.in/alumni/html/index.html">Alumni</a></li>

				   <li><a href="./digital_initiatives.php">DIONITP</a></li>
				   <li><a href="#">I-Card</a>
                    <ul>
                        <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSedy0aZLXXj709zQjAejWvLQOs4_6ESIciPe0IV199kMr_D1g/viewform?usp=sf_link" target="_blank">Employee I-Card</a></li>
                        <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSc5_x34TMtQdMaW2Ad9Nvsmz1N8YXdAGJHtAM5kn3a850Ekyw/viewform?usp=sf_link" target="_blank">Student I-Card</a></li>

                    </ul>
                  </li>
                 <li style="width:30px;"><div><head>
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript"> 
$(document).ready(function(){
$(".flip").mouseenter(function(){
    $(".searchbar").show("fast");
  });
  $(".flip").mouseleave(function(){
    $(".searchbar").hide("fast");
  });
});

</script>
 
<style type="text/css"> 
div.searchbar
{
margin:0px;
padding:5px;
text-align:center;
background:white;
border:solid 1px #c3c3c3;
display:none;
height: 60px;
width:160px;
color: black;
}
div.flip{position: relative;width:120px;
z-index:1;}
#tab{
    width: 150px;
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    border-radius: 4px;
    background: #fff;
    border: solid 1px grey;
    color: #555;
    padding: 4px;
    font-size: 15px;
}
#searchbox
{
	padding: 6px 10px;
	color: #fff;
	font-size: 14px;
	background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#a4d04a), to(#459300));
	text-shadow: #050505 0 -1px 0;
	background-color: #459300;
	-moz-border-radius: 4px;
        -webkit-border-radius: 4px;
	border-radius: 4px;
	border: solid 1px transparent;
	font-weight: bold;
	cursor: pointer;
	letter-spacing: 1px;
}
			
#searchbox:hover 
{
	background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#a4d04a), to(#a4d04a), color-stop(80%, #76b226));
	text-shadow: #050505 0 -1px 2px;
	background-color: #a4d04a;
	color: #fff;
}
</style>
</head>
 
<body>
<div class="flip"><img src="../images/search.png" style="width:30px;margin-top:4px"/>
<div class="searchbar">
        <form method="get" action="http://www.google.com/search" target="_new">
                    <input type="text" id="tab"name="q" placeholder="Search the site">
                    <input type="hidden" name="sitesearch" value="nitp.ac.in" /><br>
                    <input type="submit" name='submit' value="Search" id="searchbox"/>
                    
                   
                    </form>
</div>
 

</div>
</body>




</div></li>




              </ul>
      </div>
  </body>
</div>
        <div class="grid_25" id="mbody">   <body>
       <div class="grid_25" id="new_back">
           <div class="grid_4" id="new_vmenu">
               <ul>
                   <li id="stuactlink">Student Activities</li>
                   <li id="1styearlink">1st Year Students</li>                
                   <li id="antilink">Anti Ragging</li>
                   <li id="societieslink">Societies</li>
                   <li id="festlink">Tech Fest</li>
                   <li id="otheractlink">Student Exchange</li>
               </ul>
           </div>
           <div class="grid_21" id="new_home">
               <div id="new_head">Student Activities & Sports</div>
               
                <div class="grid_20" id="new_full_about" >
                    
                </div>
            </div>
           </div>           
   </body>
   </div>
        <div class="grid_25" id="footer">
		
	
		
		<div class="grid_6" id="foot_div">
            <div class="foot_link">
            <p id="foot_title">Contact</p>
            <hr>
            <a>National Institute of Technology Patna</a><br/>
            <a>Patna, Bihar (800005), India</a><br/>
            <a>Phone: +91-0612-237 1715 / 237 2715</a><br/>
            <a>FAX : +91-0612-2670631 , 0612-2660480</a><br/>
             
            </div>
        </div>
        
        <div class="grid_4" id="foot_div">
            <div class="foot_link">
            <p id="foot_title">Know Us</p>
            <hr>
            <a href="./sitemap.php">Sitemap</a><br/>
            <a href="./dir_desk.php">Director's Desk</a><br/>
            <a href="howtoreach.php">How to Reach</a><br/>
			<a href="./NIRF.php">NIRF</a><br/>
            <a href='./rti.php'>RTI</a><br/>
			<a href="../uploads/ORG_CHART_NITP.pdf">Organization Chart</a>
            
            </div>
        </div>
       
	   
	   
        
        <div class="grid_4" id="foot_div">
            <div class='foot_link'>
                
                
                <p id='foot_title'>Other Links</p>
                <hr>
                
                <a href='./implinks.php'>Important Links</a><br/>
                <a href="./officeorder.php">BOG/FC/BWC Minutes</a>
                <a href="./senatemins.php">Senate Minutes</a><br/>
				<a href="./annual_report.php">Annual Reports</a><br/>
				<a href="./downloads/Grievance Cell Constituted by Council of NITs.pdf">Grievance Cell </a><br/>
				<a href="./nit_act.php">NIT Act and Statutes</a><br/>
				
            </div>
        </div>
		
		 <div class="grid_4" id="foot_div">
            <div class='foot_link'>
                
                
                <p id='foot_title'>Extra Links</p>
                <hr>
            <a href="img/digitalmap.jpg" target="_blank">Digital Map of NIT Patna</a><br/> 
                <a href='./privacy.php'>Privacy Policy</a><br/>
              <a href='./refund-policy.php'>Refund Rules</a><br/>
               <a href='./termsofuse.php'>Terms of Use</a><br/>
			   <a href='./staffclaim_form.php'>Staff Claim Form</a><br/>
			   <a href='addprofile.php'>Faculty Login</a><br/>
			   
            </div>
        </div>
		
		
        <div class="grid_3" id="social">
            <a href="http://www.facebook.com/nitpatnaofficial" target="_blank"><div id="fb"></div></a>
            <a href="https://plus.google.com/communities/101561880444961186830" target="_blank"><div id="gplus"></div></a>
        </div>
        <div class='grid_25'>
            <hr>
            <p id='web'>National Institute of Technology,Patna-800005,Bihar,INDIA<br/> 
            <a href='./webteam.php' id='webteam'>&copy; 2015 NIT Patna</a></p>
        </div>
        </div>
    </body>
</html>
