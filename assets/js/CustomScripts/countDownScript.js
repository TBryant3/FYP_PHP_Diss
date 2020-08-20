// Countdown date
// Brown JS & HTML Tests unlock plus Black Topics unlock
let countDownDate = new Date("Nov 2, 2020 12:30:10").getTime();
// All variables ending in '1' is when the Black JS & HTML Tests "unlock"
let countDownDate1 = new Date("Nov 3, 2021 12:30:10").getTime();

//Function for counting down
let countDownFunc = setInterval(function () {
    // Setting today's date
    let current = new Date().getTime();
    // Time difference between countdown date and now
    let difference = countDownDate - current;
    let difference1 = countDownDate1 - current;
    //Setting time variables
    let days = Math.floor(difference / (1000 * 60 * 60 * 24));
    let hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    let minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
    let seconds = Math.floor((difference % (1000 * 60)) / 1000);

    //Variables to set time for second countdown
    let days1 = Math.floor(difference1 / (1000 * 60 * 60 * 24));
    let hours1 = Math.floor((difference1 % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    let minutes1 = Math.floor((difference1 % (1000 * 60 * 60)) / (1000 * 60));
    let seconds1 = Math.floor((difference1 % (1000 * 60)) / 1000);

    // Output the result in an element
    document.getElementById("countDownArea").innerHTML = days + "d " + hours + "h "
        + minutes + "m " + seconds + "s ";
    //Applying to second countdown
    document.getElementById("countDownArea1").innerHTML = days1 + "d " + hours1 + "h "
        + minutes1 + "m " + seconds1 + "s ";

    // If the count down is over, write some text
    if (difference < 0)
    {
        //Function to clear timer value
        clearInterval(countDownFunc);
        //Change first countdown timer text when timer runs out
        document.getElementById("countDownArea").innerHTML = "EXPIRED";
        //Change second countdown timer text when timer runs out
        // DOES NOT RUN ON THE TOPICS PAGE BUT WILL THROW ERRORS
        document.getElementById("countDownArea1").innerHTML = "EXPIRED";
    }

}, 1000);


