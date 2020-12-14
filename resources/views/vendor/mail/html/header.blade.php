<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Skillpark Inc.')
<img src="{{ asset('images/logo/biglogo.png') }}" class="logo" style="width: 200px;height:auto" alt="Skillpark Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
