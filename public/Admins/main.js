function actionDelete(event) {
    event.preventDefault(); //Ngăn cản reload lại page
    let urlRequest = $(this).data('url');
    let that = $(this);

    Swal.fire({
        title: 'Bạn có chắc chắn không?',
        text: "Bạn sẽ không thể hoàn tác!",
        icon: 'Thông báo',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Đồng ý!'
    }).then((result) => {
        if (result.value) {
            $.ajax({
                type: 'GET',
                url: urlRequest,
                success: function (data) {
                    if (data.code == 200) {
                        that.parent().parent().remove();
                        Swal.fire(
                            'Xóa thành công!',
                            'Sản phẩm đã được xóa',
                            'success'
                        )
                    }

                },
                error: function () {

                }
            });


        }
    })

}

$(function () {
    $(document).on('click', '.action_delete', actionDelete);
});
