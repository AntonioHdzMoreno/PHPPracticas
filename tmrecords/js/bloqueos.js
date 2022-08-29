document.oncontextmenu = function (e) {
    e.preventDefault();
    alert("Saludos, de parte de Toño Hernández y Marco Flores Gzz, el equipo desarrollador de TMrecords.");
   }

   document.onkeydown = function(e) {
    if (e.ctrlKey && 
        (e.keyCode === 67 || 
         e.keyCode === 86 || 
         e.keyCode === 85 || 
         e.keyCode === 117)) {
        alert("Saludos, de parte de Toño Hernández y Marco Flores Gzz, el equipo desarrollador de TMrecords.");
        return false;
    } else {
        return true;
    }
};


