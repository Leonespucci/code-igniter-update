<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyBlog</title>
    <style>
        a {
            text-decoration: none;
            color: black;
        }

        .edit-delete {
            background-color: silver;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 50px;
        }
        .edit-delete:hover{
            opacity: 0.5;
        }
    </style>
</head>

<body>
    <a href="<?php echo site_url('blog/inputBlog/') ?>"> Tambah Artikel</a>
    <h1>Artikel Terbaru Dan Viral</h1>
    <br>
    <form>
        <input type="text" name="find">
        <button type="submit">Cari</button>
    </form>
    <hr>
    <?php foreach ($blogs as $value) : ?>
        <a href="<?php echo site_url('/blog/detail/' . $value['url']) ?>" style="text-decoration: none;">
            <h1>

                <?= $value['title']; ?>
            </h1>
        </a>
        <a href="<?php echo site_url('blog/editBlog/' . $value['id']); ?>" class="edit-delete"> Edit</a>
        <a href="<?php echo site_url('blog/delete/' . $value['id']); ?>" class="edit-delete"> Delete</a>
        <a href="<?php echo site_url('/blog/detail/' . $value['url']) ?>" style="text-decoration: none;">
            <h4>Di Buat Pada Tanggal : <?= $value['date']; ?></h4>
            <p><?= $value['content']; ?></p>
        </a>
        <hr>
    <?php endforeach ?>
</body>

</html>