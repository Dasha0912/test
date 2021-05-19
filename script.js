window.onload = function() {
   
    document.addEventListener('keyup', function(event) {
        if (event.code == 'ArrowUp' || event.code == 'ArrowDown' || event.code == 'ArrowRight' || event.code == 'ArrowRight') {
          alert(event.code);
          console.log(event.code);
        }
      });
    
  };