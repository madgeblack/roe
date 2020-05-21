function openValue(evt, valueName, lineName) {
 
  // Remove the default class name/states
  document.getElementById("empathy").classList.remove("default");
  document.getElementById("empathy-title").classList.remove("default-title");
  document.getElementById("empathy-line").classList.remove("default-line");

  // Declare all variables
  var i, tabcontent, line, tablinks;
  

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.opacity = "0";
  }

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("definition-line");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.opacity = "0";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the link that opened the tab
  document.getElementById(valueName).style.opacity = "1";
  document.getElementById(lineName).style.opacity = "1";
  evt.currentTarget.className += " active";
}