<?php
/*
 There are mainly two ways to declare namespaces. 
------------------------------------------------
method 1
---------------
*/

namespace MyProject;

const CONNECT_OK = 1;
class Connection { /* ... */ }
function connect() { /* ... */  }


//i can also have multiple namespaces 

namespace AnotherProject;

const CONNECT_OK = 1;
class Connection { /* ... */ }
function connect() { /* ... */  }


/*
method 2
----------------------
!!
*/

namespace MyProject {
	const CONNECT_OK = 1;
	class Connection { /* ... */ }
	function connect() { /* ... */  }
}

namespace AnotherProject {
	const CONNECT_OK = 1;
	class Connection { /* ... */ }
	function connect() { /* ... */  }
}


/*
=============================================================================================================================
Notes
It is strongly discouraged as a coding practice to combine multiple namespaces into the same file.
======================================================================================================================


it is perfectly normal to have namespaces with no name, which will refer to global namespaces
*/

namespace { // global code
session_start();
$a = MyProject\connect();
echo MyProject\Connection::start();
}