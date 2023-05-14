
<style>
table tr td {
    padding: 6px;
    font-size: 20px;
}
</style>

<?php
    $name = $_POST['cf_name'];
    $email = $_POST['cf_mail'];
    $phone = $_POST['cf_phone'];

?>

<table border="1">
    <tr>
        <td><h2>Name</h2>  </td>
        <td><?php echo $name; ?></td>
    </tr>
    <tr>
        <td><h2>Email</h2></td>
        <td><?php echo $email; ?></td>
    </tr>
    <tr>
        <td><h2>Phone</h2> </td>
        <td><?php echo $phone; ?></td>
    </tr>
</table>

