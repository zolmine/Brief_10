function showModal() {
    let modal = document.querySelector('#postModal');
    let cancel = document.querySelector('#cancel');

    modal.classList.remove('hidden');
    cancel.onclick = () => {
        modal.classList.add('hidden')
    }
}

function edit(post) {

    let modal = document.querySelector('#editModal');
    let cancel = document.querySelector('#editCancel');
    let title = document.querySelector('#editTitle');
    let desc = document.querySelector('#editDesc');
    let content = document.querySelector('#editContent');
    let postId = document.querySelector('#postId')

    modal.classList.remove('hidden');
    cancel.onclick = () => {
        modal.classList.add('hidden')
    }
    title.value = post.postTitle
    desc.value = post.postDescription
    content.value = post.postContent
    postId.value = post.postId

}

function del(id) {
    if (confirm('are uu sure uu wanna delete it')){
        window.location.href = "/delete/" + id
    }
}
