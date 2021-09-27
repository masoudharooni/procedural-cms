<?php
function addMenu(array $data): bool
{
    global $conn;
    $sql = "INSERT INTO menus (title , url , sort , status , parent)
    VALUES (? ,? ,? ,? ,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssiii', $data['menuName'], $data['menuLink'], $data['menuSort'], $data['menuStatus'],  $data['menuParent']);
    return $stmt->execute() ?? false;
}

function getMenus(bool $status = null)
{
    global $conn;
    $condition = null;
    if (is_bool($status) and !is_null($status)) {
        $condition = "WHERE status = {$status}";
    }
    $sql = "SELECT id , title , url , sort , status , parent , created_at FROM menus {$condition} ORDER BY sort ASC";
    $stmt = $conn->prepare($sql);
    $stmt->bind_result($id, $title, $url, $sort, $status, $parentId, $created_at);
    $stmt->execute();
    $counter = 0;
    while ($stmt->fetch()) {
        $result[$counter] = [
            'id' => $id,
            'title' => $title,
            'url' => $url,
            'sort' => $sort,
            'status' => $status,
            'parentId' => $parentId,
            'createdAt' => $created_at
        ];
        $counter++;
    }
    return $result ?? null;
}


function getParentName(int $parentId)
{
    global $conn;
    if (!$parentId > 0) {
        return "سرگروه";
    }
    $sql = "SELECT title FROM menus WHERE id LIKE ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $parentId);
    $stmt->bind_result($title);
    $stmt->execute();
    $stmt->fetch();
    return $title ?? null;
}

function deleteMenu(int $menuId): bool
{
    global $conn;
    $sql = "DELETE FROM menus WHERE id LIKE ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $menuId);
    return $stmt->execute() ?? false;
}

function toggleStausMenu(int $menuId): bool
{
    global $conn;
    $sql = "UPDATE menus SET status = 1 - status WHERE id LIKE ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $menuId);
    return $stmt->execute() ?? false;
}


function getMenuById(int $id)
{
    global $conn;
    $sql = "SELECT id , title , url , sort , status , parent , created_at FROM menus WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->bind_result($idNow, $title, $url, $sort, $status, $parentId, $created_at);
    $stmt->execute();
    $stmt->fetch();
    $result = [
        'id' => $idNow,
        'title' => $title,
        'url' => $url,
        'sort' => $sort,
        'status' => $status,
        'parentId' => $parentId,
        'createdAt' => $created_at
    ];
    if (is_null($result['id'])) {
        return null;
    }
    return $result;
}


function updateMenu(int $id, $params): bool
{
    global $conn;
    $sql = "UPDATE menus SET title = ? , url = ? , sort = ? , status = ? , parent = ? WHERE id LIKE ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param(
        'ssiiii',
        $params->menuName,
        $params->menuLink,
        $params->menuSort,
        $params->menuStatus,
        $params->menuParentId,
        $id
    );
    return $stmt->execute() ?? false;
}

function getMenusByParentId(int $parentId)
{
    global $conn;
    $sql = "SELECT id , title , url , sort , status , parent , created_at FROM menus WHERE parent = ? AND status = 1 ORDER BY sort ASC";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $parentId);
    $stmt->bind_result($id, $title, $url, $sort, $status, $parentId, $created_at);
    $stmt->execute();
    $counter = 0;
    while ($stmt->fetch()) {
        $result[$counter] = [
            'id' => $id,
            'title' => $title,
            'url' => $url,
            'sort' => $sort,
            'status' => $status,
            'parentId' => $parentId,
            'createdAt' => $created_at
        ];
        $counter++;
    }
    return $result ?? null;
}
