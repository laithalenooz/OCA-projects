function validation() {
  var fname = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var cpass = document.getElementById("pass").value;
  var phoneno = document.getElementById("phoneno").value;
  var Rxfname = RegExp(/^[A-Za-z]{5,20}/);
  var Rxemail = RegExp(/^[A-Za-z]{2,20}@[a-z]{2,10}.[a-z]{2,3}/);
  //   var Rxcpass = RegExp(/^[A-Za-z0-9!@#$%^&*()?]?*{8,32}/);
  var Rxphone = RegExp(/^([009627]{6})([7-9]{1})([0-9]{7})/);

  if (Rxfname.test(fname)) {
    document.getElementById("fname_err").innerHTML = "";
  } else {
    document.getElementById("fname_err").innerHTML =
      "Please Enter a valid name";
    return false;
  }
  if (Rxemail.test(email)) {
    document.getElementById("email_err").innerHTML = "";
  } else {
    document.getElementById("email_err").innerHTML =
      "Please Enter a valid email";
    return false;
  }
  if (Rxphone.test(phoneno)) {
    document.getElementById("phoneno_err").innerHTML = "";
  } else {
    document.getElementById("phoneno_err").innerHTML =
      "Please Enter a valid phone #.";
    return false;
  }
  var nKey = document.getElementById("name").value;
  var eKey = document.getElementById("email").value;
  var pKey = document.getElementById("pass").value;
  var numKey = document.getElementById("phoneno").value;

  localStorage.setItem("fname", nKey);
  localStorage.setItem("email", eKey);
  localStorage.setItem("cpass", pKey);
  localStorage.setItem("phoneno", numKey);
}

function chBox() {
  var checkBox = document.getElementById("checkbox");
  if (checkBox.checked == true) {
    $("#bt1").removeAttr("disabled");
    $("#bt2").removeAttr("disabled");
    $("#bt3").removeAttr("disabled");
  } else {
    $("#bt1").attr("disabled");
    $("#bt2").attr("disabled");
    $("#bt3").attr("disabled");
  }
}

function refreshPage() {
  window.location.reload();
  localStorage.clear();
  sessionStorage.clear();
}

function sessionOnce() {
  var fname = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var cpass = document.getElementById("pass").value;
  var phoneno = document.getElementById("phoneno").value;
  var Rxfname = RegExp(/^[A-Za-z]{5,20}/);
  var Rxemail = RegExp(/^[A-Za-z]{2,20}@[a-z]{2,10}.[a-z]{2,3}/);
  //   var Rxcpass = RegExp(/^[A-Za-z0-9!@#$%^&*()?]?*{8,32}/);
  var Rxphone = RegExp(/^([009627]{6})([7-9]{1})([0-9]{7})/);

  if (Rxfname.test(fname)) {
    document.getElementById("fname_err").innerHTML = "";
  } else {
    document.getElementById("fname_err").innerHTML =
      "Please Enter a valid name";
    return false;
  }
  if (Rxemail.test(email)) {
    document.getElementById("email_err").innerHTML = "";
  } else {
    document.getElementById("email_err").innerHTML =
      "Please Enter a valid email";
    return false;
  }
  if (Rxphone.test(phoneno)) {
    document.getElementById("phoneno_err").innerHTML = "";
  } else {
    document.getElementById("phoneno_err").innerHTML =
      "Please Enter a valid phone #.";
    return false;
  }
  var nKey = document.getElementById("name").value;
  var eKey = document.getElementById("email").value;
  var pKey = document.getElementById("pass").value;
  var numKey = document.getElementById("phoneno").value;

  sessionStorage.setItem("fname", nKey);
  sessionStorage.setItem("email", eKey);
  sessionStorage.setItem("cpass", pKey);
  sessionStorage.setItem("phoneno", numKey);
}
