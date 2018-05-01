<table style="width: 100%;">
	<tr>
		<td>Email</td>
	</tr>
	@foreach ($data as $key => $value)
		<tr>
			<td>{!!$key!!}</td>
			<td>{!!$value!!}</td>
		</tr>
	@endforeach
</table>
