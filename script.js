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
  function showLoader() {
    var loader = document.getElementById("loader");
    console.log("loader element:", loader);

    // Unhide the loader element
    loader.style.display = "block";
    console.log("loader display property:", loader.style.display);
  }

  function hideScroll() {
    var main = document.getElementById("main");
    console.log("main element:", main);

    main.style.overflowY = "hidden";
    console.log("main scroll property:", main.style.overflowY);
  }

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


  // Check if the form was allowed to be submitted
  if (!event.defaultPrevented) {
    // Call the showLoader function to unhide the loader element
    addBlur();
    showLoader();
    hideScroll();
  }
});

window.addEventListener("pageshow", function (event) {
  // Check if the page is being loaded from the cache
  if (event.persisted) {
    // Perform your page reset here
    // For example, you can reload the page or reset form fields
    location.reload(); // reloads the page
  }
});

