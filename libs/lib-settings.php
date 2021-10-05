<?php
function updateSettings(array $params, $image = null)
{
    global $conn;
    $imageCondition = null;
    if (!is_null($image) && is_string($image)) {
        $imageCondition = " , imgPage = ?";
    }

    $sql = "UPDATE settings SET companyName = ? , companyDesc = ? , titlePage = ? , copyRight = ? , instagram = ? , twitter = ? , facebook = ? , google = ? , colorBase = ? {$imageCondition}  WHERE id LIKE 1";
    $stmt = $conn->prepare($sql);
    if (!is_null($imageCondition)) {
        $stmt->bind_param(
            'ssssssssss',
            $params['companyName'],
            $params['companyDesc'],
            $params['titlePage'],
            $params['copyRight'],
            $params['instagram'],
            $params['twitter'],
            $params['facebook'],
            $params['google'],
            $params['color'],
            $image
        );
    } else {
        $stmt->bind_param(
            'sssssssss',
            $params['companyName'],
            $params['companyDesc'],
            $params['titlePage'],
            $params['copyRight'],
            $params['instagram'],
            $params['twitter'],
            $params['facebook'],
            $params['google'],
            $params['color']
        );
    }
    return $stmt->execute() ?? false;
}


function getSettings()
{
    global $conn;
    $sql = "SELECT id , companyName , companyDesc , titlePage  , copyRight , instagram , twitter , facebook , google , colorBase , imgPage FROM settings WHERE id LIKE 1";
    $stmt = $conn->prepare($sql);
    $stmt->bind_result($id, $companyName, $companyDesc, $titlePage, $copyRight, $instagram, $twitter, $facebook, $google, $colorBase, $imgPage);
    $stmt->execute();
    $stmt->fetch();
    $result = (object)[
        'id' => $id,
        'companyName' => $companyName,
        'companyDesc' => $companyDesc,
        'titlePage' => $titlePage,
        'copyRight' => $copyRight,
        'instagram' => $instagram,
        'twitter' => $twitter,
        'facebook' => $facebook,
        'google' => $google,
        'color' => $colorBase,
        'imgPage' => $imgPage
    ];
    return $result ?? null;
}
