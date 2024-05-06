const inputs = document.querySelectorAll(".input");

function focusFunc() {
  let parent = this.parentNode;
  parent.classList.add("focus");
}

function blurFunc() {
  let parent = this.parentNode;
  if (this.value == "") {
    parent.classList.remove("focus");
  }
}

inputs.forEach((input) => {
  input.addEventListener("focus", focusFunc);
  input.addEventListener("blur", blurFunc);
});


// Get references to elements
const dropdownInput = document.getElementById("dropdown-input");
const dropdownOptions = document.querySelectorAll(".dropdown-option");

// Add click event listeners to dropdown options
dropdownOptions.forEach(option => {
    option.addEventListener("click", function() {
        dropdownInput.value = this.innerText; // Set input value to clicked option text
    });
});
