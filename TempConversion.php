<?php

$radioVal = $_POST["Temp"];

if (is_numeric($_POST['Num'])) {

if(isset($_POST['Num']) and $radioVal == "FtoC")
{
 echo '<h2>' . $_POST['Num'] . ' Fahrenheit is ' .  round(($_POST['Num'] - 32)/1.8) . ' Celsius. </h2><br><hr><br>';
echo '
<form action="" method="post">
<input type="radio" name="Temp" value="FtoC" checked>Fahrenheit to Celsius<br> 
<input type="radio" name="Temp" value="CtoF">Celsius to Fahrenheit<br>
<input type="radio" name="Temp" value="FtoK">Fahrenheit to Kelvin<br>
<label>
Enter Number: <br>
 <input
  type="text"
  name="Num"
  placeholder="Enter a number"
  required="required"
  size="30"
  maxlength="60"
  autofocus
  title="Number is is Required"
  tabindex="10"
  />
</label>


 <br>
<input type="submit" />

</form>';
}

elseif(isset($_POST['Num']) and $radioVal == "CtoF")
{
 echo '<h2>' . $_POST['Num'] . ' Celsius is ' .  round(($_POST['Num'] * 1.8 + 32)) . ' Fahrenheit. </h2><br><hr><br>';
echo '
<form action="" method="post">
<input type="radio" name="Temp" value="FtoC" checked>Fahrenheit to Celsius<br> 
<input type="radio" name="Temp" value="CtoF">Celsius to Fahrenheit<br>
<input type="radio" name="Temp" value="FtoK">Fahrenheit to Kelvin<br>
<label>
Your Number: <br>
 <input
  type="text"
  name="Num"
  placeholder="Enter a number"
  required="required"
  size="30"
  maxlength="60"
  autofocus
  title="Number is is Required"
  tabindex="10"
  />
</label>


 <br>
<input type="submit" />

</form>';
}

elseif(isset($_POST['Num']) and $radioVal == "FtoK")
{
 echo '<h2>' . $_POST['Num'] . ' Fahrenheit is ' .  round(($_POST['Num'] + 459.67) * 5/9) . ' Kelvin. </h2><br><hr><br>';
echo '
<form action="" method="post">
<input type="radio" name="Temp" value="FtoC" checked>Fahrenheit to Celsius<br> 
<input type="radio" name="Temp" value="CtoF">Celsius to Fahrenheit<br>
<input type="radio" name="Temp" value="FtoK">Fahrenheit to Kelvin<br>
<label>
Your Number: <br>
 <input
  type="text"
  name="Num"
  placeholder="Enter a number"
  required="required"
  size="30"
  maxlength="60"
  autofocus
  title="Number is is Required"
  tabindex="10"
  />
</label>


 <br>
<input type="submit" />

</form>';   

}else{
echo '
<form action="" method="post">
<input type="radio" name="Temp" value="FtoC" checked>Fahrenheit to Celsius<br> 
<input type="radio" name="Temp" value="CtoF">Celsius to Fahrenheit<br>
<input type="radio" name="Temp" value="FtoK">Fahrenheit to Kelvin<br>
<label>
Your Number: <br>
 <input
  type="text"
  name="Num"
  placeholder="Enter a number"
  required="required"
  size="30"
  maxlength="60"
  autofocus
  title="Number is is Required"
  tabindex="10"
  />
</label>


 <br>
<input type="submit" />

</form>';

} 

}else{
    
echo ' <h2>Please enter numbers only.</h2>
<hr>
<form action="" method="post">
<input type="radio" name="Temp" value="FtoC" checked>Fahrenheit to Celsius<br> 
<input type="radio" name="Temp" value="CtoF">Celsius to Fahrenheit<br>
<input type="radio" name="Temp" value="FtoK">Fahrenheit to Kelvin<br>
<label>
Your Number: <br>
 <input
  type="text"
  name="Num"
  placeholder="Enter a number"
  required="required"
  size="30"
  maxlength="60"
  autofocus
  title="Number is is Required"
  tabindex="10"
  />
</label>


 <br>
<input type="submit" />

</form>';
    
}
 ?>
