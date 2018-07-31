



<?php


/////////////////////////////////////////////////////////     code by Namratha Prabhu(jadrn047)       //////////////////////////////////////////////////////////////////////

function validate_data($params) {

    $msg = "";
   if(strlen($params[0]) == 0) {
        $msg .= "Please enter the first name<br />"; 
        write_form_error_page($msg);
        exit;
   }

    if(strlen($params[1]) == 0) {
        $msg .= "Please enter the last name<br />";  
         write_form_error_page($msg);
         exit;
    }

    if(strlen($params[2]) == 0){
        $msg .= "Please enter the address<br />";  
         write_form_error_page($msg);
         exit;  
    }

    if(strlen($params[3]) == 0) {  
      $msg .= "Please enter the city<br />"; 
       write_form_error_page($msg);
         exit;}
    if(strlen($params[4]) == 0)
    {    $msg .= "Please enter the state<br />";  
        write_form_error_page($msg);
         exit;}     

    if(strlen($params[5]) == 0)
    {    $msg .= "Please enter the zip code<br />";
    write_form_error_page($msg);
         exit;}
    elseif(!is_numeric($params[5])) {
        $msg .= "Zip code may contain only numeric digits<br />";
    write_form_error_page($msg);
         exit;}
    
    elseif(!preg_match("/[0-9]{5}/",   $params[5]))
    {    $msg .= "Please enter valid zip code<br />";
    write_form_error_page($msg);
         exit;}

    if(strlen($params[6]) == 0)
    {    $msg .= "Please enter the area code of you phone number<br />"; 
    write_form_error_page($msg);
         exit;}
    elseif(!is_numeric($params[6])) {
        $msg .= "Area code may contain only numeric digits<br />";
        write_form_error_page($msg);
         exit;}
    elseif(!preg_match("/[0-9]{3}/",   $params[6]))
    {    $msg .= "area code of your phone number must contain exactly 3 digits<br />";
    write_form_error_page($msg);
         exit;}
    
    if(strlen($params[7]) == 0)
    {    $msg .= "Please enter prefix of your phone number<br />";
    write_form_error_page($msg);
         exit;}
    elseif(!is_numeric($params[7])) {
        $msg .= "prefix phone may contain only numeric digits<br />";
    write_form_error_page($msg);
         exit;}
    elseif(!preg_match("/[0-9]{3}/",   $params[7]))
    {    $msg .= "area code of your phone number must contain exactly 3 digits<br />";
    write_form_error_page($msg);
         exit;}
    
    if(strlen($params[8]) == 0)
    {    $msg .= "Please enter the last four digits of your phone number<br />";
    write_form_error_page($msg);
         exit;}
    elseif(!is_numeric($params[8])) {
        $msg .= "phone number may contain only numeric digits<br />";
    write_form_error_page($msg);
         exit;}
    elseif(!preg_match("/[0-9]{4}/",   $params[8]))
    {    $msg .= "area code of your phone number must contain exactly 4 digits<br />";
    write_form_error_page($msg);
         exit;}
    
    if(strlen($params[9]) == 0) {
        $msg .= "Please enter email<br />";
        write_form_error_page($msg);
         exit;
    }
    elseif(!filter_var($params[9], FILTER_VALIDATE_EMAIL)) {
        $msg .= "Your email appears to be invalid<br/>"; 
        write_form_error_page($msg);
         exit;} 
   
    if(strlen($params[10]) == 0) {
        $msg .= "Please select your gender<br />";
        write_form_error_page($msg);
         exit;
    }


    if(strlen($params[11]) == 0) {
        $msg .= "Please enter the month of your date of birth<br />";
        write_form_error_page($msg);
         exit;
    }
    if(strlen($params[12]) == 0) {
        $msg .= "Please enter the day of your date of birth<br />";
        write_form_error_page($msg);
         exit;
    }
    if(strlen($params[13]) == 0) {
        $msg .= "Please enter the year of your date of birth<br />";
        write_form_error_page($msg);
         exit;
    }

    if(!checkdate($params[11],$params[12],$params[13])) {
       $msg .= "Please enter valid date of birth<br />";
        write_form_error_page($msg);
         exit;
    }  

        if(empty($_POST["Experience_level"])) {
        $msg .= "Please select your experience level<br />";
        write_form_error_page($msg);
         exit;
    }

    if(strlen($params[15]) == 0) {
        $msg .= "Please select your category<br />";
        write_form_error_page($msg);
         exit;
    } 
    
    // if(strlen($params[17])==0) {
    //     $msg .= "Please select a file to upload<br />";
    //     write_form_error_page($msg);
    //      exit;
    // }
    
}

