<?php

function getInput()
{
    $input = $_GET['input'] ?? 'vul een waarde in hierboven en klik op [check]';
    
    return $input;
}


function getProductNr()
{
    $productnummer = $_GET['productnummer'] ?? 'vul een productnummer in!';
    return (float)$productnummer;
}

function getAmount()
{
    $aantalProd = $_GET['aantal'] ?? 'vul een aantal in!';
    return (float)$aantalProd;
}

function getProductlist()
{
    return ["appels","peren"];
}

function getProductPrice(){
    $productpricelist = [0.25,0.30];
    return ($productpricelist[getProductNr()]*getAmount());
}

function getAge()
{
    $leeftijd = $_GET['leeftijd'] ?? 'vul een leeftijd in!';
    return (float)$leeftijd;
}

function getAgeSale(){
$Age = (int)getAge();

    switch(true){

        case $Age<16:

        return 1;
        break;

        default:
        if(($Age>=16)&&($Age<=19))
        return $Age/100;
        return 0;
        break;
    }

}

?>