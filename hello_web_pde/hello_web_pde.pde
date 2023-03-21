float x;
float y;
float easing = 0.05;


  
int gray = #444444;

void setup() {
  size(1000, 1000); 
}

void draw() { 
  background(51);
  
  float targetX = mouseX;
  float dx = targetX - x;
  x += dx * easing;
  
  float targetY = mouseY;
  float dy = targetY - y;
  y += dy * easing;
strokeWeight(0); 
ellipse(x, y, 40, 40);
fill(gray);
}

void mouseReleased() {
  gray += 15;
}


  