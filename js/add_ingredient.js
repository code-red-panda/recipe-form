var counter = 5;
var limit = 20;
function addInput(divName){
     if (counter == limit)  {
          alert("You have reached the limit of adding " + counter + " ingredients");
     }
     else {
          var newdiv = document.createElement('div');
          newdiv.innerHTML = "<label>Ingredient " + (counter + 1) + "</label><input type='text' name='wagi" + (counter + 1) + "'><br>";
          document.getElementById(divName).appendChild(newdiv);
          counter++;
     }
}

var counters = 5;
var limits = 20;
function addInput2(divName){
     if (counters == limit)  {
          alert("You have reached the limit of adding " + counters + " steps");
     }
     else {
          var newdiv = document.createElement('div');
          newdiv.innerHTML = "<label>Step " + (counters + 1) + "</label><input type='text' name='wags" + (counters + 1) + "'><br>";
          document.getElementById(divName).appendChild(newdiv);
          counters++;
     }
}

