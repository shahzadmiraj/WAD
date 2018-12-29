var questions = [{
    question : "When a user views a page containing a JavaScript program, which machine actually executes the script?",
    choices : [ "The User's machine running a Web browser",
        "The Web server",
        "A central machine deep within Netscape's corporate offices",
        "None of the above"],
    correctAnswer : 0
},{
    question : "Which of the following can't be done with client-side JavaScript?",
    choices : [ "Validating a form",
        "Sending a form's contents by email",
        "Storing the form's contents to a database file on the server",
        "None of the above"],
    correctAnswer : 2
},{
    question : "Using _______ statement is how you test for a specific condition",
    choices : [ "select",
        "if",
        "for",
        "none of the above"],
    correctAnswer : 1
},{
    question:"in computer binary number system 0 means:",
    choices:["off","on","hello","bye"],
    correctAnswer:1
}];

var currentQuestion = 0;
var correctAnswers = 0;
var quizOver = false;
displayCurrentQuestion();
document.getElementById("quiz-message").style.display = 'none';

function displayNext() {
    var a=document.querySelector('input[name="wrt"]:checked');
    if(a!=null)
    {
        if(questions[currentQuestion].correctAnswer==a.value)
        {
            correctAnswers++;
        }
        if(currentQuestion==questions.length-1)
        {
            displayScore();
        }
        else {
            var b = document.getElementById("choice-list");

            b.innerText = "";
            currentQuestion++;
            displayCurrentQuestion();
        }

    }



}


function displayCurrentQuestion() {

var d=document.getElementById("choice-list");
       document.getElementById("question").innerText = questions[currentQuestion].question;
       for(var j=0;j<questions[currentQuestion].choices.length;j++) {
           d.innerHTML += '<li> <input  type="radio" id="1" name="wrt" value=' + j + '>' + questions[currentQuestion].choices[j] + '</li><br>';
       }
    d.innerHTML+='<div><input type="text" placeholder='+correctAnswers+'></div>';
}

function resetQuiz() {
    currentQuestion = 0;
    correctAnswers = 0;
    hideScore();
}
function displayScore() {
    document.getElementById("result").innerHTML = "you scored: " + correctAnswers + " out of: " + questions.length;
    document.getElementById("result").style.display = 'block';
}
function hideScore() {
    document.getElementById("result").style.display = 'none';
}