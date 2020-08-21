/*
//////////// HTML WHITE Test Variables! //////////////////////
Declaring Variables by getting their HTML elements
Set 1
*/
// The Question being asked
const htmlQuestion1 = document.getElementById("htmlQuestion1");
// The first option in test
const htmlAnswerA1 = document.getElementById("htmlA1");
// The second option in test
const htmlAnswerB1 = document.getElementById("htmlB1");
// The third option in test
const htmlAnswerC1 = document.getElementById("htmlC1");
// The div in which the progress icons are rendered
const htmlResultProgress1 = document.getElementById("htmlResultProgress1");
// The div in which the score percentage is rendered
const htmlScoreContainer1 = document.getElementById("htmlScoreContainer1");
// The amount of answers the user has gotten right
let htmlScore1 = 0;

//Set 2
const htmlQuestion2 = document.getElementById("htmlQuestion2");
const htmlAnswerA2 = document.getElementById("htmlA2");
const htmlAnswerB2 = document.getElementById("htmlB2");
const htmlAnswerC2 = document.getElementById("htmlC2");
const htmlResultProgress2 = document.getElementById("htmlResultProgress2");
const htmlScoreContainer2 = document.getElementById("htmlScoreContainer2");
let htmlScore2 = 0;
//Set 3s
const htmlQuestion3 = document.getElementById("htmlQuestion3");
const htmlAnswerA3= document.getElementById("htmlA3");
const htmlAnswerB3 = document.getElementById("htmlB3");
const htmlAnswerC3 = document.getElementById("htmlC3");
const htmlResultProgress3 = document.getElementById("htmlResultProgress3");
const htmlScoreContainer3 = document.getElementById("htmlScoreContainer3");
let htmlScore3 = 0;
///////////////////////////////////////////////////////////////////////////

// White test set 1 Question Creation
let htmlWhiteQuestions1 = [
    {
        htmlQuestion1 : "What does HTML stand for?",
        htmlAnswerA1 : "HyperText Markdown Language",
        htmlAnswerB1 : "HyperText Markup Language",
        htmlAnswerC1 : "HyperText Marking Language",
        htmlCorrectAnswer1 : "B"
    },
    {
        htmlQuestion1 : "What is the purpose of HTML?",
        htmlAnswerA1 : "To enable the creation of documents to be displayed in web browsers",
        htmlAnswerB1 : "To connect other applications to websites",
        htmlAnswerC1 : "To produce applications that can run JavaScript",
        htmlCorrectAnswer1 : "A"
    },
    {
        htmlQuestion1 : "HTML can style itself, it doesn't need CSS",
        htmlAnswerA1 : "True",
        htmlAnswerB1 : "False",
        htmlAnswerC1 : "True but using CSS enables better styling options",
        htmlCorrectAnswer1 : "B"
    },
];
//Declaring the question the test is on
const lastHTMLWhiteQuestion1 = htmlWhiteQuestions1.length - 1;
let currentHTMLWhiteQuestion1 = 0;
//This loads in the test's questions
function loadHTMLWhiteQuestion1()
{
    let wq1 = htmlWhiteQuestions1[currentHTMLWhiteQuestion1];

    htmlQuestion1.innerHTML = "<p>"+ wq1.htmlQuestion1 +"</p>";
    htmlAnswerA1.innerHTML = wq1.htmlAnswerA1;
    htmlAnswerB1.innerHTML = wq1.htmlAnswerB1;
    htmlAnswerC1.innerHTML = wq1.htmlAnswerC1;
}
//Execute function to load questions and show the test area
loadHTMLWhiteQuestion1();

function htmlProgressRender1()
{
    for(let qIndex1 = 0; qIndex1 <= lastHTMLWhiteQuestion1; qIndex1++)
    {
        htmlResultProgress1.innerHTML += "<div class='htmlWProg' id=htmlWProg1"+ qIndex1 +"></div>";
    }
}
htmlProgressRender1();

//Turns marker green if correct
function correctHTMLAnswer1()
{
    document.getElementById("htmlWProg1" + currentHTMLWhiteQuestion1).style.backgroundColor = "green";
}
//Turns marker red if wrong
function wrongHTMLAnswer1()
{
    document.getElementById("htmlWProg1" +currentHTMLWhiteQuestion1).style.backgroundColor = "red";
}

