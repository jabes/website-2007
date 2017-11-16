// JavaScript Document

// Date Check
var months = new Array();
months[0] = "January";
months[1] = "February";
months[2] = "March";
months[3] = "April";
months[4] = "May";
months[5] = "June";
months[6] = "July";
months[7] = "August";
months[8] = "September";
months[9] = "October";
months[10] = "November";
months[11] = "December";
var t = new Date();
var m = months[t.getMonth()];
var d = t.getDate();
var y = t.getYear();
if (y < 2000)   
y = y + 1900;

var yourBro = []; yourBro.ualc = navigator.userAgent.toLowerCase();

// Perform checks for different browsers
if( document.all && document.getElementById && navigator.savePreferences && ( yourBro.ualc.indexOf( 'netfront' ) < 0 ) && navigator.appName != 'Blazer' ) { yourBro[0] = 'es5'; yourBro[1] = 'Escape 5'; }
else if( navigator.vendor == 'KDE' || ( document.childNodes && ( !document.all || navigator.accentColorName ) && !navigator.taintEnabled ) ) { yourBro[0] = 'kde'; yourBro[1] = 'Konqueror / Safari / OmniWeb 4.5+'; }
else if( navigator.__ice_version ) { yourBro[0] = 'ice'; yourBro[1] = 'ICEbrowser'; }
else if( window.ScriptEngine && ScriptEngine().indexOf( 'InScript' ) + 1 ) { if( document.createElement ) { yourBro[0] = 'ic3'; yourBro[1] = 'iCab 3+'; } else { yourBro[0] = 'icb'; yourBro[1] = 'iCab 2-'; } }
else if( yourBro.ualc.indexOf( 'hotjava' ) + 1 && typeof( navigator.accentColorName ) == 'undefined' ) { yourBro[0] = 'hjv'; yourBro[1] = 'HotJava'; }
else if( document.layers && !document.classes ) { yourBro[0] = 'omn'; yourBro[1] = 'Omniweb 4.2-'; }
else if( document.layers && !navigator.mimeTypes['*'] ) { yourBro[0] = 'esc'; yourBro[1] = 'Escape 4'; }
else if( document.layers ) { yourBro[0] = 'ns4'; yourBro[1] = 'Netscape 4'; }
else if( window.opera && document.childNodes ) { yourBro[0] = 'op7'; yourBro[1] = 'Opera 7+'; }
else if( yourBro.ualc.indexOf( 'opera' ) + 1 ) { yourBro[0] = 'opr'; yourBro[1] = 'Opera 6-'; }
else if( navigator.appName.indexOf( 'WebTV' ) + 1 ) { yourBro[0] = 'wtv'; yourBro[1] = 'WebTV'; }
else if( yourBro.ualc.indexOf( 'netgem' ) + 1 ) { yourBro[0] = 'nbx'; yourBro[1] = 'Netgem NetBox'; }
else if( yourBro.ualc.indexOf( 'opentv' ) + 1 ) { yourBro[0] = 'otv'; yourBro[1] = 'OpenTV'; }
else if( yourBro.ualc.indexOf( 'ipanel' ) + 1 ) { yourBro[0] = 'ipn'; yourBro[1] = 'iPanel MicroBrowser'; }
else if( document.getElementById && !document.childNodes ) { yourBro[0] = 'clu'; yourBro[1] = 'Clue browser'; }
else if( navigator.product == 'Gecko' && !navigator.savePreferences ) { yourBro[0] = 'gek'; yourBro[1] = 'Gecko engine'; }
else if( navigator.product && navigator.product.indexOf('Hv') == 0 ) { yourBro[0] = 'hv3'; yourBro[1] = 'Tkhtml Hv3+'; }
else if( document.getElementById && ( ( yourBro.ualc.indexOf( 'netfront' ) + 1 ) || navigator.appName == 'Blazer' || navigator.product == 'Gecko' || ( navigator.appName.indexOf('PSP') + 1 ) || ( navigator.appName.indexOf('PLAYSTATION 3') + 1 ) ) ) { yourBro[0] = 'nf3'; yourBro[1] = 'NetFront 3+'; }
else if( document.getElementById ) { yourBro[0] = 'ie5'; yourBro[1] = 'Internet Explorer 5+'; }
else if( document.all && navigator.appName != 'Microsoft Pocket Internet Explorer' ) { yourBro[0] = 'ie4'; yourBro[1] = 'Internet Explorer 4'; }
else if( ( yourBro.ualc.indexOf( 'msie' ) + 1 ) && window.ActiveXObject ) { yourBro[0] = 'pie'; yourBro[1] = 'Pocket Internet Explorer'; }
else { yourBro[0] = 'oth'; yourBro[1] = 'an unknown browser'; }

// Perform checks for different operating systems
if( yourBro.ualc.indexOf( 'linux' ) + 1 ) { yourBro[2] = 'lin'; yourBro[3] = 'Linux'; }
else if( yourBro.ualc.indexOf( 'x11' ) + 1 || yourBro.ualc.indexOf( 'bsd' ) + 1 || yourBro.ualc.indexOf( 'solaris' ) + 1 || yourBro.ualc.indexOf( 'unix' ) + 1 ( navigator.platform && navigator.platform.indexOf('X11') + 1 ) ) { yourBro[2] = 'unx'; yourBro[3] = 'Unix'; }
else if( yourBro.ualc.indexOf( 'mac' ) + 1 ) { yourBro[2] = 'mac'; yourBro[3] = 'MacOS'; }
else if( navigator.platform == 'PalmOS' ) { yourBro[2] = 'plm'; yourBro[3] = 'Palm OS'; }
else if( ( navigator.platform == 'WinCE' ) || ( navigator.platform == 'Windows CE' ) || ( navigator.platform == 'Pocket PC' ) || ( navigator.platform == 'Windows Mobile' ) ) { yourBro[2] = 'wce'; yourBro[3] = 'Windows CE'; }
else if( yourBro.ualc.indexOf( 'win' ) + 1 ) { yourBro[2] = 'win'; yourBro[3] = 'Windows'; }
else if( yourBro.ualc.indexOf( 'webtv' ) + 1 ) { yourBro[2] = 'wtv'; yourBro[3] = 'WebTV Platform'; }
else if( yourBro.ualc.indexOf( 'netgem' ) + 1 ) { yourBro[2] = 'ngm'; yourBro[3] = 'Netgem'; }
else if( yourBro.ualc.indexOf( 'opentv' ) + 1 ) { yourBro[2] = 'otv'; yourBro[3] = 'OpenTV Platform'; }
else if( yourBro.ualc.indexOf( 'symbian' ) + 1 ) { yourBro[2] = 'sym'; yourBro[3] = 'Symbian'; }
else if( navigator.platform == 'Nintendo Wii' ) { yourBro[2] = 'wii'; yourBro[3] = 'Wii'; }
else if( yourBro.ualc.indexOf( 'psp' ) + 1 ) { yourBro[2] = 'psp'; yourBro[3] = 'PlayStation Portable'; }
else if( yourBro.ualc.indexOf( 'playstation' ) + 1 ) { yourBro[2] = 'psx'; yourBro[3] = 'PlayStation'; }
else { yourBro[2] = 'oth'; yourBro[3] = 'an unknown operating system'; }