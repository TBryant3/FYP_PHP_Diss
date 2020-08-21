///////////////////////////////////////// JAVASCRIPT ORANGE Test Variables! //////////////////////////////////////////////////

//Set 1
const jsQuestion4 = document.getElementById("jsQuestion4");
const jsAnswerA4 = document.getElementById("A4");
const jsAnswerB4 = document.getElementById("B4");
const jsAnswerC4 = document.getElementById("C4");
const jsResultProgress4 = document.getElementById("jsResultProgress4");
const jsScoreContainer4 = document.getElementById("jsScoreContainer4");
let jsScore4 = 0;

//Set 2
const jsQuestion5 = document.getElementById("jsQuestion5");
const jsAnswerA5 = document.getElementById("A5");
const jsAnswerB5 = document.getElementById("B5");
const jsAnswerC5 = document.getElementById("C5");
const jsResultProgress5 = document.getElementById("jsResultProgress5");
const jsScoreContainer5 = document.getElementById("jsScoreContainer5");
let jsScore5 = 0;

//Set 3
const jsQuestion6 = document.getElementById("jsQuestion6");
const jsAnswerA6 = document.getElementById("A6");
const jsAnswerB6 = document.getElementById("B6");
const jsAnswerC6 = document.getElementById("C6");
const jsResultProgress6 = document.getElementById("jsResultProgress6");
const jsScoreContainer6 = document.getElementById("jsScoreContainer6");
let jsScore6 = 0;


let jsOrangeQuestions1 = [
    {
        jsQuestion4: "Which of these are NOT a part of JavaScript?",
        jsAnswerA4: "functions",
        jsAnswerB4: "events",
        jsAnswerC4: "stylesheets",
        jsCorrectAnswer4: "C"
    },
    {
        jsQuestion4: "Who developed JavaScript?",
        jsAnswerA4: "Tim Berners-Lee",
        jsAnswerB4: "Brendan Eich",
        jsAnswerC4: "Hakon Wium Lie",
        jsCorrectAnswer4: "B"
    },
    {
        jsQuestion4: "JavaScript functions are limited to only 35 lines of code before they start throwing errors?",
        jsAnswerA4: "True",
        jsAnswerB4: "False",
        jsAnswerC4: "Sometimes",
        jsCorrectAnswer4: "B"
    },
];
//Declaring the question the test is on
const lastJSOrangeQuestion1 = jsOrangeQuestions1.length - 1;
let currentJSOrangeQuestion1 = 0;

//This loads in the test's questions
function loadJSOrangeQuestion1() {
    let oq1 = jsOrangeQuestions1[currentJSOrangeQuestion1];

    jsQuestion4.innerHTML = "<p>" + oq1.jsQuestion4 + "</p>";
    jsAnswerA4.innerHTML = oq1.jsAnswerA4;
    jsAnswerB4.innerHTML = oq1.jsAnswerB4;
    jsAnswerC4.innerHTML = oq1.jsAnswerC4;
}

//Execute function to load questions and show the test area
loadJSOrangeQuestion1();

function jsProgressRender4() {
    for (let qIndex4 = 0; qIndex4 <= lastJSOrangeQuestion1; qIndex4++) {
        jsResultProgress4.innerHTML += "<div class='jsOProg' id=jsOProg4" + qIndex4 + "></div>";
    }
}
jsProgressRender4();
//Turns marker green if correct
function jsCorrectAnswer4()
{
    document.getElementById("jsOProg4" + currentJSOrangeQuestion1).style.backgroundColor = "green";
}
//Turns marker red if wrong
function jsWrongAnswer4() {
    document.getElementById("jsOProg4" + currentJSOrangeQuestion1).style.backgroundColor = "red";
}

// Function to check if the user has input the right answer
function jsCheckAnswer4(jsOrangeAnswer1)
{
    if (jsOrangeAnswer1 === jsOrangeQuestions1[currentJSOrangeQuestion1].jsCorrectAnswer4)
    {
        jsScore4++;
        // Turns user input into an immediate feedback system
        // Turn answer green
        jsCorrectAnswer4();
    } else {
        // Turns user input into an immediate feedback system
        // Turn answer red
        jsWrongAnswer4();
    }
    if (currentJSOrangeQuestion1 < lastJSOrangeQuestion1) {
        currentJSOrangeQuestion1++;
        loadJSOrangeQuestion1();
    } else {
        jsScoreRender4();
        document.getElementById('jsAnswers4').style.display = 'none';
    }
}

