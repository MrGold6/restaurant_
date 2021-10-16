<section id="booking">
<h2 class="reservations-header">Онлайн бронювання</h2>
<form action="{{ route('createBooking') }}" method="post">
    @csrf
	<div class="reservations-wrapper-large " id="reservations-space">
		<div class="reservations-details-wrapper">
			<div class="reservations-inputs-wrapper">
				<!-- reservations date, hour and seats -->
				<div class="reservations-selectors">
					<div class="reservations-guest-num-selector reservations-even">
						<i class="fa fa-user reservations-icon fa-2x-reservations" aria-hidden="true"></i>
						<p class="reservations-label-text">
							Гостей
						</p>
						<div class="reservations-num-guest-selector-inner">
							<select class="reservations-desktop-input" id="reservations-num-guests-selector" name="count">
                                @for($i = 0; $i < $MaxCount ? $MaxCount : 0; $i++)
                                    <option value="{{ $i + 1 }}">{{ $i + 1 }}</option>
                                @endfor
							</select>
						</div>
					</div>
					<div class="reservations-spacer"></div>
					<div class="reservations-date-selector reservations-even">
						<i class="fa fa-calendar reservations-icon fa-2x-reservations" aria-hidden="true"></i>
						<div class="res-line"></div>
						<p class="reservations-label-text">
								Дата візиту
                        </p>
						<input class="reservations-desktop-input hasDatepicker" size="8" type="date" id="reservations-date-selector" name="date">
					</div>
					<div class="reservations-spacer"></div>
					<div class="reservations-hour-selector reservations-even">
						<i class="fa fa-clock-o reservations-icon fa-2x-reservations" aria-hidden="true"></i>
						<div class="res-line"></div>
						<p class="reservations-label-text">
								Час візиту
                        </p>
						<input class="reservations-desktop-input ui-timepicker-input" size="5" type="time" id="reservations-hour-selector" autocomplete="off" name="time">
					</div>
				</div>
				<div class="contact-fields-block ts-cleafix">
					<div class="res-phone-input res-align-left">
						<input type="text" id="phone" name="phone">
						<label class="phone-number-placeholder">
								Телефон
                        </label>
					</div>
					<div class="res-email-input res-align-right">
						<input type="text" id="email" name="name">
								<label class="email-placeholder">
									Ім'я
                                </label>
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
					<p class="second-res-row reservations-details-line1">Увага!<br>
					<br>Ресторан працює з 12.00 до 22.00. По п'ятницях, суботах та неділях - до 22.00<br>
					<br>Шановні гості! В обідній та вечірній час рекомендуємо бронювати столики. <br>
					<br>Для резерву, будь ласка, оберіть дату та час, і заповніть контактну<br>інформацію в зазначеному розділі або зателефонуйте за номером<br>+38 (068) 096 49 49 з 12:00 до 22:00.</p>


					<p class="second-res-row reservations-details-line2"></p>
				</div>
			</div>
			<input id="opentable-res-name" name="opentable-res-name" type="hidden" value="">
		</div>

		<div class="contact-fields">
			<!-- reservation submission button - triggers ajax request -->
			<div class="submit">
				<button class="reservations-submit reservations-effect no-load">
						ЗАБРОНЮВАТИ
				</button>
			</div>
		</div>
	</div>
</form>
</section>
