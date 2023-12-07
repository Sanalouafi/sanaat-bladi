<?php
include __DIR__ . "/../../controllers/categorie.php";

if (isset($_GET['searchTerm'])) {
    $searchTerm = $_GET['searchTerm'];
    $result = search_cate($searchTerm);

    // Output the updated table rows
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['nom'] . "</td>";
        echo "<td>";
        echo "<a href='edit.php?id=" . $row['id'] . "' class='link-dark'><i class='bx bxs-pencil fs-5 me-3'></i></a>";
        echo "<a href='' data-delete='" . $row['id'] . "' class='link-danger'><i class='bx bxs-user-x fs-5'></i></a>";
        echo "</td>";
        echo "</tr>";
    }
}
?>
