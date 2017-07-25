  //create array that will hold all ordered products
    var shoppingCart = [];
    var cart_total_price=0;
    var orderedProductsTblBody;
    var GetRandomNumber;
    //this function manipulates DOM and displays content of our shopping cart
   
    

function displayShoppingCart()
    {
        orderedProductsTblBody=document.getElementById("orderedProductsTblBody");
        //ensure we delete all previously added rows from ordered products table
        while(orderedProductsTblBody.rows.length>0) {
            orderedProductsTblBody.deleteRow(0);
        }

        //variable to hold total price of shopping cart
        var count = 1;
        //iterate over array of objects
        for(var product in shoppingCart){
            //add new row
            var row=orderedProductsTblBody.insertRow();
            //create three cells for product properties
            var cellNumber = row.insertCell(0);
            var cellName = row.insertCell(1);
            var cellAddress = row.insertCell(2);
            var cellPhoneNo = row.insertCell(3);
            var cellPrintType = row.insertCell(4);
            var cellsft = row.insertCell(5);
            var cellPrice = row.insertCell(6);
            var cellqunt = row.insertCell(7);
            var cellCalPrice = row.insertCell(8);
            cellCalPrice.align="right";
            
            //fill cells with values from current product object of our array

            cellNumber.innerHTML 	=shoppingCart[product].Number +count.toString();
            cellName.innerHTML 		= shoppingCart[product].Name;
            cellAddress.innerHTML = shoppingCart[product].Addresss;
            cellPhoneNo.innerHTML = shoppingCart[product].PhoneNo;
            cellPrintType.innerHTML = shoppingCart[product].PrintType;
            cellsft.innerHTML = shoppingCart[product].sft;
            cellPrice.innerHTML = shoppingCart[product].Price;
            cellqunt.innerHTML = shoppingCart[product].Quantity;
            cellCalPrice.innerHTML = shoppingCart[product].Price * shoppingCart[product].sft ;
            
            cart_total_price+=shoppingCart[product].Price * shoppingCart[product].sft;
            count++;

        }
        //fill total cost of our shopping cart
        document.getElementById("cart_total").innerHTML=cart_total_price;
    }


function AddtoCart()
    {
       //Below we create JavaScript Object that will hold three properties you have mentioned:    Name,Description and Price
       var singleProduct = {};
       //Fill the product object with data
       singleProduct.Number = "";
       singleProduct.Name=document.getElementById("ClientName").value;
       singleProduct.Addresss=document.getElementById("ClientAddress").value;
       singleProduct.PhoneNo=document.getElementById("ClientPhn").value;
       singleProduct.PrintType=document.getElementById("PrintType").value;
       singleProduct.Height=document.getElementById("PrintHeight").value;
       singleProduct.Wide=document.getElementById("PrintWide").value;
       singleProduct.Quantity=document.getElementById("PrintQuantity").value;
       singleProduct.Price=document.getElementById("PrintPrice").value;
       singleProduct.AdvancePay=document.getElementById("PrintAdvancePay").value;
       singleProduct.sft = document.getElementById("PrintHeight").value * document.getElementById("PrintWide").value;
       singleProduct.AddedFrame=document.getElementById("Addedframe").value;
       singleProduct.FramePrice=document.getElementById("framePrice").value;
       //singleProduct.Price="50";
       //Add newly created product to our shopping cart
       shoppingCart.push(singleProduct);
       //call display function to show on screen
       displayShoppingCart();

    }


    //Add some products to our shopping cart via code or you can create a button with onclick event
    //AddtoCart("Table","Big red table",50);
    //AddtoCart("Door","Big yellow door",150);
    //AddtoCart("Car","Ferrari S23",150000);

    function record()
    {

         var billNo = GenerateRandomValue().toString();
         
        for(var product in shoppingCart)
        {


               
                var RECname = shoppingCart[product].Name.toString();
                var RECaddress = shoppingCart[product].Addresss.toString();
                var RECphn = shoppingCart[product].PhoneNo.toString();
                var RECprintType = shoppingCart[product].PrintType.toString();
                var RECheight = shoppingCart[product].Height.toString();
                var RECwide = shoppingCart[product].Wide.toString();
                var RECsft = shoppingCart[product].sft.toString();
                var RECprice = shoppingCart[product].Price.toString();
                var RECQunt = shoppingCart[product].Quantity.toString();
                var RECAdvance = shoppingCart[product].AdvancePay.toString();
                var RECFrame = shoppingCart[product].AddedFrame.toString();
                var RECFramePrice = shoppingCart[product].FramePrice.toString();
                var RECPrintTotalprice = cart_total_price.toString();
                // var text ={BillNo:billNo,
                //             ClientName:RECname,
                //             ClientAddress:RECaddress,
                //             ClientPhn:RECphn,
                //             PrintType:RECprintType,
                //             PrintHeight:RECheight,
                //             PrintWide:RECwide,
                //             PrintQuantity:RECQunt,
                //             PrintPrice:RECprice,
                //             sft:RECsft,
                //             advancePay:RECAdvance,frame:+RECFrame,framePrice:RECFramePrice,InTotalCartPricce:RECPrintTotalprice
                //         };

                var text ='{"BillNo":"'+billNo+'","ClientName":"'+RECname+'","ClientAddress":"'+RECaddress+'","ClientPhn":"'+RECphn+'","PrintType":"'+RECprintType+'","PrintHeight":"'+RECheight+'","PrintWide":"'+RECwide+'","PrintQuantity":"'+RECQunt+'","PrintPrice":"'+RECprice+'","sft":"'+RECsft+'","advancePay":"'+RECAdvance+'","frame":"'+RECFrame+'","framePrice":"'+RECFramePrice+'","InTotalCartPricce":"'+RECPrintTotalprice+'"}';
                var obj = JSON.parse(text);
                try{
                $.ajax({
                    type: 'POST',
                    url: 'PrintOderPHP.php',
                    //data: $('form').serialize(),
                    data : obj,
                    success: function () 
                    {
                        ClearHtmlElement();
                        alert('form was submitted');

                    },
                    fail: function( ) {
                     console.log('Could not get posts, server response');
                    }               
                });
                }catch(err){
                    alert(err);
                }

        }


    }

function PrintElem()
        {
            var mywindow = window.open('', 'PRINT', 'height=400,width=600');

            mywindow.document.write('<html><head><title>' + document.title  + '</title>');
        	mywindow.document.write('</head><body >');
        	for(var product in shoppingCart){

       			 mywindow.document.write('<h1>' + shoppingCart[product].Name.toString() + '</h1>');

       		 }
       		 //mywindow.document.write(document.getElementById(elem).innerHTML);
			mywindow.document.write('</body></html>');
			mywindow.document.close(); // necessary for IE >= 10
			mywindow.focus(); // necessary for IE >= 10*/

        	mywindow.print();
        	mywindow.close();

        return true;
    }


function ClearHtmlElement()
{

       document.getElementById("ClientName").value = "";
       document.getElementById("ClientAddress").value = "";
       document.getElementById("ClientPhn").value = "";
       document.getElementById("PrintHeight").value = "";
       document.getElementById("PrintWide").value = "";
       document.getElementById("PrintQuantity").value = "";
       document.getElementById("PrintPrice").value = "";
       document.getElementById("PrintAdvancePay").value = "";

}



function GenerateRandomValue()
{
    var a = Math.random();
    var b = Math.random();
	var start = Date.now(); 
    return GetRandomNumber = Math.floor((Math.random() * 70) + 15 + start + a+b);
    

}

