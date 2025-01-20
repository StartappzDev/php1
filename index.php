<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: black;
            margin: 0;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin: 5px 0;
        }
        a {
            text-decoration: none;
            color: blue;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <!-- PHP Code Block Commented Out -->
    <!-- 
    <?php
    $name = "Dark Marter";
    $read = true;

    if ($read) {
        $message = "You have read $name";
    } else {
        $message = "You haven't read $name";
    }
    ?>
    <h1><?= $message ?></h1>
    -->

    <h1>Recommended Books</h1>

    <?php 
    $books = [
   ['name'=>'The Secret',
   'author'=>'Rhonda Bryne',
   'url'=>'https://www.google.com/books/the-secret'
    ],
   ['name'=>'The Dark Marter',
   'author'=>'Marvel Comics',
   'url'=>'https://www.marvel.com/comics/book/the-dark-marter'
    ],
   ['name'=>'The Hobbit',
   'author'=>'J.R.R. Tolkien',
   'url'=>'https://www.j.r.t.olkien.com/the-hobbit/'
],
    ];
    ?>
<p>
  <?php foreach($books as $book) : ?>
    <li>
        <?= $book['name']; ?></li>
  <?php endforeach;?>

</body>
</html>
