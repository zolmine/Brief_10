<!DOCTYPE html>
<html  lang="">
@include('actions.head')
@include('actions.nav')
<body class="bg-blue-500">
@yield('posts')
@yield('postCreation')
@yield('singlePost')
@yield('login')
@yield('register')
</body>
@include('actions.footer')
</html>
