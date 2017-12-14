<?php
//form1.php

if(isset($_POST["firstName"]))
{//if data, show it
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $Email = $_POST["Email"];
    
    echo "
    <p>You got a message from $firstName $lastName</p>
    <p>$firstName's email is $Email</p>
    <p></p>
    ";
    
    /*
    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';
    */
}else{//show form
    echo '
    <form action="" method="post">
    <label>
    First Name:<br/> 
    <input 
    type="text" 
    name="firstName" 
    placeholder="Put First Name Here" 
    required="required" 
    tabindex="10" 
    title="First Name is a required" 
    />
    </label>
    <br/>
    
    <label>
    Last Name:<br/> 
    <input 
    type="text" 
    name="lastName" 
    placeholder="Put Last Name Here" 
    required="required" 
    tabindex="20" 
    title="Last Name is a required" 
    />
    </label>
    <br/>
    
    <label>
    Email:<br/> 
    <input 
    type="email" 
    name="Email" 
    placeholder="Put Email Here" 
    required="required" 
    tabindex="30" 
    title="Email is a required" 
    />
    </label>
    <br/>
    <input type="submit" />
    </form>
    ';
}

