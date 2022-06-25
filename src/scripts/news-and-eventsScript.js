function app() {
    const buttons = document.querySelectorAll('.button')
    const tableblock = document.querySelectorAll('.table')

    function filter (category, items) {
        items.forEach((item) => {
            const isItemFiltered = !item.classList.contains(category)
            if (isItemFiltered) {
                item.classList.add('hide')
            } else {
                item.classList.remove('hide')
            }
        })
    }

    buttons.forEach((button) => {
        button.addEventListener('click', () => {
            console.log(button.dataset.filter)
            const currentCategory = button.dataset.filter
            filter(currentCategory, tableblock)
            
        })
    })

}
$('button').on('click', function(){
    $('button').removeClass('selected');
    $(this).addClass('selected');
});
app()