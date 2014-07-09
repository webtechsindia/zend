<?php
/*
Syntax for extending classes in namespaces is still the same. 
Lets call this Object.php: 
*/
<?php 
namespace com\rsumilang\common; 
class Object{ 
   // ... code ... 
} 

//And now lets create a class called String that extends object in String.php: 
class String extends com\rsumilang\common\Object{ 
   // ... code ... 
} 

//Now if you class String was defined in the same namespace as Object then you don't have to specify a full namespace path: 
namespace com\rsumilang\common; 
class String extends Object 
{ 
   // ... code ... 
} 

//Lastly, you can also alias a namespace name to use a shorter name for the class you are extending incase your class is in seperate namespace: 
namespace com\rsumilang\util; 
use com\rsumlang\common as Common; 
class String extends Common\Object 
{ 
   // ... code ... 
} 


?> 