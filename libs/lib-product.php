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


function upload(array $params)
{
    $result = [
        'bool' => null,
        'text' => null
    ];
    $file = $params['file'];
    $dir = 'assets/img/upload';
    $fileName = $file['name'];
    $explode = explode(".", $fileName);
    $extention = strtolower(end(($explode)));
    $newFileName = md5(time() . $file['tmp_name']) . "." . $extention;
    $path = $dir . "/" . $newFileName;
    $allowFileToUploade = ["jpg", "jpeg", "gif", "png"];
    if (!in_array($extention, $allowFileToUploade)) {
        $result['bool'] = false;
        $result['text'] = "File Not Allow!";
        return $result;
    }
    if ($file['size'] > (15 * 1024 * 1024)) {
        $result['bool'] = false;
        $result['text'] = "File Must less than 15 MB!";
        return $result;
    }
    $from = $file['tmp_name'];
    if (!move_uploaded_file($from, $path)) {
        $result['bool'] = false;
        $result['text'] = "File Not Uploaded!";
        return $result;
    }
    // file Uploaded
    $result['bool'] = true;
    $result['text'] = $path;
    return $result;
}

function addProduct(array $params, $iamgePath): bool
{
    global $conn;
    $sql = "INSERT INTO products (title , description , cat_id , sort , status , image)
    VALUES ( ? , ? , ? , ? , ? , ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssiiis', $params['proName'], $params['proDescription'], $params['proCategory'], $params['proSort'], $params['proStatus'], $iamgePath);
    return $stmt->execute() ?? false;
}



function getProducts(bool $status = null, int $id = null)
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

    $sql = "SELECT id , title , description , cat_id , sort , status , image,  created_at FROM products {$condition} {$conditionForId} ORDER BY sort ASC";
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


function deleteProduct(int $productId): bool
{
    global $conn;
    $sql = "DELETE FROM products WHERE id LIKE ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $productId);
    return $stmt->execute() ?? false;
}

function toggleStatusProduct(int $productId): bool
{
    global $conn;
    $sql = "UPDATE products SET status = 1 - status WHERE id LIKE ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $productId);
    return $stmt->execute() ?? false;
}


function updateProduct(array $params, $iamgePath = null)
{
    global $conn;
    $imageCondition = null;
    if (!is_null($iamgePath) && is_string($iamgePath)) {
        $imageCondition = " , image = ?";
    }

    $sql = "UPDATE products SET title = ? , description = ? , cat_id = ? , sort = ? , status = ? {$imageCondition}  WHERE id LIKE ?";
    $stmt = $conn->prepare($sql);
    if (!is_null($imageCondition)) {
        $stmt->bind_param(
            'ssiiisi',
            $params['proName'],
            $params['proDescription'],
            $params['proCategory'],
            $params['proSort'],
            $params['proStatus'],
            $iamgePath,
            $params['proId']
        );
    } else {
        $stmt->bind_param(
            'ssiiii',
            $params['proName'],
            $params['proDescription'],
            $params['proCategory'],
            $params['proSort'],
            $params['proStatus'],
            $params['proId']
        );
    }
    return $stmt->execute() ?? false;
}
