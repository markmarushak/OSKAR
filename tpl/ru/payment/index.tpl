{strip}
{include file='header.tpl' title='Финансы'}

<div class="container">
	
	<div class="row">
		
		<div class="col-sm-12">
			<header class="text-center">
				<h1>Баланс</h1>
			</header>
		</div>
		<div class="col-sm-12">
			<div class="good-text alert-finans">
				<img src="http://animashki.kak2z.org/pic/33/animashki-prazdniki-1383.gif">
			<span>ЕСЛИ НЕТ МОНЕТ, НО ХОЧЕТСЯ ПОИГРАТЬ  НА КРИПТОВАЛЮТУ. <br> ДЛЯ ВАШЕГО УДОБСТВА, РЕКОМЕНДУЕМЫЕ СПОСОБЫ <br> ПОКУПКИ КРИПТОВАЛЮТЫ И ОБМЕНА ФИАТА.</span>
		</div>
		</div>
		<div class="col-sm-12">
			<div class="menu-finans uppercase">
				<a href="{_link module='payment/pay'}" class="active">Пополнить</a>
				<a href="{_link module='payment/pay'}">Вывести</a>
				<a href="{_link module='cabinet'}">игровой аккаунт</a>
			</div>
		</div>
		
		<div class="col-sm-8 col-sm-offset-2">
			
			<div id="system">
				
				<form id="paykas">

					<div class="form-group col-sm-5">
						<label>Платежная система</label>
						<br>
						<select name="pay-system" class="form-control" required>
							<option value="-">выберите платежную систему</option>
							<option value="payeer">payeer</option>    
        					<option value="perfectmoney">perfectmoney</option>      
        					<option value="advcash">advcash</option>
        					<option value="berty">berty</option>             
        					<option value="bitcoin">bitcoin</option>           
        					<option value="ethereum">ethereum</option>          
        					<option value="litecoin">litecoin</option>          
        					<option value="dogecoin">dogecoin</option>          
        					<option value="dash">dash</option>              
        					<option value="bitcoincash">bitcoincash</option>       
        					<option value="zcash">zcash</option>             
        					<option value="monero">monero</option>            
        					<option value="ethereumclassic">ethereumclassic</option>   
        					<option value="ripple">ripple</option>            
       						<option value="neo">neo</option>               
        					<option value="gas">gas</option>               
        					<option value="bitcoinsv">bitcoinsv</option>         
						</select>
					</div>

					<div class="form-group col-sm-3">
						<label> Выбериете Валюту</label>
						<select name="currency" id="currency" class="form-control" required></select>
					</div>

					<div class="form-group col-sm-2">
						<label>
							Сумма
							<input type="text" name="amount" min="1" max="4000" class="form-control" required>
						</label>
					</div>

					<div class="form-group col-sm-2">
						<label for=""></label>
						<button class="btn btn-primary" data-toggle="modal" data-target="#payModal" disabled>Отправить</button>
					</div>

					<div class="form-group col-sm-12">
						<label> Коментарий к платежу</label>
						<br>
						<textarea name="comment" cols="30" rows="10" class="form-control"></textarea>
					</div>

				</form>

			</div>

		</div>

	</div>

</div>


<div class="modal fade" id="payModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Пополнение <span></span></h4>
      </div>
      <div class="modal-body">
        <table class="table table-hover">
        	<tr>
        		<td>Платежная система</td>
        		<td class="pay-system"></td>
        	</tr>
        	<tr>
        		<td>Валюта</td>
        		<td class="currency"></td>
        	</tr>
        	<tr>
        		<td>Сумма</td>
        		<td class="amount"></td>
        	</tr>
        	<tr>
        		<td>Комментарий к платежу</td>
        		<td class="comment"></td>
        	</tr>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
        <a href="#" class="btn btn-success" id="pay-btn">Пополнить</a>
      </div>
    </div>
  </div>
</div>

{include file='footer.tpl'}
<script src="assets/js/finans.js"></script>
{/strip}