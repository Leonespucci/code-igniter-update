<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Artikel</title>
    <style>
        body{
            margin-top: 50px;
            text-align: center;
            background-color: whitesmoke;
        }
    </style>
</head>
<body>
    
    <?= form_open_multipart();?>
        <label for="title">Title</label>
        <br><br>
        <?= form_input('title', null, 'id="title" required'); ?>
        <br><br>
        <label for="url">Url</label> <br>
        <?= form_input('url', null, 'id="url" required'); ?>
        <br><br>
        <label for="content">konten</label>
        <br><br> 
        <?= form_textarea('content', null, 'id="content" required'); ?>
        <br><br>
        <label for="content">Cover</label>
        <?= form_upload('cover', null, 'required'); ?>
        <br><br><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>