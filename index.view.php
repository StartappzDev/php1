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

      <p>
          <?php foreach ($filteredItems as $book) : ?>

              <li> <a href="<?= $book['url']; ?>"><?= $book['name']; ?></a></li>
              <!-- <li>
        <?= $book['name']; ?></li> -->

          <?php endforeach; ?>


  </body>

  </html>