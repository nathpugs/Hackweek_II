var sound, fft, amplitude, r = 130, dr = 70;
var mic



function setup(){
  createCanvas(1280, 800);
  fft = new p5.FFT();
  mic = new p5.AudioIn();
  mic.start();
	fft.setInput(mic);
  amplitude = new p5.Amplitude();
	amplitude.setInput(mic);
}

function draw(){
  background(50,30);
  translate(width/2,height/2);
	let waveform = fft.waveform();
	fill(255,80);
	ellipse(0,0,150*amplitude.getLevel(),150*amplitude.getLevel());
  noFill();
  beginShape();
  stroke(255,100); // waveform is red
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
