  <!-- PHP Code Block Commented Out -->
  <!-- 
  <?php
//     $name = "Dark Marter";
//     $read = true;

//     if ($read) {
//         $message = "You have read $name";
//     } else {
//         $message = "You haven't read $name";
//     }
//     ?>
//     <h1><?= $message ?></h1>
//     -->


   <?php
//     $books = [
//         [
//             'name' => 'The Secret',
//             'author' => 'Rhonda Bryne',
//             'release year' => '2006',
//             'url' => 'https://www.google.com/books/the-secret'
//         ],
//         [
//             'name' => 'The Answer',
//             'author' => 'Rhonda Bryne',
//             'release year' => '2006',
//             'url' => 'https://www.google.com/books/the-answer'
//         ],
//         [
//             'name' => 'The Dark Marter',
//             'author' => 'Marvel Comics',
//             'release year' => '2023',
//             'url' => 'https://www.marvel.com/comics/book/the-dark-marter'
//         ],
//         [
//             'name' => 'The Hobbit',
//             'author' => 'J.R.R. Tolkien',
//             'release year' => '2018',
//             'url' => 'https://www.j.r.t.olkien.com/the-hobbit/'
//         ],
//     ];
//     // Sort the books by release year in descending order
//     // function filter($items, $fn)
//     // {
//     //     $filteredItems = [];
//     //     foreach ($items as $item) {
//     //         if ($fn($item)) {
//     //             $filteredItems[] = $item;
//     //         }
//     //     }
//     //     return $filteredItems;
//     // }


//     $filteredItems = array_filter($books, function ($book) {
//         return $book['release year'] > 2000;
//     });

    require 'contact.view.php';