// Functions to show the score percentage at end of test
function jsScoreRender4() {
    jsScoreContainer4.style.display = "block";
    const jsScorePercent4 = Math.round(100 * jsScore4 / jsOrangeQuestions1.length);

    jsScoreContainer4.innerHTML = "<p>" + jsScorePercent4 + "%</p>";

    switch(jsScorePercent4)
    {
        case 0:
        {
            jsQuestion4.innerHTML = "Maybe consider revising some more?! You've got this! ";
            break;
        }
        case 33:
        {
            jsQuestion4.innerHTML = "Nearly there, try again! :(";
            break;
        }
        case 67:
        {
            jsQuestion4.innerHTML = "Almost had it! So close! :|";
            break;
        }
        case 100:
        {
            jsQuestion4.innerHTML = "Test Completed with a perfect score Well Done! :) ";
            break;
        }
    }
}


// Orange Set 2
let jsOrangeQuestions2 = [
    {
        jsQuestion5: "What is the output of this statement if ran within a function: document.getElementBYId('btnEvent').addEventListener ('click', displayDiv); ",
        jsAnswerA5: "Nothing, an error will be thrown",
        jsAnswerB5: "Not enough information",
        jsAnswerC5: "The displayDiv function will be ran",
        jsCorrectAnswer5: "C"
    },
    {
        jsQuestion5: "Which of these functions are incorrect?",
        jsAnswerA5: "function changeColour() {(textBox).Color = 'blue'; }",
        jsAnswerB5: "function addValues(x, y) { return x + y; }",
        jsAnswerC5: "function alertFunction() { alert('Hello world'); }",
        jsCorrectAnswer5: "A"
    },
    {
        jsQuestion5: "Either Internally or Externally",
        jsAnswerA5: "Internal - Inside the HTMl document",
        jsAnswerB5: "Externally - Called to the HTML document through script tags ",
        jsAnswerC5: "Where can JavaScript files be called from?",
        jsCorrectAnswer5: "A"
    },
];
//Declaring the question the test is on
const lastJSOrangeQuestion2 = jsOrangeQuestions2.length - 1;
let currentJSOrangeQuestion2 = 0;

//This loads in the test's questions
function loadJSOrangeQuestion2() {
    let oq2 = jsOrangeQuestions2[currentJSOrangeQuestion2];

    jsQuestion5.innerHTML = "<p>" + oq2.jsQuestion5 + "</p>";
    jsAnswerA5.innerHTML = oq2.jsAnswerA5;
    jsAnswerB5.innerHTML = oq2.jsAnswerB5;
    jsAnswerC5.innerHTML = oq2.jsAnswerC5;
}

//Execute function to load questions and show the test area
loadJSOrangeQuestion2();

function jsProgressRender5() {
    for (let qIndex5 = 0; qIndex5 <= lastJSOrangeQuestion2; qIndex5++) {
        jsResultProgress5.innerHTML += "<div class='jsOProg' id=jsOProg5" + qIndex5 + "></div>";
    }
}
jsProgressRender5();
//Turns marker green if correct
function jsCorrectAnswer5()
{
    document.getElementById("jsOProg5" + currentJSOrangeQuestion2).style.backgroundColor = "green";
}
//Turns marker red if wrong
function jsWrongAnswer5() {
    document.getElementById("jsOProg5" + currentJSOrangeQuestion2).style.backgroundColor = "red";
}

// Function to check if the user has input the right answer
function jsCheckAnswer5(jsOrangeAnswer2)
{
    if (jsOrangeAnswer2 === jsOrangeQuestions2[currentJSOrangeQuestion2].jsCorrectAnswer5)
    {
        jsScore5++;
        // Turns user input into an immediate feedback system
        // Turn answer green
        jsCorrectAnswer5();
    } else {
        // Turns user input into an immediate feedback system
        // Turn answer red
        jsWrongAnswer5();
    }
    if (currentJSOrangeQuestion2 < lastJSOrangeQuestion2) {
        currentJSOrangeQuestion2++;
        loadJSOrangeQuestion2();
    } else {
        jsScoreRender5();

        document.getElementById('jsAnswers5').style.display = 'none';
    }
}

