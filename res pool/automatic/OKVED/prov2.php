<html>
<head id="ctl00_Head1"><meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" /><meta http-equiv="Content-Type" content="text/html;charset=windows-1251" /><title>
	Электронный бухгалтер Эльба
</title><link rel="shortcut icon" href="/favicon.ico" />
	<script src="/theme/js/jquery.min.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="/theme/css/document.css" /></head>
<body>
<div>
    

<form id="documentForm" class="form" action="/document/DownloadDocument" method="post">
	<input type="hidden" name="documentType" value="Receipt"/>
	<input type="hidden" id="renderingType" name="renderingType" value="Pdf"/>

<table class="lightbox" id="Document" style="width: 100%">
	<tr ><td align="center">
		<table class="print-panel">
			<tr>
				<td align="left">
					<button onclick="FormDoSubmit('pdf')" class="button-save"><img src="/theme/images/ico-print.gif" alt="" />&nbsp;Распечатать</button>
					
						<button onclick="FormDoSubmit('excel')" class="button-save"><img src="/theme/images/ico-file-xls.gif" alt=""/>&nbsp;Сохранить Excel</button>
				</td>

				<td align="right" style="width: 50px">
					<a href="" onclick="window.close(); return false;" style="color: White">Закрыть</a>
				</td>
			</tr>
		</table>
	</td></tr>
	<tr><td class="lbc-">
		<div class="boundary-" style="">

			<div class="elements-">
				<div class="lt- corner-"><i><!----></i></div>
				<div class="rt- corner-"><i><!----></i></div>
				<div class="rb- corner-"><i><!----></i></div>
				<div class="lb- corner-"><i><!----></i></div>
				<div class="t-"><i><s><!----></s></i></div>
				<div class="r-"><i><s><u><!----></u></s></i></div>
				<div class="b-"><i><s><!----></s></i></div>
				<div class="l-"><i><s><u><!----></u></s></i></div>

			</div>
			<div class="in-" style="width: 100%">
				
						<img src="/Files/Tmp/Businessman/f18ee57c-8bcf-4c76-8f51-c7c0c3bc9ea3/0.png" alt=""/><br/><br/>
				 
			</div>
		</div>
	</td></tr>
</table>
</form>

<script type="text/javascript">
	function FormDoSubmit(format) {
		if (format == 'pdf')
			$("#renderingType").val('Pdf');
		if (format == 'excel')
			$("#renderingType").val('Excel');
		$("form:first").submit();
    }
</script>


</div>
</body>
</html>
