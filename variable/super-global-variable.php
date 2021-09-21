<?php 
/****
---- variable 
			-- local variable : 
					* declared inside a function has a local scope
					* its value remains valid just within the functio.

						
			--global variable
					* declared outside a function has a local scope
					* its value remains valid just outsude the function.

					* important note:
							if we want to access data outside a function from code inside a function we have to use 
							"global" keywords within the function.


			-- static variable
					* A variable within a function reset everytime when we call it. In case if we need, variable values to remain
					save even outside the function then we have to use static keyword.

			-- static variable : 
					* they are bult-in variables that are always available in all scopes
					($GlOBALS. $_SERVER, $_REQUEST, $_POST, $_GET, $_FILES, $_ENV, $_COOKIES, $_SESSION)

*/

// ===== static variable ===== 

$a = 10; /// u can access this variable in other files too 

function display()
{
	echo $GLOBALS["a"] ."<br/>";
}
display();

		?>

<?php
function test() {
    $foo = "local variable";

    echo '$foo in global scope: ' . $GLOBALS["foo"] . "<br/>";
    echo '$foo in current scope: ' . $foo . "\n";
}

$foo = "Example content";
test();
?>

