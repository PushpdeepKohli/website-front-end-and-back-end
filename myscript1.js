var daysInYear = 365.25;
var daysInWeek = 7;
var yearsInLifetime = 80;
var avgweek;
var greet;
function myfunction() {
avgweek = (daysInYear * yearsInLifetime) / daysInWeek;
document.getElementById("demo").innerHTML = avgweek;
}