function write_form_error_page($msg) {
    write_header();
    echo "<h4>Sorry, an error occurred<br />",
          $msg,"</h4>";
    write_form();
    write_footer();
    }  
    

        $patterns = array(
'AK', 'AL', 'AR', 'AZ', 'CA', 'CO', 'CT', 'DC', 'DE', 'FL', 'GA', 'HI',
'IA', 'ID', 'IL', 'IN', 'KS', 'KY', 'LA', 'MA', 'MD', 'ME', 'MI', 'MN',
'MO', 'MS', 'MT', 'NC', 'ND', 'NE', 'NH', 'NJ', 'NM', 'NV', 'NY', 'OH',
'OK', 'OR', 'PA', 'RI', 'SC', 'SD', 'TN', 'TX', 'UT', 'VA', 'VT', 'WA',
'WI', 'WV', 'WY', 'AS', 'GU', 'MP', 'PR', 'VI', 'UM', 'FM', 'MH', 'PW',
'ak', 'al', 'ar','az', 'ca', 'co', 'ct', 'dc', 'de', 'fl', 'ga', 'hi',
'ia', 'id', 'il', 'in', 'ks', 'ky', 'la', 'ma', 'md', 'me', 'mi', 'mn',
'mo', 'ms', 'mt', 'nc', 'nd', 'ne', 'nh', 'nj', 'nm', 'nv', 'ny', 'oh',
'ok', 'or', 'pa', 'ri', 'sc', 'sd', 'tn', 'tx', 'ut', 'va', 'vt', 'wa',
'wi', 'wv', 'wy', 'as', 'gu', 'mp', 'pr', 'vi', 'um', 'fm', 'mh', 'pw'

);  

function write_form() {
    print <<<ENDBLOCK
	<div id="form">
   <fieldset>
        <legend>Sign Up</legend>
        <form 
          name="signup"
          action="process_request.php"
          method="post">
          <ul>

            <li><label for="fname">First Name:</label>
            <input type="text" name="fname" id="fname" value = "$_POST[fname]" size="25" ></li>
            <li><label for="mname">Middle Name:</label>
            <input type="text" name="mname" id="mname" value = "$_POST[mname]" size="25" ></li>    
            <li><label for="lname">Last Name:</label>
            <input type="text" name="lname" id="lname" value = "$_POST[lname]" size="25" ></li>
            <li><label for="address1">Address:</label>
            <input type="text" name="address" id="address1" value = "$_POST[address]" size="50" ></li>    
            <li><label for="address2">Address:</label>
            <input type="text" name="address2" id="address2" value = "$_POST[address2]" size="50" ></li>
            <li><label for="city">City:</label>
            <input type="text" name="city" id="city" value = "$_POST[city]" size="15" >&nbsp;
            <label for="state">State:</label>
            <input type="text" name="state" id="state" value = "$_POST[state]" size="5" >&nbsp;
            <label for="zip">Zip:</label>
            <input type="text" name="zip" id="zip" value = "$_POST[zip]" size="5" maxlength="5"></li> 
            <li><label for="phone">Phone:</label>
            (<input type="text" name="area_phone" id="area_phone" value = "$_POST[area_phone]" size="3" maxlength="3">)&nbsp;&nbsp;
            <input type="text" name="prefix_phone" id="prefix_phone" value = "$_POST[prefix_phone]" size="3" maxlength="3" >&nbsp; - &nbsp;
            <input type="text" name="phone" id="phone" value = "$_POST[phone]" size="4" maxlength="4" >
            </li>      
          <li><label for="email">EMail:</label>
          <input type="text" name="email" id="email" value = "$_POST[email]" size="30" placeholder=" name@example.com"/></li>
          <li><label for="gender">Gender:</label>
          <input type="radio" name="gender" value = "Male" checked><span class="span3"> Male</span>
          <input type="radio" name="gender" value = "Female"><span class="span3"> Female</span>
          <input type="radio" name="gender" value = "Other" ><span class="span3"> Other</span></li>
          <li><label for="dob">Date of Birth:</label>
          <input type="text" name="month" id="m" value = "$_POST[month]" size="2" maxlength="2" placeholder=" mm" />  &nbsp;/&nbsp;
          <input type="text" name="day" id="d" value = "$_POST[day]" size="2" maxlength="2" placeholder=" dd"/> &nbsp;/&nbsp;
          <input type="text" name="year" id="y" value = "$_POST[year]" size="4" maxlength="4" placeholder=" yyyy"/></li> 
          <li><label>  Please enter the details of the medical conditions you have&nbsp;(If any) </label></li>
          <textarea rows="4" cols="55"></textarea>      
          <li><label for="Experience_level">Experience Level:</label>
          <input type="radio" name="Experience_level" value = "expert" checked><span class="span3"> Expert</span>
          <input type="radio" name="Experience_level" value = "experienced"><span class="span3"> Experienced</span>
          <input type="radio" name="Experience_level" value = "novice"><span class="span3"> Novice</span></li>       
          <li><label for="category">Category:</label>
          <input type="radio" name="category" value="Teen" checked><span class="span3"> Teen</span>
          <input type="radio" name="category" value="Adult"><span class="span3"> Adult</span>
          <input type="radio" name="category" value="Senior"><span class="span3"> Senior</span></li>
          <li><label for="image">Runner's Image</label>
            <input type="file" enctype="multipart/form-data" name="runner_img"  id="runner_img" accept="image/*"/></li>

        </ul>

          <div id="error_message">&nbsp; </div>

          <div id="buttonblock"> 
          <input type="reset" value="Clear Data" class="button">
          <input type="submit" name="submit" id="fbutton" value="Submit Data" class="button">
          </div>

       </form>
       </fieldset>
ENDBLOCK;
}                        

