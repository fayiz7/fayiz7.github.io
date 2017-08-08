function agecal() {
  var para = document.getElementById('printResult');
  var days = document.getElementById('days');
  var months = document.getElementById('months');
  var years = document.getElementById('years');
  var day = parseInt(days.value);
  var month = parseInt(months.value);
  var year = parseInt(years.value);
  var currentDate = Date();
  para.innerHTML="welcome"+currentDate;
  para.write(currentDate);
}
