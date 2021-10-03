<?php
function addContact(array $params): bool
{
    global $conn;
    $sql = "INSERT INTO contacts (name , subject , description , email) VALUES ( ? , ? , ? , ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssss', $params['contactName'], $params['contactSubject'], $params['contactDescription'], $params['contactEmail']);
    return $stmt->execute() ?? false;
}

function contacts(int $limit = null, int $id = null, int $readed = null)
{
    global $conn;
    $limitCondition = null;
    if (isset($limit) and is_numeric($limit)) {
        $limitCondition = "LIMIT {$limit}";
    }

    $idCondition = null;
    if (isset($id) and is_numeric($id)) {
        $idCondition = "WHERE id LIKE {$id}";
    } elseif (isset($readed) and is_numeric($readed)) {
        $idCondition = "WHERE readed LIKE {$readed}";
    }



    $sql = "SELECT id , name , subject , description , email , readed ,created_at FROM contacts {$idCondition} ORDER BY created_at DESC {$limitCondition}";
    $stmt = $conn->prepare($sql);
    $stmt->bind_result($id, $name, $subject, $description, $email, $readed, $created_at);
    $stmt->execute();
    $counter = 0;
    while ($stmt->fetch()) {
        $result[$counter] = [
            'id' => $id,
            'name' => $name,
            'subject' => $subject,
            'description' => $description,
            'email' => $email,
            'readed' => $readed,
            'createdAt' => $created_at
        ];
        $counter++;
    }
    return $result ?? null;
}

function contactsReaded(bool $read): int
{
    global $conn;
    $sql = "SELECT COUNT(id) AS number FROM contacts WHERE readed = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $read);
    $stmt->bind_result($number);
    $stmt->execute();
    $stmt->fetch();
    return $number ?? 0;
}


function deleteMassage(int $massageId): bool
{
    global $conn;
    $sql = "DELETE FROM contacts WHERE id LIKE ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $massageId);
    return $stmt->execute() ?? false;
}


function toggleStatusMassage(int $msgId): bool
{
    global $conn;
    $sql = "UPDATE contacts SET readed = 1 - readed WHERE id LIKE ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $msgId);
    return $stmt->execute() ?? false;
}


function sendEmail(string $email, string $subject, string $msg): bool
{
    return mail($email, $subject, $msg) ?? false;
}


function addCallInfo(array $params): bool
{
    global $conn;
    $sql = "UPDATE call_us_info SET description = ? , phoneNumber = ? , email = ? , address = ? WHERE id = 1";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssss', $params['callDescription'], $params['callPhone'], $params['callEmail'], $params['callAddress']);
    return $stmt->execute() ?? false;
}

function getCallInfo()
{
    global $conn;
    $sql = "SELECT id , description , phoneNumber , email , address FROM call_us_info";
    $stmt = $conn->prepare($sql);
    $stmt->bind_result($id, $description, $phoneNumber, $email, $address);
    $stmt->execute();
    $stmt->fetch();
    $result = [
        'id' => $id,
        'description' => $description,
        'phone' => $phoneNumber,
        'email' => $email,
        'address' => $address
    ];
    return $result ?? null;
}
