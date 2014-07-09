<?php
    
/*
why is namespaces used 
1)Name collisions between code you create, and internal PHP classes/functions/constants or third-party classes/functions/constants.
2)Ability to alias (or shorten) Extra_Long_Names designed to alleviate the first problem, improving readability of source code.
*/


//define a namespace
namespace my\name; 

/*
things that are affected by namespaces are following 
 1)classes (including abstracts and traits)
 2)interfaces
 3)functions
 4)constants
all the above will be affected by namespaces

namespaces must be at the top of the page(not even white spaces are allowed), or else it is a fatal error, an exeption for this is declare construct

This is fatal error
------------
<html>
<?php
namespace MyProject; // fatal error - namespace must be the first statement in the script
?>
-----------

This is parse error
-----------
You should not try to create namespaces that use PHP keywords. These will cause parse errors.
namespace Project/Classes/Function; // Causes parse errors
namespace Project/Abstract/Factory; // Causes parse errors  
-----------

see how constants are affected by namespaces :P
*/ 










?>