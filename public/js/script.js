const textEl = document.getElementById('text');
const text = 'Welcome to Pharmaty!';
let idx = 0;
let speed = 150;

writeText();

function writeText(){
	textEl.innerText = text.slice(0, idx);
	idx++;

	setTimeout(writeText, speed);
}