// Functions to show the score percentage at end of test
function jsScoreRender5() {
    jsScoreContainer5.style.display = "block";
    const jsScorePercent5 = Math.round(100 * jsScore5 / jsOrangeQuestions2.length);

    jsScoreContainer5.innerHTML = "<p>" + jsScorePercent5 + "%</p>";

    switch(jsScorePercent5)
    {
        case 0:
        {
            jsQuestion5.innerHTML = "Maybe consider revising more?! You've got this!";
            break;
        }
        case 33:
        {
            jsQuestion5.innerHTML = "Nearly there, try again! :( ";
            break;
        }
        case 67:
        {
            jsQuestion5.innerHTML = "Almost had it!  So close! :| ";
            break;
        }
        case 100:
        {
            jsQuestion5.innerHTML = "Test Completed with a Perfect Score well done! :) ";
            break;
        }
    }
}
// Orange test set 3
let jsOrangeQuestions3 = [
    {
        jsQuestion6: "When parsing JS parameters, if you pass a variable from another file what is the parameter parsing type?",
        jsAnswerA6: "parse-by-reference",
        jsAnswerB6: "pass-by-name",
        jsAnswerC6: "parse-by-value",
        jsCorrectAnswer6: "A"
    },
    {
        jsQuestion6: "If you want to parse an integer into a string variable, how would you do this?",
        jsAnswerA6: "var number = 45; \n var x = number.toString();",
        jsAnswerB6: "var number = 45, convertToString(number);",
        jsAnswerC6: "You can't convert a number to a string",
        jsCorrectAnswer6: "A"
    },
    {
        jsQuestion6: "The use of 'var' and 'let' are used in similar ways. What does 'const' do?",
        jsAnswerA6: "This means the value that is defined can be change constantly",
        jsAnswerB6: "There isn't a declaration called 'const'",
        jsAnswerC6: "The declaration cannot be reassigned as it is set a constant value",
        jsCorrectAnswer6: "C"
    },
];
//Declaring the question the test is on
const lastJSOrangeQuestion3 = jsOrangeQuestions3.length - 1;
let currentJSOrangeQuestion3 = 0;

//This loads in the test's questions
function loadJSOrangeQuestion3() {
    let oq3 = jsOrangeQuestions3[currentJSOrangeQuestion3];

    jsQuestion6.innerHTML = "<p>" + oq3.jsQuestion6 + "</p>";
    jsAnswerA6.innerHTML = oq3.jsAnswerA6;
    jsAnswerB6.innerHTML = oq3.jsAnswerB6;
    jsAnswerC6.innerHTML = oq3.jsAnswerC6;
}

//Execute function to load questions and show the test area
loadJSOrangeQuestion3();

function jsProgressRender6() {
    for (let qIndex6 = 0; qIndex6 <= lastJSOrangeQuestion3; qIndex6++) {
        jsResultProgress6.innerHTML += "<div class='jsOProg' id=jsOProg6" + qIndex6 + "></div>";
    }
}
jsProgressRender6();
//Turns marker green if correct
function jsCorrectAnswer6()
{
    document.getElementById("jsOProg6" + currentJSOrangeQuestion3).style.backgroundColor = "green";
}
//Turns marker red if wrong
function jsWrongAnswer6() {
    document.getElementById("jsOProg6" + currentJSOrangeQuestion3).style.backgroundColor = "red";
}

// Function to check if the user has input the right answer
function jsCheckAnswer6(jsOrangeAnswer3)
{
    if (jsOrangeAnswer3 === jsOrangeQuestions3[currentJSOrangeQuestion3].jsCorrectAnswer6)
    {
        jsScore6++;
        // Turns user input into an immediate feedback system
        // Turn answer green
        jsCorrectAnswer6();
    } else {
        // Turns user input into an immediate feedback system
        // Turn answer red
        jsWrongAnswer6();
    }
    if (currentJSOrangeQuestion3 < lastJSOrangeQuestion3) {
        currentJSOrangeQuestion3++;
        loadJSOrangeQuestion3();
    } else
    {
        jsScoreRender6();

        document.getElementById('jsAnswers6').style.display = 'none';
    }
}

// Functions to show the score percentage at end of test
function jsScoreRender6() {
    jsScoreContainer6.style.display = "block";
    const jsScorePercent6 = Math.round(100 * jsScore6 / jsOrangeQuestions3.length);

    jsScoreContainer6.innerHTML = "<p>" + jsScorePercent6 + "%</p>";

    switch(jsScorePercent6)
    {
        case 0:
        {
            jsQuestion6.innerHTML = "Maybe consider revising more?! It's okay, You've got this! ";
            break;
        }
        case 33:
        {
            jsQuestion6.innerHTML = "Nearly there, try again! :( ";
            break;
        }
        case 67:
        {
            jsQuestion6.innerHTML = "Almost had it! So close! :| ";
            break;
        }
        case 100:
        {
            jsQuestion6.innerHTML = "Test Completed with a Perfect Score well done! :) ";
            break;
        }
    }
}
$("#orangeBelt").click(function()
{
    $("#orangeGlobal").toggle("slide");
});
