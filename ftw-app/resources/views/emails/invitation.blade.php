<table>
	<tr>
    	<td>Email</td>
        <td>:</td>
        <td>{{ $to_email }}</td>
    </tr>
    <tr>
    	<td>Secret Passcode</td>
        <td>:</td>
        <td>{{ $pass_code }}</td>
    </tr>
      <tr>
    	<td>Invited By</td>
        <td>:</td>
        <td>{{ $user->email }}</td>
    </tr>
</table>

<a href="{{ $link }}" target="_blank">Click here to accept</a>