// Function to check if the user has input the right answer
function checkHTMLAnswer1(htmlAnswer1)
{
    if (htmlAnswer1 === htmlWhiteQuestions1[currentHTMLWhiteQuestion1].htmlCorrectAnswer1)
    {
        htmlScore1++;
        // Turns user input into an immediate feedback system
        // Turn answer green
        correctHTMLAnswer1();
    }
    else
    {
        // Turns user input into an immediate feedback system
        // Turn answer red
        wrongHTMLAnswer1();
    }
    if (currentHTMLWhiteQuestion1 < lastHTMLWhiteQuestion1)
    {
        currentHTMLWhiteQuestion1++;
        loadHTMLWhiteQuestion1();
    }
    else
    {
        htmlScoreRender1();
        document.getElementById('htmlAnswers1').style.display = 'none';
    }
}
// Functions to show the score percentage at end of test
function htmlScoreRender1()
{
    htmlScoreContainer1.style.display = "block";
    const htmlScorePercent1 = Math.round(100 * htmlScore1/htmlWhiteQuestions1.length);

    htmlScoreContainer1.innerHTML = "<p>"+ htmlScorePercent1 +"%</p>";

    switch(htmlScorePercent1)
    {
        case 0:
        {
            htmlQuestion1.innerHTML = "Maybe consider revising more?! It's okay, You've got this! ";
            break;
        }
        case 33:
        {
            htmlQuestion1.innerHTML = "Nearly there, try again! :(";
            break;
        }
        case 67:
        {
            htmlQuestion1.innerHTML = "Almost had it! So close! :|";
            break;
        }
        case 100:
        {
            htmlQuestion1.innerHTML = "Test Completed with a Perfect Score well done! :)";
            break;
        }
    }
}





////////////////////////////////////////////////////////////
// Tier 2 Question Creation/////////////////////////////////
let htmlWhiteQuestions2 =
    [
        {
            htmlQuestion2: "What language was developed in 1996?",
            htmlAnswerA2: "HTML",
            htmlAnswerB2: "LiveScript",
            htmlAnswerC2: "CSS",
            htmlCorrectAnswer2: "C"
        },
        {
            htmlQuestion2: "HTML documents can have JavaScript script tags included outside its html tags?",
            htmlAnswerA2: "True and the browser isn't affected by this",
            htmlAnswerB2: "False, the browser will throw an error",
            htmlAnswerC2: "True but placing script tags outside html tags will result in errors being thrown",
            htmlCorrectAnswer2: "A"
        },
        {
            htmlQuestion2: "External code files have to be in the same folder as the HTML document to be accessible",
            htmlAnswerA2: "True, the browser cannot read past the root folder",
            htmlAnswerB2: "False, the browser can read from any location on the system drive",
            htmlAnswerC2: "Both, as long as the file path is specified, documents can be accessed from anywhere",
            htmlCorrectAnswer2: "C"
        },
    ];
//Declaring the 2nd set of questions
const lastHTMLWhiteQuestion2 = htmlWhiteQuestions2.length - 1;
let currentHTMLWhiteQuestion2 = 0;

//This loads in the test's questions
function loadHTMLWhiteQuestion2()
{
    let wq2 = htmlWhiteQuestions2[currentHTMLWhiteQuestion2];

    htmlQuestion2.innerHTML = "<p>"+ wq2.htmlQuestion2 +"</p>";
    htmlAnswerA2.innerHTML = wq2.htmlAnswerA2;
    htmlAnswerB2.innerHTML = wq2.htmlAnswerB2;
    htmlAnswerC2.innerHTML = wq2.htmlAnswerC2;
}

//NEED IF STATEMENT FOR IF THE TIER 1 SCORE IS SHOWN
loadHTMLWhiteQuestion2();

// Second set of progress indicators
function htmlProgressRender2()
{
    for(let qIndex2 = 0; qIndex2 <= lastHTMLWhiteQuestion2; qIndex2++)
    {
        htmlResultProgress2.innerHTML += "<div class='htmlWProg' id=htmlWProg2"+ qIndex2 +"></div>";
    }
}
htmlProgressRender2();
//Turns marker green if correct
function correctHTMLAnswer2()
{
    document.getElementById("htmlWProg2" + currentHTMLWhiteQuestion2).style.backgroundColor = "green";
}
//Turns marker red if wrong
function wrongHTMLAnswer2()
{
    document.getElementById("htmlWProg2" + currentHTMLWhiteQuestion2).style.backgroundColor = "red";
}



//Second Answer renderer
function checkHTMLAnswer2(htmlWhiteAnswer2)
{
    if (htmlWhiteAnswer2 === htmlWhiteQuestions2[currentHTMLWhiteQuestion2].htmlCorrectAnswer2)
    {
        htmlScore2++;
        // Turns user input into an immediate feedback system
        // Turn answer green
        correctHTMLAnswer2();
    }
    else
    {
        // Turns user input into an immediate feedback system
        // Turn answer red
        wrongHTMLAnswer2();
    }
    if (currentHTMLWhiteQuestion2 < lastHTMLWhiteQuestion2)
    {
        currentHTMLWhiteQuestion2++;
        loadHTMLWhiteQuestion2();
    }
    else
    {
        htmlScoreRender2();
        document.getElementById('htmlAnswers2').style.display = 'none';
    }
}

