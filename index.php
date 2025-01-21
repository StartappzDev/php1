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
    'release year'=>'2006',
   'url'=>'https://www.google.com/books/the-secret'
    ],
    ['name'=>'The Answer',
    'author'=>'Rhonda Bryne',
     'release year'=>'2006',
    'url'=>'https://www.google.com/books/the-answer'
     ],
   ['name'=>'The Dark Marter',
   'author'=>'Marvel Comics',
   'release year'=>'2023',
   'url'=>'https://www.marvel.com/comics/book/the-dark-marter'
    ],
   ['name'=>'The Hobbit',
   'author'=>'J.R.R. Tolkien',
   'release year'=>'2018',
   'url'=>'https://www.j.r.t.olkien.com/the-hobbit/'
],
    ];
    // Sort the books by release year in descending order
    function filterByAuthor($books,$author){
        $filteredBooks = [];
        foreach($books as $book){
            if($book['author'] === $author){
                $filteredBooks[] = $book;
            }
        }

        return $filteredBooks;

    }
    
    ?>
<p>
  <?php foreach(filterByAuthor($books,'Marvel Comics') as $book) : ?>
   
    <li> <a href="<?= $book['url']; ?>"><?= $book['name']; ?></a></li> 
    <!-- <li>
        <?= $book['name']; ?></li> -->
   
  <?php endforeach;?>


</body>
</html>
