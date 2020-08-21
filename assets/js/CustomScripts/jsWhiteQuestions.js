
////////////// JAVASCRIPT White Test Variables! //////////////////////

//Set 1
const jsQuestion1 = document.getElementById("jsQuestion1");
const jsAnswerA1 = document.getElementById("A1");
const jsAnswerB1 = document.getElementById("B1");
const jsAnswerC1 = document.getElementById("C1");
const jsResultProgress1 = document.getElementById("jsResultProgress1");
const jsScoreContainer1 = document.getElementById("jsScoreContainer1");
let jsScore1 = 0;

const jsQuestion2 = document.getElementById("jsQuestion2");
const jsAnswerA2 = document.getElementById("A2");
const jsAnswerB2 = document.getElementById("B2");
const jsAnswerC2 = document.getElementById("C2");
const jsResultProgress2 = document.getElementById("jsResultProgress2");
const jsScoreContainer2 = document.getElementById("jsScoreContainer2");
let jsScore2 = 0;

const jsQuestion3 = document.getElementById("jsQuestion3");
const jsAnswerA3 = document.getElementById("A3");
const jsAnswerB3 = document.getElementById("B3");
const jsAnswerC3 = document.getElementById("C3");
const jsResultProgress3 = document.getElementById("jsResultProgress3");
const jsScoreContainer3 = document.getElementById("jsScoreContainer3");
let jsScore3 = 0;

/////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////


        // Tier 1 Question Creation
        let jsWhiteQuestions1 = [
            {
                jsQuestion1: "Which of these HTML tags do you need to add JavaScript to a HTML document?",
                jsAnswerA1: "< script >",
                jsAnswerB1: "< div >",
                jsAnswerC1: "< style >",
                jsCorrectAnswer1: "A"
            },
            {
                jsQuestion1: "What type of computing language is JavaScript?",
                jsAnswerA1: "Mark-Up",
                jsAnswerB1: "StyleSheet",
                jsAnswerC1: "Scripting",
                jsCorrectAnswer1: "C"
            },
            {
                jsQuestion1: "JavaScript can be used to as a HTML alternative?",
                jsAnswerA1: "True",
                jsAnswerB1: "False",
                jsAnswerC1: "Sometimes",
                jsCorrectAnswer1: "B"
            },
        ];
        //Declaring the question the test is on
        const lastJSWhiteQuestion1 = jsWhiteQuestions1.length - 1;
        let currentJSWhiteQuestion1 = 0;

        //This loads in the test's questions
        function loadJSWhiteQuestion1()
        {
            let wq1 = jsWhiteQuestions1[currentJSWhiteQuestion1];

            jsQuestion1.innerHTML = "<p>" + wq1.jsQuestion1 + "</p>";
            jsAnswerA1.innerHTML = wq1.jsAnswerA1;
            jsAnswerB1.innerHTML = wq1.jsAnswerB1;
            jsAnswerC1.innerHTML = wq1.jsAnswerC1;
        }

        //Execute function to load questions and show the test area
        loadJSWhiteQuestion1();
        // jsTest1.style.display = "block";

        function jsProgressRender1() {
            for (let qIndex1 = 0; qIndex1 <= lastJSWhiteQuestion1; qIndex1++) {
                jsResultProgress1.innerHTML += "<div class='jsWProg' id=jsWProg1" + qIndex1 + "></div>";
            }
        }

        jsProgressRender1();
        //Turns marker green if correct
        function jsCorrectAnswer1() {
            document.getElementById("jsWProg1" + currentJSWhiteQuestion1).style.backgroundColor = "green";
        }

        //Turns marker red if wrong
        function jsWrongAnswer1() {
            document.getElementById("jsWProg1" + currentJSWhiteQuestion1).style.backgroundColor = "red";
        }

        // Function to check if the user has input the right answer
        function jsCheckAnswer1(jsWhiteAnswer1) {
            if (jsWhiteAnswer1 === jsWhiteQuestions1[currentJSWhiteQuestion1].jsCorrectAnswer1) {
                jsScore1++;
                // Turns user input into an immediate feedback system
                // Turn answer green
                jsCorrectAnswer1();
            } else {
                // Turns user input into an immediate feedback system
                // Turn answer red
                jsWrongAnswer1();
            }
            if (currentJSWhiteQuestion1 < lastJSWhiteQuestion1) {
                currentJSWhiteQuestion1++;
                loadJSWhiteQuestion1();
            } else {
                jsScoreRender1();

                document.getElementById('jsAnswers1').style.display = 'none';
            }
        }

        // Functions to show the score percentage at end of test
        function jsScoreRender1()
        {
            jsScoreContainer1.style.display = "block";
            const jsScorePercent1 = Math.round(100 * jsScore1 / jsWhiteQuestions1.length);

            jsScoreContainer1.innerHTML = "<p>" + jsScorePercent1 + "%</p>";

            switch(jsScorePercent1)
            {
                case 0:
                {
                    jsQuestion1.innerHTML = "Maybe consider revising more?!";
                    break;
                }
                case 33:
                {
                    jsQuestion1.innerHTML = "Nearly there, try again!";
                    break;
                }
                case 67:
                {
                    jsQuestion1.innerHTML = "Test Completed! So close!";
                    break;
                }
                case 100:
                {
                    jsQuestion1.innerHTML = "Test Completed with a Perfect Score well done!";
                    break;
                }
            }
        }


