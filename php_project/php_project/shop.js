$(function () {
    var priceMin=null;
    var priceMax=null;
    var findItem;
    let shoppingItemList = [] ;

    if(typeof($.cookie('shoppingItems')) === 'undefined') {

        shoppingItemList=[];
    }
    else {
        shoppingItemList=JSON.parse($.cookie("shoppingItems"))
    }
    updateBadge()

    fillShoppingTable()

    function updateBadge(){
        $('.shop .badge-danger').text(shoppingItemList.length)
    }
    function fillShoppingTable() {

        $.each(shoppingItemList, function (index, element) {

            var price=element.price.split(" ")[0]

            var totalPrice=Number(price)*Number(element.quantity)

            $("#shoppingTable tbody").append("<tr/>")

            $('#shoppingTable tbody tr').last().append("<td class='cr-cart-name' data-index='"+index+"' data-id='"+element.id+"'><a href='#'>"+element.title+"</a></td>" +
                "<td class='cr-cart-price'><span class='amount'>"+element.price+"</span></td>" +
                "<td contenteditable='true' class='cr-cart-qty '>"+element.quantity+"</td>" +
                "<td class='cr-cart-subtotal'>"+totalPrice+" تومان<td class=\"cr-cart-remove\">\n" +
                "<a href=\"javascript:void(0)\">\n" +
                "<i class=\"ri-delete-bin-line remove-item\"></i></a>\n" +
                "</td></td>")

        })
        totalInvoice()

    }


    function totalInvoice() {
        var total=0
        $.each(shoppingItemList,function (index,element) {
            var price=element.price.split(" ")[0]
             total += element.quantity * price
        })
        $('#shoppingTable tfoot tr td strong').text(total)

        $('#shoppingTable tbody tr [contenteditable="true"]').blur(function () {
            var currentRow=$(this).parent()

            shoppingItemList[$(currentRow).children().eq(0).attr("data-index")].quantity=$(this).text()

            var currentPrice=$(currentRow).children().eq(3).text().split(" ")[0]

            $(currentRow).children().eq(3).text(currentPrice * Number($(this).text()))
            $.cookie("shoppingItems",JSON.stringify(shoppingItemList),{expires: 1})

            totalInvoice()
        })
    }



    $('.cr-shopping-bag').click(function () {
        addShoppingItem($('#product_id').val(),$('[data-name="title"]').text(),$('[data-name="price"]').text(),Number($("[name='quantify']").val()));        
    })



    function addShoppingItem(_id,_title,_price,_qty) {
        var findIndex = shoppingItemList.findIndex(function (item) {
            return item.id === _id;
        });

        if (findIndex === -1) {
            var shoppingObj = new Object();
            shoppingObj.id = _id;
            shoppingObj.title = _title;
            shoppingObj.price = _price;
            shoppingObj.quantity = _qty;
            shoppingItemList.push(shoppingObj);

            updateBadge()
        } else {
            shoppingItemList[findIndex].quantity = Number(shoppingItemList[findIndex].quantity) + Number(_qty);
            fillShoppingTable()
        }
        $.cookie("shoppingItems", JSON.stringify(shoppingItemList), {expires: 1});


    }
    $(document).on('click', '.remove-item', function () {

        var id=$(this).parent().parent().parent().children().eq(0).attr('data-id')
        shoppingItemList = shoppingItemList.filter(function (item) {
            return item.id !== id;
        });
        $.cookie("shoppingItems", JSON.stringify(shoppingItemList), { expires: 1 });

        $(this).closest('tr').remove();
        updateBadge();
        totalInvoice();

    });
})