function showM() {
    let elem = document.getElementById('menu-add'); 
    let style = getComputedStyle(elem); 
    if (style.display === 'none') {
      document.getElementById('menu-add').style.display='block';
      } else if (style.display !== 'none') {
      document.getElementById('menu-add').style.display='none';
    }
  }

  function showN() {
    let elem = document.getElementById('news-add'); 
    let style = getComputedStyle(elem); 
    if (style.display === 'none') {
      document.getElementById('news-add').style.display='block';
      } else if (style.display !== 'none') {
      document.getElementById('news-add').style.display='none';
    }
  }

  function showA() {
    let elem = document.getElementById('action-add'); 
    let style = getComputedStyle(elem); 
    if (style.display === 'none') {
      document.getElementById('action-add').style.display='block';
      } else if (style.display !== 'none') {
      document.getElementById('action-add').style.display='none';
    }
  }