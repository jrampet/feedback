
    <?php
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        
    
    $connection=mysqli_connect("db4free.net","jrampet","Webhost@2k19","stafflist");
    if ($connection){
        //echo "Connection Established<br>";
    } else{
        die("Connection Failed. Reason:".mysqli_connect_error());
    }
    
    $register=$_POST['Register'];
    if($register==1701005||$register==1701056||$register==1701058){
      header('Location: index.html');
      exit;
    }
    
    $sql="SELECT * FROM Selection WHERE Number = '".$register."'";
    //$sql1="SELECT * FROM selection WHERE Number = '".$register."'";
    $results=mysqli_query($connection,$sql);
    $dbdata = array();
    if (mysqli_num_rows($results)>0){
        while($row=mysqli_fetch_array($results)){
            $dbdata[]=$row;
        }
    }
    $name=$dbdata[0][1];
    $staff=$dbdata[0][2];
    $staff1=$dbdata[0][3];
    $staff2=$dbdata[0][4];
    $staff3=$dbdata[0][5];
    $staff4=$dbdata[0][6];
    $staff5=$dbdata[0][7];
    echo $register;
    echo "<br>";
    echo $name;
    mysqli_close($connection);
    }
    ?>
    
<html>
<head>
<meta charset="utf-8">
<title>Feedback</title>
<link rel="icon" type="image/png" href="images/icons/feedback.png"/>
</head>
<body>
<form method="post" action ="insert.php">
    <input type="hidden" name="varname" value="<?php echo $register; ?>">
    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid  #848484;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color:  #bfe2ff ;
}
</style>
    <table style="width:100%">
        <tr><td>SubjectCode</td>
            <td>PQT</td>
            <td>MCR</td>
            <td>DAA</td>
            <td>CNS</td>
            <td>GOC</td>
            <td>DBMS</td>
        </tr>
        </tr><td>Staff Name</td>
             <td><?php echo $staff?></td>
             <td><?php echo $staff1?></td>
             <td><?php echo $staff2?></td>
             <td><?php echo $staff3?></td>
             <td><?php echo $staff4?></td>
             <td><?php echo $staff5?></td>
        </tr>
        
        
        <tr>
            <td>Punctuality</td>
            <td><select name="rating11" required>
                  <option value=""> </option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select> 
            </td>
            <td><select name="rating12" required>
            <option value=""> </option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select> </td>
            <td><select name="rating13" required>
            <option value=""> </option>
            <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select> 
            </td>
            <td><select name="rating14" required>
            <option value=""> </option><option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select> 
            </td>
            <td><select name="rating15" required>
            <option value=""> </option><option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
            </td>
            <td><select name="rating16" required>
            <option value=""> </option><option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
            </td
        </tr>
        <tr>
            <td>Regularity</td>
            <td><select name="rating21" required>
            <option value=""> </option><option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select> 
            </td>
            <td><select name="rating22" required>
            <option value=""> </option><option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select> </td>
            <td><select name="rating23" required>
            <option value=""> </option><option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select> 
            </td>
            <td><select name="rating24" required>
            <option value=""> </option><option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select> 
            </td>
            <td><select name="rating25" required>
            <option value=""> </option><option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
            </td>
            <td><select name="rating26" required>
            <option value=""> </option><option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
            </td
        </tr>
        <tr>
            <td>Personality</td>
            <td><select name="rating31" required>
            <option value=""> </option><option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select> 
            </td>
            <td><select name="rating32" required>
            <option value=""> </option><option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select> </td>
            <td><select name="rating33" required>
            <option value=""> </option><option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select> 
            </td>
            <td><select name="rating34" required>
            <option value=""> </option><option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select> 
            </td>
            <td><select name="rating35" required>
            <option value=""> </option><option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
            </td>
            <td><select name="rating36" required>
            <option value=""> </option><option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
            </td
        </tr>
        <tr>
            <td>Pace of Covering Syllabus</td>
            <td><select name="rating41" required>
            <option value=""> </option><option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select> 
            </td>
            <td><select name="rating42" required>
            <option value=""> </option><option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select> </td>
            <td><select name="rating43" required>
            <option value=""> </option><option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select> 
            </td>
            <td><select name="rating44" required>
            <option value=""> </option><option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select> 
            </td>
            <td><select name="rating45" required>
            <option value=""> </option><option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
            </td>
            <td><select name="rating46" required>
            <option value=""> </option><option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
            </td
        </tr>
        <tr>
            <td>Clarity in Expressions</td>
            <td><select name="rating51" required>
            <option value=""> </option><option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select> 
            </td>
            <td><select name="rating52" required>
            <option value=""> </option><option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select> </td>
            <td><select name="rating53" required>
            <option value=""> </option><option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select> 
            </td>
            <td><select name="rating54" required>
            <option value=""> </option><option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select> 
            </td>
            <td><select name="rating55" required>
            <option value=""> </option><option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
            </td>
            <td><select name="rating56" required>
            <option value=""> </option><option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
            </td
        </tr>
        <tr>
            <td>Encourage to raise Doubts & ability to Clarify</td>
            <td><select name="rating61" required>
            <option value=""> </option><option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select> 
            </td>
            <td><select name="rating62" required>
            <option value=""> </option><option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select> </td>
            <td><select name="rating63" required>
            <option value=""> </option><option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select> 
            </td>
            <td><select name="rating64" required>
            <option value=""> </option><option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select> 
            </td>
            <td><select name="rating65" required>
            <option value=""> </option><option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
            </td>
            <td><select name="rating66" required>
            <option value=""> </option><option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
            </td
        </tr>
        <tr>
            <td>Ability to Maintain Discipline</td>
            <td><select name="rating71" required>
            <option value=""> </option><option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select> 
            </td>
            <td><select name="rating72" required>
            <option value=""> </option><option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select> </td>
            <td><select name="rating73" required>
            <option value=""> </option><option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select> 
            </td>
            <td><select name="rating74" required>
            <option value=""> </option><option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select> 
            </td>
            <td><select name="rating75" required>
            <option value=""> </option><option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
            </td>
            <td><select name="rating76" required>
            <option value=""> </option><option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
            </td
        </tr>
        <tr>
            <td>Provision of Feedback on learning deficiencies</td>
            <td><select name="rating81" required>
            <option value=""> </option><option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select> 
            </td>
            <td><select name="rating82" required>
            <option value=""> </option><option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select> </td>
            <td><select name="rating83" required>
            <option value=""> </option><option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select> 
            </td>
            <td><select name="rating84" required>
            <option value=""> </option><option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select> 
            </td>
            <td><select name="rating85" required>
            <option value=""> </option><option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
            </td>
            <td><select name="rating86" required>
            <option value=""> </option><option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
            </td
        </tr>
        <tr>
            <td>Ability to Sustain students Attention & Interest</td>
            <td><select name="rating91" required>
            <option value=""> </option><option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select> 
            </td>
            <td><select name="rating92" required>
            <option value=""> </option><option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select> </td>
            <td><select name="rating93" required>
            <option value=""> </option><option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select> 
            </td>
            <td><select name="rating94" required>
            <option value=""> </option><option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select> 
            </td>
            <td><select name="rating95" required>
            <option value=""> </option><option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
            </td>
            <td><select name="rating96" required>
            <option value=""> </option><option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
            </td
        </tr>
        <tr>
            <td>Providing sufficient Course Materials</td>
            <td><select name="rating101" required>
            <option value=""> </option> <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select> 
            </td>
            <td><select name="rating102" required>
            <option value=""> </option><option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select> </td>
            <td><select name="rating103" required>
            <option value=""> </option><option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select> 
            </td>
            <td><select name="rating104" required>
            <option value=""> </option><option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select> 
            </td>
            <td><select name="rating105" required>
            <option value=""> </option><option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
            </td>
            <td><select name="rating106" required>
            <option value=""> </option><option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
            </td
        </tr>
        <tr>
            <td>Citation,Examples,Illustrations,etc</td>
            <td><select name="rating111" required>
            <option value=""> </option><option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select> 
            </td>
            <td><select name="rating112" required>
            <option value=""> </option><option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select> </td>
            <td><select name="rating113" required>
            <option value=""> </option><option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select> 
            </td>
            <td><select name="rating114" required>
            <option value=""> </option><option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select> 
            </td>
            <td><select name="rating115" required>
            <option value=""> </option><option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
            </td>
            <td><select name="rating116" required>
            <option value=""> </option><option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
            </td
        </tr>
        <tr>
            <td>Total Remarks</td>
            <td><select name="rating121" required>
            <option value=""> </option><option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select> 
            </td>
            <td><select name="rating122" required>
            <option value=""> </option><option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select> </td>
            <td><select name="rating123" required>
            <option value=""> </option> <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select> 
            </td>
            <td><select name="rating124" required>
            <option value=""> </option> <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select> 
            </td>
            <td><select name="rating125" required>
            <option value=""> </option><option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
            </td>
            <td><select name="rating126"required >
            <option value=""> </option><option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
            </td
        </tr>
    </table>
    
    <input type="image" src="images/submit.gif" alt="Submit" align="right" width="48" height="48">
    </form>
</body>
</html>
