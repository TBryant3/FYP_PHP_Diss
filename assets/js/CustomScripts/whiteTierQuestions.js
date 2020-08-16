$(document).ready(function () {
//Declaring Variables by getting their HTML elements
//////////////    JAVASCRIPT White Test Variables! //////////////////////
//Set 1

        const test1 = document.getElementById("test1");
        const question1 = document.getElementById("question1");
        const answerA1 = document.getElementById("A1");
        const answerB1 = document.getElementById("B1");
        const answerC1 = document.getElementById("C1");
        const resultProgress1 = document.getElementById("resultProgress1");
        const scoreContainer1 = document.getElementById("scoreContainer1");
        let score1 = 0;
    //Set 2
        const test2 = document.getElementById("test2");
        const question2 = document.getElementById("question2");
        const answerA2 = document.getElementById("A2");
        const answerB2 = document.getElementById("B2");
        const answerC2 = document.getElementById("C2");
        const resultProgress2 = document.getElementById("resultProgress2");
        const scoreContainer2 = document.getElementById("scoreContainer2");
        let score2 = 0;
    //Set 3
        const test3 = document.getElementById("test3");
        const question3 = document.getElementById("question3");
        const answerA3 = document.getElementById("A3");
        const answerB3 = document.getElementById("B3");
        const answerC3 = document.getElementById("C3");
        const resultProgress3 = document.getElementById("resultProgress3");
        const scoreContainer3 = document.getElementById("scoreContainer3");
        let score3 = 0;

    // Tier 1 Question Creation
        let whiteQuestions1 = [
            {
                question1: "Which of these HTML tags do you need to add JavaScript to a HTML document?",
                answerA1: "< script >",
                answerB1: "< div >",
                answerC1: "< style >",
                correctAnswer1: "A"
            },
            {
                question1: "What type of computing language is JavaScript?",
                answerA1: "Mark-Up",
                answerB1: "StyleSheet",
                answerC1: "Scripting",
                correctAnswer1: "C"
            },
            {
                question1: "JavaScript can be used to create webpages instead of HTML?",
                answerA1: "True",
                answerB1: "False",
                answerC1: "Sometimes",
                correctAnswer1: "B"
            },
        ];
    //Declaring the question the test is on
        const lastQuestion1 = whiteQuestions1.length - 1;
        let currentQuestion1 = 0;

    //This loads in the test's questions
        function loadWhiteQuestion1() {
            let wq1 = whiteQuestions1[currentQuestion1];

            question1.innerHTML = "<p>" + wq1.question1 + "</p>";
            answerA1.innerHTML = wq1.answerA1;
            answerB1.innerHTML = wq1.answerB1;
            answerC1.innerHTML = wq1.answerC1;
        }

    //Execute function to load questions and show the test area
        loadWhiteQuestion1();
        test1.style.display = "block";

        function progressRender1() {
            for (let qIndex1 = 0; qIndex1 <= lastQuestion1; qIndex1++) {
                resultProgress1.innerHTML += "<div class='prog1' id=" + qIndex1 + "></div>";
            }
        }

        progressRender1();

    //Turns marker green if correct
        function correctAnswer1() {
            document.getElementById(currentQuestion1).style.backgroundColor = "green";
        }

    //Turns marker red if wrong
        function wrongAnswer1() {
            document.getElementById(currentQuestion1).style.backgroundColor = "red";
        }

    // Function to check if the user has input the right answer
        function checkAnswer1(answer1) {
            if (answer1 === whiteQuestions1[currentQuestion1].correctAnswer1) {
                score1++;
                // Turns user input into an immediate feedback system
                // Turn answer green
                correctAnswer1();
            } else {
                // Turns user input into an immediate feedback system
                // Turn answer red
                wrongAnswer1();
            }
            if (currentQuestion1 < lastQuestion1) {
                currentQuestion1++;
                loadWhiteQuestion1();
            } else {
                scoreRender1();
            }
        }

    // Functions to show the score percentage at end of test
        function scoreRender1() {
            scoreContainer1.style.display = "block";
            const scorePercent1 = Math.round(100 * score1 / whiteQuestions1.length);

            scoreContainer1.innerHTML = "<p>" + scorePercent1 + "%</p>";
        }


    ////////////////////////////////////////////////////////////
    // Tier 2 Question Creation/////////////////////////////////
        let whiteQuestions2 = [
            {
                question2: "Which of these were developed first?",
                answerA2: "HTML",
                answerB2: "CSS",
                answerC2: "JavaScript",
                correctAnswer2: "A"
            },
            {
                question2: "Which of these elements are used to reference a decimal value?",
                answerA2: "var",
                answerB2: "number",
                answerC2: "value",
                correctAnswer2: "A"
            },
            {
                question2: "Where can JavaScript reference tags be placed in a HTML document?",
                answerA2: "head",
                answerB2: "body",
                answerC2: "both",
                correctAnswer2: "C"
            },
        ];
    //Declaring the 2nd set of questions
        const lastQuestion2 = whiteQuestions2.length - 1;
        let currentQuestion2 = 0;

    //This loads in the test's questions
        function loadWhiteQuestion2() {
            let wq2 = whiteQuestions2[currentQuestion2];

            question2.innerHTML = "<p>" + wq2.question2 + "</p>";
            answerA2.innerHTML = wq2.answerA2;
            answerB2.innerHTML = wq2.answerB2;
            answerC2.innerHTML = wq2.answerC2;
        }

    //NEED IF STATEMENT FOR IF THE TIER 1 SCORE IS SHOWN
        loadWhiteQuestion2();
        test2.style.display = "block";


    // Second set of progress indicators
        function progressRender2() {
            for (let qIndex2 = 0; qIndex2 <= lastQuestion2; qIndex2++) {
                resultProgress2.innerHTML += "<div class='prog2' id=" + qIndex2 + "></div>";
            }
        }

        progressRender2();


    //Turns marker green if correct
        function correctAnswer2() {
            document.getElementById(currentQuestion2).style.backgroundColor = "green";
        }

    //Turns marker red if wrong
        function wrongAnswer2() {
            document.getElementById(currentQuestion2).style.backgroundColor = "red";
        }


    //Second Answer renderer
        function checkAnswer2(answer2) {
            if (answer2 === whiteQuestions2[currentQuestion2].correctAnswer2) {
                score2++;
                // Turns user input into an immediate feedback system
                // Turn answer green
                correctAnswer2();
            } else {
                // Turns user input into an immediate feedback system
                // Turn answer red
                wrongAnswer2();
            }
            if (currentQuestion2 < lastQuestion2) {
                currentQuestion2++;
                loadWhiteQuestion2();
            } else {
                scoreRender2();
            }
        }

        function scoreRender2() {
            scoreContainer2.style.display = "block";
            const scorePercent2 = Math.round(100 * score2 / whiteQuestions2.length);

            scoreContainer2.innerHTML = "<p>" + scorePercent2 + "%</p>";
        }


    ///////////////////////////////////////////////
    //////// Third question set //////////////////
        let whiteQuestions3 = [
            {
                question3: "Which of these tags do you need to add JavaScript to a HTML document?",
                answerA3: "< script >",
                answerB3: "< div >",
                answerC3: "< style >",
                correctAnswer3: "A"
            },
            {
                question3: "What type of computing language is JavaScript?",
                answerA3: "Mark-Up",
                answerB3: "StyleSheet",
                answerC3: "Scripting",
                correctAnswer3: "C"
            },
            {
                question3: "JavaScript can be used to create webpages instead of HTML?",
                answerA3: "True",
                answerB3: "False",
                answerC3: "Sometimes",
                correctAnswer3: "B"
            },
        ];
    //Declaring the question the test is on
        const lastQuestion3 = whiteQuestions3.length - 1;
        let currentQuestion3 = 0;

    //This loads in the test's questions
        function loadWhiteQuestion3() {
            let wq3 = whiteQuestions3[currentQuestion3];

            question3.innerHTML = "<p>" + wq3.question3 + "</p>";
            answerA3.innerHTML = wq3.answerA3;
            answerB3.innerHTML = wq3.answerB3;
            answerC3.innerHTML = wq3.answerC3;
        }

    //Execute function to load questions and show the test area
        loadWhiteQuestion3();
        test3.style.display = "block";

        function progressRender3() {
            for (let qIndex3 = 0; qIndex3 <= lastQuestion1; qIndex3++) {
                resultProgress3.innerHTML += "<div class='prog3' id=" + qIndex3 + "></div>";
            }
        }

        progressRender3();

    //Turns marker green if correct
        function correctAnswer3() {
            document.getElementById(currentQuestion3).style.backgroundColor = "green";
        }

    //Turns marker red if wrong
        function wrongAnswer3() {
            document.getElementById(currentQuestion3).style.backgroundColor = "red";
        }

    // Function to check if the user has input the right answer
        function checkAnswer3(answer3) {
            if (answer3 === whiteQuestions1[currentQuestion3].correctAnswer3) {
                score3++;
                // Turns user input into an immediate feedback system
                // Turn answer green
                correctAnswer3();
            } else {
                // Turns user input into an immediate feedback system
                // Turn answer red
                wrongAnswer3();
            }
            if (currentQuestion3 < lastQuestion3) {
                currentQuestion3++;
                loadWhiteQuestion3();
            } else {
                scoreRender3();
            }
        }

    // Functions to show the score percentage at end of test
        function scoreRender3() {
            scoreContainer3.style.display = "block";
            const scorePercent3 = Math.round(100 * score3 / whiteQuestions3.length);

            scoreContainer3.innerHTML = "<p>" + scorePercent3 + "%</p>";
        }


    // checkAnswer1();
    // checkAnswer2();
    // checkAnswer3();

});