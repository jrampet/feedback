<?php

    
    $con = mysqli_connect('db4free.net','jrampet','Webhost@2k19');
    if(!$con){
        echo 'Not Connected';    
        
    }
   
    if(!mysqli_select_db($con,'stafflist')){
        echo 'Not Selected';
    }
    $register=$_POST['varname'];
    
    $rating11=$_POST['rating11'];
$rating12=$_POST['rating12'];
$rating13=$_POST['rating13'];
$rating14=$_POST['rating14'];
$rating15=$_POST['rating15'];
$rating16=$_POST['rating16'];
$rating21=$_POST['rating21'];
$rating22=$_POST['rating22'];
$rating23=$_POST['rating23'];
$rating24=$_POST['rating24'];
$rating25=$_POST['rating25'];
$rating26=$_POST['rating26'];
$rating31=$_POST['rating31'];
$rating32=$_POST['rating32'];
$rating33=$_POST['rating33'];
$rating34=$_POST['rating34'];
$rating35=$_POST['rating35'];
$rating36=$_POST['rating36'];
$rating41=$_POST['rating41'];
$rating42=$_POST['rating42'];
$rating43=$_POST['rating43'];
$rating44=$_POST['rating44'];
$rating45=$_POST['rating45'];
$rating46=$_POST['rating46'];
$rating51=$_POST['rating51'];
$rating52=$_POST['rating52'];
$rating53=$_POST['rating53'];
$rating54=$_POST['rating54'];
$rating55=$_POST['rating55'];
$rating56=$_POST['rating56'];
$rating61=$_POST['rating61'];
$rating62=$_POST['rating62'];
$rating63=$_POST['rating63'];
$rating64=$_POST['rating64'];
$rating65=$_POST['rating65'];
$rating66=$_POST['rating66'];
$rating71=$_POST['rating71'];
$rating72=$_POST['rating72'];
$rating73=$_POST['rating73'];
$rating74=$_POST['rating74'];
$rating75=$_POST['rating75'];
$rating76=$_POST['rating76'];
$rating81=$_POST['rating81'];
$rating82=$_POST['rating82'];
$rating83=$_POST['rating83'];
$rating84=$_POST['rating84'];
$rating85=$_POST['rating85'];
$rating86=$_POST['rating86'];
$rating91=$_POST['rating91'];
$rating92=$_POST['rating92'];
$rating93=$_POST['rating93'];
$rating94=$_POST['rating94'];
$rating95=$_POST['rating95'];
$rating96=$_POST['rating96'];
$rating101=$_POST['rating101'];
$rating102=$_POST['rating102'];
$rating103=$_POST['rating103'];
$rating104=$_POST['rating104'];
$rating105=$_POST['rating105'];
$rating106=$_POST['rating106'];
$rating111=$_POST['rating111'];
$rating112=$_POST['rating112'];
$rating113=$_POST['rating113'];
$rating114=$_POST['rating114'];
$rating115=$_POST['rating115'];
$rating116=$_POST['rating116'];
$rating121=$_POST['rating121'];
$rating122=$_POST['rating122'];
$rating123=$_POST['rating123'];
$rating124=$_POST['rating124'];
$rating125=$_POST['rating125'];
$rating126=$_POST['rating126'];
    $sql = array();

    $sql[0] = "UPDATE PQT SET Punctuality='".$rating11."' WHERE Number ='".$register."'";
$sql[1] = "UPDATE PQT SET Regularity='".$rating21."' WHERE Number ='".$register."'";
    $sql[2] = "UPDATE PQT SET Personality='".$rating31."' WHERE Number ='".$register."'";
    $sql[3]= "UPDATE PQT SET PaceofCoveringSyllabus='".$rating41."' WHERE Number ='".$register."'";
    $sql[4] = "UPDATE PQT SET ClarityinExpression='".$rating51."' WHERE Number ='".$register."'";
    $sql[5] = "UPDATE PQT SET Doubts='".$rating61."' WHERE Number ='".$register."'";
    $sql[6] = "UPDATE PQT SET Discipline='".$rating71."' WHERE Number ='".$register."'";
    $sql[7] = "UPDATE PQT SET Feedback='".$rating81."' WHERE Number ='".$register."'";
    $sql[8] = "UPDATE PQT SET Attention='".$rating91."' WHERE Number ='".$register."'";
    $sql[9] = "UPDATE PQT SET Material='".$rating101."' WHERE Number ='".$register."'";
    $sql[10] = "UPDATE PQT SET Illustration='".$rating111."' WHERE Number ='".$register."'";
    $sql[11] = "UPDATE PQT SET TotalRemarks='".$rating121."' WHERE Number ='".$register."'";
