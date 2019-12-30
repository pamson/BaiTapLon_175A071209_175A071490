$(document).ready(function() {
    let addButton = $('.add-button');
    let field = $('.add-field');
    let row = $('.rowkhoa')
        //add
    addButton.on('click', function() {
            let elem = `<li class="task">
                    <div class="task-checked col-1">
                        <input type="checkbox">
                    </div>
                    <div class="task-text col-2">${field.val()}</div>
                    <div class="task-remove col-3"></div>
                    </li>`;
            tasks.append(elem);
            field.val('');
        })
        //remove

    row.on('click', '.remove_Khoa', function() {
        $(this).parent().remove();
    })


})