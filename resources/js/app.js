import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

const deleteBtn = document.querySelectorAll(".delete-btn");

/* Per ogni bottone aggiungiamo un evento */

deleteBtn.forEach((btn) => {
    btn.addEventListener('click', (event) => {
        /* Avvio un pre-evento che non farà partire la form */
        event.preventDefault();
        /* Prelevo con data attribute il singolo button */
        const comicTitle = btn.getAttribute('data-comic-title');

        /* Faccio apparire il modal */
        const myModal = new bootstrap.Modal(document.getElementById('modal-delete'));
        document.getElementById('modal-comic-title').innerText = comicTitle; /* comicTitle prelevato tramite attributo */
        /* Prelevo tramite id il bottone e faccio partire il submit */
        document.getElementById('final-delete').addEventListener('click', function () {
            /* Attraverso il parentElement faccio partire il submit dalla form nel index.blade.php */
            btn.parentElement.submit();
        });
        myModal.show();
    })
})

