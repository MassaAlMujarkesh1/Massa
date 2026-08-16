document.addEventListener('DOMContentLoaded', () => { 
  const lessonLayout = document.getElementById('lessonLayout'); 
  // تصحيح المعرفات لتطابق الأزرار في ملف lesson.php
  const sidebarToggle = document.getElementById('sidebar-toggle-close'); 
  const sidebarOpenBtn = document.getElementById('sidebar-toggle-open'); 

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