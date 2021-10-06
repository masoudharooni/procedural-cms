<?php
function updateFooterData(string $column, array $data): bool
{
    global $conn;
    switch ($column) {
        case 'about':
            $sql = "UPDATE footer SET about1 = ?  , about2 = ?  , about3 = ? , about4 = ? , about5 = ? WHERE id LIKE 1";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param('sssss', $data['about1'], $data['about2'], $data['about3'], $data['about4'], $data['about5']);
            break;
        case 'work':
            $sql = "UPDATE footer SET work1 = ?  , work2 = ? , work3 = ? , work4 = ? , work5 = ? WHERE id LIKE 1";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param('sssss', $data['work1'], $data['work2'], $data['work3'], $data['work4'], $data['work5']);
            break;
        case 'solution':
            $sql = "UPDATE footer SET solution1 = ?, solution2 = ?, solution3 = ?, solution4 = ? , solution5 = ? WHERE id LIKE 1";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param('sssss', $data['solution1'], $data['solution2'], $data['solution3'], $data['solution4'], $data['solution5']);
            break;
    }
    return $stmt->execute() ?? false;
}

function getFooterData(string $column)
{
    global $conn;
    if ($column == "about") {
        $sql = "SELECT about1 , about2 , about3 , about4 , about5 FROM footer WHERE id LIKE 1";
        $stmt = $conn->prepare($sql);
        $stmt->bind_result($about1, $about2, $about3, $about4, $about5);
    } elseif ($column == "work") {
        $sql = "SELECT work1 , work2 , work3 , work4 , work5 FROM footer WHERE id LIKE 1";
        $stmt = $conn->prepare($sql);
        $stmt->bind_result($work1, $work2, $work3, $work4, $work5);
    } elseif ($column == "solution") {
        $sql = "SELECT solution1 , solution2 , solution3 , solution4 , solution5 FROM footer WHERE id LIKE 1";
        $stmt = $conn->prepare($sql);
        $stmt->bind_result($solution1, $solution2, $solution3, $solution4, $solution5);
    }

    $stmt->execute();
    $stmt->fetch();
    switch ($column) {
        case 'about':
            $result = [$about1, $about2, $about3, $about4, $about5];
            break;
        case 'work':
            $result = [$work1, $work2, $work3, $work4, $work5];
            break;
        case 'solution':
            $result = [$solution1, $solution2, $solution3, $solution4, $solution5];
            break;
    }
    return $result;
}
