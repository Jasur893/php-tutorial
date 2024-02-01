<?php
$title = '';
require 'includes/header.php';
require 'database.php';

$id = $_GET['id'];

$statement = $pdo->prepare("SELECT * FROM posts WHERE id = ?");
$statement->execute([$id]);
$post = $statement->fetch();

?>

<div class="container mt">
    <h5 class="mt-5"><?= $post['id'] . ' Post'?></h5>
    <h1 class="text-body-emphasis"><?= $post['title'] ?></h1>
    <p class="fs-5 col-md-8"><?= $post['body'] ?></p>

    <p class="fs-5 col-md-8"><?= $post['created_at'] ?></p>
</div>

<?php require 'includes/footer.php'; ?>
