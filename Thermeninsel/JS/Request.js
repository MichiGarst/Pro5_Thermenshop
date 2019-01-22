function setForm(product, line123) {
    var x = document.getElementsByClassName("requestForm");
    var i;
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }

    var y = document.getElementsByClassName("column");
    var j;
    for (j = 0; j < y.length; j++) {
        y[j].style.backgroundColor = "#F7F7F6";
    }

    document.getElementById(product).style.display='inline';
    document.getElementById(line123).style.backgroundColor ='#ffcc00';
    window.scrollTo(0,document.getElementById(product).offsetTop);

}

function setTable() {
    var g = document.getElementById("groesseTabelle");
    if(g.style.display === 'inline'){
        g.style.display = 'none'
    } else {
        g.style.display = 'inline'
    }
}