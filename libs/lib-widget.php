<?php

function addWidget(array $params, $imagePath): bool
{
    global $conn;
    $sql = "INSERT INTO widgets (title , description , sort , image)
    VALUES ( ? , ? , ? , ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssis', $params['widgetName'], $params['widgetDescription'], $params['widgetSort'], $imagePath);
    return $stmt->execute() ?? false;
}



function getWidgets(bool $status = null, int $id = null)
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

    $sql = "SELECT id , title , description , sort , status , image,  created_at FROM widgets {$condition} {$conditionForId} ORDER BY sort ASC";
    $stmt = $conn->prepare($sql);
    $stmt->bind_result($id, $title, $description, $sort,  $status, $image,  $created_at);
    $stmt->execute();
    $counter = 0;
    while ($stmt->fetch()) {
        $result[$counter] = [
            'id' => $id,
            'title' => $title,
            'description' => $description,
            'imagePath' => $image,
            'sort' => $sort,
            'status' => $status,
            'createdAt' => $created_at
        ];
        $counter++;
    }
    return $result ?? null;
}


function deleteWidgets(int $widgetId): bool
{
    global $conn;
    $sql = "DELETE FROM widgets WHERE id LIKE ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $widgetId);
    return $stmt->execute() ?? false;
}

function toggleStatusWidget(int $widgetId): bool
{
    global $conn;
    $sql = "UPDATE widgets SET status = 1 - status WHERE id LIKE ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $widgetId);
    return $stmt->execute() ?? false;
}


function updateWidget(array $params, $iamgePath = null)
{
    global $conn;
    $imageCondition = null;
    if (!is_null($iamgePath) && is_string($iamgePath)) {
        $imageCondition = " , image = ?";
    }

    $sql = "UPDATE widgets SET title = ? , description = ? , sort = ? , status = ? {$imageCondition}  WHERE id LIKE ?";
    $stmt = $conn->prepare($sql);
    if (!is_null($imageCondition)) {
        $stmt->bind_param(
            'ssiisi',
            $params['widgetName'],
            $params['widgetDescription'],
            $params['widgetSort'],
            $params['widgetStatus'],
            $iamgePath,
            $params['widgetId']
        );
    } else {
        $stmt->bind_param(
            'ssiii',
            $params['widgetName'],
            $params['widgetDescription'],
            $params['widgetSort'],
            $params['widgetStatus'],
            $params['widgetId']
        );
    }
    return $stmt->execute() ?? false;
}
