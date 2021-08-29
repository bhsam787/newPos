// FOr search filter
function myFunction() {
  var input, filter, ul, li, a, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  ul = document.getElementById("myUL");
  li = ul.getElementsByTagName("li");
  for (i = 0; i < li.length; i++) {
    a = li[i];
    txtValue = a.textContent || a.innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}


//ev.preventDefault();   //constractor





//FOr drag and drop
function allowDrop(ev) {
  ev.preventDefault();
}

function drag(ev) {
  ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
  if (ev.target.id != 'myUL' && ev.target.closest('td').querySelector('li')) return;
  ev.preventDefault();

  //remove clone if exists
  var data = ev.dataTransfer.getData("text").replace('-clone', '');
  var b = document.getElementById(data + '-clone');
  if (b) b.remove();

  //we should check if there is place for clone
  // var dataM = ev.dataTransfer.getData("text");
  // document.getElementById("fri11").appendChild(document.getElementById(dataM));
  //to know the table specific area Id and data

  var dateAndTimeValue = ev.target.id;
  var courseValue = ev.dataTransfer.getData("text");

  var clone_date = null;
  if (dateAndTimeValue === "sat08") {
    clone_date = 'thu08';
  } else if (dateAndTimeValue === "sun08") {
    clone_date = 'tue08';
  } else if (dateAndTimeValue === "mon08") {
    clone_date = 'wed08';
  } else if (dateAndTimeValue === "thu08") {
    clone_date = 'sat08';
  } else if (dateAndTimeValue === "tue08") {
    clone_date = 'sun08';
  } else if (dateAndTimeValue === "wed08") {
    clone_date = 'mon08';
  } else if (dateAndTimeValue === "sat09") {
    clone_date = 'thu09';
  } else if (dateAndTimeValue === "sun09") {
    clone_date = 'tue09';
  } else if (dateAndTimeValue === "mon09") {
    clone_date = 'wed09';
  } else if (dateAndTimeValue === "thu09") {
    clone_date = 'sat09';
  } else if (dateAndTimeValue === "tue09") {
    clone_date = 'sun09';
  } else if (dateAndTimeValue === "wed09") {
    clone_date = 'mon09';
  } else if (dateAndTimeValue === "sat11") {
    clone_date = 'thu11';
  } else if (dateAndTimeValue === "sun11") {
    clone_date = 'tue11';
  } else if (dateAndTimeValue === "mon11") {
    clone_date = 'wed11';
  } else if (dateAndTimeValue === "thu11") {
    clone_date = 'sat11';
  } else if (dateAndTimeValue === "tue11") {
    clone_date = 'sun11';
  } else if (dateAndTimeValue === "wed11") {
    clone_date = 'mon11';
  } else if (dateAndTimeValue === "sat01") {
    clone_date = 'thu01';
  } else if (dateAndTimeValue === "sun01") {
    clone_date = 'tue01';
  } else if (dateAndTimeValue === "mon01") {
    clone_date = 'wed01';
  } else if (dateAndTimeValue === "thu01") {
    clone_date = 'sat01';
  } else if (dateAndTimeValue === "tue01") {
    clone_date = 'sun01';
  } else if (dateAndTimeValue === "wed01") {
    clone_date = 'mon01';
  } else if (dateAndTimeValue === "sat02") {
    clone_date = 'thu02';
  } else if (dateAndTimeValue === "sun02") {
    clone_date = 'tue02';
  } else if (dateAndTimeValue === "mon02") {
    clone_date = 'wed02';
  } else if (dateAndTimeValue === "thu02") {
    clone_date = 'sat02';
  } else if (dateAndTimeValue === "tue02") {
    clone_date = 'sun02';
  } else if (dateAndTimeValue === "wed02") {
    clone_date = 'mon02';
  } else if (dateAndTimeValue === "sat04") {
    clone_date = 'thu04';
  } else if (dateAndTimeValue === "sun04") {
    clone_date = 'tue04';
  } else if (dateAndTimeValue === "mon04") {
    clone_date = 'wed04';
  } else if (dateAndTimeValue === "thu04") {
    clone_date = 'sat04';
  } else if (dateAndTimeValue === "tue04") {
    clone_date = 'sun04';
  } else if (dateAndTimeValue === "wed04") {
    clone_date = 'mon04';
  } else {}


  if (clone_date) {
    var a = (document.getElementById(data)).cloneNode(true);
    a.id = a.id + "-clone";
    var parent_el = document.getElementById(clone_date);
    if (parent_el.closest('td').querySelector('li')) return;
    parent_el.appendChild(a);
  }

  ev.target.appendChild(document.getElementById(data));



  //ev.target.appendChild((document.getElementById(data)).cloneNode(true));

  //to know the drop activity
  // document.getElementById("demo").innerHTML = "<h1>The element was dropped.</h1>";

  //to know the course list specific area of time and date id
  document.getElementById("demo1").innerHTML = "" + dateAndTimeValue;
  document.getElementById("demo11").innerHTML = "" + document.getElementById(dateAndTimeValue);

  //to know the course list specific area if course id

  document.getElementById("demo2").innerHTML = "" + courseValue;
  document.getElementById("demo22").innerHTML = "" + document.getElementById(courseValue);


}



//for try doubling the course   **not importent part**
m11.oninput = function() {
  fri04.innerHTML = m11.value + "<button>Delete</button>";
};