////////////////////////////////////////////////////////////
// Tier 2 Question Creation/////////////////////////////////
//Set 2

let jsWhiteQuestions2 =
[
    {
        jsQuestion2: "Which of these were developed first?",
        jsAnswerA2: "HTML",
        jsAnswerB2: "CSS",
        jsAnswerC2: "JavaScript",
        jsCorrectAnswer2: "A"
    },
    {
        jsQuestion2: "Which of these elements are used to reference a decimal value?",
        jsAnswerA2: "var",
        jsAnswerB2: "number",
        jsAnswerC2: "value",
        jsCorrectAnswer2: "A"
    },
    {
        jsQuestion2: "Where can JavaScript reference tags be placed in a HTML document?",
        jsAnswerA2: "head",
        jsAnswerB2: "body",
        jsAnswerC2: "both",
        jsCorrectAnswer2: "C"
    },
];
//Declaring the 2nd set of questions
const lastJSWhiteQuestion2 = jsWhiteQuestions2.length - 1;
let currentJSWhiteQuestion2 = 0;

//This loads in the test's questions
function loadJSWhiteQuestion2() {
    let wq2 = jsWhiteQuestions2[currentJSWhiteQuestion2];

    jsQuestion2.innerHTML = "<p>" + wq2.jsQuestion2 + "</p>";
    jsAnswerA2.innerHTML = wq2.jsAnswerA2;
    jsAnswerB2.innerHTML = wq2.jsAnswerB2;
    jsAnswerC2.innerHTML = wq2.jsAnswerC2;
}

//NEED IF STATEMENT FOR IF THE TIER 1 SCORE IS SHOWN
loadJSWhiteQuestion2();
// Second set of progress indicators
function jsProgressRender2()
{
    for (let qIndex2 = 0; qIndex2 <= lastJSWhiteQuestion2; qIndex2++)
    {
        jsResultProgress2.innerHTML += "<div class='jsWProg' id=jsWProg2" + qIndex2 + "></div>";
    }
}
jsProgressRender2();
//Turns marker green if correct
function jsCorrectAnswer2()
{
    document.getElementById("jsWProg2" + currentJSWhiteQuestion2).style.backgroundColor = "green";
}
//Turns marker red if wrong
function jsWrongAnswer2()
{
    document.getElementById("jsWProg2" + currentJSWhiteQuestion2).style.backgroundColor = "red";
}

