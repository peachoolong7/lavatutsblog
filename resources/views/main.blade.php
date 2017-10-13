<!DOCTYPE html>
<html lang="en">
@include('partial._head')
<body>

@include('partial._nav')


<div class="container">


    @include('partial._messages')

   {{-- {{Auth::check()?"Logged In":"Not Logged In"}}
--}}    @yield('content')


    @include('partial._footer')
</div>

@include('partial._javascript')


@yield('scripts');
</body>
</html>