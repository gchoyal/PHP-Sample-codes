<?php 

// MySQL Storage Engine – How to Convert MyISAM to InnoDB 

$servername = "localhost";
$username = "jewishch_jcm";
$password = "M[.9S,D]w{Wu";
$dbname = "jewishch_jcm";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = 'jewishch_jcm' AND ENGINE = 'MyISAM'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    // output data of each row
    while($row = $result->fetch_assoc()) {
		

		$tbl = $row['TABLE_NAME'];
        $sql = "ALTER TABLE `$tbl` ENGINE=INNODB";
        $conn->query($sql);
	
    }
} else {
    echo "0 results";
}
$conn->close();

die();

-----------------
	
<?php echo get_the_title(pll_get_post(52)); ?>

//Code samples 

French language - black star remove 
function charencodeecho($text){
	
	$encoding = mb_detect_encoding($text, mb_detect_order(), false);
	
	if($encoding == "UTF-8")
    {
        $text = mb_convert_encoding($text, 'UTF-8', 'ISO-8859-1');    
    }
	
	$enc = mb_detect_encoding($text, "UTF-8,ISO-8859-1");

	echo iconv($enc, "UTF-8", $text);
	
}

//Detect language 
function determine_text($text_english,$text_french)
{
    global $language;
	$language = get_bloginfo("language");
	if ($language == "fr-FR")
	$language = "fr";
	else if ($language == "en-US")
	$language = "en";
	else 
	$language = "en";
	if($language == "en")
		charencodeecho($text_english);
	else 
		charencodeecho($text_french);
}	




/*CF7 STATE FIELD*/
[select* selectedState "Alabama|AL" "Alaska|AK" "Arizona|AZ" "Arkansas|AR" "California|CA" "Colorado|CO" "Connecticut|CT" "Delaware|DE" "Washington DC|DC" "Florida|FL" "Georgia|GA" "Hawaii|HI" "Idaho|ID" "Illinois|IL" "Indiana|IN" "Iowa|IA" "Kansas|KS" "Kentucky|KY" "Louisiana|LA" "Maine|ME"  "Maryland|MD" "Massachusetts|MA" "Michigan|MI" "Minnesota|MN" "Mississippi|MS" "Missouri|MO" "Montana|MT" "Nebraska|NE" "Nevada|NV" "New Hampshire|NH" "New Jersey|NJ" "New Mexico|NM" "New York|NY" "North Carolina|NC" "North Dakota|ND" "Ohio|OH" "Oklahoma|OK" "Oregon|OR" "Pennslyvania|PA" "Rhode Island|RI" "South Carolina|SC" "South Dakota|SD" "Tennessee|TN" "Texas|TX" "Utah|UT" "Vermont|VT" "Virginia|VA" "Washington|WA" "West Virginia|WV" "Wisconsin|WI" "Wyoming|WY"]
