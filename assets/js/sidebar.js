document.addEventListener('DOMContentLoaded', () => { 
  const lessonLayout = document.getElementById('lessonLayout'); 
  const sidebarToggle = document.getElementById('sidebar-toggle'); 
  const sidebarOpenBtn = document.getElementById('sidebar-open-btn'); 

  if (sidebarToggle && lessonLayout) { 
    sidebarToggle.addEventListener('click', () => { 
      lessonLayout.classList.add('sidebar-collapsed'); 
      if (sidebarOpenBtn) sidebarOpenBtn.style.display = 'inline-flex'; 
    }); 
  } 

  if (sidebarOpenBtn && lessonLayout) { 
    sidebarOpenBtn.addEventListener('click', () => { 
      lessonLayout.classList.remove('sidebar-collapsed'); 
      sidebarOpenBtn.style.display = 'none'; 
    }); 
  } 
});