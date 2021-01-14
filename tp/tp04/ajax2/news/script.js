function encodeForAjax(data) {
    return Object.keys(data).map(function(k){
        return encodeURIComponent(k) + '=' + encodeURIComponent(data[k]);
    }).join('&');
}

let comments = document.querySelector('#comments');

let commentForm = document.querySelector('#commentForm');
commentForm.addEventListener('submit', function(event){
    event.preventDefault();
    submitComment();
});

function submitComment(){
    let params = new URLSearchParams(location.search);
    let comments = document.querySelectorAll('article.comment');

    let id = params.get('id');
    let comment_id = comments[comments.length-1].querySelector('span.id').textContent;
    let username = commentForm.querySelector('input[name="username"]').value;
    let text = commentForm.querySelector('textarea[name="text"]').value;

    let req = new XMLHttpRequest();
    req.onload = receiveComments;
    req.open("POST", "api_add_comment.php", true);
    req.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    req.send(encodeForAjax({
        id: id,
        comment_id: comment_id,
        username: username,
        text: text
    }));

}

function receiveComments(){
    let newComments = JSON.parse(this.response);
    for(let i = 0; i < newComments.length; ++i){
        let newComment = newComments[i];
        let newCommentEl = document.createElement('article');
        newCommentEl.classList.add("comment");
        newCommentEl.innerHTML = `
            <span class="id">${newComment.id}></span>
            <span class="user">${newComment.username}</span>
            <span class="date">${newComment.published}</span>
            <p>${newComment.text}</p>
        `;
        comments.insertBefore(newCommentEl, commentForm);
    }
}
