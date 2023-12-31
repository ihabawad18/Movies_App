<?php
class UserModel
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function loginUser($user)
    {
        // Hash the password and compare it with the one in the database
        try {

            $password = $user['password'];
            $email = $this->db->quote($user['email']);

            $sql = "SELECT ID, Password FROM users WHERE Email = $email";

            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);


            if ($row && password_verify($password, $row['Password'])) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            // echo $sql . "<br>" . $e->getMessage();
            return false;
        }


    }

    public function registerUser($user)
    {
        try {

            $hashedPassword = $this->db->quote(password_hash($user['password'], PASSWORD_DEFAULT));
            $email = $this->db->quote($user['email']);
            $firstName = $this->db->quote($user['firstName']);
            $lastName = $this->db->quote($user['lastName']);
            $DOB = $this->db->quote($user['DOB']);

            $sql = "INSERT INTO users (Email, Password, FirstName, LastName, DOB) 
                        VALUES ($email, $hashedPassword, $firstName, $lastName, $DOB)";

            $this->db->exec($sql);
            return true;
        } catch (Exception $e) {
            //echo $sql . "<br>" . $e->getMessage();
            return false;
        }


    }

    public function getIsAdmin($email)
    {
        
        try {

            $email = $this->db->quote($email);

            $sql = "SELECT isAdmin FROM users WHERE Email = $email";

            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            return $row['isAdmin'];
        } catch (Exception $e) {
            // echo $sql . "<br>" . $e->getMessage();
            return null;
        }
    }

    public function updatePassword($email, $oldPassword, $newPassword)
    {

        try {

            $email = $this->db->quote($email);

            $sql = "SELECT ID, Password FROM users WHERE Email = $email";

            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($row && password_verify($oldPassword, $row['Password'])) {
                // Old password is correct, proceed to update the password
                $hashedNewPassword = password_hash($newPassword, PASSWORD_DEFAULT);
                $hashedNewPassword = $this->db->quote($hashedNewPassword);

                $sqlUpdate = "UPDATE users SET Password = $hashedNewPassword , Updated_At = CURRENT_TIME() WHERE Email = $email";

                $stmtUpdate = $this->db->prepare($sqlUpdate);
                $stmtUpdate->execute();
                return true;
            } else {
                return false;
            }

        } catch (Exception $e) {
            // echo $sql . "<br>" . $e->getMessage();
            return false;
        }
    }
}

?>