<?php

namespace App\Models\forms;

use Nette;

class StiznostForm extends \Nette\Application\UI\Form
{
public function __construct(Nette\ComponentModel\IContainer $parent = null, string $name = null)
{
    parent::__construct($parent, $name);

    $this->addText("name", "Jméno:")
    ->setRequired("vypln jmeno");
    $this->addText("surname", "Příjmení:")
        ->setRequired("vypln prijmeni");
    $this->addEmail("email", "E-mail:")
        ->setRequired("zadej email");
    $this->addRadioList("pohlavi", "Pohlaví:", array("Muž", "Žena"))
    ->setRequired();
    $this->addSelect("typosoby", "O jakou osobu se jedná", array("Právnická", "Fyzická"))
        ->setPrompt("---Druh osoby---")
        ->setRequired();
$this->addText("nakoho", "Celé jméno na koho si stěžujeme:")
    ->addRule($this::MAX_LENGTH,"moc dlouhe", 32)
->setRequired();
$this->addTextArea("adresa", "Adresa na koho si stěžujeme:")
    ->addRule($this::MIN_LENGTH, "minimalne 6 znaku", 6);
$this->addText("psc", "PSČ")
    ->addRule($this::INTEGER, " cele cislo")
->addRule($this::MIN_LENGTH, "min 5 znaku", 5);
$this->addCheckboxList("pricina","Příčina stížnosti:", array("Poškození majetku", "Ztráta duševního vlastnictví", "Krádež", "Napadení","Nebezpečné prostředí"));
$this->addInteger("hodnoceni", "Hodnocení:")
    ->addRule($this::PATTERN, " pouze 0-5","[0,5]" );




    $this->addSubmit("submit", "Odeslat")
    ->isRequired();
    $this->onSuccess[]=array($this,"FormSubmitted");
}
public function FormSubmitted(StiznostForm $form){
    dump($form->values);
}
}