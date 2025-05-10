$(function () {
   var priceMin=null;
   var priceMax=null;
   let shoppingItemList = [] ;
   var id=window.location.href.split(["?"])[1].split('=')[1];

   if(typeof($.cookie('shoppingItems')) == 'undefined') {

      shoppingItemList=[];
   }
   else {
      shoppingItemList.push(JSON.parse($.cookie("shoppingItems")))
   }
   updateBadge()
   function updateBadge(){
   $('.shop .badge-danger').text(shoppingItemList.length)
   }

   $('.cr-shopping-bag').click(function () {
      addShoppingItem(id,$('[data-name="title"]').text(),$('[data-name="price"]').text(),Number($("[name='quantify']").val()));
   })

   function addShoppingItem(_id,_title,_price,_qty)
   {
      var findIndex=-1
      var findItem = shoppingItemList.filter(function (i,n) {
             findIndex=n
             return i.id == _id;
     });
        if( findItem.length == 0) {
           var shoppingObj = new Object();
           shoppingObj.id = _id;
           shoppingObj.title = _title;
           shoppingObj.price = _price;
           shoppingObj.quantity = _qty;
           shoppingItemList.push(shoppingObj);
           updateBadge()
       }
        else{
           shoppingItemList[findIndex].quantity=Number(shoppingItemList[findIndex].quantity)+Number(_qty);
           console.log(shoppingItemList[findIndex])
        }
      $.cookie("shoppingItems", JSON.stringify(shoppingObj),{expires:1});
   }
})