document.getElementById("myForm").addEventListener("submit", function (event) {
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

  if (height <= 0) {

    event.preventDefault();

    alert("Height must be greater than 0");
  }

  if (NC <= 0) {

    event.preventDefault();

    alert("Neck Circumference must be greater than 0");
  }

  // function to unhide loader animation
  function showLoader() {
    var loader = document.getElementById("loader");
    console.log("loader element:", loader);

    // Unhide the loader element
    loader.style.display = "block";
    console.log("loader display property:", loader.style.display);
  }

  // function to hide vertical scroller
  function hideScroll() {
    var main = document.getElementById("main");
    console.log("main element:", main);

    main.style.overflowY = "hidden";
    console.log("main scroll property:", main.style.overflowY);
  }

  // function to blur question page
  function addBlur() {
    var blur = document.getElementById("blur");
    var blurForm = document.getElementById("myForm");
    console.log("blur element:", blur);
    console.log("blur Form:", blurForm);

    blur.style.filter = "blur(3rem)";
    blurForm.style.filter = "blur(3rem)";
    console.log("blur property:", blur.style.filter);
    console.log("blur propert:", blurForm.style.filter);
  }

  // function to disable submit button
  function disableButton() {
    var submitButton = document.getElementById("submitButton");
    submitButton.disabled = true;
  }


  // Check if the form was allowed to be submitted
  if (!event.defaultPrevented) {
    // Call the showLoader function to unhide the loader element
    addBlur();
    showLoader();
    hideScroll();
    disableButton();
  }
});

window.addEventListener("pageshow", function (event) {
  // Check if the page is being loaded from the cache
  if (event.persisted) {
    location.reload(); // reloads the page
  }
});

var weightInput = document.getElementById("W");

weightInput.min = 0;
weightInput.max = 1000;

const inputWeight = document.getElementById("W");
let prevWeightValue = inputWeight.value; // keep track of previous value

inputWeight.addEventListener("input", function(event) {
  const maxWeight = 1000;

  if (event.target.value > maxWeight) {
    event.target.value = prevWeightValue; // set back to previous value
    alert("Maximum weight is 1000kg");
  } else {
    prevWeightValue = event.target.value; // update previous value
  }

});

inputHeight = document.getElementById("H");
let prevHeightValue = inputHeight.value; // keep track of previous value

inputHeight.addEventListener("input", function(event) {
  const maxHeight = 300;

  if (event.target.value > maxHeight) {
    event.target.value = prevHeightValue; // set back to previous value
    alert("Maximum height is 300cm");
  } else {
    prevHeightValue = event.target.value; // update previous value
  }

});

inputNC = document.getElementById("NC");
let prevNCValue = inputNC.value; // keep track of previous value

// To set value in input box to last eligible value 
inputNC.addEventListener("input", function(event) {
  const maxNC = 100;

  if (event.target.value > maxNC) {
    event.target.value = prevNCValue; // set back to previous value
    alert("Maximum Neck Circumference is 100cm");
  } else {
    prevNCValue = event.target.value; // update previous value
  }

});




