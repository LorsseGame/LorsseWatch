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

    public function changeSlider($codeAnime, $codeSlider) {
        $changer = $this->PDO->prepare("UPDATE `slider` SET `codeAnime`= ? WHERE `codeSlider` = ?");
        $changer->bindValue(1, $codeAnime, PDO::PARAM_INT);
        $changer->bindValue(2, $codeSlider, PDO::PARAM_INT);
        $changer->execute();
        return $changer->fetch();
    }
   

    public function affichageSlider($codeSlider){
        $affichage = $this->PDO->prepare("SELECT `codeAnime` FROM `slider` WHERE `codeSlider` = ?");
        $affichage->bindValue(1, $codeSlider, PDO::PARAM_INT);
        $affichage->execute();
        return $affichage->fetch();
    }
    
}
