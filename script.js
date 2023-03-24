document.getElementById("myForm").addEventListener("submit", function(event) {
    // Get the weight and height input values
    var weight = parseFloat(document.getElementById("W").value);
    var height = parseFloat(document.getElementById("H").value);
    var NC = parseFloat(document.getElementById("NC").value);
  
    // Check if weight and height are greater than 0
    if (weight <= 0) {
      // Prevent the form from being submitted
      event.preventDefault();
      
      // Show an error message
      alert("Weight must be greater than 0");
    }

    if (height <=0){

        event.preventDefault();

        alert("Height must be greater than 0");
    }

    if (NC <=0){

        event.preventDefault();

        alert("Neck Circumference must be greater than 0");
    }
  });
  