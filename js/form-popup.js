function firstForm() {
    document.getElementById("popupForm").classList.add('form-popup--is-visible');
    document.getElementById("popupForm").classList.add("one");
    document.querySelector("body").classList.add('no-scroll');

  }


function secondForm() {

    document.getElementById("popupForm").classList.add('form-popup--is-visible');
    document.getElementById("popupForm").classList.add("two");
    document.querySelector("body").classList.add('no-scroll');

  }

function thirdForm() {

    document.getElementById("popupForm").classList.add('form-popup--is-visible');
    document.getElementById("popupForm").classList.add("three");
    document.querySelector("body").classList.add('no-scroll');

  }

function fourthForm() {

    document.getElementById("popupForm").classList.add('form-popup--is-visible');
    document.getElementById("popupForm").classList.add("four");
    document.querySelector("body").classList.add('no-scroll');

  }

  function fifthForm() {

    document.getElementById("popupForm").classList.add('form-popup--is-visible');
    document.getElementById("popupForm").classList.add("five");
    document.querySelector("body").classList.add('no-scroll');

  }


function closeForm() {
  document.getElementById("popupForm").classList.remove('form-popup--is-visible');
  document.querySelector("body").classList.remove('no-scroll');
  document.getElementById("popupForm").classList.remove('one', 'two', 'three', 'four', 'five', 'six');

}