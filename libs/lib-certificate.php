<?php
function updateCertificate(array $params, $image = null)
{
    global $conn;
    $imageCondition = null;
    if (!is_null($image) && is_string($image)) {
        $imageCondition = " , image = ?";
    }

    $sql = "UPDATE certificate SET title = ? , description = ?  {$imageCondition}  WHERE id LIKE 1";
    $stmt = $conn->prepare($sql);
    if (!is_null($imageCondition)) {
        $stmt->bind_param(
            'sss',
            $params['name'],
            $params['description'],
            $image,
        );
    } else {
        $stmt->bind_param(
            'ss',
            $params['name'],
            $params['description'],
        );
    }
    return $stmt->execute() ?? false;
}


function getCertificate()
{
    global $conn;
    $sql = "SELECT id , title , description , image FROM certificate WHERE id LIKE 1";
    $stmt = $conn->prepare($sql);
    $stmt->bind_result($id, $title, $description, $image);
    $stmt->execute();
    $stmt->fetch();
    $result = [
        'id' => $id,
        'title' => $title,
        'description' => $description,
        'imagePath' => $image,
    ];
    return $result ?? null;
}
