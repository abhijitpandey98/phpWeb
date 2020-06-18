<!DOCTYPE html>
<html>
<head>
   <title>Register Page</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
   <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
   <link rel="stylesheet" type="text/css" href="CSS3/Style.css">
</head>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script>
  $.validate({
    lang: 'es'
  });
</script>
<style type="text/css">
 
 #notice {
 
            font-size:14px;
            color:pink;
            padding:1.1%;
        }
.body{
         background:#212529;
     }  
 
 kbd{
      display:inline-block; 
      color:white;
      background:#138496;
      border-radius:222px;
   }
 #small{
  font-size:16px;
 }
 
</style>

<script type="text/javascript">
  $(document).ready(function(){
     $("#container2nd").hide();
     $("#container3rd").hide();
     $(".next2").hide();
     $(".next3").hide();
     $(".back2").hide();
     $(".back3").hide();
  
  $(".next1").click(function(){
       
       $(".next1").hide();
       $("#container3rd").hide();
       $("#container1st").slideUp(1000).delay(111);
       $("#container2nd").slideDown(1000);
       $(".next2").show();
       $(".back2").show();
       
  });

  $(".next2").click(function(){
       
       $(".next2").hide();
       $(".back2").hide();
       $("#container1st").hide();
       $("#container2nd").slideUp(1000).delay(1111);
       $("#container3rd").slideDown(1000);
       $(".next3").show();
       $(".back3").show();
       
  });

  $(".back2").click(function(){

        $(".next2").hide();
        $(".back2").hide();
        $("#container2nd").slideUp(1000).delay(1111);
        $("#container1st").slideDown(1000);
        $(".next1").show();
  });

  $(".back3").click(function(){

        $(".next3").hide();
        $(".back3").hide();
        $("#container3rd").slideUp(1000).delay(1111);
        $("#container2nd").slideDown(1000);
        $(".next2").show();
        $(".back2").show();
  });

  });
</script>


