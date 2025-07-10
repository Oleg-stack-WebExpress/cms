document.addEventListener('DOMContentLoaded', function() {
    // Получаем текущий URL страницы
    const currentUrl = window.location.href;
    
    // Находим все элементы навигации
    const navLinks = document.querySelectorAll('.nav-link');
    
    // Перебираем все ссылки и проверяем, совпадает ли их href с текущим URL
    navLinks.forEach(link => {
        // Нормализуем URL для сравнения (убираем trailing slashes и т.д.)
        const linkUrl = new URL(link.href).pathname.replace(/\/$/, "");
        const currentPath = new URL(currentUrl).pathname.replace(/\/$/, "");
        
        if (linkUrl === currentPath) {
            // Удаляем класс active у всех ссылок
            navLinks.forEach(l => l.classList.remove('active'));
            // Добавляем класс active к текущей ссылке
            link.classList.add('active');
            // Устанавливаем aria-current
            link.setAttribute('aria-current', 'page');
        } else {
            link.removeAttribute('aria-current');
        }
    });
});