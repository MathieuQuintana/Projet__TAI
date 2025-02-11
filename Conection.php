<?php
class Utlilisateur{
    // ...test
    // ...
    // ...

    // get all services
    public function check_mail() {
        $query = "SELECT $mail FROM utlilisateur";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // get a service by its id
    public function get_service_by_id($id) {
        $query = "SELECT * FROM service WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute(
            ['id' => $id]
        );
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>