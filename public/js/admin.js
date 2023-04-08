let change = document.getElementById('menu1')
let change2 = document.getElementById('menu2')
function openPosts(){
    let posts   = document.getElementById('posts')
    let reports = document.getElementById('reports')

    posts.style.display = 'block'
    reports.style.display = 'none'
    change.style.color = '#FBC63E'
    change2.style.color = '#A9A9A9'
    change.style.textDecoration = 'underline'
    change2.style.textDecoration = 'none'
}
function openReports(){
    let posts   = document.getElementById('posts')
    let reports = document.getElementById('reports')

    posts.style.display = 'none'
    reports.style.display = 'block'
    change2.style.color = '#FBC63E'
    change.style.color = '#A9A9A9'
    change.style.textDecoration = 'none'
    change2.style.textDecoration = 'underline'
}
