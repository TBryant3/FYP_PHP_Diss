///////////////////////////////////////// HTML ORANGE Test Variables! //////////////////////////////////////////////////

//Set 1
const htmlQuestion4 = document.getElementById("htmlQuestion4");
const htmlAnswerA4 = document.getElementById("htmlA4");
const htmlAnswerB4 = document.getElementById("htmlB4");
const htmlAnswerC4 = document.getElementById("htmlC4");
const htmlResultProgress4 = document.getElementById("htmlResultProgress4");
const htmlScoreContainer4 = document.getElementById("htmlScoreContainer4");
let htmlScore4 = 0;

//Set 2
const htmlQuestion5 = document.getElementById("htmlQuestion5");
const htmlAnswerA5 = document.getElementById("htmlA5");
const htmlAnswerB5 = document.getElementById("htmlB5");
const htmlAnswerC5 = document.getElementById("htmlC5");
const htmlResultProgress5 = document.getElementById("htmlResultProgress5");
const htmlScoreContainer5 = document.getElementById("htmlScoreContainer5");
let htmlScore5 = 0;

//Set 3
const htmlQuestion6 = document.getElementById("htmlQuestion6");
const htmlAnswerA6 = document.getElementById("htmlA6");
const htmlAnswerB6 = document.getElementById("htmlB6");
const htmlAnswerC6 = document.getElementById("htmlC6");
const htmlResultProgress6 = document.getElementById("htmlResultProgress6");
const htmlScoreContainer6 = document.getElementById("htmlScoreContainer6");
let htmlScore6 = 0;


let htmlOrangeQuestions1 = [
    {
        htmlQuestion4: "Which of these are NOT a part of JavaScript?",
        htmlAnswerA4: "functions",
        htmlAnswerB4: "events",
        htmlAnswerC4: "stylesheets",
        htmlCorrectAnswer4: "C"
    },
    {
        htmlQuestion4: "Who developed JavaScript?",
        htmlAnswerA4: "Tim Berners-Lee",
        htmlAnswerB4: "Brendan Eich",
        htmlAnswerC4: "Hakon Wium Lie",
        htmlCorrectAnswer4: "B"
    },
    {
        htmlQuestion4: "JavaScript functions are limited to only 35 lines of code before they start throwing errors?",
        htmlAnswerA4: "True",
        htmlAnswerB4: "False",
        htmlAnswerC4: "Sometimes",
        htmlCorrectAnswer4: "B"
    },
];
//Declaring the question the test is on
const lastHTMLOrangeQuestion1 = htmlOrangeQuestions1.length - 1;
let currentHTMLOrangeQuestion1 = 0;

//This loads in the test's questions
function loadHTMLOrangeQuestion1() {
    let oq1 = htmlOrangeQuestions1[currentHTMLOrangeQuestion1];

    htmlQuestion4.innerHTML = "<p>" + oq1.htmlQuestion4 + "</p>";
    htmlAnswerA4.innerHTML = oq1.htmlAnswerA4;
    htmlAnswerB4.innerHTML = oq1.htmlAnswerB4;
    htmlAnswerC4.innerHTML = oq1.htmlAnswerC4;
}

//Execute function to load questions and show the test area
loadHTMLOrangeQuestion1();

function htmlProgressRender4() {
    for (let qIndex4 = 0; qIndex4 <= lastHTMLOrangeQuestion1; qIndex4++) {
        htmlResultProgress4.innerHTML += "<div class='htmlOProg' id=htmlOProg4" + qIndex4 + "></div>";
    }
}
htmlProgressRender4();
//Turns marker green if correct
function htmlCorrectAnswer4()
{
    document.getElementById("htmlOProg4" + currentHTMLOrangeQuestion1).style.backgroundColor = "green";
}
//Turns marker red if wrong
function htmlWrongAnswer4() {
    document.getElementById("htmlOProg4" + currentHTMLOrangeQuestion1).style.backgroundColor = "red";
}

// Function to check if the user has input the right answer
function htmlCheckAnswer4(htmlOrangeAnswer1)
{
    if (htmlOrangeAnswer1 === htmlOrangeQuestions1[currentHTMLOrangeQuestion1].htmlCorrectAnswer4)
    {
        htmlScore4++;
        // Turns user input into an immediate feedback system
        // Turn answer green
        htmlCorrectAnswer4();
    } else {
        // Turns user input into an immediate feedback system
        // Turn answer red
        htmlWrongAnswer4();
    }
    if (currentHTMLOrangeQuestion1 < lastHTMLOrangeQuestion1) {
        currentHTMLOrangeQuestion1++;
        loadHTMLOrangeQuestion1();
    } else {
        htmlScoreRender4();
        document.getElementById('htmlAnswers4').style.display = 'none';
    }
}

