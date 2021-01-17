function defineColorNav() {
    if(document.getElementById('purple')){
        document.getElementById('navbar').classList.add("bg-purple")
    } else if(document.getElementById('green')){
        document.getElementById('navbar').classList.add("bg-green")
    } else if(document.getElementById('blue')){
        document.getElementById('navbar').classList.add("bg-blue")
    }
}