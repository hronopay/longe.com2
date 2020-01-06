// JavaScript Document

function f0() {
  window.open("labyr.htm",null,"resizable=yes, width=720, height=422, status=yes, location=no, scrollbars=yes, menubar=no, toolbar=no"); return FALSE;
}
function delay(i) {
var j;
for (j=0;j<i;j++) {;}
 }
function f1(obj) {
var curPosition = window.location.href;
var host = curPosition.substring(0,curPosition.lastIndexOf("/"));
  obj.style.cursor = "hand";
  window.status = host + "/labyr.htm"; return FALSE;
}
function f2(obj) {
  obj.style.cursor = "auto";
  window.status = ""; return FALSE;
}
function inver(div_id)
{
 if (document.all[div_id].style.display=="none")
 {
  document.all[div_id].style.display="block";
 }
 else
 {
  document.all[div_id].style.display="none";
 }
}
function inver_cond(div_id)
{
 if (document.all[div_id].style.display=="none")
 {
  document.all[div_id].style.display="block";
 }
 else
 {
  document.all[div_id].style.display="none";
 }
}
function empty(){}
function open_contact()
{
 open("/contact.php", "displayWindow","scroll=no,help=no,status=no,unadorned=yes,directories=no,menubar=no,resizable=no,width=580,height=530");
}
function click_counter(num) {
window.open('click_counter.php?pic='+num+'','click_counter','z-lock=yes,alwaysLowered=yes,width="100",height="100"');
//window.close();
}

auth_def = "";	
i_countauth = 0;
function inver_mod(div_id)
{
/*************** Если уже был клик, то закрываем открытую ***/
if (i_countauth == 1){ 
	i_countauth=0;

 	if (document.all[auth_def].style.display=="block")
   	{
	  document.all[auth_def].style.display="none";
	}
	 else
	 {
	  document.all[auth_def].style.display="none";
	 }
}
/*************** Если клик по другой, то: ********************/
if (auth_def != div_id){
	auth_def=div_id;

	 if (document.all[auth_def].style.display=="none")
	 {
	  document.all[auth_def].style.display="block";
	  i_countauth=1;
	 }
	 else
	 {
	  document.all[auth_def].style.display="none";
	 }
}
/************************************************************/
}




































































































