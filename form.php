<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Meta Info -->
      <meta charset="utf-8">
      <meta name="description" content="Recipe Form">
      <meta name="designer" content="Dani Sheriff">
      <meta name="developer" content="Jake Davis">
      <title>Recipe Form</title>
      <!-- Form CSS -->
      <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
      <link href="/recipe-form/css/form.css" rel="stylesheet">
      <!-- + Ingredient/Step Button Script -->
      <script src="/recipe-form/js/add_ingredient.js" language="Javascript" type="text/javascript"></script>
   </head>
   <body>
      <!--Navigation -->
      <nav>
      </nav>
      <!-- Page Content -->
      <div id="stylized" class="myform">
         <form id="form" name="form" method="POST" action="template.php">
            <h1>Recipe Formatter</h1>
            <p>Fill out the recipe form!</p>
            <label>Blog Title</label>
            <input type="text" name="title" required />
            <label>Intro
            <span class="small">Optional</span></label>
            <textarea name="intro"></textarea>
            <label>Prep Time
            <span class="small">minutes</span></label>
            <input type="text" name="pt" required />
            <label>Cook Time
            <span class="small">minutes</span></label>
            <input type="text" name="ct" required />
            <label>Difficulty</label>
			<select name="dc" required>
  				<option value="" disabled selected>Pick One</option>
  				<option value="Easy">Easy</option>
  				<option value="Medium">Medium</option>
  				<option value="Hard">Hard</option>
			</select>
            <label>Protein</label>
            <input type="text" name="p" required />
            <label>Carbs</label>
            <input type="text" name="c" required />
            <label>Fat</label>
            <input type="text" name="f" required />
            <label>Number of Servings</label>
            <input type="text" name="ns" required />
            <label>Serving Size
            <span class="small">grams</span></label>
            <input type="text" name="ss" required />
            <div id="dynamicInput">
               <label>Ingredient 1</label>
               <input type="text" name="wagi1" required />
               <label>Ingredient 2</label>
               <input type="text" name="wagi2" />
               <label>Ingredient 3</label>
               <input type="text" name="wagi3" />
               <label>Ingredient 4</label>
               <input type="text" name="wagi4" />
               <label>Ingredient 5</label>
               <input type="text" name="wagi5" />
            </div>
            <input type="button" id="ingredient" name="ingredient" value="+ Ingredient" onClick="addInput('dynamicInput');" />
            <div class="spacer"></div>
            <div id="dynamicInput2">
               <label>Step 1</label>
               <input type="text" name="wags1" required />
               <label>Step 2</label>
               <input type="text" name="wags2" />
               <label>Step 3</label>
               <input type="text" name="wags3" />
               <label>Step 4</label>
               <input type="text" name="wags4" />
               <label>Step 5</label>
               <input type="text" name="wags5" />
            </div>
            <input type="button" id="step" name="step" value="+ Step" onClick="addInput2('dynamicInput2');" />
            <div class="spacer"></div>
            <label>Outro
            <span class="small">Optional</span></label>
            <textarea name="outro"></textarea>
            <button type="submit" id="submit" name="submit" >Create Recipe</button>
            <div class="spacer"></div>
         </form>
      </div>
   </body>
</html>

