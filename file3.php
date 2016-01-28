<?php
/**
* Defies imagination, extends boundaries and saves the world ...all before breakfast!
*/
function foo()
{
}


/**
* return the date of Easter
* 
* Using the formula from "Formulas that are way too complicated for anyone to 
* ever understand except for me" by Irwin Nerdy, this function calculates the 
* date of Easter given a date in the Ancient Mayan Calendar, if you can also
* guess the birthday of the author.
*/

/**
* The short description
*
* As many lines of extendend description as you want {@link element} links to an element
* {@link http://www.example.com Example hyperlink inline link} links to a website
* Below this goes the tags to further describe element you are documenting
*
* @param  	type	$varname	description
* @return 	type	description
* @access 	public or private
* @author 	author name 
* @copyright	name date
* @version	version
* @see		name of another element that can be documented, produces a link to it in the documentation
* @link		a url
* @since  	a version or a date
* @deprecated	description
* @deprec	alias for deprecated
* @magic	phpdoc.de compatibility
* @todo		phpdoc.de compatibility
* @exception	Javadoc-compatible, use as needed
* @throws  	Javadoc-compatible, use as needed
* @var		type	a data type for a class variable
* @package	package name
* @subpackage	sub package name, groupings inside of a project
*/


/**
* return the day of the week
*
* @param string $month 3-letter Month abbreviation
* @param integer $day day of the month
* @param integer $year year
* @return integer 0 = Sunday, value returned is from 0 (Sunday) to 6 (Saturday)
*/
function day_week($month, $day, $year)
{

}


/**
* class 1
* 
* example of {@link http://phpdocu.sourceforge.net Inline linking to a website}
* example of use of the :: scope operator
* @see subclass::method()
*/
class main_class
{
	/**
	* example of linking to same class, outputs "function main_class::parent_method()
	* @see function parent_method
	*/
	$var foo = 3;

	/**
	* subclass inherits this method.
	* example of a word which is either a constant or class name, in this case a classname
	* @see subclass
	* @see subclass::$foo
	*/

	function parent_method()
	{
		if ($this->foo==9) die;
	}
}


/**
* this class extends main_class
* @see main_class
*/
subclass extends main_class
{
	/**
	* bar.
	* example of same class lookup - see will look through parent hierarchy to find the method in {@link main_class}
	* the above inline link tag will parse as main_class
	* @see parent_method()
	*/
	var $foo = 9;
}


/**
* class 1
* 
* example of {@link http://phpdocu.sourceforge.net}
* displays as "example of http://phpdocu.sourceforge.net"
*/
class main_class
{

	/**
	* This function sends the user to {@link http://www.sf.net The SourceForge Website}
	* displays as "This function send the user to The SourceForge Website"
	*/
	function goto_sourceforge()
	{
		header("Location: http://www.sf.net");
	}
}


/**
* this class extends {@link main_class}
* displays as "this class extends main_class"
*/
subclass extends main_class
{
	/**
	* bar.
	* this class inherits {@link main_class::goto_sourceforge()}
	*/
	var $foo = 9;
}


/**
* Page-level DocBlock
*
* This procedural page contains many functions that blah blah blah
*/
/**
* function or define DocBlock
*/
function blah()
{
}


/**
* Almost a Page-level DocBlock
*
* This procedural page contains many functions that blah blah blah
*/
define("screwedup",66);


/**
* function or define DocBlock
*/
function blah()
{
}


define("screwedup",66);


/**
* DocBlock will document function blah()
*/
// random comment
$a += strpos(get_another_thingy(66,$ufta));
$ark->build($a);
// etc. etc.
function blah()
{
}