 function highlightBlocks() {
    let blok = document.querySelectorAll('.oorzaakEen');
    let blok2 = document.querySelectorAll('.oorzaakEen2');
    
    blok.forEach(function(element) {
      if (element.style.backgroundColor === 'rgb(225, 91, 109)') {
        element.style.backgroundColor = 'white';
      } else {
        element.style.backgroundColor = 'rgb(225, 91, 109)';
      }
    });
    
    blok2.forEach(function(element) {
      if (element.style.backgroundColor === 'rgb(235, 178, 33)') {
        element.style.backgroundColor = 'white';
      } else {
        element.style.backgroundColor = 'rgb(235, 178, 33)';
      }
    });
  }
  
  function highlightBlocks2() {
    let blok = document.querySelectorAll('.oorzaakTwee');
    let blok2 = document.querySelectorAll('.oorzaakTwee2');
    
    blok.forEach(function(element) {
      if (element.style.backgroundColor === 'rgb(225, 91, 109)') {
        element.style.backgroundColor = 'white';
      } else {
        element.style.backgroundColor = 'rgb(225, 91, 109)';
      }
    });
    
    blok2.forEach(function(element) {
      if (element.style.backgroundColor === 'rgb(235, 178, 33)') {
        element.style.backgroundColor = 'white';
      } else {
        element.style.backgroundColor = 'rgb(235, 178, 33)';
      }
    });
  }
  
  function highlightBlocks3() {
    let blok = document.querySelectorAll('.oorzaakDrie');
    let blok2 = document.querySelectorAll('.oorzaakDrie2');
    
    blok.forEach(function(element) {
      if (element.style.backgroundColor === 'rgb(225, 91, 109)') {
        element.style.backgroundColor = 'white';
      } else {
        element.style.backgroundColor = 'rgb(225, 91, 109)';
      }
    });
    
    blok2.forEach(function(element) {
      if (element.style.backgroundColor === 'rgb(235, 178, 33)') {
        element.style.backgroundColor = 'white';
      } else {
        element.style.backgroundColor = 'rgb(235, 178, 33)';
      }
    });
  }
  
  function highlightBlocks4() {
    let blok = document.querySelectorAll('.oorzaakVier');
    let blok2 = document.querySelectorAll('.oorzaakVier2');
    
    blok.forEach(function(element) {
      if (element.style.backgroundColor === 'rgb(225, 91, 109)') {
        element.style.backgroundColor = 'white';
      } else {
        element.style.backgroundColor = 'rgb(225, 91, 109)';
      }
    });
    
    blok2.forEach(function(element) {
      if (element.style.backgroundColor === 'rgb(235, 178, 33)') {
        element.style.backgroundColor = 'white';
      } else {
        element.style.backgroundColor = 'rgb(235, 178, 33)';
      }
    });
  }
  
  function overlayOff(overlays) {
    document.getElementById(overlays).style.display = "none";
  }
  
  function overlayOn(overlays) {
    document.getElementById(overlays).style.display = "block";
  }