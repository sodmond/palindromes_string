<?php
/*
Write a function that determines whether a string contains palindromes of at least 3 characters. A string is a palindrome when it reads the same backward as forward. 

Example

solution(‘madam’) => true 

solution(‘opposite’) => true //because of ‘oppo’ 

solution(‘234’) => false.
*/
function solution($str){
  for($i=3; $i<strlen($str); $i++)
    {
      $temp = substr($str, $i);
      $rev = strrev($temp);
      if($temp == $rev)
            {
              return 'true';
            }
      continue;
    }
  return 'false';
}

$word = "234";
print(solution($word));