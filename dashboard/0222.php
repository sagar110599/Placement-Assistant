<?php 
error_reporting(0);
 include('includes/header.php');
 include('includes/navbar.php');
 include('db.php');
 ?>
<?php 
$primary_key="";

if(isset($_SESSION['username'])){
    $primary_key = $_SESSION['username'];
}
//$primary_key="vatsal.pathak@somaiya.edu";
    
    
    
    
    
    {
        
        if($connection)
        {

        $out1="";
        $out2="";
        $q="select * from `technical_skills` where Email='$primary_key'";
           
        $qrun=mysqli_query($connection,$q);
        if(mysqli_num_rows($qrun)>0){
            while($row1=mysqli_fetch_array($qrun))
            {
                $dept=$row1['skillinfo'];
                $out1.=' <div>	<br><hr style="height:2px;border-width:100%;color:gray;background-color:gray">	<div class="input-group control-group after-add-more"> <span  class="col-md-5 col-sm-5 col-xs-5"><input type="text" name="skillinfo[]" id="skillinfo" class="form-control" placeholder="Enter your skills" value="'.$row1['skillinfo'].'" required/></span><label for="skilltype">Select Skill type:&nbsp</label><select class="form-control" id="skilltype" name="skilltype"><option <?php if($dept=="Design skills"){ echo htmlspecialchars("selected");} ?>>Design skills</option><option <?php if($dept=="Programming skills"){ echo htmlspecialchars("selected");} ?>>Programming skills</option><option <?php if($dept=="Web skills"){ echo htmlspecialchars("selected");} ?>>Web skills</option><option <?php if($dept=="Others"){ echo htmlspecialchars("selected");} ?>>Others</option></select></div><div id="error1" name="error1[]" style="color:#f23a3a;" ><?php// echo $error1; ?></div><br><div class="input-group control-group after-add-more " ><span  class="col-md-5 col-sm-5 col-xs-5"><input type="number" min="1" max="10" name="skilllvl[]" value="'.$row1['skilllvl'].'"  id="skilllvl" class="form-control" placeholder="Enter skill level" >&emsp;&emsp;*(Skill level range [1 - 10])</span><div id="error2" name="error2[]" style="color:#f23a3a;" ><?php// echo $error2; ?>&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn ovrdbtn btn-outline-danger remove_field_1" type="button"><i class="fa fa-minus" style="font-size:20px"></i></button></div></div></div>';
                


                }
        }

        $q="select * from `certified courses` where Email='$primary_key'";

        $qrun=mysqli_query($connection,$q);
        if(mysqli_num_rows($qrun)>0){
            while($row2=mysqli_fetch_array($qrun)){
                $out2.='	    <div><br><hr style="height:2px;border-width:100%;color:gray;background-color:gray"><div class="input-group control-group after-add-more">							<input type="text" name="coursettl[]" id="coursettl" value="'.$row2['coursettl'].'" class="form-control" placeholder="Title">    </div>                        <div id="error3" name="error3[]" style="color:#f23a3a;padding-left:20px;margin:0px;padding-bottom:0px;padding-top:0px;" ><?php// echo $error2; ?></div>                       <br>					<div class="input-group control-group after-add-more">							<textarea name="coursedsc[]" id="coursedsc" class="form-control" placeholder="Description" value="" rows="4" cols="20">'.$row2['coursedsc'].'</textarea>					</div>  <br>				<div class="input-group control-group after-add-more">							Upload Certificate:  &nbsp;<input type="file" id="coursect" value="'.$row2['coursect'].'" class="form-control" name="coursect[]">&nbsp;&nbsp; <button class="btn ovrdbtn btn-outline-danger remove_field_2" type="button"><i class="fa fa-minus" style="font-size:20px"></i></button>                           </div> <div id="error4" name="error4[]" style="color:#f23a3a;padding-left:20px;" ><?php// echo $error2; ?></div></div>&nbsp;&nbsp;'; //add input box
        }
        }	
            }


}




    
?>
  <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block">Profile</a>
 <?php include('includes/navbarend.php'); ?>
    <!-- Header -->
