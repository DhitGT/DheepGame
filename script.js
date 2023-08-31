function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  console.log("ID: " + profile.getId()); // Do not send to your backend! Use an ID token instead.
  console.log("Name: " + profile.getName());
  console.log("Image URL: " + profile.getImageUrl());
  console.log("Email: " + profile.getEmail()); // This is null if the 'email' scope is not present.
}

const canvas = document.getElementById("mycanvas")
const c = canvas.getContext("2d")
canvas.width = 700
canvas.height = 350

const Player = new Entity('player',100,100,50,5,'green')

let AnalogPlayerDir = '';
let AnalogFireDir = '';

var Joy1 = new JoyStick("joyDiv", {}, function (stickData) {
  AnalogPlayerDir = stickData.cardinalDirection;
});
var Joy2 = new JoyStick("joyDiv2", {}, function (stickData) {
  AnalogFireDir = stickData.cardinalDirection;
});

function update() {
  document.getElementById("fullscreenButton").innerHTML = AnalogPlayerDir;
  Player.movement(AnalogPlayerDir)
}

function draw() {
  c.clearRect(0,0,canvas.width,canvas.height)
  Player.draw(c)
}

function loop() {
  update();
  draw();
}

const IntervalGame = setInterval(loop,1000 / 30);
