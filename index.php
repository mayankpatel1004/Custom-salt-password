<?php
function create_hash_password($current_password){
        $presalt = "I]3`&{`b]-'0P2U";
        $postsalt = "!T]&Ht W9~R&:~I";
        $salt = $presalt.$current_password.$postsalt;
        return hash('sha512',$salt);
    }
    $password = "test#";
    $response = create_hash_password($password);
    echo "Your hash password for $password: <br />".$response;
?>