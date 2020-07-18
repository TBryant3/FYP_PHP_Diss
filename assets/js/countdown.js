// Countdown date
var countDownDate = new Date("Nov 3, 2021 12:30:10").getTime();
//Function for counting down
var countDownFunc = setInterval(function()
{
    // Setting today's date
    var current = new Date().getTime();
    // Time difference between countdown date and now
    var difference = countDownDate - current;
    //Setting time variables
    var days = Math.floor(difference / (1000 * 60 * 60 * 24));
    var hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((difference % (1000 * 60)) / 1000);

    // Output the result in an element with id="demo"
    document.getElementById("countDownArea").innerHTML = days + "d " + hours + "h "
        + minutes + "m " + seconds + "s ";

    // If the count down is over, write some text
    if (difference < 0) {
        clearInterval(countDownFunc);
        document.getElementById("countDownArea").innerHTML = "EXPIRED";
    }

}, 1000);