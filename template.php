<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Meta Info -->
      <meta charset="utf-8">
      <meta name="description" content="Recipe Template">
      <meta name="author" content="Jake Davis">
      <title>Recipe Template</title>
      <!-- Template CSS -->
      <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
      <link href="/recipe-form/css/template.css" rel="stylesheet">
      <!-- Copy to Clipboard Library -->
      <script src="/recipe-form/js/clipboard.min.js"></script>
   </head>
   <body>
      <!-- Navigation -->
      <nav>
	<a href="/">Back to Recipe Form</a>
      </nav>
      <!-- Page Content -->
      <?php
         // capture variables from recipe_form.php //
         $title = $_POST['title'];
         $intro = $_POST['intro'];
         $pt = $_POST['pt'];
         $ct = $_POST['ct'];
         $dc = $_POST['dc'];
         $p = $_POST['p'];
         $c = $_POST['c'];
         $f = $_POST['f'];
         $ns = $_POST['ns'];
         $ss = $_POST['ss'];
         $outro = $_POST['outro'];
         $calories = ($f)+($c)+($p);
         $calperserve = ROUND(($calories/$ns),2);
         $ppercent = ROUND(($p/$calories)*100);
         $cpercent = ROUND(($c/$calories)*100);
         $fpercent = ROUND(($f/$calories)*100);
         $ingredients = array();
         $steps = array();

         // identify all ingredients (max allowed 20, defined here and in add_ingredient.js) //
             for ($counter = 1; $counter <= 20; $counter++)
             {
                 if (isset($_POST["wagi$counter"]) && $_POST["wagi$counter"] != "")
                 {
                   ${"wagi" . $counter} = $_POST["wagi$counter"];
                   array_push($ingredients, "${"wagi" . $counter}");
                 }
             }

         // identify all steps (max allowed 20, defined here and in add_ingredient.js) //
             for ($counter = 1; $counter <= 20; $counter++)
             {
                 if (isset($_POST["wags$counter"]) && $_POST["wags$counter"] != "")
                 {
                   ${"wags" . $counter} = $_POST["wags$counter"];
                   array_push($steps, "${"wags" . $counter}");
                 }
             }

         // echo the recipe template //
         echo "<div id='style' class='template'><b>Blog Title: </b><br>"
          . $title .

         "<p class='paragraph'><b>Intro Paragraph: </b><br>"
          . $intro . "<p>

		  <b>Prep Time: </b><br>"
          . $pt . " min<p>

		  <b>Cook Time: </b><br>"
          . $ct . " min<p>

		  <b>Difficulty: </b><br>"
          . $dc . "<p>

         <b>Macros: </b><br>"
          . $p ." g Protein, " . $c . " g Carbs, " . $f . " g Fat<br>"
          . $ppercent . "% Protein, " . $cpercent . "% Carbs, " . $fpercent . "% Fat<p>

         <b>Calories: </b><br>"
          . $calories . "<p>

         <b>Calories Per Serving: </b><br>"
          . $calperserve . "<p>

         <b>Number Of Servings: </b><br>"
          . $ns . "<p>

         <b>Serving Size: </b><br>"
          . $ss . " g<p>

         <b>Ingredients: </b><br>"
          . implode('<p>', $ingredients) . "<p>

         <b>Directions: </b><br>"
          . implode('<p>', $steps) . "<p class='paragraph'>

         <b>Closing Paragraph: </b><br>"
          . $outro . "</div>";
         ?>
         <div id="instructions">
            <button class="btn" data-clipboard-action="copy" data-clipboard-target="div#style">Copy!</button><br>
            <ol type="1">
               <li>Copy to clipboard</li>
               <li>Open Google Drive</li>
               <li>Right click, "Paste Without Formatting"</li>
            </ol>
         </div>

      <!-- Instantiate clipboard -->
      <script>
         var clipboard = new Clipboard('.btn');

         clipboard.on('success', function(e) {
             console.log(e);
         });

         clipboard.on('error', function(e) {
             console.log(e);
         });
      </script>
   </body>
</html>

