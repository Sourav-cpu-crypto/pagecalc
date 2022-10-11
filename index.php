
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home Page</title>
 <style>

     .container
     {
         justify-content: center;
         align-items: center;
         text-align: center;
         margin-left: 300px;
         background-color: aquamarine;
         width: 500px;
         height: 500px;
     }
     ::-webkit-input-placeholder {
  text-align: center;
}

:-moz-placeholder {
  text-align: center;
}

     .con1
     {
     display: flex;
     gap: 30px;
    text-align: center;
    height: 200px;

    align-items: center;
     flex-direction: column;    
     }
     .amount-input-placeholder
     {
        text-align: center;
       
     }
     .button
     {
       
     }
     .table .td
     {
       border: 1px solid red;
     }
     .table
     {
       margin-left:200px;
       width:50px;
       height: 60px;
     }
 </style>
  </head>

  <body>
<div class="container">
    <div class="containe1">
    <form action="p2.html" id="form">
        Fees submission date
        <h3 id="feesldate"></h3>
        <h1 id="fees"></h3>
 
 <div class="con1">
  <input id="amount" name="amount"  placeholder="enter amount" />
      <input id="submit" type="submit" name="submit" value="Submit Your fees" />
      </div>
    </form>
    </div>
    <table id="table" class="table">
      <tr>
      <td class="td"   >Amount</td>
      <td class="td">Fine</td>
      <td class="td">Total</td>
        </tr>
        <tr class="">
          <td class="td"  id="td" ></td>
          <td class="td" id="td1"></td>
          <td class="td" id="td2"></td>
            </tr>
        </table>
</div>

  </body>
  <script>


document.querySelector("#feesldate").innerText =new Date("09/10/2022").toISOString().split("T")[0];
    document.querySelector("#form").addEventListener("submit", myFunction);


    function myFunction() {
      event.preventDefault();




    var d2 = new Date("09/10/2022");   
    
var diff = d2.getTime() - new Date().getTime();   
    
var daydiff = diff / (1000 * 60 * 60 * 24);   
if( daydiff > 0 )
{
    console.log("you can submit")  
}
else
{
   
 alert(`fees submission last date was ${d2.toISOString().split("T")[0]} 
 you need to pay fine`);

 let value=document.querySelector("#amount").value ;
value=(Number(value))


if( value>=50 && value<=300){
  document.querySelector("#td1").innerText=5/100*value; 
 
total= value+(5/100*value);
console.log(typeof(total))
console.log(total);
document.querySelector("#td2").innerText=total;
document.querySelector("#td").innerText=value; 


}
else if(value > 300){


let total= value+(10/100*value);
console.log(total);
document.querySelector("#td1").innerText=10/100*value; 
document.querySelector("#td2").innerText=total;
document.querySelector("#td").innerText=value; 
}
else
{

    alert(`invalid amount`) 
}
}





  
    }
  </script>
</html>
