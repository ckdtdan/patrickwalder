function startjs() {
  changenavi();
  //draw_lines();
}

function changenavi () {
	resolution = document.body.clientWidth;
	navi = document.getElementById('mainnav');
	list = document.getElementById('navlist');
	contentwidth = document.getElementById('content').offsetWidth;
	navi.style.width = resolution + "px";
	navi.style.position = 'absolute';
	navi.style.left = '0px';
	list.style.position = 'absolute';
	list.style.marginLeft= ( resolution - contentwidth ) * 0.5 + "px";
}
