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


function Up(name){
	var obj=document.getElementById(name);
	obj.value=parseInt(obj.value)+1;
	return false;
}

function Dn(name){
	var obj=document.getElementById("cnt_"+name);
	obj.value=parseInt(obj.value)>1?parseInt(obj.value)-1:1;
	return false;
}


function checkall(p_formname,p_state)
{
	var t_elements=(eval("document."+p_formname+".elements"));
	for(var i=0;i<t_elements.length;i++){
		if(t_elements[i].type=="checkbox"){
			if(t_elements[i].checked==p_state) 	t_elements[i].checked=!p_state;
			else 								t_elements[i].checked=p_state;
		}
	}
}





auth_xdef = "";	
i_xcountauth = 0;

function inver_xmod(div_id)
{
/*************** Если уже был клик, то закрываем открытую ***/
if (i_xcountauth == 1){ 
	i_xcountauth=0;

 	if (document.all[auth_xdef].style.display=="block")
   	{
	  document.all[auth_xdef].style.display="none";
	}
	 else
	 {
	  document.all[auth_xdef].style.display="none";
	 }
}
/*************** Если клик по другой, то: ********************/
if (auth_xdef != div_id){
	auth_xdef=div_id;

	 if (document.all[auth_xdef].style.display=="none")
	 {
	  document.all[auth_xdef].style.display="block";
	  i_xcountauth=1;
	 }
	 else
	 {
	  document.all[auth_xdef].style.display="none";
	 }
}
/************************************************************/
}
