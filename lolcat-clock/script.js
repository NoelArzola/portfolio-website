const noon = 12;
const evening = 18; // 6PM
const partyTime = 17; // 5PM
const oneSecond = 1000;
const partyTimeButton = document.getElementById("partyTimeButton");
const wakeUpTimeSelector = document.getElementById("wakeUpTimeSelector");
const lunchTimeSelector = document.getElementById("lunchTimeSelector");
const napTimeSelector = document.getElementById("napTimeSelector");
let time = new Date().getHours();
let isPartyTime = false;
let wakeUpTime = 9; // 9AM
let lunchTime = 12; // 12PM
let napTime = lunchTime + 2; // 2PM

const updateClock = function () {
  const lolCat = document.getElementById("lolcat");
  const message = document.getElementById("timeEvent");
  let messageText;
  let image =
    "https://cdn.pixabay.com/photo/2018/08/12/16/01/cat-3601092_1280.jpg";

  if (time == partyTime) {
    image =
      "https://s3.amazonaws.com/media.skillcrush.com/skillcrush/wp-content/uploads/2016/09/cat4.jpg";
    messageText = "IZ PARTEE TIME!!";
  } else if (time == napTime) {
    image =
      "https://s3.amazonaws.com/media.skillcrush.com/skillcrush/wp-content/uploads/2016/09/cat3.jpg";
    messageText = "IZ NAP TIME…";
  } else if (time == lunchTime) {
    image =
      "https://s3.amazonaws.com/media.skillcrush.com/skillcrush/wp-content/uploads/2016/09/cat2.jpg";
    messageText = "IZ NOM NOM NOM TIME!!";
  } else if (time == wakeUpTime) {
    image =
      "https://s3.amazonaws.com/media.skillcrush.com/skillcrush/wp-content/uploads/2016/09/cat1.jpg";
    messageText = "IZ TIME TO GETTUP.";
  } else if (time < noon) {
    image =
      "https://s3.amazonaws.com/media.skillcrush.com/skillcrush/wp-content/uploads/2016/09/cat5.jpg";
    messageText = "Good morning!";
  } else if (time > evening) {
    image =
      "https://cdn.pixabay.com/photo/2018/01/05/19/20/tree-3063715_1280.jpg";
    messageText = "Good Evening!";
  } else {
    image =
      "https://cdn.pixabay.com/photo/2015/11/12/19/01/cat-1040815_1280.jpg";
    messageText = "Good afternoon!";
  }

  message.innerText = messageText;
  lolCat.src = image;

  showCurrentTime();
};

const showCurrentTime = function () {
  // display the string on the webpage
  const clock = document.getElementById("clock");

  const currentTime = new Date();

  let hours = currentTime.getHours();
  let minutes = currentTime.getMinutes();
  let seconds = currentTime.getSeconds();
  let meridian = "AM";

  // Set hours
  if (hours >= noon) {
    meridian = "PM";
  }
  if (hours > noon) {
    hours = hours - 12;
  }

  // Set Minutes
  if (minutes < 10) {
    minutes = "0" + minutes;
  }

  // Set Seconds
  if (seconds < 10) {
    seconds = "0" + seconds;
  }

  // put together the string that displays the time
  const clockTime =
    hours + ":" + minutes + ":" + seconds + " " + meridian + "!";

  clock.innerText = clockTime;
};

const partyEvent = function () {
  if (isPartyTime === false) {
    isPartyTime = true;
    time = partyTime;
    partyTimeButton.innerText = "Party Over"; // text in the button should read "Party Over"
    partyTimeButton.style.backgroundColor = "#0A8DAB"; // color of the button should be "#0A8DAB" (bonus!)
  } else {
    isPartyTime = false;
    time = new Date().getHours();
    partyTimeButton.innerText = "PARTY TIME!"; // text in the button should read "PARTY TIME!"
    partyTimeButton.style.backgroundColor = "#222"; // color of the button should be "#222" (bonus!)
  }
};

const wakeUpEvent = function () {
  wakeUpTime = wakeUpTimeSelector.value;
};

const lunchTimeEvent = function () {
  lunchTime = lunchTimeSelector.value;
};

const napTimeEvent = function () {
  napTime = napTimeSelector.value;
};

updateClock();
setInterval(updateClock, oneSecond);

partyTimeButton.addEventListener("click", partyEvent);

wakeUpTimeSelector.addEventListener("change", wakeUpEvent);
lunchTimeSelector.addEventListener("change", lunchTimeEvent);
napTimeSelector.addEventListener("change", napTimeEvent);
