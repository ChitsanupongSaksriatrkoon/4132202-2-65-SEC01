<?php
include "../Modle/condb.php";
?>
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Chitsanupong</th>
            <th>Saksritarkoon</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT * FROM tb_User ORDER BY User_Id ASC";
        $result = mysqli_query($link, $sql);
        while ($row = mysqli_fetch_assoc ($result)) {
        ?>
        <tr>
            <td><?= $row["User_Id"] ?></td>
            <td><?= $row["User_Name"] ?></td>
            <td><?= $row["User_Pas"] ?></td>
            <td><button class="btn_del" data="<?= $row["User_Id"] ?>">DLE </button></td>
            <td></td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
    $(".btn_del").click(function() {
        let data = $(this).attr("data");
        alert(data);
    });
</script>
