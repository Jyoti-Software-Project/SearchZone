<?php include("config.php"); ?>

<html>
  <head>
    <link href="css/main.css" rel="stylesheet" />
    <title>SearchZone</title>
    <link rel="shortcut icon" href="images/favicon1.ico" type="image/x-icon" />

  </head>
  <body>
    <div class="s132">
      <form action="search.php" method="post">
        <div class="inner-form">

          <div class="input-field second-wrap">
            <input id="search" type="text" placeholder="What are you looking for?" readonly="readonly" />
          </div>

          <div class="input-field first-wrap">
            <div class="input-select">
              <select data-trigger="" name="search_item">
                <option value="" placeholder="">Select Category</option>
                <option value="1">Mobile</option>
                <option value="2">Laptop</option>
                <option value="3">Digital Camera</option>
              </select>
            </div>
          </div>
          
          <div class="input-field third-wrap">
            <button class="btn-search" type="submit" name="result">Search</button>
          </div>
        </div>
      </form>
    </div>
    <script src="js/extention/choices.js"></script>
    <script>
      const choices = new Choices('[data-trigger]',
      {
        searchEnabled: false,
        itemSelectText: '',
      });

    </script>
  </body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
