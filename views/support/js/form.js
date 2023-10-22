const form = document.forms.add_task
const ul = document.querySelector("ul")

form.addEventListener('submit', function (event) {
    event.preventDefault()

    const formData = new FormData(this)
    fetch('/post.php/', {
        method: 'POST',
        body: formData
    })
        .then(res => res.json())
        .then(res => {
            console.log(res)
        })
})