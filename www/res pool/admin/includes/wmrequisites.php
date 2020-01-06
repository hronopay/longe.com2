 <form method=post action="<?=$_SERVER['PHP_SELF']?>?mode=b_requesites">
<br>
<br>
 Проверьте правильность и в случае необходимости уточните реквизиты<br>
<br>

<table  class="printview">
   <tbody>
		<tr>
		  <td colspan="2" class="maintext"><b>Введите реквизиты для вывода средств </b></td>
		</tr>
                <tr>

	                <td class="maintext">WMR:</td>
	                <td>&nbsp;&nbsp;&nbsp;<font color="#BB0000">R</font><input  style="width: 134px;" tabindex="4" name="receiver_wm" id="receiver_wm" maxlength="13" value="<?=$wmpurse;?>">
	                  (вводите только 12 цифр, букву R вводить не надо) </td>
                </tr>
                <tr>
                  <td colspan="2" valign="top" class="maintext">
				  <input name="user_id" type="hidden" value="<?=$user_id?>">
				  <input name="userlogin" type="hidden" value="<?=$userlogin?>">
                    <input name="wm_payment" value="отправить уточненный номер рублевого  кошелька"  type="submit">                </td>
                </tr>
                </tbody></table>		
            </form>
