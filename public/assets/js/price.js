// Separate 3 digit from right
function separateNum(value, input, numToLetterId) {
  this.numToLetter(input, numToLetterId);
  var nStr = value + "";
  nStr = nStr.replace(/\,/g, "");
  x = nStr.split(".");
  x1 = x[0];
  x2 = x.length > 1 ? "." + x[1] : "";
  var rgx = /(\d+)(\d{3})/;
  while (rgx.test(x1)) {
    x1 = x1.replace(rgx, "$1" + "," + "$2");
  }
  if (input !== undefined) {
    input.value = x1 + x2;
  } else {
    return x1 + x2;
  }
}

// Number To Persian Letter
function numToLetter(element, numToLetterId) {
  var e = element;
  e.oninput = myHandler;
  e.onpropertychange = e.oninput; // for IE8
  function myHandler() {
    if (e.value.length === 0) {
      document.getElementById(numToLetterId).innerHTML = "";
    } else {
      document.getElementById(numToLetterId).innerHTML =
        e.value.toPersianLetter() + " تومان";
    }
  }
}

// hazf joda konandehaye money
function ex_normalNum(num) {
  num = num.replace(/,\s?/g, "");
  alert(num);
}
