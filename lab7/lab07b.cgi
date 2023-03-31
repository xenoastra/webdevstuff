#!/usr/bin/perl -wT

use CGI':standard';
use CGI::Carp qw(warningsToBrowser fatalsToBrowser); 
use strict;
print "Content-type: text/html\n\n";

my $fname = param ('firstName');
my $lname = param ('lastName');

my $address = param ('address');
my $city = param ('city');
my $postal = param ('postalCode');
my $province = param ('province');


my $phone = param ('phoneNum');
my $email = param ('emailAddress');


my $errors = " ";


my $phoneSize = length($phone);
my $postalSize = length($postal);

if(not($phone eq $phone+0)){
  $run = 0;
  $errors = $errors."Invalid phone number<br>";
}

if ($phoneSize > 10){ 
	$run = 0;
	$errors = $errors."Phone length too long!<br>";
}

if ($phoneSize < 10){
	$run = 0;
	$errors = $errors."Phone length too short!<br>";
}

if ($postalSize > 7){
	$run = 0;
	$errors = $errors."Postal code length too long!<br>";
}

# if ($postalSize < 7){
# 	$run = 0;
# 	$errors = $errors."Postal code length too short!<br>";
# }

if (not($email =~ /^[a-z0-9.]+\@[a-z0-9.-]+$/)){
	$run = 0;
	$errors = $errors."Email address is not valid.<br>";
}

