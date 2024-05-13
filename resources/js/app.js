import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


window.addEventListener('DOMContentLoaded', function() {
    var checkbox = document.getElementById('school_reg_type');
    var additionalInputs = document.getElementById('additional_inputs');

    checkbox.addEventListener('change', function() {
        if (this.checked) {
            additionalInputs.style.display = 'block';
        } else {
            additionalInputs.style.display = 'none';
        }
    });

    
});

