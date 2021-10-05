<?php
function addAboutUs(array $prams): bool
{
    global $conn;
    $sql = "INSERT INTO about_us (title , description , sort ) VALUES ( ? , ? , ? )";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssi', $prams['titleAbout'], $prams['descAbout'], $prams['sortAbout']);
    return $stmt->execute() ?? false;
}

function getAboutUs(bool $status = null, int $id = null)
{
    global $conn;
    $condition = null;
    if (is_bool($status) and !is_null($status)) {
        $condition = "WHERE status = {$status}";
    }

    $conditionForId = null;
    if (is_numeric($id) and !is_null($id)) {
        $conditionForId = "WHERE id = {$id}";
    }

    $sql = "SELECT id , title , description  ,  status , sort FROM about_us {$condition} {$conditionForId} ORDER BY sort ASC";
    $stmt = $conn->prepare($sql);
    $stmt->bind_result($id, $title, $description,  $status, $sort);
    $stmt->execute();
    $counter = 0;
    while ($stmt->fetch()) {
        $result[$counter] = [
            'id' => $id,
            'title' => $title,
            'description' => $description,
            'sort' => $sort,
            'status' => $status,
        ];
        $counter++;
    }
    return $result ?? null;
}


function deleteAboutUs(int $id): bool
{
    global $conn;
    $sql = "DELETE FROM about_us WHERE id LIKE ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);
    return $stmt->execute() ?? false;
}

function toggleStatusAboutUs(int $id): bool
{
    global $conn;
    $sql = "UPDATE about_us SET status = 1 - status WHERE id LIKE ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);
    return $stmt->execute() ?? false;
}


function updateAboutUs(object $params, int $id): bool
{
    global $conn;
    $sql = "UPDATE about_us SET title = ? , description = ?  , status = ? , sort = ? WHERE id LIKE ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param(
        'ssiii',
        $params->aboutName,
        $params->aboutDesc,
        $params->aboutStatus,
        $params->aboutSort,
        $id
    );
    return $stmt->execute() ?? false;
}
