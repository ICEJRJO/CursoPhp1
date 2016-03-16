<?Php 
//POO
class MyClass
{
	const MY_CONST = 'SNEZAC'; // esta es una constante
	static $staticVar =  'Soy estatico';
	// se pueden ver donde sea
	public static $publicStaticVar = 'publicStatic';
	// solo se pueden ver en la clase
	private static $privateStaticVar = 'privateStaticVar';
	//Se pueden ver en ña cñase y derivadas ( heredadas)
	protected static $protectedStaticVar = ' protectedStaticVar';

	public $property = 'public';
	public $instanceProp;
	protected $prot = 'protected';
	private $priv = 'private';
	
	//Definicion del constructor
	public function __construct($instanceProp){

		$this->instanceProp = $instanceProp;//acceder a las variables de instancia
	}

	//Definicion de metodo
	public function myMethod() {

		print 'MyClass';

	}
	
	final function youCannnotOverridedMe(){

	}


	public static function myStaticMethod(){

		print 'I am static';
		echo"\n";

	}
	
}


echo MyClass::MY_CONST; //imprime value
echo"\n";
echo MyClass::$staticVar; // imprime I am static
echo"\n";

MyClass::myStaticMethod(); // imprime I am static
echo"\n";

$my_class = new MyClass('esta es una instancia');
echo"\n";

echo $my_class->property;
echo"\n";
echo $my_class->instanceProp;
echo"\n";
$my_class->myMethod();
echo"\n";
//$my_class->privateStaticVar; //no se puede acceder


//para heredar clases
class MyOtherclass extends MyClass
{
	function printProtectedProperty(){
		echo $this->prot;
	}
	//Sobre escribir metodos
	function myMethod(){
		parent::myMethod();
		print'> MyOtherClass';
		echo"\n";
	}
}
 $otherClass = new MyOtherClass("Test");
 echo"\n";
 $otherClass->myMethod();


class MyMapClass{

	private $property;

	public function __get($key)
	{
	 return $this->$key;
	}
	public function __set($key, $value)
	{
	 $this->$key = $value;
	}
}

$x = new MyMapClass();
$x->__set('property',5);
echo $x->__get('property');
echo"\n";



//INTERFACES

interface InterfaceOne{
	public function doSomething();
}

interface InterfaceTwo{
	public function doSomethingElse();
}


interface InterfaceThree extends interfaceTwo{
	public function doAnotherContract();
}


class SomeOtherClass implements InterfaceOne, InterfaceTwo{
	public function doSomething(){
		echo'doSomething';
		echo "\n";
	}
	public function doSomethingElse(){
		echo 'doSomethingElse';
		echo "\n";
	}

}
$y= new SomeOtherClass();
$y-> doSomething();
