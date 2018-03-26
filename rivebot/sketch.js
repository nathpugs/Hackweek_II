//var talk;
//var listen;
//
//function setup(){
//  createCanvas(600,600);
//  background(0);
//
//  talk = new p5.Speech();
//  talk.speak("hello");
//
//  listen = new p5.SpeechRec();
//  listen.continuous = true;
//  listen.onResult = showVoice;
//  listen.start();
//}
//
//function showVoice(){
//  console.log(listen.resultString);
//}
//
//function mouseDragged(){
//  fill(255);
//  ellipse(mouseX,mouseY,20,20);
//}
//
//function keyPressed(){
//  talk.speak("How are you?");
//}

var talk = new p5.Speech();
var listen = new p5.SpeechRec();

var a;
var b;
var q;

var bot;

function setup(){
  createCanvas(600,600);
  background(0);

  // Use select to grab data from the specific id element on the html page
  b = select('#submit');
  q = select('#user');
  a = select('#response');

  b.mousePressed(chatBot); // Whenever the button is pressed, call chatBot

  // Brain stuff
  bot = new RiveScript();
  bot.loadFile("./brain.rive",botReady,botError); // 2 functions

  // Speech stuff
  talk.speak("Hello, you are talking to RiveScript");

  listen.continuous = true; // Constant listening
  listen.onResult = showResult; // Trigger the fucntion on every listen
  listen.start(); // Start listening
}

function botReady(){
  bot.sortReplies(); // Gets the file ready with the list of potential answers
}

function botError(){
  console.log('RiveScript not loaded - please check files')
}

function chatBot(){
  var question = q.value(); // Get what is written in the box
  var reply = bot.reply("local-user",question); // Pass it to RiveScript
  a.value(reply); // Output the RiveScript answer to the box


    // Talk the RiveScript answer
    talk.speak(reply);
    createP(reply); // Also add it to the transcript
    
}

function showResult(){

  q.value(listen.resultString); // Put the answer from us into the question
  chatBot(); // Run the chatbot code instead of pressing the button

}
