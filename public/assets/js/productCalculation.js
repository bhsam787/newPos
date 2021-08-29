'use strict'
//input form
// let productCostEl=document.querySelector('#productCost0');
// let quanityEl=document.querySelector('#quanity0');
// let perCategoryCostEl=document.querySelector('#perCategoryCost0');
// let percentageEl=document.querySelector('#percentage0');


// other content
let tagetSaleEl=document.querySelector('.tagetSale');
let finalAmount=Number(document.querySelector('.total-cost').textContent);
let productCategory=Number(document.querySelector('#productCategory').textContent);
const defaultPerCategoryCost=Number(document.querySelector(`#perCategoryCost0`).value);
let quanity,perCategoryCost,perProductCost, productCost,approxCost,totalSale,percentage;
//calling dynamic target Sale
let tsale=0;
targetSaleCount();


let targetForm=document.querySelector('.target-form');
targetForm.addEventListener('click',function(e){
  if (e.target!==e.target.id) {
   let id=e.target.id;
   if(e.target.id!=='haramiReset'){
     quanityMp(id);
     tragetMp(id);
     productMp(id);
     percentageMp(id);
     costMp(id);
   }

   }


 });



//quantity manipluation changes
function quanityMp(id){
let countNumber=id.replace(/[^0-9]/g,'');

document.querySelector(`#quanity${countNumber}`).addEventListener('keyup',function(){

 quanity=Number(document.querySelector(`#quanity${countNumber}`).value);
 perCategoryCost=Number(document.querySelector(`#perCategoryCost${countNumber}`).value);
 perProductCost=perCategoryCost/quanity;
 document.querySelector(`#productCost${countNumber}`).value=perProductCost.toFixed(2);

 approxCost=Number(document.querySelector(`#approxCost${countNumber}`).value);
 percentage=((perProductCost-(approxCost/quanity))/approxCost)*100;
 document.querySelector(`#percentage${countNumber}`).value=percentage>0?percentage.toFixed(2):'0';

 targetSaleCount();
 percentageMp(id);

});
}



// //Traget sale  manipluation changes
function tragetMp(id){
let countNumber=id.replace(/[^0-9]/g,'');

document.querySelector(`#perCategoryCost${countNumber}`).addEventListener('keyup',function(){

 quanity=Number(document.querySelector(`#quanity${countNumber}`).value);
 perCategoryCost=Number(document.querySelector(`#perCategoryCost${countNumber}`).value);
 approxCost=Number(document.querySelector(`#approxCost${countNumber}`).value);
 perProductCost=perCategoryCost/quanity;
 document.querySelector(`#productCost${countNumber}`).value=perProductCost.toFixed(2);
percentage=((perCategoryCost-approxCost)/approxCost)*100;
 document.querySelector(`#percentage${countNumber}`).value=percentage>0?percentage.toFixed(2):'0';

 targetSaleCount();

});
}


// per product manipluation
function productMp(id){
let countNumber=id.replace(/[^0-9]/g,'');

document.querySelector(`#productCost${countNumber}`).addEventListener('keyup',function(){

 quanity=Number(document.querySelector(`#quanity${countNumber}`).value);
 productCost=Number(document.querySelector(`#productCost${countNumber}`).value);
 perCategoryCost=quanity*productCost;
 document.querySelector(`#perCategoryCost${countNumber}`).value=perCategoryCost.toFixed(2);


  approxCost=Number(document.querySelector(`#approxCost${countNumber}`).value);
  percentage=((productCost-(approxCost/quanity))/approxCost)*100;
  document.querySelector(`#percentage${countNumber}`).value=percentage>0?percentage.toFixed(2):'0';
 targetSaleCount();

});
}
// percetntage calculator
function percentageMp(id){
let countNumber=id.replace(/[^0-9]/g,'');

document.querySelector(`#percentage${countNumber}`).addEventListener('keyup',function(){


 quanity=Number(document.querySelector(`#quanity${countNumber}`).value);
 productCost=Number(document.querySelector(`#productCost${countNumber}`).value);
 perCategoryCost=Number(document.querySelector(`#approxCost${countNumber}`).value);
 let percentageInput=Number(document.querySelector(`#percentage${countNumber}`).value);

 let percentageCategory=perCategoryCost+(perCategoryCost*percentageInput/100);
 let percentageProductCost=percentageCategory/quanity;
 document.querySelector(`#productCost${countNumber}`).value=percentageProductCost.toFixed(2);
 document.querySelector(`#perCategoryCost${countNumber}`).value=percentageCategory.toFixed(2);
 targetSaleCount();

});
}
// Target sale /profit calucaltion
function costMp(id){
let countNumber=id.replace(/[^0-9]/g,'');

document.querySelector(`#approxCost${countNumber}`).addEventListener('keyup',function(){


 approxCost=Number(document.querySelector(`#approxCost${countNumber}`).value);
 totalSale=Number(document.querySelector(`#totalSale${countNumber}`).value);
 let totalDue=Number(document.querySelector(`#TotalDue${countNumber}`).value);

 let totalProfit=totalSale-approxCost-totalDue;
 document.querySelector(`#totalProfit${countNumber}`).value=totalProfit.toFixed(2);
 // document.querySelector(`#percentage${countNumber}`).value=0;
 targetSaleCount();

});
}



