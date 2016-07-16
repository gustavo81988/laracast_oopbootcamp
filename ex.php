<?php 

use Acme\Users\Person;
use Acme\Staff;
use Acme\Business;

$jeffrey = new Person('Jeffrey Way');
$staff = new Staff([$jeffrey]);
$laracast = new Business($staff);
$gustavo = new Person('Gustavo Ramirez');

$laracast->hire($gustavo);

$members = $laracast->getStaffMembers();

echo "<pre>".print_r($members,true)."</pre>";
