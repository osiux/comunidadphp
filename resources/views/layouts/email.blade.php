<!DOCTYPE html>
<html lang="en-es">
<head>
    <meta charset="utf-8">
</head>
<body link="000">
<table width="100%" cellpadding="0" cellspacing="0" align="center" bgcolor="#ccc">
    <tr>
        <td width="10%" style="padding: 0 10px">
            <img src="{{ asset('images/logo.png') }}" alt="Comunidad de PHP">
        </td>
        <td style="color: #000; padding-left: 10px" align="left">
            @yield('title')
        </td>
    </tr>
    <tr>
        <td width="100%" colspan="2" align="justify" style="padding: 10px; color: #000">
            @yield('content')
        </td>
    </tr>
</table>
</body>
</html>