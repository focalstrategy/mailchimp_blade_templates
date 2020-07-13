@extends('email_template::base')

@section('body')
<!-- MODULE ROW // -->
<tr>
	<td align="center" valign="top">
		<!-- CENTERING TABLE // -->
		<table border="0" cellpadding="0" cellspacing="0" width="100%">
			<tr>
				<td align="center" valign="top">
					<!-- FLEXIBLE CONTAINER // -->
					<table border="0" cellpadding="0" cellspacing="0" width="600" class="flexibleContainer">
						<tr>
							<td align="center" valign="top" width="600" class="flexibleContainerCell bottomShim">
								<table border="0" cellpadding="0" cellspacing="0" width="100%" class="nestedContainer">
									<tr>
										<td align="center" valign="top" class="nestedContainerCell">
											<!-- CONTENT TABLE // -->
											<table border="0" cellpadding="0" cellspacing="0" width="100%">
												<tr>
													<td valign="top" class="textContent">
													<h3>@yield('col_1_well_title')</h3>
														<br />
														@yield('col_1_well_content')
													</td>
												</tr>
											</table>
											<!-- // CONTENT TABLE -->
										</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
					<!-- // FLEXIBLE CONTAINER -->
				</td>
			</tr>
		</table>
		<!-- // CENTERING TABLE -->
	</td>
</tr>
<!-- // MODULE ROW -->

<!-- MODULE ROW // -->
<tr>
	<td align="center" valign="top">
		<!-- CENTERING TABLE // -->
		<table border="0" cellpadding="0" cellspacing="0" width="100%">
			<tr>
				<td align="center" valign="top">
					<!-- FLEXIBLE CONTAINER // -->
					<table border="0" cellpadding="0" cellspacing="0" width="600" class="flexibleContainer">
						<tr>
							<td align="center" valign="top" width="600" class="flexibleContainerCell">

								<!-- CONTENT TABLE // -->
								<table border="0" cellpadding="0" cellspacing="0" width="100%">
									<tr>
										<td valign="top" class="textContent">
											<h3>@yield('col_1_title')</h3>
											<br />
											@yield('col_1_content')
										</td>
									</tr>
								</table>
								<!-- // CONTENT TABLE -->
							</td>
						</tr>
					</table>
					<!-- // FLEXIBLE CONTAINER -->
				</td>
			</tr>
		</table>
		<!-- // CENTERING TABLE -->
	</td>
</tr>
<!-- // MODULE ROW -->

<!-- MODULE ROW // -->
<tr>
	<td align="center" valign="top">
		<!-- CENTERING TABLE // -->
		<table border="0" cellpadding="0" cellspacing="0" width="100%">
			<tr>
				<td align="center" valign="top">
					<!-- FLEXIBLE CONTAINER // -->
					<table border="0" cellpadding="0" cellspacing="0" width="600" class="flexibleContainer">
						<tr>
							<td align="center" valign="top" width="600" class="flexibleContainerCell">
								<!-- CONTENT TABLE // -->
								<table border="0" cellpadding="0" cellspacing="0" width="100%">
									<tr>
										<td valign="top" class="textContent">
											<h3>@yield('col_2_title')</h3>
											<br />
											@yield('col_2_content')
										</td>
									</tr>
								</table>
								<!-- // CONTENT TABLE -->
							</td>
						</tr>
					</table>
					<!-- // FLEXIBLE CONTAINER -->
				</td>
			</tr>
		</table>
		<!-- // CENTERING TABLE -->
	</td>
</tr>
<!-- // MODULE ROW -->

<!-- MODULE ROW // -->
<tr>
	<td align="center" valign="top">
		<!-- CENTERING TABLE // -->
		<table border="0" cellpadding="0" cellspacing="0" width="100%">
			<tr>
				<td align="center" valign="top">
					<!-- FLEXIBLE CONTAINER // -->
					<table border="0" cellpadding="0" cellspacing="0" width="600" class="flexibleContainer">
						<tr>
							<td align="center" valign="top" width="600" class="flexibleContainerCell bottomShim">
								<!-- CONTENT TABLE // -->
								<table border="0" cellpadding="0" cellspacing="0" width="260" class="emailButton">
									<tr>
										<td align="center" valign="middle" class="buttonContent">
											<a href="@yield('button_url')" target="_blank">@yield('button_link_text')</a>
										</td>
									</tr>
								</table>
								<!-- // CONTENT TABLE -->
							</td>
						</tr>
					</table>
					<!-- // FLEXIBLE CONTAINER -->
				</td>
			</tr>
		</table>
		<!-- // CENTERING TABLE -->
	</td>
</tr>
@yield('button2')


<!-- // MODULE ROW -->


<!-- MODULE ROW // -->
<tr>
	<td align="center" valign="top">
		<!-- CENTERING TABLE // -->
		<table border="0" cellpadding="0" cellspacing="0" width="100%">
			<tr>
				<td align="center" valign="top">
					<!-- FLEXIBLE CONTAINER // -->
					<table border="0" cellpadding="0" cellspacing="0" width="600" class="flexibleContainer">
						<tr>
							<td align="center" valign="top" width="600" class="flexibleContainerCell bottomShim">
								<!-- CONTENT TABLE // -->
								<table border="0" cellpadding="0" cellspacing="0" width="260" class="emailButtonSecondary">
									<tr>
										<td align="center" valign="middle" class="buttonContent">
											<a href="@yield('close_button_url')" target="_blank">@yield('close_button_link_text')</a>
										</td>
									</tr>
								</table>
								<!-- // CONTENT TABLE -->
							</td>
						</tr>
					</table>
					<!-- // FLEXIBLE CONTAINER -->
				</td>
			</tr>
		</table>
		<!-- // CENTERING TABLE -->
	</td>
</tr>
<!-- // MODULE ROW -->
@stop
