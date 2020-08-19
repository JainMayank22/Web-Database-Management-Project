var inputFields = document.c_form.getElementsByTagName("input");
var myError = document.getElementById('c_error');

var validateInfo = {
  "ourname": {
    "pattern": "[a-zA-Z]+",
    "placeholder": "Tu Nombre",
    "required": true},
  "ouremail": {"required": true},
  "ourevent": {
    "pattern": "[a-zA-Z]+",
    "placeholder": "Asunto",
    "required": true}
};
document.c_form.onsubmit = function() {
  for (var key in validateInfo) {
    var myField = document.getElementById(key);
    if ((validateInfo[key].required) && (myField.value === '')) {
      myError.innerHTML = "Required field " + key + " not filled";
      myField.select();
      return false;
    }
  }
  return true;
}
for (var key in inputFields) {
  var myField = inputFields[key];
  myField.onchange = function() {
    var myPattern = this.pattern;
    var myPlaceholder = this.placeholder;
    var isValid = this.value.search(myPattern) >= 0;
    if (!(isValid)) {
      myError.innerHTML = "Input does match expected pattern " + myPlaceholder;
    } else {
      myError.innerHTML = " ";
    }
  }
}
