$(document).ready(function()
{
    //Orange Test Variables
    //Set 4
    const test4 = document.getElementById("test4");
    const question4 = document.getElementById("question4");
    const answerA4= document.getElementById("A4");
    const answerB4 = document.getElementById("B4");
    const answerC4 = document.getElementById("C4");
    const resultProgress4 = document.getElementById("resultProgress4");
    const scoreContainer4 = document.getElementById("scoreContainer4");
    let score4 = 0;
    //Set 5
    const test5 = document.getElementById("test5");
    const question5 = document.getElementById("question5");
    const answerA5= document.getElementById("A5");
    const answerB5 = document.getElementById("B5");
    const answerC5 = document.getElementById("C5");
    const resultProgress5 = document.getElementById("resultProgress5");
    const scoreContainer5 = document.getElementById("scoreContainer5");
    let score5 = 0;
    //Set 6
    const test6 = document.getElementById("test6");
    const question6 = document.getElementById("question6");
    const answerA6= document.getElementById("A6");
    const answerB6 = document.getElementById("B6");
    const answerC6 = document.getElementById("C6");
    const resultProgress6 = document.getElementById("resultProgress6");
    const scoreContainer6 = document.getElementById("scoreContainer6");
    let score6 = 0;

    ////////////////////////////////////////////////////////////////////////////////////////
    // Tier 2 Question Creation
    let whiteQuestions4 = [
        {
            question4 : "Which of these HTML tags do you need to add JavaScript to a HTML document?",
            answerA4 : "< script >",
            answerB4 : "< div >",
            answerC4 : "< style >",
            correctAnswer4 : "A"
        },
        {
            question4 : "What type of computing language is JavaScript?",
            answerA4 : "Mark-Up",
            answerB4 : "StyleSheet",
            answerC4 : "Scripting",
            correctAnswer4 : "C"
        },
        {
            question4 : "JavaScript can be used to create webpages instead of HTML?",
            answerA4 : "True",
            answerB4 : "False",
            answerC4 : "Sometimes",
            correctAnswer4 : "B"
        },
    ];
    //Declaring the question the test is on
    const lastQuestion4 = whiteQuestions4.length - 1;
    let currentQuestion4 = 0;
    //This loads in the test's questions
    function loadWhiteQuestion4()
    {
        let wq4 = whiteQuestions4[currentQuestion4];

        question4.innerHTML = "<p>"+ wq4.question4 +"</p>";
        answerA4.innerHTML = wq4.answerA4;
        answerB4.innerHTML = wq4.answerB4;
        answerC4.innerHTML = wq4.answerC4;
    }
    //Execute function to load questions and show the test area
    loadWhiteQuestion4();
    test4.style.display = "block";

    function progressRender4()
    {
        for(let qIndex4 = 0; qIndex4 <= lastQuestion4; qIndex4++)
        {
            resultProgress4.innerHTML += "<div class='prog4' id="+ qIndex4 +"></div>";
        }
    }
    progressRender4();

    //Turns marker green if correct
    function correctAnswer4()
    {
        document.getElementById(currentQuestion4).style.backgroundColor = "green";
    }
    //Turns marker red if wrong
    function wrongAnswer4()
    {
        document.getElementById(currentQuestion4).style.backgroundColor = "red";
    }

    // Function to check if the user has input the right answer
    function checkAnswer4(answer4)
    {
        if (answer4 === whiteQuestions4[currentQuestion4].correctAnswer4)
        {
            score4++;
            // Turns user input into an immediate feedback system
            // Turn answer green
            correctAnswer4();
        }
        else
        {
            // Turns user input into an immediate feedback system
            // Turn answer red
            wrongAnswer4();
        }
        if (currentQuestion4 < lastQuestion4)
        {
            currentQuestion4++;
            loadWhiteQuestion4();
        }
        else
        {
            scoreRender4();
        }
    }
    // Functions to show the score percentage at end of test
    function scoreRender4()
    {
        scoreContainer4.style.display = "block";
        const scorePercent4 = Math.round(100 * score4/whiteQuestions4.length);

        scoreContainer4.innerHTML = "<p>"+ scorePercent4 +"%</p>";
    }




});