//// Second Answer renderer ////
function jsCheckAnswer2(jsWhiteAnswer2) {
    if (jsWhiteAnswer2 === jsWhiteQuestions2[currentJSWhiteQuestion2].jsCorrectAnswer2) {
        jsScore2++;
        // Turns user input into an immediate feedback system
        // Turn answer green
        jsCorrectAnswer2();
    } else {
        // Turns user input into an immediate feedback system
        // Turn answer red
        jsWrongAnswer2();
    }
    if (currentJSWhiteQuestion2 < lastJSWhiteQuestion2)
    {
        currentJSWhiteQuestion2++;
        loadJSWhiteQuestion2();
    }
    else
    {
        jsScoreRender2();
        document.getElementById('jsAnswers2').style.display = 'none';
    }
}
function jsScoreRender2()
{
    jsScoreContainer2.style.display = "block";
    const jsScorePercent2 = Math.round(100 * jsScore2 / jsWhiteQuestions2.length);

    jsScoreContainer2.innerHTML = "<p>" + jsScorePercent2 + "%</p>";

    switch(jsScorePercent2)
    {
        case 0:
        {
            jsQuestion2.innerHTML = "Maybe consider revising more?!";
            break;
        }
        case 33:
        {
            jsQuestion2.innerHTML = "Nearly there, try again!";
            break;
        }
        case 67:
        {
            jsQuestion2.innerHTML = "Test Completed! So close!";
            break;
        }
        case 100:
        {
            jsQuestion2.innerHTML = "Test Completed with a Perfect Score well done!";
            break;
        }
    }
}
///////////////////////////////////////////////
//////// Third question set //////////////////
//Set 3
let jsWhiteQuestions3 = [
    {
        jsQuestion3: "What was the name of JavaScript's predecessor?",
        jsAnswerA3: "LiveScript",
        jsAnswerB3: "CoffeeScript",
        jsAnswerC3: "TypeScript",
        jsCorrectAnswer3: "A"
    },
    {
        jsQuestion3: "How many parameters can be parsed through a JS function at one time?",
        jsAnswerA3: "Two",
jsAnswerB3: "No limit",
        jsAnswerC3: "10",
        jsCorrectAnswer3: "B"
    },
    {
        jsQuestion3: "JS is able to generate HTML if the HTML tags are defined within the JS script function. CSS also be done this way.",
        jsAnswerA3: "True",
        jsAnswerB3: "False",
        jsAnswerC3: "Only in certain cases",
        jsCorrectAnswer3: "A"
    },
];
//Declaring the question the test is on
const lastJSWhiteQuestion3 = jsWhiteQuestions3.length - 1;
let currentJSWhiteQuestion3 = 0;

//This loads in the test's questions
function loadJSWhiteQuestion3() {
    let wq3 = jsWhiteQuestions3[currentJSWhiteQuestion3];

    jsQuestion3.innerHTML = "<p>" + wq3.jsQuestion3 + "</p>";
    jsAnswerA3.innerHTML = wq3.jsAnswerA3;
    jsAnswerB3.innerHTML = wq3.jsAnswerB3;
    jsAnswerC3.innerHTML = wq3.jsAnswerC3;
}

//Execute function to load questions and show the test area
loadJSWhiteQuestion3();
// jsTest3.style.display = "block";
function jsProgressRender3()
{
    for (let qIndex3 = 0; qIndex3 <= lastJSWhiteQuestion3; qIndex3++)
    {
        jsResultProgress3.innerHTML += "<div class='jsWProg' id=jsWProg3" + qIndex3 + "></div>";
    }
}
jsProgressRender3();
//Turns marker green if correct
function jsCorrectAnswer3()
{
    document.getElementById("jsWProg3" + currentJSWhiteQuestion3).style.backgroundColor = "green";
}
//Turns marker red if wrong
function jsWrongAnswer3() {
    document.getElementById("jsWProg3" + currentJSWhiteQuestion3).style.backgroundColor = "red";
}

// Function to check if the user has input the right answer
function jsCheckAnswer3(jsWhiteAnswer3)
{
    if (jsWhiteAnswer3 === jsWhiteQuestions3[currentJSWhiteQuestion3].jsCorrectAnswer3)
    {
        jsScore3++;
        // Turns user input into an immediate feedback system
        // Turn answer green
        jsCorrectAnswer3();
    } else {
        // Turns user input into an immediate feedback system
        // Turn answer red
        jsWrongAnswer3();
    }
    if (currentJSWhiteQuestion3 < lastJSWhiteQuestion3)
    {
        currentJSWhiteQuestion3++;
        loadJSWhiteQuestion3();
    }
    else
    {
        jsScoreRender3();
        document.getElementById('jsAnswers3').style.display = 'none';
    }
}

// Functions to show the score percentage at end of test
function jsScoreRender3() {
    jsScoreContainer3.style.display = "block";
    const jsScorePercent3 = Math.round(100 * jsScore3 / jsWhiteQuestions3.length);

    jsScoreContainer3.innerHTML = "<p>" + jsScorePercent3 + "%</p>";

    switch(jsScorePercent3)
    {
        case 0:
        {
            jsQuestion3.innerHTML = "Maybe consider revising more?!";
            break;
        }
        case 33:
        {
            jsQuestion3.innerHTML = "Nearly there, try again!";
            break;
        }
        case 67:
        {
            jsQuestion3.innerHTML = "Test Completed! So close!";
            break;
        }
        case 100:
        {
            jsQuestion3.innerHTML = "Test Completed with a Perfect Score well done!";
            break;
        }
    }
}
$("#whiteBelt").click(function()
{
    $("#whiteGlobal").toggle("slide");
});

