const select = document.getElementsByTagName("select")[0]
const user = document.getElementById("userMilitary")

select.onclick = () => {
    const lbl = document.getElementById("lblMilitary")

    if (select.options.selectedIndex === 1) {
        lbl.style.display = "block"
        user.style.display = "block"
    } else {
        lbl.style.display = "none"
        user.style.display = "none"
    }
}

select.addEventListener("change", (e) => {
    if(select.value !== "") {
        user.required = true
    }
})