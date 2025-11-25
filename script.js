// script.js - Fully edited: ESC prevention removed, Windows/Microsoft removed, antivirus alert added

// Modal setup (unchanged)
const modal = document.getElementById('myModal');
const btn = document.getElementById('openModal');
const span = document.getElementsByClassName('close')[0];

btn.onclick = function() {
    modal.style.display = 'block';
}

span.onclick = function() {
    modal.style.display = 'none';
}

// REMOVED: ESC prevention event listener (original lines 15-25 deleted)
// Original removed code: window.addEventListener('keydown', function(event) { if (event.keyCode === 27) { event.preventDefault(); } });

// REMOVED: Windows/Microsoft OS detection (original lines 30-40 deleted)
// Original removed code: const isWindows = navigator.userAgent.indexOf('Windows') > -1; etc.

// NEW: Antivirus alert function (added for image replacements)
function showAntivirusAlert() {
    alert('ANTIVIRUS ALERT, someone tried to hack your system');
}

// Fullscreen toggle (unchanged)
function toggleFullscreen() {
    if (!document.fullscreenElement) {
        document.documentElement.requestFullscreen();
    } else {
        document.exitFullscreen();
    }
}

// Window click handler (unchanged)
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = 'none';
    }
}