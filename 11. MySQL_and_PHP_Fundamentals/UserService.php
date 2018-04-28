<?php

class UserService implements UserServiceInterface
{

    private const ADMIN_KEYWORD = "admin";

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
      \DTO\Profile $userCurrentData,
      string $email,
      string $username,
      DateTime $birthDate,
      string $password,
      string $passwordConfirm
    ) {
        $id = $userCurrentData->getId();
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

        if ($username !== $userCurrentData->getUsername()) {
            $query = "SELECT 1 FROM users WHERE username = ?";
            $stmt = $this->db->prepare($query);
            $stmt->execute(
              [
                $username,
              ]
            );
            if ($stmt->rowCount()) {
                throw new EditException("Username already taken");
            }
        }

        if ($email !== $userCurrentData->getEmail()) {
            $query = "SELECT 1 FROM users WHERE email = ?";
            $stmt = $this->db->prepare($query);
            $stmt->execute(
              [
                $email,
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
        $query = "SELECT u.id, u.email, u.password, r.role_name
                    FROM users AS u
                    INNER JOIN roles AS r
                    ON u.role_id = r.id
                    WHERE username = :login OR email = :login
                    LIMIT 1";

        $stmt = $this->db->prepare($query);
        $stmt->bindValue(":login", $username);
        $stmt->execute();
        $userData = $stmt->fetch(PDO::FETCH_ASSOC);
        $passwordHash = $userData['password'];

        if (!($userData || password_verify($password, $passwordHash))) {
            return false;
        }

        $_SESSION['user_id'] = $userData['id'];

        if ($userData['role_name'] === self::ADMIN_KEYWORD) {
            $_SESSION['admin_id'] = self::ADMIN_KEYWORD;
        }

        return true;
    }

    public function getUser($id, $username = null): \DTO\Profile
    {
        $query = "SELECT id, username, email, birthday
                    FROM users
                    WHERE id = ? OR username = ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute(
          [
            $id,
            $username,
          ]
        );

        return $stmt->fetchObject(\DTO\Profile::class);
    }

    public function getAllUsernames(): array
    {
        $query = "SELECT username
                    FROM users
                    WHERE deleted_on IS NULL
                    ORDER BY username ASC";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_COLUMN);
    }

    public function remove(string $username): bool
    {
        $query = "UPDATE users SET deleted_on = NOW() WHERE username = ?";
        $stmt = $this->db->prepare($query);

        return $stmt->execute(
          [
            $username,
          ]
        );
    }

    public function addCategory(string $name): bool
    {
        $query = "INSERT INTO categories (name) VALUE (?)";
        $stmt = $this->db->prepare($query);
        return $stmt->execute(
          [
            $name,
          ]
        );
    }

    public function addTopic(string $name, int $categoryId): bool
    {
        $query = "INSERT INTO topics (name, category_id) VALUE (?, ?)";
        $stmt = $this->db->prepare($query);
        return $stmt->execute(
          [
            $name,
            $categoryId,
          ]
        );
    }
}