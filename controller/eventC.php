<?php

// modifier les path 
require_once('C:/xampp/htdocs/projet/config.php');
include 'C:/xampp/htdocs/projet/model/event.php';

// modifier nom de la class 
class eventC
{

    public function create($event)
    {
        $sql = "INSERT INTO `event`(`nom`, `description`, `date`, `prix`, `localisation`, `photo`) VALUES (:nom , :description,:date,:prix,:localisation,:photo)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'nom' => $event->getNom(),
                'description' => $event->getDescription(),
                'date' => $event->getDate(),
                'prix' => $event->getPrix(),
                'localisation' => $event->getLocalisation(),
                'photo' => $event->getPhoto(),

            ]);
            header('Location:index.php');
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }

    public function update($event, $id)
    {
        $sql = "UPDATE `event` 
            SET `nom` = :nom, 
                `description` = :description, 
                `date` = :date, 
                `prix` = :prix, 
                `localisation` = :localisation, 
                `photo` = :photo 
            WHERE `id` = :id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'nom' => $event->getNom(),
                'description' => $event->getDescription(),
                'date' => $event->getDate(),
                'prix' => $event->getPrix(),
                'localisation' => $event->getLocalisation(),
                'photo' => $event->getPhoto(),
                'id' => $id
            ]);
            header('Location:index.php');
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }

    public function getOne($id)
    {
        $sql = "SELECT * FROM `event` WHERE `id` = :id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'id' => $id
            ]);
            return $query->fetch(PDO::FETCH_ASSOC); // Return the selected event as an associative array
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
            return null; // Return null in case of an error
        }
    }

    public function delete($id)
    {
        $sql = "DELETE FROM `event` WHERE `id`=:id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'id' => $id,
            ]);
            header('Location:index.php');
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }

    public function read()
    {
        $sql = "SELECT * FROM `event` WHERE 1";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur:' . $e->getMessage());
        }
    }
}
