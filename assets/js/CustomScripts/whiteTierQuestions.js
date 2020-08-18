
////////////// JAVASCRIPT White Test Variables! //////////////////////

        //Set 1
        const jsTest1 = document.getElementById("jsTest1");
        const jsQuestion1 = document.getElementById("jsQuestion1");
        const jsAnswerA1 = document.getElementById("A1");
        const jsAnswerB1 = document.getElementById("B1");
        const jsAnswerC1 = document.getElementById("C1");
        const jsResultProgress1 = document.getElementById("jsResultProgress1");
        const jsScoreContainer1 = document.getElementById("jsScoreContainer1");
        let jsScore1 = 0;

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
                jsQuestion1: "JavaScript can be used to create webpages instead of HTML?",
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
        function loadJSWhiteQuestion1() {
            let wq1 = jsWhiteQuestions1[currentJSWhiteQuestion1];

            jsQuestion1.innerHTML = "<p>" + wq1.jsQuestion1 + "</p>";
            jsAnswerA1.innerHTML = wq1.jsAnswerA1;
            jsAnswerB1.innerHTML = wq1.jsAnswerB1;
            jsAnswerC1.innerHTML = wq1.jsAnswerC1;
        }

        //Execute function to load questions and show the test area
        loadJSWhiteQuestion1();
        jsTest1.style.display = "block";

        function jsProgressRender1() {
            for (let qIndex1 = 0; qIndex1 <= lastJSWhiteQuestion1; qIndex1++) {
                jsResultProgress1.innerHTML += "<div class='prog1' id=" + qIndex1 + "></div>";
            }
        }

        jsProgressRender1();

        //Turns marker green if correct
        function jsCorrectAnswer1() {
            document.getElementById(currentJSWhiteQuestion1).style.backgroundColor = "green";
        }

        //Turns marker red if wrong
        function jsWrongAnswer1() {
            document.getElementById(currentJSWhiteQuestion1).style.backgroundColor = "red";
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
            }
        }

        // Functions to show the score percentage at end of test
        function jsScoreRender1() {
            jsScoreContainer1.style.display = "block";
            const jsScorePercent1 = Math.round(100 * jsScore1 / jsWhiteQuestions1.length);

            jsScoreContainer1.innerHTML = "<p>" + jsScorePercent1 + "%</p>";
        }


        ////////////////////////////////////////////////////////////
        // Tier 2 Question Creation/////////////////////////////////
        //Set 2
        const jsTest2 = document.getElementById("jsTest2");
        const jsQuestion2 = document.getElementById("jsQuestion2");
        const jsAnswerA2 = document.getElementById("A2");
        const jsAnswerB2 = document.getElementById("B2");
        const jsAnswerC2 = document.getElementById("C2");
        const jsResultProgress2 = document.getElementById("jsResultProgress2");
        const jsScoreContainer2 = document.getElementById("jsScoreContainer2");

        let jsScore2 = 0;

        let jsWhiteQuestions2 = [
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
        jsTest2.style.display = "block";
        // Second set of progress indicators
        function jsProgressRender2()
        {
            for (let qIndex2 = 0; qIndex2 <= lastJSWhiteQuestion2; qIndex2++)
            {
                jsResultProgress2.innerHTML += "<div class='prog2' id=" + qIndex2 + "></div>";
            }
        }
        jsProgressRender2();
        //Turns marker green if correct
        function jsCorrectAnswer2()
        {
            document.getElementById(currentJSWhiteQuestion2).style.backgroundColor = "green";
        }
        //Turns marker red if wrong
        function jsWrongAnswer2()
        {
            document.getElementById(currentJSWhiteQuestion2).style.backgroundColor = "red";
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
            if (currentJSWhiteQuestion2 < lastJSWhiteQuestion2) {
                currentJSWhiteQuestion2++;
                loadJSWhiteQuestion2();
            } else {
                jsScoreRender2();
            }
        }
        function jsScoreRender2() {
            jsScoreContainer2.style.display = "block";
            const jsScorePercent2 = Math.round(100 * jsScore2 / jsWhiteQuestions2.length);

            jsScoreContainer2.innerHTML = "<p>" + jsScorePercent2 + "%</p>";
        }
        ///////////////////////////////////////////////
        //////// Third question set //////////////////
        //Set 3
        const jsTest3 = document.getElementById("jsTest3");
        const jsQuestion3 = document.getElementById("jsQuestion3");
        const jsAnswerA3 = document.getElementById("A3");
        const jsAnswerB3 = document.getElementById("B3");
        const jsAnswerC3 = document.getElementById("C3");
        const jsResultProgress3 = document.getElementById("jsResultProgress3");
        const jsScoreContainer3 = document.getElementById("jsScoreContainer3");

        let jsScore3 = 0;

        let jsWhiteQuestions3 = [
            {
                jsQuestion3: "Which of these tags do you need to add JavaScript to a HTML document?",
                jsAnswerA3: "< script >",
                jsAnswerB3: "< div >",
                jsAnswerC3: "< style >",
                jsCorrectAnswer3: "A"
            },
            {
                jsQuestion3: "What type of computing language is JavaScript?",
                jsAnswerA3: "Mark-Up",
                jsAnswerB3: "StyleSheet",
                jsAnswerC3: "Scripting",
                jsCorrectAnswer3: "C"
            },
            {
                jsQuestion3: "JavaScript can be used to create webpages instead of HTML?",
                jsAnswerA3: "True",
                jsAnswerB3: "False",
                jsAnswerC3: "Sometimes",
                jsCorrectAnswer3: "B"
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
        jsTest3.style.display = "block";
        function jsProgressRender3() {
            for (let qIndex3 = 0; qIndex3 <= lastJSWhiteQuestion3; qIndex3++) {
                jsResultProgress3.innerHTML += "<div class='prog3' id=" + qIndex3 + "></div>";
            }
        }
        jsProgressRender3();
        //Turns marker green if correct
        function jsCorrectAnswer3() {
            document.getElementById(currentJSWhiteQuestion3).style.backgroundColor = "green";
        }
        //Turns marker red if wrong
        function jsWrongAnswer3() {
            document.getElementById(currentJSWhiteQuestion3).style.backgroundColor = "red";
        }

        // Function to check if the user has input the right answer
        function jsCheckAnswer3(jsWhiteAnswer3) {
            if (jsWhiteAnswer3 === jsWhiteQuestions3[currentJSWhiteQuestion3].jsCorrectAnswer3) {
                jsScore3++;
                // Turns user input into an immediate feedback system
                // Turn answer green
                jsCorrectAnswer3();
            } else {
                // Turns user input into an immediate feedback system
                // Turn answer red
                jsWrongAnswer3();
            }
            if (currentJSWhiteQuestion3 < lastJSWhiteQuestion3) {
                currentJSWhiteQuestion3++;
                loadJSWhiteQuestion3();
            } else {
                jsScoreRender3();
            }
        }

        // Functions to show the score percentage at end of test
        function jsScoreRender3() {
            jsScoreContainer3.style.display = "block";
            const jsScorePercent3 = Math.round(100 * jsScore3 / jsWhiteQuestions3.length);

            jsScoreContainer3.innerHTML = "<p>" + jsScorePercent3 + "%</p>";
        }



        ////////////// JAVASCRIPT ORANGE Test Variables! //////////////////////

//Set 1
const jsTest4 = document.getElementById("jsTest4");
const jsQuestion4 = document.getElementById("jsQuestion4");
const jsAnswerA4 = document.getElementById("A4");
const jsAnswerB4 = document.getElementById("B4");
const jsAnswerC4 = document.getElementById("C4");
const jsResultProgress4 = document.getElementById("jsResultProgress4");
const jsScoreContainer4 = document.getElementById("jsScoreContainer4");
let jsScore4 = 0;
//Set 2
const jsTest5 = document.getElementById("jsTest5");
const jsQuestion5 = document.getElementById("jsQuestion5");
const jsAnswerA5 = document.getElementById("A5");
const jsAnswerB5 = document.getElementById("B5");
const jsAnswerC5 = document.getElementById("C5");
const jsResultProgress5 = document.getElementById("jsResultProgress5");
const jsScoreContainer5 = document.getElementById("jsScoreContainer5");
let jsScore5 = 0;
//Set 3
const jsTest6 = document.getElementById("jsTest6");
const jsQuestion6 = document.getElementById("jsQuestion6");
const jsAnswerA6 = document.getElementById("A6");
const jsAnswerB6 = document.getElementById("B6");
const jsAnswerC6 = document.getElementById("C6");
const jsResultProgress6 = document.getElementById("jsResultProgress6");
const jsScoreContainer6 = document.getElementById("jsScoreContainer6");
let jsScore6 = 0;






//////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////




        ////////////// HTML WHITE Test Variables! //////////////////////

    //Declaring Variables by getting their HTML elements
    //Set 1
    const HTMLtest1 = document.getElementById("HTMLtest1");
    const HTMLquestion1 = document.getElementById("HTMLquestion1");
    const HTMLanswerA1 = document.getElementById("HTMLA1");
    const HTMLanswerB1 = document.getElementById("HTMLB1");
    const HTMLanswerC1 = document.getElementById("HTMLC1");
    const HTMLresultProgress1 = document.getElementById("HTMLresultProgress1");
    const HTMLscoreContainer1 = document.getElementById("HTMLscoreContainer1");
    let HTMLscore1 = 0;
    //Set 2
    const HTMLtest2 = document.getElementById("HTMLtest2");
    const HTMLquestion2 = document.getElementById("HTMLquestion2");
    const HTMLanswerA2 = document.getElementById("HTMLA2");
    const HTMLanswerB2 = document.getElementById("HTMLB2");
    const HTMLanswerC2 = document.getElementById("HTMLC2");
    const HTMLresultProgress2 = document.getElementById("HTMLresultProgress2");
    const HTMLscoreContainer2 = document.getElementById("HTMLScoreContainer2");
    let HTMLscore2 = 0;
    //Set 3s
    const HTMLtest3 = document.getElementById("HTMLtest3");
    const HTMLquestion3 = document.getElementById("HTMLquestion3");
    const HTMLanswerA3= document.getElementById("HTMLA3");
    const HTMLanswerB3 = document.getElementById("HTMLB3");
    const HTMLanswerC3 = document.getElementById("HTMLC3");
    const HTMLresultProgress3 = document.getElementById("HTMLresultProgress3");
    const HTMLscoreContainer3 = document.getElementById("HTMLscoreContainer3");
    let HTMLscore3 = 0;

    // Tier 1 Question Creation
    let whiteHTMLQuestions1 = [
    {
        HTMLquestion1 : "Which of these HTML tags do you need to add JavaScript to a HTML document?",
        HTMLanswerA1 : "< script >",
        HTMLanswerB1 : "< div >",
        HTMLanswerC1 : "< style >",
        HTMLcorrectAnswer1 : "A"
    },
    {
        HTMLquestion1 : "What type of computing language is JavaScript?",
        HTMLanswerA1 : "Mark-Up",
        HTMLanswerB1 : "StyleSheet",
        HTMLanswerC1 : "Scripting",
        HTMLcorrectAnswer1 : "C"
    },
    {
        HTMLquestion1 : "JavaScript can be used to create webpages instead of HTML?",
        HTMLanswerA1 : "True",
        HTMLanswerB1 : "False",
        HTMLanswerC1 : "Sometimes",
        HTMLcorrectAnswer1 : "B"
    },
    ];
    //Declaring the question the test is on
    const lastHTMLQuestion1 = whiteHTMLQuestions1.length - 1;
    let currentHTMLQuestion1 = 0;
    //This loads in the test's questions
    function loadWhiteHTMLQuestion1()
    {
        let wq1 = whiteHTMLQuestions1[currentHTMLQuestion1];

        HTMLquestion1.innerHTML = "<p>"+ wq1.HTMLquestion1 +"</p>";
        HTMLanswerA1.innerHTML = wq1.HTMLanswerA1;
        HTMLanswerB1.innerHTML = wq1.HTMLanswerB1;
        HTMLanswerC1.innerHTML = wq1.HTMLanswerC1;
    }
    //Execute function to load questions and show the test area
    loadWhiteHTMLQuestion1();
    HTMLtest1.style.display = "block";

    function HTMLprogressRender1()
    {
        for(let qIndex1 = 0; qIndex1 <= lastHTMLQuestion1; qIndex1++)
    {
        HTMLresultProgress1.innerHTML += "<div class='HTMLprog1' id="+ qIndex1 +"></div>";
    }
    }
    HTMLprogressRender1();

    //Turns marker green if correct
    function correctHTMLAnswer1()
    {
        document.getElementById(currentHTMLQuestion1).style.backgroundColor = "green";
    }
    //Turns marker red if wrong
    function wrongHTMLAnswer1()
    {
        document.getElementById(currentHTMLQuestion1).style.backgroundColor = "red";
    }

    // Function to check if the user has input the right answer
    function checkHTMLAnswer1(HTMLanswer1)
    {
        if (HTMLanswer1 === whiteHTMLQuestions1[currentHTMLQuestion1].HTMLcorrectAnswer1)
    {
        HTMLscore1++;
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
        if (currentHTMLQuestion1 < lastHTMLQuestion1)
    {
        currentHTMLQuestion1++;
        loadWhiteHTMLQuestion1();
    }
        else
    {
        HTMLscoreRender1();
    }
    }
    // Functions to show the score percentage at end of test
    function HTMLscoreRender1()
    {
        HTMLscoreContainer1.style.display = "block";
        const HTMLscorePercent1 = Math.round(100 * HTMLscore1/whiteHTMLQuestions1.length);

        HTMLscoreContainer1.innerHTML = "<p>"+ HTMLscorePercent1 +"%</p>";
    }





    ////////////////////////////////////////////////////////////
    // Tier 2 Question Creation/////////////////////////////////
    let whiteHTMLQuestions2 = [
    {
        HTMLquestion2: "Which of these were developed first?",
        HTMLanswerA2: "HTML",
        HTMLanswerB2: "CSS",
        HTMLanswerC2: "JavaScript",
        HTMLcorrectAnswer2: "A"
    },
    {
        HTMLquestion2: "Which of these elements are used to reference a decimal value?",
        HTMLanswerA2: "var",
        HTMLanswerB2: "number",
        HTMLanswerC2: "value",
        HTMLcorrectAnswer2: "A"
    },
    {
        HTMLquestion2: "Where can JavaScript reference tags be placed in a HTML document?",
        HTMLanswerA2: "head",
        HTMLanswerB2: "body",
        HTMLanswerC2: "both",
        HTMLcorrectAnswer2: "C"
    },
    ];
    //Declaring the 2nd set of questions
    const lastHTMLQuestion2 = whiteHTMLQuestions2.length - 1;
    let currentHTMLQuestion2 = 0;

    //This loads in the test's questions
    function loadWhiteHTMLQuestion2()
    {
        let wq2 = whiteHTMLQuestions2[currentHTMLQuestion2];

        HTMLquestion2.innerHTML = "<p>"+ wq2.HTMLquestion2 +"</p>";
        HTMLanswerA2.innerHTML = wq2.HTMLanswerA2;
        HTMLanswerB2.innerHTML = wq2.HTMLanswerB2;
        HTMLanswerC2.innerHTML = wq2.HTMLanswerC2;
    }

    //NEED IF STATEMENT FOR IF THE TIER 1 SCORE IS SHOWN
    loadWhiteHTMLQuestion2();
    HTMLtest2.style.display = "block";


    // Second set of progress indicators
    function HTMLprogressRender2()
    {
        for(let qIndex2 = 0; qIndex2 <= lastHTMLQuestion2; qIndex2++)
    {
        HTMLresultProgress2.innerHTML += "<div class='HTMLprog2' id="+ qIndex2 +"></div>";
    }
    }
    HTMLprogressRender2();


    //Turns marker green if correct
    function correctHTMLAnswer2()
    {
        document.getElementById(currentHTMLQuestion2).style.backgroundColor = "green";
    }
    //Turns marker red if wrong
    function wrongHTMLAnswer2()
    {
        document.getElementById(currentHTMLQuestion2).style.backgroundColor = "red";
    }



    //Second Answer renderer
    function checkHTMLAnswer2(HTMLanswer2)
    {
        if (HTMLanswer2 === whiteHTMLQuestions2[currentHTMLQuestion2].HTMLcorrectAnswer2)
    {
        HTMLscore2++;
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
        if (currentHTMLQuestion2 < lastHTMLQuestion2)
    {
        currentHTMLQuestion2++;
        loadWhiteHTMLQuestion2();
    }
        else
    {
        HTMLscoreRender2();
    }
    }

    function HTMLscoreRender2()
    {
        HTMLscoreContainer2.style.display = "block";
        const scoreHTMLPercent2 = Math.round(100 * HTMLscore2/whiteHTMLQuestions2.length);

        HTMLscoreContainer2.innerHTML = "<p>"+ scoreHTMLPercent2 +"%</p>";
    }


    ///////////////////////////////////////////////
    //////// Third question set //////////////////
    let whiteHTMLQuestions3 = [
    {
        HTMLquestion3 : "Which of these tags do you need to add JavaScript to a HTML document?",
        HTMLanswerA3 : "< script >",
        HTMLanswerB3 : "< div >",
        HTMLanswerC3 : "< style >",
        HTMLcorrectAnswer3 : "A"
    },
    {
        HTMLquestion3 : "What type of computing language is JavaScript?",
        HTMLanswerA3 : "Mark-Up",
        HTMLanswerB3 : "StyleSheet",
        HTMLanswerC3 : "Scripting",
        HTMLcorrectAnswer3 : "C"
    },
    {
        HTMLquestion3 : "JavaScript can be used to create webpages instead of HTML?",
        HTMLanswerA3 : "True",
        HTMLanswerB3 : "False",
        HTMLanswerC3 : "Sometimes",
        HTMLcorrectAnswer3 : "B"
    },
    ];
    //Declaring the question the test is on
    const lastHTMLQuestion3 = whiteHTMLQuestions3.length - 1;
    let currentHTMLQuestion3 = 0;
    //This loads in the test's questions
    function loadWhiteHTMLQuestion3()
    {
        let wq3 = whiteHTMLQuestions3[currentHTMLQuestion3];

        HTMLquestion3.innerHTML = "<p>"+ wq3.HTMLquestion3 +"</p>";
        HTMLanswerA3.innerHTML = wq3.HTMLanswerA3;
        HTMLanswerB3.innerHTML = wq3.HTMLanswerB3;
        HTMLanswerC3.innerHTML = wq3.HTMLanswerC3;
    }
    //Execute function to load questions and show the test area
    loadWhiteHTMLQuestion3();
    HTMLtest3.style.display = "block";

    function HTMLprogressRender3()
    {
        for(let qIndex3 = 0; qIndex3 <= lastHTMLQuestion3; qIndex3++)
    {
        HTMLresultProgress3.innerHTML += "<div class='HTMLprog3' id="+ qIndex3 +"></div>";
    }
    }
    HTMLprogressRender3();

    //Turns marker green if correct
    function correctHTMLAnswer3()
    {
        document.getElementById(currentHTMLQuestion3).style.backgroundColor = "green";
    }
    //Turns marker red if wrong
    function wrongHTMLAnswer3()
    {
        document.getElementById(currentHTMLQuestion3).style.backgroundColor = "red";
    }

    // Function to check if the user has input the right answer
    function checkHTMLAnswer3(HTMLanswer3)
    {
        if (HTMLanswer3 === whiteHTMLQuestions3[currentHTMLQuestion3].correctAnswer3)
    {
        HTMLscore3++;
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
        if (currentHTMLQuestion3 < lastHTMLQuestion3)
    {
        currentHTMLQuestion3++;
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
        HTMLscoreContainer3.style.display = "block";
        const scoreHTMLPercent3 = Math.round(100 * HTMLscore3/whiteHTMLQuestions3.length);

        HTMLscoreContainer3.innerHTML = "<p>"+ scoreHTMLPercent3 +"%</p>";
    }



