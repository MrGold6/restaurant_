<h2 style="text-align: center; margin-top:20px; margin-bottom: 150px;"> Замовлення</h2>

<div class="reservations-wrapper-large " id="reservations-space">
	<div class="reservations-details-wrapper">
		<div class="reservations-inputs-wrapper">
			<!-- reservations date, hour and seats -->
			<div class="reservations-selectors">
				<div class="reservations-guest-num-selector reservations-even">
					<p class="reservations-label-text">
													Гостей											</p>
					<div class="reservations-num-guest-selector-inner">
						<select class="reservations-desktop-input" id="reservations-num-guests-selector">
							<option>01</option>
							<option>02</option>
							<option>03</option>
							<option>04</option>
							<option>05</option>
							<option>06</option>
							<option>07</option>
							<option>08</option>
							<option>09</option>
							<option>10</option>
							<option>11</option>
							<option>12</option>
						</select>
					</div>
				</div>
				<div class="reservations-spacer"></div>
				<div class="reservations-date-selector reservations-even">
					<i class="fa fa-calendar reservations-icon fa-2x-reservations" aria-hidden="true"></i>
					<div class="res-line"></div>
					<p class="reservations-label-text">
							Дата візиту					</p>
					<input class="reservations-desktop-input hasDatepicker" size="8" id="reservations-date-selector">
				</div>
				<div class="reservations-spacer"></div>
				<div class="reservations-hour-selector reservations-even">
					<i class="fa fa-clock-o reservations-icon fa-2x-reservations" aria-hidden="true"></i>
					<div class="res-line"></div>
					<p class="reservations-label-text">
							Час візиту					</p>
					<input class="reservations-desktop-input ui-timepicker-input" size="5" id="reservations-hour-selector" autocomplete="off">
				</div>
			</div>
			<div class="contact-fields-block ts-cleafix">
				<div class="res-phone-input res-align-left">
					<input type="text" id="phone" style="color: rgb(255, 0, 0);">
					<label class="phone-number-placeholder">
							Телефон					</label>
				</div>
				<div class="res-email-input res-align-right">
					<input type="text" id="email">
							<label class="email-placeholder">
								Ім'я							</label>
				</div>
			</div>
		</div>
		<div class="reservations-spacer-wrapper-left show-for-large-up"></div>
		<div class="reservations-spacer-wrapper-right show-for-large-up"></div>
		<div class="reservations-presentation-wrapper res-right-text show-for-large-up">
			<div class="reservations-text-container">
				<p class="res-right-title reservations-subtitle">
						Забронювати по телефону
				</p>
				<p class="second-res-row reservations-details-line1">Увага!<br><br>Ресторан працює з 12.00 до 22.00. По п'ятницях, суботах та неділях - до 22.00<br><br>Шановні гості! В обідній та вечірній час рекомендуємо бронювати столики. <br><br>Для резерву, будь ласка, оберіть дату та час, і заповніть контактну<br>інформацію в зазначеному розділі або зателефонуйте за номером<br>+38 (068) 096 49 49 з 12:00 до 22:00.</p>
				
				
				<p class="second-res-row reservations-details-line2"></p>
			</div>
		</div>
		<input id="opentable-res-name" name="opentable-res-name" type="hidden" value="">
	</div>
	<div class="contact-fields">
		<!-- reservation submission button - triggers ajax request -->
		<div class="submit">
			<a class="reservations-submit reservations-effect no-load">
					ЗАБРОНЮВАТИ			</a>
		</div>
	</div>
</div>