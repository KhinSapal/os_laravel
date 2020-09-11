$(document).ready(function(){
  showcart();
  showtable();
  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
  $('.addtocartBtn').click(function(){
    var id = $(this).data('id');
    var name = $(this).data('name');
    var price = $(this).data('price');
    var photo = $(this).data('photo');
      //alert(id+','+name+','+price);
    var itemObj = {'id':id,'name':name,'price':price,'photo':photo,'qty':1};
      //console.log(flowerObj);
    var item=localStorage.getItem('mycart');
      if (!item) {
        var item = '{"itemlist":[]}';
      }
      //console.log(flower);
      var itemObject = JSON.parse(item);
      var itemArr = itemObject.itemlist;
      var hasid=false;
      $.each(itemArr,function(i,v){
        if (v.id==id) {
          hasid=true;
          v.qty++;
        }
      })
      if (!hasid) {
        itemArr.push(itemObj);
      }
      
      var itemString = JSON.stringify(itemObject);
      localStorage.setItem('mycart', itemString);
      showtable();
      showcart();
  });

  function showtable()
    {
      var item = localStorage.getItem('mycart');
      if(item)
      {
        var itemObject = JSON.parse(item);
        var itemArr = itemObject.itemlist;
        var html = '';
        var j=1;
        var total=0;
        var tfoot = '';
        $.each(itemArr,function(i,v){
          var id=v.id;
          var name = v.name;
          var price = v.price;
          var photo = v.photo;
          var qty = v.qty;
          var subtotal = qty*price;
          total+=parseInt(subtotal);

          html += `<tr>
              <td>
                <button class="btn btn-outline-danger remove btn-sm" data-id="${i}" style="border-radius: 50%"> 
                  <i class="icofont-close-line"></i> 
                </button> 
              </td>
              <td> 
                <img src="${photo}" class="cartImg">            
              </td>
              <td> 
                <p> ${name} </p>
                <p> Code Number</p>
              </td>
              <td>
                <button class="btn btn-outline-secondary plus_btn" data-id=${id}> 
                  <i class="icofont-plus"></i> 
                </button>
              </td>
              <td>
                <p> ${qty} </p>
              </td>
              <td>
                <button class="btn btn-outline-secondary minus_btn" data-id=${i}> 
                  <i class="icofont-minus"></i>
                </button>
              </td>
              <td>
                <p class="text-danger"> 
                  ${price} Ks
                </p>
                <p class="font-weight-lighter"> 
                <del> 25,000 Ks </del> </p>
              </td>
              <td>
                ${subtotal} Ks
              </td>
              
            </tr>`;
         // html+=`<tr><td>${j++}</td><td>${name}</td><td><img src="${image}" width="300px" height="200px"></td><td><i class="fas fa-plus-circle qtyplus" data-id=${id}></i>${qty}<i class="fas fa-minus-circle qtyminus" data-id=${id} data-i=${i}></i></td><td>${price}</td><td>${subtotal}</td><td><button class="danger" data-id=${i}>Delete</button></td></tr>`;
        });
        

        $('#shoppingcart_table').html(html);
        $('#mytotal').html(total);

        var tprice = total;
        $('.tprice').html(tprice.toLocaleString()+' Ks');
      }
      else{
        var noshopping = `<div class="col-12">
        <h5 class="text-center"> There are no items in this cart </h5>
      </div>
      <div class="col-12 mt-5 ">
        <a href="{{route('subcategorypage')}}" class="btn btn-secondary mainfullbtncolor px-3" > 
          <i class="icofont-shopping-cart"></i>
          Continue Shopping 
        </a>
      </div>`;
      $('.noneshoppingcart_div').html(noshopping);
      }
    }


    function showcart()
    {
      var item = localStorage.getItem('mycart');
      if(item){
        var itemObject = JSON.parse(item);
        var itemArr = itemObject.itemlist;
        var qtyy=0;
        $.each(itemArr,function(i,v){
          qtyy += v.qty;
        })
        $('.cartNoti').text(qtyy);
      }
    }


    $('#shoppingcart_table').on('click','.plus_btn',function(){
      var id = $(this).data('id');
      //alert(id);
      var item = localStorage.getItem('mycart');
      if(item){
        var itemObject = JSON.parse(item);
        var itemArr = itemObject.itemlist;
        $.each(itemArr,function(i,v){
          if(id==v.id)
          {
            var qty=v.qty++;
            var itemString = JSON.stringify(itemObject);
            localStorage.setItem('mycart',itemString);
            showtable();
            showcart();
          }
          
        })
        
      }
      
    });


    $('#shoppingcart_table').on('click','.remove',function(){
            var id = $(this).data('id');
            var itemString = localStorage.getItem('mycart');
            if(itemString)
            {
                var itemArray = JSON.parse(itemString);
                var itemArr = itemArray.itemlist;
                itemArr.splice(id,1);
                var itemData = JSON.stringify(itemArray);
                localStorage.setItem('mycart',itemData);
                showtable();
                showcart();
            }
    });

    $('#shoppingcart_table').on('click','.minus_btn',function(){
           // var id = $(this).data('id');
            var qtyid = $(this).data('id');
            alert(qtyid);
            var itemString = localStorage.getItem('mycart');
            if(itemString){
                var itemArray = JSON.parse(itemString);
                var itemArr = itemArray.itemlist;
                $.each(itemArr,function(i,v){
                    if(qtyid==i){

                    var qty=v.qty--;

                    if(qty=='1'){
                        itemArr.splice(i,1);
                    }
                    var itemData = JSON.stringify(itemArray);
                    localStorage.setItem('mycart',itemData);
                    showtable();
                    showcart();
                    }
                    
                })
            }
    })
    //for buy_now
$('.checkoutbtn').on('click',function(){

  var notes=$('#notes').val();
  //var totsl=$('.total').val();
  var shopString = localStorage.getItem("mycart");
  var shops = JSON.parse(shopString);
  var shop_data = shops.itemlist;
  if(shopString){

    $.post('/orders',{shop_data:shop_data,notes:notes},function(response){
      if(response){
        alert(response);
        localStorage.clear();
       
        location.href="/";
      }
    })
  }
})

})

