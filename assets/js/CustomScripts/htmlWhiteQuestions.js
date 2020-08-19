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
let whiteHTMLQuestions1 = [
    {
        htmlQuestion1 : "Which of these HTML tags do you need to add JavaScript to a HTML document?",
        htmlAnswerA1 : "< script >",
        htmlAnswerB1 : "< div >",
        htmlAnswerC1 : "< style >",
        htmlCorrectAnswer1 : "A"
    },
    {
        htmlQuestion1 : "What type of computing language is JavaScript?",
        htmlAnswerA1 : "Mark-Up",
        htmlAnswerB1 : "StyleSheet",
        htmlAnswerC1 : "Scripting",
        htmlCorrectAnswer1 : "C"
    },
    {
        htmlQuestion1 : "JavaScript can be used to create webpages instead of HTML?",
        htmlAnswerA1 : "True",
        htmlAnswerB1 : "False",
        htmlAnswerC1 : "Sometimes",
        htmlCorrectAnswer1 : "B"
    },
];
//Declaring the question the test is on
const lastHTMLWhiteQuestion1 = whiteHTMLQuestions1.length - 1;
let currentHTMLWhiteQuestion1 = 0;
//This loads in the test's questions
function loadWhiteHTMLQuestion1()
{
    let wq1 = whiteHTMLQuestions1[currentHTMLWhiteQuestion1];

    htmlQuestion1.innerHTML = "<p>"+ wq1.htmlQuestion1 +"</p>";
    htmlAnswerA1.innerHTML = wq1.htmlAnswerA1;
    htmlAnswerB1.innerHTML = wq1.htmlAnswerB1;
    htmlAnswerC1.innerHTML = wq1.htmlAnswerC1;
}
//Execute function to load questions and show the test area
loadWhiteHTMLQuestion1();

function htmlProgressRender1()
{
    for(let qIndex1 = 0; qIndex1 <= lastHTMLWhiteQuestion1; qIndex1++)
    {
        htmlResultProgress1.innerHTML += "<div class='htmlProg1' id="+ qIndex1 +"></div>";
    }
}
htmlProgressRender1();

//Turns marker green if correct
function correctHTMLAnswer1()
{
    document.getElementById(currentHTMLWhiteQuestion1).style.backgroundColor = "green";
}
//Turns marker red if wrong
function wrongHTMLAnswer1()
{
    document.getElementById(currentHTMLWhiteQuestion1).style.backgroundColor = "red";
}

// Function to check if the user has input the right answer
function checkHTMLAnswer1(htmlAnswer1)
{
    if (htmlAnswer1 === whiteHTMLQuestions1[currentHTMLWhiteQuestion1].htmlCorrectAnswer1)
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
        loadWhiteHTMLQuestion1();
    }
    else
    {
        htmlScoreRender1();
    }
}
// Functions to show the score percentage at end of test
function htmlScoreRender1()
{
    htmlScoreContainer1.style.display = "block";
    const htmlScorePercent1 = Math.round(100 * htmlScore1/whiteHTMLQuestions1.length);
    if (htmlScorePercent1.value >= 100)
    {
        htmlScorePercent1.value = 100;
        alert('Test 1: You completed the test with a perfect score!' )
    }

    htmlScoreContainer1.innerHTML = "<p>"+ htmlScorePercent1 +"%</p>";
}





////////////////////////////////////////////////////////////
// Tier 2 Question Creation/////////////////////////////////
let whiteHTMLQuestions2 =
    [
        {
            htmlQuestion2: "Which of these were developed first?",
            htmlAnswerA2: "HTML",
            htmlAnswerB2: "CSS",
            htmlAnswerC2: "JavaScript",
            htmlCorrectAnswer2: "A"
        },
        {
            htmlQuestion2: "Which of these elements are used to reference a decimal value?",
            htmlAnswerA2: "var",
            htmlAnswerB2: "number",
            htmlAnswerC2: "value",
            htmlCorrectAnswer2: "A"
        },
        {
            htmlQuestion2: "Where can JavaScript reference tags be placed in a HTML document?",
            htmlAnswerA2: "head",
            htmlAnswerB2: "body",
            htmlAnswerC2: "both",
            htmlCorrectAnswer2: "C"
        },
    ];
//Declaring the 2nd set of questions
const lastHTMLWhiteQuestion2 = whiteHTMLQuestions2.length - 1;
let currentHTMLWhiteQuestion2 = 0;