$sql[12] = "UPDATE MCR SET Punctuality='".$rating12."' WHERE Number ='".$register."'";
    $sql[13] = "UPDATE MCR SET Regularity='".$rating22."' WHERE Number ='".$register."'";
    $sql[14] = "UPDATE MCR SET Personality='".$rating32."' WHERE Number ='".$register."'";
    $sql[15] = "UPDATE MCR SET PaceofCoveringSyllabus='".$rating42."' WHERE Number ='".$register."'";
    $sql[16] = "UPDATE MCR SET ClarityinExpression='".$rating52."' WHERE Number ='".$register."'";
    $sql[17] = "UPDATE MCR SET Doubts='".$rating62."' WHERE Number ='".$register."'";
    $sql[18] = "UPDATE MCR SET Discipline='".$rating72."' WHERE Number ='".$register."'";
    $sql[19] = "UPDATE MCR SET Feedback='".$rating82."' WHERE Number ='".$register."'";
    $sql[20] = "UPDATE MCR SET Attention='".$rating92."' WHERE Number ='".$register."'";
    $sql[21] = "UPDATE MCR SET Material='".$rating102."' WHERE Number ='".$register."'";
    $sql[22] = "UPDATE MCR SET Illustration='".$rating112."' WHERE Number ='".$register."'";
    $sql[23] = "UPDATE MCR SET TotalRemarks='".$rating122."' WHERE Number ='".$register."'";
$sql[24] = "UPDATE DAA SET Punctuality='".$rating13."' WHERE Number ='".$register."'";
    $sql[25] = "UPDATE DAA SET Regularity='".$rating23."' WHERE Number ='".$register."'";
    $sql[26] = "UPDATE DAA SET Personality='".$rating33."' WHERE Number ='".$register."'";
    $sql[27] = "UPDATE DAA SET PaceofCoveringSyllabus='".$rating43."' WHERE Number ='".$register."'";
    $sql[28] = "UPDATE DAA SET ClarityinExpression='".$rating53."' WHERE Number ='".$register."'";
    $sql[29] = "UPDATE DAA SET Doubts='".$rating63."' WHERE Number ='".$register."'";
    $sql[30]= "UPDATE DAA SET Discipline='".$rating73."' WHERE Number ='".$register."'";
    $sql[31] = "UPDATE DAA SET Feedback='".$rating83."' WHERE Number ='".$register."'";
    $sql[32] = "UPDATE DAA SET Attention='".$rating93."' WHERE Number ='".$register."'";
    $sql[33] = "UPDATE DAA SET Material='".$rating103."' WHERE Number ='".$register."'";
    $sql[34]= "UPDATE DAA SET Illustration='".$rating113."' WHERE Number ='".$register."'";
    $sql[35] = "UPDATE DAA SET TotalRemarks='".$rating123."' WHERE Number ='".$register."'";
$sql[36] = "UPDATE CNS SET Punctuality='".$rating14."' WHERE Number ='".$register."'";
    $sql[37] = "UPDATE CNS SET Regularity='".$rating24."' WHERE Number ='".$register."'";
    $sql[38] = "UPDATE CNS SET Personality='".$rating34."' WHERE Number ='".$register."'";
    $sql[39] = "UPDATE CNS SET PaceofCoveringSyllabus='".$rating44."' WHERE Number ='".$register."'";
    $sql[40] = "UPDATE CNS SET ClarityinExpression='".$rating54."' WHERE Number ='".$register."'";
    $sql[41] = "UPDATE CNS SET Doubts='".$rating64."' WHERE Number ='".$register."'";
    $sql[42] = "UPDATE CNS SET Discipline='".$rating74."' WHERE Number ='".$register."'";
    $sql[43] = "UPDATE CNS SET Feedback='".$rating84."' WHERE Number ='".$register."'";
    $sql[44] = "UPDATE CNS SET Attention='".$rating94."' WHERE Number ='".$register."'";
    $sql[45] = "UPDATE CNS SET Material='".$rating104."' WHERE Number ='".$register."'";
    $sql[46] = "UPDATE CNS SET Illustration='".$rating114."' WHERE Number ='".$register."'";
    $sql[47] = "UPDATE CNS SET TotalRemarks='".$rating124."' WHERE Number ='".$register."'";
    $sql[48] = "UPDATE GOC SET Punctuality='".$rating15."' WHERE Number ='".$register."'";
    $sql[49] = "UPDATE GOC SET Regularity='".$rating25."' WHERE Number ='".$register."'";
    $sql[50] = "UPDATE GOC SET Personality='".$rating35."' WHERE Number ='".$register."'";
    $sql[51] = "UPDATE GOC SET PaceofCoveringSyllabus='".$rating45."' WHERE Number ='".$register."'";
    $sql[52] = "UPDATE GOC SET ClarityinExpression='".$rating55."' WHERE Number ='".$register."'";
    $sql[53] = "UPDATE GOC SET Doubts='".$rating65."' WHERE Number ='".$register."'";
    $sql[54] = "UPDATE GOC SET Discipline='".$rating75."' WHERE Number ='".$register."'";
    $sql[55] = "UPDATE GOC SET Feedback='".$rating85."' WHERE Number ='".$register."'";
    $sql[56] = "UPDATE GOC SET Attention='".$rating95."' WHERE Number ='".$register."'";
    $sql[57] = "UPDATE GOC SET Material='".$rating105."' WHERE Number ='".$register."'";
    $sql[58] = "UPDATE GOC SET Illustration='".$rating115."' WHERE Number ='".$register."'";
    $sql[59] = "UPDATE GOC SET TotalRemarks='".$rating125."' WHERE Number ='".$register."'";
