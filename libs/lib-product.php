<?php
function addProductCat(array $data): bool
{
    global $conn;
    $sql = "INSERT INTO products_cat (title , sort , status)
    VALUES (? ,? ,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sii', $data['menuName'], $data['menuSort'], $data['menuStatus']);
    return $stmt->execute() ?? false;
}


function getProductsCat(bool $status = null, int $id = null)
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

    $sql = "SELECT id , title , status , sort , created_at FROM products_cat {$condition} {$conditionForId} ORDER BY sort ASC";
    $stmt = $conn->prepare($sql);
    $stmt->bind_result($id, $title, $status, $sort, $created_at);
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


function deleteProductCat(int $productId): bool
{
    global $conn;
    $sql = "DELETE FROM products_cat WHERE id LIKE ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $productId);
    return $stmt->execute() ?? false;
}

function toggleStatusProductCat(int $productId): bool
{
    global $conn;
    $sql = "UPDATE products_cat SET status = 1 - status WHERE id LIKE ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $productId);
    return $stmt->execute() ?? false;
}

function updateProductCat(int $id, object $params): bool
{
    global $conn;
    $sql = "UPDATE products_cat SET title = ? , status = ? , sort = ? WHERE id LIKE ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param(
        'siii',
        $params->menuName,
        $params->menuStatus,
        $params->menuSort,
        $id
    );
    return $stmt->execute() ?? false;
}
