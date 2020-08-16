$(document).ready(function ($)
{
    let favTest1 = document.getElementById("favTest1");
    let favTest2 = document.getElementById("favTest2");
    let favTest3 = document.getElementById("favTest3");
    let favTest4 = document.getElementById("favTest4");


    function favTestAlert()
    {
        // First (HTML/CSS) Tests Alert Settings //
        this.favTestHTML = function(dialog)
        {
            let alertBox1 = document.getElementById('alertBox1');

            if (favTest1.click && favTest1.style.color === 'lightgrey')
            {
                alertBox1.style.display = "block";
                document.getElementById('alertBoxHeader1').innerHTML = "Favourites Updated";
                document.getElementById('alertBoxBody1').innerHTML = dialog;

                favTest1.style.color = 'green';

                $("#alertBox1").fadeIn("slow", function()
                {
                    setTimeout(function()
                    {
                        $("#alertBox1").fadeOut(3000);
                    }, 1000);
                });
            }
            else if (favTest1.click && favTest1.style.color === 'green')
            {
                alertBox1.style.display = "block";
                document.getElementById('alertBoxHeader1').innerHTML = "Favourites Updated";
                document.getElementById('alertBoxBody1').innerHTML = dialog;

                favTest1.style.color = 'lightgrey';

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
        this.favTestJS = function(dialog2)
        {
            let alertBox2 = document.getElementById('alertBox2');

            if (favTest2.click && favTest2.style.color === 'lightgrey')
            {
                alertBox2.style.display = "block";
                document.getElementById('alertBoxHeader2').innerHTML = "Favourites Updated";
                document.getElementById('alertBoxBody2').innerHTML = dialog2;

                favTest2.style.color = 'green';

                $("#alertBox2").fadeIn("slow", function()
                {
                    setTimeout(function()
                    {
                        $("#alertBox2").fadeOut(5000);
                    }, 1000);
                });
            }
            else if (favTest2.click && favTest2.style.color === 'green')
            {
                alertBox2.style.display = "block";
                document.getElementById('alertBoxHeader2').innerHTML = "Favourites Updated";
                document.getElementById('alertBoxBody2').innerHTML = dialog2;

                favTest2.style.color = 'lightgrey';

                $("#alertBox2").fadeIn("slow", function()
                {
                    setTimeout(function()
                    {
                        $("#alertBox2").fadeOut(5000);
                    }, 1000);
                });
            }

        }

        // Third (C++) Tests Alert Settings //
        this.favTestPlus = function(dialog3)
        {
            let alertBox3 = document.getElementById('alertBox3');

            if (favTest3.click && favTest3.style.color === 'lightgrey')
            {
                alertBox3.style.display = "block";
                document.getElementById('alertBoxHeader3').innerHTML = "Favourites Updated";
                document.getElementById('alertBoxBody3').innerHTML = dialog3;

                favTest3.style.color = 'green';

                $("#alertBox3").fadeIn("slow", function()
                {
                    setTimeout(function()
                    {
                        $("#alertBox3").fadeOut(5000);
                    }, 1000);
                });
            }
            else if (favTest3.click && favTest3.style.color === 'green')
            {
                alertBox3.style.display = "block";
                document.getElementById('alertBoxHeader3').innerHTML = "Favourites Updated";
                document.getElementById('alertBoxBody3').innerHTML = dialog3;

                favTest3.style.color = 'lightgrey';

                $("#alertBox3").fadeIn("slow", function()
                {
                    setTimeout(function()
                    {
                        $("#alertBox3").fadeOut(5000);
                    }, 1000);
                });
            }
        }
        // Fourth (C#) Tests Alert Settings //
        this.favTestSharp = function(dialog4)
        {
            let alertBox4 = document.getElementById('alertBox4');

            if (favTest4.click && favTest4.style.color === 'lightgrey')
            {
                alertBox4.style.display = "block";
                document.getElementById('alertBoxHeader4').innerHTML = "Favourites Updated";
                document.getElementById('alertBoxBody4').innerHTML = dialog4;

                favTest4.style.color = 'green';

                $("#alertBox4").fadeIn("slow", function()
                {
                    setTimeout(function()
                    {
                        $("#alertBox4").fadeOut(5000);
                    }, 1000);
                });
            }
            else if (favTest4.click && favTest4.style.color === 'green')
            {
                alertBox4.style.display = "block";
                document.getElementById('alertBoxHeader4').innerHTML = "Favourites Updated";
                document.getElementById('alertBoxBody4').innerHTML = dialog4;

                favTest4.style.color = 'lightgrey';

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
    let testAlert = new favTestAlert();
    favTestAlert();




    $('#pbTest1').progressbar(
        {
            value: 0,
            create: function () {
                $('#htmlTest-label').text($('#pbTest1').progressbar("value") + "%");
            },
            change: function () {
                $('#htmlTest-label').text($('#pbTest1').progressbar("value") + "%");
            },
            complete: function () {
                $('#htmlTest-label').append("Completed")
            }
        });
    $('#pbTest2').progressbar(
        {
            value: 0,
            create: function () {
                $('#csharpTest-label').text($('#pbTest2').progressbar("value") + "%");
            },
            change: function () {
                $('#csharpTest-label').text($('#pbTest2').progressbar("value") + "%");
            },
            complete: function () {
                $('#csharpTest-label').text("Completed!")
            }
        });
    $('#pbTest3').progressbar(
        {
            value: 0,
            create: function () {
                $('#cplusTest-label').text($('#pbTest3').progressbar("value") + "%");
            },
            change: function () {
                $('#cplusTest-label').text($('#pbTest3').progressbar("value") + "%");
            },
            complete: function () {
                $('#cplusTest-label').text("Completed!")
            }
        });
    $('#pbTest4').progressbar(
        {
            value: 0,
            create: function () {
                $('#jsTest-label').text($('#pbTest4').progressbar("value") + "%");
            },
            change: function () {
                $('#jsTest-label').text($('#pbTest4').progressbar("value") + "%");
            },
            complete: function () {
                $('#jsTest-label').text("Completed!")
            }
        });
});
