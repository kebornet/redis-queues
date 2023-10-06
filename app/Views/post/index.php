<!doctype html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Твитер</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito&display=swap">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">


        <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            Создать твит
        </a>
        <div class="collapse" id="collapseExample">
            <form method="post">
                <div class="form-group">
                    <label>Контент</label>
                    <textarea name="content" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label>Имя</label>
                    <input type="text" name="username" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Категория</label>
                    <select name='category_id' class="form-control select2" style="width: 100%;" required>
                        <option selected disabled value=''>Select a Category</option>
                        <?php foreach ($categories as $category) : ?>
                            <option value='<?= $category['id'] ?>'><?= $category['title'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
        <h1 class="mt-2 mb-3">Твиты</h1>
        <div class="row">
            <?php foreach ($posts as $post) : ?>
                <div class="col-6 mb-4">
                    <div class="card">
                        <div class="card-header"><?= $post['id'] ?></div>
                        <div class="card-body"><?= $post['content'] ?></div>
                        <div class="card-footer">
                            <div class="clearfix">
                                <span class="float-left">
                                    Категория: <?= $post['category_title'] ?>
                                    <br>
                                    Автор: <?= $post['username'] ?>
                                    <br>
                                    Дата: <?= $post['created_at'] ?>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>