// Functions to show the score percentage at end of test
function htmlScoreRender4() {
    htmlScoreContainer4.style.display = "block";
    const htmlScorePercent4 = Math.round(100 * htmlScore4 / htmlOrangeQuestions1.length);

    htmlScoreContainer4.innerHTML = "<p>" + htmlScorePercent4 + "%</p>";

    switch(htmlScorePercent4)
    {
        case 0:
        {
            htmlQuestion4.innerHTML = "Maybe consider revising some more?! You've got this! ";
            break;
        }
        case 33:
        {
            htmlQuestion4.innerHTML = "Nearly there, try again! :(";
            break;
        }
        case 67:
        {
            htmlQuestion4.innerHTML = "Almost had it! So close! :|";
            break;
        }
        case 100:
        {
            htmlQuestion4.innerHTML = "Test Completed with a perfect score Well Done!  :) ";
            break;
        }
    }
}


// Orange Set 2
let htmlOrangeQuestions2 = [
    {
        htmlQuestion5: "What is the output of this statement if ran within a function: document.getElementBYId('btnEvent').addEventListener ('click', displayDiv); ",
        htmlAnswerA5: "Nothing, an error will be thrown",
        htmlAnswerB5: "Not enough information",
        htmlAnswerC5: "The displayDiv function will be ran",
        htmlCorrectAnswer5: "C"
    },
    {
        htmlQuestion5: "Which of these functions are incorrect?",
        htmlAnswerA5: "function changeColour() { document.getElementById(textBox).style.backgroundColor = 'blue'; }",
        htmlAnswerB5: "function addValues(x, y) { return x + y; }",
        htmlAnswerC5: "function alertFunction() { alert(Hello world) }",
        htmlCorrectAnswer5: "C"
    },
    {
        htmlQuestion5: "Either Internally or Externally",
        htmlAnswerA5: "Internal - Inside the HTMl document",
        htmlAnswerB5: "Externally - Called to the HTML document through script tags ",
        htmlAnswerC5: "Where can JavaScript files be called from?",
        htmlCorrectAnswer5: "A"
    },
];
//Declaring the question the test is on
const lastHTMLOrangeQuestion2 = htmlOrangeQuestions2.length - 1;
let currentHTMLOrangeQuestion2 = 0;

//This loads in the test's questions
function loadHTMLOrangeQuestion2() {
    let oq2 = htmlOrangeQuestions2[currentHTMLOrangeQuestion2];

    htmlQuestion5.innerHTML = "<p>" + oq2.htmlQuestion5 + "</p>";
    htmlAnswerA5.innerHTML = oq2.htmlAnswerA5;
    htmlAnswerB5.innerHTML = oq2.htmlAnswerB5;
    htmlAnswerC5.innerHTML = oq2.htmlAnswerC5;
}

//Execute function to load questions and show the test area
loadHTMLOrangeQuestion2();

function htmlProgressRender5() {
    for (let qIndex5 = 0; qIndex5 <= lastHTMLOrangeQuestion2; qIndex5++) {
        htmlResultProgress5.innerHTML += "<div class='htmlOProg' id=htmlOProg5" + qIndex5 + "></div>";
    }
}
htmlProgressRender5();
//Turns marker green if correct
function htmlCorrectAnswer5()
{
    document.getElementById("htmlOProg5" + currentHTMLOrangeQuestion2).style.backgroundColor = "green";
}
//Turns marker red if wrong
function htmlWrongAnswer5() {
    document.getElementById("htmlOProg5" + currentHTMLOrangeQuestion2).style.backgroundColor = "red";
}

// Function to check if the user has input the right answer
function htmlCheckAnswer5(htmlOrangeAnswer2)
{
    if (htmlOrangeAnswer2 === htmlOrangeQuestions2[currentHTMLOrangeQuestion2].htmlCorrectAnswer5)
    {
        htmlScore5++;
        // Turns user input into an immediate feedback system
        // Turn answer green
        htmlCorrectAnswer5();
    } else {
        // Turns user input into an immediate feedback system
        // Turn answer red
        htmlWrongAnswer5();
    }
    if (currentHTMLOrangeQuestion2 < lastHTMLOrangeQuestion2) {
        currentHTMLOrangeQuestion2++;
        loadHTMLOrangeQuestion2();
    } else {
        htmlScoreRender5();

        document.getElementById('htmlAnswers5').style.display = 'none';
    }
}

