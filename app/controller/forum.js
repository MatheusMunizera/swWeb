function goToPost(){
    document.getElementById("post").onclick = function(){
        location.href="posts.html";
    }
}

onsubmit($('#text').tinymce().save());