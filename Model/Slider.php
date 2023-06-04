<?php
class Slider extends Database {
    private $code;
    private $nomSlider;
    private $codeAnime;

    public function getCode()
    {
        return $this->code;
    }

    public function setCode($code)
    {
        $this->code = $code;
    }

    public function getNomSlider()
    {
        return $this->nomSlider;
    }

    public function setNomSlider($nomSlider)
    {
        $this->nomSlider = $nomSlider;
    }
    public function getCodeAnime()
    {
        return $this->codeAnime;
    }

    public function setCodeAnime($codeAnime)
    {
        $this->codeAnime = $codeAnime;
    }

    public function changeSlider($codeAnime,$codeSlider) {
        $changer = $this->PDO->query("UPDATE `slider` SET `codeAnime`= $codeAnime WHERE `codeSlider` = $codeSlider ;");
        return $changer->fetch();
    }
   

    public function affichageSlider($codeSlider){
        $affichage = $this->PDO->query("SELECT `codeAnime` FROM `slider` WHERE `codeSlider` = $codeSlider ;");
        return $affichage->fetch();
    }
    
}