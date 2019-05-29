let illo = new Zdog.Illustration({
	element: '.zdog-canvas',
});

let translate = { x: -100, y: -140 }

var spGroup = new Zdog.Group({
  addTo: illo,
});

/*
    <path
       style="fill:#d45500;fill-opacity:1;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="M 153.45833,27.124959 89.958332,58.874958 V 164.70829 L 111.125,175.29162 v -31.75 l 63.5,-31.75 V 37.708292 Z m -0.29094,21.641572 0.18656,52.200949 -41.722,20.76359 -0.18604,-52.200947 z"
       id="path3719"
       inkscape:connector-curvature="0"
	   sodipodi:nodetypes="ccccccccccccc" />
*/
new Zdog.Shape({
	addTo: spGroup,
	path: [
		{ move: { x: 153.45833, y: 27.124959 } },
		{ line: { x: 89.958332, y: 58.874958 } },
		{ line: { x: 89.958332, y: 164.70829 } },
		{ line: { x: 111.125, y: 175.29162 } },
		{ line: { x: 111.125, y: 143.54162 } },
		{ line: { x: 174.625, y: 111.79162 } },
		{ line: { x: 174.624, y: 37.708292 } },
	],
	stroke: 1,
	color: '#000',
	fill: false,
	translate,
});

new Zdog.Shape({
	addTo: spGroup,
	path: [
		{ move: { x: 153.45833, y: 27.124959 } },
		{ line: { x: 89.958332, y: 58.874958 } },
		{ line: { x: 89.958332, y: 164.70829 } },
		{ line: { x: 111.125, y: 175.29162 } },
		{ line: { x: 111.125, y: 143.54162 } },
		{ line: { x: 174.625, y: 111.79162 } },
		{ line: { x: 174.624, y: 37.708292 } },

		{ move: { x: 153.16739, y: 48.766531 } },
		{ line: { x: 153.35395, y: 100.96748 } },
		{ line: { x: 111.63195, y: 121.73107 } },
		{ line: { x: 111.44591, y: 69.530123 } }
	],
	stroke: 0,
	color: '#d45500',
	backface: '#88aa00',
	fill: true,
	translate,
});

/*
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="M 111.125,143.54167 V 122.375 Z"
       id="path3725"
       inkscape:connector-curvature="0"
       sodipodi:nodetypes="ccc" />
*/
new Zdog.Shape({
	addTo: spGroup,
	path: [
		{ move: { x: 111.125, y: 143.54167 } },
		{ line: { x: 111.125, y: 122.375 } }
	],
	stroke: 1,
	color: '#000',
	translate,
});

/*
    <path
       style="fill:#88aa00;fill-opacity:1;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="M 89.958333,132.95833 47.625,154.125 v 31.75 L 89.958333,164.70833 111.125,175.29167 v 52.91666 l -63.5,31.75 -21.166667,-10.58333 63.5,-31.75 v -31.75 L 47.625,207.04167 26.458333,196.45833 v -52.91666 l 63.5,-31.75"
       id="path3727"
       inkscape:connector-curvature="0"
       sodipodi:nodetypes="cccccccccccccc" />
*/
new Zdog.Shape({
	addTo: spGroup,
	path: [
		{ move: { x: 89.958333, y: 132.95833 } },
		{ line: { x: 47.625, y: 154.125 } },
		{ line: { x: 47.625, y: 185.875 } }, //v 31.75 
		{ line: { x: 89.958333, y: 164.70833 } },
		{ line: { x: 111.125, y: 175.29167 } },
		{ line: { x: 111.125, y: 228.20833 } }, //v 52.91666 
		{ line: { x: 47.625, y: 259.95833 } }, //l -63.5,31.75 
		{ line: { x: 26.458333, y: 249.375 } }, //-21.166667,-10.58333 
		{ line: { x: 89.958333, y: 217.625 } }, //63.5,-31.75 
		{ line: { x: 89.958333, y: 185.875 } }, //v -31.75 
		{ line: { x: 47.625, y: 207.04167 } },
		{ line: { x: 26.458333, y: 196.45833 } },
		{ line: { x: 26.458333, y: 143.54167 } }, // v -52.91666
		{ line: { x: 89.958333, y: 111.79167 } } // l 63.5,-31.75"
	],
	stroke: 1,
	color: '#88aa00',
	backface: '#d45500',
	fill: true,
	translate,
});

/*
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 47.625,185.875 v 21.16667 z"
       id="path3733"
       inkscape:connector-curvature="0" />
*/
new Zdog.Shape({
	addTo: spGroup,
	path: [
	   { move: { x: 137.583333, y: 297.66667 } }, //m 47.625,185.875 
       { line: { x: 137.583333, y: 318.83334 } } //v 21.16667 z"
	],
	stroke: 1,
	color: '#d45500',
	backface: '#88aa00',
	fill: true,
	translate,
});

/*
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="M 89.958332,185.875 111.125,175.29167 Z"
       id="path3735"
       inkscape:connector-curvature="0"
       sodipodi:nodetypes="ccc" />
*/
new Zdog.Shape({
	addTo: spGroup,
	path: [
		{ move: { x: 89.958332, y: 185.875 } },
		{ line: { x: 111.125, y: 175.29167 } }
	],
	stroke: 1,
	color: '#000',
	translate,
});

/*
    <path
       style="fill:#88aa00;fill-opacity:1;stroke-width:0.37417734"
       d="M 36.666651,201.22216 26.657408,196.18957 V 143.8069 l 63.231659,-31.61318 20.396973,10.19078 -63.04888,31.52665 -0.280633,52.36378 z"
       id="path45"
       inkscape:connector-curvature="0"
       sodipodi:nodetypes="cccccccc" />
*/

new Zdog.Shape({
	addTo: spGroup,
	path: [
		{ move: { x: 36.666651, y: 201.22216 } },
		{ line: { x: 26.657408, y: 196.18957 } },
		{ line: { x: 26.657408, y: 143.8069 } },
		{ line: { x: 89.889067, y: 112.19372 } }, //l 63.231659,-31.61318
		{ line: { x: 110.28604, y: 122.3845 } }, //20.396973,10.19078
		{ line: { x: 47.23716, y: 153.91115 } }, //-63.04888,31.52665
		{ line: { x: 46.956527, y: 206.27493 } }, //-0.280633,52.36378
	],
	stroke: 1,
	color: '#88aa00',
	backface: '#d45500',
	fill: true,
	translate,
});



/*
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="M 153.16739,48.766531 174.625,37.708292 Z"
       id="path4560"
       inkscape:connector-curvature="0"
	   sodipodi:nodetypes="ccc" />
*/
new Zdog.Shape({
	addTo: spGroup,
	path: [
	   { move: { x: 153.16739, y: 48.766531 } },
	   { line: { x: 174.625, y: 37.708292 } }
	],
	stroke: 1,
	color: '#000',
	translate,
});

function animate() {
  // rotate illo each frame
  illo.rotate.y += 0.01;
  illo.updateRenderGraph();
  // animate next frame
  requestAnimationFrame( animate );
}
// start animation
animate();