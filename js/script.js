// /* Toggle between showing and hiding the navigation menu links when the user clicks on the hamburger menu / bar icon */
// function navButton() {
//   let x = document.getElementById("nav");
//   let y = document.getElementById("hamburgesa");
//   let z = document.getElementsByClassName("icon");
//   if (x.style.display === "flex") {
//     x.style.display = "none";
//     y.style.color = "white";
//   } else {
//     x.style.display = "flex";
//     y.style.color = "#FA00C3";
//   }
// }

/* Open */
function openNav() {
  document.getElementById("myNav").style.height = "100%";
}

/* Close */
function closeNav() {
  document.getElementById("myNav").style.height = "0%";
}
