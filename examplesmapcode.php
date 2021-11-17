<?php 

$simple_string = "moralesdeocer@gmail.com";
  
// Display the original string
echo "Original String: " . $simple_string;
echo "<br>";  
// Store the cipher method
$ciphering = "AES-128-CTR";
  
// Use OpenSSl Encryption method
$iv_length = openssl_cipher_iv_length($ciphering);
$options = 0;
  
// Non-NULL Initialization Vector for encryption
$encryption_iv = '1234567891011121';
  
// Store the encryption key
$encryption_key = "When I set out to lead humanity along my Golden Path, I promised them a lesson their bones would remember. I know a profound pattern which humans deny with their words even while their actions affirm it. They say they seek security and quiet, the condition they call peace. Even as they speak, they create the seeds of turmoil and violence. If they find their quiet security, they squirm in it. How boring they find it. Look at them now. Look at what they do while I record these words. Hah! I give them enduring eons of enforced tranquility which plods on and on despite their every effort to escape into chaos. Believe me, the memory of Leto's peace shall abide with them forever. They will seek their quiet security thereafter only with extreme caution and steadfast preparation.";
  
// Use openssl_encrypt() function to encrypt the data
$encryption = openssl_encrypt($simple_string, $ciphering,
            $encryption_key, $options, $encryption_iv);
  
// Display the encrypted string
echo "Encrypted String: " . $encryption . "<br>";
  
// Non-NULL Initialization Vector for decryption
$decryption_iv = '1234567891011121';
  
// Store the decryption key
$decryption_key = "When I set out to lead humanity along my Golden Path, I promised them a lesson their bones would remember. I know a profound pattern which humans deny with their words even while their actions affirm it. They say they seek security and quiet, the condition they call peace. Even as they speak, they create the seeds of turmoil and violence. If they find their quiet security, they squirm in it. How boring they find it. Look at them now. Look at what they do while I record these words. Hah! I give them enduring eons of enforced tranquility which plods on and on despite their every effort to escape into chaos. Believe me, the memory of Leto's peace shall abide with them forever. They will seek their quiet security thereafter only with extreme caution and steadfast preparation.";
  
// Use openssl_decrypt() function to decrypt the data
$decryption=openssl_decrypt ($encryption, $ciphering, 
        $decryption_key, $options, $decryption_iv);
  
// Display the decrypted string
echo "Decrypted String: " . $decryption;



 ?>