<!--sidebar other menu css work starts here-->
<style>
.list-group.panel > .list-group-item {
  border-bottom-right-radius: 4px;
  border-bottom-left-radius: 4px
}
</style>
<!--sidebar other menu css work ends here-->

<!--email function for right side enquiry section starts here-->
<?php
//if(isset($_GET['mod']) && $_GET['do']!='dpp'){
error_reporting(false);
	if($_POST['names'])
	{
		 $names = $_REQUEST['names'];
		 $mob = $_REQUEST['mob'];
		 $email = $_REQUEST['email'];
		 $msg = $_REQUEST['msg'];

		$to = "rajverma827@gmail.com";
		$from =  $email;

		$subject = "You Got Enquiry via IASE BIKANER WEBSITE";
		$description  ='<table width="70%" border="0" cellpadding="5" cellspacing="5" align="center" style="border:1px solid #0CF;">
		<tr style="background:#00CCCC; height:70px; color:#fff;font-weight:bold;font-size:24px;font-family:Arial, Helvetica, sans-serif;"><th colspan="2">ENQUIRY FROM IASE BIKANER PAGE</th></tr>
		<tr><td colspan="2">Hi, <br /> You Have Received An Enquiry...</td></tr>
		<tr style="height:40px;"><th align="justify" style="background:#0CC; width:35%;">Name</td>
        <td style="background:#ccc;">'.ucfirst($names).'</th></tr>
		<tr style="height:40px;"><th align="justify" style="background:#0CC; width:35%;">Email</th>
        <td style="background:#ccc;">'.$email.'</td></tr>
		<tr style="height:40px;"><th align="justify" style="background:#0CC; width:35%;">Contact no</th>
        <td style="background:#ccc;">'.$mob.'</td></tr>
		<tr style="height:40px;"><th align="justify" style="background:#0CC; width:35%;">Message</th>
        <td style="background:#ccc;">'.ucfirst($msg).'</td></tr>
		<tr>
		<td align="left" colspan="2">Thank You!<br />
		</td>
		</tr>
		<?php echo $result["photo"];?>
		</table>';
		$headers = "From:".$from;
		$semi_rand = md5(time());
		$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
		// Add the headers for a file attachment
		$headers .= "\nMIME-Version: 1.0\n" .
		"Content-Type: multipart/mixed;\n" .
		" boundary=\"{$mime_boundary}\"";
		// Add a multipart boundary above the plain message
		$message = "This is a multi-part message in MIME format.\n\n" .
		"--{$mime_boundary}\n" .
		"Content-Type: text/html; charset='iso-8859-1'\"\n" .
		"Content-Transfer-Encoding: 7bit\n\n  " .
		$description. "\n\n";

		$ok = @mail($to, $subject,$message,$headers);
?>
<script>
location.href="thanku_enquiry.php"
</script>
<?php
		}
?>
<!--email function for right side enquiry section ends here-->

</div>
</div>
<!--container area end-->
<!--right side area start-->
        <div class="col-lg-4">
        	<div class="col-lg-12">
    	<p class="active1 table_style" style="line-height:50px;">Latest News</p>

        <div class="panel panel-danger">
           <ul class="list-group" style="padding:15px; line-height:30px;">
             	<marquee direction="up" onMouseOver="stop()" onMouseOut="start()" scrollamount="2" style=" height:150px;">
                <li>&radic; <a href="#" target="_blank">No news at present</a> <img src="images/newicon.gif" /></li>
                </marquee>
           </ul>
       </div>
    </div>
    
    <div class="col-lg-12">
    	<p class="active1 table_style" style="line-height:50px;">Other Menus</p>
		
        <!--sidebar other menu css work starts here-->
        <div class="container-fluid">
  
  <div class="row">
    <div class="col-md-12 col-lg-12">
      
      <!-- menu -->
      <div id="MainMenu">
        <div class="list-group panel">
          <a href="#" class="list-group-item list-group-item-success" data-parent="#MainMenu">Achievements</a>
          <a href="index.php?mod=facilities&do=facilities" class="list-group-item list-group-item-success" data-parent="#MainMenu">Facitilities</a>
          <a href="#" class="list-group-item list-group-item-success" data-parent="#MainMenu">Infrastructure</a>
          <a href="#" class="list-group-item list-group-item-success" data-parent="#MainMenu">News & Updates</a>
          <a href="index.php?mod=guide&do=guide" class="list-group-item list-group-item-success" data-parent="#MainMenu">Ph.D Guide List</a>
          
          <a href="#demo4" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">National Workshops <span class="caret"></span></a>
          <div class="collapse" id="demo4">
            <a href="" class="list-group-item">National Workshop 2016</a>
            <a href="" class="list-group-item">National Workshop 2017</a>
            <a href="" class="list-group-item">National Workshop 2018</a>
          </div>
          
          
          <a href="#" class="list-group-item list-group-item-success" data-parent="#MainMenu">Publications</a>
          <a href="pdf/iase_brochure.pdf" target="_blank" class="list-group-item list-group-item-success" data-parent="#MainMenu">Downloads</a>
          <a href="#" class="list-group-item list-group-item-success" data-parent="#MainMenu">Important Notice</a>
          <a href="#" class="list-group-item list-group-item-success" data-parent="#MainMenu">In-Service Teacher Education Programme</a>
          
          

        </div>
      </div>
    </div>
  </div>
    
