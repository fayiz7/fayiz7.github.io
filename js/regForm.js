var message = ["Enter your first Name", "Enter your Last Name", "Enter medical record number", "Enter your Address such as city-street name,building no.", "Enter your mobile number eg.966 5** ** ****",
  "Enter your email address", "Enter your password - mustbe at least 6 digits letters and numbers", "Retype the same password you entered", "Enter your birthday", ""
]

function noteText(messageIndex) {
  document.getElementById("help").innerHTML =
    "help: " + message[messageIndex];
}

var addrow = function(event) {
    var line = document.createElement('tr');
    var td_num = document.createElement('td');
    var td_name = document.createElement('td');
    var td_email = document.createElement('td');
    var td_mobile = document.createElement('td');
    var td_option = document.createElement('td');
    var del_btn = document.createElement('button');
