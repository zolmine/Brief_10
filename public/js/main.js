function showModal(){
    let modal = document.querySelector('#postModal');
    let cancel = document.querySelector('#cancel');

    modal.classList.remove('hidden');
    cancel.onclick = () => {
        modal.classList.add('hidden')
    }
}
