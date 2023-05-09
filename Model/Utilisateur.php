<?php

class Utilisateur extends Database
{
    private $email;
    private $MotdePasse;
    public $pseudo;
    private $lien_image;
    private $desactiver;
    private $id;
    private $prenom;
    private $nom;
    private $date_naissance;

    public function getDate_naissance()
    {
        $this->date_naissance;
    }
    public function setDate_naissance($date_naissance)
    {
        $this->date_naissance = $date_naissance;
    }
    public function getPrenom()
    {
        $this->prenom;
    }
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }
    public function getNom()
    {
        $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    public function getEmail()
    {
        $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getId()
    {
        $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getMotdePasse()
    {
        $this->MotdePasse;
    }
    public function setMotdePasse($MotdePasse)
    {
        $this->MotdePasse = $MotdePasse;
    }
    public function getLien_image()
    {
        $this->lien_image;
    }
    public function setLien_image($lien_image)
    {
        $this->lien_image = $lien_image;
    }
    public function getDesactiver()
    {
        $this->desactiver;
    }
    public function setDesactiver($desactiver)
    {
        $this->desactiver = $desactiver;
    }


    public function supprimer()
    {
        $supprimer = $this->PDO->prepare("DELETE FROM `utilisateur` WHERE Code_utilisateur=?");
        $supprimer->bindValue(1, $this->id, PDO::PARAM_INT);
        $supprimer->execute();
    }

    public function Desactiver()
    {
        $desacitver = $this->PDO->prepare("UPDATE `utilisateur` SET desactiver='1' WHERE Code_utilisateur=?");
        $desacitver->bindValue(1, $this->id, PDO::PARAM_INT);
        $desacitver->execute();
    }

    public function activer()
    {
        $activer = $this->PDO->prepare("UPDATE utilisateur SET desactiver = DEFAULT WHERE AdresseEmail_utilisateur=? ;");
        $activer->bindValue(1, $this->email, PDO::PARAM_STR);
        $activer->execute();
    }

    public function verif_desactiver()
    {
        $desactiver = $this->PDO->prepare("SELECT desactiver,AdresseEmail_utilisateur FROM utilisateur WHERE AdresseEmail_utilisateur =?");
        $desactiver->bindValue(1, $this->email, PDO::PARAM_STR);
        $desactiver->execute();
        return $desactiver->fetch();
    }

    public function verif()
    {

        $nbuser = $this->PDO->prepare("SELECT  Pseudo_utilisateur,AdresseEmail_utilisateur FROM `utilisateur` WHERE Pseudo_utilisateur =? OR AdresseEmail_utilisateur =? ");
        $nbuser->bindValue(1, $this->pseudo, PDO::PARAM_STR);
        $nbuser->bindValue(2, $this->email, PDO::PARAM_STR);
        $nbuser->execute();
        return $nbuser->fetch(PDO::FETCH_ASSOC);
    }

    public function verif2()
    {
        $recup = $this->PDO->prepare("SELECT Code_utilisateur,AdresseEmail_utilisateur,MotdePasse_utilisateur,Pseudo_utilisateur,lien_image,desactiver,Code_role FROM `utilisateur`  WHERE AdresseEmail_utilisateur = ?");
        $recup->bindValue(1, $this->email, PDO::PARAM_STR);
        $recup->execute();
        return $recup->fetch(PDO::FETCH_ASSOC);
    }
    public function info_profil()
    {
        $recup = $this->PDO->prepare("SELECT Code_utilisateur,DateCreationCompte__utilisateur FROM `utilisateur`  WHERE Code_utilisateur =?");
        $recup->bindValue(1, $this->id, PDO::PARAM_STR);
        $recup->execute();
        return $recup->fetch(PDO::FETCH_ASSOC);
    }

    public function update_pseudo()
    {
        $modif = $this->PDO->prepare("UPDATE `utilisateur` SET Pseudo_utilisateur=? WHERE Code_utilisateur=?");
        $modif->bindValue(1, $this->pseudo, PDO::PARAM_STR);
        $modif->bindValue(2, $this->id, PDO::PARAM_STR);
        $modif->execute();
    }
    public function update_email()
    {
        $modif = $this->PDO->prepare("UPDATE `utilisateur` SET AdresseEmail_utilisateur=? WHERE Code_utilisateur=?");
        $modif->bindValue(1, $this->email, PDO::PARAM_STR);
        $modif->bindValue(2, $this->id, PDO::PARAM_STR);
        $modif->execute();
    }
    public function update_password()
    {
        $modif = $this->PDO->prepare("UPDATE `utilisateur` SET MotdePasse_utilisateur=? WHERE Code_utilisateur=?");
        $modif->bindValue(1, $this->MotdePasse, PDO::PARAM_STR);
        $modif->bindValue(2, $this->id, PDO::PARAM_STR);
        $modif->execute();
    }




    public function inscription()
    {
        $inscription = $this->PDO->prepare("INSERT INTO `utilisateur`(AdresseEmail_utilisateur, MotdePasse_utilisateur,Pseudo_utilisateur,lien_image,Prenom_utilisateur,Nom_utilisateur) VALUES (?,?,?,?,?,?);");
        $inscription->bindValue(1, $this->email, PDO::PARAM_STR);
        $inscription->bindValue(2, $this->MotdePasse, PDO::PARAM_STR);
        $inscription->bindValue(3, $this->pseudo, PDO::PARAM_STR);
        $inscription->bindValue(4, $this->lien_image, PDO::PARAM_STR);
        $inscription->bindValue(5, $this->prenom, PDO::PARAM_STR);
        $inscription->bindValue(6, $this->nom, PDO::PARAM_STR);
        $inscription->execute();
    }

    public function verif_role()
    {
        $role = $this->PDO->prepare("SELECT Code_role FROM `utilisateur` WHERE Code_utilisateur = ? AND AdresseEmail_utilisateur = ?");
        $role->bindValue(1, $this->id, PDO::PARAM_INT);
        $role->bindValue(2, $this->email, PDO::PARAM_STR);
        $role->execute();
        return $role->fetch();
    }
}
