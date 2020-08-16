

    $(document).ready(function () {
        // Countdown date
        let countDownDate = new Date("Nov 3, 2021 12:30:10").getTime();
        //Function for counting down
        let countDownFunc = setInterval(function () {
            // Setting today's date
            let current = new Date().getTime();
            // Time difference between countdown date and now
            let difference = countDownDate - current;
            //Setting time variables
            let days = Math.floor(difference / (1000 * 60 * 60 * 24));
            let hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            let minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
            let seconds = Math.floor((difference % (1000 * 60)) / 1000);

            // Output the result in an element with id="demo"
            document.getElementById("countDownArea").innerHTML = days + "d " + hours + "h "
                + minutes + "m " + seconds + "s ";

            // If the count down is over, write some text
            if (difference < 0) {
                clearInterval(countDownFunc);
                document.getElementById("countDownArea").innerHTML = "EXPIRED";
            }

        }, 1000);
    });

    $(document).ready(function ()
    {
        document.getElementById("example").innerHTML = "This is the Output in plain English";




    });
