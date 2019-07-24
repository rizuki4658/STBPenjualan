<?php 
    function cek_data($user,$pass)
    {
        global $link;

        $query = "SELECT password FROM admin WHERE username = '$user' ";
        $result = mysqli_query($link,$query);
        $hash = mysqli_fetch_assoc($result)['password'];

        if( $pass == $hash )
        {
            return true;
        }else{
            return false;
        }
    }