<body class="body" style=" font-family:'Lato',sans-serif; font-size:17px ; width:100% ; position:absolute ;height: auto"> 
 <!-- MultiStep Form -->
     
 <div class="container" style="position: absolute;">
  <div class="row">
   <div class="col-xs-10 col-sm-10 col-md-10 col-lg-8 col-xl-8 offset-lg-1 offset-lg-2 offset-md-1 offset-xl-2 offset-xs-1 offset-sm-1">
     <form method="POST" action="FormProcessing.php">
         <div class="card border-info body" style="margin-top:3.5vw" id="container1st">
            <div class="card-header bg-info" style="color:rgb(0,0,0);padding: 7%"><h2 style="color:#141667"><i class="fa fa-user"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Personal Details</h2></div>
            <div class="card-body" >
              <table class="table" >
                <tr>
                  <td colspan="3" style="border:none;padding-top:6.2%;padding:2.5%"><input class="lined" type="text" name="fname" placeholder="First Name" spellcheck="false" data-validation="length alphanumeric" data-validation-length="min4"></td>
                </tr>
                <tr>
                  <td colspan="3" style="border:none; padding:2.5%"><input class="lined" type="text" name="lname" placeholder="Last Name" spellcheck="false" data-validation="length alphanumeric" data-validation-length="min4"></td>  
                </tr>
                <tr>
                  <td colspan="3" style="border:none; padding:2.5%"> <input class="lined" type="text" name="father_name" placeholder="Father Name" spellcheck="false" data-validation="length alphanumeric" data-validation-length="min4"></td> 
                </tr>
                <tr>
                  <td colspan="3" style="border:none ; padding:2.5% "><input class="lined" type="text" name="mother_name" placeholder="Mother Name" spellcheck="false"data-validation="length alphanumeric" data-validation-length="min4"></td>
                </tr>
                <tr>
                  <td  colspan="3" style="border:none ; padding:2.5% "><input class="lined" type="text" name="uin" placeholder="Student UIN    eg. 136P076" spellcheck="false"></td>
                </tr>
                <tr>
                  <td colspan="3" style="border:none ; padding:2.5% ">
                   <input class="lined" type="text" name="paddress" placeholder="Parmenant address" spellcheck="false">
                  </td>
                </tr>
                <tr>
                  <td colspan="3" style="border:none ; padding:2.5% ">
                   <input class="lined" type="number" name="parmenant_pin_code" placeholder="ZIP Code" spellcheck="false">
                  </td>
                </tr>
                <tr>
                  <td style="border:none ; padding-left:2.5% ; padding-top:2.5% ; padding-bottom:0% " colspan="3"><label style="color:grey" id="small">&nbsp;&nbsp;Select your Religion</label></td>
                </tr>
                <tr>
                  <td style="border:none; padding-bottom:2.5%; padding-top:1.8% ; padding-left:2.5%" colspan="3">
                    <select class="lined" name="religion" style="background:#212529;">
                      <option value="Hinduism">Hinduism</option>
                      <option value="jainism">Jainism</option>
                      <option value="Islam">Islam</option>
                      <option value="Christianity">Christianity</option>
                      <option value="Buddhism">Buddhism</option>
                      <option value="Sikhism">Sikhism</option>
                      <option value="Zoroastrianism">Zoroastrianism</option>
                      <option value="Judaism">Judaism</option>
                     </select>
                  </td>
                </tr>
                <tr>
                  <td style="border:none ; padding-left:2.5% ; padding-top:2.5% ; padding-bottom:0% " colspan="3"><label style="color:grey" id="small">&nbsp;&nbsp;Select your Blood Group</label></td>
                </tr>
                <tr>
                  <td style="border:none ; padding-bottom:2.5%; padding-top:1.8% ; padding-left:2.5%" colspan="3">
                    <select class="lined" name="blood_group" style="background:#212529;">
                      <option value="NIL">NIL</option>
                      <option value="A+">A+</option>
                      <option value="A-">A-</option>
                      <option value="AB+">AB+</option>
                      <option value="AB-">AB-</option>
                      <option value="B+">B+</option>
                      <option value="B-">B-</option>
                      <option value="O+">O+</option>
                      <option value="O-">O-</option>
                     </select>
                  </td>
                </tr>
                <tr>
                  <td style="border:none ; padding-left:2.5% ; padding-top:2.5% ; padding-bottom:0% " colspan="3"><label style="color:grey" id="small">&nbsp;&nbsp;Date Of Birth</label></td>
                </tr>
                <tr>
                  <td style="border:none ; padding-left:2.5% ; padding-top:1.8% ; padding-bottom:2.5%" colspan="3">
                    <input type="date" class="lined" name="dob" style="background:#212529;">
                  </td>
                </tr>
                 <tr>
                  <td  style="border:none ; padding:2.5%"><label style="color:grey" id="small">&nbsp;&nbsp;Gender :</label></td>
                  <td  style="border:none ; padding:2.5%"><input type="radio" name="gender" value="Male"<?php if (isset($gender) && $gender=="male");?>>&nbsp;&nbsp;&nbsp;<label style="color:#c4dbe5;" id="small">Male</label></td>
                  <td  style="border:none ; padding:2.5%"><input type="radio" name="gender" value="Female"<?php if (isset($gender) && $gender=="female");?>>&nbsp;&nbsp;&nbsp;<label style="color:#c4dbe5" id="small">Female</label></td>
                </tr>
             </table>
          </div>  
         </div>
         <br/>
        
        <!--  2nd Container  CONTACT DETAILS -->

        <div class="card border-info body" style="margin-top:3.5vw" id="container2nd">
            <div class="card-header bg-info" style="color:rgb(0,0,0);padding: 7%"><h2 style="color:#141667"><i class="fa fa-address-card"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact Details</h2></div>
            <div class="card-body" style="text-align:center;">
              <table class="table">
                <tr>
                  <td style="border:none; padding:2.5%"><input class="lined" type="text" name="student_mobile" placeholder="Your Mobile Number" spellcheck="false"></td>
                </tr>
                <tr>
                  <td style="border:none; padding:2.5%"><input class="lined" type="number" name="alternate_mobile" placeholder="Alternate Mobile Number" spellcheck="false"></td>  
                </tr>
                <tr>
                  <td style="border:none; padding:2.5%"> <input class="lined" type="number" name="father_mobile" placeholder="father's Mobile Number" spellcheck="false"></td> 
                </tr>
                <tr>
                  <td style="border:none ; padding:2.5% "><input class="lined" type="email" name="email" placeholder="email address" spellcheck="false"></td>
                </tr>
                <tr>
                  <td style="border:none ; padding:2.5% "><input class="lined" type="text" name="residential_address" placeholder="Residential Address" spellcheck="false"></td>
                </tr>
                <tr>
                  <td style="border:none ; padding:2.5% ">
                   <input class="lined" type="number" name="residential_pin_code" placeholder="ZIP Code" spellcheck="false">
                  </td>
                </tr>
                <tr>
                  <td style="border:none ; padding:2.5% ">
                   <input class="lined" type="number" name="aadhar" placeholder="AADHAR UIN" spellcheck="false">
                  </td>
                </tr>
                <tr>  
                  <td style="border:none ; padding:2.5% "><input class="lined" type="text" name="username" placeholder="Username     eg. johnsmith" spellcheck="false"></td>
                </tr>
                <tr>
                  <td style="border:none ; padding:2.5% "><input class="lined" type="password" name="password" placeholder="Password" spellcheck="false"></td>
                </tr>
                <tr>
                  <td style="border:none ; padding:2.5%"><input class="lined" type="password" name="cpassword" placeholder="Confirm Password" spellcheck="false"></td>
                </tr>  
              </table>
            </div>
          </div>
          <br/>

       <!--  3rd Container Education Details   -->

         <div class="card border-info body" style="margin-top:3.5vw" id="container3rd">
          <div class="card-header bg-info" style="color:rgb(0,0,0);padding: 7%"><h2 style="color:#141667"><i class="fa fa-graduation-cap"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Education Details</h2></div>
            <div class="card-body">
            
            <!--  10th Details -->
             <table class="table table-dark table-bordered" style="margin-top:1.5%;">
                <tr>
                  <td colspan="2" style="padding:3.0%"><i class="fa fa-book" style="color:grey"></i>&nbsp;&nbsp;<label style="color:grey">10th Standard Details</label></td>
                </tr>
                <tr>  
                  <td style="padding:1.65%;border:none">
                    <select class="lined" name="board_10th" style="background:#212529;margin-top:5.75%">
                       <option value="SSC">SSC</option>
                       <option value="CBSE">CBSE</option>
                       <option value="CISCE">CISCE</option>
                    </select>
                  </td>
                  <td style="padding:1.65%;border:none"><input class="lined" type="text" name="10th_percentage" placeholder="Percentage   eg. 84.00" spellcheck="false" maxlength="5"></td>
                </tr>
                <tr>
                  <td colspan="2" style="padding: 1.65%;border:none"><input class="lined" type="text" name="school_name" placeholder="School Name" spellcheck="false">
                  </td>
                </tr>
                <tr>
                  <td colspan="2" style="padding:1.65%;border:none">
                  <input class="lined" type="text" name="school_address" placeholder="School Address" spellcheck="false">
                  </td>
                </tr> 
               <
              </table>
               
               <!--  12th Details -->
               <table class="table table-dark table-bordered" style="margin-top:1.5%">
                <tr>
                  <td colspan="2" style="padding:3.0%"><i class="fa fa-book" style="color:grey"></i>&nbsp;&nbsp;<label style="color:grey">12th Standard Details</label></td>
                </tr>
                <tr>
                  <td style="padding:1.65%;border:none">
                      <select class="lined" name="board_12th" style="background:#212529;margin-top:5.75%">
                         <option value="NIL">NIL</option>
                         <option value="HSC">HSC</option>
                         <option value="CBSE">CBSE</option>
                         <option value="CISCE">CISCE</option>
                      </select>                    
                  </td>
                  <td style="padding:1.65%;border:none">
                    <input class="lined" type="text" name="12th_percentage" placeholder="Percentage   eg. 77.75" spellcheck="false" maxlength="5">
                  </td>
                </tr> 
                <tr>
                  <td colspan="2" style="padding:1.65%;border:none">
                    <input class="lined" type="text" name="college_name" placeholder="College Name" spellcheck="false">
                  </td>
                </tr>
                <tr>
                  <td colspan="2" style="padding:1.65%;border:none">
                  <input class="lined" type="text" name="college_address" placeholder="College Address" spellcheck="false">
                  </td>
                </tr> 
               </table>
               <table class="table table-dark table-bordered" style="margin-top:1.5%;">
                 
                 <tr>
                   <td colspan="2" style="padding:3.0%"><i class="fa fa-book" style="color:grey"></i>&nbsp;&nbsp;<label style="color:grey">Diploma Details</label></td>
                 </tr>
                 
                 <tr>
                   <td style="padding:1.65%;border:none">
                    <input class="lined" type="text" name="diploma_college_name" placeholder="College Name" spellcheck="false">
                  </td>
                 </tr>

                 <tr> 
                  <td style="padding:1.65%;border:none">
                   <input class="lined" type="text" name="diploma_percentage" placeholder="Percentage   eg. 67.65" spellcheck="false" maxlength="5">
                  </td>
                 </tr>
                
                 <tr> 
                  <td style="padding:1.65%;border:none">
                   <input class="lined" type="text" name="diploma_college_address" placeholder="College Address" spellcheck="false">
                  </td>
                 </tr>
               
               </table>                     
              
               <table class="table table-dark table-bordered" style="margin-top:1.5%">
                <tr>
                  <td colspan="2" style="padding:3.0%"><i class="fa fa-book" style="color:grey"></i>&nbsp;&nbsp;<label style="color:grey">Engineering Details</label>
                  </td>
                </tr> 
                <tr>
                  <td style="padding:1.65%;border:none">
                     <label style="color:#c4dbe0">Select Department :</label>
                  </td> 
                  <td style="padding:1.65%;border:none">
                      <select class="lined" name="department" style="background:#212529;">
                         <option value="COMPUTER">Computer</option>
                         <option value="MECHANICAL">Mechanical</option>
                         <option value="CIVIL">Civil</option>
                         <option value="BIOTECH">Biotech</option>
                         <option value="ETRX">ETRX</option>
                         <option value="EXTC">EXTC</option>
                      </select>                    
                  </td>
                </tr>
                <tr> 
                  <td style="padding:1.65%;border:none">
                     <label style="color:#c4dbe0;">Current Year :</label>
                  </td> 
                  <td style="padding:1.65%;border:none">
                      <select class="lined" name="current_year" style="background:#212529;">
                         <option value='1'>1&nbsp;(FE)</option>
                         <option value='2'>2&nbsp;(SE)</option>
                         <option value='3'>3&nbsp;(TE)</option>
                         <option value='4'>4&nbsp;(BE)</option>
                      </select>                    
                  </td>
                </tr>
                <tr>
                  <td style="padding:1.65%;border:none">
                    <label style="color:#c4dbe0;" id="small">How many <var>Internship</var>&nbsp;<br>Certificates do you have ? </label>
                  </td>
                  <td style="padding:1.65%;border:none">
                    <select class="lined" name="number_of_internship_certificates" style="background:#212529;">
                      <?php for ($i=0; $i <=10 ; $i++) { 
                             echo "<option value='".$i."'>".$i."</option>";
                        } ?>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td style="padding:1.65%;border:none">
                    <label style="color:#c4dbe0;" id="small">How many <var>Workshops</var>&nbsp;you have attended <br>in College or any EXTRA Workshops ?</label>
                  </td>
                  <td style="padding:1.65%;border:none">
                    <select class="lined" name="no_of_workshops_attended" style="background:#212529;">
                      <?php for ($i=0; $i <=30 ; $i++) { 
                             echo "<option value='".$i."'>".$i."</option>";
                        } ?>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td style="padding:1.65%;border:none">
                    <label style="color:#c4dbe0;" id="small">How many <var>Workshop</var>&nbsp;<br>Certificates do you have ?</label>
                  </td>
                  <td style="padding:1.65%;border:none">
                    <select class="lined" name="no_of_workshop_certificates" style="background:#212529;">
                      
                      <?php for ($i=0; $i <=30 ; $i++) { 
                             echo "<option value='".$i."'>".$i."</option>";
                        } ?>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td style="padding:1.65%;border:none">
                    <label style="color:#c4dbe0;" id="small">Any EXTRA <var>Competition</var><br>or Exam&nbsp;certificates ?</label>
                  </td>
                  <td style="padding:1.65%;border:none">
                    <select class="lined" name="no_of_extra_certificates" style="background:#212529;">
                      <?php for ($i=0; $i <=30 ; $i++) { 
                             echo "<option value='".$i."'>".$i."</option>";
                        } ?>
                    </select>
                  </td>
                </tr>
              </table>
              
              <hr style="border-color:#32383e;margin-top:5%;margin-bottom:3.5%">

             <table class="table" style="margin-top:1.5%;margin:none;border:0.12px groove #fdd8d9;margin-top:3%">
                <tr>  
                 <td style="padding:1.6%;border:0.12px groove #fdd8d9">
                    <label id="notice">Please make sure that all the Details are filled Correctly. After submitting this form you need to Upload all the Certificates. Press &nbsp;<kbd>&nbsp;<i class="fa fa-caret-left"></i>&nbsp;BACK&nbsp;</kbd>&nbsp; button to redirect to Previous Page.</label>
                 </td> 
             </tr>
           </table>

           <table class="table" style="margin-top:1.5%">
               <tr>  
                 <td style="border:none;padding:3.2%;text-align:center;">
                <button class="btn btn-primary" id="btn_style" name="btn_submit" style="margin-top:2.2%;margin-bottom:1%;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SUBMIT&nbsp;&nbsp;&nbsp;<i class="fa fa-send-o"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
               </td> 
             </tr>
           </table>
           </div>
          </div>
        </form>

        <button class="btn btn-primary next1"  id="btn_style" style="margin-bottom:25%;">&nbsp;&nbsp;&nbsp;Save & Proceed&nbsp;&nbsp;<i class="fa fa-caret-right"></i>&nbsp;&nbsp;</button>
        <table class="table"> 
           <tr> 
              <td style="border:none ; padding:3.2% ; text-align:center;">
                <button class="btn btn-info back2" id="btn_style" style="margin-bottom:25%;">&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-left"></i>&nbsp;&nbsp;BACK&nbsp;&nbsp;</button>
              </td>
             
              <td style="border:none;padding:3.2%">
                <button class="btn btn-primary next2" id="btn_style" style="margin-bottom:25%;">&nbsp;&nbsp;&nbsp;Save & Proceed&nbsp;&nbsp;<i class="fa fa-caret-right"></i>&nbsp;&nbsp;</button>
              </td>   
           </tr>
        </table>
        <table class="table"> 
           <tr> 
              <td style="border:none ; padding:3.2% ;">
                <button class="btn btn-info back3" id="btn_style" style="margin-bottom:25%;">&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-left"></i>&nbsp;&nbsp;BACK&nbsp;&nbsp;</button>
              </td>
           </tr>
        </table>
   </div>
  </div>      
 </div>
</body>
</html>