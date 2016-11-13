<?php

// abstracts
require_once("classes/abstract/animal.php");
require_once("classes/abstract/enclosure.php");

require_once("classes/abstract/cattle.php");
require_once("classes/abstract/chicken.php");
require_once("classes/abstract/sheep.php");

// traits
require_once("traits/femaleMammal.php");
require_once("traits/femaleBird.php");

// classes
require_once("classes/animals/cow.php");
require_once("classes/animals/bull.php");
require_once("classes/animals/hen.php");
require_once("classes/animals/cockerel.php");
require_once("classes/animals/ewe.php");
require_once("classes/animals/ram.php");

require_once("classes/enclosures/pasture.php");
require_once("classes/enclosures/run.php");
require_once("classes/enclosures/stable.php");

$daisy = new cow;
$grapes = new cow;
$shaun = new ewe;
$buster = new cockerel;
$charmaine = new hen;

//IIIIIIII

//keep track of functions in animal/species abstracts that aren't defined there and enforce them, either through an
// interface or in the abstract definition, if always needed

//QQQQQQQQQ

// should I unset the gender property in constructor for gender-specific classes? need constructor to set gender on classes

/*
make sense to set a constructor on an abstract?  It will never be instantiated, but an extension of it will be.
e.g. I want to set the noise of the cattle abstract to 'moo', but then I'll want extra things happening in the
constructor of the cow and bull classes which extend cattle, which will mean I'll have to override it anyway.

AA Yes it is okay to have a constructor in abstract. In fact do that and then if it needs adding to in extension, in definition call parent construct and then add new functionality. This keeps it solid and dry.

My solution, for now, is to define setNoise in cattle, and to have the constructor of cow and bull call it. is that okay?
*/

// can abstracts have private properties/methods? Surely they are only ever being accessed from an extension, so no.
// yes then can, but indeed there would be no point

// should I be getting a red squiggly underline because chicken doesn't have a setNoise method? not sure, but got an error without it

// command line questions:
// is the folder /sites/php56/.vagrant/machines/developer containing virtualbox where i run vagrant up? not sure why it wasn't working
// how do I get out of my virtual box, once I'm in? exit
// Is this just due to something trivial, like an update, or has something gone wrong? Or am I in the wrong folder? updating xcode id the trick to get git working
// Agreeing to the Xcode/iOS license requires admin privileges, please re-run as root via sudo. - message displayed when tried git commands
