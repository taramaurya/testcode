


<!-- -Traits Example --->
<?php
  trait message1 {
    public function msg1() {
      echo "OOP is fun! "; 
    }
  }
  class Welcome {
    use message1;
  }
  class Hello {
    use message1;
  }
  $obj = new Welcome();
  $obj->msg1();
  $objh = new Hello();
  $objh->msg1();
?>


<?php 
    function is_anagram($string_1, $string_2) 
    { 
        if(count_chars($string_1, 1) == count_chars($string_2, 1)) 
            return 'yes'; 
        else
            return 'no';     
    } 
    print_r(is_anagram('program', 'grampro')."\n"); 
    print_r(is_anagram('card', 'cart')."\n"); 
?>


<!-- Reverse Number -->
<?php  
  $num = 23456;  
  $revnum = 0;  
  while ($num > 1)  
  {  
  $rem = $num % 10;  
  $revnum = ($revnum * 10) + $rem;  
  $num = ($num / 10);   
  }  
  echo "Reverse number of 23456 is: $revnum";  
?>  
 

<?php

 $string  = "HELLO dATA";
 $length = strlen($string);

 for($i = ($length-1); $i >= 0; $i--){
  echo $string[$i];
 }

?>


<?php

function isPallindrom($string){
    $reverseString ="";
    $length = strlen($string);

    for($i = ($length-1); $i >= 0; $i--){ 
       $reverseString .= $string[$i];
    }

   return $string == $reverseString;
}

$testString = "tara";
if(isPallindrom($testString)){
  echo "This string ".$testString." is a palindrome.";
}else{
  echo "This string  ".$testString." is not a palindrome.";
}

?>


<!-- Word count in a string -->
<?php
function wordCount($string) {
    $count = 0;
    $inWord = false;
    
    for ($i = 0; $i < strlen($string); $i++) {
        if ($string[$i] != ' ' && !$inWord) {
            // Start of a new word
            $inWord = true;
            $count++;
        } elseif ($string[$i] == ' ') {
            // End of a word
            $inWord = false;
        }
    }
    
    return $count;
}

// Example usage
$string = "This is a test string.";
echo "Word count: " . wordCount($string);
?>

//QUestion Find 3rd max salary from a comma separated string using any programming language without using inbuilt function 
//"30000,27000,40000,9000,9000,14000,30000,12000,8000,27000,40000,12000,8000,1000,30000,30000,9000,27000"

<?php

$salariesStr = "30000,27000,40000,9000,9000,14000,30000,12000,8000,27000,40000,12000,8000,1000,30000,30000,9000,27000";

// Step 1: Convert to array
$salaries = explode(",", $salariesStr);

// Step 2: Convert to integers and remove duplicates
$salaries = array_unique(array_map('intval', $salaries));

// Step 3: Sort in descending order
rsort($salaries);

// Step 4: Get 3rd max if exists
if (count($salaries) >= 3) {
    echo "3rd maximum salary: " . $salaries[2];
} else {
    echo "Not enough distinct salaries.";
}

?>