</div>
<!--sidebar other menu css work ends here-->
    
    </div>
    
    <h6>&nbsp;</h6>
    <div class="col-lg-12">
    	<p class="active1 table_style" style="line-height:50px;">Follow Us On :</p>

        <a href="https://www.facebook.com/" target="_blank" title="facebook"><img src="images/social_media/facebook.png" height="50" width="50" /></a> &nbsp;
        <a href="https://www.twitter.com/" target="_blank" title="twitter"><img src="images/social_media/twitter.png" height="50" width="50" /></a> &nbsp;
        <a href="https://api.whatsapp.com/send?phone=+9413305456&text=Hi, I contacted you Through your website." class="social-icon whatsapp" title="Whatsapp Me"><img src="images/social_media/whatsapp.png" height="50" width="50" /></a> &nbsp;
        <a href="mailto:iasebkn@gmail.com" title="Mail Us"><img src="images/social_media/gmail.png" height="50" width="50" /></a> &nbsp;
        <a href="https://www.youtube.com/" target="_blank" title="you tube"><img src="images/social_media/youtube.png" height="50" width="50" /></a>
    </div>
    
    <h6>&nbsp;</h6>
            
            <div class="col-lg-12">
      <p class="active1 table_style" style="line-height:50px;">Quick Enquiry</p>

      <form role="form" class="form-vertical" name="contact_form" action="" method="post" enctype="multipart/form-data">
        <div class="form-group" align="justify">
          <label for="names">YOUR NAME</label>
          <input type="text" class="form-control" id="names" name="names" required />
        </div>
        <div class="form-group" align="justify">
          <label for="mob">YOUR MOBILE NO.</label>
          <input type="text" class="form-control" id="mob" name="mob" pattern=".{10}" maxlength="10" required onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" />
        </div>
        <div class="form-group" align="justify">
          <label for="email">YOUR EMAIL</label>
          <input type="email" class="form-control" id="email" name="email" />
        </div>
        <div class="form-group" align="justify">
          <label for="msg">MESSAGE</label>
          <textarea class="form-control" rows="3" id="msg" name="msg" required></textarea>
        </div>
        <button type="submit" name="send" id="send" class="btn btn-danger btn-sm btn-block" style="font-family:'Century Gothic'; font-size:14px; font-weight:bold;">SEND ENQUIRY</button>
      </form>
    </div>

    
    <h6>&nbsp;</h6>
    <div class="col-lg-12 col-xs-12" style="text-align:center;">
    	<div class="col-lg-6 col-xs-12 col-sm-12"><img src="images/harikishan_principal.jpeg" width="100" height="120" class="logo-hover" /><p>Mr. Harikishan</p><p>(Principal)</p></div>
    	<div class="col-lg-6"><img src="images/ghanshyam_jaat_professor.jpeg" width="100" height="120" class="logo-hover" /><p>Mr. Ghanshyam</p><p>(Professor)</p></div>
        <!--<div class="col-lg-4"><img src="images/pna.jpg" width="100" height="120" class="logo-hover" /><p>Person 3</p><p>(Designation)</p></div>-->
    </div>
    

        </div>
        <!--right side area end-->
	</div>
</div>
<!--center end-->
