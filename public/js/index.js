document.addEventListener("DOMContentLoaded", () => {
    const btn = document.getElementById('sidebarToggle');
    const side = document.getElementById('sidebar');

    if (!btn || !side) return;

    btn.onclick = (e) => {
        side.classList.toggle('show');
        e.stopPropagation();
    };

    document.onclick = (e) => {
        if (!side.contains(e.target) && !btn.contains(e.target)) {
            side.classList.remove('show');
        }
    };
});

document.addEventListener('DOMContentLoaded', function () {

    const logoutLink = document.getElementById('logoutLink');
    const logoutForm = document.getElementById('logout-form');

    if (logoutLink && logoutForm) {
        logoutLink.addEventListener('click', function (e) {
            e.preventDefault();
            logoutForm.submit();
        });
    }

});