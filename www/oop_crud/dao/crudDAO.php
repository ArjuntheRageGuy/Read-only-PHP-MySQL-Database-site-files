<?php
class crudDAO{
    private $db;

    public function __construct(PDO $db) {
        $this->db = $db;
    }

    public function read(){
        $sql = $this->db->prepare("SELECT * FROM users WHERE status = 1 ORDER BY lname ASC");
        $sql->execute();
        $result=$sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    
    // Get one row by id (used to pre-fill the edit form)
    public function getById($id) {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE id = :id");
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    // Update one row
    public function update($id, $lname, $fname, $username, $email) {
        $stmt = $this->db->prepare(
            "UPDATE users
            SET lname = :lname,
                fname = :fname,
                username = :username,
                email = :email
            WHERE id = :id"
        );
        return $stmt->execute([
            ':lname'  => $lname,
            ':fname' => $fname,
            ':username'  => $username,
            ':email'     => $email,
            ':id'        => $id,
        ]);
    }
    
    // Delete one row
    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM users WHERE id = :id");
        return $stmt->execute([':id' => $id]);
    }
}
?>
