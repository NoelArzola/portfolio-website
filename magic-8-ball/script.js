$(document).ready(function () {
  const eightBall = {};
  eightBall.listOfAnswers = [
    "It is certain",
    "It is decidedly so",
    "Without a doubt",
    "Yes - definitely",
    "You may rely on it",
    "As I see it, yes",
    "Most likely",
    "Outlook good",
    "Yes",
    "Signs point to yes",
    "Reply hazy, try again",
    "Ask again later",
    "Better not tell you now",
    "Cannot predict now",
    "Concentrate and ask again",
    "Don't count on it",
    "My reply is no",
    "My sources say no",
    "Outlook not so good",
    "Very doubtful",
  ];

  eightBall.getFortune = function (question) {
    const randomNum = Math.ceil(
      Math.round(Math.random() * eightBall.listOfAnswers.length)
    );

    const fortune = eightBall.listOfAnswers[randomNum];

    $("#answer").text(fortune);

    $("#answer").hide();

    $("#8ball").effect("shake");

    $("#8ball").attr(
      "src",
      "https://s3.amazonaws.com/media.skillcrush.com/skillcrush/wp-content/uploads/2016/09/answerside.png"
    );

    //Delays the prompt and adds another shake
    setTimeout(function () {
      const questionPrompt = prompt(
        "Ask a yes or no question:",
        "Type Question Here"
      );

      $("#8ball").effect("shake");

      $("#answer").fadeIn(4000);
    }, 500);
  };

  //Hides answer on page load
  $("#answer").hide();

  //Makes the button interactive
  $("#questionButton").click(eightBall.getFortune);
});
