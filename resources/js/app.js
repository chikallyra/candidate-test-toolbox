import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// Modal
document.querySelectorAll('[data-modal-target]').forEach(btn => {
    btn.onclick = () => {
        const targetId = btn.getAttribute('data-modal-target');
        const modal = document.getElementById(targetId);
        const content = modal.querySelector('.transition-all');

        modal.classList.remove('hidden');
        modal.classList.add('flex');

        setTimeout(() => {
            modal.classList.add('opacity-100');
            if (content) {
                content.classList.remove('modal-closed');
                content.classList.add('modal-open');
            }
        }, 10);
    };
});

document.querySelectorAll('[data-modal-hide]').forEach(btn => {
    btn.onclick = () => {
        const targetId = btn.getAttribute('data-modal-hide');
        const modal = document.getElementById(targetId);
        const content = modal.querySelector('.transition-all');

        modal.classList.remove('opacity-100');
        if (content) {
            content.classList.remove('modal-open');
            content.classList.add('modal-closed');
        }

        setTimeout(() => {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }, 300);
    };
});


window.onclick = (event) => {
    if (event.target.classList.contains('fixed')) {
        const btnClose = event.target.querySelector('[data-modal-hide]');
        if (btnClose) btnClose.click();
    }
};
