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

function getMenus($params = null)
{
    global $conn;
    $sql = "SELECT id , title , url , sort , status , parent , created_at FROM menus";
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