<!DOCTYPE html>
<meta charset = "UTF-8" />
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-image: url(../assets/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <h1 class="display-2 text-white">Hello Jesse</h1>
            <p class="text-white mt-0 mb-5">This is your profile page. You can see the progress you've made with your work and manage your projects or assigned tasks</p>
            <a href="#!" class="btn btn-info">profile Picture</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
      <div class="row">
        
        <div class="col-xl-12 order-xl-1">
          <div class="card bg-secondary shadow">
            <div class="container">
        <!-- Navigation -->

        
      <div class="py-5 text-center">
        <legend>Skills and Certifications</legend>
      </div>

<div class="row justify-content-xl-center">

        <div class="col-md-8 order-md-1">
         
           
          <form class="needs-validation cst-bclass" id ="qwerq" method="post" action="data_fetch.php" enctype="multipart/form-data"  novalidate>
            


				<hr style="height:2px;border-width:0;color:gray;background-color:gray">
                
 				<div class="form-group ">
					<label class="control-label col-md-3 col-sm-3 col-xs-3" for="unq478"><b>Technical Skills</b></label>
                    <div class="col-md-12 col-sm-12 col-xs-12 input_fields_wrap_1" id="unq478">
                        <?php global $out1;echo $out1; ?>
                        </div>
                    <br>
                        

                           <div class="input-group-btn" width=20px> 
								<button class="btn btn-outline-success ovrdbtn add_field_button_1" type="button"><i class="fa fa-plus"style="font-size:20px"></i>
                                </button>
				            </div>
			    </div>
              <br>
              <hr style="height:2px;border-width:0;color:gray;background-color:gray">
              
               	<div class="form-group ">
					<label class="control-label col-md-4 col-sm-4 col-xs-4" for="unq421"><b>Certified Courses</b></label>
					<div class="col-md-9 col-sm-9 col-xs-9 input_fields_wrap_2" id="unq421">
                        <?php global $out2;echo $out2; ?>
                        

					</div>
                    <br>
                            <div class="input-group-btn" width=20px> 
								&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-outline-success ovrdbtn add_field_button_2" type="button"><i class="fa fa-plus"style="font-size:20px"></i>
                                </button>
							</div>
			    </div>
              
              
                <hr style="height:2px;border-width:0;color:gray;background-color:gray">
              
              

		        <div class="form-group">
					<div class="col-md-6 col-sm-6 col-xs-6 col-md-offset-3 col-sm-offset-3 col-xs-offset-3 text-center">
						<button type="submit" class="btn btn-outline-primary btn-block submit" name="submit_skills"  value="submit">Submit</button>
					</div>
				</div>
          </form>
               
        </div>
      </div>



</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="C:\Users\Administrator\Desktop\form\template\bootstrap-4.3.1-dist\js" ></script>
        <script src="form-validation.js"></script>
          </div>
        </div>
      </div>
  
        
        
        
        
        
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      
      
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
      
      
      <script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
      
      <script src="form-validation.js"></script>
      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      
      <script type="text/javascript">
$(document).ready(function() {
	var max_fields_1     = 25; //maximum input boxes allowed
	var wrapper_1   		= $(".input_fields_wrap_1"); //Fields wrapper
	var add_button_1      = $(".add_field_button_1"); //Add button ID
	
	var x1 = 1; //initlal text box count
	$(add_button_1).click(function(e){ //on add input button click
		e.preventDefault();
		if(x1 < max_fields_1){ //max input box allowed
			x1++; //text box increment
			$(wrapper_1).append('			<div>	<br><hr style="height:2px;border-width:100%;color:gray;background-color:gray">	<div class="input-group control-group after-add-more"> <span  class="col-md-5 col-sm-5 col-xs-5"><input type="text" name="skillinfo[]" id="skillinfo" class="form-control" placeholder="Enter your skills" required/></span><label for="skilltype">Select Skill type:&nbsp</label><select class="form-control" id="skilltype" name="skilltype"><option>Design skills</option><option>Programming skills</option><option>Web skills</option><option>Others</option></select></div><div id="error1" name="error1[]" style="color:#f23a3a;" ><?php// echo $error1; ?></div><br><div class="input-group control-group after-add-more " ><span  class="col-md-5 col-sm-5 col-xs-5"><input type="number" min="1" max="10" name="skilllvl[]"  id="skilllvl" class="form-control" placeholder="Enter skill level" >&emsp;&emsp;*(Skill level range [1 - 10])</span><div id="error2" name="error2[]" style="color:#f23a3a;" ><?php// echo $error2; ?>&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn ovrdbtn btn-outline-danger remove_field_1" type="button"><i class="fa fa-minus" style="font-size:20px"></i></button></div></div></div>'); //add input box
		}
	});
	
	$(wrapper_1).on("click",".remove_field_1", function(e){ //user click on remove text
		e.preventDefault(); $(this).parent().parent().parent('div').remove(); x1--;
	})


	var max_fields_2     = 25; //maximum input boxes allowed
	var wrapper_2   		= $(".input_fields_wrap_2"); //Fields wrapper
	var add_button_2      = $(".add_field_button_2"); //Add button ID
	
	var x2 = 1; //initlal text box count
	$(add_button_2).click(function(e){ //on add input button click
		e.preventDefault();
		if(x2 < max_fields_2){ //max input box allowed
			x2++; //text box increment
			$(wrapper_2).append('    <div><br><hr style="height:2px;border-width:100%;color:gray;background-color:gray"><div class="input-group control-group after-add-more">							<input type="text" name="coursettl[]" id="coursettl" class="form-control" placeholder="Title">    </div>                        <div id="error3" name="error3[]" style="color:#f23a3a;padding-left:20px;margin:0px;padding-bottom:0px;padding-top:0px;" ><?php// echo $error2; ?></div>                       <br>					<div class="input-group control-group after-add-more">							<textarea name="coursedsc[]" id="coursedsc" class="form-control" placeholder="Description" rows="4" cols="20"></textarea>					</div>  <br>				<div class="input-group control-group after-add-more">							Upload Certificate:  &nbsp;<input type="file" id="coursect"  class="form-control" name="coursect[]">&nbsp;&nbsp; <button class="btn ovrdbtn btn-outline-danger remove_field_2" type="button"><i class="fa fa-minus" style="font-size:20px"></i></button>                           </div> <div id="error4" name="error4[]" style="color:#f23a3a;padding-left:20px;" ><?php// echo $error2; ?></div></div>&nbsp;&nbsp;'); //add input box
		}
	});
	

    
    
	$(wrapper_2).on("click",".remove_field_2", function(e){ //user click on remove text
		e.preventDefault(); $(this).parent().parent('div').remove(); x2--;
	})
    
    
          $("#qwerq").submit(function (e){
             var check=0;
              $('input[name="skillinfo[]"]').each(function() {
                 
                if($(this).val()=="")
                    {
                        
                        var error="";
                        check=1;
                      error+= "<p style=\" padding-left: 40px;margin:0px;padding-bottom:0px;padding-top:0px;\" >*Enter your skill </p>";
               
                        $(this).parent().parent().parent().find("#error1").html('<span style="color:#f23a3a;margin:0px;padding-bottom:0px;padding-top:0px;" class="alert " role="alert">'+error+'</span>');

                    }
                  else
                    { 
                        
                        $(this).parent().parent().parent().find("#error1").empty();
                    }
            });
              $('input[name="skilllvl[]"]').each(function() {
                  
                if($(this).val()=="")
                    {
                        
                        var error="";

                        check=1;
                        error+= "<p >*Skill level required.&ensp;</p>";
                        $("#error2").html('<span style="color:#f23a3a;" class="alert " role="alert">'+error+'</span>');
               
                        $(this).parent().parent().find("#error2").html('<span style="color:#f23a3a;" class="alert " role="alert">'+error+'</span>');

                    }
                  else
                    { 
                       
                        $(this).parent().parent().find("#error2").empty();
                    }
            });
              
              $('input[name="coursettl[]"]').each(function() {
                  
                if($(this).val()=="")
                    {
                        
                        var error="";
                    //  check=1;
                        check=1;
                        error+= "<p style=\"margin:0px;padding-bottom:0px;padding-top:0px;\">*Title is required.</p>";
                        //$("#error3").html('<span style="color:#f23a3a;margin:0px;padding-bottom:0px;padding-top:0px;" class="alert " role="alert">'+error+'</span>');
               
                        $(this).parent().parent().find("#error3").html('<span style="color:#f23a3a;" class="alert " role="alert">'+error+'</span>');

                    }
                  else
                    { 
                       
                        $(this).parent().parent().find("#error3").empty();
                    }
            });
              
              $('input[name="coursect[]"]').each(function() {
                  
                if($(this).val()=="")
                    {
                        
                        var error="";
                    //  check=1;
                        check=1;
                        error+= "<p style=\"margin:0px;padding-bottom:0px;padding-top:0px;\">*Course Certificate is required.</p>";
                       // $("#error4").html('<span style="color:#f23a3a;margin:0px;padding-bottom:0px;padding-top:0px;" class="alert " role="alert">'+error+'</span>');
               
                        $(this).parent().parent().find("#error4").html('<span style="color:#f23a3a;" class="alert " role="alert">'+error+'</span>');

                    }
                  else
                    { 
                       
                        $(this).parent().parent().find("#error4").empty();
                    }
            });
              
              
              if(check!=1)
              {
                   $("#qwerq").submit();
              }
              else if(check==1)
              {
                  return false;
              }
              
              
              
              
          
          });
            
      });
        
  
    
    

      </script>
  <?php 
 //include('includes/script.php');
 include('includes/footer.php');
 ?>