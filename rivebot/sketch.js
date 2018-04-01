var talk = new p5.Speech();
var listen = new p5.SpeechRec();

var a;
var b;
var q;

var bot;

function setup(){


 //use select to grab the data from the specific id element on the html page
 b = select('#submit');
 q = select('#user');
 a = select('#response');

 b.mousePressed(chatBot); //whenever the button pressed call chatbot


 // brain stuff

 bot = new RiveScript();
 bot.loadFile("./brain.rive",botReady,botError); //2 functions

 // speech stuff
 talk.speak("Hey! You're speaking to pug bot. How can I help?"); // say something to begin and ensure speech works

 listen.continuous = true; //constant listen
 listen.onResult = showResult; // trigger the function on every listen
 listen.start(); //start listening
}

function botReady(){
  //console.log('rivescript loaded');
  createP("<center><h1> - CHAT TRANSCRIPT - </h1></center>")
  createP("<center><i>PugBOT has loaded. How can I help?</i></center>");

  bot.sortReplies(); //gets the file ready with the list of potential answers
}

function botError(){
  console.log('rivescript not loaded - please check files');
}

function chatBot(){
 var question = q.value(); //get what is written in that
 // pass it to rivescript
 var reply = bot.reply("local-user",question);
 //output the rivescript answer in the box
 a.value(reply);

 // talk the rivescript answer
 talk.speak(reply);
 createP('<b>REPLY:</b>   ' + reply); //also add it to the transcript
}



function showResult(){
// output what we just said to the console or the window
  //console.log(listen.resultString);

  createP('<b>INPUT:</b>   ' + listen.resultString);

  q.value(listen.resultString); //put the answer from us into the question
  chatBot(); //run the chatbot code instead of pressing the button

}
