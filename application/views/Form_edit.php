<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Artikel</title>
    <style>
        body{
            margin-top: 50px;
            text-align: center;
            background-color: whitesmoke;
        }
    </style>
</head>
<body>
<?= form_open(); ?>
        <label for="title">Title</label>
        <br><br>
        <?= form_input('title', $blog['title'] , 'id="title"'); ?>
        <br><br>
        <label for="url">Url</label> <br>
        <?= form_input('url', $blog['url'] , 'id="url"'); ?>
        <br><br>
        <label for="content">Content</label>
        <br><br> 
        <?= form_textarea('content', $blog['content'] , 'id="content"'); ?>
        <br><br>

        <button type="submit">Submit</button>
    </form>
    <!-- <form action="" method="post">
        <label for="title">Title</label>
        <br><br>
        <input type="text" id="title" name="title" value="<?= $blog['title']; ?>"> 
        <br><br>
        <br><br>
        <label for="url">Url</label>
        <input type="text" id="url" name="url" value="<?= $blog['url']; ?>">
        <br><br>
        <label for="content">Content</label>
        <br><br> 
        <textarea name="content" id="content" cols="30" rows="10">
        <?= $blog['content']; ?>
        </textarea>
        <br><br>

        <button type="submit">Submit</button>
    </form> -->
</body>
</html>