/** Bootstrap 5 **/

/**import { Modal } from 'bootstrap';

let modalElement = document.getElementById('livewire-modal');

modalElement.addEventListener('hidden.bs.modal', () => {
    Livewire.emit('resetModal');
});

Livewire.on('invokeModal', () => {
    let modal = Modal.getInstance(modalElement);

    if (!modal) {
        modal = new Modal(modalElement);
    }

    modal.show();
});

Livewire.on('hideModal', () => {
    let modal = Modal.getInstance(modalElement);

    modal.hide();
});**/


/** Boostrap 4 **/

var modalElement = $('#livewire-modal');

modalElement.on('hidden.bs.modal', function(e) {
    Livewire.emit('resetModal');
});

Livewire.on('invokeModal', function() {
    modalElement.modal('show');
});

Livewire.on('hideModal', function() {
    modalElement.modal('hide');
});