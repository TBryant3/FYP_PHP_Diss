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

//CSS Based questions
let htmlOrangeQuestions1 = [
    {
        htmlQuestion4: "CSS can be generated as a separate file to it's HTML, how does this benefit the developer? ",
        htmlAnswerA4: "It doesn't, CSS needs to be on the same page as HTML to be readable by the browser",
        htmlAnswerB4: "External StyleSheets allow for 'cleaner' code and also allows for style classes to be shared across multiple files.",
        htmlAnswerC4: "The developer can then maintain a smaller  website but still needs to change it per HTML page",
        htmlCorrectAnswer4: "B"
    },
    {
        htmlQuestion4: "Which of these is the correct format to link CSS?",
        htmlAnswerA4: "< stylesheet = style.css, href='x.linkToFile' >",
        htmlAnswerB4: "< link href='x/PathToFile.css/x' rel='stylesheet' >",
        htmlAnswerC4: "< link src='x/PathToFile.css/x' type='text/css' >",
        htmlCorrectAnswer4: "B"
    },
    {
        htmlQuestion4: "When applying margin to an element, what is NOT a format to set a different size to each side of the element? ",
        htmlAnswerA4: "margin: 5px 4px 20px 10px",
        htmlAnswerB4: "margin: top=5px, right=4px \n bottom=20px left=10px",
        htmlAnswerC4: "margin-top: 5px; margin-right:4px; \n margin-bottom:20px; margin-left:10px;",
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
            htmlQuestion4.innerHTML = "Maybe consider revising some more?! You've got this! Have you looked at our CSS example under the 'CSS Layout' section?";
            break;
        }
        case 33:
        {
            htmlQuestion4.innerHTML = "Nearly there, try again! :( Try looking over our CSS section again";
            break;
        }
        case 67:
        {
            htmlQuestion4.innerHTML = "Almost had it! So close! :| ";
            break;
        }
        case 100:
        {
            htmlQuestion4.innerHTML = "Test Completed with a perfect score! Well Done!  :) ";
            break;
        }
    }
}


// Orange Set 2
let htmlOrangeQuestions2 = [
    {
        htmlQuestion5: " In what order should the core HTML tags be placed? ",
        htmlAnswerA5: " head - body - html - (external StyleSheets)",
        htmlAnswerB5: "html - head - (external StyleSheets) - body ",
        htmlAnswerC5: "head - html - (external StyleSheets) - body",
        htmlCorrectAnswer5: "B"
    },
    {
        htmlQuestion5: "You have an h1 tag, how do you style this across all of your webpages efficiently?",
        htmlAnswerA5: "Add style tags in an external CSS file named 'heading 1' with specified styling",
        htmlAnswerB5: "Within an external CSS file, call: \n h1{ 'properties in here' } and ensure this css file is linked to each webpage",
        htmlAnswerC5: " Write the css on a single HTML page using: h1{ 'properties in here' } and call this HTML page on other HTML pages",
        htmlCorrectAnswer5: "A"
    },
    {
        htmlQuestion5: "What is the name of the body which grants Recommendations for Web Standards? ",
        htmlAnswerA5: "Netscape Ltd",
        htmlAnswerB5: "Google Consortium",
        htmlAnswerC5: "The World Wide Web Consortium",
        htmlCorrectAnswer5: "C"
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
            htmlQuestion5.innerHTML = "Nearly there, try again! :( Have you read all information about HTML and CSS history?";
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
        htmlQuestion6: "Which of these tags are not to apply font properties without the need for CSS?",
        htmlAnswerA6: "< b >",
        htmlAnswerB6: "< i >",
        htmlAnswerC6: "< p >",
        htmlCorrectAnswer6: "C"
    },
    {
        htmlQuestion6: "What is the definition of a class?",
        htmlAnswerA6: "Class: Identified by a '.' in CSS and groups together like named elements, sharing CSS properties",
        htmlAnswerB6: "Class: Identified by a '#' in CSS and applies to a single element that has the same name as the class",
        htmlAnswerC6: "Class: This is the property used by CSS to link HTML documents together",
        htmlCorrectAnswer6: "A"
    },
    {
        htmlQuestion6: "Which of these statements would change the background colour of a button element red on on hover?",
        htmlAnswerA6: "button{ onHover = color:red }",
        htmlAnswerB6: "button:hover{ background-color:red }",
        htmlAnswerC6: "button{ hover:red }",
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
            htmlQuestion6.innerHTML = "Nearly there, try again! :( Try looking though our HTML and CSS layouts for examples";
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