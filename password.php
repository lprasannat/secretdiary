<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//$salt="l@34$#";
//echo md5("$salt,password");
//echo md5("6e4f962dc1975dbc37abb196e608ee82");
echo md5(md5($row['id'])."password");