//target sale dynamic calucaltion
function targetSaleCount() {
  tsale=0

  for(let i=0; i<productCategory; i++){
  let tsaleItem=Number(document.querySelector(`#perCategoryCost${i}`).value);
  tsale+=tsaleItem;

  }


  document.querySelector('.targetSalea').textContent=tsale.toFixed(2)+" TK ";
  let amountTotal=Number(document.querySelector('#amntotal').textContent);
  let profitAmount=tsale-amountTotal;
  document.querySelector('.expectedProfit').textContent=profitAmount.toFixed(2);+" TK ";

  profitAmount>0?document.querySelector('.sam').style.backgroundColor ='#0072ff':document.querySelector('.sam').style.backgroundColor ='rgb(246, 78, 96)';

  additonCalc();

}


//additon of all field calucaltion

function additonCalc() {
  let fApproxCostItem=0;
  let fTargetSaleItem=0;
  let fQuanityItem=0;
  let fTotalSaleItem=0;
  let fTotalDueItem=0;
  let fStockRemainingItem=0;
  let ftotalProfitItem=0;

  for(let i=0; i<productCategory; i++){
  let fApproxCost=Number(document.querySelector(`#approxCost${i}`).value);
  let fTargetSale=Number(document.querySelector(`#perCategoryCost${i}`).value);
  let fQuanity=Number(document.querySelector(`#quanity${i}`).value);
  let fTotalSale=Number(document.querySelector(`#totalSale${i}`).value);
  let fTotalDue=Number(document.querySelector(`#TotalDue${i}`).value);
  let fStockRemaining=Number(document.querySelector(`#StockRemaining${i}`).value);
  let ftotalProfit=Number(document.querySelector(`#totalProfit${i}`).value);
  fApproxCostItem+=fApproxCost;
  fTargetSaleItem+=fTargetSale;
  fQuanityItem+=fQuanity;
  fTotalSaleItem+=fTotalSale;
  fTotalDueItem+=fTotalDue;
  fStockRemainingItem+=fStockRemaining;
  ftotalProfitItem+=ftotalProfit;

  }


  document.querySelector('#fApproxCost').value=" = "+fApproxCostItem+" TK ";
  document.querySelector('#fTargetSale').value=" = "+fTargetSaleItem+" TK ";
  document.querySelector('#fTargetSale1').textContent=fTargetSaleItem+" TK ";
  document.querySelector('#fQuanity').value=" = "+fQuanityItem+" Items ";
  document.querySelector('#fTotalSale').value=" = "+fTotalSaleItem+" TK ";
  document.querySelector('.finalTotalSale').textContent=fTotalSaleItem+" TK ";
  document.querySelector('#fTotalProfit').value=" = "+ftotalProfitItem+" TK ";
  document.querySelector('.FinalTotalProfit').textContent=ftotalProfitItem+" TK ";
  document.querySelector('#fTotalDue').value=" = "+fTotalDueItem+" TK ";
  document.querySelector('.FinalTotalDue').textContent=" - "+fTotalDueItem+" TK ";
  document.querySelector('#fStockRemaining').value=" = "+fStockRemainingItem+" Items ";

  //css
  ftotalProfitItem>0?document.querySelector('.dynamic-profit').style.backgroundColor ='#0BB7AF':document.querySelector('.dynamic-profit').style.backgroundColor ='#F64E60';
  ftotalProfitItem>0?document.querySelector('.labeltextfooter').textContent='Total Profit :':document.querySelector('.labeltextfooter').textContent='Total Loss :';



}
