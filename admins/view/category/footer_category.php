 <!-- Essential javascripts for application to work-->
 <script src="../content/backend/js/jquery-3.2.1.min.js"></script>
 <script src="../content/backend/js/popper.min.js"></script>
 <script src="../content/backend/js/bootstrap.min.js"></script>
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 <script src="src/jquery.table2excel.js"></script>
 <script src="../content/backend/js/main.js"></script>
 <!-- The javascript plugin to display page loading on top-->
 <script src="../content/backend/js/plugins/pace.min.js"></script>
 <!-- Page specific javascripts-->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
 <!-- Data table plugin-->
 <script type="text/javascript" src="../content/backend/js/plugins/jquery.dataTables.min.js"></script>
 <script type="text/javascript" src="../content/backend/js/plugins/dataTables.bootstrap.min.js"></script>
 <script type="text/javascript">
$('#sampleTable').DataTable();
//Thời Gian
function time() {
    var today = new Date();
    var weekday = new Array(7);
    weekday[0] = "Chủ Nhật";
    weekday[1] = "Thứ Hai";
    weekday[2] = "Thứ Ba";
    weekday[3] = "Thứ Tư";
    weekday[4] = "Thứ Năm";
    weekday[5] = "Thứ Sáu";
    weekday[6] = "Thứ Bảy";
    var day = weekday[today.getDay()];
    var dd = today.getDate();
    var mm = today.getMonth() + 1;
    var yyyy = today.getFullYear();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    nowTime = h + " giờ " + m + " phút " + s + " giây";
    if (dd < 10) {
        dd = '0' + dd
    }
    if (mm < 10) {
        mm = '0' + mm
    }
    today = day + ', ' + dd + '/' + mm + '/' + yyyy;
    tmp = '<span class="date"> ' + today + ' - ' + nowTime +
        '</span>';
    document.getElementById("clock").innerHTML = tmp;
    clocktime = setTimeout("time()", "1000", "Javascript");

    function checkTime(i) {
        if (i < 10) {
            i = "0" + i;
        }
        return i;
    }
}
 </script>
 <script>
function deleteRow(r) {
    var i = r.parentNode.parentNode.rowIndex;
    document.getElementById("myTable").deleteRow(i);
}
jQuery(function() {
    jQuery(".trash").click(function() {
        swal({
                title: "Cảnh báo",
                text: "Bạn có chắc chắn là muốn xóa sản phẩm này?",
                buttons: ["Hủy bỏ", "Đồng ý"],
            })
            .then((willDelete) => {
                if (willDelete) {
                    swal("Đã xóa thành công.!", {

                    });
                }
            });
    });
});
oTable = $('#sampleTable').dataTable();
$('#all').click(function(e) {
    $('#sampleTable tbody :checkbox').prop('checked', $(this).is(':checked'));
    e.stopImmediatePropagation();
});
 </script>
 <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
 <script>
$(document).ready(function() {
    $(document).on('click', '.edit', function() {
        // Lấy dữ liệu sản phẩm từ thuộc tính data
        var categoryId = $(this).data('category-id');
        var categoryName = $(this).data('category-name');
        var categoryImage = $(this).data('category-image');



        ;

        // Đổ dữ liệu vào modal
        $('#categoryId').val(categoryId);
        $('#categoryName').val(categoryName);


        // Hiển thị modal
        $('#ModalUP').modal('show');
        // console.log("Hello, this is a log message!");
    });
});
 </script>
 <script>
const inpFile = document.getElementById("inpFile");
const loadFile = document.getElementById("loadFile");
const previewContainer = document.getElementById("imagePreview");
const previewContainer = document.getElementById("imagePreview");
const previewImage = previewContainer.querySelector(".image-preview__image");
const previewDefaultText = previewContainer.querySelector(".image-preview__default-text");
inpFile.addEventListener("change", function() {
    const file = this.files[0];
    if (file) {
        const reader = new FileReader();
        previewDefaultText.style.display = "none";
        previewImage.style.display = "block";
        reader.addEventListener("load", function() {
            previewImage.setAttribute("src", this.result);
        });
        reader.readAsDataURL(file);
    }
});
 </script>
 </body>

 </html>