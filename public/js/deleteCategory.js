


let deleteBtn = document.querySelectorAll('.deleteBtn');

deleteBtn.forEach(ele => {
    ele.addEventListener('click', () => {
        document.getElementById('confirm-delete').setAttribute('href',`http://localhost/electromaroc/Dashboards/deleteCategory/${ele.value}`);
        // console.log(ele.value);
    })
})