function process_parameters($params) {
    global $bad_chars;
    $params = array();
    $params[] = trim(str_replace($bad_chars, "",$_POST['fname']));
    $params[] = trim(str_replace($bad_chars, "",$_POST['lname']));
    $params[] = trim(str_replace($bad_chars, "",$_POST['address']));
    $params[] = trim(str_replace($bad_chars, "",$_POST['city']));
    $params[] = trim(str_replace($bad_chars, "",$_POST['state']));
    $params[] = trim(str_replace($bad_chars, "",$_POST['zip']));
    $params[] = trim(str_replace($bad_chars, "",$_POST['area_phone']));
    $params[] = trim(str_replace($bad_chars, "",$_POST['prefix_phone']));
    $params[] = trim(str_replace($bad_chars, "",$_POST['phone']));
    $params[] = trim(str_replace($bad_chars, "",$_POST['email']));
    $params[] = trim(str_replace($bad_chars, "",$_POST['gender']));
    $params[] = trim(str_replace($bad_chars, "",$_POST['month']));
    $params[] = trim(str_replace($bad_chars, "",$_POST['day']));
    $params[] = trim(str_replace($bad_chars, "",$_POST['year']));
    $params[] = trim(str_replace($bad_chars, "",$_POST['Experience_level']));
    $params[] = trim(str_replace($bad_chars, "",$_POST['category']));
    $params[] = trim(str_replace($bad_chars, "",$_POST['mname']));
    $params[] = trim(str_replace($bad_chars, "",$_POST['runner_img']));
    $params[] = trim(str_replace($bad_chars, "",$_POST['address2']));
    

    return $params;
    }

function store_data_in_db($params) {
    # get a database connection

    $db = get_db_handle();  ## method in helpers.php
    
    $dateOfBirth = '$params[11]'.'-'.'$params[12]'.'-'.'$params[13]';
    $date_today = date("m-d-y");
    $year = date("Y");
    $age = "$year" - "$params[13]";
    
    ##############################################################
    $sql = "SELECT * FROM person WHERE ".
    "email='$params[9]' ;";
    
##echo "The SQL statement is ",$sql;   
    $result = mysqli_query($db, $sql);
    if(mysqli_num_rows($result) > 0) {
        write_form_error_page('This record appears to be a duplicate');
        exit;
        }

$UPLOAD_DIR = 'runner_images/';
    $COMPUTER_DIR = '/home/jadrn047/public_html/proj3/runner_images/';
    $fname = $_FILES['runner_img']['name'];
    $message = "";

        
    if($_FILES['runner_img']['error'] > 0) {
        $err = $_FILES['runner_img']['error'];  
        $message .= "Error Code: $err ";
        }     
             
    else {
        move_uploaded_file($_FILES['runner_img']['tmp_name'], "$UPLOAD_DIR".$fname);
        $message = "Success! Your file has been uploaded to the server</br >\n";
    }         
    echo $message;
        

// if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
//         echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
//     } else {
//         echo "Sorry, there was an error uploading your file.";
//     }
##OK, duplicate check passed, now insert
    $sql = "INSERT INTO person(lname,fname,age,email,Experience_level,category,userpic) ".
    "VALUES('$params[1]','$params[0]','$age','$params[9]','$params[14]','$params[15]','$params[17]');";
##echo "The SQL statement is ",$sql;    
    mysqli_query($db,$sql);
    $how_many = mysqli_affected_rows($db);
    echo("There were $how_many rows affected");
    // print sql_error
    close_connector($db);

    }
        
?>   