<?php

class UserService implements UserServiceInterface
{

    /**
     * @var \PDO
     */
    private $db;

    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    public function register(
      string $email,
      string $username,
      DateTime $birthDate,
      string $password,
      string $passwordConfirm
    ) {
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
        if (!$email) {
            throw new RegisterException("Invalid email");
        }
        $birthDate = $birthDate->format('Y-m-d');
        if (!$birthDate) {
            throw new RegisterException("Invalid birth date");
        }
        if ($_POST['password'] !== $_POST['passwordConfirm']) {
            throw new RegisterException("Passwords do not match");
        }
        $password = password_hash($password, PASSWORD_BCRYPT);

        $query = "SELECT 1 FROM users WHERE email = ? OR username = ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute(
          [
            $email,
            $username,
          ]
        );
        if ($stmt->rowCount()) {
            header("Location: login.php");
            exit;
            throw new LoginException("Username or Email already exists");
        }

        $query = "INSERT INTO users (
                      email, 
                      username, 
                      birthday,
                      password
                      ) VALUES (
                      ?,
                      ?,
                      ?,
                      ?
                      );";
        $stmt = $this->db->prepare($query);
        $stmt->execute(
          [
            $email,
            $username,
            $birthDate,
            $password,
          ]
        );
    }

    public function edit(
      int $id,
      array $userCurrentData,
      string $email,
      string $username,
      DateTime $birthDate,
      string $password,
      string $passwordConfirm
    ){
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
        if (!$email) {
            throw new EditException("Invalid email");
        }
        $birthDate = $birthDate->format('Y-m-d');
        if (!$birthDate) {
            throw new EditException("Invalid birth date");
        }
        if ($password !== $passwordConfirm) {
            throw new EditException("Passwords do not match");
        }
        $password = password_hash($password, PASSWORD_BCRYPT);

        if ($username !== $userCurrentData['username']) {
            $query = "SELECT 1 FROM users WHERE username = ?";
            $stmt = $this->db->prepare($query);
            $stmt->execute(
              [
                $username
              ]
            );
            if ($stmt->rowCount()) {
                throw new EditException("Username already taken");
            }
        }

        if ($email !== $userCurrentData['email']) {
            $query = "SELECT 1 FROM users WHERE email = ?";
            $stmt = $this->db->prepare($query);
            $stmt->execute(
              [
                $email
              ]
            );
            if ($stmt->rowCount()) {
                throw new EditException("Email already taken");
            }
        }

        $query = "UPDATE users 
                    SET
                    email = ?, 
                    username = ?, 
                    birthday = ?,
                    password = ?
                    WHERE id = ?;";
        $stmt = $this->db->prepare($query);
        $stmt->execute(
          [
            $email,
            $username,
            $birthDate,
            $password,
            $id,
          ]
        );
    }

    public function login(string $username, string $password): bool
    {
        $query = "SELECT id, email, password 
                    FROM users 
                    WHERE username = :login OR email = :login";

        $stmt = $this->db->prepare($query);
        $stmt->bindValue(":login", $username);
        $stmt->execute();
        $userData = $stmt->fetch(PDO::FETCH_ASSOC);
        $passwordHash = $userData['password'];

        if (!($userData || password_verify($password, $passwordHash))) {
            return false;
        }

        $_SESSION['user_id'] = $userData['id'];

        return true;
    }

    public function getEmail(int $id): string
    {
        $query = "SELECT email FROM users WHERE id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute(
          [
            $id
          ]
        );

        return $stmt->fetchColumn();
    }

    public function getUsername(int $id): string
    {
        $query = "SELECT username FROM users WHERE id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute(
          [
            $id
          ]
        );

        return $stmt->fetchColumn();
    }

    public function getDaysToBirthday(int $id): string
    {
        $query = "SELECT birthday FROM users WHERE id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute(
          [
            $id
          ]
        );

        $birthday = new DateTime($stmt->fetchColumn());
        $age = date('Y') - $birthday->format('Y');
        $birthday->modify("+{$age} years");
        $currentTime = new DateTime();
        if ($birthday < $currentTime) {
            $birthday->modify("+1 year");
        }

        return $birthday->diff($currentTime)->days;
    }
}