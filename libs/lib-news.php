<?php
function addNewsCat($data): bool
{
    global $conn;
    $sql = "INSERT INTO news_cat (title , sort , status)
    VALUES (? ,? ,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sii', $data['newsCatName'], $data['newsCatSort'], $data['newsCatStatus']);
    return $stmt->execute() ?? false;
}


function getNewsCat(bool $status = null, int $id = null)
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

    $sql = "SELECT id , title , sort , status , created_at FROM news_cat {$condition} {$conditionForId} ORDER BY sort ASC";
    $stmt = $conn->prepare($sql);
    $stmt->bind_result($id, $title, $sort, $status, $created_at);
    $stmt->execute();
    $counter = 0;
    while ($stmt->fetch()) {
        $result[$counter] = [
            'id' => $id,
            'title' => $title,
            'sort' => $sort,
            'status' => $status,
            'createdAt' => $created_at
        ];
        $counter++;
    }
    return $result ?? null;
}

function deleteNewsCat(int $newsId): bool
{
    global $conn;
    $sql = "DELETE FROM news_cat WHERE id LIKE ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $newsId);
    return $stmt->execute() ?? false;
}

function toggleStatusNewsCat(int $newsId): bool
{
    global $conn;
    $sql = "UPDATE news_cat SET status = 1 - status WHERE id LIKE ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $newsId);
    return $stmt->execute() ?? false;
}

function updateNewsCat(int $id, object $params): bool
{
    global $conn;
    $sql = "UPDATE news_cat SET title = ? , sort = ? , status = ?  WHERE id LIKE ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param(
        'siii',
        $params->newsCatName,
        $params->newsCatSort,
        $params->newsCatStatus,
        $id
    );
    return $stmt->execute() ?? false;
}

function addNews(array $params, $iamgePath): bool
{
    global $conn;
    $sql = "INSERT INTO news (title , description , cat_id , sort , status , image)
    VALUES ( ? , ? , ? , ? , ? , ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssiiis', $params['newsName'], $params['newsDescription'], $params['newsCat'], $params['newsSort'], $params['newsStatus'], $iamgePath);
    return $stmt->execute() ?? false;
}


function getNews(bool $status = null, int $id = null)
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

    $sql = "SELECT id , title , description , cat_id , sort , status , image,  created_at FROM news {$condition} {$conditionForId} ORDER BY sort ASC";
    $stmt = $conn->prepare($sql);
    $stmt->bind_result($id, $title, $description, $cat_id, $sort,  $status, $image,  $created_at);
    $stmt->execute();
    $counter = 0;
    while ($stmt->fetch()) {
        $result[$counter] = [
            'id' => $id,
            'title' => $title,
            'description' => $description,
            'category' => $cat_id,
            'imagePath' => $image,
            'sort' => $sort,
            'status' => $status,
            'createdAt' => $created_at
        ];
        $counter++;
    }
    return $result ?? null;
}


function deleteNews(int $newsId): bool
{
    global $conn;
    $sql = "DELETE FROM news WHERE id LIKE ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $newsId);
    return $stmt->execute() ?? false;
}

function toggleStatusNews(int $newsId): bool
{
    global $conn;
    $sql = "UPDATE news SET status = 1 - status WHERE id LIKE ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $newsId);
    return $stmt->execute() ?? false;
}


function updateNews(array $params, $iamgePath = null)
{
    global $conn;
    $imageCondition = null;
    if (!is_null($iamgePath) && is_string($iamgePath)) {
        $imageCondition = " , image = ?";
    }

    $sql = "UPDATE news SET title = ? , description = ? , cat_id = ? , sort = ? , status = ? {$imageCondition}  WHERE id LIKE ?";
    $stmt = $conn->prepare($sql);
    if (!is_null($imageCondition)) {
        $stmt->bind_param(
            'ssiiisi',
            $params['newsName'],
            $params['newsDescription'],
            $params['newsCategory'],
            $params['newsSort'],
            $params['newsStatus'],
            $iamgePath,
            $params['newsId']
        );
    } else {
        $stmt->bind_param(
            'ssiiii',
            $params['newsName'],
            $params['newsDescription'],
            $params['newsCategory'],
            $params['newsSort'],
            $params['newsStatus'],
            $params['newsId']
        );
    }
    return $stmt->execute() ?? false;
}