$sql[60] = "UPDATE DBMS SET Punctuality='".$rating16."' WHERE Number ='".$register."'";
    $sql[61] = "UPDATE DBMS SET Regularity='".$rating26."' WHERE Number ='".$register."'";
    $sql[62] = "UPDATE DBMS SET Personality='".$rating36."' WHERE Number ='".$register."'";
    $sql[63] = "UPDATE DBMS SET PaceofCoveringSyllabus='".$rating46."' WHERE Number ='".$register."'";
    $sql[64] = "UPDATE DBMS SET ClarityinExpression='".$rating56."' WHERE Number ='".$register."'";
    $sql[65] = "UPDATE DBMS SET Doubts='".$rating66."' WHERE Number ='".$register."'";
    $sql[66] = "UPDATE DBMS SET Discipline='".$rating76."' WHERE Number ='".$register."'";
    $sql[67] = "UPDATE DBMS SET Feedback='".$rating86."' WHERE Number ='".$register."'";
    $sql[68] = "UPDATE DBMS SET Attention='".$rating96."' WHERE Number ='".$register."'";
      $sql[69] = "UPDATE DBMS SET Material='".$rating106."' WHERE Number ='".$register."'";
    $sql[70] = "UPDATE DBMS SET Illustration='".$rating116."' WHERE Number ='".$register."'";
    $sql[71] = "UPDATE DBMS SET TotalRemarks='".$rating126."' WHERE Number ='".$register."'";

    $count=0;
    for($i=0;$i<=71;$i+=1){
        if (mysqli_query($con,$sql[$i])){
                $count++;
                }
    }
    
    if($count==72){
        $f="Thank you for ur valuable Feedback";
    }
    else{
        
        $f="Your Feedback Seems not submitted Please contact respective Staff";
        
    }
    
    //header("refresh:3; url=index.html");
?>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Feedback</title>
<link rel='stylesheet' href='styles.css'/>
<style>
.container {
  position: relative;
  width: 100%;
  max-width: 375px;
}

.container img {
  width: 40%;
  height: auto;
}

.container .btn {
  position:absolute;
  top:50%; 
  left: 170%;
  right:100%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #555;
  color: white;
  font-size: 16px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 115px;
  text-align: center;
}

.container .btn:hover {
  background-color: black;
}
.container {
  height: 100%;
  width: 100%;
  display: flex;
  position: fixed;
  align-items: center;
  justify-content: center;
}
@media only screen and (-webkit-device-pixel-ratio: 1.5)  {

{
#sidebarContainer {
display: none;
float: none;
}
#mainContentContainer {
float: none;
border: none;
width: 100%}
#textSectionInner {
padding: 5rem;
}

}

@media only screen and (-webkit-device-pixel-ratio: 2)  {

{
#sidebarContainer {
display: none;
float: none;
}
#mainContentContainer {
float: none;
border: none;
width: 100%}
#textSectionInner {
padding: 5rem;
}
}

</style>
</head>
<body background="images\icons\imag.jpg" alt="Snow" style="width:100%" position="relative" >

<div style="text-align:center;vertical-align:middle;">
    <label id="lblStatus" style="position: absolute; top: 40%; left:40%; color:#FFFFFF;size=72px;"><?php echo $f;?></label>
</div>
    <div class="container">
    <button class="btn" onclick="location.href='index.html';">Home</button>
</div>
<br>
   
    
  </body>
</html>