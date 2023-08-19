/*****************************************
*  License: GPLv3 or later
*  License URI: http://www.gnu.org/licenses/gpl-3.0.html
*  
*  Howling Dev Basic WordPress Theme, Copyright 2022 Dan Hunt
*  howling-dev-basic WordPress Theme, Copyright 2022 Dan Hunt
*  howling-dev-basic is distributed under the terms of the GNU GPL
*  
***********************************************************************
*  
*  This program is free software: you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation, either version 3 of the License, or
*  (at your option) any later version.
*  
*  This program is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
*  GNU General Public License for more details.
*  
*  You should have received a copy of the GNU General Public License
*  along with this program. If not, see < http://www.gnu.org/licenses/ >.
*     
***********************************************************************
*****************************************/
"use strict";

function howlindDevBasicGetScrollbarWidth() {
	var hdbScrollbarWidth = window.innerWidth - document.body.getBoundingClientRect().width;							// Gets the size of the scrollbar	
	var hdbNeededSize = hdbScrollbarWidth + "px";																		// Adds px to scrollbarWidth
	document.documentElement.style.setProperty('--hdb-scrollbar-size', hdbNeededSize);									// Sets the css var to size of scrollbar
	
	if(hdbScrollbarWidth < 1) {
		// There is no scroll bar and this eliminates the odd decimal pixels from the float
		document.documentElement.style.setProperty('--hdb-scrollbar-size', "0px");
	}		
}

window.onload = howlindDevBasicGetScrollbarWidth;
window.onresize = howlindDevBasicGetScrollbarWidth;