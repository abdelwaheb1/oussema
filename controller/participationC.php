<?php

// modifier les path 
require_once('C:/xampp/htdocs/projet/config.php');
include 'C:/xampp/htdocs/projet/model/participation.php';

// modifier nom de la class 
class participationC
{
    
    public function create($participation)
    {
        $sql = "INSERT INTO `event`( `id_user`, `id_evenement`) VALUES (:id_user,:id_evenement)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'id_user' => $participation->getId_user(),
                'id_evenment' => $participation ->getId_evenement(),
                
            ]);
            header('Location:liste.php');
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }

    public function delete($id)
    {
        $sql = "DELETE FROM `event` WHERE `id` = :id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'id' => $id,
            ]);
            header('Location:liste.php');
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
