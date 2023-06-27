<?php
class Utilisateur extends Database
{
    // Propriétés de la classe Utilisateur
    private $email;
    private $motDePasse;
    private $pseudo;
    private $lienImage;
    private $desactiver;
    private $id;
    private $prenom;
    private $nom;
    private $dateNaissance;
    
    // Getters et setters pour les propriétés
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;
    }
    public function getPseudo()
    {
        return $this->pseudo;
    }

    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getMotDePasse()
    {
        return $this->motDePasse;
    }

    public function setMotDePasse($motDePasse)
    {
        $this->motDePasse = $motDePasse;
    }

    public function getLienImage()
    {
        return $this->lienImage;
    }

    public function setLienImage($lienImage)
    {
        $this->lienImage = $lienImage;
    }

    public function getDesactiver()
    {
        return $this->desactiver;
    }

    public function setDesactiver($desactiver)
    {
        $this->desactiver = $desactiver;
    }
    // Méthode pour supprimer un utilisateur
    public function supprimer()
    {
        $supprimer = $this->PDO->prepare("DELETE FROM `utilisateur` WHERE Code_utilisateur=?");
        $supprimer->bindValue(1, $this->id, PDO::PARAM_INT);
        $supprimer->execute();
    }

    // Méthode pour vérifier si un utilisateur est désactivé
    public function verifDesactiver()
    {
        $desactiver = $this->PDO->prepare("SELECT desactiver,AdresseEmail_utilisateur FROM utilisateur WHERE AdresseEmail_utilisateur =?");
        $desactiver->bindValue(1, $this->email, PDO::PARAM_STR);
        $desactiver->execute();
        return $desactiver->fetch();
    }

    // Méthode pour vérifier si un utilisateur existe déjà
    public function verif()
    {
        $nbuser = $this->PDO->prepare("SELECT  Pseudo_utilisateur,AdresseEmail_utilisateur FROM `utilisateur` WHERE Pseudo_utilisateur =? OR AdresseEmail_utilisateur =? ");
        $nbuser->bindValue(1, $this->pseudo, PDO::PARAM_STR);
        $nbuser->bindValue(2, $this->email, PDO::PARAM_STR);
        $nbuser->execute();
        return $nbuser->fetch(PDO::FETCH_ASSOC);
    }

    // Méthode pour récupérer les informations d'un utilisateur
    public function verif2()
    {
        $recup = $this->PDO->prepare("SELECT Code_utilisateur,AdresseEmail_utilisateur,MotdePasse_utilisateur,Pseudo_utilisateur,lien_image,desactiver,Code_role FROM `utilisateur`  WHERE AdresseEmail_utilisateur = ?");
        $recup->bindValue(1, $this->email, PDO::PARAM_STR);
        $recup->execute();
        return $recup->fetch(PDO::FETCH_ASSOC);
    }

    // Méthode pour récupérer les informations de profil d'un utilisateur
    public function info_profil()
    {
        $recup = $this->PDO->prepare("SELECT Code_utilisateur,DateCreationCompte__utilisateur FROM `utilisateur`  WHERE Code_utilisateur =?");
        $recup->bindValue(1, $this->id, PDO::PARAM_STR);
        $recup->execute();
        return $recup->fetch(PDO::FETCH_ASSOC);
    }

    // Méthode pour mettre à jour le pseudo d'un utilisateur
    public function update_pseudo()
    {
        $modif = $this->PDO->prepare("UPDATE `utilisateur` SET Pseudo_utilisateur=? WHERE Code_utilisateur=?");
        $modif->bindValue(1, $this->pseudo, PDO::PARAM_STR);
        $modif->bindValue(2, $this->id, PDO::PARAM_STR);
        $modif->execute();
    }

    // Méthode pour mettre à jour l'email d'un utilisateur
    public function update_email()
    {
        $modif = $this->PDO->prepare("UPDATE `utilisateur` SET AdresseEmail_utilisateur=? WHERE Code_utilisateur=?");
        $modif->bindValue(1, $this->email, PDO::PARAM_STR);
        $modif->bindValue(2, $this->id, PDO::PARAM_STR);
        $modif->execute();
    }

    // Méthode pour mettre à jour le mot de passe d'un utilisateur
    public function update_password()
    {
        $modif = $this->PDO->prepare("UPDATE `utilisateur` SET MotdePasse_utilisateur=? WHERE Code_utilisateur=?");
        $modif->bindValue(1, $this->motDePasse, PDO::PARAM_STR);
        $modif->bindValue(2, $this->id, PDO::PARAM_STR);
        $modif->execute();
    }

    // Méthode pour inscrire un nouvel utilisateur
    public function inscription()
    {
        $inscription = $this->PDO->prepare("INSERT INTO `utilisateur`(AdresseEmail_utilisateur, MotdePasse_utilisateur,Pseudo_utilisateur,lien_image,Prenom_utilisateur,Nom_utilisateur) VALUES (?,?,?,?,?,?);");
        $inscription->bindValue(1, $this->email, PDO::PARAM_STR);
        $inscription->bindValue(2, $this->motDePasse, PDO::PARAM_STR);
        $inscription->bindValue(3, $this->pseudo, PDO::PARAM_STR);
        $inscription->bindValue(4, $this->lienImage, PDO::PARAM_STR);
        $inscription->bindValue(5, $this->prenom, PDO::PARAM_STR);
        $inscription->bindValue(6, $this->nom, PDO::PARAM_STR);
        $inscription->execute();
    }

    // Méthode pour vérifier le rôle d'un utilisateur
    public function verif_role()
    {
        $role = $this->PDO->prepare("SELECT Code_role FROM `utilisateur` WHERE Code_utilisateur = ? AND AdresseEmail_utilisateur = ?");
        $role->bindValue(1, $this->id, PDO::PARAM_INT);
        $role->bindValue(2, $this->email, PDO::PARAM_STR);
        $role->execute();
        return $role->fetch();
    }

    public function updateImage()
    {
        $update = $this->PDO->prepare("UPDATE `utilisateur` SET `lien_image`= ? WHERE `Code_utilisateur` = ?");
        $update->bindValue(1, $this->lienImage, PDO::PARAM_STR);
        $update->bindValue(2, $this->id, PDO::PARAM_INT);
        $update->execute();
    }

    public function affichageUtilisateur()
    {
        $affiche = $this->PDO->query("SELECT `Pseudo_utilisateur`,`Code_utilisateur`,`desactiver` FROM `utilisateur`");
        return $affiche->fetchAll();
    }

    public function deleteUtilisateur()
    {
        $delete = $this->PDO->prepare("DELETE FROM `utilisateur` WHERE `Code_utilisateur` = ?");
        $delete->bindValue(1, $this->id, PDO::PARAM_INT);
        $delete->execute();
    }

    public function desactiverUtilisateur()
    {
        $desac = $this->PDO->prepare("UPDATE `utilisateur` SET `desactiver`= 1 WHERE `Code_utilisateur` = ?");
        $desac->bindValue(1, $this->id, PDO::PARAM_INT);
        $desac->execute();
    }

    public function reactiverUtilisateur()
    {
        $desac = $this->PDO->prepare("UPDATE `utilisateur` SET `desactiver`= 0 WHERE `Code_utilisateur` = ?");
        $desac->bindValue(1, $this->id, PDO::PARAM_INT);
        $desac->execute();
    }
}

?>
