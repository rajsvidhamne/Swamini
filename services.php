<?php
include ("header.php");
?>

<style>
@import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900,900italic);

body {
    font-family: 'Source Sans Pro', sans-serif;
    line-height: 1.5;
    color: #323232;
    font-size: 15px;
    font-weight: 400;
    text-rendering: optimizeLegibility;
    -webkit-font-smoothing: antialiased;
    -moz-font-smoothing: antialiased;
}
.heading-title {
    margin-bottom: 100px;
}
.text-center {
    text-align: center;
}
.heading-title h3 {
    margin-bottom: 0;
    letter-spacing: 2px;
    font-weight: normal;
}
.p-top-30 {
    padding-top: 30px;
}
.half-txt {
    width: 60%;
    margin: 0 auto;
    display: inline-block;
    line-height: 25px;
    color: #7e7e7e;
}
.text-weight{
	font-weight: bold;
}
.text-uppercase {
    text-transform: uppercase;
	
}

.team-member, .team-member .team-img {
    position: relative;
}
.team-member {
    overflow: hidden;
}
.team-member, .team-member .team-img {
    position: relative;
}

.team-hover {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    margin: 0;
    border: 20px solid rgba(0, 0, 0, 0.1);
    background-color: rgba(255, 255, 255, 0.90);
    opacity: 0;
    -webkit-transition: all 0.3s;
    transition: all 0.3s;
}
.team-member:hover .team-hover .desk {
    top: 35%;
}
.team-member:hover .team-hover, .team-member:hover .team-hover .desk, .team-member:hover .team-hover .s-link {
    opacity: 1;
}
.team-hover .desk {
    position: absolute;
    top: 0%;
    width: 100%;
    opacity: 0;
    -webkit-transform: translateY(-55%);
    -ms-transform: translateY(-55%);
    transform: translateY(-55%);
    -webkit-transition: all 0.3s 0.2s;
    transition: all 0.3s 0.2s;
    padding: 0 20px;
}
.desk, .desk h4, .team-hover .s-link a {
    text-align: center;
    color: #222;
}
.team-member:hover .team-hover .s-link {
    bottom: 10%;
}
.team-member:hover .team-hover, .team-member:hover .team-hover .desk, .team-member:hover .team-hover .s-link {
    opacity: 1;
}
.team-hover .s-link {
    position: absolute;
    bottom: 0;
    width: 100%;
    opacity: 0;
    text-align: center;
    -webkit-transform: translateY(45%);
    -ms-transform: translateY(45%);
    transform: translateY(45%);
    -webkit-transition: all 0.3s 0.2s;
    transition: all 0.3s 0.2s;
    font-size: 35px;
}
.desk, .desk h4, .team-hover .s-link a {
    text-align: center;
    color: #222;
}
.team-member .s-link a {
    margin: 0 10px;
    color: #333;
    font-size: 16px;
}
.team-title {
    position: static;
    padding: 20px 0;
    display: inline-block;
    letter-spacing: 2px;
    width: 100%;
}
.team-title h5 {
    margin-bottom: 0px;
    display: block;
    text-transform: uppercase;
}
.team-title span {
    font-size: 12px;
    text-transform: uppercase;
    color: #a5a5a5;
    letter-spacing: 1px;
}
</style>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
                    <div class="row">
                        <div class="heading-title text-center">
							<h4 class="p-top-30 half-txt">SWAMINI MAKEUP ARTIST </h4>
                            <h2 class="text-uppercase  ">Bridal Makeup and Destination Photoshoot Makeup </h2>
							
                            <p class="p-top-30 half-txt">Swamini is a bridal makeup artist from Satara. Here are the bridal makeup packages she offers for Satara based weddings and photoshoots. 
							To create a customised bridal package, you can call us directly.</p>
							<p class="p-top-30 hlf-txt">
							Bridal makeup is an amazing way of creating a flawless appearance on the day of the wedding. 
							The wedding involves many components beginning from the photos to the departure. 
							The Bridal packages in Satara are for obtaining bridal makeup services that are specifically for the wedding. 
							So the makeup will be able to meet the high demand. Our team will choose colours that would best complement your features and the output. 
							The team would be able to provide a cohesive appearance. Weddings are stressful and many things are involved. 
							The makeup artist bridal packages in Satara will help you. 
							The professionals would reduce the stress and help you.
							</p>
                        </div>

                        <div class="col-md-4 col-sm-4">
                            <div class="team-member">
                                <div class="team-img">
                                    <img src="images/w2.jpg" alt="team member" class="img-responsive">
                                </div>
                                <div class="team-hover">
                                    <div class="desk">
                                        <h4>PRE-WEDDING MAKEUP</h4>
                                        <p>Read More </p>
                                    </div>
                                    <div class="s-link">
									
										<a href="signup.php"><i class="fa fa-sort-down"></i></a>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="team-title">
                                <h5>PRE-WEDDING MAKEUP</h5>
                                <!--<span>5000/per makeup</span>-->
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="team-member">
                                <div class="team-img">
                                    <img src="images/m13.jpg" alt="team member" class="img-responsive">
                                </div>
                                <div class="team-hover">
                                    <div class="desk">
                                        <h4>BRIDAL MAKEUP</h4>
                                         <p>Read More </p>
                                    </div>
                                    <div class="s-link">
                                        <a href="signup.php"><i class="fa fa-sort-down"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-title">
                                <h5>BRIDAL MAKEUP</h5>
                                <!--<span> 5000/per makeup</span>-->
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="team-member">
                                <div class="team-img">
                                    <img src="images/o1.jpg" alt="team member" class="img-responsive">
                                </div>
                                <div class="team-hover">
                                    <div class="desk">
                                        <h4>PHOTOSHOOT MAKEUP</h4>
                                        <p>Read More </p>
                                    </div>
                                    <div class="s-link">
                                        <a href="signup.php"><i class="fa fa-sort-down"></i></a>
                                    </div>
                                </div>
                            </div>
                           <div class="team-title">
                                <h5>PHOTOSHOOT MAKEUP</h5>
                                 <!--<span> 5000/per makeup</span>-->
                            </div>
                        </div>
					
						
                    </div>
					    <div class="row">
                        

                        <div class="col-md-4 col-sm-4">
                            <div class="team-member">
                                <div class="team-img">
                                    <img src="images/n2.jpg" alt="team member" class="img-responsive">
                                </div>
                                <div class="team-hover">
                                    <div class="desk">
                                        <h4>PARTY MAKEUP</h4>
                                        <p>Read More </p>
                                    </div>
                                    <div class="s-link">
									
										<a href="signup.php"><i class="fa fa-sort-down"></i></a>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="team-title">
                                <h5>PARTY MAKEUP</h5>
                                <!--<span>5000/per makeup</span>-->
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="team-member">
                                <div class="team-img">
                                    <img src="images/m17.jpg" alt="team member" class="img-responsive">
                                </div>
                                <div class="team-hover">
                                    <div class="desk">
                                        <h4>BENGOLI MAKEUP</h4>
                                         <p>Read More </p>
                                    </div>
                                    <div class="s-link">
                                        <a href="signup.php"><i class="fa fa-sort-down"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-title">
                                <h5>BENGOLI MAKEUP</h5>
                                <!--<span> 5000/per makeup</span>-->
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4">
                            <div class="team-member">
                                <div class="team-img">
                                    <img src="images/m18.jpg" alt="team member" class="img-responsive">
                                </div>
                                <div class="team-hover">
                                    <div class="desk">
                                        <h4>Cocktail MAKEUP</h4>
                                         <p>Read More </p>
                                    </div>
                                    <div class="s-link">
                                        <a href="signup.php"><i class="fa fa-sort-down"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-title">
                                <h5>Cocktail MAKEUP</h5>
                                <!--<span> 5000/per makeup</span>-->
                            </div>
                        </div>
                        
					
						
                    </div>

</div>
<!--<div class="container">
<b><h2>LOCAL BRIDAL MAKEUP IN SATARA</h2></b>
<h3>This includes</h3>
<ul>

<li>HD or Airbrush Makeup by swamin herself.</li>
<li>Any contemporary or traditional bridal hairstyle</li>
<li>Eye lashes</li>
<li>Coloured Eye Lenses</li>
<li>Bridal hair accessories required for wedding hairstyle</li>
<li>Real flowers</li>
<li>Travel to venue, if required.</li>
<li>Basic jewellery</li>
<li>Saree or lehenga draping</li>
<li>Kundan Jewellery</li>
<ul>
</div>-->
<?php
include ("footer1.php");
?>