<?php


class Tasks
{
    protected $db;

    function __construct()
    {
        $this->db = MyPDO::getInstance();
    }

    function __destruct()
    {
        $this->db = null;
    }


    public function redirectSecretary()
    {
        header("location:../VoirPatient.php");
    }

    public function redirectDoctor()
    {
        header("location:../navigation.php");
    }


    public function sign_in($login, $mdp)
    {
        $sql_authen = 'select * from secretaire where login= :login';
        $rp_authen = $this->db->prepare($sql_authen);
        $rp_authen->bindParam(':login', $login, PDO::PARAM_STR);
        $rp_authen->execute();
        $authen = $rp_authen->fetch(PDO::FETCH_OBJ);
        if ($authen->password == $mdp && $authen->login == $login) {
            return true;
        } else {
            return false;
        }    
    }


    public function addPatient($firstname, $lastname, $sexe, $age , $email, $login , $password)
    {
        $sql = "INSERT INTO user(login, password, firstname,lastname,sexe, age,email) VALUES (:login,:password,:firstname,:lastname,:sexe,:age,:email)";
        $query = $this->db->prepare($sql);
        $query->bindParam("login", $login, PDO::PARAM_STR);
        $query->bindParam("password", $password, PDO::PARAM_STR);
        $query->bindParam("firstname", $firstname, PDO::PARAM_STR);
        $query->bindParam("lastname", $lastname, PDO::PARAM_STR);
        $query->bindParam("sexe", $sexe, PDO::PARAM_STR);
        $query->bindParam("age", $age, PDO::PARAM_INT);
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $query->execute();
        return $this->db->lastInsertId();
    }

    public function addMedecin($codemedecin, $prenom, $nom, $password, $service)
    {
        $sql = "INSERT INTO medecin(codeMedecin, prenom, nom,password,service) VALUES (:codeMedecin,:prenom,:nom,:password,:service)";
        $query = $this->db->prepare($sql);
        $query->bindParam("codeMedecin", $codemedecin, PDO::PARAM_STR);
        $query->bindParam("prenom", $prenom, PDO::PARAM_STR);
        $query->bindParam("nom", $nom, PDO::PARAM_STR);
        $query->bindParam("password", $password, PDO::PARAM_STR);
        $query->bindParam("service", $service, PDO::PARAM_STR);
        $query->execute();
        return $this->db->lastInsertId();
    }

    public function addSecretary($prenom, $nom, $email, $login, $password)
    {
        $sql = "INSERT INTO secretaire(prenom, nom, email,login,password) VALUES (:prenom,:nom,:email,:login,:password)";
        $query = $this->db->prepare($sql);
        $query->bindParam("prenom", $prenom, PDO::PARAM_STR);
        $query->bindParam("nom", $nom, PDO::PARAM_STR);
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $query->bindParam("login", $login, PDO::PARAM_STR);
        $query->bindParam("password", $password, PDO::PARAM_STR);
        $query->execute();
        return $this->db->lastInsertId();
    }



    public function voirPatient()
    {
        $sql = "SELECT * FROM user";
        $query = $this->db->query($sql);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function voirConsultation()
    {
        $sql = "SELECT * FROM consultation LIMIT 3 ";
        $query = $this->db->query($sql);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }


    public function afficherRendezVous()
    {
        $sql = "SELECT * FROM rendezvous";
        $query = $this->db->query($sql);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }



    public function deletePatient($id)
    {
        $query = $this->db->prepare("DELETE FROM user WHERE id = :id");
        $query->bindParam("id", $id, PDO::PARAM_INT);
        $query->execute();
    }


    public function deleteAppointement($id)
    {
        $query = $this->db->prepare("DELETE FROM rendezvous WHERE id = :id");
        $query->bindParam("id", $id, PDO::PARAM_INT);
        $query->execute();
    }



    public function updatePatient($login, $firstname, $lastname, $sexe, $age, $email, $id)
    {
        $sql = "update user set login=:login, firstname=:firstname," .
        " lastname=:lastname, sexe=:sexe, age=:age, email=:email " .
            " where id=:id";
        $query = $this->db->prepare($sql);
        $query->bindParam("login", $login, PDO::PARAM_STR);
        $query->bindParam("firstname", $firstname, PDO::PARAM_STR);
        $query->bindParam("lastname", $lastname, PDO::PARAM_STR);
        $query->bindParam("sexe", $sexe, PDO::PARAM_STR);
        $query->bindParam("age", $age, PDO::PARAM_INT);
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $query->bindParam("id", $id, PDO::PARAM_INT);
        $query->execute();
    }


    public function fixerRendezVous($date, $heure, $condition, $id)
    {
        $sql = "update rendezvous set dateR=:dateR, heure=:heure," .
        " conditions=:conditions " .
        " where id=:id";
        $query = $this->db->prepare($sql);
        $query->bindParam("dateR", $date, PDO::PARAM_STR);
        $query->bindParam("heure", $heure, PDO::PARAM_STR);
        $query->bindParam("conditions", $condition, PDO::PARAM_STR);
        $query->bindParam("id", $id, PDO::PARAM_INT);
        $query->execute();
    }

    public function validerRendezVous($id)
    {
        $sql = "update rendezvous set status=:status" .
        " where id=:id";
        $valider = "validé";
        $query = $this->db->prepare($sql);
        $query->bindParam("status", $valider, PDO::PARAM_STR);
        $query->bindParam("id", $id, PDO::PARAM_INT);
        $query->execute();
    }




    public function details($id)
    {
        $query = $this->db->prepare("SELECT * FROM user WHERE id = :id");
        $query->bindParam("id", $id, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function detailsAppointment($id)
    {
        $query = $this->db->prepare("SELECT * FROM rendezvous WHERE id = :id");
        $query->bindParam("id", $id, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }


    public function login()
    {
       
    }

}