// Functions to show the score percentage at end of test
function htmlScoreRender5() {
    htmlScoreContainer5.style.display = "block";
    const htmlScorePercent5 = Math.round(100 * htmlScore5 / htmlOrangeQuestions2.length);

    htmlScoreContainer5.innerHTML = "<p>" + htmlScorePercent5 + "%</p>";

    switch(htmlScorePercent5)
    {
        case 0:
        {
            htmlQuestion5.innerHTML = "Maybe consider revising some more?! You've got this! ";
            break;
        }
        case 33:
        {
            htmlQuestion5.innerHTML = "Nearly there, try again! :(";
            break;
        }
        case 67:
        {
            htmlQuestion5.innerHTML = "Almost had it! So close! :|";
            break;
        }
        case 100:
        {
            htmlQuestion5.innerHTML = "Test Completed with a Perfect Score well done!";
            break;
        }
    }
}
// Orange test set 3
let htmlOrangeQuestions3 = [
    {
        htmlQuestion6: "Which of these tags do you need to add JavaScript to a HTML document?",
        htmlAnswerA6: "< script >",
        htmlAnswerB6: "< div >",
        htmlAnswerC6: "< style >",
        htmlCorrectAnswer6: "A"
    },
    {
        htmlQuestion6: "What type of computing language is JavaScript?",
        htmlAnswerA6: "Mark-Up",
        htmlAnswerB6: "StyleSheet",
        htmlAnswerC6: "Scripting",
        htmlCorrectAnswer6: "C"
    },
    {
        htmlQuestion6: "JavaScript can be used to create webpages instead of HTML?",
        htmlAnswerA6: "True",
        htmlAnswerB6: "False",
        htmlAnswerC6: "Sometimes",
        htmlCorrectAnswer6: "B"
    },
];
//Declaring the question the test is on
const lastHTMLOrangeQuestion3 = htmlOrangeQuestions3.length - 1;
let currentHTMLOrangeQuestion3 = 0;

//This loads in the test's questions
function loadHTMLOrangeQuestion3() {
    let oq3 = htmlOrangeQuestions3[currentHTMLOrangeQuestion3];

    htmlQuestion6.innerHTML = "<p>" + oq3.htmlQuestion6 + "</p>";
    htmlAnswerA6.innerHTML = oq3.htmlAnswerA6;
    htmlAnswerB6.innerHTML = oq3.htmlAnswerB6;
    htmlAnswerC6.innerHTML = oq3.htmlAnswerC6;
}

//Execute function to load questions and show the test area
loadHTMLOrangeQuestion3();

function htmlProgressRender6() {
    for (let qIndex6 = 0; qIndex6 <= lastHTMLOrangeQuestion3; qIndex6++) {
        htmlResultProgress6.innerHTML += "<div class='htmlOProg' id=htmlOProg6" + qIndex6 + "></div>";
    }
}
htmlProgressRender6();
//Turns marker green if correct
function htmlCorrectAnswer6()
{
    document.getElementById("htmlOProg6" + currentHTMLOrangeQuestion3).style.backgroundColor = "green";
}
//Turns marker red if wrong
function htmlWrongAnswer6() {
    document.getElementById("htmlOProg6" + currentHTMLOrangeQuestion3).style.backgroundColor = "red";
}

// Function to check if the user has input the right answer
function htmlCheckAnswer6(htmlOrangeAnswer3)
{
    if (htmlOrangeAnswer3 === htmlOrangeQuestions3[currentHTMLOrangeQuestion3].htmlCorrectAnswer6)
    {
        htmlScore6++;
        // Turns user input into an immediate feedback system
        // Turn answer green
        htmlCorrectAnswer6();
    } else {
        // Turns user input into an immediate feedback system
        // Turn answer red
        htmlWrongAnswer6();
    }
    if (currentHTMLOrangeQuestion3 < lastHTMLOrangeQuestion3) {
        currentHTMLOrangeQuestion3++;
        loadHTMLOrangeQuestion3();
    } else
    {
        htmlScoreRender6();

        document.getElementById('htmlAnswers6').style.display = 'none';
    }
}

// Functions to show the score percentage at end of test
function htmlScoreRender6() {
    htmlScoreContainer6.style.display = "block";
    const htmlScorePercent6 = Math.round(100 * htmlScore6 / htmlOrangeQuestions3.length);

    htmlScoreContainer6.innerHTML = "<p>" + htmlScorePercent6 + "%</p>";

    switch(htmlScorePercent6)
    {
        case 0:
        {
            htmlQuestion6.innerHTML = "Maybe consider revising some more?! You've got this! ";
            break;
        }
        case 33:
        {
            htmlQuestion6.innerHTML = "Nearly there, try again! :(";
            break;
        }
        case 67:
        {
            htmlQuestion6.innerHTML = "Almost had it! So close! :|";
            break;
        }
        case 100:
        {
            htmlQuestion6.innerHTML = "Test Completed with a Perfect Score well done! :)";
            break;
        }
    }
}
$("#orangeBelt").click(function()
{
    $("#orangeGlobal").toggle("slide");
});
