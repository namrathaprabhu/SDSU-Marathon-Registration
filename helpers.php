<?php

$bad_chars = array('$','%','?','<','>','php');

function check_post_only() {
if(!$_POST) {
    write_error_page("This scripts can only be called from a form.");
    exit;
    }
}

function write_error_page($msg) {
    write_header();
    echo "<h2>Sorry, an error occurred<br />",
    $msg,"</h2>";
    write_footer();
    }
    
function write_header() {
print <<<ENDBLOCK
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;
    charset=iso-8859-1" />
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="proj2style.css">
<link href="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> 
    <script src="http://jadran.sdsu.edu/jquery/jquery.js"></script>
    <script src="proj2.js"></script>
</head>

<body class="formbody">
    <div>
        <p>
            <a href="http://jadran.sdsu.edu/~jadrn047/proj3/index.html" class="homesign" target="_blank"> home
            </a>
        </p>
    </div>
    <div><p id="heading1"> SDSU<br> MARATHON</p></div>
    <div><p id="datesign"> December 3rd,2017</p></div>  
ENDBLOCK;
}

function write_footer() {
    echo "</body></html>";
    }
    
function get_db_handle() {
    ########################################################
    # DO NOT USE jadrn000, DO NOT MODIFY jadnr000 DATABASE!
    ########################################################            
    $server = 'opatija.sdsu.edu:3306';
    $user = 'jadrn047';
    $password = 'socket';
    $database = 'jadrn047';   
    ########################################################
        
    if(!($db = mysqli_connect($server, $user, $password, $database))) {
        write_error_page('SQL ERROR: Connection failed: '.mysqli_error($db));
        }
    return $db;
    }        
       
function close_connector($db) {
    mysqli_close($db);
    }
    
?>