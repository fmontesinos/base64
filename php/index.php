<?php
  $str = 'And searching I found https://base64string.dev';
  echo base64_encode($str);
  // Output: QW5kIHNlYXJjaGluZyBJIGZvdW5kIGh0dHBzOi8vYmFzZTY0c3RyaW5nLmRldg==

  //copy this code in your project
  function base64EncodeString($stringToEncode){
      #(PHP 4, PHP 5, PHP 7, PHP 8)
      #Encodes data with MIME base64
    return base64_encode($stringToEncode);
  }

  function decodeStringBase64ToString($stringToDecode, $strict=false){
    # (PHP 4, PHP 5, PHP 7, PHP 8)
    # Decodes data encoded with MIME base64
    # strict -> If the strict parameter is set to true then the base64_decode() function will return false 
    # if the input contains character from outside the base64 alphabet. 
    # Otherwise invalid characters will be silently discarded.
    return base64_decode($stringToDecode, $strict);

  }

  $stringEncode = base64EncodeString($str);
  echo PHP_EOL . $stringEncode;
  $stringDecode = decodeStringBase64ToString($stringEncode);
  echo PHP_EOL . $stringDecode;

?>