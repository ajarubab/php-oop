<?php

/**
 * Abstact Class is the class which contains atleast one abstract function
 * Abstract Function is the function which is defined but not declared
 * we use the keyword Abstract before keyword class to make it abstract class
 * We cannot create any object of an abstract class
 * The extended (child) class must have it's parent abstact function declared/defined
 */

abstract class Bank
{
    abstract function idProof();
    function accountType(){
        echo "customer details showing here : ";
    }
}

class Pnb extends Bank
{
    function idProof()
    {
        return "PNB: Require Aadhar and Pan Card as Id proof.";
    }
    function accountZeroBalanceType(){
        echo "Zero Balance Account of PNB";
    }
}

class SBI extends Bank
{
    function idProof()
    {
        return "SBI: Require Aadhar Card, PAN card and Passport as Id proof.";
    }
    function accountZeroBalanceType(){
        echo "Zero Balance Account of SBI";
    }
    function accountMin5kBalanceType(){
        echo "Minimum 5k Balance require to maintain account of SBI";
    }
}

class Kotak extends Bank
{
    function idProof()
    {
        return "Kotak: Require PAN Card and Passport as Id proof.";
    }
    function accountZeroBalanceType(){
        echo "Zero Balance Account of Kotak";
    }
    function accountMin5kBalanceType(){
        echo "Minimum 5k Balance require to maintain account of Kotak";
    }
    function accountMin10kBalanceType(){
        echo "Minimum 10k Balance require to maintain account of Kotak";
    }
}

$pnbObj = new Pnb();
echo "<br>";
echo $pnbObj->idProof();
echo "<br>";
echo $pnbObj->accountZeroBalanceType();
echo "<br>";
echo "<br>";

$sbiObj = new SBI();
echo "<br>";
echo $sbiObj->idProof();
echo "<br>";
echo $sbiObj->accountMin5kBalanceType();
echo "<br>";
echo "<br>";


$ktkObj = new Kotak();
echo "<br>";
echo $ktkObj->idProof();
echo "<br>";
echo $ktkObj->accountMin5kBalanceType();
echo "<br>";
echo $ktkObj->accountMin10kBalanceType();
