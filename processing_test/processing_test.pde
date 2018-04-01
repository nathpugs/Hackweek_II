import gab.opencv.*;
import processing.video.*;
import java.awt.*;
import processing.serial.*; //The serial library is needed to communicate with the Arduino.

Capture video;
OpenCV opencv;

//Screen Size Parameters
int width = 320;
int height = 240;

Serial port; // The serial port

//Variables for keeping track of the current servo positions.
//char servoTiltPosition = 90;
char servoPanPosition = 90;
//The pan/tilt servo ids for the Arduino serial command interface.
//char tiltChannel = 0;
char panChannel = 1;

//These variables hold the x and y location for the middle of the detected face.
int midFaceY=0;
int midFaceX=0;

//The variables correspond to the middle of the screen, and will be compared to the midFace values
int midScreenY = (height/2);
int midScreenX = (width/2);
int midScreenWindow = 10;  //This is the acceptable 'error' for the center of the screen

//The degree of change that will be applied to the servo each time we update the position.
int stepSize=1;

void setup() {
  size(640, 480);
  video = new Capture(this, 640/2, 480/2, Capture.list()[9], 30);
  opencv = new OpenCV(this, 640/2, 480/2);
  opencv.loadCascade(OpenCV.CASCADE_FRONTALFACE);  

  video.start();
  
  printArray(Serial.list()); // List COM-ports (Use this to figure out which port the Arduino is connected to)
  printArray(Capture.list());

  //select first com-port from the list (change the number in the [] if your sketch fails to connect to the Arduino)
  port = new Serial(this, Serial.list()[5], 57600);   //Baud rate is set to 57600 to match the Arduino baud rate.  
  
  //Send the initial pan/tilt angles to the Arduino to set the device up to look straight forward.
  //port.write(tiltChannel);    //Send the Tilt Servo ID
  //port.write(servoTiltPosition);  //Send the Tilt Position (currently 90 degrees)
  port.write(panChannel);         //Send the Pan Servo ID
  port.write(servoPanPosition);   //Send the Pan Position (currently 90 degrees)  
}

void draw() {
  scale(2);
  opencv.loadImage(video);
  
  //pushMatrix();
  //scale(-1,1);
  //image(video, 0, 0);
  //popMatrix();

  image(video, 0, 0 );

  noFill();
  stroke(0, 255, 0);
  strokeWeight(3);
  Rectangle[] faces = opencv.detect();
  //println(faces.length);

  for (int i = 0; i < faces.length; i++) {
    //println(faces[i].x + "," + faces[i].y);
    rect(faces[i].x, faces[i].y, faces[i].width, faces[i].height);
  }
  
  //Find out if any faces were detected.
  if(faces.length > 0){
    //If a face was found, find the midpoint of the first face in the frame.
    //NOTE: The .x and .y of the face rectangle corresponds to the upper left corner of the rectangle,
    //      so we manipulate these values to find the midpoint of the rectangle.
    midFaceY = faces[0].y + (faces[0].height/2);
    midFaceX = faces[0].x + (faces[0].width/2);
    
    ////Find out if the Y component of the face is below the middle of the screen.
    //if(midFaceY < (midScreenY - midScreenWindow)){
    //  if(servoTiltPosition >= 5)servoTiltPosition -= stepSize; //If it is below the middle of the screen, update the tilt position variable to lower the tilt servo.
    //}
    ////Find out if the Y component of the face is above the middle of the screen.
    //else if(midFaceY > (midScreenY + midScreenWindow)){
    //  if(servoTiltPosition <= 175)servoTiltPosition +=stepSize; //Update the tilt position variable to raise the tilt servo.
    //}
    //Find out if the X component of the face is to the left of the middle of the screen. 
    
    //midFaceX = Midpoint of my face along the X axis
    //midScreenX = 320
    //midScreenWindow = 10 (This is the acceptable 'error' for the center of the screen)
    if (midFaceX > (midScreenX + midScreenWindow)) {
      if (servoPanPosition >= 5)servoPanPosition += stepSize; //Update the pan position variable to move the servo to the left.
      //if (midFaceX != midScreenX)servoPanPosition += stepSize;
      
    }
    //Find out if the X component of the face is to the right of the middle of the screen.
    else if (midFaceX < (midScreenX - midScreenWindow)) {
      if (servoPanPosition <= 175)servoPanPosition -= stepSize; //Update the pan position variable to move the servo to the right.
    }
    
    
    //if(midFaceX < (midScreenX - midScreenWindow)){
    //  if(servoPanPosition >= 5)servoPanPosition += stepSize; //Update the pan position variable to move the servo to the left.
    //}
    
    
  }
  //Update the servo positions by sending the serial command to the Arduino.
  //port.write(tiltChannel);      //Send the tilt servo ID
  //port.write(servoTiltPosition); //Send the updated tilt position.
  port.write(panChannel);        //Send the Pan servo ID
  port.write(servoPanPosition);  //Send the updated pan position.
  //delay(1);  
  
  //println(midFaceX + " , " + midFaceY);
  //println(midScreenX);
}

void captureEvent(Capture c) {
  c.read();
}