function htmlScoreRender2()
{
    htmlScoreContainer2.style.display = "block";
    const htmlScorePercent2 = Math.round(100 * htmlScore2/htmlWhiteQuestions2.length);


    htmlScoreContainer2.innerHTML = "<p>"+ htmlScorePercent2 +"%</p>";

    switch(htmlScorePercent2)
    {
        case 0:
        {
            htmlQuestion2.innerHTML = "Maybe consider revising more?! It's okay, You've got this! ";
            break;
        }
        case 33:
        {
            htmlQuestion2.innerHTML = "Nearly there, try again! :(";
            break;
        }
        case 67:
        {
            htmlQuestion2.innerHTML = "Almost had it! So close! :|";
            break;
        }
        case 100:
        {
            htmlQuestion2.innerHTML = "Test Completed with a Perfect Score well done! :)";
            break;
        }
    }
}
///////////////////////////////////////////////
//////// Third question set //////////////////
let htmlWhiteQuestions3 = [
    {
        htmlQuestion3 : "CSS is a coding language devised to allow HTML to produce more efficient web content?",
        htmlAnswerA3 : "False, CSS is a stylesheet language using a set of properties to style specified HTML elements",
        htmlAnswerB3 : "True, CSS was developed to allow for more HTML content to be delivered on a single webpage",
        htmlAnswerC3 : "Both, CSS is a stylesheet language which allows for HTML content to be delivered more efficiently",
        htmlCorrectAnswer3 : "A"
    },
    {
        htmlQuestion3 : "HTML is written as a plain english markup, can other coding languages be used within HTML?",
        htmlAnswerA3 : "Yes, many languages can be integrated",
        htmlAnswerB3 : "HTML only allows only JavaScript and CSS integration",
        htmlAnswerC3 : "HTML5 was developed to allow integration of the C-based languages",
        htmlCorrectAnswer3 : "B"
    },
    {
        htmlQuestion3 : "Example CSS properties include...",
        htmlAnswerA3 : "border-color, padding, margin, font-size",
        htmlAnswerB3 : "page-color, margin-size, scripts, headings",
        htmlAnswerC3 : "display, z-index, margin, vertical-align ",
        htmlCorrectAnswer3 : "B"
    },
];
//Declaring the question the test is on
const lastHTMLWhiteQuestion3 = htmlWhiteQuestions3.length - 1;
let currentHTMLWhiteQuestion3 = 0;
//This loads in the test's questions
function loadWhiteHTMLQuestion3()
{
    let wq3 = htmlWhiteQuestions3[currentHTMLWhiteQuestion3];

    htmlQuestion3.innerHTML = "<p>"+ wq3.htmlQuestion3 +"</p>";
    htmlAnswerA3.innerHTML = wq3.htmlAnswerA3;
    htmlAnswerB3.innerHTML = wq3.htmlAnswerB3;
    htmlAnswerC3.innerHTML = wq3.htmlAnswerC3;
}
//Execute function to load questions and show the test area
loadWhiteHTMLQuestion3();

function htmlProgressRender3()
{
    for(let qIndex3 = 0; qIndex3 <= lastHTMLWhiteQuestion3; qIndex3++)
    {
        htmlResultProgress3.innerHTML += "<div class='htmlWProg' id=htmlWProg3"+ qIndex3 +"></div>";
    }
}
htmlProgressRender3();

//Turns marker green if correct
function correctHTMLAnswer3()
{
    document.getElementById("jsWProg3" + currentHTMLWhiteQuestion3).style.backgroundColor = "green";
}
//Turns marker red if wrong
function wrongHTMLAnswer3()
{
    document.getElementById("jsWProg3" + currentHTMLWhiteQuestion3).style.backgroundColor = "red";
}

// Function to check if the user has input the right answer
function checkHTMLAnswer3(htmlAnswer3)
{
    if (htmlAnswer3 === htmlWhiteQuestions3[currentHTMLWhiteQuestion3].htmlCorrectAnswer3)
    {
        htmlScore3++;
        // Turns user input into an immediate feedback system
        // Turn answer green
        correctHTMLAnswer3();
    }
    else
    {
        // Turns user input into an immediate feedback system
        // Turn answer red
        wrongHTMLAnswer3();
    }
    if (currentHTMLWhiteQuestion3 < lastHTMLWhiteQuestion3)
    {
        currentHTMLWhiteQuestion3++;
        loadWhiteHTMLQuestion3();
    }
    else
    {
        htmlScoreRender3();
        document.getElementById('htmlAnswers3').style.display = 'none';
    }
}
// Functions to show the score percentage at end of test
function htmlScoreRender3()
{
    htmlScoreContainer3.style.display = "block";
    const htmlScorePercent3 = Math.round(100 * htmlScore3/htmlWhiteQuestions3.length);

    htmlScoreContainer3.innerHTML = "<p>"+ htmlScorePercent3 +"%</p>";

    switch(htmlScorePercent3)
    {
        case 0:
        {
            htmlQuestion3.innerHTML = "Maybe consider revising more?! It's okay, You've got this! ";
            break;
        }
        case 33:
        {
            htmlQuestion3.innerHTML = "Nearly there, try again! :(";
            break;
        }
        case 67:
        {
            htmlQuestion3.innerHTML = "Almost had it! So close! :|";
            break;
        }
        case 100:
        {
            htmlQuestion3.innerHTML = "Test Completed with a Perfect Score well done! :)";
            break;
        }
    }
}
$("#whiteBelt").click(function()
{
    $("#whiteGlobal").toggle("slide");
});


