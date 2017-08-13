  //create array that will hold all ordered products
    var shoppingCart = [];
    var cart_total_price=0;
    var orderedProductsTblBody;
    
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
            var cellPhoneNo1 = row.insertCell(3);
            var cellPhoneNo2 = row.insertCell(4);
            var cellPrintType = row.insertCell(5);
            var cellsft = row.insertCell(6);
            var cellqunt = row.insertCell(7);
            
            
            
            //fill cells with values from current product object of our array

            cellNumber.innerHTML 	=shoppingCart[product].Number +count.toString();
            cellName.innerHTML 		= shoppingCart[product].Name;
            cellAddress.innerHTML = shoppingCart[product].Addresss;
            cellPhoneNo1.innerHTML = shoppingCart[product].PhoneNo1;
            cellPhoneNo2.innerHTML = shoppingCart[product].PhoneNo2;
            cellPrintType.innerHTML = shoppingCart[product].PrintType;
            cellsft.innerHTML = shoppingCart[product].sft;
            cellqunt.innerHTML = shoppingCart[product].Quantity;
            
            count++;

        }
        
       
    }


function AddtoCart()
    {
       //Below we create JavaScript Object that will hold three properties you have mentioned:    Name,Description and Price
       var singleProduct = {};
       //Fill the product object with data
       singleProduct.Number = "";
       singleProduct.Name=document.getElementById("ClientName").value;
       singleProduct.Addresss=document.getElementById("ClientAddress").value;
       singleProduct.PhoneNo1=document.getElementById("ClientPhn1").value;
       singleProduct.PhoneNo2=document.getElementById("ClientPhn2").value;
       singleProduct.PrintType=document.getElementById("PrintType").value;
       singleProduct.Height=document.getElementById("PrintHeight").value;
       singleProduct.Wide=document.getElementById("PrintWide").value;
       singleProduct.Quantity=document.getElementById("PrintQuantity").value;
       
       
       singleProduct.sft = document.getElementById("PrintHeight").value * document.getElementById("PrintWide").value;
       singleProduct.AddedFrame=document.getElementById("Addedframe").value;
       
       shoppingCart.push(singleProduct);
       
       displayShoppingCart();

    }


    //Add some products to our shopping cart via code or you can create a button with onclick event
    //AddtoCart("Table","Big red table",50);
    //AddtoCart("Door","Big yellow door",150);
    //AddtoCart("Car","Ferrari S23",150000);

    function record()
    {

         
         



         
            for(var product in shoppingCart)
            {

                var billNo = "1";
               
                var RECname = shoppingCart[product].Name.toString();
                var RECaddress = shoppingCart[product].Addresss.toString();
                var RECphn1 = shoppingCart[product].PhoneNo1.toString();
                var RECphn2 = shoppingCart[product].PhoneNo2.toString();
                var RECprintType = shoppingCart[product].PrintType.toString();
                var RECheight = shoppingCart[product].Height.toString();
                var RECwide = shoppingCart[product].Wide.toString();
                var RECsft = shoppingCart[product].sft.toString();
                var RECQunt = shoppingCart[product].Quantity.toString();
                var RECFrame = shoppingCart[product].AddedFrame.toString();
               
                
               
                var dataString = 'BillNo='+ billNo
                        + '&ClientName=' + RECname        
                        + '&ClientAddress=' + RECaddress
                        + '&ClientPhn1=' + RECphn1
                        + '&ClientPhn2=' + RECphn2
                        + '&PrintType=' + RECprintType
                        + '&PrintHeight=' + RECheight
                        + '&PrintWide=' + RECwide
                        + '&PrintQuantity=' + RECQunt
                        + '&sft=' + RECsft
                        + '&frame=' + RECFrame
                        
                       



                //var text ='{"BillNo":"'+billNo+'","ClientName":"'+RECname+'","ClientAddress":"'+RECaddress+'","ClientPhn":"'+RECphn+'","PrintType":"'+RECprintType+'","PrintHeight":"'+RECheight+'","PrintWide":"'+RECwide+'","PrintQuantity":"'+RECQunt+'","sft":"'+RECsft+'","frame":"'+RECFrame+'"}';
                //var obj = JSON.parse(text);
                $.ajax({
                    type: 'post',
                    url: 'PrintOderPHP.php',
                    //data: $('form').serialize(),
                    data : dataString,
                    
                    success: function () 
                    {
                        
                        alert('form was submitted');

                    }             
                });

                for(var timer = 0;timer<500;timer++){
                        console.log(timer);
                }    
            }
            
            
      
             ClearHtmlElement(); 
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
    var tempi ; 
    
    
    
    return  GetRandomNumber = Math.floor((Math.random() * 70000));

}



