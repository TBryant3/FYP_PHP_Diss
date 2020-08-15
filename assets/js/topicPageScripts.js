$(document).ready(function ($)
{
    // Script for 'Coming Soon' dialog //
// Countdown date
    let countDownDate = new Date("Nov 3, 2021 12:30:10").getTime();
//Function for counting down
    let countDownFunc = setInterval(function()
    {
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

    let favTop1 = document.getElementById("favTop1");
    let favTop2 = document.getElementById("favTop2");
    let favTop3 = document.getElementById("favTop3");
    let favTop4 = document.getElementById("favTop4");


// Favourite Topic notification alerts
    function favTopicAlert()
    {
        // First (HTML/CSS) Alert Settings //
        this.favHTML = function(dialog1)
        {
            let alertBox1 = document.getElementById('alertBox1');

            if (favTop1.click && favTop1.style.color === 'lightgrey')
            {
                alertBox1.style.display = "block";
                document.getElementById('alertBoxHeader1').innerHTML = "Favourites Updated";
                document.getElementById('alertBoxBody1').innerHTML = dialog1;

                favTop1.style.color = 'green';

                $("#alertBox1").fadeIn("slow", function()
                {
                    setTimeout(function()
                    {
                        $("#alertBox1").fadeOut(3000);
                    }, 1000);
                });
            }
            else if (favTop1.click && favTop1.style.color === 'green')
            {
                alertBox1.style.display = "block";
                document.getElementById('alertBoxHeader1').innerHTML = "Favourites Updated";
                document.getElementById('alertBoxBody1').innerHTML = dialog1;

                favTop1.style.color = 'lightgrey';

                $("#alertBox1").fadeIn("slow", function()
                {
                    setTimeout(function()
                    {
                        $("#alertBox1").fadeOut(3000);
                    }, 1000);
                });
            }
        }
        // Second (JS) Alert Settings //
        this.favJS = function(dialog2)
        {
            let alertBox2 = document.getElementById('alertBox2');

            if (favTop2.click && favTop2.style.color === 'lightgrey')
            {
                alertBox2.style.display = "block";
                document.getElementById('alertBoxHeader2').innerHTML = "Favourites Updated";
                document.getElementById('alertBoxBody2').innerHTML = dialog2;

                favTop2.style.color = 'green';

                $("#alertBox2").fadeIn("slow", function()
                {
                    setTimeout(function()
                    {
                        $("#alertBox2").fadeOut(5000);
                    }, 1000);
                });
            }
            else if (favTop2.click && favTop2.style.color === 'green')
            {
                alertBox2.style.display = "block";
                document.getElementById('alertBoxHeader4').innerHTML = "Favourites Updated";
                document.getElementById('alertBoxBody4').innerHTML = dialog2;

                favTop2.style.color = 'lightgrey';

                $("#alertBox2").fadeIn("slow", function()
                {
                    setTimeout(function()
                    {
                        $("#alertBox2").fadeOut(5000);
                    }, 1000);
                });
            }

        }
        // Third (C++) Alert Settings //
        this.favPlus = function(dialog3)
        {
            let alertBox3 = document.getElementById('alertBox3');

            if (favTop3.click && favTop3.style.color === 'lightgrey')
            {
                alertBox3.style.display = "block";
                document.getElementById('alertBoxHeader3').innerHTML = "Favourites Updated";
                document.getElementById('alertBoxBody3').innerHTML = dialog3;

                favTop3.style.color = 'green';

                $("#alertBox3").fadeIn("slow", function()
                {
                    setTimeout(function()
                    {
                        $("#alertBox3").fadeOut(5000);
                    }, 1000);
                });
            }
            else if (favTop3.click && favTop3.style.color === 'green')
            {
                alertBox3.style.display = "block";
                document.getElementById('alertBoxHeader3').innerHTML = "Favourites Updated";
                document.getElementById('alertBoxBody3').innerHTML = dialog3;

                favTop3.style.color = 'lightgrey';

                $("#alertBox3").fadeIn("slow", function()
                {
                    setTimeout(function()
                    {
                        $("#alertBox3").fadeOut(5000);
                    }, 1000);
                });
            }
        }
        // Fourth (C#) Alert Settings //
        this.favSharp = function(dialog4)
        {
            let alertBox4 = document.getElementById('alertBox4');

            if (favTop4.click && favTop4.style.color === 'lightgrey')
            {
                alertBox4.style.display = "block";
                document.getElementById('alertBoxHeader4').innerHTML = "Favourites Updated";
                document.getElementById('alertBoxBody4').innerHTML = dialog4;

                favTop4.style.color = 'green';

                $("#alertBox4").fadeIn("slow", function()
                {
                    setTimeout(function()
                    {
                        $("#alertBox4").fadeOut(5000);
                    }, 1000);
                });
            }
            else if (favTop4.click && favTop4.style.color === 'green')
            {
                alertBox4.style.display = "block";
                document.getElementById('alertBoxHeader4').innerHTML = "Favourites Updated";
                document.getElementById('alertBoxBody4').innerHTML = dialog4;

                favTop4.style.color = 'lightgrey';

                $("#alertBox4").fadeIn("slow", function()
                {
                    setTimeout(function()
                    {
                        $("#alertBox4").fadeOut(5000);
                    }, 1000);
                });
            }
        }
    }
    let Alert = new favTopicAlert();


/// Scripts for Progress Bars ///

    $("#pbTopic1").progressbar(
        {
            value: 0,
            create: function () {
                $("#html-label").text($("#pbTopic1").progressbar("value") + "%");
            },
            change: function () {
                $("#html-label").text($("#pbTopic1").progressbar("value") + "%");
            },
            complete: function () {
                $("#html-label").append("Completed")
            }
        });

    $("#pbTopic2").progressbar(
        {
            value: 0,
            create: function () {
                $("#csharp-label").text($("#pbTopic2").progressbar("value") + "%");
            },
            change: function () {
                $("#csharp-label").text($("#pbTopic2").progressbar("value") + "%");
            },
            complete: function () {
                $("#csharp-label").text("Completed!")
            }
        });

    $('#pbTopic3').progressbar(
        {
            value: 0,
            create: function () {
                $("#cplus-label").text($("#pbTopic3").progressbar("value") + "%");
            },
            change: function () {
                $("#cplus-label").text($("#pbTopic3").progressbar("value") + "%");
            },
            complete: function () {
                $("#cplus-label").text("Completed!")
            }
        });

    $("#pbTopic4").progressbar(
        {
            value: 0,
            create: function () {
                $("#js-label").text($("#pbTopic4").progressbar("value") + "%");
            },
            change: function () {
                $("#js-label").text($("#pbTopic4").progressbar("value") + "%");
            },
            complete: function () {
                $("#js-label").text("Completed!")
            }
        });
});