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

var temboo = new TembooProxy('proxy-server.php');

// Add the getTemperature Choreo
var getTemperatureChoreo = temboo.addChoreo('jsGetTemperature');

// Add inputs
getTemperatureChoreo.setInput('Address', 'Coventry, UK');
getTemperatureChoreo.setInput('Units', 'c');

// Success callback






var test = "THIS IS A TEST"


var talk = new p5.Speech();
var listen = new p5.SpeechRec();

var a;
var b;
var q;

var bot;


var temperature;


function setup(){
  createCanvas(600,600);
  background(0);

  var showResult = function(outputs, outputFilters) {
      // Display outputs
      if(outputFilters) {
      	// Display named output filters
          for(var name in outputFilters) {
              console.log(name + ':');
              for(var item in outputs[name]) {
                  console.log('    ' + outputs[name][item]);
              }
          }
      } else {
      	// Display raw outputs
          for(var name in outputs) {
               temperature = (outputs[name]);
               console.log(temperature);
          }
      }
  };





  // Error callback
  var showError = function(error) {
      if(error.type === 'DisallowedInput') {
          console.log(error.type + ' error: ' + error.inputName);
      } else {
          console.log(error.type + ' error: ' + error.message);
      }
  };

  // Run the Choreo, specifying success and error callback handlers
  getTemperatureChoreo.execute(showResult, showError);

  //delay page loading until Temboo value returned


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
  let num = temperature;
  let reply = bot.reply('local-user', 'set ' + num);
}

function botError(){
  console.log('RiveScript not loaded - please check files')
}

function chatBot(){
  var question = q.value(); // Get what is written in the box

  var reply = bot.reply("local-user", question); // Pass it to RiveScript
  a.value(reply); // Output the RiveScript answer to the box


    // Talk the RiveScript answer
    talk.speak(reply);
    createP(reply); // Also add it to the transcript

}

function showResult(){

  q.value(listen.resultString); // Put the answer from us into the question
  chatBot(); // Run the chatbot code instead of pressing the button

}



var sound, fft, amplitude, r = 200, dr = 140;
var mic



function setup(){
  createCanvas(1280, 800);
  fft = new p5.FFT();
  mic = new p5.AudioIn();
  mic.start();
	fft.setInput(mic);
  amplitude = new p5.Amplitude();
	amplitude.setInput(mic);
  colorMode(HSB);
}

function draw(){
  background(50,30);
  translate(width/2,height/2);
	let waveform = fft.waveform();
	fill(255,80);
	ellipse(0,0,150*amplitude.getLevel(),150*amplitude.getLevel());
  noFill();
  beginShape();
  stroke(frameCount,255,255); // waveform is red
  strokeWeight(1);
  for (let i = 0; i< waveform.length; i+=15){
		let ang = i*360/waveform.length;
		let x = (r)*cos(radians(ang));
    let y = (r)*sin(radians(ang));
    let a = map( waveform[i], -1, 1, r-dr, r+dr)*cos(radians(ang));// ;
    let b = map( waveform[i], -1, 1, r-dr, r+dr)*sin(radians(ang));// ;
    vertex(a,b);
		push();
		strokeWeight(1);
		stroke(255,100);
		line(x, y, a, b);
		pop();
		push();
		stroke(255);
    strokeWeight(2);
    point(a, b);
		pop();
  }
  endShape();
}
