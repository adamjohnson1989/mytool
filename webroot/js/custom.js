/**
Demo script to handle the theme demo
**/
var Custom = function() {
    return {
        //main function to initiate the theme
        init: function() {


            var memberInfo3 = document.getElementById('member-info-3');
            var meInfo3 = new Handsontable(memberInfo3, {
                data: [
                    ['', '','','']
                ],
                colHeaders: ['Từ', 'Đến', 'Tên Công Ty', 'Chức vụ'],
                rowHeaders: true,
                dropdownMenu: true,
                minSpareRows: 1,
                contextMenu: true,
                autoColumnSize: true,
                colWidths: [150,150,500,200],
                stretchH: 'none'
            });
        }
    };

}();