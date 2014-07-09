<?php
//-----------------------------------------------------------
//file1.php

namespace Foo\Bar\subnamespace;

const FOO = 1;
function foo() {}
class foo
{
    static function staticmethod() {}
}
//-------------------------------------------------------------


//-----------------------------------------------------------
//file2.php

<?php
namespace Foo\Bar;
include 'file1.php';
const FOO = 2;
function foo() {}
class foo
{
    static function staticmethod() {}
}

//Unqualified name, or an unprefixed class name (this is actually working within the namespace of file2.php)	
//-----------------------------------------------------------------------------------------------------------
foo();   //this is actually calining a function Foo\Bar\foo() which is @ line number 23;
foo::staticmethod(); // resolves to class Foo\Bar\foo, method staticmethod @ line number 23;
echo FOO; // resolves to constant Foo\Bar\FOO

// Qualified name (this is actually getting into the namespace of file1.php))
//------------------------------------------------------------------------------------------
subnamespace\foo(); // resolves to function Foo\Bar\subnamespace\foo 
subnamespace\foo::staticmethod(); // resolves to class Foo\Bar\subnamespace\foo,
                                  // method staticmethod
echo subnamespace\FOO; // resolves to constant Foo\Bar\subnamespace\FOO


//Fully qualified name (this is giving full namespace)
//-------------------------------------------------------------------------------------------------
\Foo\Bar\foo(); // resolves to function Foo\Bar\foo
\Foo\Bar\foo::staticmethod(); // resolves to class Foo\Bar\foo, method staticmethod
echo \Foo\Bar\FOO; // resolves to constant Foo\Bar\FOO
//------------------------------------------------------------------------------------




//1 Accessing global classes, functions and constants from within a namespace
namespace Foo;

function strlen() {}
const INI_ALL = 3;
class Exception {}

$a = \strlen('hi'); // calls global function strlen
$b = \INI_ALL; // accesses global constant INI_ALL
$c = new \Exception('error'); // instantiates global class Exception
?>







