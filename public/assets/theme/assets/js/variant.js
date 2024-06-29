let listVariant = document.querySelector('#listVariant');
let btnAddVariant = document.querySelector('.addVariant');

if (btnAddVariant) {
    btnAddVariant.addEventListener('click', function () {
        let variantElement = document.querySelector(".variant").cloneNode(true);
        
        let inputs = variantElement.querySelectorAll("input");

        // Xóa giá trị trong các input
        inputs.forEach(function (input) {
            if (input.type === "number") {
                input.value = "";
            }
        });

        // Kiểm tra và chỉ thêm nút xóa mới nếu không tồn tại
        if (!variantElement.querySelector('.btn-outline-danger')) {
            let btnDelete = document.createElement('input');
            btnDelete.setAttribute("type", "button");
            btnDelete.setAttribute("onclick", 'removeElement(this)');
            btnDelete.setAttribute("class", "btn btn-outline-danger");
            btnDelete.setAttribute("value", "Xóa");
            btnDelete.setAttribute("style", "height: 37px;");

            // Thêm nút xóa vào phần tử clone
            variantElement.appendChild(btnDelete);
        }

        // Thêm phần tử clone vào danh sách
        listVariant.appendChild(variantElement);
    });
}

function removeElement(btn) {
    btn.parentElement.remove();
}