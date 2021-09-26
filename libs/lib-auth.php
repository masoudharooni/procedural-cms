<?php
function isThereEmail(string $email): bool
{
    global $conn;
    $sql = "SELECT id FROM admins WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $email);
    $stmt->bind_result($id);
    $stmt->execute();
    $stmt->fetch();
    return (is_numeric($id) ? true : false);
}

function getUserByEmail(string $email)
{
    global $conn;
    $sql = "SELECT id , username , password , email , first_name , last_name , created_at
    FROM admins WHERE email LIKE ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $email);
    $stmt->bind_result($id, $username, $password, $emailNow, $firstName, $lastName, $created_at);
    $stmt->execute();
    $stmt->fetch();
    $result = [
        'id' => $id,
        'username' => $username,
        'password' => $password,
        'email' => $emailNow,
        'firstname' => $firstName,
        'lastname' => $lastName,
        'created_at' => $created_at
    ];
    return $result ?? null;
}

function admin_login(string $email, string $password): bool
{
    if (isThereEmail($email)) {
        $user = getUserByEmail($email);
        if (!is_null($user)) {
            if (password_verify($password, $user['password'])) {
                $_SESSION['admin_login'] = [
                    'id' => $user['id'],
                    'username' => $user['username'],
                    'password' => $user['password'],
                    'email' => $user['email'],
                    'firstname' => $user['firstname'],
                    'lastname' => $user['lastname']
                ];
                return true;
            }
        }
    }
    return false;
}

function adminLogout()
{
    unset($_SESSION['admin_login']);
}