//This loads in the test's questions
function loadWhiteHTMLQuestion2()
{
    let wq2 = whiteHTMLQuestions2[currentHTMLWhiteQuestion2];

    htmlQuestion2.innerHTML = "<p>"+ wq2.htmlQuestion2 +"</p>";
    htmlAnswerA2.innerHTML = wq2.htmlAnswerA2;
    htmlAnswerB2.innerHTML = wq2.htmlAnswerB2;
    htmlAnswerC2.innerHTML = wq2.htmlAnswerC2;
}

//NEED IF STATEMENT FOR IF THE TIER 1 SCORE IS SHOWN
loadWhiteHTMLQuestion2();

// Second set of progress indicators
function htmlProgressRender2()
{
    for(let qIndex2 = 0; qIndex2 <= lastHTMLWhiteQuestion2; qIndex2++)
    {
        htmlResultProgress2.innerHTML += "<div class='htmlProg2' id="+ qIndex2 +"></div>";
    }
}
htmlProgressRender2();


//Turns marker green if correct
function correctHTMLAnswer2()
{
    document.getElementById(currentHTMLWhiteQuestion2).style.backgroundColor = "green";
}
//Turns marker red if wrong
function wrongHTMLAnswer2()
{
    document.getElementById(currentHTMLWhiteQuestion2).style.backgroundColor = "red";
}



//Second Answer renderer
function checkHTMLAnswer2(htmlAnswer2)
{
    if (htmlAnswer2 === whiteHTMLQuestions2[currentHTMLWhiteQuestion2].htmlCorrectAnswer2)
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
        loadWhiteHTMLQuestion2();
    }
    else
    {
        htmlScoreRender2();
    }
}

function htmlScoreRender2()
{
    htmlScoreContainer2.style.display = "block";
    const scoreHTMLPercent2 = Math.round(100 * htmlScore2/whiteHTMLQuestions2.length);


    htmlScoreContainer2.innerHTML = "<p>"+ scoreHTMLPercent2 +"%</p>";
}


///////////////////////////////////////////////
//////// Third question set //////////////////
let whiteHTMLQuestions3 = [
    {
        htmlQuestion3 : "Which of these tags do you need to add JavaScript to a HTML document?",
        htmlAnswerA3 : "< script >",
        htmlAnswerB3 : "< div >",
        htmlAnswerC3 : "< style >",
        htmlCorrectAnswer3 : "A"
    },
    {
        htmlQuestion3 : "What type of computing language is JavaScript?",
        htmlAnswerA3 : "Mark-Up",
        htmlAnswerB3 : "StyleSheet",
        htmlAnswerC3 : "Scripting",
        htmlCorrectAnswer3 : "C"
    },
    {
        htmlQuestion3 : "JavaScript can be used to create webpages instead of HTML?",
        htmlAnswerA3 : "True",
        htmlAnswerB3 : "False",
        htmlAnswerC3 : "Sometimes",
        htmlCorrectAnswer3 : "B"
    },
];
//Declaring the question the test is on
const lastHTMLWhiteQuestion3 = whiteHTMLQuestions3.length - 1;
let currentHTMLWhiteQuestion3 = 0;
//This loads in the test's questions
function loadWhiteHTMLQuestion3()
{
    let wq3 = whiteHTMLQuestions3[currentHTMLWhiteQuestion3];

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
        htmlResultProgress3.innerHTML += "<div class='htmlProg3' id="+ qIndex3 +"></div>";
    }
}
htmlProgressRender3();

//Turns marker green if correct
function correctHTMLAnswer3()
{
    document.getElementById(currentHTMLWhiteQuestion3).style.backgroundColor = "green";
}
//Turns marker red if wrong
function wrongHTMLAnswer3()
{
    document.getElementById(currentHTMLWhiteQuestion3).style.backgroundColor = "red";
}

// Function to check if the user has input the right answer
function checkHTMLAnswer3(htmlAnswer3)
{
    if (htmlAnswer3 === whiteHTMLQuestions3[currentHTMLWhiteQuestion3].htmlCorrectAnswer3)
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
        scoreHTMLRender3();
    }
}
// Functions to show the score percentage at end of test
function scoreHTMLRender3()
{
    htmlScoreContainer3.style.display = "block";
    const scoreHTMLPercent3 = Math.round(100 * htmlScore3/whiteHTMLQuestions3.length);

    htmlScoreContainer3.innerHTML = "<p>"+ scoreHTMLPercent3 +"%</p>";
}



