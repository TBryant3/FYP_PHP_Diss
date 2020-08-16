$(document).ready(function ($)
{
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