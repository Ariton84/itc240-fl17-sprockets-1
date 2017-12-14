<?php
//email-test.php

if(mail("vanver@gmail.com","My Clever Subject Line!","Test email"))
{//email sent?
    echo 'Email Sent?';
}else{//email NOT sent!
    echo 'Email NOT sent!';
}



